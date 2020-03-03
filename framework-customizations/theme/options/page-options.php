<?php if ( ! defined( 'SLZ' ) ) {
    exit;
}
$title_type = array(
	'default'    => esc_html__(' Default','holycross'),
	'title'      => esc_html__(' Post Title','holycross'),
	'level'      => esc_html__(' Category','holycross'),
	'custom'     => esc_html__(' Custom','holycross'),
);
if( is_admin() ) {
	$screen = get_current_screen();
	if($screen && $screen->post_type == 'page' ) {
		$title_type = array(
			'default'    => esc_html__(' Default','holycross'),
			'title'      => esc_html__(' Page Title','holycross'),
			'custom'     => esc_html__(' Custom','holycross'),
		);
	}
}
$options = array(
	'page-title' => array(
		'title'   => esc_html__( 'Page Header', 'holycross' ),
		'type'    => 'tab',
		'options' => array(
			'pagetitle-options'   => array(
				'type'         => 'multi-picker',
				'label'        => false,
				'desc'         => false,
				'picker'       => array(
					'enable-page-option' => array(
						'type'         => 'switch',
						'value'        => 'yes',
						'label'        => esc_html__( 'Default Setting', 'holycross' ),
						'left-choice'  => array(
							'value' => 'disable',
							'label' => esc_html__( 'Default', 'holycross' ),
						),
						'right-choice' => array(
							'value' => 'enable',
							'label' => esc_html__( 'Custom', 'holycross' ),
						)
					),
				),
				'choices'      => array(
					'enable' => array(
						'group-pagetitle'   => array(
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
									'bg-image'   => array(
										'type'         => 'multi-picker',
										'label'        => false,
										'desc'         => false,
										'picker'       => array(
											'bg-image-type'	=> array(
												'type'  => 'radio',
												'value' => 'upload-image',
												'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
												'label' => esc_html__('Background Image', 'holycross'),
												'choices' => array(
													'upload-image' => esc_html__('Upload Image', 'holycross'),
													'feature-image' => esc_html__('Featured Image', 'holycross'),
												),
												'inline' => true,
											),
										),
										'choices'      => array(
											'upload-image' => array(
												'background-image'	=> array(
													'label'   => esc_html__( 'Image', 'holycross' ),
													'type'    => 'background-image',
													'value'   => 'none',
													'desc'    => esc_html__( 'Upload an image to make background image',
														'holycross' ),
			
												),
											)
										),
									),
									'height'        => array(
										'type'  => 'short-text',
										'label' => esc_html__( 'Page Header Height', 'holycross' ),
										'desc'  => esc_html__( 'Enter heigth in pixels. Ex:80 ', 'holycross' ),
										'value' => '80',
									),
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
									'type-of-title'	=>	array(
										'type'         => 'multi-picker',
										'label'        => false,
										'desc'         => false,
										'picker'       => array(
											'title-type' => array(
												'type'  => 'radio',
												'value' => '',
												'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
												'label' => esc_html__('Choose Title', 'holycross'),
												'choices' => $title_type,
												'desc'    => esc_html__( 'Choose title to display in page header. To get setting from "Theme Setting", choose "Default"','holycross' ),
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
							),
						),
					),
				),
				'show_borders' => true,
			),
		)
	),
);