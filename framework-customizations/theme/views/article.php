<?php
if ( ! defined( 'SLZ' ) ) {
	exit;
}

if( slz_ext('templates') ) {
	$module->get_post_format_post_view();
}else{
	if ( $module->has_post_thumbnail() ) :
	?>
		<div class="block-image">
		    <a href="<?php echo ( $module->get_url() ); ?>" class="link">
		        <?php echo ( $module->get_featured_image() ); ?>
		    </a>
		</div>
<?php endif;
}
?>
<div class="block-content">
	<ul class="block-info">
		<li>
			<?php
			$format = '<a href="%1$s" class="link date">'.esc_html__('on', 'holycross').' %2$s</a>';
			$post_info = slz_get_db_settings_option('post-info', array());
			if(in_array('date', $post_info)) echo ($module->get_date($format));
			?>
		</li>
	</ul>
	<?php echo ( $module->get_title() );?>
	<ul class="block-info">
		<?php echo ( $module->get_meta_data('', array('date')) );?>
	</ul>

	<div class="block-text"><?php echo ( $module->get_excerpt() ); ?></div>

	<a href="<?php echo ( $module->get_url() ); ?>" class="block-read-more">
		<?php echo esc_html__('Read More', 'holycross'); ?>
		<i class="fa fa-angle-double-right"></i>
	</a>
</div>
