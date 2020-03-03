<?php
$column = array(
	esc_html__( 'One', 'holycross' )    => '1',
	esc_html__( 'Two', 'holycross' )    => '2',
	esc_html__( 'Three', 'holycross' )  => '3',
	esc_html__( 'Four', 'holycross' )   => '4',
);

$yes_no = array(
	esc_html__( 'No', 'holycross' )     => 'no',
	esc_html__( 'Yes', 'holycross' )    => 'yes',
);


$params = array(
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Number of Pricing Box', 'holycross' ),
		'param_name'  => 'column',
		'std'         => '1',
		'value'       => $column,
		'description' => esc_html__( 'Choose number of pricing box to display', 'holycross' )
	),
	array(
        'type'        => 'checkbox',
        'heading'     => esc_html__( 'Show Shadow?', 'holycross' ),
        'param_name'  => 'show_shadow',
        'description' => esc_html__( 'Choose if you want to display shadow', 'holycross' ),    
    ),
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Extra Class', 'holycross' ),
		'param_name'  => 'extra_class',
		'value'       => '',
		'description' => esc_html__( 'Add extra class to block', 'holycross' )
	)
);
$params_tab = array();
foreach( $column as $key=>$val) {
	$i = absint($val);
	$group_name = sprintf( esc_html__('Pricing Box %s', 'holycross'), $i);
	$column_denp = array();
	for( $j=$i ; $j<= count($column); $j++){
		$column_denp[] = "{$j}";
	}
	$item_dependency = array(
			'element'  => 'column',
			'value'    => $column_denp
		);
	$param_tab_item = array(
		array(
			'type'        => 'dropdown',
			'heading'     => esc_html__( 'Active', 'holycross' ),
			'param_name'  => 'active' . $i,
			'std'         => 'no',
			'value'       => $yes_no,
			'description' => esc_html__( 'Choose yes if you want it show as active.', 'holycross' ),
			'group'       => $group_name,
			'dependency'  => $item_dependency,
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Active Color', 'holycross' ),
			'param_name'  => 'active_color1',
			'description' => esc_html__( 'Choose active background color.', 'holycross' ),
			'group'       => $group_name,
			'dependency'     => array(
				'element'  => 'active' . $i,
				'value'    => array('yes')
			),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Mark Label', 'holycross' ),
			'param_name'  => 'label' . $i,
			'value'       => '',
			'description' => esc_html__( 'Please input mark label.', 'holycross' ),
			'group'       => $group_name,
			'dependency'  => $item_dependency,
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Label Text Color', 'holycross' ),
			'param_name'  => 'label_text_color' . $i,
			'description' => esc_html__( 'Choose label text color.', 'holycross' ),
			'group'       => $group_name,
			'dependency'  => $item_dependency,
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Label Background Color', 'holycross' ),
			'param_name'  => 'label_background_color' . $i,
			'description' => esc_html__( 'Choose label background color.', 'holycross' ),
			'group'       => $group_name,
			'dependency'     => array(
				'element'  => 'active' . $i,
				'value'    => array('yes')
			),
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Title', 'holycross' ),
			'param_name'  => 'title' . $i,
			'value'       => '',
			'description' => esc_html__( 'Please input box title.', 'holycross' ),
			'group'       => $group_name,
			'dependency'  => $item_dependency,
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Title Color', 'holycross' ),
			'param_name'  => 'title_color' . $i,
			'description' => esc_html__( 'Choose title color.', 'holycross' ),
			'group'       => $group_name,
			'dependency'  => $item_dependency,
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Unit', 'holycross' ),
			'param_name'  => 'unit' . $i,
			'value'       => '',
			'description' => esc_html__( 'Enter measurement units. Example: $, GBP, EUR, etc.', 'holycross' ),
			'group'       => $group_name,
			'dependency'  => $item_dependency,
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Price', 'holycross' ),
			'param_name'  => 'price' . $i,
			'value'       => '',
			'description' => esc_html__( 'Please input price number.', 'holycross' ),
			'group'       => $group_name,
			'dependency'  => $item_dependency,
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Price Color', 'holycross' ),
			'param_name'  => 'price_color' . $i,
			'description' => esc_html__( 'Choose price color.', 'holycross' ),
			'group'       => $group_name,
			'dependency'  => $item_dependency,
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Separate', 'holycross' ),
			'param_name'  => 'separate' . $i,
			'value'       => '',
			'description' => esc_html__( 'Please input separte. Exp: /, : ', 'holycross' ),
			'group'       => $group_name,
			'dependency'  => $item_dependency,
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Price Subfix', 'holycross' ),
			'param_name'  => 'currency' . $i,
			'value'       => '',
			'description' => esc_html__( 'Please input price subfix. Exp: Month, Hour,..', 'holycross' ),
			'group'       => $group_name,
			'dependency'  => $item_dependency,
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Price Subfix Color', 'holycross' ),
			'param_name'  => 'price_subfix_color' . $i,
			'description' => esc_html__( 'Choose price subfix color.', 'holycross' ),
			'group'       => $group_name,
			'dependency'  => $item_dependency,
		),
		array(
			'type'        => 'textarea',
			'heading'     => esc_html__( 'Sub Title', 'holycross' ),
			'param_name'  => 'sub_title' . $i,
			'value'       => '',
			'description' => esc_html__( 'Please input sub title.', 'holycross' ),
			'group'       => $group_name,
			'dependency'  => $item_dependency,
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Sub Title Color', 'holycross' ),
			'param_name'  => 'sub_title_color' . $i,
			'description' => esc_html__( 'Choose sub title color.', 'holycross' ),
			'group'       => $group_name,
			'dependency'  => $item_dependency,
		),
		array(
			'type'       => 'param_group',
			'heading'    => esc_html__( 'Features', 'holycross' ),
			'param_name' => 'pricing_options' . $i,
			'params'     => array(
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Feature Item', 'holycross' ),
					'param_name'  => 'text',
					'admin_label' => true,
					'value'       => '',
					'description' => esc_html__( 'Please input feature item.', 'holycross' ),
				),
				array(
					'type'        => 'colorpicker',
					'heading'     => esc_html__( 'Feature Item Color', 'holycross' ),
					'param_name'  => 'pricing_options_color',
					'description' => esc_html__( 'Choose feature item color.', 'holycross' ),
				),
			),
			'value'       => '',
			'group'       => $group_name,
			'dependency'  => $item_dependency,
		),
		array(
			'type'        => 'textfield',
			'heading'     => esc_html__( 'Button Text', 'holycross' ),
			'param_name'  => 'btn_text' . $i,
			'value'       => '',
			'description' => esc_html__( 'Please input button text.', 'holycross' ),
			'group'       => $group_name,
			'dependency'  => $item_dependency,
		),
		array(
			'type'        => 'vc_link',
			'heading'     => esc_html__( 'Button Link', 'holycross' ),
			'param_name'  => 'btn_link' . $i,
			'value'       => '',
			'description' => esc_html__( 'Choose button link and info.', 'holycross' ),
			'group'       => $group_name,
			'dependency'  => $item_dependency,
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Button Text Color', 'holycross' ),
			'param_name'  => 'btn_text_color' . $i,
			'description' => esc_html__( 'Choose button text color.', 'holycross' ),
			'group'       => $group_name,
			'dependency'  => $item_dependency,
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Button Background Color', 'holycross' ),
			'param_name'  => 'btn_background_color' . $i,
			'description' => esc_html__( 'Choose button background color.', 'holycross' ),
			'group'       => $group_name,
			'dependency'  => $item_dependency,
		),
		array(
			'type'        => 'colorpicker',
			'heading'     => esc_html__( 'Button Border Color', 'holycross' ),
			'param_name'  => 'btn_border_color' . $i,
			'description' => esc_html__( 'Choose button border color.', 'holycross' ),
			'group'       => $group_name,
			'dependency'  => $item_dependency,
		),
		
		
	);
	$params_tab = array_merge($params_tab, $param_tab_item);
}

$vc_options = array_merge( 
	$params,
	$params_tab
);
