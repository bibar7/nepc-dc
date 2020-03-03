<?php

if ( ! defined( 'SLZ' ) ) {
	die ( 'Forbidden' );
}

$cfg = array ();

$cfg ['page_builder'] = array (
		'title' => esc_html__( 'SLZ Icon Box', 'holycross' ),
		'description' => esc_html__( 'Icon Box of info', 'holycross' ),
		'tab' => slz()->theme->manifest->get('name'),
		'icon' => 'icon-slzcore-icon-box slz-vc-slzcore',
		'tag' => 'slz_icon_box' 
);

$cfg ['layouts'] = array (
	'layout-1' => esc_html__( 'United States', 'holycross' ),
	'layout-3' => esc_html__( 'United Kingdom', 'holycross' )
);

$cfg ['styles'] = array (
    ''        => esc_html__( 'Florida', 'holycross' ),
    'style-1' => esc_html__( 'California', 'holycross' )
);

$cfg ['default_value'] = array (
	'layout'      => 'layout-1',
	'column'      => '',
	'icon_box_3'  => '',
	'icon_box'    => '',
	'extra_class' => '',
    'title'       => '',
    'title_color' => '',
    'show_number' => ''
);