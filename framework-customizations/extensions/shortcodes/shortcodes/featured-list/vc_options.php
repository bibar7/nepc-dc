<?php
$shortcode = slz_ext( 'shortcodes' )->get_shortcode( 'featured_list' );

$column_arr = array(
	esc_html__( 'None', 'holycross' )  => '',
	esc_html__('One', 'holycross')     => '1',
	esc_html__('Two', 'holycross')     => '2',
	esc_html__('Three', 'holycross')   => '3',
	esc_html__('Four', 'holycross')    => '4'
);

$yes_no  = array(
    esc_html__('Yes', 'holycross')     => 'yes',
    esc_html__('No', 'holycross')	   => 'no'
);

$align = array(
    esc_html__('Center', 'holycross')  => '',
    esc_html__('Left', 'holycross')    => 'left',
    esc_html__('Right', 'holycross')   => 'right'
);

$param_title =  array(
			array(
				'type'           => 'textarea',
				'heading'        => esc_html__( 'Text', 'holycross' ),
				'param_name'     => 'text',
				'admin_label'    => true,
				'description'    => esc_html__( 'Please input text of item', 'holycross' )
			),
            array(
                'type'           => 'textarea',
                'heading'        => esc_html__( 'Description', 'holycross' ),
                'param_name'     => 'description',
                'admin_label'    => true,
                'description'    => esc_html__( 'Please input description of item', 'holycross' )
            ),
            array(
                'type'            => 'dropdown',
                'heading'         => esc_html__( 'Align', 'holycross' ),
                'param_name'      => 'align',
                'value'           => $align,
                'description'     => esc_html__( 'Choose align for block.', 'holycross' ),
                'dependency'      => array(
                    'element'     => 'styles',
                    'value'       => array( 'style-1' )
                )
            ),
			array(
				'type'           => 'dropdown',
				'heading'        => esc_html__( 'Options', 'holycross' ),
				'param_name'     => 'show_options',
				'value'          => $shortcode->get_config('show_options'),
				'std'            => 'icon'
			)
		);
$icon_dependency = array(
                    'element'    => 'show_options',
                    'value'      => array('icon')
                );
$icon_options = $shortcode->get_icon_library_options( $icon_dependency );

$param_image =  array(
			array(
				'type'           => 'attach_image',
				'heading'        => esc_html__( 'Upload Image', 'holycross' ),
				'param_name'     => 'image',
				'description'    => esc_html__('Upload Image.', 'holycross'),
				'dependency'     => array(
					'element'    => 'show_options',
					'value'      => array('image')
				)
			)
		);

$params = array(
    array(
        'type'        => 'dropdown',
        'heading'     => esc_html__( 'Style', 'holycross' ),
    	'admin_label' => true,
        'param_name'  => 'styles',
        'value'       => $shortcode->get_config( 'styles' ),
        'std'         => 'style-1',
        'description' => esc_html__( 'Choose style of feature list', 'holycross' )
    ),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Column', 'holycross' ),
		'param_name'  => 'column',
		'value'       => $column_arr,
		'std'         => '',
		'description' => esc_html__( 'Choose number of columns to show', 'holycross' )
	),
    array(
        'type'        => 'dropdown',
        'heading'     => esc_html__( 'Show number ? ', 'holycross' ),
        'param_name'  => 'show_number',
        'value'       => $yes_no,
        'std'         => 'yes',
        'dependency'  => array(
            'element' => 'styles',
            'value'   => array('style-2'),
        ),
        'description' => esc_html__( 'If choose Yes, block will show number.', 'holycross' )
    ),
	array(
		'type'        => 'param_group',
		'heading'     => esc_html__( 'Featured Items', 'holycross' ),
		'param_name'  => 'feature_list',
		'params'      => array_merge( $param_title, $icon_options, $param_image ),
		'value'       => '',
        'dependency'  => array(
            'element' => 'styles',
            'value'   => array('style-1')
        )
	),
    array(
        'type'        => 'param_group',
        'heading'     => esc_html__( 'List of Feature', 'holycross' ),
        'param_name'  => 'feature_list2',
        'params'      => array(
            array(
                'type'        => 'textfield',
                'heading'     => esc_html__( 'Title', 'holycross' ),
                'param_name'  => 'title',
                'description' => esc_html__( 'Please input title of item', 'holycross' )
            ),
            array(
                'type'        => 'textarea',
                'heading'     => esc_html__( 'Description', 'holycross' ),
                'param_name'  => 'description',
                'description' => esc_html__( 'Please input description of item', 'holycross' )
            )
        ),
        'value'       => '',
        'dependency'  => array(
            'element' => 'styles',
            'value'   => array('style-2')
        )
    )
);

$custom_css = array(
	 array(
        'type'        => 'colorpicker',
        'heading'     => esc_html__( 'Number Color', 'holycross' ),
        'group'       => esc_html__('Custom CSS', 'holycross'),
        'param_name'  => 'number_color',
        'description' => esc_html__( 'Choose a custom color for number.', 'holycross' ),
        'dependency'  => array(
            'element' => 'show_number',
            'value'   => array('yes')
        )
    ),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Text Color', 'holycross' ),
		'param_name'  => 'text_color',
		'description' => esc_html__( 'Choose a custom color for text.', 'holycross' ),
		'group'       => esc_html__('Custom CSS', 'holycross')
	),
    array(
        'type'        => 'colorpicker',
        'heading'     => esc_html__( 'Description Color', 'holycross' ),
        'param_name'  => 'des_color',
        'description' => esc_html__( 'Choose a custom color for description.', 'holycross' ),
        'group'       => esc_html__('Custom CSS', 'holycross'),
        'dependency'  => array(
            'element' => 'styles',
            'value'   => array('style-2')
        )
    ),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Background Color', 'holycross' ),
		'param_name'  => 'background_color',
		'description' => esc_html__( 'Choose a custom color for background.', 'holycross' ),
		'group'       => esc_html__('Custom CSS', 'holycross')
	),
    array(
        'type'        => 'colorpicker',
        'heading'     => esc_html__( 'Border Color', 'holycross' ),
        'param_name'  => 'border_color',
        'description' => esc_html__( 'Choose a custom color for border.', 'holycross' ),
        'group'       => esc_html__( 'Custom CSS', 'holycross')
    ),
	array(
		'type'        => 'attach_image',
		'heading'     => esc_html__( 'Background Image', 'holycross' ),
		'param_name'  => 'background_img',
		'description' => esc_html__('Background Image.', 'holycross'),
		'group'       => esc_html__('Custom CSS', 'holycross')
	)
);

$extra_class = array(
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Extra Class', 'holycross' ),
		'param_name'  => 'extra_class',
		'value'       => '',
		'description' => esc_html__( 'Add extra class to button', 'holycross' )
	)
);

$vc_options = array_merge( 
	$params,
	$extra_class,
	$custom_css
);