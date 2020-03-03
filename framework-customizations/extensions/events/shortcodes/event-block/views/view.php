<?php if ( ! defined( 'SLZ' ) ) { die( 'Forbidden' ); }
$data['uniq_id'] = SLZ_Com::make_id();
if (isset($data['btn_type']) && $data['btn_type'] == 'donate') {
    if (function_exists('holycross_get_form_shortcode_donation_pay')) {
        $data['model_donation_html'] = holycross_get_form_shortcode_donation_pay($data['uniq_id']);
    }
}

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
$block_cls = $model->attributes['extra_class'] . ' sc_event_block_' . $uniq_id;
$has_image = 'has-image';
if( $data['image_display'] != 'show' ) {
    $has_image = '';
}
$model->attributes['has_image'] = $has_image;
$model->attributes['show_searchbar'] = $data['show_searchbar'];

$class_layout = '';
if (isset($model->attributes['layout']) && $model->attributes['layout'] == 'layout-8') {
    $class_layout = 'event-grid';
}
?>
<div class="slz-shortcode sc_event_block <?php echo esc_attr( $block_cls ); ?> <?php echo esc_attr( $class_layout ); ?>">
    <?php if( !empty( $data['title'] ) ): ?>
        <div class="slz-title-shortcode"><?php echo esc_html( $data['title'] ); ?></div>
    <?php endif; ?>
    <?php

    switch ( $model->attributes['layout'] ) {
        case 'layout-1':
            echo slz_render_view( $instance->locate_path('/views/layout-1.php'), compact('model'),true,false,false);
            break;
        case 'layout-2':
            echo slz_render_view( $instance->locate_path('/views/layout-2.php'), compact('model'),true,false,false);
            break;

        case 'layout-3':
            echo slz_render_view( $instance->locate_path('/views/layout-3.php'), compact('model'),true,false,false);
            break;

        case 'layout-4':
            echo slz_render_view( $instance->locate_path('/views/layout-4.php'), compact('model'),true,false,false);
            break;

        case 'layout-5':
            echo slz_render_view( $instance->locate_path('/views/layout-5.php'), compact('model'),true,false,false);
            break;

        case 'layout-6':
            echo slz_render_view( $instance->locate_path('/views/layout-6.php'), compact('model'),true,false,false);
            break;

        case 'layout-7':
            echo slz_render_view( $instance->locate_path('/views/layout-7.php'), compact('model'),true,false,false);
            break;

        case 'layout-8':
            echo slz_render_view( $instance->locate_path('/views/layout-8.php'), compact('model'),true,false,false);
            break;

        default:
            echo slz_render_view( $instance->locate_path('/views/layout-1.php'), compact('model'),true,false,false);
            break;
    }

    $custom_css = '
        .slz-shortcode.sc_event_block  {
            z-index: inherit;
        }
    ';
    if ( !empty( $custom_css ) ) {
        do_action('slz_add_inline_style', $custom_css);
    }
    ?>
</div>