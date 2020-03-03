<?php

$shortcode = slz_ext( 'shortcodes' )->get_shortcode( 'event_carousel' );

$show_hide = $shortcode->get_config( 'show_hide' );
$yes_no = $shortcode->get_config( 'yes_no' );
$filter_method = $shortcode->get_config( 'filter_method' );

$taxonomy = 'slz-event-cat';
$params_cat = array('empty'   => esc_html__( '-All Event Categories-', 'holycross' ) );
$event_cat = SLZ_Com::get_tax_options2slug( $taxonomy, $params_cat );

$args = array('post_type' => 'slz-event');
$options = array('empty'  => esc_html__( '-All Event-', 'holycross' ) );
$events = SLZ_Com::get_post_title2id( $args, $options );

$layouts = array(
	array (
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Layout', 'holycross' ),
		'admin_label' => true,
		'param_name'  => 'layout',
		'value'       => $shortcode->get_layouts(),
		'std'         => 'layout-1',
		'description' => esc_html__( 'Choose layout will be displayed.', 'holycross' ),
	)
);

$filters =  array(
	array(
		'type'          => 'dropdown',
		'heading'       => esc_html__( 'Display By', 'holycross' ),
		'param_name'    => 'method',
		'value'         => $filter_method,
		'description'   => esc_html__( 'Choose team category or special events to display', 'holycross' ),
		'group'         => esc_html__('Filter', 'holycross')
	),
	array(
		'type'          => 'param_group',
		'heading'       => esc_html__( 'Category', 'holycross' ),
		'param_name'    => 'list_category',
		'params'        => array(
			array(
				'type'        => 'dropdown',
				'admin_label' => true,
				'heading'     => esc_html__( 'Add Category', 'holycross' ),
				'param_name'  => 'category_slug',
				'value'       => $event_cat,
				'description' => esc_html__( 'Choose special category to filter', 'holycross'  )
			)
		),
		'value'         => '',
		'description'   => esc_html__( 'Choose Event Category.', 'holycross' ),
		'dependency'    => array(
			'element'   => 'method',
			'value'     => array( 'cat' )
		),
		'group'         => esc_html__('Filter', 'holycross')
	),
	array(
		'type'          => 'param_group',
		'heading'       => esc_html__( 'Events', 'holycross' ),
		'param_name'    => 'list_post',
		'params'        => array(
			array(
				'type'        => 'dropdown',
				'admin_label' => true,
				'heading'     => esc_html__( 'Add Event', 'holycross' ),
				'param_name'  => 'post',
				'value'       => $events,
				'description' => esc_html__( 'Choose special event to show',  'holycross'  )
			)
		),
		'value'         => '',
		'description'   => esc_html__( 'Default display All Event if no event is selected and Number event is empty.', 'holycross' ),
		'dependency'    => array(
			'element'   => 'method',
			'value'     => array( 'event' )
		),
		'group'         => esc_html__('Filter', 'holycross')
	)
);

$slider_options = array(
	array(
		'type'          => 'textfield',
		'heading'       => esc_html__( 'Slide To Show', 'holycross' ),
		'param_name'    => 'slide_to_show',
		'value'         => '',
		'std'           => '3',
		'description'   => esc_html__( 'Enter number of items to show.', 'holycross' ),
		'group'         => esc_html__('Slide Custom', 'holycross')
	),
	array(
		'type'        	=> 'dropdown',
		'heading'     	=> esc_html__( 'Is Auto Play ?', 'holycross' ),
		'param_name'  	=> 'slide_autoplay',
		'value'       	=> $yes_no,
		'std'      		=> 'yes',
		'description' 	=> esc_html__( 'Choose YES to slide auto play.', 'holycross' ),
		'group'         => esc_html__('Slide Custom', 'holycross')
	),
	array(
		'type'        	=> 'dropdown',
		'heading'     	=> esc_html__( 'Is Dots Navigation ?', 'holycross' ),
		'param_name'  	=> 'slide_dots',
		'value'       	=> $yes_no,
		'std'      		=> 'yes',
		'description' 	=> esc_html__( 'Choose YES to show dot navigation.', 'holycross' ),
		'group'         => esc_html__('Slide Custom', 'holycross')
	),
	array(
		'type'        	=> 'dropdown',
		'heading'     	=> esc_html__( 'Is Arrows Navigation ?', 'holycross' ),
		'param_name'  	=> 'slide_arrows',
		'value'       	=> $yes_no,
		'std'      		=> 'yes',
		'description' 	=> esc_html__( 'Choose YES to show arrow navigation.', 'holycross' ),
		'group'         => esc_html__('Slide Custom', 'holycross')
	),
	array(
		'type'        	=> 'dropdown',
		'heading'     	=> esc_html__( 'Is Loop Infinite ?', 'holycross' ),
		'param_name'  	=> 'slide_infinite',
		'value'       	=> $yes_no,
		'std'      		=> 'yes',
		'description' 	=> esc_html__( 'Choose YES to slide loop infinite.', 'holycross' ),
		'group'         => esc_html__('Slide Custom', 'holycross')
	),
	array(
		'type'          => 'textfield',
		'heading'       => esc_html__( 'Speed Slide', 'holycross' ),
		'param_name'    => 'slide_speed',
		'value'			=> '',
		'std'           => '600',
		'description'   => esc_html__( 'Enter number value. Unit is millisecond. Example: 600.', 'holycross' ),
		'group'         => esc_html__('Slide Custom', 'holycross')
	),
);

$custom_tab = array(
	array(
        'type'        => 'colorpicker',
        'heading'     => esc_html__( 'Title Color', 'holycross' ),
        'param_name'  => 'title_color',
        'description' => esc_html__( 'Choose a custom color for title.', 'holycross' ),
        'group'       => esc_html__('Custom Options', 'holycross'),
    ),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Image Display', 'holycross' ),
		'param_name'  => 'image_display',
		'value'       => $show_hide,
		'description' => esc_html__( 'Choose show or hide image.', 'holycross' ),
		'group'       => esc_html__('Custom Options', 'holycross'),
        'dependency'    => array(
            'element'   => 'layout',
            'value'     => array( 'layout-1' )
        )
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Event Date', 'holycross' ),
		'param_name'  => 'event_date_display',
		'value'       => $show_hide,
		'description' => esc_html__( 'Choose show or hide event date.', 'holycross' ),
		'group'       => esc_html__('Custom Options', 'holycross'),
        'dependency'    => array(
            'element'   => 'layout',
            'value'     => array( 'layout-6', 'layout-7' )
        )
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Description', 'holycross' ),
		'param_name'  => 'description_display',
		'value'       => $show_hide,
		'description' => esc_html__( 'Choose show or hide description.', 'holycross' ),
		'group'       => esc_html__('Custom Options', 'holycross'),
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Event Time', 'holycross' ),
		'param_name'  => 'event_time_display',
		'value'       => $show_hide,
		'description' => esc_html__( 'Choose show or hide event time.', 'holycross' ),
		'group'       => esc_html__('Custom Options', 'holycross'),
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Event Location', 'holycross' ),
		'param_name'  => 'event_location_display',
		'value'       => $show_hide,
		'description' => esc_html__( 'Choose show or hide event location.', 'holycross' ),
		'group'       => esc_html__('Custom Options', 'holycross'),
	),
    array(
        'type'        => 'dropdown',
        'heading'     => esc_html__( 'Event Address', 'holycross' ),
        'param_name'  => 'event_address_display',
        'value'       => $show_hide,
        'description' => esc_html__( 'Choose show or hide event address.', 'holycross' ),
        'group'       => esc_html__('Custom Options', 'holycross')
    ),
	array(
		"type"        => "checkbox",
		"heading"     => esc_html__( "Has Container?", 'holycross' ),
		"param_name"  => "is_container",
		'description' => esc_html__( 'Show container class to display fullwidth.', 'holycross' ),
		'group'       => esc_html__( 'Custom Options', 'holycross' ),
        'dependency'    => array(
            'element'   => 'layout',
            'value'     => array( 'layout-6', 'layout-7' )
        )
	),
	array(
		"type"        => "checkbox",
		"heading"     => esc_html__( "Has Top Padding?", 'holycross' ),
		"param_name"  => "has_top_padding",
		'description' => esc_html__( 'Cheked if has padding on top of shortcode', 'holycross' ),
		'group'       => esc_html__( 'Custom Options', 'holycross' ),
        'dependency'    => array(
            'element'   => 'layout',
            'value'     => array( 'layout-6', 'layout-7' )
        )
	)
);

$params = array(
	array(
		'type'        	=> 'textfield',
		'heading'     	=> esc_html__( 'Title shortcode', 'holycross' ),
		'param_name'  	=> 'title',
		'value'       	=> '',
		'std'      		=> '',
		'description' 	=> esc_html__( 'Add title for shortcode.', 'holycross' ),
	),
	array(
		'type'        	=> 'textfield',
		'heading'     	=> esc_html__( 'Limit post', 'holycross' ),
		'param_name'  	=> 'limit_post',
		'value'       	=> '-1',
		'std'      		=> '',
		'description' 	=> esc_html__( 'Add title for shortcode.', 'holycross' ),
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Sort By', 'holycross' ),
		'param_name'  => 'sort_by',
		'value'       => array(
			esc_html__( 'Title', 'holycross' )             => 'title',
			esc_html__( 'Post Created Date', 'holycross' ) => 'date',
			esc_html__( 'Event From Date', 'holycross' )   => 'event_from_date',
			esc_html__( 'Event To Date', 'holycross' )     => 'event_to_date',
		),
		'std'         => 'event_from_date',
		'description' => esc_html__( 'Select order to display list properties.', 'holycross' )
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Sort Order', 'holycross' ),
		'param_name'  => 'sort_order',
		'value'       => array(
			esc_html__( 'Ascending', 'holycross' )  => 'asc',
			esc_html__( 'Descending', 'holycross' ) => 'desc',
		),
		'std'         => 'desc',
		'description' => esc_html__( 'Select order to display list properties.', 'holycross' )
	),
);

/*extra class*/
$extra_class = array(
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Extra Class', 'holycross' ),
		'param_name'  => 'extra_class',
		'value'       => '',
		'description' => esc_html__( 'Add extra class to block', 'holycross' )
	),
);


$vc_options = array_merge(
	$layouts,
	$params,
	$extra_class,
	$custom_tab,
	$slider_options,
	$filters
);