<?php if ( ! defined( 'SLZ' ) ) {
    die( 'Forbidden' );
}

$cfg = array();

$cfg['general'] = array(
    'id'             => esc_html__( 'slz_recent_post', 'holycross' ),
    'name'           => esc_html__( 'SLZ: Recent Post', 'holycross' ),
    'description'    => esc_html__( 'A recent posts list', 'holycross' ),
    'classname'      => 'slz-widget-recent-post'
);
$cfg['check_box'] = array(
    'show_thumbnail' => esc_html__( 'Display Thumbnail', 'holycross' ),
    'show_date'      => esc_html__( 'Display Post Date', 'holycross' ),
    'show_author'    => esc_html__( 'Display Author', 'holycross' ),
    'show_view'      => esc_html__( 'Display View', 'holycross' ),
    'show_comment'   => esc_html__( 'Display Comment', 'holycross' ),
    'show_category'  => esc_html__( 'Display Category', 'holycross' )
);
$cfg ['thumb-size'] = array (
    'large'             => '550x350',
    'no-image-large'    => '550x350',
);

