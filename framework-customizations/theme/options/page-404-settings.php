<?php if ( ! defined( 'SLZ' ) ) {
	exit;
}
$options = array(
	'404-info' => array(
		'title'   => esc_html__( '404 Settings', 'holycross' ),
		'type'    => 'tab',
		'options' => array(
			'header-box' => array(
				'title'   => esc_html__( '404 Settings', 'holycross' ),
				'type'    => 'box',
				'options' => array(
					'404-illustration'	=> array(
						'label'   => esc_html__( 'Illustration Image', 'holycross' ),
						'type'    => 'background-image',
						'value'   => 'none',
						'desc'    => esc_html__( 'Upload illustration image.', 'holycross' ),
					),
					'404-title' => array(
						'type'  => 'text',
						'label' => esc_html__( 'Title', 'holycross' ),
					),
					'404-description' => array(
						'type'    => 'wp-editor',
						'value'   => 'default value',
						'label'   => esc_html__('Description', 'holycross'),
						'size'    => 'large', // small, large
						'editor_height' => 200,
						'wpautop'       => true,
						'editor_type'   => false, // tinymce, html
					),
					'404-btn-text' => array(
						'type'  => 'text',
						'label' => esc_html__( 'Back To Home Text', 'holycross' ),
					),
					'404-btn-02-text' => array(
						'type'  => 'text',
						'label' => esc_html__( 'Button 02 Text', 'holycross' ),
					),
					'404-btn-02-link' => array(
						'label' => esc_html__( 'Button Link', 'holycross' ),
						'desc'  => esc_html__( 'Enter link for button 02', 'holycross' ),
						'type'  => 'text',
					)
					
				)
			)
		)
	)
);
