<?php if ( ! defined( 'SLZ' ) ) {
	exit;
}

$options = array(
	'advertisement-settings' => array(
		'title'   => esc_html__( 'Advertisement', 'holycross' ),
		'type'    => 'tab',
		'options' => array(
			'advertisement-box' => array(
				'title'   => esc_html__( 'Advertisement', 'holycross' ),
				'type'    => 'box',
				'options' => array(
					'advertisement-popup' => array(
						'label' => esc_html__( 'Advertisement', 'holycross' ),
						'type'  => 'addable-popup',
						'desc'  => esc_html__( 'Click to add new advertisement area. Advertisement area help you to create and manager the banner', 'holycross' ),
						'add-button-text' => esc_html__('Add Advertisement Area', 'holycross'),
						'template' => '{{-area_name }}',
						'popup-options' => array(
							'area_name' => array(
								'label' => esc_html__( 'Area Name', 'holycross' ),
								'type'  => 'text',
								'desc'  => esc_html__( 'Input the advertisement area name' , 'holycross'),
							),
							'advertisement-group' => array(
								'type'   => 'multi-picker',
								'label'  => false,
								'desc'   => false,
								'picker' => array(
									'type' => array(
										'label' => esc_html__( 'Display Banner', 'holycross' ),
										'type'  => 'radio',
										'attr'  => array( 'class' => 'slz-checkbox-float-left' ),
										'choices' => array(
											'image'       => esc_html__( 'Image', 'holycross' ),
											'custom_code' => esc_html__( 'Custom Code', 'holycross' ),
											'disable'     => esc_html__( 'Disable', 'holycross' ),
										),
										'value' => 'image',
									)
								),
								'choices' => array(
									'image' => array(
										'image-source' => array(
											'type'  => 'upload',
											'label' => esc_html__('Banner Image', 'holycross'),
											'desc'  => esc_html__('Upload the banner image .png or .jpg', 'holycross'),
											'images_only' => true,
										),
										'image-link' => array(
											'type'  => 'text',
											'label' => esc_html__('Banner Link', 'holycross'),
											'desc'  => esc_html__('Set the banner link.', 'holycross'),
										),
										'image-alt' => array(
											'type'  => 'text',
											'label' => esc_html__('Banner Alt Attribute', 'holycross'),
											'desc'  => esc_html__('Appears inside the image container when the banner image can not be displayed. It helps search engines understand what an banner image is about.', 'holycross'),
										),
										'image-new-tab' => array(
											'type'  => 'switch',
											'value' => 'yes',
											'label' => esc_html__( 'Open Link In New Tab', 'holycross' ),
											'desc'  => esc_html__( 'Open Link In New Tab?', 'holycross' ),
											'left-choice'  => array(
												'value' => 'no',
												'label' => esc_html__( 'No', 'holycross' ),
											),
											'right-choice' => array(
												'value' => 'yes',
												'label' => esc_html__( 'Yes', 'holycross' ),
											)
										),
									),
									'custom_code' => array(
										'html-code' => array(
											'type'  => 'code-editor',
											'mode'  => 'html',
											'label' => esc_html__('Textarea Option Code', 'holycross'),
											'desc'  => esc_html__('Custom HTML allowed. Paste your ad code here.', 'holycross'),
										)
									)
								),
								'show_borders' => true,
							)
						),
					),
				)
			),
		)
	)
);