<?php if ( ! defined( 'SLZ' ) ) {
	exit;
}

$regist_sidebars = array_merge( array( 'default' => esc_html__('-- Default --', 'holycross') ), SLZ_Com::get_regist_sidebars() );

$default = array(
	'default' => array(
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

$page_header = slz()->theme->get_options( 'page-options' );

$options = array(
	'post-settings' => array(
		'type'    => 'box',
		'title'   => esc_html__('Page Options','holycross' ),
		'options' => array(
			'post-general-settings' => array(
				'type'    => 'tab',
				'title'   => esc_html__( 'General Settings', 'holycross' ),
				'options' => array(
					'page-sidebar-layout' => array(
						'label' => esc_html__( 'Sidebar Layout', 'holycross' ),
						'desc'  => esc_html__( 'Set how to display team sidebar.', 'holycross' ),
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
					'page-sidebar'  =>  array(
						'type'    => 'select',
						'label'   => esc_html__('Choose Sidebar', 'holycross'),
						'desc'    => esc_html__('You can create new sidebar in','holycross').' <br><a href="' . esc_url( admin_url( 'widgets.php' ) ) . '" >'.esc_html__('Appearance','holycross').' > '.esc_html__('Widgets','holycross').'</a>',
						'choices' => $regist_sidebars,
						'value'   => 'default'
					),
				)
			),
			$page_header,
		),
	)
);