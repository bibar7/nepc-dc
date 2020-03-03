<?php

if ( ! defined( 'SLZ' ) ) {
	die ( 'Forbidden' );
}

$cfg = array ();

$cfg ['page_builder'] = array (
	'title'			=> esc_html__( 'SLZ Events Block', 'holycross' ),
	'description'	=> esc_html__( 'Banner of events', 'holycross' ),
	'tab'			=> slz()->theme->manifest->get('name'),
	'icon'			=> 'icon-slzcore-event-block slz-vc-slzcore',
	'tag'			=> 'slz_event_block'
);

$cfg ['layouts'] = array (
    'layout-1' => esc_html__( 'United States', 'holycross' ),
    'layout-4' => esc_html__( 'Turkey', 'holycross' ),
    'layout-5' => esc_html__( 'Italy', 'holycross' ),
    'layout-6' => esc_html__( 'Brazil', 'holycross' ),
    'layout-7' => esc_html__( 'Germany', 'holycross' )
);

$cfg ['image_size'] = array (
	'default' => array(
		'large'          => '341x257'
	),
	'layout-1' => array(
		'large'          => '800x500'
	),
	
);

$cfg ['show_hide'] = array (
	esc_html__( 'Show', 'holycross' ) => 'show',
	esc_html__( 'Hide', 'holycross' ) => 'hide'
);

$cfg ['filter_method'] = array(
	esc_html__( 'Category', 'holycross' )  => 'cat',
	esc_html__( 'Event', 'holycross' )     => 'event'
);

$cfg ['yes_no'] = array(
	esc_html__( 'No', 'holycross' ) => '',
	esc_html__( 'Yes', 'holycross' ) => 'yes'
);
/**
 *  Config to show
 */
$cfg ['default_value'] = array (
	'extension'              => 'events',
	'shortcode'              => 'event_block',
	'layout'                 => 'layout-1',
	'show_searchbar'         => 'hide',
	'title'                  => '',
	'limit_post'             => '-1',
	'offset_post'            => '',
	'column'                 => '1',
	'sort_by'                => '',
	'sort_order'             => '',
	'extra_class'            => '',
	'image_display'          => 'show',
	'event_date_display'     => 'show',
	'description_display'    => 'show',
	'event_time_display'     => 'show',
	'event_location_display' => 'show',
	'event_address_display'  => 'show',
	'donation_progress'      => 'hide',
	'btn_type'               => '',
	'btn_text'               => '',
	'button_link'            => '',
	'image_type'             => 'feature_image',
	'bg_image'               => '',
	'is_container'           => '',
	'has_top_padding'        => '',
	'title_color'            => '',
	'method'                 => 'cat',
	'event_goal_donation'    => '',
	'category_slug'          => '',
	'list_category'          => '',
	'list_post'              => '',
	'posts'                  => '',
	'pagination'             => '',
);