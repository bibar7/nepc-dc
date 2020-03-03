<?php if ( ! defined( 'SLZ' ) ) {
	die( 'Forbidden' );
}

$cfg                               = array();
$cfg['enable_extension_css']       = array(
	'events',
	'gallery',
	'portfolio',
	'posts',
	'widgets',
);
$cfg['enable_breakingnews']        = FALSE;
$cfg['enable_post_format_gallery'] = TRUE;
$cfg['enable_extension_js']        = array(
	'events',
	'gallery',
	'portfolio',
	'services',
	'teams'
);
$cfg['enable_shortcodes_css']      = array(
	'accordion',
	'author-list',
	'button',
	'counter',
	'counterv2',
	'contact',
	'icon-box',
	'image-carousel',
	'main-title',
	'components',
	'posts-carousel',
	'posts-grid',
	'pricing-box',
);
$cfg['extra_css']                  = array(
	'holycross-contact',
	'holycross-events',
	'holycross-feature',
	'holycross-gallery',
	'holycross-isotope',
	'holycross-newsletter',
	'holycross-portfolio',
	'holycross-pricing-box',
	'holycross-team',
	'holycross-icon-box',
);