<?php if ( ! defined( 'SLZ' ) ) {
	exit;
}
/**
 * Theme config
 *
 * @var array $cfg Fill this array with configuration data
 */

$cfg = array();
$cfg['settings_form_side_tabs'] = true;

$cfg['posts_rating'] = array(
);

$cfg['sidebar_mapping'] = array(
	'post'            => 'blog-sidebar',
	'page'            => 'page-sidebar',
	'slz-portfolio'   => 'portfolio-sidebar',
	'slz-team'        => 'team-sidebar',
	'slz-service'     => 'service-sidebar',
	'slz-event'       => 'event-sidebar',
	'product'         => 'product-sidebar',
	'archive_slz-portfolio'   => 'portfolio-ac-sidebar',
	'archive_slz-service'     => 'service-ac-sidebar',
	'archive_slz-team'        => 'team-ac-sidebar',
	'archive_slz-event'       => 'event-ac-sidebar',
);
// post
$cfg['post_template_default'] = array(
	'main-blog-article-style' => 'article_04',
	'archive-article-style'   => 'article_04',
	'category-article-style'  => 'article_04',
	'tag-article-style'       => 'article_04',
	'author-article-style'    => 'article_04',
	'search-article-style'    => 'article_04',
	'blog-layout'             => 'post_05',
);

$cfg['post_info'] = array();
$cfg['post_format_setting'] = array();
$cfg['ribbon_date_format'] = array(
	'day'   => esc_html_x('d','daily posts date format', 'holycross'),
	'month' => esc_html_x('M','daily posts date format', 'holycross'),
	'year'  => esc_html_x('Y','daily posts date format', 'holycross'),
);

$cfg['map_config'] = array(
    'color'    => array(

        array(
            "featureType" => "water",
            "elementType" => "geometry",
            "stylers" => array(
                array(
                    "color" => "#e9e9e9"
                ), 
                array(
                    "lightness" => 17
                )
            )
        ), 
        array(
            "featureType" => "landscape",
            "elementType" => "geometry",
            "stylers" => array(
                array(
                    "color" => "#f5f5f5"
                ), 
                array(
                    "lightness" => 20
                )
            )
        ), 
        array(
            "featureType" => "road.highway",
            "elementType" => "geometry.fill",
            "stylers" => array(
                array(
                    "color" => "#ffffff"
                ), 
                array(
                    "lightness" => 17
                )
            )
        ), 
        array(
            "featureType" => "road.highway",
            "elementType" => "geometry.stroke",
            "stylers" => array(
                array(
                    "color" => "#ffffff"
                ), array(
                    "lightness" => 29
                ), array(
                    "weight" => 0.2
                )
            )
        ), 
        array(
            "featureType" => "road.arterial",
            "elementType" => "geometry",
            "stylers" => array(
                array(
                    "color" => "#ffffff"
                ), array(
                    "lightness" => 18
                )
            )
        ), 
        array(
            "featureType" => "road.local",
            "elementType" => "geometry",
            "stylers" => array(
                array(
                    "color" => "#ffffff"
                ), array(
                    "lightness" => 16
                )
            )
        ), 
        array(
            "featureType" => "poi",
            "elementType" => "geometry",
            "stylers" => array(
                array(
                    "color" => "#f5f5f5"
                ), 
                array(
                    "lightness" => 21
                )
            )
        ), 
        array(
            "featureType" => "poi.park",
            "elementType" => "geometry",
            "stylers" => array(
                array(
                    "color" => "#dedede"
                ), array(
                    "lightness" => 21
                )
            )
        ), 
        array(
            "elementType" => "labels.text.stroke",
            "stylers" => array(
                array(
                    "visibility" => "on"
                ), 
                array(
                    "color" => "#ffffff"
                ), 
                array(
                    "lightness" => 16
                )
            )
        ), 
        array(
            "elementType" => "labels.text.fill",
            "stylers" => array(
                array(
                    "saturation" => 36
                ), 
                array(
                    "color" => "#333333"
                ), 
                array(
                    "lightness" => 40
                )
            )
        ), 
        array(
            "elementType" => "labels.icon",
            "stylers" => array(
                array(
                    "visibility" => "off"
                )
            )
        ), 
        array(
            "featureType" => "transit",
            "elementType" => "geometry",
            "stylers" => array(
                array(
                    "color" => "#f2f2f2"
                ), 
                array(
                    "lightness" => 19
                )
            )
        ), 
        array(
            "featureType" => "administrative",
            "elementType" => "geometry.fill",
            "stylers" => array(
                array(
                    "color" => "#fefefe"
                ), 
                array(
                    "lightness" => 20
                )
            )
        ),
        array(
            "featureType" => "administrative",
            "elementType" => "geometry.stroke",
            "stylers" => array(
                array(
                    "color" => "#fefefe"
                ), 
                array(
                    "lightness" => 17
                ), 
                array(
                    "weight" => 1.2
                )
            )
        ),
    )
);
//post type => extension name
$cfg['active_posttype_ext'] = array(
	'slz-portfolio'   => 'portfolio',
	'slz-event' 	  => 'events',
	'slz-service'     => 'services',
	'slz-team'        => 'teams',
	'product'         => 'product'
);
$cfg['custom_ac_posttype_template'] = array(
	'slz-portfolio' => 'portfolio-ac-title',
	'slz-event'     => 'event-ac-title',
	'slz-team'      => 'team-ac-title',
	'slz-service'   => 'service-ac-title',
);
$cfg['price_paypal'] = array(
	'5',
	'10',
	'15',
	'20',
);

// Some of suggest colors for theme
$cfg['color_settings'] = array(
	'color_1' => '#31c290',
	'color_2' => '#49ca9f',
	'color_3' => '#1f1f1f',
	'color_4' => '#808080',
	'color_5' => '#ebebeb'
);
// Typography & custom color config <<
$cfg['typography_settings'] = array(
	'typo-body' => 'body',
	'typo-paragraph' => 'p',
	'typo-h1' => 'h1, .entry-content h1',
	'typo-h2' => 'h2, .entry-content h2',
	'typo-h3' => 'h3, .entry-content h3',
	'typo-h4' => 'h4, .entry-content h4',
	'typo-h5' => 'h5, .entry-content h5',
	'typo-h6' => 'h6, .entry-content h6',
);
// Some of suggest colors for theme
$cfg['site_default_colors'] = array(
	'color_1' => '#cf4a46',
	'color_2' => '#7bc5a2',
	'color_3' => '#687dd8',
	'color_4' => '#e86830',
	'color_5' => '#4cc3bb',
	'color_6' => '#ff6b6b',
	'color_7' => '#00aff0',
	'color_8' => '#ed9914'
);
// This config to setting color to theme ( key => default color, label, desc )
$cfg['site_custom_colors'] = array(
	'main-color'    => array('#cf4a46', esc_html__( 'Main Color', 'holycross' ), esc_html__( 'Select the main color', 'holycross' ) ),
);
// >> Typography & custom color config
