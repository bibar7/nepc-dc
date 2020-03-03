<?php if ( ! defined( 'SLZ' ) ) { die( 'Forbidden' ); }

$model = new SLZ_Portfolio();
$model->init( $data );

$uniq_id = $model->attributes['uniq_id'];
$block_cls = $model->attributes['extra_class'] . ' ' . $uniq_id;

if( ! $model->query->have_posts() ) {
	return;
}
?>
<div class="slz-shortcode sc_portfolio_list <?php echo esc_attr( $block_cls ); ?>" data-item="<?php echo esc_attr($uniq_id); ?>">
	<?php
	if( !empty($data['category_filter']) ){
		$model->attributes['post_id'] = array();
		$model->attributes['is_ajax'] = true;
		echo ( $model->render_category_tabs() );
	}
	switch ( $model->attributes['layout'] ) {
		case 'layout-1':
			echo slz_render_view( $instance->locate_path('/views/layout-1.php'), compact('model'));
			break;
        case 'layout-4':
            echo slz_render_view( $instance->locate_path('/views/layout-4.php'), compact('model'));
            break;
		default:
			echo slz_render_view( $instance->locate_path('/views/layout-1.php'), compact('model'));
			break;
	}
	?>
</div>
<?php
$custom_css = '';
// Attachment Icon Color
if( !empty($model->attributes['color_icon']) ) {
    $custom_css .= sprintf('.%1$s .tool-list li i { color: %2$s !important;}',
        $model->attributes['uniq_id'], $model->attributes['color_icon']
    );
}
if( !empty($model->attributes['color_icon_hv']) ) {
    $custom_css .= sprintf('.%1$s .tool-list li i:hover { color: %2$s !important;}',
        $model->attributes['uniq_id'], $model->attributes['color_icon_hv']
    );
}
// Attachment Background Color
if( !empty($model->attributes['color_attach_bg']) ) {
    $custom_css .= sprintf('.%1$s .tool-list li { background-color: %2$s;}',
        $model->attributes['uniq_id'], $model->attributes['color_attach_bg']
    );
}
if( !empty($model->attributes['color_attach_bg_hv']) ) {
    $custom_css .= sprintf('.%1$s .tool-list li:hover { background-color: %2$s;}',
        $model->attributes['uniq_id'], $model->attributes['color_attach_bg_hv']
    );
}
// Do action to add inline CSS
if ( !empty( $custom_css ) ) {
    do_action('slz_add_inline_style', $custom_css);
}
?>