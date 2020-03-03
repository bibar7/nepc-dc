<?php if ( ! defined( 'SLZ' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['general'] = array(
	'id'             => esc_html__( 'slz_event_search', 'holycross' ),
	'name'           => esc_html__( 'SLZ: Event Search', 'holycross' ),
	'description'    => esc_html__( 'A event search form', 'holycross' ),
	'classname'      => 'slz-widget-event-search'
);
