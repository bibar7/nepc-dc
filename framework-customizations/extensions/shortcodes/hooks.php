<?php if (!defined('SLZ')){
	exit;
}

/** @internal */
function holycross_filter_enable_shortcodes($args)
{
	$args = array(
		'accordion',
		'ads_banner',
		'author_list',
		'button',
		'category',
		'contact',
		'contact_form',
		'counterv2',
		'event_block',
		'event_carousel',
		'events_search',
		'gallery_carousel',
		'gallery_tab',
		'icon_box',
		'image',
		'image_carousel',
		'instagram',
		'isotope',
		'item_list',
		'main_title',
		'map',
		'material_download',
		'new_tweet',
		'newsletter',
		'portfolio_list',
		'portfolio_carousel',
		'posts_block',
		'posts_carousel',
		'posts_mansory',
		'progress_bar',
		'pricing_box',
		'service_list',
		'social_counter',
		'tabs',
		'tags',
		'team_list',
		'team_carousel',
		'video',
		'video_carousel'
	);
	return $args;
}
add_filter('slz_ext_shortcodes_enable_shortcodes', 'holycross_filter_enable_shortcodes');