<?php if ( ! defined( 'SLZ' ) ) { die( 'Forbidden' ); }

$cls_container = '';
if( $model->attributes['is_container'] ){
    $cls_container = 'container';
}
$cls_padding = '';
if( $model->attributes['has_top_padding'] ){
    $cls_padding = 'has-padding';
}
$child_cover = '</div><div class="'.$cls_container.'"><div class="list-layout column-2 ">';
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

$button_html = '';
$btn_fomat = '';
if ( isset($model->attributes['btn_type']) && isset($model->attributes['btn_text']) && !empty($model->attributes['btn_type']) )  {
    $button_type = $model->attributes['btn_type'];
    $button_text = $model->attributes['btn_text'];

    if ( empty($button_text) ) {
        $button_text = strtoupper($button_type);
    }

    if ( $button_type == 'donate' ){
        $btn_fomat = '<a href="#donate-modal-%1$s" data-id="%2$s" data-toggle="modal" data-target="#donate-modal-%1$s" class="slz-event-donate slz-btn btn-block-donate">'.esc_html($button_text).'</a>';
    }

    if ($button_type == 'custom') {
        $button_link = $model->attributes['button_link'];
        $button_link = vc_build_link($button_link);
        if ( isset($button_link['url']) ) {
            if (isset($button_link['title']) && !empty($button_link['title']) ) {
                $button_text = $button_link['title'];
            }
            $btn_fomat = '<a href="'.esc_url($button_link['url']).'" class="slz-event-donate slz-btn btn-block-donate">'.esc_html($button_text).'</a>';
        }
    }

    if ($button_type == 'join') {
        $html_options['btn_ticket_text'] = $button_text;
        $btn_fomat = '%3$s';
    }

    if ($button_type ==  'readmore') {
        $btn_fomat = '%4$s';
        $html_options['btn_more_format'] = '<a href="%2$s" class="slz-event-donate slz-btn btn-block-donate">'.esc_html($button_text).'</a>';
    }
}
?>

<div class="slz-events-block layout-5 <?php echo esc_attr( $cls_padding ); ?>">
<?php     
while ( $model->query->have_posts() ) {
$model->query->the_post();
$model->loop_index();

if ($inc == 0):
    ?>
    <div class="main-layout item <?php echo esc_attr($model->get_post_class())?>">
        <div class="slz-block-item-07 style-04">
            <div class="block-content-wrapper">
                <div class="<?php echo esc_attr( $cls_container ); ?>">
                    <div class="info-panel">
                        <div class="col-left">
                            <?php if( $model->attributes['event_date_display'] == 'show' ){
                                        echo ($model->get_event_date($html_options));
                                    }
                            ?>
                            <div class="block-content">
                                <ul class="block-info">
                                    <?php 
                                        echo ($model->get_event_start_to_end_day($html_options));
                                    ?>
                                </ul>
                                    <?php echo ($model->get_title()) ?>
                            </div>
                        </div>
                        <div class="col-right">
                            <ul class="block-info">
                                <?php
                                    echo ($model->get_event_location($html_options));
                                    echo ($model->get_event_address($html_options));
                                ?>
                            </ul>
                            <?php
                            $button_html = sprintf($btn_fomat, $model->attributes['uniq_id'], $model->post_id, $model->get_btn_buy_ticket($html_options), $model->get_btn_more($html_options));
                            echo wp_kses_post( $button_html );
                            ?>
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
if ( $inc > 1 ){
    echo '</div>';
}
?>
<?php if( ! empty( $model->attributes['pagination'] ) && $model->attributes['pagination'] == 'yes' ) {
        echo SLZ_Pagination::paging_nav( $model->query->max_num_pages, 2, $model->query );
} ?>
</div></div>
<?php
if (isset($model->attributes['model_donation_html'])) {
    echo ( $model->attributes['model_donation_html'] );
}
?>