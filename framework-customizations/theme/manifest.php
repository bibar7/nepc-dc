<?php if ( ! defined( 'SLZ' ) ) {
	exit;
}

$manifest = array();

$manifest['id']                  = 'holycross';
$manifest['skin']                = 'main';

$manifest['requirements']        = array(
	'wordpress' => array(
		'min_version' => '4.4',
	),
);

$manifest['prefix'] = 'holycross';
$manifest['post_view_name']      = 'holycross_postview_number';
$manifest['sidebar_name']        = 'holycross-custom-sidebar';
$manifest['log_page_id']         = 'holycross-log';

$manifest['count_view_to_post_type'] = array(
	'post', 'slz-portfolio'
);

$manifest['supported_extensions'] = array(
	'portfolio'      => array(),
	'teams'          => array(),
	'gallery'        => array(),
	'new-tweet'      => array(),
	'backups'        => array(),
	'services'       => array(),
	'instagram'      => array(),
	'social-counter' => array(),
	'events'         => array(),
);
$manifest['theme_libs'] = array(
	'bootstrap', 'bootstrap-datepicker',
	'font-awesome', 'holycross-fonts',
);
$manifest['server_requirements'] = array(
	'server' => array(
		'wp_memory_limit'          => '256M', // use M for MB, G for GB
		'php_version'              => '5.2.4',
		'post_max_size'            => '8M',
		'php_time_limit'           => '1500',
		'php_max_input_vars'       => '4000',
		'suhosin_post_max_vars'    => '3000',
		'suhosin_request_max_vars' => '3000',
		'mysql_version'            => '5.6',
		'max_upload_size'          => '8M',
	),
);

$manifest['register_image_sizes'] = array(
	//post-thumbnail (1200x650)
	'holycross-thumb-350x350'       => array( 'width' => 350, 'height' => 350, 'crop' => array('center', 'top' ) ), // testimonials
	'holycross-thumb-800x600'       => array( 'width' => 800, 'height' => 600, 'crop' => array('center', 'top' ) ), // gallery,
	'holycross-thumb-800x500'       => array( 'width' => 800, 'height' => 500, 'crop' => array('center', 'top' ) ), // grid, block, portfolio
	'holycross-thumb-341x257'       => array( 'width' => 341, 'height' => 257, 'crop' => array('center', 'top' ) ), // grid
	'holycross-thumb-800x450'       => array( 'width' => 800, 'height' => 450, 'crop' => array('center', 'top' ) ), // portfolio,
	// post mansory small
	'holycross-thumb-550x350'       => array( 'width' => 550, 'height' => 350, 'crop' => array('center', 'top' ) ), // post mansory large
	'holycross-thumb-360x148'       => array( 'width' => 360, 'height' => 148, 'crop' => array('center', 'top' ) )
);

$manifest['css_supported_shortcodes'] = array();
$manifest['block_image_size'] = array(
	'team' => array( 
		'large'          => '600x600',
		'small'          => '350x350',
		'no-image-large' => '600x600',
		'no-image-small' => '350x350' 
	)
);