<?php if (!defined('SLZ')) die('Forbidden');

/** @internal */
function holycross_filter_enable_widgets($args)
{
	$args = array(
		'SLZ_Widget_About_Us',
		'SLZ_Widget_Ads_Banner',
		'SLZ_Widget_Category',
		'SLZ_Widget_Contact',
		'SLZ_Widget_Custom_Post',
		'SLZ_Widget_Events',
		'SLZ_Widget_Event_Search',
		'SLZ_Widget_Gallery',
		'SLZ_Widget_Newsletter',
		'SLZ_Widget_New_Tweet',
		'SLZ_Widget_Material_Download',
		'SLZ_Widget_Recent_Post',
		'SLZ_Widget_Taxonomy',
		'SLZ_Widget_Tags',
		'SLZ_Widget_Post_Slider',
		'SLZ_Widget_Project',
		'SLZ_Widget_Social_Counter',
		'SLZ_Widget_Gallery_Carousel',
		'SLZ_Widget_Video',
		'SLZ_Widget_Instagram'
	);
	return $args;
}
add_filter('slz_ext_widgets_enable_widgets', 'holycross_filter_enable_widgets');