<?php if ( ! defined( 'ABSPATH' ) ) {
    die( 'Direct access forbidden.' );
}

register_nav_menus( array(
	'top-nav'     	=> esc_html__('Top menu', 'holycross' ),
	'main-nav'    	=> esc_html__('Main menu', 'holycross' ),
	'sub-nav'    	=> esc_html__('Sub menu', 'holycross' ),
	'bottom-nav'  	=> esc_html__('Bottom menu', 'holycross' ),
	'feature-nav'  	=> esc_html__('Feature menu', 'holycross' )
) );
