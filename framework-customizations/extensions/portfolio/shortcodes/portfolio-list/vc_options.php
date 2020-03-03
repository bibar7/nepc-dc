<?php
$sort_by = slz()->extensions->get( 'portfolio' )->get_config('sort_portfolio');
$column = array(
	esc_html__( 'One', 'holycross' )    => '1',
	esc_html__( 'Two', 'holycross' )    => '2',
	esc_html__( 'Three', 'holycross' )  => '3',
	esc_html__( 'Four', 'holycross' )   => '4',
	esc_html__( 'Five', 'holycross' )   => '5',
	esc_html__( 'Six', 'holycross' )    => '6',
);
$yes_no  = array(
	esc_html__('Yes', 'holycross') => 'yes',
	esc_html__('No', 'holycross')  => 'no',
);
$category_filter = array(
	esc_html__('No', 'holycross')  => '',
	esc_html__('Yes', 'holycross') => 'category'
);
$method = array(
	esc_html__( 'Category', 'holycross' ) => 'cat',
    esc_html__( 'Portfolio', 'holycross' )  => 'portfolio',
    esc_html__( 'Team', 'holycross' )  => 'team',
);
$thumbs = array(
	esc_html__( 'Featured Image', 'holycross' ) => '',
	esc_html__( 'Thumbnail', 'holycross' )      => 'thumbnail',
	esc_html__( 'None', 'holycross' )           => 'none',
);

$args = array('post_type'     => 'slz-portfolio');
$options = array('empty'      => esc_html__( '-All Portfolio-', 'holycross' ) );
$portfolios = SLZ_Com::get_post_title2id( $args, $options );

$args = array('post_type'     => 'slz-team');
$options = array('empty'      => esc_html__( '-All Team-', 'holycross' ) );
$teams = SLZ_Com::get_post_title2id( $args, $options );

$taxonomy = 'slz-portfolio-cat';
$params_cat = array('empty'   => esc_html__( '-All Portfolio Categories-', 'holycross' ) );
$portfolio_cat = SLZ_Com::get_tax_options2slug( $taxonomy, $params_cat );


$shortcode = slz_ext( 'shortcodes' )->get_shortcode( 'portfolio_list' );

$layouts = array(
	array (
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Layout', 'holycross' ),
		'admin_label' => true,
		'param_name'  => 'layout',
		'value'       => $shortcode->get_layouts(),
		'description' => esc_html__( 'Choose layout will be displayed.', 'holycross' )
	) 
);

$layout_options = $shortcode->get_layout_options();

$params = array(
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Columns', 'holycross' ),
		'admin_label' => true,
		'param_name'  => 'column',
		'value'       => $column,
		'std'         => '1',
		'description' => esc_html__( 'Choose number column will be displayed.', 'holycross' ),
		'dependency'  => array(
			'element'   => 'layout',
			'value'     => array('layout-1')
		)
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Show Image ?', 'holycross' ),
		'param_name'  => 'show_thumbnail',
		'value'       => $thumbs,
		'description' => esc_html__( 'Show featured image or thumbnail.', 'holycross' ),
		'dependency'  => array(
			'element'   => 'layout',
			'value'     => array('', 'layout-1', 'layout-4' )
		)
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Show Category ?', 'holycross' ),
		'param_name'  => 'show_category',
		'value'       => $yes_no,
		'std'         => 'no',
		'description' => esc_html__( 'If choose Yes, block will be show category.', 'holycross' )
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Show Meta Info ?', 'holycross' ),
		'param_name'  => 'show_meta_info',
		'value'       => $yes_no,
		'std'         => 'no',
		'description' => esc_html__( 'If choose Yes, block will be show meta information.', 'holycross' ),
		'dependency'  => array(
			'element'   => 'layout',
			'value'     => array('', 'layout-1', 'layout-4' )
		)
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Show Description ?', 'holycross' ),
		'param_name'  => 'show_description',
		'value'       => $yes_no,
		'std'         => 'yes',
		'description' => esc_html__( 'If choose Yes, block will be show description.', 'holycross' )
	),
    array(
        'type'        => 'dropdown',
        'heading'     => esc_html__( 'Show Attachments ?', 'holycross' ),
        'param_name'  => 'show_attachments',
        'value'       => $yes_no,
        'std'         => 'yes',
        'description' => esc_html__( 'If choose Yes, block will be show attachments.', 'holycross' )
    ),
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Description Length', 'holycross' ),
		'param_name'  => 'description_length',
		'description' => esc_html__( 'Limit words to display.', 'holycross' ),
		'dependency'  => array(
			'element'   => 'show_description',
			'value'     => array( 'yes' )
		)
	),
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Button Text', 'holycross' ),
		'param_name'  => 'button_text',
		'description' => esc_html__( 'Enter text will be show button.', 'holycross' )
	),
	array(
		'type'        => 'vc_link',
		'heading'     => esc_html__( 'Custom URL', 'holycross' ),
		'param_name'  => 'custom_link',
		'description' => esc_html__( 'Enter custom url to button.', 'holycross' )
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Show Pagination ?', 'holycross' ),
		'param_name'  => 'pagination',
		'value'       => $yes_no,
		'std'         => 'no',
		'description' => esc_html__( 'If choose Yes, block will be show pagination.', 'holycross' )
	),
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Limit Posts', 'holycross' ),
		'param_name'  => 'limit_post',
		'value'       => '-1',
		'description' => esc_html__( 'Add limit posts per page. Set -1 or empty to show all. The number of posts to display. If it blank the number posts will be the number from Settings -> Reading', 'holycross' )
	),
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Max Posts', 'holycross' ),
		'param_name'  => 'max_post',
		'value'       => '',
		'description' => esc_html__( 'Add total posts when paging.', 'holycross' ),
		'dependency'  => array(
			'element'   => 'pagination',
			'value'     => array( 'yes' )
		)
	),
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Offset Post', 'holycross' ),
		'param_name'  => 'offset_post',
		'value'       => '',
		'description' => esc_html__( 'Enter offset to pass over posts. If you want to start on record 6, using offset 5', 'holycross' )
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Sort By', 'holycross' ),
		'param_name'  => 'sort_by',
		'value'       => $sort_by,
		'description' => esc_html__( 'Select order to display list properties.', 'holycross' )
	),
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Extra Class', 'holycross' ),
		'param_name'  => 'extra_class',
		'value'       => '',
		'description' => esc_html__( 'Add extra class to block', 'holycross' )
	),

	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Show Category Filter Tab', 'holycross' ),
		'param_name'  => 'category_filter',
		'value'       => $category_filter,
		'description' => esc_html__( 'If choose Yes, a category filter will display on top of block.', 'holycross' ),
		'group'       => esc_html__('Filter', 'holycross')
	),
	array(
		'type'        => 'textfield',
		'heading'     => esc_html__( 'Filter Tab Text', 'holycross' ),
		'param_name'  => 'category_filter_text',
		'value'       => esc_html__('All', 'holycross'),
		'description' => esc_html__( 'Enter text for "All" tab.', 'holycross' ),
		'dependency'  => array(
			'element'   => 'category_filter',
			'value'     => array( 'category' )
		),
		'group'       => esc_html__('Filter', 'holycross')
	),
	array(
		'type'        => 'dropdown',
		'heading'     => esc_html__( 'Filter By', 'holycross' ),
		'param_name'  => 'method',
		'value'       => $method,
		'description' => esc_html__( 'Choose portfolio category or special portfolio to filter', 'holycross' ),
		'group'       	=> esc_html__('Filter', 'holycross')
	),
	array(
		'type'        => 'param_group',
		'heading'     => esc_html__( 'Category', 'holycross' ),
		'param_name'  => 'list_category',
		'params'      => array(
			array(
				'type'        => 'dropdown',
				'admin_label' => true,
				'heading'     => esc_html__( 'Add Category', 'holycross' ),
				'param_name'  => 'category_slug',
				'value'       => $portfolio_cat,
				'description' => esc_html__( 'Choose special category to filter', 'holycross'  )
			),
		),
		'value'       => '',
		'description' => esc_html__( 'Choose Portfolio Category.', 'holycross' ),
		'dependency'  => array(
			'element'   => 'method',
			'value'     => array( 'cat' )
		),
		'group'       => esc_html__('Filter', 'holycross')
	),
	array(
		'type'        => 'param_group',
		'heading'     => esc_html__( 'Portfolio', 'holycross' ),
		'param_name'  => 'list_post',
		'params'      => array(
			array(
				'type'        => 'dropdown',
				'admin_label' => true,
				'heading'     => esc_html__( 'Add Portfolio', 'holycross' ),
				'param_name'  => 'post',
				'value'       => $portfolios,
				'description' => esc_html__( 'Choose special portfolio to show',  'holycross'  )
			),
			
		),
		'value'       => '',
		'description' => esc_html__( 'Default display All Portfolio if no portfolio is selected and Number portfolio is empty.', 'holycross' ),
		'dependency'  => array(
			'element'   => 'method',
			'value'     => array( 'portfolio' )
		),
		'group'       => esc_html__('Filter', 'holycross')
	),
    array(
        'type'        => 'param_group',
        'heading'     => esc_html__( 'Team', 'holycross' ),
        'param_name'  => 'list_team',
        'params'      => array(
            array(
                'type'        => 'dropdown',
                'admin_label' => true,
                'heading'     => esc_html__( 'Add Team', 'holycross' ),
                'param_name'  => 'team_slug',
                'value'       => $teams,
                'description' => esc_html__( 'Choose special team to show',  'holycross'  )
            ),

        ),
        'value'       => '',
        'description' => esc_html__( 'Default display All Team if no team is selected and Number team is empty.', 'holycross' ),
        'dependency'  => array(
            'element'   => 'method',
            'value'     => array( 'team' )
        ),
        'group'       => esc_html__('Filter', 'holycross')
    ),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Title Color', 'holycross' ),
		'param_name'  => 'color_title',
		'value'       => '',
		'description' => esc_html__( 'Choose color title for block.', 'holycross' ),
		'group'       => esc_html__('Custom', 'holycross')
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Title Color Hover', 'holycross' ),
		'param_name'  => 'color_title_hv',
		'value'       => '',
		'description' => esc_html__( 'Choose color title for block when hover.', 'holycross' ),
		'group'       => esc_html__('Custom', 'holycross')
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Category Color', 'holycross' ),
		'param_name'  => 'color_category',
		'value'       => '',
		'description' => esc_html__( 'Choose color category for block.', 'holycross' ),
		'group'       => esc_html__('Custom', 'holycross')
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Category Color Hover', 'holycross' ),
		'param_name'  => 'color_category_hv',
		'value'       => '',
		'description' => esc_html__( 'Choose color category for block when hover.', 'holycross' ),
		'group'       => esc_html__('Custom', 'holycross')
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Meta Info Color', 'holycross' ),
		'param_name'  => 'color_meta_info',
		'value'       => '',
		'description' => esc_html__( 'Choose color meta info for block.', 'holycross' ),
		'dependency'  => array(
			'element'   => 'layout',
			'value'     => array('', 'layout-1' )
		),
		'group'       => esc_html__('Custom', 'holycross')
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Meta Info Color Hover', 'holycross' ),
		'param_name'  => 'color_meta_info_hv',
		'value'       => '',
		'description' => esc_html__( 'Choose color meta info for block when hover.', 'holycross' ),
		'dependency'  => array(
			'element'   => 'layout',
			'value'     => array('', 'layout-1' )
		),
		'group'       => esc_html__('Custom', 'holycross')
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Description Color', 'holycross' ),
		'param_name'  => 'color_description',
		'value'       => '',
		'description' => esc_html__( 'Choose color description for block.', 'holycross' ),
		'group'       => esc_html__('Custom', 'holycross')
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Background Image Color Hover', 'holycross' ),
		'param_name'  => 'color_item_bg_hv',
		'value'       => '',
		'description' => esc_html__( 'Choose background color image for block when hover.', 'holycross' ),
		'group'       => esc_html__('Custom', 'holycross')
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Button Color', 'holycross' ),
		'param_name'  => 'color_button',
		'value'       => '',
		'description' => esc_html__( 'Choose color button for block.', 'holycross' ),
		'group'       => esc_html__('Custom', 'holycross')
	),
	array(
		'type'        => 'colorpicker',
		'heading'     => esc_html__( 'Button Color Hover', 'holycross' ),
		'param_name'  => 'color_button_hv',
		'value'       => '',
		'description' => esc_html__( 'Choose color button for block when hover.', 'holycross' ),
		'group'       => esc_html__('Custom', 'holycross')
	),
    array(
        'type'        => 'colorpicker',
        'heading'     => esc_html__( 'Attachment Icon Color', 'holycross' ),
        'param_name'  => 'color_icon',
        'value'       => '',
        'description' => esc_html__( 'Choose color attachment icon for block.', 'holycross' ),
        'group'       => esc_html__('Custom', 'holycross')
    ),
    array(
        'type'        => 'colorpicker',
        'heading'     => esc_html__( 'Attachment Icon Color Hover', 'holycross' ),
        'param_name'  => 'color_icon_hv',
        'value'       => '',
        'description' => esc_html__( 'Choose color attachment icon for block when hover.', 'holycross' ),
        'group'       => esc_html__('Custom', 'holycross')
    ),
    array(
        'type'        => 'colorpicker',
        'heading'     => esc_html__( 'Attachment Background Color', 'holycross' ),
        'param_name'  => 'color_attach_bg',
        'value'       => '',
        'description' => esc_html__( 'Choose color attachment background for block.', 'holycross' ),
        'group'       => esc_html__('Custom', 'holycross')
    ),
    array(
        'type'        => 'colorpicker',
        'heading'     => esc_html__( 'Attachment Background Color Hover', 'holycross' ),
        'param_name'  => 'color_attach_bg_hv',
        'value'       => '',
        'description' => esc_html__( 'Choose color attachment background for block when hover.', 'holycross' ),
        'group'       => esc_html__('Custom', 'holycross')
    )
);

$vc_options = array_merge( 
	$layouts,
	$layout_options,
	$params
);
