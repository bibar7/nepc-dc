<?php

if ( ! defined( 'SLZ' ) ) {
	die ( 'Forbidden' );
}

$cfg = array ();

$cfg ['page_builder'] = array (
	'title'			=> esc_html__( 'SLZ Service List', 'holycross' ),
	'description'	=> esc_html__( 'A service list.', 'holycross' ),
	'tab'			=> slz()->theme->manifest->get('name'),
	'icon'			=> 'icon-slzcore-service-list slz-vc-slzcore',
	'tag'			=> 'slz_service_list' 
);

$cfg ['default_value'] = array (
		'style'                 => '',
		'align'                 => '',
		'show_icon'             => 'icon',
		'show_number'           => '',
		'description'           => 'des',
		'column'                => '3',
		'pagination'            => 'no',
		'limit_post'            => '-1',
		'offset_post'           => '0',
		'sort_by'               => '',
		'btn_content'           => esc_html__( 'Read More', 'holycross' ),
		'extra_class'           => '',
		'method'                => 'cat',
		'list_category'         => '',
		'list_post'             => '',
		'block_bg_color'        => '',
		'block_bg_hv_color'     => '',
		'icon_color'            => '',
		'icon_bd_color'         => '',
		'icon_bd_hv_color'      => '',
		'title_color'           => '',
		'des_color'             => '',
		'btn_color'             => '',
		'btn_bg_color'          => '',
		'nav_color'             => '',
		'is_carousel'           => 'no',
		'show_dots'             => 'yes',
		'show_arrows'           => 'yes',
		'slide_autoplay'        => 'yes',
		'slide_infinite'        => 'yes',
		'slide_speed'           => ''
);