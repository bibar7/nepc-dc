<?php if ( ! defined( 'SLZ' ) ) {
	die( 'Forbidden' );
}

$cfg = array();
$cfg['enable_breakingnews'] = false;
$cfg['show_btn_donation'] = true;
$cfg['show_banner_event'] = true;
$cfg['option_content_topbar'] = array(
                                    'menu'		        =>	esc_html__('Menu', 'holycross'),
                                    'social'	        =>	esc_html__('Social Profile', 'holycross'),
                                    'icon'		        =>	esc_html__('Customize Icon', 'holycross'),
                                    'button'	        =>	esc_html__('Button', 'holycross'),
                                    'event-banner'      =>  esc_html__('Event Banner', 'holycross')
                                );
$cfg['text_btn_donation'] = esc_html__('Send Donation', 'holycross');