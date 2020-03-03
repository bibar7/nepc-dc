<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}

if ( defined( 'SLZ' ) ) {
	$holycross_version = slz()->theme->manifest->get_version();
} else {
	$holycross_version = '1.0';
}
/*--------------------functions-------------------------*/
if ( ! function_exists( 'holycross_google_font_custom' ) ):
	function holycross_google_font_custom(){
		if ( defined( 'SLZ' ) && function_exists('slz_get_db_settings_option') ) {
			$font_google = $fonts = array();
			$settings = slz_get_db_settings_option();
			//google_font
			$arr_typo = (array)slz()->theme->get_config('typography_settings');
			foreach( $arr_typo as $option_key => $css_key ) {
				$custom_style = slz_akg($option_key .'/custom-style', $settings, '' );
				if( $custom_style == 'custom' && $custom = slz_akg($option_key .'/custom/typography', $settings, '' ) ) {
					if( !empty($custom['google_font']) ) {
						if( !empty($custom['family']) ) {
							if( !empty($custom['variation']) ) {
								$font_google[$custom['family']][$custom['variation']] = $custom['variation'];
							} else {
								$font_google[$custom['family']] = '';
							}
						}
					}
				}
			}
			foreach($font_google as $font=>$variant){
				$fonts[] = $font . ':' .implode(',', $variant);
			}
			if( $fonts ) {
				$font_url = holycross_fonts_url( $fonts );
				wp_enqueue_style( 'holycross-custom-fonts', $font_url, array(), null );
			}
		}
	}
endif;

/*-------------------- enqueue-------------------------*/
//font
wp_enqueue_style( 'holycross-fonts', holycross_fonts_url(), array(), null );
holycross_google_font_custom();
wp_enqueue_style( 'font-awesome',    HOLYCROSS_STATIC_URI . '/font/font-icon/font-awesome/css/font-awesome.min.css', array(), false );

//libs css
wp_enqueue_style( 'bootstrap',             HOLYCROSS_STATIC_URI . '/libs/bootstrap/css/bootstrap.min.css', array(), false );
wp_enqueue_style( 'bootstrap-datepicker',  HOLYCROSS_STATIC_URI . '/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css', array(), false );
if( is_rtl()) {
	wp_enqueue_style( 'bootstrap-rtl',     HOLYCROSS_STATIC_URI . '/libs/bootstrap-rtl.min.css', array(), false );
}

//theme css
wp_enqueue_style( 'holycross-style',       get_stylesheet_uri(), array(), $holycross_version );
if ( ! holycross_check_extension('headers') ) {
	wp_enqueue_style( 'holycross-default', HOLYCROSS_STATIC_URI . '/css/default.css', array(), $holycross_version );
}
wp_enqueue_style( 'holycross-layout',      HOLYCROSS_STATIC_URI . '/css/layout.css', array(), $holycross_version );
wp_enqueue_style( 'holycross-responsive',  HOLYCROSS_STATIC_URI . '/css/responsive.css', array(), $holycross_version );

// js
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}

wp_enqueue_script( 'bootstrap',            HOLYCROSS_STATIC_URI . '/libs/bootstrap/js/bootstrap.min.js', array( 'jquery' ), false, true );
wp_enqueue_script( 'bootstrap-datepicker', HOLYCROSS_STATIC_URI . '/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js', array( ), false, true );

wp_enqueue_script( 'holycross-main',       HOLYCROSS_STATIC_URI . '/js/main.js', array( ), $holycross_version, true );
wp_enqueue_script( 'holycross-custom',     HOLYCROSS_STATIC_URI . '/js/custom.js', array( ), $holycross_version, true );

if ( defined( 'SLZ' ) && function_exists('slz_get_db_settings_option') ) {
	$holycross_custom_script = slz_get_db_settings_option('custom_scripts', '');
	if( !empty( $holycross_custom_script ) ) {
		wp_enqueue_script( 'holycross-custom-inline',    HOLYCROSS_STATIC_URI . '/js/custom-inline.js', array( ), $holycross_version, true );
		wp_add_inline_script( 'holycross-custom-inline', $holycross_custom_script );
	}
}
// Need to jQuery slick.min.js to use WooCommerce custom js and css
global $wp_scripts;
if( isset($wp_scripts->registered['slick']) && HOLYCROSS_WC_ACTIVE ) {
	wp_enqueue_style( 'holycross-woocommerce',     HOLYCROSS_STATIC_URI . '/css/holycross-woocommerce.css', array(), $holycross_version );
	wp_enqueue_script( 'holycross-woocommerce',    HOLYCROSS_STATIC_URI . '/js/holycross-woocommerce.js', array( ), $holycross_version, true );
}