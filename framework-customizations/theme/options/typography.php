<?php if ( ! defined( 'SLZ' ) ) {
	exit;
}
$site_default_colors = (array)slz()->theme->get_config('site_default_colors');
// This is config follow to theme
$site_custom_colors = (array) slz()->theme->get_config('site_custom_colors');
foreach( $site_custom_colors as $key => $variant ){
	$site_options[$key] = array(
		'label'   => $variant[1],
		'desc'    => $variant[2],
		'value'   => $variant[0],
		'choices' => $site_default_colors,
		'type'    => 'color-palette'
	);
}
$skin_box = array(
	'title'   => esc_html__( 'Styling Settings', 'holycross' ),
	'type'    => 'box',
	'options' => array(
		'styling-skin-colors' => array(
			'type'         => 'multi-picker',
			'label'        => false,
			'desc'         => false,
			'picker'       => array(
				'custom-style' => array(
					'type'         => 'switch',
					'value'        => 'default',
					'label'        => esc_html__( 'Custom Colors', 'holycross' ),
					'left-choice'  => array(
						'value' => 'default',
						'label' => esc_html__( 'Default', 'holycross' ),
					),
					'right-choice' => array(
						'value' => 'custom',
						'label' => esc_html__( 'Custom', 'holycross' ),
					),
				),
			),
			'choices'      => array(
				'custom' => $site_options,
			),
		),
	)
);
$link_box = array(
	'title'   => esc_html__( 'Link Settings', 'holycross' ),
	'type'    => 'box',
	'options' => array(
		'styling-link-colors' => array(
			'type'         => 'multi-picker',
			'label'        => false,
			'desc'         => false,
			'picker'       => array(
				'custom-style' => array(
					'type'         => 'switch',
					'value'        => 'default',
					'label'        => esc_html__( 'Custom Link Colors', 'holycross' ),
					'left-choice'  => array(
						'value' => 'default',
						'label' => esc_html__( 'Default', 'holycross' ),
					),
					'right-choice' => array(
						'value' => 'custom',
						'label' => esc_html__( 'Custom', 'holycross' ),
					),
				),
			),
			'choices'      => array(
				'custom' => array(
					'regular-color' => array(
						'label'   => esc_html__( 'Regular Color', 'holycross' ),
						'type'    => 'color-picker',
						'value'   => '#555555',
						'desc'    => esc_html__( 'Select a color for link', 'holycross' ),
					),
					'hover-color'  => array(
						'label'   => esc_html__( 'Hover Color', 'holycross' ),
						'desc'    => esc_html__( 'Select a color for link hover', 'holycross' ),
						'value'   => '#cf4a46',
						'type'    => 'color-picker',
					),
					'active-color'  => array(
						'label'   => esc_html__( 'Active Color', 'holycross' ),
						'desc'    => esc_html__( 'Select a color for link active', 'holycross' ),
						'value'   => '#cf4a46',
						'type'    => 'color-picker',
					),
				),
			),
		),
	)
);
$font_box = array(
	'label' => esc_html__( 'Typography', 'holycross' ),
	'type'  => 'typography-v2',
	'desc'  => '',
	'value' => array(
		'family'        => 'Source Sans Pro',
		// For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
		'variation'      => 'regular',
		'size'           => 16,
		'line-height'    => 28,
		'letter-spacing' => '',
		'color'          => '#555555'
	),
	'components' => array(
		'family'         => true,
		'size'           => true,
		'line-height'    => true,
		'letter-spacing' => true,
		'color'          => true,
		'subset'         => false,
	),
);
$setting_array = array(
	'body' => esc_html__( 'Body Text', 'holycross' ),
	'paragraph' => esc_html__( 'Paragraph', 'holycross' ),
	'h1' => esc_html__( 'H1 Text', 'holycross' ),
	'h2' => esc_html__( 'H2 Text', 'holycross' ),
	'h3' => esc_html__( 'H3 Text', 'holycross' ),
	'h4' => esc_html__( 'H4 Text', 'holycross' ),
	'h5' => esc_html__( 'H5 Text', 'holycross' ),
	'h6' => esc_html__( 'H6 Text', 'holycross' ),
);
$typo_options = array();
foreach($setting_array as $key => $label ) {
	$typo_options['typo-' . $key] = array(
		'type'         => 'multi-picker',
		'label'        => false,
		'desc'         => false,
		'picker'       => array(
			'custom-style' => array(
				'type'         => 'switch',
				'value'        => 'default',
				'label'        => $label,
				'left-choice'  => array(
					'value' => 'default',
					'label' => esc_html__( 'Default', 'holycross' ),
				),
				'right-choice' => array(
					'value' => 'custom',
					'label' => esc_html__( 'Custom', 'holycross' ),
				),
			),
		),
		'choices'      => array(
			'custom' => array(
				'typography' => $font_box,
			),
		)
	);
}
$typography_content_box = array(
	'title'   => esc_html__( 'Typography Settings', 'holycross' ),
	'type'    => 'box',
	'options' => $typo_options,
);
$options = array(
	'title'   => esc_html__( 'Styling / Typography', 'holycross' ),
	'type'    => 'tab',
	'options' => array(
		'skin-content-box' => $skin_box,
		'link-content-box' => $link_box,
		'typography-content-box' => $typography_content_box,
	),
);