<?php
if ( ! defined( 'SLZ' ) ) {
die ( 'Forbidden' );
}

$cfg = array ();

$cfg ['page_builder'] = array (
    'title' => esc_html__ ( 'SLZ Material Download', 'holycross' ),
    'description' => esc_html__ ( 'List of files to download.', 'holycross' ),
    'tab' => slz()->theme->manifest->get('name'),
    'icon' => 'icon-slzcore-material-download slz-vc-slzcore',
    'tag' => 'slz_material_download'
);

$cfg ['default_value'] = array (
    'title'          => '',
    'title_color'    => '',
    'title_color_hv' => '',
    'files'          => '',
    'extra_class'    => '',
    'icon_color'     => '',
    'icon_color_hv'  => '',
    'bg_color'       => '',
    'bg_color_hv'    => '',
);