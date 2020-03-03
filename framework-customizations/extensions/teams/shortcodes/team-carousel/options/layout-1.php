<?php

$column = array(
	esc_html__( 'One', 'holycross' )      => '1',
	esc_html__( 'Two', 'holycross' )      => '2',
	esc_html__( 'Three', 'holycross' )    => '3',
	esc_html__( 'Four', 'holycross' )     => '4'
);

$yes_no  = array(
	esc_html__('Yes', 'holycross')        => '1',
	esc_html__('No', 'holycross')         => '0'
);

$on_off  = array(
    esc_html__('On', 'holycross')         => '1',
    esc_html__('Off', 'holycross')	    => '0'
);

$vc_options = array(
	array(
		'type'          => 'dropdown',
		'heading'       => esc_html__( 'Column', 'holycross' ),
		'admin_label'   => true,
		'param_name'    => 'column',
		'value'         => $column,
		'std'           => '3',
		'description'   => esc_html__( 'Choose number column will be displayed.', 'holycross' )
	),
	array(
		'type'        	=> 'dropdown',
		'heading'     	=> esc_html__( 'Is Auto Play ?', 'holycross' ),
		'param_name'  	=> 'slide_autoplay',
		'value'       	=> $yes_no,
		'std'      		=> '1',
		'description' 	=> esc_html__( 'Choose YES to slide auto play.', 'holycross' ),
		'group'         => esc_html__('Slide Custom', 'holycross')
	),
    array(
        'type'        	=> 'dropdown',
        'heading'     	=> esc_html__( 'Is Animation ?', 'holycross' ),
        'param_name'  	=> 'slide_animation',
        'value'       	=> $on_off,
        'std'      		=> '1',
        'description' 	=> esc_html__( 'Choose ON to enable Slide animation.', 'holycross' ),
        'group'         => esc_html__('Slide Custom', 'holycross')
    ),
	array(
		'type'        	=> 'dropdown',
		'heading'     	=> esc_html__( 'Is Dots Navigation ?', 'holycross' ),
		'param_name'  	=> 'slide_dots',
		'value'       	=> $yes_no,
		'std'      		=> '1',
		'description' 	=> esc_html__( 'Choose YES to show dot navigation.', 'holycross' ),
		'group'         => esc_html__('Slide Custom', 'holycross')
	),
	array(
		'type'        	=> 'dropdown',
		'heading'     	=> esc_html__( 'Is Arrows Navigation ?', 'holycross' ),
		'param_name'  	=> 'slide_arrows',
		'value'       	=> $yes_no,
		'std'      		=> '1',
		'description' 	=> esc_html__( 'Choose YES to show arrow navigation.', 'holycross' ),
		'group'         => esc_html__('Slide Custom', 'holycross')
	),
	array(
		'type'        	=> 'dropdown',
		'heading'     	=> esc_html__( 'Is Loop Infinite ?', 'holycross' ),
		'param_name'  	=> 'slide_infinite',
		'value'       	=> $yes_no,
		'std'      		=> '1',
		'description' 	=> esc_html__( 'Choose YES to slide loop infinite.', 'holycross' ),
		'group'         => esc_html__('Slide Custom', 'holycross')
	),
	array(
		'type'          => 'textfield',
		'heading'       => esc_html__( 'Speed Slide', 'holycross' ),
		'param_name'    => 'slide_speed',
		'value'			=> '600',
		'description'   => esc_html__( 'Enter number value. Unit is millisecond. Example: 600.', 'holycross' ),
		'group'         => esc_html__('Slide Custom', 'holycross')
	),
	array(
		'type'          => 'colorpicker',
		'heading'       => esc_html__( 'Slide Arrow Color', 'holycross' ),
		'param_name'    => 'color_slide_arrow',
		'value'         => '',
		'description'   => esc_html__( 'Choose color slide arrow for slide.', 'holycross' ),
		'dependency'    => array(
			'element'   => 'slide_arrows',
			'value'     => array( '1' )
		),
		'group'       	=> esc_html__('Custom', 'holycross')
	),
	array(
		'type'          => 'colorpicker',
		'heading'       => esc_html__( 'Slide Arrow Color Hover', 'holycross' ),
		'param_name'    => 'color_slide_arrow_hv',
		'value'         => '',
		'description'   => esc_html__( 'Choose color slide arrow for slide when hover.', 'holycross' ),
		'dependency'    => array(
			'element'   => 'slide_arrows',
			'value'     => array( '1' )
		),
		'group'       	=> esc_html__('Custom', 'holycross')
	),
	array(
		'type'          => 'colorpicker',
		'heading'       => esc_html__( 'Slide Arrow Background Color', 'holycross' ),
		'param_name'    => 'color_slide_arrow_bg',
		'value'         => '',
		'description'   => esc_html__( 'Choose background color slide arrow for slide.', 'holycross' ),
		'dependency'    => array(
			'element'   => 'slide_arrows',
			'value'     => array( '1' )
		),
		'group'       	=> esc_html__('Custom', 'holycross')
	),
	array(
		'type'          => 'colorpicker',
		'heading'       => esc_html__( 'Slide Arrow Background Color Hover', 'holycross' ),
		'param_name'    => 'color_slide_arrow_bg_hv',
		'value'         => '',
		'description'   => esc_html__( 'Choose background color slide arrow for slide when hover.', 'holycross' ),
		'dependency'    => array(
			'element'   => 'slide_arrows',
			'value'     => array( '1' )
		),
		'group'       	=> esc_html__('Custom', 'holycross')
	),
	array(
		'type'          => 'colorpicker',
		'heading'       => esc_html__( 'Slide Dots Color', 'holycross' ),
		'param_name'    => 'color_slide_dots_at',
		'value'         => '',
		'description'   => esc_html__( 'Choose color slide dots for slide.', 'holycross' ),
		'dependency'    => array(
			'element'   => 'slide_dots',
			'value'     => array( '1' )
		),
		'group'       	=> esc_html__('Custom', 'holycross')
	)
);