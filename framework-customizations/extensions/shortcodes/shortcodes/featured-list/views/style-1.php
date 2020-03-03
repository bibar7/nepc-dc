<?php
$class_show = '';
if (  $item['show_options'] == 'image' ){
    $class_show = 'slz-class-image';
}
if( !empty( $item['align'] ) ){
    $class_show .= ' ' . $item['align'];
}

?>
<div class="item">
	<div class="slz-icon-box-1 style-vertical <?php echo esc_attr( $class_show ); ?>">
		<div class="icon-cell">
			<?php if( $item['show_options'] == 'image' ) : ?>
				<?php if( !empty( $item['image'] ) ) : ?>
					<div class="wrapper-icon-image"><?php echo wp_get_attachment_image( $item['image'], 'full', false, array('class' => 'slz-icon-img') ); ?></div>
				<?php endif; ?>
			<?php else:
					$shortcode = slz_ext( 'shortcodes' )->get_shortcode( 'featured_list' );
					$format = '<div class="wrapper-icon"><i class="slz-icon %1$s"></i></div>';
					print ( $shortcode->get_icon_library_views( $item, $format ) );
				endif;
			?>
		</div>
		<?php if( !empty( $item['text'] ) or !empty( $item['description'] )): ?>
			<div class="content-cell">
				<div class="wrapper-info">
					<?php if(!empty( $item['text'] )): ?>
					<div class="title"><?php echo wp_kses_post( nl2br( $item['text'] ) ); ?></div>
					<?php endif;?>
					<?php if(!empty( $item['description'] )): ?>
					<div class="description"><?php echo wp_kses_post( nl2br( $item['description'] ) ); ?></div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>
