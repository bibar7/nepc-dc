<?php
$shortcode = slz_ext( 'shortcodes' )->get_shortcode( 'posts_block' );

$vc_options = array(
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Layouts', 'holycross' ),
		'param_name'  => 'list_layout_3',
		'value'       => $shortcode->get_config('list_layout_3'),
		'std'         => 'list-layout-1',
		'description' => esc_html__( 'Choose list layout to show', 'holycross' ),
		'group'       => esc_html__( 'List Layout', 'holycross' ),
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Columns', 'holycross' ),
		'param_name'  => 'list_column_3',
		'value'       => $shortcode->get_config('column'),
		'std'         => '1',
		'description' => esc_html__( 'Choose number of column.', 'holycross' ),
		'group'       => esc_html__( 'List Layout', 'holycross' ),
		'dependency'     => array(
			'element'  => 'list_layout_3',
			'value'    => array( 'list-layout-1', 'list-layout-3' )
		),
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Show Left and Right layout?', 'holycross' ),
		'param_name'  => 'list_show_left_right_3',
		'value'       => $shortcode->get_config('yes_no'),
		'std'         => 'yes',
		'description' => esc_html__( 'Choose if want to show left and right layout', 'holycross' ),
		'group'       => esc_html__( 'List Layout', 'holycross' ),
		'dependency'     => array(
			'element'  => 'list_layout_3',
			'value'    => array( 'list-layout-2' )
		),
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Show Excerpt?', 'holycross' ),
		'param_name'  => 'list_show_excerpt_3',
		'value'       => $shortcode->get_config('yes_no'),
		'std'         => 'yes',
		'description' => esc_html__( 'Choose if want to show excerpt', 'holycross' ),
		'group'       => esc_html__( 'List Layout', 'holycross' ),
		'dependency'     => array(
			'element'  => 'list_layout_3',
			'value'    => array( 'list-layout-1', 'list-layout-2' )
		),
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Show Meta?', 'holycross' ),
		'param_name'  => 'list_show_meta_3',
		'value'       => $shortcode->get_config('yes_no'),
		'std'         => 'yes',
		'description' => esc_html__( 'Choose if want to show meta', 'holycross' ),
		'group'       => esc_html__( 'List Layout', 'holycross' ),
		'dependency'     => array(
			'element'  => 'list_layout_3',
			'value'    => array( 'list-layout-1', 'list-layout-2' )
		),
	)
);