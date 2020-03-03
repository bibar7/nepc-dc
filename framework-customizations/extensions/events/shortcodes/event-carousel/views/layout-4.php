<?php if ( ! defined( 'SLZ' ) ) { die( 'Forbidden' ); }

// Check image show or hide
$has_image = isset( $data['image_display'] ) && $data['image_display'] == 'show' ? 'has-image' : '' ;

// Set format for event model method
$html_options = array(
    'title_format'    => '<a href="%2$s" class="block-title">%1$s</a>',
    'event_date'      => '<div class="block-date"><span class="link date-event"><span class="date">%4$s</span><span class="month">%2$s, %3$s</span></span></div>',
    'event_start_end' => '<li><span class="link time">%1$s</span></li>',
    'event_location'  => '<li><span class="link place">%1$s</span></li>',
    'event_address'   => '<li><span class="link address">%1$s</span></li>',
);

// Html format for render
$html_format = '<div class="main-layout item %1$s"><div class="slz-block-item-07 style-03 ">
                    <div class="col-left">%2$s <div class="block-content">%3$s<ul class="block-info">%4$s%5$s%6$s</ul><div class="block-description">%7$s</div></div></div>
                    <div class="col-right">
                        <div class="coming-soon count-down" data-expire="%8$s">
                            <div class="main-count-wrapper"><div class="main-count"><div class="time days flip"><span class="count curr top">00</span></div><div class="count-height"></div><div class="stat-label">'. esc_html__( 'days', 'holycross' ) .'</div></div></div>
                            <div class="main-count-wrapper"><div class="main-count"><div class="time hours flip"><span class="count curr top">00</span></div><div class="count-height"></div><div class="stat-label">'. esc_html__( 'hours', 'holycross' ) .'</div></div></div>
                            <div class="main-count-wrapper"><div class="main-count"><div class="time minutes flip"><span class="count curr top">00</span></div><div class="count-height"></div><div class="stat-label">'. esc_html__( 'mins', 'holycross' ) .'</div></div></div>
                            <div class="main-count-wrapper"><div class="main-count"><div class="time seconds flip"><span class="count curr top">00</span></div><div class="count-height"></div><div class="stat-label">'. esc_html__( 'secs', 'holycross' ) .'</div></div></div>
                        </div>
                    </div>
                </div></div>';
?>
<div class="slz-carousel-wrapper">
	<div class="carousel-overflow">
		<div class="slz-carousel slz-events-carousel layout-4 has-padding" data-slidestoshow="1" data-autoplay="<?php echo esc_html( $data['slide_autoplay'] ); ?>" data-isdot="<?php echo esc_html( $data['slide_dots'] ); ?>" data-isarrow="<?php echo esc_html( $data['slide_arrows'] ); ?>" data-infinite="<?php echo esc_html( $data['slide_infinite'] ); ?>" data-speed="<?php echo esc_html( $data['slide_speed'] ); ?>">
            <?php
            while ( $model->query->have_posts() ) {
                $model->query->the_post();
                $model->loop_index();
                // Print formatted html ccntent
                printf( $html_format,
                    esc_attr( $model->get_post_class() ),
                    $model->get_event_date( $html_options ),
                    $model->get_title( $html_options ),
                    $model->get_event_start_to_end_day( $html_options ),
                    $model->get_event_location( $html_options ),
                    $model->get_event_address( $html_options ),
                    $model->get_event_description( $html_options ),
                    esc_attr( isset( $model->post_meta['event_date_range']['from'] ) ? $model->post_meta['event_date_range']['from'] : '' )
                );
            }
            $model->reset();
            ?>
		</div>
	</div>
</div>
