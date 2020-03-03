<?php if ( ! defined( 'SLZ' ) ) {
	die( 'Forbidden' );
}

$ext_instance = slz()->extensions->get( 'events' );
if( is_admin() ) {
	wp_enqueue_script(
		'slz-extension-'. $ext_instance->get_name() .'-donation-admin-scripts',
		$ext_instance->locate_js_URI( 'donation-admin' ),
		array( 'jquery' ),
		$ext_instance->manifest->get_version(),
		true
	);
	wp_enqueue_style(
		'slz-extension-'. $ext_instance->get_name() .'-donation-admin-styles',
		$ext_instance->locate_css_URI( 'donation-admin' ),
		array(),
		$ext_instance->manifest->get_version()
	);
}
wp_enqueue_script(
    'slz-extension-'. $ext_instance->get_name() .'-event_archive_search',
    $ext_instance->locate_js_URI( 'events' ),
    array( 'jquery' ),
    $ext_instance->manifest->get_version()
);