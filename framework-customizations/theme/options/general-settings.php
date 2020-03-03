<?php if ( ! defined( 'SLZ' ) ) {
	exit;
}

$options = array(
	'general' => array(
		'title'   => esc_html__( 'General', 'holycross' ),
		'type'    => 'tab',
		'options' => array(
			'general-tab' => array(
				'title'   => esc_html__( 'General', 'holycross' ),
				'type'    => 'tab',
				'options' => array(
					'general-box' => array(
						'title'   => esc_html__( 'Global Settings', 'holycross' ),
						'type'    => 'box',
						'options' => array(
							'layout-group' => array(
								'type'   => 'multi-picker',
								'label'  => false,
								'desc'   => false,
								'picker' => array(
									'layout' => array(
										'label' => esc_html__( 'Site Layout', 'holycross' ),
										'desc'  => esc_html__( 'This option will change layout for all pages of theme.', 'holycross' ),
										'type'  => 'image-picker',
										'choices' => array(
											'full' => array(
												'small' => array(
													'height' => 70,
													'src'    => HOLYCROSS_OPTION_IMG_URI .'/layout-full.jpg'
												),
												'large' => array(
													'height' => 214,
													'src'    => HOLYCROSS_OPTION_IMG_URI .'/layout-full.jpg'
												),
											),
											'boxed' => array(
												'small' => array(
													'height' => 70,
													'src'    => HOLYCROSS_OPTION_IMG_URI .'/layout-boxed.jpg'
												),
												'large' => array(
													'height' => 214,
													'src'    => HOLYCROSS_OPTION_IMG_URI .'/layout-boxed.jpg'
												),
											),
										),
										'value' => 'full'
									),
								),
								'choices' => array(
									'boxed' => array(
										'boxed-width' => array(
											'type'  => 'slider',
											'value' => 1200,
											'properties' => array(
												'min' => 700,
												'max' => 1920,
												'step' => 1,
											),
											'label' => esc_html__('Boxed Width', 'holycross'),
											'desc'  => esc_html__('Select the website width', 'holycross'),
										),
										'bg-color' => array(
											'label'   => esc_html__( 'Background Color', 'holycross' ),
											'desc'    => esc_html__( "Select the boxed background color", 'holycross' ),
											'value'   => '',
											'choices' => SLZ_Com::get_palette_color(),
											'type'    => 'color-palette'
										),
										'boxed-background'	=> array(
											'label'   => esc_html__( 'Background Image', 'holycross' ),
											'type'    => 'background-image',
											'value'   => 'none',
											'choices' => array(
												'none' => array(
													'icon' => HOLYCROSS_OPTION_IMG_URI .'/patterns/no_pattern.jpg',
													'css'  => 'none',
												),
												'bg-1' => array(
													'icon' => HOLYCROSS_OPTION_IMG_URI .'/patterns/diagonal_bottom_to_top_pattern_preview.jpg',
													'css' => 'none',
												),
												'bg-2' => array(
													'icon' => HOLYCROSS_OPTION_IMG_URI .'/patterns/diagonal_top_to_bottom_pattern_preview.jpg',
													'css' => 'none',
												),
												'bg-3' => array(
													'icon' => HOLYCROSS_OPTION_IMG_URI .'/patterns/dots_pattern_preview.jpg',
													'css' => 'none',
												),
												'bg-4' => array(
													'icon' => HOLYCROSS_OPTION_IMG_URI .'/patterns/romb_pattern_preview.jpg',
													'css' => 'none',
												),
												'bg-5' => array(
													'icon' => HOLYCROSS_OPTION_IMG_URI .'/patterns/square_pattern_preview.jpg',
													'css' => 'none',
												),
												'bg-6' => array(
													'icon' => HOLYCROSS_OPTION_IMG_URI .'/patterns/noise_pattern_preview.jpg',
													'css' => 'none',
												),
												'bg-7' => array(
													'icon' => HOLYCROSS_OPTION_IMG_URI .'/patterns/vertical_lines_pattern_preview.jpg',
													'css' => 'none',
												),
												'bg-8' => array(
													'icon' => HOLYCROSS_OPTION_IMG_URI .'/patterns/waves_pattern_preview.jpg',
													'css' => 'none',
												),
											),
											'desc' => esc_html__( 'Select background image or try to upload new image.',
												'holycross' ),
										),
										'boxed-alignment' => array(
											'label' => esc_html__( 'Website Alignment', 'holycross' ),
											'desc'  => esc_html__( 'Choose the website alignment.', 'holycross' ),
											'type'  => 'image-picker',
											'choices' => array(
												'left' => array(
													'small' => array(
														'height' => 60,
														'src'	=> HOLYCROSS_OPTION_IMG_URI .'/position/left-position.jpg'
													),
												),
												'center' => array(
													'small' => array(
														'height' => 60,
														'src'    => HOLYCROSS_OPTION_IMG_URI .'/position/center-position.jpg'
													),
												),
												'right' => array(
													'small' => array(
														'height' => 60,
														'src'    => HOLYCROSS_OPTION_IMG_URI. '/position/right-position.jpg'
													),
												),
											),
											'value' => 'center'
										),
									)
								),
								'show_borders' => true,
							),
							'logo' => array(
								'type'  => 'upload',
								'label' => esc_html__('Site Logo Image', 'holycross'),
								'desc'  => esc_html__('Upload the site logo .png or .jpg', 'holycross'),
								'images_only' => true,
								'value' => '',
							),
							'logo-transparent'   => array(
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
										    'type'  => 'upload',
										    'label' => esc_html__('Site Logo Transparent', 'holycross'),
										    'desc'  => esc_html__('Upload the site logo .png or .jpg use for header transparent', 'holycross'),
										    'images_only' => true,
										    'value' => array(
										        'url' => HOLYCROSS_LOGO_IMG_URI . '/logo_trans.png'
										    )
										),
									),
								),
							),
							'logo-text' => array(
								'type'  => 'text',
								'label' => esc_html__('Site Logo Text', 'holycross'),
								'desc'  => esc_html__('You can use this field instead of above field "Site Logo Image".', 'holycross'),
								'value' => get_bloginfo('name'),
							),
							'logo-alt'  => array(
								'type'  => 'text',
								'label' => esc_html__('Logo Alt Attribute', 'holycross'),
								'desc'  => esc_html__('Appears inside the image container when the image can not be displayed. It helps search engines understand what an image is about.', 'holycross'),
							),
							'logo-title' => array(
								'type'  => 'text',
								'label' => esc_html__('Logo Title Attribute', 'holycross'),
								'desc'  => esc_html__('Used to provide a title for your image. It is displayed in a popup when a user takes their mouse over to an image.', 'holycross'),
							),
							'menu-style'   => array(
								'type'  => 'switch',
								'value' => 'holycross',
								'label' => esc_html__( 'Menu Style', 'holycross' ),
								'left-choice' => array(
									'value'   => 'default',
									'label'   => esc_html__( 'Default', 'holycross' )
								),
								'right-choice' => array(
									'value'    => 'holycross',
									'label'    => esc_html__( 'holycross', 'holycross' )
								)
							),
							'scroll-to-top-group' => array(
								'type'    => 'group',
								'options' => array(
									'scroll-to-top-styling' => array(
										'attr'  => array(
											'data-advanced-for' => 'scroll-to-top-styling',
											'class'             => 'slz-advanced-button'
										),
										'type'          => 'popup',
										'label'         => esc_html__( 'Custom Style', 'holycross' ),
										'desc'          => esc_html__( 'Change the style / typography of this shortcode', 'holycross' ),
										'button'        => esc_html__( 'Styling', 'holycross' ),
										'size'          => 'medium',
										'popup-options' => array(
											'icon-type'  => array(
												'type'   => 'multi-picker',
												'label'  => false,
												'desc'   => false,
												'picker' => array(
													'icon-box-img' => array(
														'label'   => esc_html__( 'Icon', 'holycross' ),
														'desc'    => esc_html__( 'Select icon type', 'holycross' ),
														'attr'    => array( 'class' => 'slz-checkbox-float-left' ),
														'type'    => 'radio',
														'value'   => 'icon-class',
														'choices' => array(
															'icon-class'  => esc_html__( 'Font Awesome', 'holycross' ),
															'upload-icon' => esc_html__( 'Custom Upload', 'holycross' ),
														),
													),
												),
												'choices' => array(
													'icon-class'  => array(
														'icon_class' => array(
															'type'  => 'icon',
															'value' => '',
															'label' => ''
														),
													),
													'upload-icon' => array(
														'upload-custom-img' => array(
															'label' => '',
															'type'  => 'upload',
															'help'  => esc_html__('For best results upload a square image, larger then 30px x 30px.', 'holycross'),
														),
													),
												)
											),
											'bg-color' => array(
												'label'   => esc_html__( 'Background Color', 'holycross' ),
												'desc'    => esc_html__( 'Select the background color', 'holycross' ),
												'value'   => '',
												'choices' => SLZ_Com::get_palette_color(),
												'type'    => 'color-palette'
											),
											'text-color'  => array(
												'label'   => esc_html__( 'Text Color', 'holycross' ),
												'desc'    => esc_html__( 'Select the text color', 'holycross' ),
												'value'   => '',
												'choices' => SLZ_Com::get_palette_color(),
												'type'    => 'color-palette'
											),
										)
									),
									'enable-scroll-to' => array(
										'attr'        => array( 'class' => 'scroll-to-top-styling' ),
										'type'        => 'switch',
										'value'       => 'yes',
										'label'       => esc_html__( 'Button To Top', 'holycross' ),
										'desc'        => esc_html__( 'Enable scroll to top?', 'holycross' ),
										'left-choice' => array(
											'value' => 'no',
											'label' => esc_html__( 'Disable', 'holycross' ),
										),
										'right-choice' => array(
											'value' => 'yes',
											'label' => esc_html__( 'Enable', 'holycross' ),
										)
									),
									'enable-woo-account' => array(
										'type'        => 'switch',
										'value'       => 'disable',
										'label'       => esc_html__( 'WooCommerce Account', 'holycross' ),
										'desc'        => esc_html__( 'Show WooCommerce account on header top right.', 'holycross' ),
										'left-choice' => array(
											'value' => 'disable',
											'label' => esc_html__( 'Disable', 'holycross' ),
										),
										'right-choice' => array(
											'value' => 'enable',
											'label' => esc_html__( 'Enable', 'holycross'),
										)
									),
									'enable-wpml' => array(
										'type'         => 'switch',
										'value'        => 'no',
										'label'        => esc_html__( 'Language Switcher', 'holycross' ),
										'desc'         => esc_html__( 'Show language switcher of WPML plugin on header top', 'holycross' ),
										'left-choice'  => array(
											'value' => 'no',
											'label' => esc_html__( 'Hide', 'holycross' ),
										),
										'right-choice' => array(
											'value' => 'yes',
											'label' => esc_html__( 'Show', 'holycross' ),
										),
									),
									'map-key-api' => array(
										'type'  => 'text',
										'value' => '',
										'label' => esc_html__( 'Google Map - API Key', 'holycross' ),
										'desc'  => esc_html__( 'This key is used to run a some feature of Google Map. Please refer document to create a key', 'holycross' ),
									),
									'footer-banner-section' => array(
										'title'   => esc_html__( 'Footer Banner Settings', 'holycross' ),
										'type'    => 'box',
										'options' => array(
											'footer-banner' => array(
												'type'	  => 'multi-picker',
												'label'   => false,
												'desc'	  => false,
												'picker'  => array(
													'enable-footer-banner' => array(
														'type'         => 'switch',
														'value'        => 'hide',
														'label'        => esc_html__( 'Show Banner?', 'holycross' ),
														'desc'         => esc_html__( 'Show banner in Footer', 'holycross' ),
														'left-choice'  => array(
															'value' => 'hide',
															'label' => esc_html__( 'Hide', 'holycross' )
														),
														'right-choice' => array(
															'value' => 'show',
															'label' => esc_html__( 'Show', 'holycross' )
														)
													)
												),
												'choices' => array(
													'show'=> array(
														'banner_content' => array(
														    'type'          => 'wp-editor',
														    'label'         => esc_html__('Description', 'holycross'),
														    'desc'          => esc_html__('Enter description to display on banner.', 'holycross'),
														    'size'          => 'large',
														    'editor_height' => 200,
														    'wpautop'       => true,
														    'editor_type'   => false
														),
														'styling' => array(
															'type'          => 'popup',
															'attr'          => array( 'class' => 'slz-advanced-button' ),
															'label'         => esc_html__( 'Custom Style', 'holycross' ),
															'desc'          => esc_html__( 'Change the style of banner', 'holycross' ),
															'button'        => esc_html__( 'Styling', 'holycross' ),
															'size'          => 'medium',
															'popup-options' => array(
                                                                'block-bg-color'     => array(
                                                                    'label'   => esc_html__( 'Block Background Color', 'holycross' ),
                                                                    'desc'   => esc_html__('Choose background color for banner.', 'holycross'),
                                                                    'type'    => 'rgba-color-picker'
                                                                ),
                                                                'bg-image'	=> array(
                                                                    'label'   => esc_html__( 'Background Image', 'holycross' ),
                                                                    'type'    => 'background-image',
                                                                    'value'   => 'none',
                                                                    'desc'    => esc_html__( 'Upload an image to make background image',
                                                                        'holycross' ),

                                                                ),
                                                                'text-color-content' => array(
                                                                    'label'   => esc_html__( 'Text Color Description', 'holycross' ),
                                                                    'value'   => '',
                                                                    'choices' => SLZ_Com::get_palette_color(),
                                                                    'type'    => 'color-palette'
                                                                )
															)
														)
													)
												)
											)
										)
									)
								)
							)
						)
					),
				)
			),
			'social-tab'  => array(
				'title'   => esc_html__( 'Social Profiles', 'holycross' ),
				'type'	=> 'tab',
				'options' => array(
					'social-box' => array(
						'title'   => esc_html__( 'Social Settings', 'holycross' ),
						'type'	=> 'box',
						'options' => array(
							'socials' => array(
								'type'		  => 'addable-popup',
								'label'		 => esc_html__( 'Social Links', 'holycross' ),
								'desc'		  => esc_html__( 'Add your social profiles', 'holycross' ),
								'template'	  => '{{=social_name}}',
								'popup-options' => array(
									'social_name' => array(
										'label' => esc_html__( 'Name', 'holycross' ),
										'desc'  => esc_html__( 'Enter a name (it is for internal use and will not appear on the front end)', 'holycross' ),
										'type'  => 'text',
									),
									'social_type' => array(
										'type'	=> 'multi-picker',
										'label'   => false,
										'desc'	=> false,
										'picker'  => array(
											'social-type' => array(
												'label'   => esc_html__( 'Icon', 'holycross' ),
												'desc'	=> esc_html__( 'Select social icon type', 'holycross' ),
												'attr'	=> array( 'class' => 'slz-checkbox-float-left' ),
												'type'	=> 'radio',
												'value'   => 'icon-social',
												'choices' => array(
													'icon-social' => esc_html__( 'Font Awesome', 'holycross' ),
													'upload-icon' => esc_html__( 'Custom Upload', 'holycross' ),
												),
											),
										),
										'choices' => array(
											'icon-social' => array(
												'icon_class' => array(
													'type'  => 'icon',
													'value' => 'fa fa-adn',
													'label' => '',
												),
											),
											'upload-icon' => array(
												'upload-social-icon' => array(
													'label' => '',
													'type'  => 'upload',
												)
											),
										)
									),
									'social-link' => array(
										'label' => esc_html__( 'Link', 'holycross' ),
										'desc'  => esc_html__( 'Enter your social URL link', 'holycross' ),
										'type'  => 'text',
									)
								),
							),
						)
					),
				)
			),
			'customize-icon-tab'  => array(
				'title'   => esc_html__( 'Customize Icon', 'holycross' ),
				'type'	=> 'tab',
				'options' => array(
					'customize-icon-box' => array(
						'title'   => esc_html__( 'Customize Icon', 'holycross' ),
						'type'	=> 'box',
						'options' => array(
							'customize-icon' => array(
								'type'		  => 'addable-popup',
								'label'		 => esc_html__( 'Customize Icon', 'holycross' ),
								'desc'		  => esc_html__( 'Add your customizable icon', 'holycross' ),
								'template'	  => '{{=icon_name}}',
								'popup-options' => array(
									'icon_name' => array(
										'label' => esc_html__( 'Name', 'holycross' ),
										'desc'  => esc_html__( 'Enter a name (it will show in front end)', 'holycross' ),
										'type'  => 'text',
									),
									'icon_type' => array(
										'type'	=> 'multi-picker',
										'label'   => false,
										'desc'	=> false,
										'picker'  => array(
											'icon-type' => array(
												'label'   => esc_html__( 'Icon', 'holycross' ),
												'desc'	=> esc_html__( 'Select customize icon type', 'holycross' ),
												'attr'	=> array( 'class' => 'slz-checkbox-float-left' ),
												'type'	=> 'radio',
												'value'   => 'icon',
												'choices' => array(
													'icon' => esc_html__( 'Font Awesome', 'holycross' ),
													'upload-icon' => esc_html__( 'Custom Upload', 'holycross' ),
												),
											),
										),
										'choices' => array(
											'icon' => array(
												'icon_class' => array(
													'type'  => 'icon',
													'value' => 'fa fa-adn',
													'label' => '',
												),
											),
											'upload-icon' => array(
												'upload-icon' => array(
													'label' => '',
													'type'  => 'upload',
												)
											),
										)
									),
									'icon-link' => array(
										'label' => esc_html__( 'Link', 'holycross' ),
										'desc'  => esc_html__( 'Enter your customize icon URL link', 'holycross' ),
										'type'  => 'text',
									)
								),
							),
						)
					),
				)
			)
		)
	)
);