<?php if ( ! defined( 'SLZ' ) ) {
    die( 'Forbidden' );
}

$shortcode = slz_ext( 'shortcodes' )->get_shortcode( 'events_search' );

$block_class = 'events-search'.SLZ_Com::make_id();

$block_cls = $block_class.' '.$data['extra_class'];
?>
<div class="slz-shortcode sc_events_search <?php echo esc_attr( $block_cls ) ?>">
    <div class="slz-event-search event-search-form">
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
            <form class="sc_form_events_search" action="../event" style="display: none" method="POST">
                <input type="text" name="action" value="auto-search">
                <input type="text" name="start_date">
                <input type="text" name="location">
                <input type="text" name="keywords">
            </form>
        </div>
    </div>
</div>