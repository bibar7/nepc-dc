<?php if ( ! defined( 'SLZ' ) ) {
	exit; // Exit if accessed directly
} ?>
<?php
/**
 * The template for displaying the event archive content
 *
 *
 * @package WordPress
 * @subpackage solazu-core
 * @since 1.0
 */

get_header();

$is_action = false;
if ( isset($_POST['action']) ) {
    $action = $_POST['action'];
    if ( $action == 'auto-search' ) {
        $is_action=true;
        $_POST['keyword'] = $_POST['keywords'];
        $params = json_encode($_POST);
    }
}

// get sidebar
$slz_container_css = slz_extra_get_container_class();

$ext = slz()->extensions->get( 'events' );
$taxonomy = $ext->get_taxonomy_name();
//check exists taxonomy
$slz_category_slug = '';
if( is_tax( $taxonomy ) ){
	$queried_object   = get_queried_object();
	$slz_category_slug =  $queried_object->slug;
}

$limit_post = slz_get_db_settings_option('event-ac-limit_post', '');
if( empty( $limit_post ) ){
	$limit_post = get_option('posts_per_page');
}
?>
<div class="slz-main-content padding-top-100 padding-bottom-100">
	<div class="container">
		<div class="slz-events-archive <?php echo esc_attr( $slz_container_css['sidebar_layout_class'] ); ?>">
			<div class="row">
				<div id="page-content" class="slz-content-column <?php echo esc_attr( $slz_container_css['content_class'] ); ?>">
					<div class="event-archive-wrapper">
						<div class="slz-event-search event-search-form"
                        <?php
                        if ($is_action) {
                            echo 'autoload data-json="'.esc_attr($params).'"';
                        }
                        ?>
                        >
                            <div class="search-group">
                                <div class="form-group date">
                                    <span class="title"><?php esc_html_e( 'Events From', 'holycross' ); ?></span>
                                    <input type="text" placeholder="<?php esc_attr_e( 'Date', 'holycross' ); ?>" class="form-control event-search-datepicker start_date">
                                </div>
                                <div class="form-group">
                                    <span class="title"><?php esc_html_e( 'Location', 'holycross' ); ?></span>
                                    <input type="text" placeholder="<?php esc_attr_e( 'Location', 'holycross' ); ?>" class="form-control location">
                                </div>
                                <div class="form-group events">
                                    <span class="title"><?php esc_html_e( 'Search Events', 'holycross' ); ?></span>
                                    <input type="text" placeholder="<?php esc_attr_e( 'Enter keywords', 'holycross' ); ?>" class="form-control keywords">
                                </div>
                                <div class="form-group submit">
                                    <button type="button" class="slz-btn slz-btn-search btn-submit"><?php esc_html_e( 'Find Event', 'holycross' ); ?></button>
                                </div>
                            </div>
                        </div>
                        <div class="event-search-loading"></div>
                        <div class="event-search-result">
                            <?php
                            $path = slz_ext( 'events' )->locate_view_path( 'ajax-event-list' );
                            if ( ! empty( $path ) ) {
                                $params = array();
                                if ($is_action) {
                                    $params = $_POST;
                                }
                                echo slz_render_view( $path, compact('params') );
                            }
                            ?>
                        </div>
					</div>

				</div>
				<?php if ( $slz_container_css['show_sidebar'] ) :?>
					<div id='page-sidebar' class="slz-sidebar-column slz-widgets <?php echo esc_attr( $slz_container_css['sidebar_class'] ); ?>">
						<?php dynamic_sidebar( $slz_container_css['sidebar'] ); ?>
					</div>
				<?php endif; ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();