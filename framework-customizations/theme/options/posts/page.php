<?php if ( ! defined( 'SLZ' ) ) {
	exit;
}
$default = array(
	'default'   => array(
		'small' => array(
			'height' => 70,
			'src'    => HOLYCROSS_OPTION_IMG_URI . '/default.png'
		),
		'large' => array(
			'height' => 214,
			'src'    => HOLYCROSS_OPTION_IMG_URI . '/default.png'
		),
	)
);
$regist_sidebars = array_merge( array( 'default' => esc_html__('-- Default --', 'holycross') ), SLZ_Com::get_regist_sidebars() );

// revolution slider
$revolution_sliders = slz_extra_get_revolution_slider();

$page_header = slz()->theme->get_options( 'page-options' );

$footer_options =  slz()->theme->get_options( 'footer-options' );

$regist_menu = array( 'default' => __('-- Select Menu --', 'holycross') ) + SLZ_Com::get_regist_menu();
$header_options_choices = (array)slz_ext('headers')->get_header_choices();
$footer_options_choices = (array)slz_ext('footers')->get_footer_choices();

// custom color
$site_default_colors = (array)slz()->theme->get_config('site_default_colors');
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
$options = array(
	'page-settings'=> array(
		'type'    => 'box',
		'title'   => esc_html__(' Page Options','holycross' ),
		'options' => array(
			'page-general-settings' => array(
				'title'   => esc_html__( 'General Settings', 'holycross' ),
				'type'    => 'tab',
				'options' => array(
					'page-header-style' => array(
						'label'   => esc_html__( 'Header Style', 'holycross' ),
						'type'    => 'image-picker',
						'attr'    => array('class' => 'slz-image-picker-max-width' ),
						'choices' => array_merge( $default, $header_options_choices ),
						'value'   => 'default'
					),
					'page-header-transparent' => array(
						'type'    => 'select',
						'label'   => esc_html__('Header Transparent', 'holycross'),
						'choices' => array(
							''    =>  esc_html__('Default' ,'holycross'),
							'header-transparent' =>  esc_html__('Yes' ,'holycross'),
							'no'  =>  esc_html__('No' ,'holycross')
						)
					),
					'page-main-menu' => array(
						'type'   => 'multi-picker',
						'label'  => false,
						'desc'   => false,
						'picker' => array(
							'options' => array(
								'type'  => 'switch',
								'value' => '',
								'label' => esc_html__( 'Header Menu', 'holycross' ),
								'left-choice' => array(
									'value' => 'custom',
									'label' => esc_html__( 'Custom', 'holycross' )
								),
								'right-choice' => array(
									'value' => '',
									'label' => esc_html__( 'Default', 'holycross' )
								)
							)
						),
						'choices' => array(
							'custom' => array(
								'main-menu' => array(
									'type'    => 'select',
									'label'   => esc_html__('Custom Menu', 'holycross'),
									'desc'    => esc_html__('Select menu to display in header.', 'holycross'),
									'choices' => $regist_menu,
									'show_borders' => true,
								)
							)
						)
					),
					'page-logo' => array(
						'type'        => 'upload',
						'label'       => esc_html__('Logo Image', 'holycross'),
						'desc'        => esc_html__('Upload the site logo .png or .jpg', 'holycross'),
						'images_only' => true,
					),
					'page-logo-transparent'   => array(
						'type'   => 'multi-picker',
						'label'  => false,
						'desc'   => false,
						'picker' => array(
							'logo_transparent_options' => array(
								'type'  => 'switch',
								'value' => 'disable',
								'label' => esc_html__( 'Logo Transparent', 'holycross' ),
								'left-choice' => array(
									'value' => 'enable',
									'label' => esc_html__( 'Enable', 'holycross' ),
								),
								'right-choice' => array(
									'value' => 'disable',
									'label' => esc_html__( 'Disable', 'holycross' ),
								)
							),
						),
						'choices' => array(
							'enable' => array(
								'logo-transparent'	=>	array(
									'type'        => 'upload',
									'label'       => esc_html__('Logo Image Transparent', 'holycross'),
									'desc'        => esc_html__('Upload the site logo .png or .jpg use for transparent', 'holycross'),
									'images_only' => true,
								),
							),
						),
					),
					'page-slider'  => array(
						'type'     => 'select',
						'label'    => esc_html__('Revolution Slider', 'holycross'),
						'desc'     => esc_html__('You can add revolution slider in header.','holycross'),
						'choices'  => $revolution_sliders ,
						'value'    => ''
					),
					'page-footer-style' => array(
						'type'   => 'multi-picker',
						'label'  => false,
						'desc'   => false,
						'picker' => array(
							'footer-style' => array(
								'label'   => esc_html__( 'Footer Style', 'holycross' ),
								'type'    => 'image-picker',
								'attr'    => array('class' => 'slz-image-picker-max-width' ),
								'choices' => array_merge( $default, $footer_options_choices ),
								'value'   => 'default'
							),
						),
						'choices'      => $footer_options,
						'show_borders' => false,
					),
					'page-sidebar-layout' => array(
						'label' => esc_html__( 'Sidebar Layout', 'holycross' ),
						'desc'  => esc_html__( 'Set how to display page sidebar.', 'holycross' ),
						'type'  => 'image-picker',
						'attr'  => array('class' => 'slz-image-picker-max-width' ),
						'choices' => array_merge( $default, array(
							'left' => array(
								'small' => array(
									'height' => 50,
									'src'    => HOLYCROSS_OPTION_IMG_URI . '/sidebar/left.png'
								)
							),
							'right' => array(
								'small' => array(
									'height' => 50,
									'src'    => HOLYCROSS_OPTION_IMG_URI . '/sidebar/right.png'
								)
							),
							'none' => array(
								'small' => array(
									'height' => 50,
									'src'    => HOLYCROSS_OPTION_IMG_URI . '/sidebar/full.png'
								)
							),
						) ),
						'value' => 'default'
					),
					'page-sidebar' => array(
						'type'    => 'select',
						'label'   => esc_html__('Choose Sidebar', 'holycross'),
						'desc'    => esc_html__('You can create new sidebar in','holycross').' <br><a href="' . esc_url( admin_url( 'widgets.php' ) ) . '" >'.esc_html__('Appearance','holycross').' > '.esc_html__('Widgets','holycross').'</a>',
						'choices' => $regist_sidebars,
						'value'   => 'default'
					),
					'ct-padding-top' => array(
						'type'  => 'text',
						'label' => esc_html__( 'Content Padding Top', 'holycross' ),
						'desc'  => esc_html__( 'Custom padding top for content (px).', 'holycross' ),
						'value' => '',
					),
					'ct-padding-bottom' => array(
						'type'  => 'text',
						'label' => esc_html__( 'Content Padding Bottom', 'holycross' ),
						'desc'  => esc_html__( 'Custom padding bottom for content (px).', 'holycross' ),
						'value' => '',
					),
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
                    'subcribe' => array(
                        'type'	=> 'multi-picker',
                        'label'   => false,
                        'desc'	=> false,
                        'picker'  => array(
                            'enable-subcribe' => array(
                                'type'         => 'switch',
                                'value'        => 'hide',
                                'label'        => esc_html__( 'Show Banner?', 'holycross' ),
                                'desc'         => esc_html__( 'Show Banner in Footer', 'holycross' ),
                                'left-choice'  => array(
                                    'value' => 'default',
                                    'label' => esc_html__( 'DEFAULT', 'holycross' ),
                                ),
                                'right-choice' => array(
                                    'value' => 'custom',
                                    'label' => esc_html__( 'CUSTOM', 'holycross' ),
                                ),
                            ),
                        ),
                        'choices' => array(
                            'custom' => array(
                                'enable-footer-banner' => array(
                                    'type'         => 'switch',
                                    'value'        => 'hidden',
                                    'label'        => esc_html__( 'Show banner for footer top', 'holycross' ),
                                    'left-choice'  => array(
                                        'value' => 'show',
                                        'label' => esc_html__( 'Show', 'holycross' ),
                                    ),
                                    'right-choice' => array(
                                        'value' => 'hidden',
                                        'label' => esc_html__( 'Hide', 'holycross' ),
                                    )
                                ),
                            )
                        )
                    )

				)
			),
			$page_header,
		)
	)
);