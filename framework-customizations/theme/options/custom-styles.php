<?php if ( ! defined( 'SLZ' ) ) {
	exit;
}

$header_ext = slz_ext('headers');

if ( $header_ext != null )
{
	$options = array(
		'custom_styles_tab' => array(
			'title'   => esc_html__( 'Custom Styles', 'holycross' ),
			'type'    => 'tab',
			'options' => array(
				'custom_styles' => array(
					'type'  => 'code-editor',
					'mode'  => 'css',
					'label' => esc_html__('Custom Styles', 'holycross'),
					'desc'  => esc_html__('Custom Styles changes that will be applied to the theme', 'holycross'),
				)
			)
		)
	);
}
