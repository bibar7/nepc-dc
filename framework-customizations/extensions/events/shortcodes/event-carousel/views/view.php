<?php if ( ! defined( 'SLZ' ) ) { die( 'Forbidden' ); }

$order_by   = ! empty( $data['sort_by'] ) ? $data['sort_by'] : 'event_from_date';
$order_side = ! empty( $data['sort_order'] ) ? $data['sort_order'] : 'desc';
switch ( $order_by ) {
	case 'event_from_date':
		$query_args = array(
			'meta_key' => 'slz_option:from_date',
			'orderby'  => 'meta_value',
			'order'    => $order_side,
		);
		break;
	case 'event_to_date':
		$query_args = array(
			'meta_key' => 'slz_option:to_date',
			'orderby'  => 'meta_value',
			'order'    => $order_side,
		);
		break;
	default:
		$query_args = array(
			'orderby' => $order_by,
			'order'   => $order_side,
		);
		break;
}

$model = new SLZ_Event();
$model->init( $data, $query_args );

$uniq_id = $model->attributes['uniq_id'];
$block_cls = $model->attributes['extra_class'] . ' ' . $uniq_id;

if( ! $model->query->have_posts() ) {
    return;
}
?>
<div class="slz-shortcode event-slider sc_event_carousel <?php echo esc_attr( $block_cls ); ?> sc_event_block slz-events-block">
	<?php if( !empty( $data['title'] ) ): ?>
    <div class="slz-title-shortcode"><?php echo esc_html( $data['title'] ); ?></div>
    <?php endif; ?>
    <?php
    switch ( $model->attributes['layout'] ) {
        case 'layout-1':
	        echo slz_render_view( $instance->locate_path('/views/layout-1.php'), compact('model', 'data'));
            break;
        case 'layout-4':
            echo slz_render_view( $instance->locate_path('/views/layout-4.php'), compact('model', 'data'));
            break;
        case 'layout-6':
            echo slz_render_view( $instance->locate_path('/views/layout-6.php'), compact('model', 'data'));
            break;
        case 'layout-7':
            echo slz_render_view( $instance->locate_path('/views/layout-7.php'), compact('model', 'data'));
            break;
        default:
            echo slz_render_view( $instance->locate_path('/views/layout-1.php'), compact('model', 'data'));
    }
    ?>
</div>
