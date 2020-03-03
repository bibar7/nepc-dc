<?php
/**
 * Constants.
 * 
 * @package WordPress
 * @subpackage HolyCross
 * @since 1.0
 */

defined( 'HOLYCROSS_THEME_URI' )         || define( 'HOLYCROSS_THEME_URI', get_template_directory_uri() );
defined( 'HOLYCROSS_STATIC_URI' )        || define( 'HOLYCROSS_STATIC_URI', get_template_directory_uri() . '/static');

defined( 'HOLYCROSS_INCLUDE_DIR' )       || define( 'HOLYCROSS_INCLUDE_DIR', get_template_directory() . '/includes' );
defined( 'HOLYCROSS_FW_CUSTOMIZE_DIR' )  || define( 'HOLYCROSS_FW_CUSTOMIZE_DIR', get_template_directory() . '/framework-customizations' );
defined( 'HOLYCROSS_PLUGIN_DIR' )        || define( 'HOLYCROSS_PLUGIN_DIR', get_template_directory() . '/plugins' );

defined( 'HOLYCROSS_OPTION_IMG_URI' )    || define( 'HOLYCROSS_OPTION_IMG_URI', HOLYCROSS_THEME_URI . '/static/img/theme-option' );
defined( 'HOLYCROSS_PLUGIN_IMG_URI' )    || define( 'HOLYCROSS_PLUGIN_IMG_URI', HOLYCROSS_THEME_URI . '/static/img/tgm-images' );
defined( 'HOLYCROSS_LOGO_IMG_URI' )      || define( 'HOLYCROSS_LOGO_IMG_URI', HOLYCROSS_THEME_URI . '/static/img/logo' );
defined( 'HOLYCROSS_IMG_URI' )           || define( 'HOLYCROSS_IMG_URI', HOLYCROSS_THEME_URI . '/static/img' );
//Active Woocommerce Plugin
defined( 'HOLYCROSS_WC_ACTIVE' )     || define( 'HOLYCROSS_WC_ACTIVE', class_exists( 'WooCommerce' ) );
