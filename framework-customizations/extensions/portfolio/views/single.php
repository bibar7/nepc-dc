<?php if (!defined('SLZ')) {
    exit; // Exit if accessed directly
} ?>
<?php
/**
 * The template for displaying the service detail content
 *
 * @package WordPress
 * @subpackage solazu-core
 * @since 1.0
 */

get_header();
$slz_container_css = slz_extra_get_container_class();
$html_render = array();

$thumb_size = 'large';

// Label
$team_label     = slz_get_db_settings_option( 'pf-translate-text/pf-team-label', esc_html__( 'Sermon from:', 'holycross' ) );
$category_label = slz_get_db_settings_option( 'pf-translate-text/pf-category-label', esc_html__( 'Categories:', 'holycross' ) );

$html_options = array(
    'category_format'    => '<li><span class="title">'. $category_label .'</span>%1$s</li>',
    'team_format'        => '<li><a href="%2$s" class="block-team"><span class="author-label">'. $team_label .'</span><span class="author-text">%1$s</span></a></li>',
    'date_format'        => '<li><a href="%2$s" class="block-date">'. esc_html__( 'On', 'holycross' ) .' %1$s</a></li>',
);

?>
    <div class="slz-main-content padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="slz-blog-detail slz-portfolio <?php echo esc_attr($slz_container_css['sidebar_layout_class']); ?>">
                <div class="row">
                    <div id="page-content"
                         class="slz-content-column <?php echo esc_attr($slz_container_css['content_class']); ?>">
                        <?php
                        $format_html = '<div class="slz-portfolio-content">
                                            %1$s
                                            <ul class="block-info">%2$s</ul>
                                            %3$s
                                        </div>
                                        %4$s';
                        $id = get_the_ID();
                        $args = array(
                            'post_id' => array( $id ),
                            'image_size' => slz_ext('portfolio')->get_config('image_size/portfolio'),
                            'show_category' => 'yes',
                        );
                        $model = new SLZ_Portfolio();
                        $model->init( $args );
                        $html_options = $model->set_default_options( $html_options );
                        if( $model->query->have_posts() ) {
                            while( $model->query->have_posts() ) {
                                $model->query->the_post();
                                $model->loop_index();
                                $thumbnail = empty( $model->post_meta['gallery_images'] ) ? wp_kses_post( $model->get_post_image( $html_options, $thumb_size, false, true ) ) : wp_kses_post( $model->get_post_gallery() ) ;
                                $title = $model->get_title();
                                $show_meta_info = slz_get_db_settings_option( 'pf-show-meta-info', 'show' );
                                $meta_info = $model->get_single_meta_info();
                                $block_info = !empty( $show_meta_info ) && $show_meta_info == 'show' ? $meta_info['block_info'] : '';
                                $downloads = !empty( $show_meta_info ) && $show_meta_info == 'show' ? $meta_info['attach'] : '';
                                printf( $format_html, $title, $block_info, $thumbnail, $downloads  );
                                $options = array( 'share_text' => esc_html__('Share', 'holycross') );
                                slz_extra_get_social_share( 'social-in-pf', false, $options );
                        ?>
                        <div class="project-detail-wrapper">
                            <div class="entry-content">
                                <?php
                                the_content( sprintf( '<a href="%s" class="read-more">%s<i class="fa fa-angle-right"></i></a>',
                                    get_permalink(),
                                    esc_html__('Read more', 'holycross')
                                ) );

                                wp_link_pages(array(
                                    'before' => '<div class="page-links"><span class="page-links-title">' . esc_html__('Pages:', 'holycross') . '</span>',
                                    'after' => '</div>',
                                    'link_before' => '<span>',
                                    'link_after' => '</span>',
                                ));
                                ?>
                            </div>
                        </div>
                        <div class="slz-project-footer">
                        <?php
                            $model->render_team_box();
                        ?>
                        </div>
                        <?php
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>
                        <?php
                            }
                        }
                        ?>
                    </div>
                    <?php if ($slz_container_css['show_sidebar']) : ?>
                        <div id='page-sidebar'
                             class="slz-sidebar-column slz-widgets <?php echo esc_attr($slz_container_css['sidebar_class']); ?>">
                            <?php dynamic_sidebar($slz_container_css['sidebar']); ?>
                        </div>
                    <?php endif; ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>