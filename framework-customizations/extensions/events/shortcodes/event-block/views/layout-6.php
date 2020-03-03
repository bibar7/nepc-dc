<?php if ( ! defined( 'SLZ' ) ) { die( 'Forbidden' ); }

$html_options = array(
    'event_location'  => '<li><span class="link place">%1$s</span></li>',
    'event_address'   => '<li><span class="link address">%1$s</span></li>',
    'event_start_end' => '<li><span class="link time">%1$s</span></li>',
    'event_date'      => '<div class="block-date"><span class="link date-event">
                            <span class="date">%4$s</span>
                            <span class="month">%2$s, %3$s</span>
                          </span></div>'
);

$model->attributes['thumb-size']['small'] = 'full';
$cls_container = '';
if( $model->attributes['is_container'] ){
    $model->attributes['thumb-size'] = '';
    $cls_container = 'container';
}
$cls_padding = '';
if( $model->attributes['has_top_padding'] ){
    $cls_padding = 'has-padding';
}
$child_cover = '</div><div class="'.$cls_container.'"><div class="list-layout column-2 ">';
$inc = 0;
$custom_css = '';
?>

<div class="slz-events-block layout-6 <?php echo esc_attr( $cls_padding ); ?>">
<?php              
while ( $model->query->have_posts() ) {
$model->query->the_post();
$model->loop_index();
if( ! $model->has_thumbnail ){
    $model->attributes['has_image'] = '';
}
if ($inc == 0): ?>
    <div class="main-layout item<?php echo esc_attr($model->get_post_class())?>">
        <div class="slz-block-item-07 <?php echo esc_attr( $model->attributes['has_image'] ); ?> style-1">
                <?php if( ! empty( $model->attributes['image_display'] ) && $model->attributes['image_display'] == 'show' ):
                        if( $model->attributes['event_date_display'] == 'show' ){
                            echo '<div class="'.esc_attr($cls_container).'">';
                            echo ( $model->get_event_date( $html_options ) );
                            echo '</div>';
                        }
                        if(  $model->attributes['has_image'] ){
                            $css = '.sc_event_block_%1$s .slz-events-block.layout-6
                                    .main-layout .block-image a.link {
                                        background-image: url("%2$s");
                                    }';
                            $thumb_id = get_post_thumbnail_id( $model->post_id );
                            if( $model->attributes['image_type'] == 'upload_image' ){
                                $thumb_id = $model->attributes['bg_image'];
                            }
                            $img_url  = wp_get_attachment_image_url( $thumb_id, 'full' );
                            $custom_css .= sprintf( $css, esc_attr( $model->attributes['uniq_id'] ), esc_attr( $img_url ) );
                        }
                        echo ( $model->get_image() );
                    endif;
                ?>
                <div class="block-content-wrapper">
                    <div class="<?php echo esc_attr($cls_container); ?>">
                    <div class="info-panel">
                        <div class="col-left">
                            <div class="block-content">
                                <?php echo ($model->get_title()) ?>
                                <ul class="block-info">
                                    <?php
                                        echo ($model->get_event_start_to_end_day($html_options));
                                        echo ($model->get_event_location($html_options));
                                        echo ($model->get_event_address($html_options));
                                    ?>
                                </ul>
                                <?php echo ($model->get_event_description()) ?>
                            </div>
                        </div>
                        <div class="col-right">
                            <div class="donate-block">
                                <div class="remaining-block">
                                    <span class="price"><?php echo ($model->get_event_remaning()) ?></span>
                                    <span class="text"><?php echo esc_html__('Remaining to helps', 'holycross') ?></span>
                                </div>
                                <div class="slz-progress-bar-01 style-1 donate-bar">
                                    <div class="progress-title">
                                        <span class="progress-label"><?php echo esc_html__('Donated', 'holycross') ?></span>
                                        <span data-from="0" data-to="<?php echo ($model->get_event_progressing()) ?>" data-speed="1200" class="percent"></span>
                                    </div>
                                    <div class="progress">
                                        <div role="progressbar" aria-valuenow="<?php echo ($model->get_event_progressing()) ?>" data-unit='%' aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-striped active">
                                            <span data-from="0" data-to="" data-speed="1200" class="percent"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="raise-goal-block">
                                    <div class="raise">
                                        <span class="title"><?php echo esc_html__('Raised', 'holycross') ?>:</span>
                                        <span class="text"><?php echo ($model->get_event_raised()) ?></span>
                                    </div>
                                    <div class="goal">
                                        <span class="title"><?php echo esc_html__('Goal', 'holycross') ?>:</span>
                                        <span class="text"><?php echo ($model->get_event_goal_donate()) ?></span>
                                    </div>
                                </div>
                                <?php
                                $button_text = esc_html__('Donate Now', 'holycross');
                                if ( isset($model->attributes['btn_text']) && !empty($model->attributes['btn_text']) ) {
                                    $button_text = $model->attributes['btn_text'];
                                }
                                $btn_fomat = '<a href="#donate-modal-%1$s" data-id="%2$s" data-toggle="modal" data-target="#donate-modal-%1$s" class="slz-event-donate slz-btn btn-block-donate">'.esc_html($button_text).'</a>';
                                $button_html = sprintf($btn_fomat, $model->attributes['uniq_id'], $model->post_id);
                                echo wp_kses_post( $button_html );
                                ?>
                            </div>
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
if (function_exists('holycross_get_form_shortcode_donation_pay')) {
    echo holycross_get_form_shortcode_donation_pay($model->attributes['uniq_id']);
}
if ( !empty( $custom_css ) ) {
    do_action('slz_add_inline_style', $custom_css);
}
?>