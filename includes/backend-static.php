<?php if ( ! defined( 'ABSPATH' ) ) {
    die( 'Direct access forbidden.' );
}

wp_enqueue_media();

if ( defined( 'SLZ' ) ) {
    $holycross_version = slz()->theme->manifest->get_version();
} else {
    $holycross_version = '1.0';
}

wp_enqueue_style(
	'css-theme-admin',
	HOLYCROSS_STATIC_URI . '/css/theme-admin.css',
	array(),
    $holycross_version
);

wp_enqueue_script(
	'js-theme-admin',
	HOLYCROSS_STATIC_URI . '/js/theme-admin.js',
	array( 'jquery', ),
    $holycross_version,
	true
);

