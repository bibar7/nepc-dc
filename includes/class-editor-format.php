<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
class Holycross_Editor_Format {
	public function __construct(){
		add_action( 'init', array(&$this, '_action_add_editor_styles') );
		// Custom Styles to WordPress Visual Editor
		add_filter('mce_buttons_2', array(&$this, '_filter_mce_buttons') );
		// Attach callback to 'tiny_mce_before_init'
		add_filter( 'tiny_mce_before_init', array(&$this, '_filter_mce_before_init_insert_formats') );
	}
	public function _action_add_editor_styles() {
		add_editor_style( 'static/css/custom-editor.css' );
	}

	public function _filter_mce_buttons($buttons) {
		array_unshift($buttons, 'styleselect');
		return $buttons;
	}
	
	
	public function _filter_mce_before_init_insert_formats( $init_array ) {
		$style_formats = $this->_dropcap_formats();
		$init_array['style_formats'] = json_encode( $style_formats );
		return $init_array;
	}
	private function _dropcap_formats() {
		$formats = array(
			'holycross_dropcap' => array(
				'title' => esc_html__('Drop Cap', 'holycross'),
				'items' => array(
					array(
						'parent_id' => 'holycross_dropcap',
						'title'     => esc_html__('Regular','holycross'),
						'classes'   => 'dropcap',
						'block'     => 'div',
						'wrapper'	=> true
					),
					array(
						'parent_id' => 'holycross_dropcap',
						'title'     => esc_html__('Italic','holycross'),
						'classes'   => 'dropcapi',
						'block'     => 'div',
						'wrapper'	=> true
					),
					array(
						'parent_id' => 'holycross_dropcap',
						'title'     => esc_html__('Bold','holycross'),
						'classes'   => 'dropcapb',
						'block'     => 'div',
						'wrapper'	=> true
					)
				)
			),
			'holycross_blockquote' => array(
				'title' => esc_html__('Blockquote', 'holycross'),
				'items' => array(
					array(
						'parent_id' => 'holycross_blockquote',
						'title'     => esc_html__('Style 01','holycross'),
						'classes'   => 'slz-blockquote-01',
						'block'     => 'div',
						'wrapper'	=> true
					),
					array(
						'parent_id' => 'holycross_blockquote',
						'title'     => esc_html__('Style 02','holycross'),
						'classes'   => 'slz-blockquote-02',
						'block'     => 'div',
						'wrapper'	=> true
					)
				)
			),
			'holycross_bullet_list' => array(
				'title' => esc_html__('Bulleted List', 'holycross'),
				'items' => array(
					array(
						'parent_id' => 'holycross_bullet_list',
						'title'     => esc_html__('2 Columns','holycross'),
						'classes'   => 'slz-bullet-list-col-2',
						'selector'  => 'ul'
					),
					array(
						'parent_id' => 'holycross_bullet_list',
						'title'     => esc_html__('3 Columns','holycross'),
						'classes'   => 'slz-bullet-list-col-3',
						'selector'  => 'ul'
					),
					array(
						'parent_id' => 'holycross_bullet_list',
						'title'     => esc_html__('4 Columns','holycross'),
						'classes'   => 'slz-bullet-list-col-4',
						'selector'  => 'ul'
					)
				)
			)
		);
		return $formats;
	}
} new Holycross_Editor_Format();