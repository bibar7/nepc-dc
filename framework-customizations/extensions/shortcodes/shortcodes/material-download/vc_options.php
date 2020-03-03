<?php
$shortcode = slz_ext( 'shortcodes' )->get_shortcode( 'material-download' );

$vc_options = array(
    array(
        'type'        => 'textfield',
        'heading'     => esc_html__( 'Block Title', 'holycross' ),
        'param_name'  => 'title',
        'value'       => '',
        'description' => esc_html__( 'Material Download title. If it blank the block will not have a title', 'holycross' )
    ),
    array(
        'type'           => 'attach_files',
        'heading'        => esc_html__( 'Upload Downloaded File', 'holycross' ),
        'param_name'     => 'files',
        'description'    => esc_html__('Select file for downloading.', 'holycross'),
    ),
    array(
        'type'        => 'textfield',
        'heading'     => esc_html__( 'Extra Class', 'holycross' ),
        'param_name'  => 'extra_class',
        'value'       => '',
        'description' => esc_html__( 'Add extra class to block', 'holycross' )
    ),
    array(
        'type'        => 'colorpicker',
        'heading'     => esc_html__( 'Block Title Color', 'holycross' ),
        'param_name'  => 'title_color',
        'value'       => '',
        'description' => esc_html__( 'Choose a custom title text color.', 'holycross' ),
        'group'       => esc_html__('Custom', 'holycross')
    ),
    array(
        'type'        => 'colorpicker',
        'heading'     => esc_html__( 'Block Title Color Hover', 'holycross' ),
        'param_name'  => 'title_color_hv',
        'value'       => '',
        'description' => esc_html__( 'Choose a custom title text hover color.', 'holycross' ),
        'group'       => esc_html__('Custom', 'holycross')
    ),
    array(
        'type'        => 'colorpicker',
        'heading'     => esc_html__( 'Icon Color', 'holycross' ),
        'param_name'  => 'icon_color',
        'value'       => '',
        'description' => esc_html__( 'Choose a custom icon color.', 'holycross' ),
        'group'       => esc_html__('Custom', 'holycross')
    ),
    array(
        'type'        => 'colorpicker',
        'heading'     => esc_html__( 'Icon Color Hover', 'holycross' ),
        'param_name'  => 'icon_color_hv',
        'value'       => '',
        'description' => esc_html__( 'Choose a custom icon hover color.', 'holycross' ),
        'group'       => esc_html__('Custom', 'holycross')
    ),
    array(
        'type'        => 'colorpicker',
        'heading'     => esc_html__( 'Button Background Color', 'holycross' ),
        'param_name'  => 'bg_color',
        'value'       => '',
        'description' => esc_html__( 'Choose a custom button background color.', 'holycross' ),
        'group'       => esc_html__('Custom', 'holycross')
    ),
    array(
        'type'        => 'colorpicker',
        'heading'     => esc_html__( 'Button Background Color Hover', 'holycross' ),
        'param_name'  => 'bg_color_hv',
        'value'       => '',
        'description' => esc_html__( 'Choose a custom button background hover color.', 'holycross' ),
        'group'       => esc_html__('Custom', 'holycross')
    ),
);

