<?php if ( ! defined( 'SLZ' ) ) {
	exit;
}

$holycross_server_requirements = slz()->theme->manifest->get('server_requirements');

// wp version
global $wp_version;
$holycross_wp_required_version = slz()->theme->manifest->get('requirements/wordpress/min_version');
if( version_compare($wp_version, $holycross_wp_required_version , '<=') ){
	$holycross_wp_version_text = '<i class="slz-no-icon dashicons dashicons-info"></i>'.'<strong>'.$wp_version.'</strong>';
	$holycross_wp_version_description_text = '<span class="slz-error-message">' .esc_html__( "The version of WordPress installed on your site.", 'holycross' ). ' '. esc_html__( 'We recommend you update WordPress to the latest version. The minimum required version for this theme is:', 'holycross' ) .' <strong>'.$holycross_wp_required_version. '</strong>. <a target="_blank" href="'.esc_url( admin_url('update-core.php') ).'">'.esc_html__('Do that right now', 'holycross').'</a></span>';
}
else{
	$holycross_wp_version_text = '<i class="slz-yes-icon dashicons dashicons-yes"></i>'.'<strong>'.$wp_version.'</strong>';
	$holycross_wp_version_description_text = esc_html__( "The version of WordPress installed on your site", 'holycross' );
}

// wp multisite
if ( is_multisite() ){
	$holycross_multisite_text = '<i class="slz-yes-icon dashicons dashicons-yes"></i>'.'<strong>'.esc_html__('Yes', 'holycross').'</strong>';
}
else{
	$holycross_multisite_text = '<i class="slz-yes-icon dashicons dashicons-yes"></i>'.'<strong>'.esc_html__('No', 'holycross').'</strong>';
}

// wp debug mode
if ( defined('WP_DEBUG') && WP_DEBUG ){
	$holycross_wp_debug_mode_text = '<i class="slz-no-icon dashicons dashicons-info"></i>'.'<strong>'.esc_html__('Yes', 'holycross').'</strong>';
	$holycross_wp_debug_mode_description_text = '<span class="slz-error-message">' .esc_html__( 'Displays whether or not WordPress is in Debug Mode. This mode is used by developers to test the theme. We recommend you turn it off for an optimal user experience on your website.', 'holycross' ).' <a href="'.esc_url('https://codex.wordpress.org/WP_DEBUG').'" target="_blank">'.esc_html__('Learn how to do it', 'holycross').'</a></span>';
}
else{
	$holycross_wp_debug_mode_text = '<i class="slz-yes-icon dashicons dashicons-yes"></i>'.'<strong>'.esc_html__('No', 'holycross').'</strong>';
	$holycross_wp_debug_mode_description_text = esc_html__( 'Displays whether or not WordPress is in Debug Mode', 'holycross' );
}

// wp memory limit
$holycross_memory = holycross_return_memory_size( WP_MEMORY_LIMIT );
$holycross_requirements_wp_memory_limit = holycross_return_memory_size($holycross_server_requirements['server']['wp_memory_limit']);
if ( $holycross_memory < $holycross_requirements_wp_memory_limit ) {
	$holycross_wp_memory_limit_text = '<i class="slz-no-icon dashicons dashicons-info"></i>'.'<strong>'.size_format( $holycross_memory ).'</strong>';
	$holycross_wp_memory_limit_description_text = '<span class="slz-error-message">' . esc_html__('The maximum amount of memory (RAM) that your site can use at one time.', 'holycross') . ' '.wp_kses(__( 'We recommend setting memory to at least <strong>256MB</strong>. Please define memory limit in <strong>wp-config.php</strong> file.', 'holycross'), array('<strong>' => array()) ).' <a href="'.esc_url('http://codex.wordpress.org/Editing_wp-config.php#Increasing_memory_allocated_to_PHP').'" target="_blank">'.esc_html__('Learn how to do it', 'holycross' ).'</a></span>';
} else {
	$holycross_wp_memory_limit_text = '<i class="slz-yes-icon dashicons dashicons-yes"></i>'.'<strong>'.size_format( $holycross_memory ).'</strong>';
	$holycross_wp_memory_limit_description_text = esc_html__('The maximum amount of memory (RAM) that your site can use at one time', 'holycross');
}

// php version
if ( function_exists( 'phpversion' ) ) {
	if( version_compare(phpversion(), $holycross_server_requirements['server']['php_version'], '<=') ){
		$holycross_php_version_text = '<i class="slz-no-icon dashicons dashicons-info"></i><strong>'.esc_html( phpversion() ).'</strong>';
		$holycross_php_version_description_text = '<span class="slz-error-message">' .esc_html__( 'The version of PHP installed on your hosting server.', 'holycross' ).' '.esc_html__( 'We recommend you update PHP to the latest version. The minimum required version for this theme is:', 'holycross' ) .' <strong>'.$holycross_server_requirements['server']['php_version']. '</strong>. '.__('Contact your hosting provider, they can install it for you.', 'holycross').'</span>';
	}
	else{
		$holycross_php_version_text = '<i class="slz-yes-icon dashicons dashicons-yes"></i><strong>'.esc_html( phpversion() ).'</strong>';
		$holycross_php_version_description_text =  esc_html__( 'The version of PHP installed on your hosting server', 'holycross' );
	}
}
else{
	$holycross_php_version_text = esc_html__('No PHP Installed', 'holycross');
}

// php post max size
$holycross_requirements_post_max_size = holycross_return_memory_size($holycross_server_requirements['server']['post_max_size']);
if ( holycross_return_memory_size( ini_get('post_max_size') ) < $holycross_requirements_post_max_size ) {
	$holycross_php_post_max_size_text = '<i class="slz-no-icon dashicons dashicons-info"></i><strong>'.size_format(holycross_return_memory_size( ini_get('post_max_size') ) ).'</strong>';
	$holycross_php_post_max_size_description_text = '<span class="slz-error-message">' .esc_html__( 'The largest file size that can be contained in one post.', 'holycross'  ).' '. esc_html__( 'We recommend setting the post maximum size to at least:', 'holycross' ) .' <strong>'.size_format($holycross_requirements_post_max_size). '</strong>'.'. <a href="'.esc_url('http://docs.themefuse.com/the-core/your-theme/theme-settings/how-to-set-a-maximum-file-upload-size').'" target="_blank">'.esc_html__('Learn how to do it','holycross').'</a></span>';
}
else{
	$holycross_php_post_max_size_text = '<i class="slz-yes-icon dashicons dashicons-yes"></i><strong>'.size_format(holycross_return_memory_size( ini_get('post_max_size') ) ).'</strong>';
	$holycross_php_post_max_size_description_text = esc_html__( 'The largest file size that can be contained in one post', 'holycross'  );
}

// php time limit
$holycross_time_limit = ini_get('max_execution_time');
$holycross_required_php_time_limit = (int)$holycross_server_requirements['server']['php_time_limit'];
if ( $holycross_time_limit < $holycross_required_php_time_limit && $holycross_time_limit != 0 ) {
	$holycross_php_time_limit_text = '<i class="slz-no-icon dashicons dashicons-info"></i>'.'<strong>'.$holycross_time_limit.'</strong>';
	$holycross_php_time_limit_description_text = '<span class="slz-error-message">'.esc_html__( 'The amount of time (in seconds) that your site will spend on a single operation before timing out (to avoid server lockups).', 'holycross'  ).' '.esc_html__( 'We recommend setting the maximum execution time to at least', 'holycross').' <strong>'.$holycross_required_php_time_limit.'</strong>'.'. <a href="'.esc_url('http://codex.wordpress.org/Common_WordPress_Errors#Maximum_execution_time_exceeded').'" target="_blank">'.esc_html__('Learn how to do it','holycross').'</a></span>';
} else {
	$holycross_php_time_limit_description_text = esc_html__( 'The amount of time (in seconds) that your site will spend on a single operation before timing out (to avoid server lockups)', 'holycross'  );
	$holycross_php_time_limit_text = '<i class="slz-yes-icon dashicons dashicons-yes"></i>'.'<strong>'.$holycross_time_limit.'</strong>';
}

// php max input vars
$holycross_max_input_vars = ini_get('max_input_vars');
$holycross_required_input_vars = $holycross_server_requirements['server']['php_max_input_vars'];
if ( $holycross_max_input_vars < $holycross_required_input_vars ) {
	$holycross_php_max_input_vars_description_text = '<span class="slz-error-message">'.esc_html__( 'The maximum number of variables your server can use for a single function to avoid overloads.', 'holycross'  ). ' '.esc_html__( 'Please increase the maximum input variables limit to:','holycross').' <strong>' . $holycross_required_input_vars . '</strong>'.'. <a href="'.esc_url('http://docs.themefuse.com/the-core/your-theme/theme-settings/how-to-increase-the-maximum-input-variables-limit').'" target="_blank">'.esc_html__('Learn how to do it','holycross').'</a></span>';
	$holycross_php_max_input_vars_text = '<i class="slz-no-icon dashicons dashicons-info"></i><strong>'.$holycross_max_input_vars.'</strong>';
} else {
	$holycross_php_max_input_vars_description_text = esc_html__( 'The maximum number of variables your server can use for a single function to avoid overloads.', 'holycross'  );
	$holycross_php_max_input_vars_text = '<i class="slz-yes-icon dashicons dashicons-yes"></i><strong>'.$holycross_max_input_vars.'</strong>';
}

// suhosin
if( extension_loaded( 'suhosin' ) ) {
	$holycross_suhosin_text = '<i class="slz-no-icon dashicons dashicons-info"></i><strong>'.esc_html__('Yes', 'holycross').'</strong>';
	$holycross_suhosin_description_text = '<span class="slz-error-message">'. esc_html__( 'Suhosin is an advanced protection system for PHP installations and may need to be configured to increase its data submission limits', 'holycross'  ).'</span>';
	$holycross_max_input_vars      = ini_get( 'suhosin.post.max_vars' );
	$holycross_required_input_vars = $holycross_server_requirements['server']['suhosin_post_max_vars'];
	if ( $holycross_max_input_vars < $holycross_required_input_vars ) {
		$holycross_suhosin_description_text .= '<span class="slz-error-message">' . sprintf( wp_kses(__( '%s - Recommended Value is: %s. <a href="%s" target="_blank">Increasing max input vars limit.</a>', 'holycross' ), array( 'a' => array('href' => array()) ) ), $holycross_max_input_vars, '<strong>' . ( $holycross_required_input_vars ) . '</strong>', esc_url('http://docs.themefuse.com/the-core/your-theme/theme-settings/how-to-increase-the-maximum-input-variables-limit') ) . '</span>';
	}
}
else {
	$holycross_suhosin_text = '<i class="slz-yes-icon dashicons dashicons-yes"></i><strong>'.esc_html__('No', 'holycross').'</strong>';
	$holycross_suhosin_description_text = esc_html__( 'Suhosin is an advanced protection system for PHP installations.', 'holycross'  );
}

// mysql version
global $wpdb;
if( version_compare($wpdb->db_version(), $holycross_server_requirements['server']['mysql_version'], '<=') ){
	$holycross_mysql_version_text = '<i class="slz-no-icon dashicons dashicons-info"></i><strong>'.$wpdb->db_version().'</strong>';
	$holycross_mysql_version_description_text = '<span class="slz-error-message">' . esc_html__( 'The version of MySQL installed on your hosting server.', 'holycross'  ).' '. esc_html__( 'We recommend you update MySQL to the latest version. The minimum required version for this theme is:', 'holycross' ) .' <strong>'.$holycross_server_requirements['server']['mysql_version']. '</strong> '.esc_html__('Contact your hosting provider, they can install it for you.', 'holycross').'</span>';
}
else{
	$holycross_mysql_version_text = '<i class="slz-yes-icon dashicons dashicons-yes"></i><strong>'.$wpdb->db_version().'</strong>';
	$holycross_mysql_version_description_text = esc_html__( 'The version of MySQL installed on your hosting server', 'holycross'  );
}

// max upload size
$holycross_requirements_max_upload_size = holycross_return_memory_size($holycross_server_requirements['server']['max_upload_size']);
if ( wp_max_upload_size() < $holycross_requirements_max_upload_size ) {
	$holycross_max_upload_size_text = '<i class="slz-no-icon dashicons dashicons-info"></i><strong>'.size_format(wp_max_upload_size()).'</strong>';
	$holycross_max_upload_size_description_text = '<span class="slz-error-message">' . esc_html__( 'The largest file size that can be uploaded to your WordPress installation.', 'holycross'  ). ' '.esc_html__( 'We recommend setting the maximum upload file size to at least:', 'holycross' ) .' <strong>'.size_format($holycross_requirements_max_upload_size). '</strong>. <a href="'.esc_url('http://docs.themefuse.com/the-core/your-theme/theme-settings/how-to-set-a-maximum-file-upload-size').'" target="_blank">'.esc_html__('Learn how to do it', 'holycross').'</a></span>';
}
else{
	$holycross_max_upload_size_text = '<i class="slz-yes-icon dashicons dashicons-yes"></i><strong>'.size_format(wp_max_upload_size()).'</strong>';
	$holycross_max_upload_size_description_text = esc_attr__( 'The largest file size that can be uploaded to your WordPress installation', 'holycross'  );
}

// fsockopen
if( function_exists( 'fsockopen' ) || function_exists( 'curl_init' ) ) {
	$holycross_fsockopen_text = '<i class="slz-yes-icon dashicons dashicons-yes"></i><strong>'.esc_html__('Yes', 'holycross').'</strong>';
	$holycross_fsockopen_description_text = esc_html__( 'Payment gateways can use cURL to communicate with remote servers to authorize payments, other plugins may also use it when communicating with remote services', 'holycross' );
}
else{
	$holycross_fsockopen_text = '<i class="slz-no-icon dashicons dashicons-info"></i><strong>'.esc_html__('No', 'holycross').'</strong>';
	$holycross_fsockopen_description_text = '<span class="slz-error-message">'.wp_kses(__( 'Payment gateways can use cURL to communicate with remote servers to authorize payments, other plugins may also use it when communicating with remote services. Your server does not have <strong>fsockopen</strong> or <strong>cURL</strong> enabled thus PayPal IPN and other scripts which communicate with other servers will not work. Contact your hosting provider, they can install it for you.', 'holycross' ), array( '<strong>' => array() )).'</span>';
}

$options = array(
	'requirements_tab' => array(
		'title'   => esc_html__( 'Requirements', 'holycross' ),
		'type'    => 'tab',
		'options' => array(
			'wordpress-environment-box' => array(
				'title'   => esc_html__( 'WordPress Environment', 'holycross' ),
				'type'    => 'box',
				'options' => array(
					'home_url' => array(
						'attr'  => array( 'class' => 'slz-theme-requirements-option', ),
						'label' => esc_html__( 'Home URL', 'holycross' ),
						'desc'  => esc_html__( "The URL of your site's homepage", 'holycross' ),
						'type'  => 'html',
						'html'  => '<i class="slz-yes-icon dashicons dashicons-yes"></i>'.'<strong>'.esc_url(home_url('/')).'</strong>',
					),
					'site_url' => array(
						'attr'  => array( 'class' => 'slz-theme-requirements-option', ),
						'label' => esc_html__( 'Site URL', 'holycross' ),
						'desc'  => esc_html__( "The root URL of your site", 'holycross' ),
						'type'  => 'html',
						'html'  => '<i class="slz-yes-icon dashicons dashicons-yes"></i>'.'<strong>'.esc_url(site_url()).'</strong>',
					),
					'wp_version' => array(
						'attr'  => array( 'class' => 'slz-theme-requirements-option', ),
						'label' => esc_html__( 'WP Version', 'holycross' ),
						'desc'  => $holycross_wp_version_description_text,
						'type'  => 'html',
						'html'  => $holycross_wp_version_text,
					),
					'wp_multisite' => array(
						'attr'  => array( 'class' => 'slz-theme-requirements-option', ),
						'label' => esc_html__( 'WP Multisite', 'holycross' ),
						'type'  => 'html',
						'desc'  => esc_html__( 'Whether or not you have WordPress Multisite enabled', 'holycross' ),
						'html'  => $holycross_multisite_text,
					),
					'wp_debug_mode' => array(
						'attr'  => array( 'class' => 'slz-theme-requirements-option', ),
						'label' => esc_html__( 'WP Debug Mode', 'holycross' ),
						'type'  => 'html',
						'desc'  => $holycross_wp_debug_mode_description_text,
						'html'  => $holycross_wp_debug_mode_text,
					),
					'wp_memory_limit' => array(
						'attr'  => array( 'class' => 'slz-theme-requirements-option', ),
						'label' => esc_html__( 'WP Memory Limit', 'holycross' ),
						'desc'  => $holycross_wp_memory_limit_description_text,
						'type'  => 'html',
						'html'  => $holycross_wp_memory_limit_text,
					),
				)
			),
			'server-environment-box' => array(
				'title'   => esc_html__( 'Server Environment', 'holycross' ),
				'type'    => 'box',
				'options' => array(
					'server_info' => array(
						'attr'  => array( 'class' => 'slz-theme-requirements-option', ),
						'label' => esc_html__( 'Server Info', 'holycross' ),
						'desc'  => esc_html__( "Information about the web server that is currently hosting your site", 'holycross' ),
						'type'  => 'html',
						'html'  => '<i class="slz-yes-icon dashicons dashicons-yes"></i><strong>'.esc_html( $_SERVER['SERVER_SOFTWARE'] ).'</strong>',
					),
					'php_version' => array(
						'attr'  => array( 'class' => 'slz-theme-requirements-option', ),
						'label' => esc_html__( 'PHP Version', 'holycross' ),
						'desc'  => $holycross_php_version_description_text,
						'type'  => 'html',
						'html'  => $holycross_php_version_text,
					),
					'php_post_max_size' => array(
						'attr'  => array( 'class' => 'slz-theme-requirements-option', ),
						'label' => esc_html__( 'PHP Post Max Size', 'holycross' ),
						'desc'  => $holycross_php_post_max_size_description_text,
						'type'  => 'html',
						'html'  => $holycross_php_post_max_size_text,
					),
					'php_time_limit' => array(
						'attr'  => array( 'class' => 'slz-theme-requirements-option', ),
						'label' => esc_html__( 'PHP Time Limit', 'holycross' ),
						'desc'  => $holycross_php_time_limit_description_text,
						'type'  => 'html',
						'html'  => $holycross_php_time_limit_text,
					),
					'php_max_input_vars' => array(
						'attr'  => array( 'class' => 'slz-theme-requirements-option', ),
						'label' => esc_html__( 'PHP Max Input Vars', 'holycross' ),
						'desc'  => $holycross_php_max_input_vars_description_text,
						'type'  => 'html',
						'html'  => $holycross_php_max_input_vars_text,
					),
					'suhosin_installed' => array(
						'attr'  => array( 'class' => 'slz-theme-requirements-option', ),
						'label' => esc_html__( 'SUHOSIN Installed', 'holycross' ),
						'desc'  => $holycross_suhosin_description_text,
						'type'  => 'html',
						'html'  => $holycross_suhosin_text,
					),
					'zip_archive' => array(
						'attr'  => array( 'class' => 'slz-theme-requirements-option', ),
						'label' => esc_html__( 'ZipArchive', 'holycross' ),
						'desc'  => class_exists( 'ZipArchive' ) ? esc_html__('ZipArchive is required for importing demos. They are used to import and export zip files specifically for sliders', 'holycross') : '<span class="slz-error-message">'.esc_html__('ZipArchive is required for importing demos. They are used to import and export zip files specifically for sliders.', 'holycross').' '.esc_html__('Contact your hosting provider, they can install it for you.', 'holycross').'</span>',
						'type'  => 'html',
						'html'  => class_exists( 'ZipArchive' ) ? '<i class="slz-yes-icon dashicons dashicons-yes"></i><strong>'.esc_html__('Yes', 'holycross').'</strong>' : '<i class="slz-no-icon dashicons dashicons-info"></i><strong>'.esc_html__('No', 'holycross').'</strong>',
					),
					'mysql_version' => array(
						'attr'  => array( 'class' => 'slz-theme-requirements-option', ),
						'label' => esc_html__( 'MySQL Version', 'holycross' ),
						'desc'  => $holycross_mysql_version_description_text,
						'type'  => 'html',
						'html'  => $holycross_mysql_version_text,
					),
					'max_upload_size' => array(
						'attr'  => array( 'class' => 'slz-theme-requirements-option', ),
						'label' => esc_html__( 'Max Upload Size', 'holycross' ),
						'desc'  => $holycross_max_upload_size_description_text,
						'type'  => 'html',
						'html'  => $holycross_max_upload_size_text,
					),
					'fsockopen' => array(
						'attr'  => array( 'class' => 'slz-theme-requirements-option', ),
						'label' => esc_html__( 'fsockopen/cURL', 'holycross' ),
						'desc'  => $holycross_fsockopen_description_text,
						'type'  => 'html',
						'html'  => $holycross_fsockopen_text,
					),
					'legend' => array(
						'label' => false,
						'type'  => 'html',
						'html'  => '',
						'desc'  => '<i class="slz-yes-icon dashicons dashicons-yes"></i><span class="slz-success-message">'.esc_html__('Meets minimum requirements', 'holycross').'</span><br><i class="slz-no-icon dashicons dashicons-info"></i><span class="slz-error-message">'.esc_html__("We have some improvements to suggest", 'holycross').'</span>',
					),
				)
			),
		)
	),
);