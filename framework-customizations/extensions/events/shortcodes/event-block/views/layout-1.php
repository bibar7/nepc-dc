<?php if ( ! defined( 'SLZ' ) ) { die( 'Forbidden' ); }

$html_options = array(
    'event_location'  => '<li><span class="link place">%1$s</span></li>',
    'event_address'   => '<li><span class="link address">%1$s</span></li>',
    'event_start_end' => '<li><span class="link time">%1$s</span></li>',
    'event_date'	  => '<span class="link date-event">
                            <span class="date">%4$s</span>
                            <span class="month">%2$s, %3$s</span>
                        </span>'
);
$class_column = 'slz-column-'.$model->attributes['column'];
?>

<div class="slz-events-block slz-list-block <?php echo esc_attr( $class_column ); ?> layout-1">
<?php              
while ( $model->query->have_posts() ) {
$model->query->the_post();
$model->loop_index();

if( ! $model->has_thumbnail ){
	$model->attributes['has_image'] = '';
}

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
<div class="item <?php echo esc_attr($model->get_post_class())?>">
	<div class="slz-block-item-05 <?php echo esc_attr( $model->attributes['has_image'] ); ?> style-1">
		<div class="slz-block-item-wrapper">
			<div class="block-date"><?php echo ($model->get_event_date( $html_options )); ?></div>
			    <?php echo ($model->get_image()); ?>
			<div class="block-content">
			    <?php echo ($model->get_title()); ?>
			    <div class="block-content-wrapper">
			    <ul class="block-info">
	                <?php 
	                    echo ($model->get_event_start_to_end_day( $html_options )); 
	                    echo ($model->get_event_location( $html_options )); 
	                    echo ($model->get_event_address( $html_options ));
	                    ?>
                </ul>
                <?php  if($model->attributes['donation_progress'] == 'show'):
                            ?>
                            <div class="donate-block">
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
                                        <span class="text"><?php echo ( $model->get_event_goal_donate() ) ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                <?php echo wp_kses_post($model->get_event_description()); ?>
			    </div>
			    </div>
			</div>
			<?php if( !empty( $model->attributes['btn_text'] ) ):?>
				<div class="slz-btn-wrapper">
					<?php
                    $button_html = sprintf($btn_fomat, $model->attributes['uniq_id'], $model->post_id, $model->get_btn_buy_ticket($html_options), $model->get_btn_more($html_options));
                    echo wp_kses_post( $button_html );
                    ?>
				</div>
			<?php endif;?>
		    <div class="clearfix"></div>
	</div>
</div>
<?php }//end while
$model->reset();
?></div>
<?php
if( ! empty( $model->attributes['pagination'] ) && $model->attributes['pagination'] == 'yes' ) {
        echo SLZ_Pagination::paging_nav( $model->query->max_num_pages, 2, $model->query );
}
if (isset($model->attributes['model_donation_html'])) {
    echo ( $model->attributes['model_donation_html'] );
}
?>
