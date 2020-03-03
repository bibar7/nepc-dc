<?php
$shortcode = slz_ext( 'shortcodes' )->get_shortcode( 'events_search' );

$vc_options = array(
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Extra Class', 'holycross' ),
		'param_name'  => 'extra_class',
		'value'       => '',
		'description' => esc_html__( 'Add extra class to button', 'holycross' )
	)
);