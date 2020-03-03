<?php if ( ! defined( 'SLZ' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['general'] = array(
	'id'             => esc_html__( 'slz_portfolio', 'holycross' ),
	'name'           => esc_html__( 'SLZ: Portfolio', 'holycross' ),
	'description'    => esc_html__( 'A portfolio list', 'holycross' ),
	'classname'      => 'slz-widget-portfolio'
);
$cfg['check_box'] = array(
	'show_image'       => esc_html__( 'Display Thumbnail', 'holycross' ),
    'show_team'        => esc_html__( 'Display Team', 'holycross' ),
	'show_category'    => esc_html__( 'Display Category', 'holycross' ),
    'show_description' => esc_html__( 'Display Description', 'holycross' ),
    'show_date'        => esc_html__( 'Display Date', 'holycross' ),
    'show_download'    => esc_html__( 'Display Download', 'holycross' ),
);
$cfg ['thumb-size'] = array (
    'large'             => '800x450',
    'no-image-large'    => '800x450',
);
$cfg ['image_type'] = array (
    esc_html__( 'Thumbnail', 'holycross' )       => 'thumbnail',
	esc_html__( 'Feature Image', 'holycross' )   => 'feature_image',
);