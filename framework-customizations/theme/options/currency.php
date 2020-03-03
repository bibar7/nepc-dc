<?php if ( ! defined( 'SLZ' ) ) {
	die( 'Forbidden' );
}

$currency_position_arr = array(
	'left'             => esc_html__( 'Left ($99.99)', 'holycross' ),
	'right'            => esc_html__( 'Right (99.99$)', 'holycross' ),
	'left-with-space'  => esc_html__( 'Left With Space ($ 99.99)', 'holycross' ),
	'right-with-space' => esc_html__( 'Right With Space (99.99 $)', 'holycross' )
);

$option_payment_arr = array(
	'customlink'   => esc_html__( 'Custom Link', 'holycross' ),
	'woocommerce'  => esc_html__( 'WooCommerce ( when plugin woocommerce active )', 'holycross' )
);

$options = array(
	'currency' => array(
		'title'   => esc_html__( 'Currency', 'holycross' ),
		'type'    => 'tab',
		'options' => array(
			'currency-tab' => array(
				'title'   => esc_html__( 'General', 'holycross' ),
				'type'    => 'tab',
				'options' => array(
					'currency-box' => array(
						'title'   => esc_html__( 'Currency Settings', 'holycross' ),
						'type'    => 'box',
						'options' => array(
							'currency-money-format'  => array(
								'type'  => 'text',
								'value' => '$',
								'label' => esc_html__('Currency Format', 'holycross'),
								'desc'  => esc_html__('If want to show $400, then input $ in the field. Default: $', 'holycross')
							),
							'currency-position' => array(
								'type'    => 'select',
								'label'   => esc_html__('Currency Position', 'holycross'),
								'choices' => $currency_position_arr,
								'value'   => 'left'
							)
						)
					),
					'payment-box' => array(
						'title'   => esc_html__( 'Payment Settings', 'holycross' ),
						'type'    => 'box',
						'options' => array(
							'event-payment-option' => array(
								'type'    => 'select',
								'label'   => esc_html__('Event Payment Option', 'holycross'),
								'choices' => $option_payment_arr,
								'value'   => 'customlink'
							),
							'donation-payment-option' => array(
								'type'    => 'select',
								'label'   => esc_html__('Donation Payment Option', 'holycross'),
								'choices' => $option_payment_arr,
								'value'   => 'customlink'
							)
						)
					)
				)
			)
		)
	)
);