<?php
if ( ! defined( 'SLZ' ) ) {
	die ( 'Forbidden' );
}

$cfg = array ();

$cfg ['page_builder'] = array (
	'title'			=> esc_html__ ( 'SLZ Portfolio List', 'holycross' ),
	'description'	=> esc_html__ ( 'List of portfolio', 'holycross' ),
	'tab'			=> slz()->theme->manifest->get('name'),
	'icon'			=> 'icon-slzcore-portfolio-list slz-vc-slzcore',
	'tag'			=> 'slz_portfolio_list' 
);

$cfg ['image_size'] = array (
	'large'				=> '800x500',
	'small'				=> '350x350',
	'no-image-large'	=> '800x500',
	'no-image-small'	=> '350x350'
);

$cfg ['layouts'] = array (
	'layout-1' => esc_html__( 'United States', 'holycross' ),
	'layout-4' => esc_html__( 'Italy', 'holycross' ),
);

$cfg ['default_value'] = array (
	'extension'				=> 'portfolios',
	'shortcode'				=> 'portfolio_list',
	'template'				=> 'portfolio',
	'image_size'			=> $cfg ['image_size'],

	'layout'				=> '',
	'style'					=> '',
	'layout_style_2'        => '',
	'column'				=> '1',
	'offset_post'			=> '',
	'limit_post'			=> '-1',
	'max_post'				=> '',
	'sort_by'				=> '',
	'extra_class'			=> '',
	'pagination'			=> '',
	'method' 				=> 'cat',
	'list_category' 		=> '',
	'list_post' 			=> '',
    'list_team'             => '',
	'category_filter'		=> '',
	'category_filter_text'	=> esc_html__('All', 'holycross'),
	'show_thumbnail'		=> '',
	'show_category'			=> 'no',
	'show_meta_info'		=> 'no',
    'show_description'		=> 'yes',
    'show_attachments'		=> 'yes',
	'description_length'	=> '',
	'button_text'			=> '',
	'custom_link'           => '',

	'color_title'			=> '',
	'color_title_hv'		=> '',
	'color_category'		=> '',
	'color_category_hv'		=> '',
	'color_meta_info'		=> '',
	'color_meta_info_hv'	=> '',
	'color_description'		=> '',
	'color_item_bg_hv'		=> '',
	'color_button'			=> '',
	'color_button_hv'		=> '',
    'color_icon'            => '',
    'color_icon_hv'         => '',
    'color_attach_bg'       => '',
    'color_attach_bg_hv'    => '',
);