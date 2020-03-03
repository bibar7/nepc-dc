<?php

$style = array(
	esc_html__ ( 'Florida', 'holycross' )    => 'style-1',
	esc_html__ ( 'California', 'holycross' ) => 'style-2'
);
$vc_options = array(
	array (
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Style', 'holycross' ),
		'param_name'  => 'style',
		'value'       => $style,
		'description' => esc_html__( 'Choose style will be displayed.', 'holycross' )
	)
);