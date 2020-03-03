<?php if ( ! defined( 'SLZ' ) ) {
	exit;
}

$regist_sidebars = array_merge( array( '' => esc_html__('-- Select widget area --', 'holycross') ), SLZ_Com::get_regist_sidebars() );

$options = array(
	'footer_04' => array(
	    'footer-top'   => array(
			'type'         => 'multi-picker',
			'label'        => false,
			'desc'         => false,
			'picker'       => array(
				'status' => array(
					'label'        => esc_html__( 'Enable Footer Top', 'holycross' ),
					'desc'         => esc_html__( 'Enable the footer top?', 'holycross' ),
					'type'         => 'switch',
					'right-choice' => array(
						'value' => 'enable',
						'label' => esc_html__( 'Enable', 'holycross' )
					),
					'left-choice'  => array(
						'value' => 'disable',
						'label' => esc_html__( 'Disable', 'holycross' )
					),
					'value'        => 'disable',
				)
			),
			'choices'      => array(
				'enable' => array(
			       	'widget-area-more' => array(
                        'type'   => 'addable-option',
                        'attr'   => array( 'class' => 'slz-footer-top-addable-option-04' ),
                        'label'  => esc_html__( 'Choose Widget Area', 'holycross' ),
                        'desc'  => esc_html__('Choose widget area will show in footer top', 'holycross'),
                        'option' => array(
                            'type'     => 'select',
                            'choices'  => $regist_sidebars
                        )
                    ),
				),
			),
		),
		'footer-main'   => array(
			'type'         => 'multi-picker',
			'label'        => false,
			'desc'         => false,
			'picker'       => array(
				'status' => array(
					'label'        => esc_html__( 'Enable Footer Main', 'holycross' ),
					'desc'         => esc_html__( 'Enable the footer main?', 'holycross' ),
					'type'         => 'switch',
					'right-choice' => array(
						'value' => 'enable',
						'label' => esc_html__( 'Enable', 'holycross' )
					),
					'left-choice'  => array(
						'value' => 'disable',
						'label' => esc_html__( 'Disable', 'holycross' )
					),
					'value'        => 'disable',
				),
			),
			'choices'      => array(
				'enable' => array(
			       	'widget-area-more' => array(
                        'type'   => 'addable-option',
                         'attr'   => array( 'class' => 'slz-footer-addable-option-04' ),
                        'label'  => esc_html__( 'Choose Widget Area', 'holycross' ),
                        'desc'  => esc_html__('Choose widget area will show in footer top', 'holycross'),
                        'option' => array(
                            'type'     => 'select',
                            'choices'  => $regist_sidebars
                        )
                    ),
				),
			),
		),
		'footer-bottom'   => array(
			'type'         => 'multi-picker',
			'label'        => false,
			'desc'         => false,
			'picker'       => array(
				'status' => array(
					'label'        => esc_html__( 'Enable Footer Bottom', 'holycross' ),
					'desc'         => esc_html__( 'Enable the footer bottom?', 'holycross' ),
					'type'         => 'switch',
					'right-choice' => array(
						'value' => 'enable',
						'label' => esc_html__( 'Enable', 'holycross' )
					),
					'left-choice'  => array(
						'value' => 'disable',
						'label' => esc_html__( 'Disable', 'holycross' )
					),
					'value'        => 'enable',
				)
			),
		),
	),
);