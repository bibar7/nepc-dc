<?php

if ( ! defined( 'SLZ' ) ) {
	die ( 'Forbidden' );
}

$cfg = array ();

$cfg ['page_builder'] = array (
	'title'			=> esc_html__( 'SLZ Events Carousel', 'holycross' ),
	'description'	=> esc_html__( 'Banner of events', 'holycross' ),
	'tab'			=> slz()->theme->manifest->get('name'),
	'icon'			=> 'icon-slzcore-event-carousel slz-vc-slzcore',
	'tag'			=> 'slz_event_carousel'
);

$cfg ['layouts'] = array (
	'layout-1' => esc_html__( 'United States', 'holycross' ),
    'layout-4' => esc_html__( 'Turkey', 'holycross' ),
    'layout-6' => esc_html__( 'Brazil', 'holycross' ),
    'layout-7' => esc_html__( 'Germany', 'holycross' ),
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

$cfg ['yes_no'] = array (
	esc_html__( 'Yes', 'holycross' ) => 'yes',
	esc_html__( 'No', 'holycross' ) => 'no'
);

$cfg ['filter_method'] = array(
	esc_html__( 'Category', 'holycross' )  => 'cat',
	esc_html__( 'Event', 'holycross' )      => 'event'
);

$cfg ['default_value'] = array(
	'extension'              => 'events',
	'layout'                 => 'layout-1',
	'shortcode'              => 'event_block',
	'title'                  => '',
	'limit_post'             => '-1',
	'sort_by'                => '',
	'sort_order'             => '',
	'extra_class'            => '',
	'image_display'          => 'show',
	'event_date_display'     => 'show',
	'description_display'    => 'show',
	'event_time_display'     => 'show',
	'event_location_display' => 'show',
	'event_address_display'  => 'show',
	'title_color'            => '',
	'slide_to_show'          => '3',
	'slide_autoplay'         => 'yes',
	'slide_dots'             => 'yes',
	'slide_arrows'           => 'yes',
	'slide_infinite'         => 'yes',
	'slide_speed'            => '600',
	'method'                 => 'cat',
	'category_slug'          => '',
	'list_category'          => '',
	'list_post'              => '',
	'posts'                  => '',
	'has_top_padding'        => '',
	'is_container'           => ''
);