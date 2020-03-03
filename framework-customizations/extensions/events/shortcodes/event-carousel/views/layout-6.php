<?php if ( ! defined( 'SLZ' ) ) { die( 'Forbidden' ); }

// Check image show or hide
$has_image = isset( $data['image_display'] ) && $data['image_display'] == 'show' ? 'has-image' : '' ;

// Image size
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

// Set format for event model method
$html_options = array(
    'event_date'      => '<div class="block-date"><span class="link date-event"><span class="date">%4$s</span><span class="month">%2$s, %3$s</span></span></div>',
    'image_format'	  => '<div class="block-image"><a href="%2$s" class="link">%1$s</a></div>',
    'thumb_class' 	  => 'img-responsive img-full',
    'title_format'    => '<a href="%2$s" class="block-title">%1$s</a>',
    'event_start_end' => '<li><span class="link time">%1$s</span></li>',
    'event_location'  => '<li><span class="link place">%1$s</span></li>',
    'event_address'   => '<li><span class="link address">%1$s</span></li>',
);
$block_image = '';
if( ! empty( $model->attributes['image_display'] ) && $model->attributes['image_display'] == 'show' ):
    if( $model->attributes['event_date_display'] == 'show' ){
        $block_image .= '<div class="'.esc_attr($cls_container).'"> %2$s</div>';
    }
    $block_image .= '%3$s';
endif;
// Html format for render
$html_format = '<div class="main-layout item %1$s"><div class="slz-block-item-07 %13$s style-1">
                   '.$block_image.'
                    <div class="block-content-wrapper"><div class="'.esc_attr($cls_container).'"><div class="info-panel">
                        <div class="col-left"><div class="block-content">%4$s<ul class="block-info">%5$s%6$s%7$s</ul><div class="block-description">%8$s</div></div></div>
                        <div class="col-right">
                            <div class="donate-block">
                                 <div class="remaining-block"><span class="price">%9$s</span><span class="text">'. esc_html__('Remaining to helps', 'holycross') .'</span></div>
                                 <div class="slz-progress-bar-01 style-1 donate-bar"><div class="progress-title"><span class="progress-label">'. esc_html__('Donated', 'holycross') .'</span><span data-from="0" data-to="%10$s" data-speed="1200" class="percent"></span></div><div class="progress"><div role="progressbar" aria-valuenow="%10$s" data-unit="%%" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-striped active"><span data-from="0" data-to="" data-speed="1200" class="percent"></span></div></div></div>
                                 <div class="raise-goal-block"><div class="raise"><span class="title">'. esc_html__('Raised:', 'holycross') .'</span><span class="text">%11$s</span></div><div class="goal"><span class="title">'. esc_html__('Goal:', 'holycross') .'</span><span class="text">%12$s</span></div></div>
                                 <a href="#" class="slz-btn btn-block-donate">'. esc_html__('Donate now', 'holycross') .'</a>
                            </div>
                        </div>
                    </div></div></div>
                </div></div>';
?>
<div class="slz-carousel-wrapper">
	<div class="carousel-overflow">
		<div class="slz-carousel slz-events-carousel layout-6 <?php echo esc_attr( $cls_padding ); ?>" data-slidestoshow="<?php echo esc_attr( $data['slide_to_show'] ); ?>" data-autoplay="<?php echo esc_html( $data['slide_autoplay'] ); ?>" data-isdot="<?php echo esc_html( $data['slide_dots'] ); ?>" data-isarrow="<?php echo esc_html( $data['slide_arrows'] ); ?>" data-infinite="<?php echo esc_html( $data['slide_infinite'] ); ?>" data-speed="<?php echo esc_html( $data['slide_speed'] ); ?>">
            <?php
            while ( $model->query->have_posts() ) {
                $model->query->the_post();
                $model->loop_index();
                
                if( ! $model->has_thumbnail ){
                    $has_image = '';
                }
                // Print formatted html ccntent
                printf( $html_format,
                    esc_attr( $model->get_post_class() ),
                    $model->get_event_date( $html_options ),
                    $model->get_image(),
                    $model->get_title( $html_options ),
                    $model->get_event_start_to_end_day( $html_options ),
                    $model->get_event_location( $html_options ),
                    $model->get_event_address( $html_options ),
                    $model->get_event_description( $html_options ),
                    $model->get_event_remaning( $html_options ),
                    $model->get_event_progressing( $html_options ),
                    $model->get_event_raised( $html_options ),
                    $model->get_event_goal_donate( $html_options ),
                    $has_image
                );
            }
            $model->reset();
            ?>
		</div>
	</div>
</div>
