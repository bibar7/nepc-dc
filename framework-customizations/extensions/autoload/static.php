<?php if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! is_admin() ) {
	$ext = slz_ext('autoload');
	$version = $ext->manifest->get_version();
	//css
	wp_enqueue_style(
		'slz-extension-autoload-layout',
		$ext->locate_URI( '/static/css/layout.css' ),
		slz()->theme->manifest->get( 'theme_libs' ),
		$version
	);

	wp_enqueue_style(
		'slz-extension-autoload-components',
		$ext->locate_URI( '/static/css/components.css' ),
		array(),
		$version
	);
	if ( $ext->get_config( 'enable_breakingnews' ) ) {
		wp_enqueue_style(
			'slz-extension-autoload-breaking-news',
			$ext->locate_css_URI( '/static/css/breaking-news.css' ),
			array(), $version
		);
	}
	//
	if ( defined( 'SOLAZU_UNYSON_VERSION' ) ) {
		wp_register_style(
			'font-awesome',
			slz_get_framework_directory_uri( '/static/libs/font-awesome/css/font-awesome.min.css' )
		);

		wp_enqueue_style(
			'ionicons',
			slz_get_framework_directory_uri( '/static/libs/font-onicons/css/ionicons.min.css' )
		);

		wp_enqueue_style(
			'open-iconic-bootstrap',
			slz_get_framework_directory_uri( '/static/libs/font-open-iconic/css/open-iconic-bootstrap.min.css' ),
			array(),
			slz_ext( 'autoload' )->manifest->get_version()
		);
	}
	wp_enqueue_style(
		'animate',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/animate/animate.min.css' ),
		array(),
		slz_ext( 'autoload' )->manifest->get_version()
	);

	wp_enqueue_style(
		'slick',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/slick-slider/slick.css' ),
		array(),
		slz_ext( 'autoload' )->manifest->get_version()
	);

	wp_enqueue_style(
		'slick-theme',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/slick-slider/slick-theme.css' ),
		array(),
		slz_ext( 'autoload' )->manifest->get_version()
	);

	wp_enqueue_style(
		'jquery.fancybox',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/fancybox/css/jquery.fancybox.css' ),
		array(),
		slz_ext( 'autoload' )->manifest->get_version()
	);

	wp_enqueue_style(
		'jquery.fancybox-thumbs',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/fancybox/css/jquery.fancybox-thumbs.css' )
	);
	wp_enqueue_style(
		'jquery.mcustom-scrollbar',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/custom-scroll/jquery.mCustomScrollbar.min.css' )
	);
	wp_enqueue_style(
		'mediaelementplayer',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/mediaelement/mediaelementplayer.min.css' )
	);

	// core css
	slz_autoload_core_css();
	slz_autoload_core_shortcodes_css();
	slz_autoload_core_extra_css();
	// ******************************************************js

	if ( defined( 'SOLAZU_UNYSON_VERSION' ) ) {
		wp_enqueue_script(
			'jquery-lazy',
			slz_get_framework_directory_uri( '/static/libs/jquery.lazy.min.js' ),
			array( 'jquery' ),
			FALSE,
			TRUE
		);
		wp_enqueue_script(
			'image-lazy-load',
			slz_get_framework_directory_uri( '/static/js/img-lazy-load.js' ),
			array( 'jquery-lazy' ),
			FALSE,
			TRUE
		);
	}
	wp_enqueue_script(
		'slz-extension-autoload-main',
		$ext->locate_URI( '/static/js/main.js' ),
		array( 'jquery' ),
		$version,
		TRUE
	);
	if ( $ext->get_config( 'enable_breakingnews' ) ) {
		wp_enqueue_script(
			'slz-extension-autoload-breaking-news',
			$ext->locate_URI( '/static/js/breaking-news.js' ),
			array( 'jquery' ),
			$version,
			TRUE
		);
	}
	if ( $ext->get_config( 'enable_post_format_gallery' ) ) {
		wp_enqueue_script(
			'slz-extension-autoload-format-gallery',
			$ext->locate_URI( '/static/js/format-gallery.js' ),
			array( 'jquery' ),
			$version,
			TRUE
		);
	}

	wp_enqueue_script(
		'wow',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/wow/wow.min.js' ),
		array( 'jquery' ),
		FALSE,
		TRUE
	);
	wp_enqueue_script(
		'slick',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/slick-slider/slick.min.js' ),
		array( 'jquery' ),
		FALSE,
		TRUE
	);

	wp_enqueue_script(
		'isotope.pkgd',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/isotope/isotope.pkgd.min.js' ),
		array( 'jquery' ),
		FALSE,
		TRUE
	);

	wp_enqueue_script(
		'circle-progress',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/circle-progress.js' ),
		array( 'jquery' ),
		FALSE,
		TRUE
	);

	wp_enqueue_script(
		'jquery.appear',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/jquery.appear.js' ),
		array( 'jquery' ),
		FALSE,
		TRUE
	);

	wp_enqueue_script(
		'jquery.countTo',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/jquery.countTo.js' ),
		array( 'jquery' ),
		FALSE,
		TRUE
	);

	wp_enqueue_script(
		'jquery.fancybox',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/fancybox/js/jquery.fancybox.js' ),
		array(),
		FALSE,
		TRUE
	);

	wp_enqueue_script(
		'jquery.directional-hover',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/directional-hover/jquery.directional-hover.js' ),
		array(),
		FALSE,
		TRUE
	);

	wp_enqueue_script(
		'jquery.hoverdir',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/directional-hover/jquery.hoverdir.js' ),
		array(),
		FALSE,
		TRUE
	);

	wp_enqueue_script(
		'modernizr.custom',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/directional-hover/modernizr.custom.js' ),
		array(),
		FALSE,
		TRUE
	);

	wp_enqueue_script(
		'jquery.fancybox-thumbs',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/fancybox/js/jquery.fancybox-thumbs.js' ),
		array(),
		FALSE,
		TRUE
	);

	wp_enqueue_script(
		'jquery.easing',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/easy-ticker/jquery.easing.min.js' ),
		array(),
		FALSE,
		TRUE
	);

	wp_enqueue_script(
		'jquery.easy-ticker',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/easy-ticker/jquery.easy-ticker.min.js' ),
		array(),
		FALSE,
		TRUE
	);

	wp_enqueue_script(
		'jquery.mCustomScrollbar.concat',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/custom-scroll/jquery.mCustomScrollbar.concat.min.js' ),
		array(),
		FALSE,
		TRUE
	);
	wp_enqueue_script(
		'mediaelement-and-player',
		slz_ext( 'autoload' )->locate_URI( '/static/libs/mediaelement/mediaelement-and-player.min.js' ),
		array(),
		FALSE,
		TRUE
	);

	slz_autoload_core_extra_js();
	slz_autoload_core_scripts();
}