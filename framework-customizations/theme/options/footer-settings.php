<?php if ( ! defined( 'SLZ' ) ) {
	exit;
}

$footer_ext = slz_ext('footers');

if ( $footer_ext != null )
{
	$options = array(
		'footer_tab' => array(
			'title'   => esc_html__( 'Footer', 'holycross' ),
			'type'    => 'tab',
			'options' => array(
				'footer-box' => array(
					'title'   => esc_html__( 'Footer Settings', 'holycross' ),
					'type'    => 'box',
					'options' => array(
						'slz-footer-style-group' => array(
							'type'   => 'multi-picker',
							'label'  => false,
							'desc'   => false,
							'picker' => array(
								'slz-footer-style' => array(
									'label'   => esc_html__( 'Footer Style', 'holycross' ),
									'type'    => 'image-picker',
									'choices' => $footer_ext->get_footer_choices(),
									'value'   => SLZ_Com::get_first( $footer_ext->get_footer_choices() ),
								)
							),
							'choices'      => $footer_ext->get_footer_options(),
							'show_borders' => false,
						)
					)
				)
			)
		)
	);
}
