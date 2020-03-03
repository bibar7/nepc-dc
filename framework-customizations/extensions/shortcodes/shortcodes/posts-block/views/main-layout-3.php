<?php
$format = get_post_format( $module->post_id );
if( !empty( $format ) ) {
	$post_format = 'slz-format-'.$format;
}else{
	$post_format = '';
}
?>
<div class="slz-block-item-01 style-3 <?php echo esc_attr( $post_format ); ?>">

	<div class="block-image">
		<?php echo ( $module->get_ribbon_date() ); ?>
		<?php if( $image = $module->get_featured_image() ):?>
			<a href="<?php echo esc_url( $module->permalink ); ?>" class="link">
				<?php echo wp_kses_post( $image ); ?>
				<?php
				if( !empty( $format ) ) {
					echo '<i class="icons-'. esc_attr( $format ) .'"></i>';
				}
				?>
			</a>
		<?php endif;?>
	</div>

	<div class="block-content">
		<div class="block-content-wrapper">
			<ul class="block-info">
				<li>
					<?php
					$format = '<a href="%1$s" class="link date">'.esc_html__('on', 'holycross').' %2$s</a>';
					$post_info = slz_get_db_settings_option('post-info', array());
					if(in_array('date', $post_info)) echo ($module->get_date($format));
					?>
				</li>
			</ul>
			<?php echo ( $module->get_title() ); ?>
			<?php if( $module->attributes['main_show_meta'] == 'yes' && $module->attributes['layout'] == 'layout-1' ): ?>
			<ul class="block-info">
				<?php echo ( $module->get_meta_data('', array('date')) ); ?>
			</ul>
			<?php endif; ?>
			<?php
			if( $module->attributes['main_show_excerpt'] == 'yes' && $module->attributes['layout'] == 'layout-1' ) {
			
				if($excerpt_str = $module->get_excerpt() ){?>
					<div class="block-text"><?php echo wp_kses_post( nl2br( $excerpt_str ) ); ?></div>
				<?php }?>
				
			<?php
			}
			?>
		</div>
	</div>
</div>