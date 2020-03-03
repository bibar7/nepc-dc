<?php

$style_view = array(
	esc_html__('Vertical', 'holycross')    => '1'
);

$align = array(
	esc_html__('Center', 'holycross')    => 'center',
	esc_html__('Left', 'holycross')      => 'left',
	esc_html__('Right', 'holycross')     => 'right'
);

$icon_type = array(
	esc_html__( 'Visual Composer', 'holycross' )  => '',
	esc_html__('Image Upload', 'holycross')       => '02'
);

$params = array(
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Align', 'holycross' ),
		'param_name'  => 'align',
		'value'       => $align,
		'std'         => 'center',
		'description' => esc_html__( 'Choose position of icon box', 'holycross' )
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Block Background Color', 'holycross' ),
		'param_name'  => 'block_bg_color',
		'value'       => '',
		'description' => esc_html__( 'Choose background color for this block.', 'holycross' )
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Block Background Hover Color', 'holycross' ),
		'param_name'  => 'block_bg_hv_color',
		'value'       => '',
		'description' => esc_html__( 'Choose background color for this block when hover.', 'holycross' )
	),
	// setting icon
	array(
		'type'           => 'dropdown',
		'heading'        => esc_html__( 'Choose Type of Icon', 'holycross' ),
		'param_name'     => 'icon_type',
		'value'          => $icon_type,
		'description'    => esc_html__( 'Choose style to display block.', 'holycross' )
	)
);
$shortcode = slz_ext( 'shortcodes' )->get_shortcode( 'icon_box' );
$icon_dependency = array(
                        'element' => 'icon_type',
                        'value'   => array('')
                    );
$icon_options = $shortcode->get_icon_library_options( $icon_dependency );

$params_02 = array(
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Icon Color', 'holycross' ),
		'param_name'  => 'icon_color',
		'value'       => '',
		'dependency'     => array(
			'element'  => 'icon_type',
			'value'    => array('')
		),
		'description' => esc_html__( 'Choose icon color.', 'holycross' )
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Icon Hover Color', 'holycross' ),
		'param_name'  => 'icon_hv_color',
		'value'       => '',
		'dependency'     => array(
			'element'  => 'icon_type',
			'value'    => array('')
		),
		'description' => esc_html__( 'Choose icon hover color.', 'holycross' )
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Icon Border Color', 'holycross' ),
		'param_name'  => 'icon_bd_color',
		'value'       => '',
		'dependency'     => array(
			'element'  => 'icon_type',
			'value'    => array('')
		),
		'description' => esc_html__( 'Choose icon border color.', 'holycross' )
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Icon Border Hover Color', 'holycross' ),
		'param_name'  => 'icon_bd_hv_color',
		'value'       => '',
		'dependency'     => array(
			'element'  => 'icon_type',
			'value'    => array('')
		),
		'description' => esc_html__( 'Choose icon border color when hover.', 'holycross' )
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Icon Background Color', 'holycross' ),
		'param_name'  => 'icon_bg_color',
		'value'       => '',
		'dependency'     => array(
			'element'  => 'icon_type',
			'value'    => array('')
		),
		'description' => esc_html__( 'Choose icon background color.', 'holycross' )
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Icon Background Hover Color', 'holycross' ),
		'param_name'  => 'icon_bg_hv_color',
		'value'       => '',
		'dependency'     => array(
			'element'  => 'icon_type',
			'value'    => array('')
		),
		'description' => esc_html__( 'Choose icon background hover color.', 'holycross' )
	),
	// end setting icon
	array(
		'type'           => 'attach_image',
		'heading'        => esc_html__( 'Upload Image', 'holycross' ),
		'param_name'     => 'img_up',
		'dependency'     => array(
			'element'  => 'icon_type',
			'value'    => array('02')
		),
		'description'    => esc_html__('Upload image.', 'holycross')
	),
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Title', 'holycross' ),
		'admin_label'    => true,
		'param_name'  => 'title',
		'value'       => '',
		'description' => esc_html__( 'Title. If it blank the block will not have a title', 'holycross' )
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Title Color', 'holycross' ),
		'param_name'  => 'title_color',
		'value'       => '',
		'description' => esc_html__( 'Choose a custom title text color.', 'holycross' )
	),
	array(
		'type'        => 'textarea',
		'heading'     => esc_html__( 'Description', 'holycross' ),
		'param_name'  => 'des',
		'value'       => '',
		'description' => esc_html__( 'Description. If it blank the block will not have a title', 'holycross' )
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Description Color', 'holycross' ),
		'param_name'  => 'des_color',
		'value'       => '',
		'description' => esc_html__( 'Choose a custom description text color.', 'holycross' )
	),
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Button Text', 'holycross' ),
		'param_name'  => 'button_text',
		'value'       => '',
		'description' => esc_html__( 'Button Text. If it blank the block will not have a button', 'holycross' )
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Button Text Color', 'holycross' ),
		'param_name'  => 'button_text_color',
		'value'       => '',
		'description' => esc_html__( 'Choose a custom button text color.', 'holycross' )
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Button Background Color', 'holycross' ),
		'param_name'  => 'button_background_color',
		'value'       => '',
		'description' => esc_html__( 'Choose a custom button background color.', 'holycross' )
	),
	array(
		'type'        => 'vc_link',
		'heading'     => esc_html__( 'Button Link', 'holycross' ),
		'param_name'  => 'button_link',
		'value'       => '',
		'description' => esc_html__( 'Please input button link and button info.', 'holycross' )
	)
);


$vc_options = array(
	array(
		'type'        => 'param_group',
		'heading'     => esc_html__( 'Icon Box - Items', 'holycross' ),
		'param_name'  => 'icon_box_3',
		'params'      => array_merge( $params, $icon_options, $params_02 ),
		'value'       => '',
		'description' => esc_html__( 'List of icon box', 'holycross' )
	)
);