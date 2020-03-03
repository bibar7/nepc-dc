<?php if ( ! defined( 'SLZ' ) ) {
	exit;
}

$post_ext = slz_ext('posts');

if ( empty( $post_ext ) )
	return;

$regist_sidebars = array_merge( array( '' => esc_html__('-- Select widget area --', 'holycross') ), SLZ_Com::get_regist_sidebars() );
$sidebar_layout = array(
	'left' => array(
		'small' => array(
			'height' => 50,
			'src'    => HOLYCROSS_OPTION_IMG_URI . '/sidebar/left.png'
		)
	),
	'right' => array(
		'small' => array(
			'height' => 50,
			'src'    => HOLYCROSS_OPTION_IMG_URI . '/sidebar/right.png'
		)
	),
	'none' => array(
		'small' => array(
			'height' => 50,
			'src'    => HOLYCROSS_OPTION_IMG_URI . '/sidebar/full.png'
		)
	),
);
$social_box = array(
	'type'   => 'multi-picker',
	'label'  => false,
	'picker' => array(
		'enable-social-share' => array(
			'type'        => 'switch',
			'value'       => 'disable',
			'label'       => esc_html__( 'Social Share', 'holycross' ),
			'desc'   => esc_html__( 'Enable social share links in single pages ?', 'holycross' ),
			'left-choice' => array(
				'value' => 'disable',
				'label' => esc_html__( 'Disable', 'holycross' ),
			),
			'right-choice' => array(
				'value' => 'enable',
				'label' => esc_html__( 'Enable', 'holycross' ),
			)
		),
	),
	'choices'    => array(
		'enable' => array(
			'social-share-info' => array(
				'label'  => esc_html__( 'Add Social', 'holycross' ),
				'type'   => 'addable-option',
				'option' => array(
					'type'  => 'select',
					'choices' => array(
						'facebook'    => esc_html__('Facebook', 'holycross'),
						'twitter'     => esc_html__('Twitter', 'holycross'),
						'google-plus' => esc_html__('Google Plus', 'holycross'),
						'pinterest'   => esc_html__('Pinterest', 'holycross'),
						'linkedin'    => esc_html__('Linkedint', 'holycross'),
						'digg'        => esc_html__('Digg', 'holycross'),
					)
				),
			),
			'social-share-count' => array(
				'type'   => 'multi-picker',
				'label'  => false,
				'desc'   => false,
				'picker' => array(
					'enable-social-share-count' => array(
						'type'        => 'switch',
						'value'       => 'disable',
						'label'       => esc_html__( 'Share Count', 'holycross' ),
						'desc'        => esc_html__( 'Enable social share count in single pages ?', 'holycross' ),
						'left-choice' => array(
							'value' => 'disable',
							'label' => esc_html__( 'Disable', 'holycross' ),
						),
						'right-choice' => array(
							'value' => 'enable',
							'label' => esc_html__( 'Enable', 'holycross' ),
						)
					),
				),
				'choices'    => array(
					'enable' => array(
						'social-share-facebook-appid' => array(
							'type'  => 'text',
							'label' => esc_html__('Facebook App ID', 'holycross'),
							'desc'  => esc_html__( 'Enter App ID to get the share count of Facebook.', 'holycross' ),
						),
						'social-share-facebook-secret-key' => array(
							'type'  => 'text',
							'label' => esc_html__('Facebook Secret Key', 'holycross'),
							'desc'  => esc_html__( 'Enter Secret Key to get the share count of Facebook.', 'holycross' ),
						),
					),
				),
			),
		),
	),
);
//-------------------------------------------------------------------------//

$posts_tab = array (
	'title'   => esc_html__( 'Post Settings', 'holycross' ),
	'type'    => 'tab',
	'options' => array(
		'posts-box'        => array(
			'title'   => esc_html__( 'Post Layout', 'holycross' ),
			'type'    => 'box',
			'options' => array(
				'blog-layout'	=> array(
					'type'    => 'image-picker',
					'label'   => esc_html__( 'Blog Style', 'holycross' ),
					'desc'    => esc_html__( 'Select the blog display style', 'holycross' ),
					'choices' => $post_ext->get_post_choices(),
					'value'   => SLZ_Com::get_first( $post_ext->get_post_choices() ),
				),
				'blog-sidebar-layout'    => array(
					'label' => esc_html__( 'Sidebar Layout', 'holycross' ),
					'desc'  => esc_html__( 'Set how to display sidebar in single pages.', 'holycross' ),
					'type'  => 'image-picker',
					'choices' =>$sidebar_layout,
					'value' => 'left'
				),
				'blog-sidebar' => array(
					'type'    => 'select',
					'label'   => esc_html__('Post Sidebar', 'holycross'),
					'desc'    => esc_html__('You can create new sidebar in','holycross').' <br><a href="' . esc_url( admin_url( 'widgets.php' ) ) . '" >'.esc_html__('Appearance > Widgets','holycross').'</a>',
					'choices' => $regist_sidebars,
				),
			)
		),
		'post-info-box' => array(
			'title'   => esc_html__( 'Post Info', 'holycross' ),
			'type'    => 'box',
			'options' => array(
				'post-info' => array(
					'label'  => esc_html__( 'Select Post Info', 'holycross' ),
					'type'   => 'addable-option',
					'option' => array(
						'type'  => 'select',
						'choices' => array(
							'date'     => esc_html__('Date', 'holycross'),
							'author'   => esc_html__('Author', 'holycross'),
							'category' => esc_html__('Category', 'holycross'),
							'tag'      => esc_html__('Tag', 'holycross'),
							'comment'  => esc_html__('Comment Count', 'holycross'),
							'view'     => esc_html__('View Count', 'holycross'),
							'like'     => esc_html__('Like Count', 'holycross'),
						)
					),
					'value'  => array( 'author', 'date', 'comment' ),
					'desc'   => esc_html__( 'Select post info to show in single pages and blocks.', 'holycross' ),
				),
			)
		),
		'related-box' => array(
			'title'   => esc_html__( 'Related Articles', 'holycross' ),
			'type'    => 'box',
			'options' => array(
				'blog-article'   => array(
					'type'         => 'multi-picker',
					'label'        => false,
					'desc'         => false,
					'picker'       => array(
						'status' => array(
							'label'        => esc_html__( 'Show Related Articles', 'holycross' ),
							'desc'         => esc_html__( 'Show related articles in single pages ?', 'holycross' ),
							'type'         => 'switch',
							'right-choice' => array(
								'value' => 'show',
								'label' => esc_html__( 'Show', 'holycross' )
							),
							'left-choice'  => array(
								'value' => 'hide',
								'label' => esc_html__( 'Hide', 'holycross' )
							),
							'value'        => 'hide',
						)
					),
					'choices'      => array(
						'show' => array(
							'filter-by' => array(
								'label'        => esc_html__( 'Filter By', 'holycross' ),
								'desc'         => esc_html__( 'Filter related articles by ?', 'holycross' ),
								'type'         => 'switch',
								'right-choice' => array(
									'value' => 'category',
									'label' => esc_html__( 'By Category', 'holycross' )
								),
								'left-choice'  => array(
									'value' => 'tag',
									'label' => esc_html__( 'By Tag', 'holycross' )
								),
								'value'        => 'category',
							),
                            'column' => array(
                                'type'  => 'short-text',
                                'label' => esc_html__( 'Columns', 'holycross' ),
                                'desc'  => esc_html__( 'Enter number of columns to display related articles. Ex: 3', 'holycross' ),
                                'value' => '3',
                            ),
							'limit' => array(
								'type'  => 'short-text',
								'label' => esc_html__( 'Article Post Limit', 'holycross' ),
								'desc'  => esc_html__( 'Total post of related article will be show. Ex: 6', 'holycross' ),
								'value' => '6',
							),
							'order_by' => array(
								'type'    => 'select',
								'label'   => esc_html__('Article Order By', 'holycross'),
								'desc'    => esc_html__('Order the post in related article by ?', 'holycross'),
								'choices' => array(
									'id'     => esc_html__('ID', 'holycross'),
									'title'  => esc_html__('Title', 'holycross'),
									'date'   => esc_html__('Date', 'holycross'),
									'author' => esc_html__('Author', 'holycross'),
									'random' => esc_html__('Random', 'holycross')
								),
							),
							'order' => array(
								'type'    => 'select',
								'label'   => esc_html__('Article Order', 'holycross'),
								'desc'    => esc_html__('Order the post in related article with ascending or descending mode ?', 'holycross'),
								'choices' => array(
									'desc'  => esc_html__('Desc', 'holycross'),
									'asc'   => esc_html__('Asc', 'holycross')
								),
							)
						),
					),
					'show_borders' => true,
				),
			)
		),
		'post-content-box' => array(
			'title'   => esc_html__( 'Other Settings', 'holycross' ),
			'type'    => 'box',
			'options' => array(
				'blog-post-tags' => array(
					'label'        => esc_html__( 'Post Tags', 'holycross' ),
					'desc'         => esc_html__( 'Show list of post tags in single pages?', 'holycross' ),
					'type'         => 'switch',
					'right-choice' => array(
						'value' => 'yes',
						'label' => esc_html__( 'Yes', 'holycross' )
					),
					'left-choice'  => array(
						'value' => 'no',
						'label' => esc_html__( 'No', 'holycross' )
					),
					'value'        => 'yes',
				),
				'blog-post-categories' => array(
					'label'        => esc_html__( 'Post Categories', 'holycross' ),
					'desc'         => esc_html__( 'Show list of post categories in single pages ?', 'holycross' ),
					'type'         => 'switch',
					'right-choice' => array(
						'value' => 'yes',
						'label' => esc_html__( 'Yes', 'holycross' )
					),
					'left-choice'  => array(
						'value' => 'no',
						'label' => esc_html__( 'No', 'holycross' )
					),
					'value'        => 'yes',
				),
				'blog-post-author-box' => array(
					'label'        => esc_html__( 'Author Box', 'holycross' ),
					'desc'         => esc_html__( 'Show author box in single pages?', 'holycross' ),
					'type'         => 'switch',
					'right-choice' => array(
						'value' => 'yes',
						'label' => esc_html__( 'Yes', 'holycross' )
					),
					'left-choice'  => array(
						'value' => 'no',
						'label' => esc_html__( 'No', 'holycross' )
					),
					'value'        => 'yes',
				),
				'blog-post-post-navigation' => array(
					'label'        => esc_html__( 'Post Navigation', 'holycross' ),
					'desc'         => esc_html__( 'Show post navigation in single pages ?', 'holycross' ),
					'type'         => 'switch',
					'right-choice' => array(
						'value' => 'yes',
						'label' => esc_html__( 'Yes', 'holycross' )
					),
					'left-choice'  => array(
						'value' => 'no',
						'label' => esc_html__( 'No', 'holycross' )
					),
					'value'        => 'yes',
				),
				'social-in-post' => $social_box,// end social
			),
		),
	),
);

$options_tab = array(
	$posts_tab,
);
$active_posttype_ext = slz()->theme->get_config('active_posttype_ext');
$option_title = array(
	'slz-portfolio'   => esc_html__( 'Portfolio Settings', 'holycross' ),
	'slz-team'        => esc_html__( 'Team Settings', 'holycross' ),
	'slz-service'     => esc_html__( 'Service Settings', 'holycross'),
	'slz-event'       => esc_html__( 'Event Settings', 'holycross'),
	'product'         => esc_html__( 'Product Settings', 'holycross'),
);
foreach( $active_posttype_ext as $option => $extension ) {
	// check extension is activated
	if( ( $option != 'product' && ! slz_ext( $extension ) ) || ( $option == 'product' && ! HOLYCROSS_WC_ACTIVE ) ) {
		continue;
	}
	$posttype = str_replace( 'slz-', '', $option );
	
	$box = array(
		'post-layout-box' => array(
			'title'   => $option_title[$option],
			'type'    => 'box',
			'options' => array(
				$posttype .'-sidebar-layout' => array(
					'label' => esc_html__( 'Sidebar Layout', 'holycross' ),
					'desc'  => esc_html__( 'Set how to display sidebar in service single pages.', 'holycross' ),
					'type'  => 'image-picker',
					'choices' => $sidebar_layout,
					'value' => 'left'
				),
				$posttype .'-sidebar'  =>  array(
					'type'  => 'select',
					'label' => esc_html__('Choose Sidebar', 'holycross'),
					'desc'  => esc_html__('You can create new sidebar in','holycross').' <br><a href="' . esc_url( admin_url( 'widgets.php' ) ) . '" >'.esc_html__('Appearance > Widgets','holycross').'</a>',
					'choices' => $regist_sidebars,
				),
			)
		)
	); // box options

	if( $option == 'product' ) {
		$box = array_merge( $box, array(
				'related-box' => array(
					'title'   => esc_html__( 'Related Products', 'holycross' ),
					'type'    => 'box',
					'options' => array(
						'product-related-post'   => array(
							'type'         => 'multi-picker',
							'label'        => false,
							'desc'         => false,
							'picker'       => array(
								'status' => array(
									'label'        => esc_html__( 'Show Related Products', 'holycross' ),
									'desc'         => esc_html__( 'Show related products in product pages ?', 'holycross' ),
									'type'         => 'switch',
									'right-choice' => array(
										'value' => 'show',
										'label' => esc_html__( 'Show', 'holycross' )
									),
									'left-choice'  => array(
										'value' => 'hide',
										'label' => esc_html__( 'Hide', 'holycross' )
									),
									'value'        => 'show',
								)
							),
							'choices'      => array(
								'show' => array(
									'limit'           => array(
										'type'  => 'short-text',
										'label' => esc_html__( 'Limit Posts', 'holycross' ),
										'desc'  => esc_html__( 'Total posts of related posts will be show.', 'holycross' ),
										'value' => '4',
									),
									'column'           => array(
										'type'  => 'short-text',
										'label' => esc_html__( 'Columns', 'holycross' ),
										'desc'  => esc_html__( 'Enter number of columns to show.', 'holycross' ),
										'value' => '4',
									),
								),
							),
							'show_borders' => true,
						),
					)
				), //related box
			)
		);
	}
	// is portfolio extension?
	if( $option == 'slz-portfolio' )
	{
		$box = array_merge( $box, array(
			'post-info-box' => array(
				'title'   => esc_html__( 'Portfolio Info', 'holycross' ),
				'type'    => 'box',
				'options' => array(
                    'pf-show-meta-info' => array(
                        'type'        => 'switch',
                        'value'       => 'show',
                        'label'       => esc_html__( 'Show Portfolio Info', 'holycross' ),
                        'desc'   => esc_html__( 'Show or hide portfolio info in single pages ?', 'holycross' ),
                        'left-choice' => array(
                            'value' => 'hide',
                            'label' => esc_html__( 'Hide', 'holycross' ),
                        ),
                        'right-choice' => array(
                            'value' => 'show',
                            'label' => esc_html__( 'Show', 'holycross' ),
                        )
                    ),
					'pf-meta-info' => array(
						'label'  => esc_html__( 'Select Portfolio Info', 'holycross' ),
						'type'   => 'addable-option',
						'option' => array(
							'type'    => 'select',
							'choices' => array(
								'date'      => esc_html__('Date', 'holycross'),
								'category'  => esc_html__('Category', 'holycross'),
								'team'      => esc_html__('Team', 'holycross'),
								'attach'    => esc_html__('Attachments', 'holycross')
							)
						),
						'value'  => array( 'category', 'date', 'team', 'attach' ),
						'desc'   => esc_html__( 'Select portfolio info to show in single pages.', 'holycross' )
					),
                    'pf-translate-text' => array(
                        'type'        => 'popup',
                        'label'       => esc_html__( 'Translate Text', 'holycross' ),
                        'desc'        => esc_html__( 'Translate text for portfolio info.', 'holycross' ),
                        'popup-title' => esc_html__( 'Translate Text', 'holycross' ),
                        'button'      => esc_html__( 'Edit', 'holycross'),
                        'size'        => 'small',
                        'popup-options' => array(
                            'pf-team-label' => array(
                                'type'   => 'text',
                                'value'  => 'Sermon from:',
                                'label'  => esc_html__( 'Sermon from:', 'holycross' ),
                                'desc'   => esc_html__( 'Label for portfolio team info.', 'holycross' ),
                            ),
                            'pf-category-label' => array(
                                'type'   => 'text',
                                'value'  => 'Categories:',
                                'label'  => esc_html__( 'Categories:', 'holycross' ),
                                'desc'   => esc_html__( 'Label for portfolio category info.', 'holycross' ),
                            ),
                        ),
                    ),
					'social-in-pf'   => $social_box
				)
			) // post-info box
		) );
	}

    if( $option == 'slz-event' )
    {
        $taxonomy_status_option = array();
        $events = slz_ext('events');
        $enable_status_taxonomy = $events->get_config('has_status_taxonomy');
        if ($enable_status_taxonomy) {
            $args = array
            (
                'get' => 'all',
            );
            $event_status_option = array();
            $terms = get_terms( 'slz-event-status', $args);
            foreach ($terms as $term) {
                $event_status_option[$term->name] = $term->name;
            }
            $box = array_merge( $box, array(
                    'list-status-disable' => array(
                        'type'  => 'select-multiple',
                        'value' => array(  ),
                        'label' => esc_html__('Hide Status', 'holycross'),
                        'desc'  => esc_html__('All post with this status will be hidden', 'holycross'),
                        'choices' => $event_status_option
                    )
                )
            );
        }
    }

	$options_tab[] = array(
		$posttype .'-tab' => array(
			'title'   => $option_title[$option],
			'type'    => 'tab',
			'options' => $box,
		)
	);
}

$options = array(
	'posts'          => array(
		'title'   => esc_html__( 'Post Settings', 'holycross' ),
		'type'    => 'tab',
		'options' => $options_tab
	),
);