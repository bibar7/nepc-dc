<?php
$shortcode = slz_ext( 'shortcodes' )->get_shortcode( 'event_block' );

$filter_method = $shortcode->get_config( 'filter_method' );
$yes_no = $shortcode->get_config( 'yes_no' );
$show_hide = $shortcode->get_config( 'show_hide' );

$taxonomy = 'slz-event-cat';
$params_cat = array('empty'   => esc_html__( '-All Event Categories-', 'holycross' ) );
$event_cat = SLZ_Com::get_tax_options2slug( $taxonomy, $params_cat );

$args = array('post_type' => 'slz-event');
$options = array('empty'  => esc_html__( '-All Event-', 'holycross' ) );
$events = SLZ_Com::get_post_title2id( $args, $options );

$column = array(
    esc_html__( 'One', 'holycross' )    => '1',
    esc_html__( 'Two', 'holycross' )    => '2',
    esc_html__( 'Three', 'holycross' )  => '3'
);

$donation_progress = array(
    esc_html__( 'Hide', 'holycross' )    => 'hide',
    esc_html__( 'Show', 'holycross' )    => 'show',
);

$btn_type = array(
    esc_html__( 'None Button', 'holycross' )       => '',
    esc_html__( 'Read More Button', 'holycross' )  => 'readmore',
    esc_html__( 'Donate Button', 'holycross' )     => 'donate',
    esc_html__( 'Join Button', 'holycross' )       => 'join',
    esc_html__( 'Custom Link', 'holycross' )       => 'custom'
);
$image_type = array(
    esc_html__( 'Feature Image', 'holycross' )     => 'feature_image',
    esc_html__( 'Upload Image', 'holycross' )      => 'upload_image'
);

$layouts = array(
    array (
        'type'        => 'dropdown',
        'heading'     => esc_html__( 'Layout', 'holycross' ),
        'admin_label' => true,
        'param_name'  => 'layout',
        'value'       => $shortcode->get_layouts(),
        'description' => esc_html__( 'Choose layout will be displayed.', 'holycross' )
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
		'heading'     => esc_html__( 'Image', 'holycross' ),
		'param_name'  => 'image_display',
		'value'       => $show_hide,
		'description' => esc_html__( 'Choose show or hide image.', 'holycross' ),
		'group'       => esc_html__('Custom Options', 'holycross'),
        'dependency'    => array(
            'element'   => 'layout',
            'value'     => array( 'layout-1', 'layout-6', 'layout-7' )
        )
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Event Date', 'holycross' ),
		'param_name'  => 'event_date_display',
		'value'       => $show_hide,
		'description' => esc_html__( 'Choose show or hide event date in first post.', 'holycross' ),
		'group'       => esc_html__('Custom Options', 'holycross'),
        'dependency'    => array(
            'element'   => 'layout',
            'value'     => array( 'layout-5', 'layout-6', 'layout-7' )
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
        'type'        => 'dropdown',
        'heading'     => esc_html__( 'Donation Progress', 'holycross' ),
        'param_name'  => 'donation_progress',
        'value'       => $donation_progress,
        'description' => esc_html__( 'Choose hide or show donation progress.', 'holycross' ),
		'group'       => esc_html__('Custom Options', 'holycross'),
        'dependency'    => array(
            'element'   => 'layout',
            'value'     => array( 'layout-1' )
        )
    ),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Button Type', 'holycross' ),
		'param_name'  => 'btn_type',
		'value'       => $btn_type,
		'description' => esc_html__( 'Choose type of button.', 'holycross' ),
		'group'       => esc_html__('Custom Options', 'holycross'),
        'dependency'    => array(
            'element'   => 'layout',
            'value'     => array( 'layout-1', 'layout-5' )
        ),
	),
	array(
		'type'        	=> 'textfield',
		'heading'     	=> esc_html__( 'Button Text', 'holycross' ),
		'param_name'  	=> 'btn_text',
		'value'       	=> '',
		'description' 	=> esc_html__( 'Enter text for button. If empty is button not display on frontend', 'holycross' ),
		'group'         => esc_html__( 'Custom Options', 'holycross' ),
	),
	array(
		'type'        => 'vc_link',
		'heading'     => esc_html__( 'Button Link', 'holycross' ),
		'param_name'  => 'button_link',
		'value'       => '',
		'description' => esc_html__( 'Please input button link and button info.', 'holycross' ),
		'group'       => esc_html__( 'Custom Options', 'holycross' ),
        'dependency'    => array(
            'element'   => 'btn_type',
            'value'     => array( 'custom' )
        )
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Choose Image', 'holycross' ),
		'param_name'  => 'image_type',
		'value'       => $image_type,
		'description' => esc_html__( 'Choose type of background image.', 'holycross' ),
		'group'       => esc_html__('Custom Options', 'holycross'),
        'dependency'    => array(
            'element'   => 'layout',
            'value'     => array( 'layout-6', 'layout-7' )
        )
	),
    array(
        'type'        => 'attach_image',
        'heading'     => esc_html__( 'Add Background Image', 'holycross' ),
        'param_name'  => 'bg_image',
        'value'       => '',
        'description' => esc_html__( 'Upload background image.', 'holycross' ),
		'group'       => esc_html__('Custom Options', 'holycross'),
        'dependency'  => array(
            'element'   => 'image_type',
            'value'     => array( 'upload_image' )
        )
    ),
	array(
		"type"        => "checkbox",
		"heading"     => esc_html__( "Has Container?", 'holycross' ),
		"param_name"  => "is_container",
		'description' => esc_html__( 'Show container class to display fullwidth.', 'holycross' ),
		'group'       => esc_html__( 'Custom Options', 'holycross' ),
        'dependency'    => array(
            'element'   => 'layout',
            'value'     => array( 'layout-5', 'layout-6', 'layout-7' )
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
            'value'     => array( 'layout-5', 'layout-6', 'layout-7' )
        )
	)
);

$params = array(
    array(
        'type'        => 'dropdown',
        'heading'     => esc_html__( 'Columns', 'holycross' ),
        'param_name'  => 'column',
        'value'       => $column,
        'description' => esc_html__( 'Choose number column will be displayed.', 'holycross' ),
        'dependency'    => array(
            'element'   => 'layout',
            'value'     => array( 'layout-1' )
        )
    ),    
	array(
		'type'        	=> 'textfield',
		'heading'     	=> esc_html__( 'Title Shortcode', 'holycross' ),
		'param_name'  	=> 'title',
		'value'       	=> '',
		'description' 	=> esc_html__( 'Add title for shortcode.', 'holycross' ),
	),
    array(
        'type'        => 'dropdown',
        'heading'     => esc_html__( 'Show Search Bar', 'holycross' ),
        'param_name'  => 'show_searchbar',
        'value'       => $show_hide,
        'std'         => 'hide',
        'dependency'    => array(
            'element'   => 'layout',
            'value'     => array( 'layout-2' )
        ),
        'description' => esc_html__( 'Choose Search Bar display.', 'holycross' )
    ),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Pagination', 'holycross' ),
		'param_name'  => 'pagination',
		'value'       => $yes_no,
		'description' => esc_html__( 'Choose pagination display.', 'holycross' )
	),
    array(
        'type'        	=> 'textfield',
        'heading'     	=> esc_html__( 'Limit Posts', 'holycross' ),
        'param_name'  	=> 'limit_post',
        'value'       	=> '-1',
        'std'      		=> '',
        'description' 	=> esc_html__( 'Add limit posts per page. Set -1 or empty to show all. The number of posts to display. If it blank the number posts will be the number from Settings -> Reading', 'holycross' ),
    ),
    array(
        'type'        => 'textfield',
        'heading'     => esc_html__( 'Offset Post', 'holycross' ),
        'param_name'  => 'offset_post',
        'value'       => '',
        'description' => esc_html__( 'Enter offset to pass over posts. If you want to start on record 6, using offset 5', 'holycross' )
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
	$filters
);