<?php
$shortcode = slz_ext( 'shortcodes' )->get_shortcode( 'posts_block' );

$vc_options = array(
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Layouts', 'holycross' ),
		'param_name'  => 'main_layout',
		'value'       => $shortcode->get_config('main_layout'),
		'std'         => 'main-layout-1',
		'description' => esc_html__( 'Choose main layout to show', 'holycross' ),
		'group'       => esc_html__( 'Main Layout', 'holycross' ),
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Show Excerpt?', 'holycross' ),
		'param_name'  => 'main_show_excerpt',
		'value'       => $shortcode->get_config('yes_no'),
		'std'         => 'yes',
		'description' => esc_html__( 'Choose if want to show excerpt', 'holycross' ),
		'group'       => esc_html__( 'Main Layout', 'holycross' ),
		'dependency'     => array(
			'element'  => 'main_layout',
			'value'    => array( 'main-layout-1', 'main-layout-2', 'main-layout-3' )
		),
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Show Meta?', 'holycross' ),
		'param_name'  => 'main_show_meta',
		'value'       => $shortcode->get_config('yes_no'),
		'std'         => 'yes',
		'description' => esc_html__( 'Choose if want to show meta', 'holycross' ),
		'group'       => esc_html__( 'Main Layout', 'holycross' ),
		'dependency'     => array(
			'element'  => 'main_layout',
			'value'    => array( 'main-layout-1', 'main-layout-2', 'main-layout-3' )
		),
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Layouts', 'holycross' ),
		'param_name'  => 'list_layout',
		'value'       => $shortcode->get_config('list_layout'),
		'std'         => 'list-layout-1',
		'description' => esc_html__( 'Choose list layout to show', 'holycross' ),
		'group'       => esc_html__( 'List Layout', 'holycross' ),
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Columns', 'holycross' ),
		'param_name'  => 'list_column',
		'value'       => $shortcode->get_config('column'),
		'std'         => '1',
		'description' => esc_html__( 'Choose number of column.', 'holycross' ),
		'group'       => esc_html__( 'List Layout', 'holycross' ),
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Show Feature Image?', 'holycross' ),
		'param_name'  => 'list_show_image',
		'value'       => $shortcode->get_config('yes_no'),
		'std'         => 'yes',
		'description' => esc_html__( 'Choose if want to show feature image', 'holycross' ),
		'group'       => esc_html__( 'List Layout', 'holycross' ),
		'dependency'     => array(
			'element'  => 'list_layout',
			'value'    => array( 'list-layout-2' )
		),
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Show Meta?', 'holycross' ),
		'param_name'  => 'list_show_meta',
		'value'       => $shortcode->get_config('yes_no'),
		'std'         => 'yes',
		'description' => esc_html__( 'Choose if want to show meta', 'holycross' ),
		'group'       => esc_html__( 'List Layout', 'holycross' ),
		'dependency'     => array(
			'element'  => 'list_layout',
			'value'    => array( 'list-layout-1', 'list-layout-2' )
		),
	)
);