<?php if ( ! defined( 'SLZ' ) ) {
	die( 'Forbidden' );
}

$cfg                      = array();

$cfg['default_values']    = array(
'image_display'           => 'show',
'event_time_display'      => 'show',
'event_location_display'  => 'show',
'event_address_display'   => 'show',
'description_display'     => 'show',
);

$cfg['has_artist_band']   = false;
$cfg['is_multiple_price'] = false;
$cfg['has_banner_ticket_bg'] = false;

// Include {history, other } tab to Project Options
$cfg['has_gallery']       = true;
$cfg['has_history_tab']   = false; // This tab is needs enable_status = true
$cfg['has_other_tab']     = true;
$cfg['has_team_tab']      = false;
$cfg['has_album_tab']     = false;

$cfg['has_status_taxonomy'] = true;
$cfg['has_attr_show_btn'] = true;