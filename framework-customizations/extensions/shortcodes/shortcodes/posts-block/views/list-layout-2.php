<?php
$post_format = '';
$format = get_post_format( $module->post_id );
if( !empty( $format ) ) {
	$post_format = 'slz-format-'.$format;
}else{
	$post_format = '';
}
?>
<div class="slz-block-item-01 style-2 <?php echo esc_attr( $post_format ); ?>">
	<?php
	if( ( $module->attributes['list_show_image'] == 'no' && $module->attributes['layout'] == 'layout-1' ) || ( $module->attributes['layout'] == 'layout-2' && $module->attributes['list_show_image_2'] == 'no' ) ) {
	}else{
		if( $module->attributes['layout'] == 'layout-2' ) {
		?>
			<div class="block-image">
				<a href="<?php echo esc_url( $module->permalink ); ?>" class="link">
					<?php echo ( $module->get_featured_image() ); ?>
					<?php
						if( !empty( $format ) ) {
							echo '<i class="icons-'. esc_attr( $format ) .'"></i>';
						}
					?>
				</a>
			</div>
		<?php
		}elseif( $module->attributes['layout'] == 'layout-3' )  {
			$module->get_post_format_post_view();
		}
	}
	?>
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
			<?php if( ( $module->attributes['list_show_meta'] == 'no' && $module->attributes['layout'] == 'layout-1' ) || $module->attributes['layout'] == 'layout-2' && $module->attributes['list_show_meta_2'] == 'no'   || ( $module->attributes['layout'] == 'layout-3' && $module->attributes['list_show_meta_3'] == 'no' ) ): ?> 
			<?php else: ?>
					<ul class="block-info">
						<?php echo ( $module->get_meta_data('', array('date')) ); ?>
					</ul>
			<?php endif; ?>
			<?php
			if( ( $module->attributes['list_show_excerpt'] == 'no' && $module->attributes['layout'] == 'layout-1' ) || $module->attributes['layout'] == 'layout-2' && $module->attributes['list_show_excerpt_2'] == 'no'   || ( $module->attributes['layout'] == 'layout-3' && $module->attributes['list_show_excerpt_3'] == 'no' ) ) {
				
			}else{
			
				if($excerpt_str = $module->get_excerpt() ){?>
					<div class="block-text"><?php echo wp_kses_post( nl2br( $excerpt_str ) ); ?></div>
				<?php }?>
			<?php
			}
			?>
			<?php
			if( (!empty($module->attributes['btn_read_more'])) ){

				echo '<a href="'.esc_url( $module->permalink ).'" class="block-read-more">';
					echo esc_attr($module->attributes['btn_read_more']);
					echo '<i class="fa fa-angle-double-right"></i>';
				echo '</a>';

			}?>
		</div>
	</div>
</div>