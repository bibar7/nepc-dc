<?php if ( ! defined( 'SLZ' ) ) {
	exit;
}
$align = array(
	'left'   => esc_html__('Left','holycross'),
	'right'  => esc_html__('Right','holycross'),
	'center' => esc_html__('Center','holycross')
	);

$general_box = array(
	'general-content-box' => array(
		'title'   => esc_html__( 'Area Setting', 'holycross' ),
		'type'    => 'box',
		'options' => array(
			'bg-color'    => array(
				'label'   => esc_html__( 'Background Color', 'holycross' ),
				'desc'    => esc_html__( "Select the page header background color", 'holycross' ),
				'value'   => '',
				'choices' => SLZ_Com::get_palette_color(),
				'type'    => 'color-palette'
			),
			'bg-image'   => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'bg-image-type' => array(
						'type'  => 'radio',
						'value' => 'upload-image',
						'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
						'label' => esc_html__('Background Image', 'holycross'),
						'choices' => array(
							'upload-image'  => esc_html__('Upload Image', 'holycross'),
							'feature-image' => esc_html__('Featured Image', 'holycross'),
						),
						'inline' => true,
					),
				),
				'choices'      => array(
					'upload-image' => array(
						'background-image' => array(
							'label'   => esc_html__( 'Image', 'holycross' ),
							'type'    => 'background-image',
							'value'   => 'none',
							'desc'    => esc_html__( 'Upload an image to make background image', 'holycross' ),
						),
					)
				),
			),
			'bg-attachment' => array(
				'type'    => 'select',
				'label'   => esc_html__('Background Attachment', 'holycross'),
				'choices' => SLZ_Params::get('option-bg-attachment'),
			),
			'bg-size' => array(
				'type'    => 'select',
				'label'   => esc_html__('Background Size', 'holycross'),
				'choices' => SLZ_Params::get('option-bg-size'),
			),
			'bg-position' => array(
				'type'    => 'select',
				'label'   => esc_html__('Background Position', 'holycross'),
				'choices' => SLZ_Params::get('option-bg-position'),
			),
			'text-align'  => array(
				'type'    => 'select',
				'label'   => esc_html__('Page Header Align', 'holycross'),
				'choices' => $align,
			),
			'height'    => array(
				'type'  => 'short-text',
				'label' => esc_html__( 'Page Header Height', 'holycross' ),
				'desc'  => esc_html__( 'Enter heigth in pixels. Ex:40 ', 'holycross' ),
				'value' => '40',
			),
		),
	),
);
$general_title_box = array(
	'title-content-box' => array(
		'title'   => esc_html__( 'Title Setting', 'holycross' ),
		'type'    => 'box',
		'options' => array(
			'general-pagetitle-title'   => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'enable-pt-title' => array(
						'type'         => 'switch',
						'value'        => 'enable',
						'label'        => esc_html__( 'Title On Page Header', 'holycross' ),
						'left-choice'  => array(
							'value' => 'disable',
							'label' => esc_html__( 'Disable', 'holycross' ),
						),
						'right-choice' => array(
							'value' => 'enable',
							'label' => esc_html__( 'Enable', 'holycross' ),
						)
					),
				),
				'choices'      => array(
					'enable' => array(
						'type-of-title' => array(
							'type'         => 'multi-picker',
							'label'        => false,
							'desc'         => false,
							'picker'       => array(
								'title-type' => array(
									'type'  => 'radio',
									'value' => 'title',
									'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
									'label' => esc_html__('Choose Title', 'holycross'),
									'choices' => array(
										'title'      => esc_html__('Page Title','holycross'),
										'custom'     => esc_html__('Custom','holycross'),
									),
									'inline' => true,
								),
							),
							'choices'      => array(
								'custom' => array(
									'custom-title' => array(
										'label'   => esc_html__( 'Custom Title', 'holycross' ),
										'type'    => 'text',
										'value'   => '',
										'desc'    => esc_html__( 'Enter custom title to display in page header', 'holycross' ),
									),
								)
							),
						),
						'title-typography' => array(
							'type'         => 'typography',
							'label'        => esc_html__( 'Styling', 'holycross' ),
							'value' => array(
								'size'   => 24,
								'color'  => '#ffffff'
							),
							'components' => array(
								'family' => false,
							),
						),
					),
				),
			),
		),
	),
);
$post_title_box = array(
	'title-content-box' => array(
		'title'   => esc_html__( 'Title Setting', 'holycross' ),
		'type'    => 'box',
		'options' => array(
			'general-pagetitle-title'   => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'enable-pt-title' => array(
						'type'         => 'switch',
						'value'        => 'enable',
						'label'        => esc_html__( 'Title On Page Header', 'holycross' ),
						'left-choice'  => array(
							'value' => 'disable',
							'label' => esc_html__( 'Disable', 'holycross' ),
						),
						'right-choice' => array(
							'value' => 'enable',
							'label' => esc_html__( 'Enable', 'holycross' ),
						)
					),
				),
				'choices'      => array(
					'enable' => array(
						'type-of-title' => array(
							'type'         => 'multi-picker',
							'label'        => false,
							'desc'         => false,
							'picker'       => array(
								'title-type' => array(
									'type'  => 'radio',
									'value' => 'level',
									'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
									'label' => esc_html__('Choose Title', 'holycross'),
									'choices' => array(
										'title'      => esc_html__( 'Post Title','holycross' ),
										'level'      => esc_html__( 'Category','holycross' ),
										'custom'     => esc_html__( 'Custom','holycross' ),
									),
									'inline' => true,
								),
							),
							'choices'      => array(
								'custom' => array(
									'custom-title' => array(
										'label'   => esc_html__( 'Custom Title', 'holycross' ),
										'type'    => 'text',
										'value'   => '',
										'desc'    => esc_html__( 'Enter custom title to display in page header', 'holycross' ),
									),
								)
							),
						),
						'title-typography' => array(
							'type'         => 'typography',
							'label'        => esc_html__( 'Styling', 'holycross' ),
							'value' => array(
								'size'   => 24,
								'color'  => '#ffffff'
							),
							'components' => array(
								'family' => false,
							),
						),
					),
				),
			),
		),
	),
);
$breadcrumb_box = array(
	'breadcrumb-content-box'	=> array(
		'title'   => esc_html__( 'Breadcrumb Setting', 'holycross' ),
		'type'    => 'box',
		'options' => array(
			'general-pagetitle-bc'   => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'enable-pt-breadcrumb' => array(
						'type'         => 'switch',
						'value'        => 'enable',
						'label'        => esc_html__( 'Breadcrumb On Page Header', 'holycross' ),
						'left-choice'  => array(
							'value' => 'disable',
							'label' => esc_html__( 'Disable', 'holycross' ),
						),
						'right-choice' => array(
							'value' => 'enable',
							'label' => esc_html__( 'Enable', 'holycross' ),
						)
					),
				),
				'choices'      => array(
					'enable' => array(
						'breadcrumb' => array(
							'type'         => 'typography',
							'label'        => esc_html__( 'Breadcrumb Styling', 'holycross' ),
							'value' => array(
								'size'   => 16,
								'color'  => '#ffffff'
							),
							'components' => array(
								'family' => false,
							),
						),
						'breadcrumb-active' => array(
							'type'         => 'typography',
							'label'        => esc_html__( 'Breadcrumb Active Styling', 'holycross' ),
							'value' => array(
								'size'   => 16,
								'color'  => '#ffffff'
							),
							'components' => array(
								'family' => false,
							),
						),
					),
				),
			),
		),
	)
);

$general_tab = array(
	'title'   => esc_html__( 'General', 'holycross' ),
	'type'    => 'tab',
	'options' => array(
		'general-pagetitle'   => array(
			'type'         => 'multi-picker',
			'label'        => false,
			'desc'         => false,
			'picker'       => array(
				'enable-page-title' => array(
					'type'         => 'switch',
					'value'        => 'enable',
					'label'        => esc_html__( 'Page Header Area', 'holycross' ),
					'left-choice'  => array(
						'value' => 'disable',
						'label' => esc_html__( 'Disable', 'holycross' ),
					),
					'right-choice' => array(
						'value' => 'enable',
						'label' => esc_html__( 'Enable', 'holycross' ),
					)
				),
			),
			'choices'      => array(
				'enable' => array(
					$general_box,
					$general_title_box,
					$breadcrumb_box
				),
			),
		),
	),
); // general tab

$post_tab = array(
	'title'   => esc_html__( 'Posts', 'holycross' ),
	'type'    => 'tab',
	'options' => array(
		'post-pagetitle'   => array(
			'type'         => 'multi-picker',
			'label'        => false,
			'desc'         => false,
			'picker'       => array(
				'enable-page-title' => array(
					'type'         => 'switch',
					'value'        => 'enable',
					'label'        => esc_html__( 'Page Header Area', 'holycross' ),
					'left-choice'  => array(
						'value' => 'disable',
						'label' => esc_html__( 'Disable', 'holycross' ),
					),
					'right-choice' => array(
						'value' => 'enable',
						'label' => esc_html__( 'Enable', 'holycross' ),
					)
				),
			),
			'choices'      => array(
				'enable' => array(
					$general_box,
					$post_title_box,
					$breadcrumb_box
				),
			),
		),
	),
); // post tab

$options_tab = array(
	$general_tab,
	$post_tab,
); // option tab
$active_posttype_ext = slz()->theme->get_config('active_posttype_ext');
$option_title = array(
	'slz-portfolio'   => esc_html__( 'Portfolio', 'holycross' ),
	'slz-team'        => esc_html__( 'Team', 'holycross' ),
	'slz-service'     => esc_html__( 'Service', 'holycross'),
	'slz-event'       => esc_html__( 'Event', 'holycross'),
	'product'         => esc_html__( 'Product', 'holycross'),
);
foreach( $active_posttype_ext as $option => $extension ) {
	// check extension is activated
	if( ( $option != 'product' && ! slz_ext( $extension ) ) || ( $option == 'product' && ! HOLYCROSS_WC_ACTIVE ) ) {
		continue;
	}
	$posttype = str_replace( 'slz-', '', $option );
	$options_tab[] =  array(
		$posttype.'-tab' => array(
			'title'   => $option_title[$option],
			'type'    => 'tab',
			'options' => array(
				$option.'-pagetitle' => array(
					'type'         => 'multi-picker',
					'label'        => false,
					'desc'         => false,
					'picker'       => array(
						'enable-page-title' => array(
							'type'         => 'switch',
							'value'        => 'enable',
							'label'        => esc_html__( 'Page Header Area', 'holycross' ),
							'left-choice'  => array(
								'value' => 'disable',
								'label' => esc_html__( 'Disable', 'holycross' ),
							),
							'right-choice' => array(
								'value' => 'enable',
								'label' => esc_html__( 'Enable', 'holycross' ),
							),
						),
					),
					'choices'      => array(
						'enable' => array(
							$general_box,
							$post_title_box,
							$breadcrumb_box
						),
					),
				),
			),
		),
	);
}

$options = array(
	'page-title' => array(
		'title'   => esc_html__( 'Page Header', 'holycross' ),
		'type'    => 'tab',
		'options' => $options_tab,
	)
);
