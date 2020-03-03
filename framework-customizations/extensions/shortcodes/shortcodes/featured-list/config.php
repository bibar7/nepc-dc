<?php
if ( ! defined( 'SLZ' ) ) {
	die ( 'Forbidden' );
}

$cfg = array ();

$cfg ['page_builder'] = array (
		'title' => esc_html__ ( 'SLZ Featured List', 'holycross' ),
		'description' => esc_html__ ( 'List of feature with info', 'holycross' ),
		'tab' => slz()->theme->manifest->get('name'),
		'icon' => 'icon-slzcore-featured-list slz-vc-slzcore',
		'tag' => 'slz_featured_list'
);

$cfg['show_options'] = array(
	esc_html__( 'Icon', 'holycross' )  => 'icon',
	esc_html__( 'Image', 'holycross' ) => 'image'
);

$cfg['styles'] = array(
    esc_html__( 'Florida', 'holycross' )     => 'style-1',
    esc_html__( 'California', 'holycross' )  => 'style-2'
);

$cfg['params_default_arr'] = array(
	'text'                     => '',
	'show_options'             => 'icon',
    'title'                    => '',
	'align'                    => '',
    'description'              => '',
	'image'                    => ''

);

$cfg ['default_value'] = array (
    'styles'               => 'style-1',
	'column'               => '',
    'show_number'          => 'yes',
	'feature_list'         => '',
    'feature_list2'        => '',
	'text_color'           => '',
    'des_color'            => '',
    'number_color'         => '',
	'background_color'     => '',
    'border_color'         => '',
	'background_img'       => '',
	'extra_class'          => ''
);