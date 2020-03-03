<?php if ( ! defined( 'SLZ' ) ) {
	exit;
}
$regist_sidebars = array_merge( array( '' => esc_html__('-- Select widget area --', 'holycross') ), SLZ_Com::get_regist_sidebars() );
$article_ext = slz_ext('articles');
$sidebar_layout = array(
	'left' => array(
		'small' => array(
			'height' => 50,
			'src'    => HOLYCROSS_OPTION_IMG_URI .'/sidebar/left.png'
		)
	),
	'right' => array(
		'small' => array(
			'height' => 50,
			'src'    => HOLYCROSS_OPTION_IMG_URI .'/sidebar/right.png'
		)
	),
	'none' => array(
		'small' => array(
			'height' => 50,
			'src'    => HOLYCROSS_OPTION_IMG_URI .'/sidebar/full.png'
		)
	),
);
$title_type =  array(
	'level'       => esc_html__(' Default','holycross'),
	'custom'      => esc_html__(' Custom','holycross'),
);
$portfolio_box = array(
	'title'   => esc_html__( 'Portfolio Archive', 'holycross' ),
	'type'    => 'box',
	'options' => array(
		'portfolio-ac-sidebar-layout'    => array(
			'label'   => esc_html__( 'Sidebar Layout', 'holycross' ),
			'desc'    => esc_html__( 'Set how to display sidebar in portfolio archive pages.', 'holycross' ),
			'type'    => 'image-picker',
			'choices' => $sidebar_layout,
			'value'   => 'left'
		),
		'portfolio-ac-sidebar'  =>  array(
			'type'  => 'select',
			'label' => esc_html__('Choose Sidebar', 'holycross'),
			'desc'  => esc_html__('You can create new sidebar in','holycross').' <br><a href="' . esc_url( admin_url( 'widgets.php' ) ) . '" >'.esc_html__('Appearance > Widgets','holycross').'</a>',
			'choices' => $regist_sidebars,
		),
		'portfolio-ac-title'  =>  array(
			'type'         => 'multi-picker',
			'label'        => false,
			'desc'         => false,
			'picker'       => array(
				'title-type' => array(
					'type'  => 'radio',
					'value' => 'default',
					'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
					'label' => esc_html__('Choose Title', 'holycross'),
					'choices' => $title_type,
					'inline' => true,
				),
			),
			'choices'      => array(
				'custom' => array(
					'custom-title' => array(
						'label'   => esc_html__( 'Custom Title', 'holycross' ),
						'type'    => 'text',
						'value'   => '',
						'desc'    => esc_html__( 'Add custom title for archive', 'holycross' ),
					),
				)
			),
		),
		'portfolio-ac-limit-post'  =>  array(
			'type'  => 'short-text',
			'label' => esc_html__('Post Per Page', 'holycross'),
			'desc'  => esc_html__('Add limit posts per page. Set -1 or empty to show all.', 'holycross'),
		),
		'portfolio-ac-column'  =>  array(
			'type'  => 'short-text',
			'label' => esc_html__('Column', 'holycross'),
			'desc'  => esc_html__('Enter number of columns to display list of portfolio.', 'holycross'),
		),
	)
);
$team_box = array(
	'title'   => esc_html__( 'Team Archive', 'holycross' ),
	'type'    => 'box',
	'options' => array(
		'team-ac-sidebar-layout'    => array(
			'label'   => esc_html__( 'Sidebar Layout', 'holycross' ),
			'desc'    => esc_html__( 'Set how to display sidebar in team archive pages.', 'holycross' ),
			'type'    => 'image-picker',
			'choices' => $sidebar_layout,
			'value'   => 'left'
		),
		'team-ac-sidebar'  =>  array(
			'type'  => 'select',
			'label' => esc_html__('Choose Sidebar', 'holycross'),
			'desc'  => esc_html__('You can create new sidebar in','holycross').' <br><a href="' . esc_url( admin_url( 'widgets.php' ) ) . '" >'.esc_html__('Appearance > Widgets','holycross').'</a>',
			'choices' => $regist_sidebars,
		),
        'team-ac-title'  =>  array(
            'type'         => 'multi-picker',
            'label'        => false,
            'desc'         => false,
            'picker'       => array(
                'title-type' => array(
                    'type'  => 'radio',
                    'value' => 'default',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => esc_html__('Choose Title', 'holycross'),
                    'choices' => $title_type,
                    'inline' => true,
                ),
            ),
            'choices'      => array(
                'custom' => array(
                    'custom-title' => array(
                        'label'   => esc_html__( 'Custom Title', 'holycross' ),
                        'type'    => 'text',
                        'value'   => '',
                        'desc'    => esc_html__( 'Add custom title for archive', 'holycross' ),
                    ),
                )
            ),
        ),
        'team-ac-limit-post'  =>  array(
            'type'  => 'text',
            'label' => esc_html__('Post Per Page', 'holycross'),
            'desc'  => esc_html__('Enter number of posts display in team archive page. If empty, this value get from posts per page value of WordPress.', 'holycross'),
            'value' => ''
        ),
        'team-ac-column'  =>  array(
            'type'  => 'short-text',
            'label' => esc_html__('Column', 'holycross'),
            'desc'  => esc_html__('Enter number of columns to display list of team.', 'holycross'),
        ),
	)
);
$service_box = array(
	'title'   => esc_html__( 'Service Archive', 'holycross' ),
	'type'    => 'box',
	'options' => array(
		'service-ac-sidebar-layout'    => array(
			'label'   => esc_html__( 'Sidebar Layout', 'holycross' ),
			'desc'    => esc_html__( 'Set how to display sidebar in service archive pages.', 'holycross' ),
			'type'    => 'image-picker',
			'choices' => $sidebar_layout,
			'value'   => 'left'
		),
		'service-ac-sidebar'  =>  array(
			'type'  => 'select',
			'label' => esc_html__('Choose Sidebar', 'holycross'),
			'desc'  => esc_html__('You can create new sidebar in','holycross').' <br><a href="' . esc_url( admin_url( 'widgets.php' ) ) . '" >'.esc_html__('Appearance > Widgets','holycross').'</a>',
			'choices' => $regist_sidebars,
		),
        'service-ac-title'  =>  array(
            'type'         => 'multi-picker',
            'label'        => false,
            'desc'         => false,
            'picker'       => array(
                'title-type' => array(
                    'type'  => 'radio',
                    'value' => 'default',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => esc_html__('Choose Title', 'holycross'),
                    'choices' => $title_type,
                    'inline' => true,
                ),
            ),
            'choices'      => array(
                'custom' => array(
                    'custom-title' => array(
                        'label'   => esc_html__( 'Custom Title', 'holycross' ),
                        'type'    => 'text',
                        'value'   => '',
                        'desc'    => esc_html__( 'Add custom title for archive', 'holycross' ),
                    ),
                )
            ),
        )
	)
);
$event_box = array(
	'title'   => esc_html__( 'Event Archive', 'holycross' ),
	'type'    => 'box',
	'options' => array(
		'event-ac-sidebar-layout'    => array(
			'label'   => esc_html__( 'Sidebar Layout', 'holycross' ),
			'desc'    => esc_html__( 'Set how to display sidebar in event archive pages.', 'holycross' ),
			'type'    => 'image-picker',
			'choices' => $sidebar_layout,
			'value'   => 'left'
		),
		'event-ac-sidebar'  =>  array(
			'type'  => 'select',
			'label' => esc_html__('Choose Sidebar', 'holycross'),
			'desc'  => esc_html__('You can create new sidebar in','holycross').' <br><a href="' . esc_url( admin_url( 'widgets.php' ) ) . '" >'.esc_html__('Appearance > Widgets','holycross').'</a>',
			'choices' => $regist_sidebars
		),
        'event-ac-title'  =>  array(
            'type'         => 'multi-picker',
            'label'        => false,
            'desc'         => false,
            'picker'       => array(
                'title-type' => array(
                    'type'  => 'radio',
                    'value' => 'default',
                    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                    'label' => esc_html__('Choose Title', 'holycross'),
                    'choices' => $title_type,
                    'inline' => true,
                ),
            ),
            'choices'      => array(
                'custom' => array(
                    'custom-title' => array(
                        'label'   => esc_html__( 'Custom Title', 'holycross' ),
                        'type'    => 'text',
                        'value'   => '',
                        'desc'    => esc_html__( 'Add custom title for archive', 'holycross' ),
                    ),
                )
            ),
        ),
		'event-ac-limit-post'  =>  array(
			'type'  => 'text',
			'label' => esc_html__('Post Per Page', 'holycross'),
			'desc'  => esc_html__('Enter number of posts display in event archive page. If empty, this value get from posts per page value of WordPress.', 'holycross'),
			'value' => ''
		),
        'event-ac-column'  =>  array(
            'type'  => 'short-text',
            'label' => esc_html__('Column', 'holycross'),
            'desc'  => esc_html__('Enter number of columns to display list of event.', 'holycross'),
        ),
		'event-ac-order-by' => array(
			'type'    => 'select',
			'label'   => esc_html__( 'Order By', 'holycross' ),
			'desc'    => esc_html__( 'Sort post by field.', 'holycross' ),
			'choices' => array(
				'title'           => esc_html__( 'Title', 'holycross' ),
				'date'            => esc_html__( 'Post Created Date', 'holycross' ),
				'event_from_date' => esc_html__( 'Event From Date', 'holycross' ),
				'event_to_date'   => esc_html__( 'Event To Date', 'holycross' ),
			),
			'value'   => 'event_from_date',
		),
		'event-ac-order'    => array(
			'type'    => 'select',
			'label'   => esc_html__( 'Order', 'holycross' ),
			'desc'    => esc_html__( 'Designates the ascending or descending order.', 'holycross' ),
			'choices' => array(
				'asc'  => esc_html__( 'Ascending', 'holycross' ),
				'desc' => esc_html__( 'Descending', 'holycross' ),
			),
			'value'   => 'desc'
		),
	)
);
if ( $article_ext != null )
{
	$options = array(
		'article_tab' => array(
			'title'   => esc_html__( 'Template Settings', 'holycross' ),
			'type'    => 'tab',
			'options' => array(
				'template-settings-tab' => array(
					'title'   => esc_html__( 'Template Settings', 'holycross' ),
					'type'    => 'tab',
					'options' => array(
						'page-template-box' => array(
							'title'   => esc_html__( 'Page Settings', 'holycross' ),
							'type'    => 'box',
							'options' => array(
								'page-sidebar-layout'    => array(
									'label' => esc_html__( 'Sidebar Layout', 'holycross' ),
									'desc'  => esc_html__( 'Set how to display blog sidebar.', 'holycross' ),
									'type'  => 'image-picker',
									'choices' => $sidebar_layout,
									'value' => 'left'
								),
								'page-sidebar'  =>  array(
									'type'  => 'select',
									'label' => esc_html__('Choose Sidebar', 'holycross'),
									'desc'  => esc_html__('You can create new sidebar in','holycross').' <br><a href="' . esc_url( admin_url( 'widgets.php' ) ) . '" >'.esc_html__('Appearance > Widgets','holycross').'</a>',
									'choices' => $regist_sidebars,
								),
							)
						),
						'main-blog-template-box' => array(
							'title'   => esc_html__( 'Blog Settings', 'holycross' ),
							'type'    => 'box',
							'options' => array(
								'main-blog-article-style' => array(
									'label' => esc_html__( 'Article Style', 'holycross' ),
									'type'    => 'image-picker',
									'choices' => $article_ext->get_article_choices(),
									'value'   => 'article_04',
								),
								'main-blog-sidebar-layout'    => array(
									'label' => esc_html__( 'Sidebar Layout', 'holycross' ),
									'desc'  => esc_html__( 'Set how to display blog sidebar.', 'holycross' ),
									'type'  => 'image-picker',
									'choices' => $sidebar_layout,
									'value' => 'left'
								),
								'main-blog-sidebar'  =>  array(
									'type'  => 'select',
									'label' => esc_html__('Choose Sidebar', 'holycross'),
									'desc'  => esc_html__('You can create new sidebar in','holycross').' <br><a href="' . esc_url( admin_url( 'widgets.php' ) ) . '" >'.esc_html__('Appearance > Widgets','holycross').'</a>',
									'choices' => $regist_sidebars,
								),
							)
						),
						'portfolio-template-box' => $portfolio_box,
						'event-template-box' => $event_box,
						'team-template-box' => $team_box,
						'service-template-box' => $service_box,
						'search-template-box' => array(
							'title'   => esc_html__( 'Search Settings', 'holycross' ),
							'type'    => 'box',
							'options' => array(
								'search-article-style' => array(
									'label' => esc_html__( 'Article Style', 'holycross' ),
									'type'    => 'image-picker',
									'choices' => $article_ext->get_article_choices(),
									'value'   => SLZ_Com::get_first( $article_ext->get_article_choices() ),
								),
								'search-sidebar-layout'    => array(
									'label' => esc_html__( 'Sidebar Layout', 'holycross' ),
									'desc'  => esc_html__( 'Set how to display blog sidebar.', 'holycross' ),
									'type'  => 'image-picker',
									'choices' => $sidebar_layout,
									'value' => 'left'
								),
								'search-sidebar'  =>  array(
									'type'  => 'select',
									'label' => esc_html__('Choose Sidebar', 'holycross'),
									'desc'  => esc_html__('You can create new sidebar in','holycross').' <br><a href="' . esc_url( admin_url( 'widgets.php' ) ) . '" >'.esc_html__('Appearance > Widgets','holycross').'</a>',
									'choices' => $regist_sidebars,
								),
							)
						),
						'author-template-box' => array(
							'title'   => esc_html__( 'Author Settings', 'holycross' ),
							'type'    => 'box',
							'options' => array(
								'author-article-style' => array(
									'label' => esc_html__( 'Article Style', 'holycross' ),
									'type'    => 'image-picker',
									'choices' => $article_ext->get_article_choices(),
									'value'   => SLZ_Com::get_first( $article_ext->get_article_choices() ),
								),
								'author-sidebar-layout'    => array(
									'label' => esc_html__( 'Sidebar Layout', 'holycross' ),
									'desc'  => esc_html__( 'Set how to display blog sidebar.', 'holycross' ),
									'type'  => 'image-picker',
									'choices' => $sidebar_layout,
									'value' => 'left'
								),
								'author-sidebar'  =>  array(
									'type'  => 'select',
									'label' => esc_html__('Choose Sidebar', 'holycross'),
									'desc'  => esc_html__('You can create new sidebar in','holycross').' <br><a href="' . esc_url( admin_url( 'widgets.php' ) ) . '" >'.esc_html__('Appearance > Widgets','holycross').'</a>',
									'choices' => $regist_sidebars,
								),
							)
						),
						'category-template-box' => array(
							'title'   => esc_html__( 'Category Settings', 'holycross' ),
							'type'    => 'box',
							'options' => array(
								'category-article-style' => array(
									'label' => esc_html__( 'Article Style', 'holycross' ),
									'type'    => 'image-picker',
									'choices' => $article_ext->get_article_choices(),
									'value'   => SLZ_Com::get_first( $article_ext->get_article_choices() ),
								),
								'category-sidebar-layout'    => array(
									'label' => esc_html__( 'Sidebar Layout', 'holycross' ),
									'desc'  => esc_html__( 'Set how to display blog sidebar.', 'holycross' ),
									'type'  => 'image-picker',
									'choices' => $sidebar_layout,
									'value' => 'left'
								),
								'category-sidebar'  =>  array(
									'type'  => 'select',
									'label' => esc_html__('Choose Sidebar', 'holycross'),
									'desc'  => esc_html__('You can create new sidebar in','holycross').' <br><a href="' . esc_url( admin_url( 'widgets.php' ) ) . '" >'.esc_html__('Appearance > Widgets','holycross').'</a>',
									'choices' => $regist_sidebars,
								),
							)
						),
						'archive-template-box' => array(
							'title'   => esc_html__( 'Archive Settings', 'holycross' ),
							'type'    => 'box',
							'options' => array(
								'archive-article-style' => array(
									'label' => esc_html__( 'Article Style', 'holycross' ),
									'type'    => 'image-picker',
									'choices' => $article_ext->get_article_choices(),
									'value'   => SLZ_Com::get_first( $article_ext->get_article_choices() ),
								),
								'archive-sidebar-layout'    => array(
									'label' => esc_html__( 'Sidebar Layout', 'holycross' ),
									'desc'  => esc_html__( 'Set how to display blog sidebar.', 'holycross' ),
									'type'  => 'image-picker',
									'choices' => $sidebar_layout,
									'value' => 'left'
								),
								'archive-sidebar'  =>  array(
									'type'  => 'select',
									'label' => esc_html__('Choose Sidebar', 'holycross'),
									'desc'  => esc_html__('You can create new sidebar in','holycross').' <br><a href="' . esc_url( admin_url( 'widgets.php' ) ) . '" >'.esc_html__('Appearance > Widgets','holycross').'</a>',
									'choices' => $regist_sidebars,
								),
							)
						),
						'tag-template-box' => array(
							'title'   => esc_html__( 'Tag Settings', 'holycross' ),
							'type'    => 'box',
							'options' => array(
								'tag-article-style' => array(
									'label' => esc_html__( 'Article Style', 'holycross' ),
									'type'    => 'image-picker',
									'choices' => $article_ext->get_article_choices(),
									'value'   => SLZ_Com::get_first( $article_ext->get_article_choices() ),
								),
								'tag-sidebar-layout'    => array(
									'label' => esc_html__( 'Sidebar Layout', 'holycross' ),
									'desc'  => esc_html__( 'Set how to display blog sidebar.', 'holycross' ),
									'type'  => 'image-picker',
									'choices' => $sidebar_layout,
									'value' => 'left'
								),
								'tag-sidebar'  =>  array(
									'type'  => 'select',
									'label' => esc_html__('Choose Sidebar', 'holycross'),
									'desc'  => esc_html__('You can create new sidebar in','holycross').' <br><a href="' . esc_url( admin_url( 'widgets.php' ) ) . '" >'.esc_html__('Appearance > Widgets','holycross').'</a>',
									'choices' => $regist_sidebars,
								),
							)
						),
						
					)
				),
			)
		)
	);
}
