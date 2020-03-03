<?php if ( ! defined( 'SLZ' ) ) {
	exit;
}

$header_ext = slz_ext('headers');

if ( $header_ext != null )
{
	$options = array(
		'header_tab' => array(
			'title'   => esc_html__( 'Header', 'holycross' ),
			'type'    => 'tab',
			'options' => array(
				'header-box' => array(
					'title'   => esc_html__( 'Header Settings', 'holycross' ),
					'type'    => 'box',
					'options' => array(
						'slz-header-style-group' => array(
							'type'   => 'multi-picker',
							'label'  => false,
							'desc'   => false,
							'picker' => array(
								'slz-header-style' => array(
									'label'   => esc_html__( 'Header Style', 'holycross' ),
									'type'    => 'image-picker',
									'choices' => $header_ext->get_header_choices(),
									'value'   => SLZ_Com::get_first( $header_ext->get_header_choices() ),
								)
							),
							'choices'      => $header_ext->get_header_options(),
							'show_borders' => true,
						)
					)
				)
			)
		)
	);
}
