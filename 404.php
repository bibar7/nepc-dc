<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage HolyCross
 * @since 1.0
 */

$holycross_args = holycross_404_page();
$holycross_illustration_image = $holycross_args['404-illustration'];
get_header(); ?>
<div class="slz-main-content slz-page-404">
	<div class="content-wrapper content-wrapper-404">
		<?php 
		if ( $holycross_illustration_image && !empty ( $holycross_illustration_image['data']['icon'] ) && $holycross_illustration_image['data']['css'] != 'none' ){
			echo '<img class="img-404" src="'.esc_url($holycross_illustration_image['data']['icon']).'" alt="" />';
			
		}
		if( !empty( $holycross_args['title'] ) ){
			echo '<h1 class="title">' . esc_html( $holycross_args['title'] ) . '</h1>';
		}
		if( !empty( $holycross_args['description'] ) ){
			echo '<div class="subtitle">' . wp_kses_post( $holycross_args['description'] ) . '</div>';
		}
		?>
		<div class="group-btn">
			<?php if(!empty($holycross_args['home_text'])){?>
				<a href="<?php echo esc_url(site_url()); ?>" class="slz-btn main-color"><?php echo esc_html($holycross_args['home_text']); ?></a>
			<?php }
			if (!empty($holycross_args['button_text'])){?>
				<a href="<?php echo esc_url($holycross_args['button_link']); ?>" class="slz-btn transparent"><?php echo esc_html($holycross_args['button_text']); ?></a>
			<?php }?>
		</div>
	</div>
</div>
<?php get_footer(); ?>