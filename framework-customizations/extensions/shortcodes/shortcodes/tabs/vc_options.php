<?php

$shortcode = slz_ext( 'shortcodes' )->get_shortcode( 'tabs' );
$tab_align = array(
	esc_html__( 'Align Left', 'holycross' ) => 'text-l',
	esc_html__( 'Align Center', 'holycross' ) => 'text-c',
	esc_html__( 'Align Right', 'holycross' ) => 'text-r'
); 
$attributes = 
	array(
	'type'        => 'attach_image',
	'heading'     => esc_html__( ' Add Image', 'holycross' ),
	'param_name'  => 'image',
	'value'       => '',
	'dependency' => array(
		'element' => 'add_icon',
		'value_not_equal_to'   => 'true',
	),
	'description' => esc_html__( 'Add an image to show on tab.', 'holycross' ), 
);

if ( is_plugin_active( 'js_composer/js_composer.php' ) ) {
	vc_add_param( 'vc_tta_section', $attributes );
	vc_remove_param( 'vc_tta_section', 'el_class' );
	vc_remove_param( 'vc_tta_section', 'i_position' );
}


$params = array(
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Layout', 'holycross' ),
		'param_name'  => 'style',
		'std'         => 'style-1',
		'value'       => $shortcode->get_styles(),
		'description' => esc_html__( 'Choose style for tab.', 'holycross'  ),
	),
	array(
		'type'		  => 'dropdown',
		'heading'	  => esc_html__( 'Tab Align', 'holycross' ),
		'param_name'	  => 'tab_align',
		'value'		  => $tab_align,
		'description' 	  => esc_html__( 'Choose tab align for tab.', 'holycross' )	
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Tab Color', 'holycross' ),
		'param_name'  => 'tab_text_color',
		'value'       => '',
		'edit_field_class' => 'vc_col-sm-6 vc_column',
		'group'       => esc_html__('Custom Css', 'holycross'),
		'description' => esc_html__( 'Choose a custom tab text color.', 'holycross' )
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Tab Active Color', 'holycross' ),
		'param_name'  => 'tab_active_text_color',
		'value'       => '',
		'edit_field_class' => 'vc_col-sm-6 vc_column',
		'group'       => esc_html__('Custom Css', 'holycross'),
		'description' => esc_html__( 'Choose a custom active tab text color.', 'holycross' )
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Icon Color', 'holycross' ),
		'param_name'  => 'icon_color',
		'value'       => '',
		'edit_field_class' => 'vc_col-sm-6 vc_column',
		'group'       => esc_html__('Custom Css', 'holycross'),
		'description' => esc_html__( 'Choose icon color.', 'holycross' )
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Icon Hover Color', 'holycross' ),
		'param_name'  => 'icon_hv_color',
		'value'       => '',
		'edit_field_class' => 'vc_col-sm-6 vc_column',
		'group'       => esc_html__('Custom Css', 'holycross'),
		'description' => esc_html__( 'Choose icon hover color.', 'holycross' )
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Icon Background Color', 'holycross' ),
		'param_name'  => 'icon_bg_color',
		'value'       => '',
		'edit_field_class' => 'vc_col-sm-6 vc_column',
		'group'       => esc_html__('Custom Css', 'holycross'),
		'description' => esc_html__( 'Choose icon background color.', 'holycross' )
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Icon Background Hover Color', 'holycross' ),
		'param_name'  => 'icon_bg_hv_color',
		'value'       => '',
		'edit_field_class' => 'vc_col-sm-6 vc_column',
		'group'       => esc_html__('Custom Css', 'holycross'),
		'description' => esc_html__( 'Choose icon background hover color.', 'holycross' )
	),
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Extra Class', 'holycross' ),
		'param_name'  => 'extra_class',
		'description' => esc_html__( 'Please enter your extra class.', 'holycross' ),
	),
);

$vc_options = $params;