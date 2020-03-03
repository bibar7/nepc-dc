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
?>
<div class="element item <?php echo esc_attr( $model->get_post_class() )?>">
        <div class="slz-block-item-07 style-1">
            <?php echo wp_kses_post($model->get_event_date($html_options)) ?>
            <div class="block-content">
                <div class="block-content-wrapper">
                    <?php echo wp_kses_post($model->get_title()) ?>
                    <ul class="block-info">
                        <?php 
                            echo wp_kses_post( $model->get_event_start_to_end_day($html_options) );
                            echo wp_kses_post( $model->get_event_location($html_options) );
                            echo wp_kses_post( $model->get_event_address($html_options) );
                        ?>
                    </ul>
                    <?php if($model->attributes['layout'] == 'layout-6' || $model->attributes['layout'] == 'layout-7'): ?>
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
                                        <span class="text"><?php echo ( $model->get_event_goal_donate()) ?></span>
                                    </div>
                                </div>
                            </div>
                    <?php endif; ?>
                    <?php echo wp_kses_post( $model->get_event_description() ) ?>
                    <a href="<?php echo esc_url( $model->get_permalink() ) ?>" class="slz-btn btn-block-donate"><?php esc_html_e('Read More', 'holycross') ?></a>
                </div>
            </div>
        </div>
</div>