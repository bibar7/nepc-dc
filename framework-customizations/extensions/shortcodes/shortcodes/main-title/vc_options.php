<?php
$shortcode = slz_ext( 'shortcodes' )->get_shortcode( 'main_title' );

$align = SLZ_Params::get('align');

$style = array();
if( $style_cfg = $shortcode->get_styles() ) {
	$style = array(
		array(
			'type'        => 'dropdown',
			'admin_label' => true,
			'heading'     => esc_html__( 'Style', 'holycross' ),
			'param_name'  => 'style',
			'value'       => $style_cfg ,
			'description' => esc_html__( 'Choose style to display.', 'holycross' )
		),
	);
}
$params = array(
    array(
        'type'        => 'textfield',
        'admin_label' => true,
        'heading'     => esc_html__( 'Title', 'holycross' ),
        'param_name'  => 'title',
        'description' => esc_html__( 'Title. If it blank the will not have a title', 'holycross' )
    ),
    array(
        'type'        => 'textfield',
        'heading'     => esc_html__( 'Sub Title', 'holycross' ),
        'param_name'  => 'subtitle',
        'value'       => '',
        'description' => esc_html__( 'Subtitle . If it blank will not have a subtitle', 'holycross' )
    ),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Align', 'holycross' ),
		'param_name'  => 'align',
		'value'       => $align ,
		'std'         => 'left',
		'description' => esc_html__( 'Block title align', 'holycross' )
	),
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Extra Title', 'holycross' ),
		'param_name'  => 'extra_title',
		'value'       => '',
		'description' => esc_html__( 'Subtitle . If it blank will not have a extra title', 'holycross' )
	),
    array(
        'type'        => 'colorpicker',
        'heading'     => esc_html__( 'Title Color', 'holycross' ),
        'param_name'  => 'title_color',
        'description' => esc_html__( 'Choose a custom color for title.', 'holycross' ),
        'group'       => esc_html__('Custom Options', 'holycross')
    ),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Sub Title Color', 'holycross' ),
		'param_name'  => 'subtitle_color',
		'value'       => '',
		'description' => esc_html__( 'Choose a custom color for sub title.', 'holycross' ),
		'group'       => esc_html__('Custom Options', 'holycross')
	),
	array(
        'type'        => 'dropdown',
        'heading'     => esc_html__( 'Show Icon or Image', 'holycross' ),
        'param_name'  => 'show_icon',
        'value'       => array(
            esc_html__('Display None', 'holycross') => '2',
            esc_html__('Show Icon', 'holycross')    => '1',
            esc_html__('Show Image', 'holycross')   => '0'
        ),
        'description' => esc_html__( 'Show Icon or Show Image', 'holycross' )
    )
);
$icon_dependency = array(
                        'element' => 'show_icon',
                        'value'   => array('1')
                    );
$icon_options = $shortcode->get_icon_library_options( $icon_dependency );
$params_02 = array(
	array(
	    'type'		  => 'attach_image',
	    'heading'     => esc_html__( 'Image', 'holycross' ),
	    'param_name'  => 'image',
	    'description' => esc_html__( 'Upload your image', 'holycross' ),
	    'dependency'  => array(
	        'element' => 'show_icon',
	        'value'   => '0'
	    )
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Extra Title Color', 'holycross' ),
		'param_name'  => 'extra_title_color',
		'value'       => '',
		'description' => esc_html__( 'Choose a custom color for extra title.', 'holycross' ),
		'group'       => esc_html__('Custom Options', 'holycross')
	),
	array(
		'type'        => 'css_editor',
		'heading'     => esc_html__( 'CSS box', 'holycross' ),
		'param_name'  => 'css',
		'group'       => esc_html__( 'Design Options', 'holycross' )
	)
);

$extra_class = array(
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Extra Class', 'holycross' ),
		'param_name'  => 'extra_class',
		'value'       => '',
		'description' => esc_html__( 'Add extra class to button', 'holycross' )
	)
);

$vc_options = array_merge( 
	$style,
	$params,
	$icon_options,
	$params_02,
	$extra_class
);