<?php if ( ! defined( 'SLZ' ) ) { die( 'Forbidden' ); }
$inc = 0;
$html_options = array(
    'event_location'  => '<li><span class="link place">%1$s</span></li>',
    'event_address'   => '<li><span class="link address">%1$s</span></li>',
    'event_start_end' => '<li><span class="link time">%1$s</span></li>',
    'event_date'      => '<div class="block-date"><span class="link date-event">
                            <span class="date">%4$s</span>
                            <span class="month">%2$s, %3$s</span>
                          </span></div>'
);
$child_cover = '</div><div class="list-layout column-2 ">';
$html_format = '%1$s
                <div class="block-content">
                    %2$s
                    <ul class="block-info">
                        %3$s
                        %4$s
                        %5$s
                    </ul>
                    <div class="block-description">
                        %6$s
                    </div>
                </div>';
?>
<div class="slz-events-block layout-4">
<?php              
while ( $model->query->have_posts() ) {
$model->query->the_post();
$model->loop_index();
 if ($inc == 0): ?>
    <div class="main-layout item <?php echo esc_attr($model->get_post_class())?>">
        <div class="slz-block-item-07 style-03 ">
            <div class="col-left">
                <?php printf($html_format,
                    $model->get_event_date( $html_options ),
                    $model->get_title(),
                    $model->get_event_start_to_end_day( $html_options ),
                    $model->get_event_location( $html_options ),
                    $model->get_event_address( $html_options ),
                    $model->get_event_description()
                ); ?>
            </div>
            
            <div class="col-right">
                <div class="coming-soon count-down" data-expire="<?php echo esc_attr( ! empty( $model->post_meta['event_date_range']['from'] ) ? $model->post_meta['event_date_range']['from'] : '' ); ?>">
                    <div class="main-count-wrapper">
                        <div class="main-count">
                            <div class="time days flip">
                                <span class="count curr top">00</span>
                            </div>
                            <div class="count-height"></div>
                            <div class="stat-label"><?php echo esc_html__('days', 'holycross') ?></div>
                        </div>
                    </div>
                    <div class="main-count-wrapper">
                        <div class="main-count">
                            <div class="time hours flip">
                                <span class="count curr top">00</span>
                            </div>
                            <div class="count-height"></div>
                            <div class="stat-label"><?php echo esc_html__('hours', 'holycross') ?></div>
                        </div>
                    </div>
                    <div class="main-count-wrapper">
                        <div class="main-count">
                            <div class="time minutes flip">
                                <span class="count curr top">00</span>
                            </div>
                            <div class="count-height"></div>
                            <div class="stat-label"><?php echo esc_html__('mins', 'holycross') ?></div>
                        </div>
                    </div>
                    <div class="main-count-wrapper">
                        <div class="main-count">
                            <div class="time seconds flip">
                                <span class="count curr top">00</span>
                            </div>
                            <div class="count-height"></div>
                            <div class="stat-label"><?php echo esc_html__('secs', 'holycross') ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php else:
        if ( $inc == 1 ){
            echo wp_kses_post( $child_cover );
        }
        $instance = slz_ext( 'shortcodes' )->get_shortcode( 'event_block' );
        echo slz_render_view( $instance->locate_path('/views/block_item.php'), compact('model'));
      endif;
    $inc++;
}//end while
$model->reset();
?></div>
<?php if( ! empty( $model->attributes['pagination'] ) && $model->attributes['pagination'] == 'yes' ) {
        echo SLZ_Pagination::paging_nav( $model->query->max_num_pages, 2, $model->query );
} ?>
</div>