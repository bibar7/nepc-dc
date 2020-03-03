<?php if ( ! defined( 'SLZ' ) ) {
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
$ext = slz()->extensions->get( 'events' );
$unique_id = SLZ_Com::make_id();
$html_render = array();
$id = get_the_ID();
$image_size = array(
	'large'				=> 'full',
	'no-image-large'	=> 'full',
);
$defaults = $ext->get_config('default_values');
$args = array(
	'post_id'    => array( $id ),
	'image_size' => $image_size,
);
$args = array_merge( $defaults, $args );
$model = new SLZ_Event();
$model->init( $args );
$html_options = array(
		'event_attributes'   => '<li><span class="link attributes">%1$s : %2$s</span></li>',	
		'event_location'     => '<li><span class="link place">%1$s</span></li>',
		'category'           => '<li><span class="link category">%1$s</span></li>',
		'event_gallery'      => '<li><span class="link gallery">%1$s</span></li>',
		'event_address'      => '<li><span class="link address">%1$s</span></li>',
		'event_start_end'    => '<li><span class="link time">%1$s</span></li>',
		'price_format'       => '<li><span class="link price">%1$s</span></li>',
		'event_date'         => '<span class="link date-event">
									<span class ="date">%4$s</span>
									<span class ="month">%2$s, %3$s</span>
								</span>'
);
$text_options = array(
	'btn_ticket_text' => esc_html__( 'Join Event', 'holycross' )
);
?>
<div class="slz-main-content padding-top-100">
	<div class="container">
		<div class="slz-blog-detail slz-event slz-event-single <?php echo esc_attr( $slz_container_css['sidebar_layout_class'] ); ?>">
			<div class="row">
				<div id="page-content" class="slz-content-column <?php echo esc_attr( $slz_container_css['content_class'] ); ?>">
					<?php if ( have_posts() ) :
							while ( $model->query->have_posts() ) :
								$model->query->the_post();
								$model->loop_index();
					?>
							<div class="item <?php echo esc_attr($model->get_post_class())?>">
								<div class="slz-block-item-05 style-1">
									<div class="slz-block-item-wrapper">
										<div class="block-date">
										<?php echo ($model->get_event_date( $html_options )); ?></div>
										<div class="block-content">
										    <?php echo ($model->get_title()); ?>
										    <div class="block-content-wrapper">
											    <ul class="block-info">
							                    <?php 
													echo ($model->get_event_start_to_end_day( $html_options ));
													echo ($model->get_category( $html_options ));  
													echo ($model->get_event_location( $html_options ));
													echo ($model->get_event_address( $html_options ));
													echo ($model->get_meta_price( $html_options ));
													echo ($model->get_event_attributes( $html_options ));
							                    ?>
							                    </ul>
								                <?php if($model->post_meta['event_show_donation_progress']): ?>
												<div class="slz-events-block">        
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
												</div>
												<?php endif; ?>
							                    <div class="btn-wrapper">
													<?php echo ($model->get_donate_btn()); ?>
													<?php echo ($model->get_btn_buy_ticket()); ?>
												</div>
										    </div>
										</div>
									</div>
								<div class="clearfix"></div>
								</div>
								<?php 
									$gallery_images = $model->post_meta['gallery_images'];
									if( count( $gallery_images ) > 1 ){
										$slidetoshow = 6;
										if( count( $gallery_images ) < 7 ){
											$slidetoshow = count( $gallery_images ) - 1;
										}
										$shortcode = sprintf('[slz_image_carousel layout="layout-3" slidetoshow="%1$s" img_slider="%2$s"]',
																esc_attr( $slidetoshow ),
																esc_attr($model->get_event_gallery())
															);
							    		echo do_shortcode( $shortcode );
							    	}
							    	else{
							    		echo ( $model->get_image() );
							    	}
								?>
							</div>
							<div class="event-detail-wrapper">
								<div class="entry-content">
									<?php
										the_content( sprintf( '<a href="%s" class="read-more">%s<i class="fa fa-angle-right"></i></a>',
														get_permalink(),
														esc_html__( 'Read more', 'holycross' )
												) );
									?>
									<footer class="entry-footer">
										<?php edit_post_link( __( 'Edit', 'holycross' ), '<span class="edit-link">', '</span>' ); ?>
									</footer>
								</div>
							</div>
							<div class="slz-post-footer">
								<div class="entry-meta">
									<div class="cat-social-wrapper">
										<?php slz_events_post_categories_meta();?>
										<?php slz_events_extra_get_social_share();?>
									</div>
								</div>
							</div>
							<?php
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							?>

					<?php 
							endwhile;
							wp_reset_postdata();
						else: 
							get_template_part( 'default-templates', 'no-content' );  
						endif; // have_posts
					?>

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
<?php get_footer(); ?>