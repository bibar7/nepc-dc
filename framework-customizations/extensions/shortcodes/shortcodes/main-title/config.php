<?php

if ( ! defined( 'SLZ' ) ) {
	die ( 'Forbidden' );
}

$cfg = array ();

$cfg ['page_builder'] = array (
		'title' => esc_html__ ( 'SLZ Main Title', 'holycross' ),
		'description' => esc_html__ ( 'Main Title', 'holycross' ),
		'tab' => slz()->theme->manifest->get('name'),
		'icon' => 'icon-slzcore-main-title slz-vc-slzcore',
		'tag' => 'slz_main_title'
);
$cfg ['styles'] = array (
	''        => esc_html__( 'Florida', 'holycross' ),
	'style-1' => esc_html__( 'California', 'holycross' )
);
$cfg ['default_value'] = array (
	'style'                  => '',
	'align'                  => 'left',
	'subtitle'               => '',
	'title'                  => '',
	'show_icon'	             => '2',
	'image'                  => '',
	'icon_library'           => 'vs',
    'icon_vs'                => '',
    'icon_openiconic'        => '',
    'icon_typicons'          => '',
    'icon_entypo'            => '',
    'icon_linecons'          => '',
    'icon_monosocial'        => '',
	'extra_title'            => '',
	'subtitle_color'         => '',
	'title_color'            => '',
	'extra_title_color'      => '',
	'extra_class'            => '',
	'css'                    => '',
	//options override from theme
	'subtitle_line_color'    => '',
	'extra_title_line_color' => '',
	'line_color'             => ''
);