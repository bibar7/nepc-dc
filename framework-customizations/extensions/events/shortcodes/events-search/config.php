<?php

if ( ! defined( 'SLZ' ) ) {
	die ( 'Forbidden' );
}

$cfg = array ();

$cfg ['page_builder'] = array (
		'title' => __ ( 'SLZ Events Search', 'holycross' ),
		'description' => __ ( 'Show events search block', 'holycross' ),
		'tab' => slz()->theme->manifest->get('name'),
		'icon' => 'icon-slzcore-events-search slz-vc-slzcore',
		'tag' => 'slz_events_search' 
);

$cfg ['default_value'] = array (
	'extra_class' => ''
);
