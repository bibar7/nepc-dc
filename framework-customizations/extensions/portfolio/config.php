<?php if ( ! defined( 'SLZ' ) ) {
	die( 'Forbidden' );
}

$cfg = array();
// Enable/Disable taxonomy status
$cfg['enable_status'] = false;
// Enable/Disable taxonomy tags
$cfg['enable_tag'] = false;

$cfg['supports_comment'] = true;
$cfg['supports_author'] = true;

// Include {history, other } tab to Portfolio Options
$cfg['has_gallery'] = true;
$cfg['has_history_tab'] = false; // This tab is needs enable_status = true
$cfg['has_other_tab'] = true;
$cfg['has_team_tab'] = true;
$cfg['has_album_tab'] = false;

$cfg['image_size'] = array (
	'portfolio' => array(
		'large'				=> '550x350',
		'small'				=> '320x320',
		'no-image-large'	=> '550x350',
		'no-image-small'	=> '320x320'
	)
);
$cfg['mbox_name'] = esc_html__('Portfolio Options', 'holycross');

$cfg['sort_portfolio'] = array(
	esc_html__( '- Latest -', 'holycross' )         => '',
	esc_html__('A to Z', 'holycross')               => 'az_order',
	esc_html__('Z to A', 'holycross')               => 'za_order',
	esc_html__('Post is selected', 'holycross')     => 'post__in',
	esc_html__('Random', 'holycross')               => 'random_posts'
);
$cfg['enqueue_styles'] = true;