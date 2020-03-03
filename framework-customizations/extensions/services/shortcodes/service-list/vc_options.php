<?php

$shortcode = slz_ext( 'shortcodes' )->get_shortcode( 'service_list' );


$description     = array(
	esc_html__( 'Description meta', 'holycross' ) => 'des',
	esc_html__( 'Excerpt', 'holycross' )	      => 'excerpt'
);

$yes_no  = array(
	esc_html__('Yes', 'holycross')			     => 'yes',
	esc_html__('No', 'holycross')		         => 'no'
);
$show_icon  = array(
	esc_html__('Show Icon', 'holycross')	        => 'icon',
	esc_html__('Show Image', 'holycross')           => 'image',
    esc_html__('Show Featured Images', 'holycross') => 'feature-image'
);
$column = array(
	esc_html__( 'One', 'holycross' )   	 	 => '1',
	esc_html__( 'Two', 'holycross' )   		 => '2',
	esc_html__( 'Three', 'holycross' ) 		 => '3',
	esc_html__( 'Four', 'holycross' )  		 => '4'
);
$method = array(
	esc_html__( 'Category', 'holycross' )	=> 'cat',
	esc_html__( 'Service', 'holycross' ) 	=> 'service'
);
$sort_by = SLZ_Params::get('sort-other');

$args       = array('post_type' => 'slz-service');
$options    = array('empty'     => esc_html__( '-All Services-', 'holycross' ) );
$services   = SLZ_Com::get_post_title2id( $args, $options );

$taxonomy   = 'slz-service-cat';
$params_cat = array('empty'   => esc_html__( '-All Service Categories-', 'holycross' ) );
$categories = SLZ_Com::get_tax_options2slug( $taxonomy, $params_cat );

$styles = array(
	esc_html__('Florida','holycross')    => '',
	esc_html__('California','holycross') => 'style-vertical'
);

$align = array(
	esc_html__('Center', 'holycross')    => '',
	esc_html__('Left', 'holycross')      => 'left',
	esc_html__('Right', 'holycross')     => 'right'
);

$params = array(
	array(
		'type'            => 'dropdown',
		'heading'         => esc_html__( 'Style', 'holycross' ),
		'param_name'      => 'style',
		'value'           => $styles,
		'description'     => esc_html__( 'Choose style to display on frontend.', 'holycross' ),
	),
	array(
		'type'        	  => 'dropdown',
		'heading'     	  => esc_html__( 'Align', 'holycross' ),
		'param_name'  	  => 'align',
		'value'       	  => $align,
		'description' 	  => esc_html__( 'Choose align for block.', 'holycross' ),
		'dependency'      => array(
			'element'     => 'style',
			'value'       => array( 'style-vertical' )
		)
	),
	array(
		'type'            => 'dropdown',
		'heading'      	  => esc_html__( 'Show Icon or Image', 'holycross' ),
		'param_name'  	  => 'show_icon',
		'value'       	  => $show_icon,
		'std'      		  => 'icon',
		'description' 	  => esc_html__( 'Choose show icon or image of service.', 'holycross' )
	),
	array(
		'type'            => 'checkbox',
		'heading'         => esc_html__( 'Show Numerical Order?', 'holycross' ),
		'param_name'      => 'show_number',
		'description'     => esc_html__( 'Displays the number order of each item', 'holycross' ),
		'dependency'      => array(
			'element'     => 'show_icon',
			'value'       => array( 'icon' )
		)
	),
	array(
		'type'            => 'dropdown',
		'heading'      	  => esc_html__( 'Description', 'holycross' ),
		'param_name'  	  => 'description',
		'value'       	  => $description,
		'description' 	  => esc_html__( 'Choose what content of service to display.', 'holycross' )
	),
	array(
		'type'            => 'dropdown',
		'heading'      	  => esc_html__( 'Column', 'holycross' ),
		'param_name'  	  => 'column',
		'value'       	  => $column,
		'std'      		  => '3',
		'description' 	  => esc_html__( 'Choose number column will be displayed.', 'holycross' )
	),
	array(
		'type'        	  => 'dropdown',
		'heading'     	  => esc_html__( 'Show Pagination', 'holycross' ),
		'param_name'  	  => 'pagination',
		'value'       	  => $yes_no,
		'std'      		  => 'no',
		'description' 	  => esc_html__( 'If choose Yes, block will be show pagination.', 'holycross' ),
		'dependency'      => array(
			'element'     => 'is_carousel',
			'value'       => array( 'no' )
		)
	),
	array(
		'type'            => 'textfield',
		'heading'         => esc_html__( 'Button Text', 'holycross' ),
		'param_name'      => 'btn_content',
		'value'           => esc_html__( 'Read More', 'holycross' ),
		'description'     => esc_html__( 'Enter block button text.', 'holycross' )
	),
	array(
		'type'            => 'textfield',
		'heading'         => esc_html__( 'Limit Posts', 'holycross' ),
		'param_name'      => 'limit_post',
		'value'           => '-1',
		'description'     => esc_html__( 'Add limit posts per page. Set -1 or empty to show all.', 'holycross' )
	),
	array(
		'type'            => 'textfield',
		'heading'         => esc_html__( 'Offset Posts', 'holycross' ),
		'param_name'      => 'offset_post',
		'value'           => '0',
		'description'     => esc_html__( 'Enter offset to pass over posts. If you want to start on record 6, using offset 5.', 'holycross' )
	),
	array(
		'type'            => 'dropdown',
		'heading'         => esc_html__( 'Sort By', 'holycross' ),
		'param_name'      => 'sort_by',
		'value'           => $sort_by,
		'description'     => esc_html__( 'Select order to display list posts.', 'holycross' ),
	),
	array(
		'type'            => 'textfield',
		'heading'         => esc_html__( 'Extra Class', 'holycross' ),
		'param_name'      => 'extra_class',
		'value'           => '',
		'description'     => esc_html__( 'Add extra class to block.', 'holycross' )
	),
	array(
		'type'            => 'dropdown',
		'heading'         => esc_html__( 'Display By', 'holycross' ),
		'param_name'      => 'method',
		'value'           => $method,
		'description'     => esc_html__( 'Choose service category or special services to display.', 'holycross' ),
		'group'        	  => esc_html__('Filter', 'holycross')
	),
	array(
		'type'            => 'param_group',
		'heading'         => esc_html__( 'Category', 'holycross' ),
		'param_name'      => 'list_category',
		'params'          => array(
			array(
				'type'        => 'dropdown',
				'admin_label' => true,
				'heading'     => esc_html__( 'Add Category', 'holycross' ),
				'param_name'  => 'category_slug',
				'value'       => $categories,
				'description' => esc_html__( 'Choose special category to filter.', 'holycross'  )
			)
		),
		'value'           => '',
		'description'     => esc_html__( 'Choose service category.', 'holycross' ),
		'dependency'      => array(
			'element'     => 'method',
			'value'       => array( 'cat' )
		),
		'group'       	  => esc_html__('Filter', 'holycross')
	),
	array(
		'type'            => 'param_group',
		'heading'         => esc_html__( 'Services', 'holycross' ),
		'param_name'      => 'list_post',
		'params'          => array(
			array(
				'type'        => 'dropdown',
				'admin_label' => true,
				'heading'     => esc_html__( 'Add service', 'holycross' ),
				'param_name'  => 'post',
				'value'       => $services,
				'description' => esc_html__( 'Choose special service to show.',  'holycross'  )
			)
		),
		'value'           => '',
		'dependency'      => array(
			'element'     => 'method',
			'value'       => array( 'service' )
		),
		'description'     => esc_html__( 'Default display all services if no service is selected.', 'holycross' ),
		'group'       	  => esc_html__('Filter', 'holycross')
	),
	array(
		'type'            => 'colorpicker',
		'heading'         => esc_html__( 'Block Background Color', 'holycross' ),
		'param_name'      => 'block_bg_color',
		'value'           => '',
		'description'     => esc_html__( 'Choose background color for this block.', 'holycross' ),
		'group'           => esc_html__('Custom', 'holycross')
	),
	array(
		'type'            => 'colorpicker',
		'heading'         => esc_html__( 'Block Background Hover Color', 'holycross' ),
		'param_name'      => 'block_bg_hv_color',
		'value'           => '',
		'description'     => esc_html__( 'Choose background color for this block when hover.', 'holycross' ),
		'group'           => esc_html__('Custom', 'holycross')
	),
	array(
		'type'            => 'colorpicker',
		'heading'         => esc_html__( 'Icon Color', 'holycross' ),
		'param_name'      => 'icon_color',
		'value'           => '',
		'description'     => esc_html__( 'Choose color for block icon.', 'holycross' ),
		'group'       	  => esc_html__('Custom', 'holycross')
	),
	array(
		'type'            => 'colorpicker',
		'heading'         => esc_html__( 'Icon Border Color', 'holycross' ),
		'param_name'      => 'icon_bd_color',
		'value'           => '',
		'description'     => esc_html__( 'Choose icon border color.', 'holycross' ),
		'group'           => esc_html__('Custom', 'holycross')
	),
	array(
		'type'            => 'colorpicker',
		'heading'         => esc_html__( 'Icon Border Hover Color', 'holycross' ),
		'param_name'      => 'icon_bd_hv_color',
		'value'           => '',
		'description'     => esc_html__( 'Choose icon border color when hover.', 'holycross' ),
		'group'           => esc_html__('Custom', 'holycross')
	),
	array(
		'type'            => 'colorpicker',
		'heading'         => esc_html__( 'Title Color', 'holycross' ),
		'param_name'      => 'title_color',
		'value'           => '',
		'description'     => esc_html__( 'Choose color for block title.', 'holycross' ),
		'group'       	  => esc_html__('Custom', 'holycross')
	),
	array(
		'type'            => 'colorpicker',
		'heading'         => esc_html__( 'Description Color', 'holycross' ),
		'param_name'      => 'des_color',
		'value'           => '',
		'description'     => esc_html__( 'Choose color for block description.', 'holycross' ),
		'group'       	  => esc_html__('Custom', 'holycross')
	),
	array(
		'type'            => 'colorpicker',
		'heading'         => esc_html__( 'Button Color', 'holycross' ),
		'param_name'      => 'btn_color',
		'value'           => '',
		'description'     => esc_html__( 'Choose color for block button.', 'holycross' ),
		'group'       	  => esc_html__('Custom', 'holycross')
	),
	array(
		'type'            => 'colorpicker',
		'heading'         => esc_html__( 'Button Background Color', 'holycross' ),
		'param_name'      => 'btn_bg_color',
		'value'           => '',
		'description'     => esc_html__( 'Choose color for block button background.', 'holycross' ),
		'group'       	  => esc_html__('Custom', 'holycross')
	),
	array(
		'type'            => 'colorpicker',
		'heading'         => esc_html__( 'Carousel Navigation Color', 'holycross' ),
		'param_name'      => 'nav_color',
		'value'           => '',
		'description'     => esc_html__( 'Choose color for block navigation.', 'holycross' ),
		'dependency'      => array(
			'element'     => 'is_carousel',
			'value'       => array( 'yes' )
		),
		'group'       	  => esc_html__('Custom', 'holycross')
	),

	array(
		'type'        	  => 'dropdown',
		'heading'     	  => esc_html__( 'Is Carousel ?', 'holycross' ),
		'param_name'  	  => 'is_carousel',
		'value'       	  => $yes_no,
		'std'      		  => 'no',
		'description' 	  => esc_html__( 'If choose Yes, block will be display with carousel style.', 'holycross'),
		'group'           => esc_html__('Slide Custom', 'holycross')
	),
	array(
		'type'            => 'dropdown',
		'heading'     	  => esc_html__( 'Show Dots ?', 'holycross' ),
		'param_name'  	  => 'show_dots',
		'value'       	  => $yes_no,
		'std'      		  => 'yes',
		'description' 	  => esc_html__( 'If choose Yes, block will be show dots.', 'holycross' ),
		'group'           => esc_html__('Slide Custom', 'holycross'),
		'dependency'    => array(
			'element'   => 'is_carousel',
			'value'     => array( 'yes' )
		)
	),
	array(
		'type'        	  => 'dropdown',
		'heading'     	  => esc_html__( 'Show Arrow ?', 'holycross' ),
		'param_name'  	  => 'show_arrows',
		'value'       	  => $yes_no,
		'std'      		  => 'yes',
		'description' 	  => esc_html__( 'If choose Yes, block will be show arrow.', 'holycross' ),
		'group'           => esc_html__('Slide Custom', 'holycross'),
		'dependency'    => array(
			'element'   => 'is_carousel',
			'value'     => array( 'yes' )
		)
	),
	array(
		'type'        	  => 'dropdown',
		'heading'     	  => esc_html__( 'Is Auto Play ?', 'holycross' ),
		'param_name'  	  => 'slide_autoplay',
		'value'       	  => $yes_no,
		'std'      		  => 'yes',
		'description' 	  => esc_html__( 'Choose YES to slide auto play.', 'holycross' ),
		'group'           => esc_html__('Slide Custom', 'holycross'),
		'dependency'    => array(
			'element'   => 'is_carousel',
			'value'     => array( 'yes' )
		)
	),
	array(
		'type'        	  => 'dropdown',
		'heading'     	  => esc_html__( 'Is Loop Infinite ?', 'holycross' ),
		'param_name'  	  => 'slide_infinite',
		'value'       	  => $yes_no,
		'std'      		  => 'yes',
		'description' 	  => esc_html__( 'Choose YES to slide loop infinite.', 'holycross' ),
		'group'           => esc_html__('Slide Custom', 'holycross'),
		'dependency'    => array(
			'element'   => 'is_carousel',
			'value'     => array( 'yes' )
		)
	),
	array(
		'type'            => 'textfield',
		'heading'         => esc_html__( 'Speed Slide', 'holycross' ),
		'param_name'      => 'slide_speed',
		'value'			  => '',
		'description'     => esc_html__( 'Enter number value. Unit is millisecond. Example: 600.', 'holycross' ),
		'group'           => esc_html__('Slide Custom', 'holycross'),
		'dependency'    => array(
			'element'   => 'is_carousel',
			'value'     => array( 'yes' )
		)
	)
);

$vc_options = array_merge( 
	$params
);
