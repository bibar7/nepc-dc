<?php
/*--------------------Sidebar Func << ----------------*/
if ( ! function_exists( 'holycross_get_sidebar' ) ) :
	function holycross_get_sidebar( $sidebar ) {
		if ( is_active_sidebar( $sidebar ) ) {
			dynamic_sidebar( $sidebar );
		}
	}
	endif;
if ( ! function_exists( 'holycross_get_container_class' ) ) :
	function holycross_get_container_class( $template = '', $is_taxonomy = false ) {
		$default = 'holycross-custom-sidebar';
		$instance = array(
			'show_sidebar'          => false,
			'sidebar'               => $default,
			'sidebar_layout_class'  => '',
			'sidebar_class'         => '',
			'content_class'         => '',
			'sidebar_layout'        => 'left',
			'block_class'           => 'slz-column-1',
		);
		extract($instance);

		if ( defined( 'SLZ' ) && function_exists('slz_extra_get_container_class')) {
			slz_extra_get_container_class( $template, $instance, $is_taxonomy );
			extract($instance);
		}
		// layout
		if ( $sidebar_layout != 'none' ) {
			$sidebar_layout_class = 'slz-sidebar-' . $sidebar_layout;
			$content_class = 'col-md-8 col-sm-12 col-xs-12';
			$sidebar_class = 'col-md-4 col-sm-12 col-xs-12';
			$show_sidebar = true;
		}else{
			$content_class = 'col-md-12 col-sm-12 col-xs-12';
		}
		if ( empty ( $sidebar ) ) {
			$sidebar = $default;
		}

		$holycross_container = array(
			'show_sidebar'          => $show_sidebar,
			'sidebar_layout_class'  => $sidebar_layout_class,
			'sidebar_class'         => $sidebar_class,
			'content_class'         => $content_class,
			'sidebar_layout'        => $sidebar_layout,
			'sidebar'               => $sidebar,
			'block_class'           => $block_class,
		);
		return $holycross_container;
	}
endif;
if ( ! function_exists( 'holycross_slz_enqueue_style' ) ) :
	function holycross_slz_enqueue_style() {
		if ( defined( 'SLZ' ) ) {
			if ( !is_admin() ) {
				$css_shortcodes = slz()->theme->manifest->get('css_supported_shortcodes', array());
				$ext = slz_ext('shortcodes');
				$version = slz()->theme->manifest->get_version();
				//css
				if( $ext ) {
					foreach($css_shortcodes as $name){
						wp_enqueue_style(
								'holycross-slz-extension-shortcodes-' . $name,
								$ext->locate_URI( '/static/css/holycross-'.$name.'.css' ),
								array(),
								$version
						);
					}
				}
			}
		}
	}
endif;
/*--------------------Post Func << --------------------*/
if ( ! function_exists( 'holycross_posts_pagination' ) ) :
	function holycross_posts_pagination() {
		?>
		<div class="slz-pagination">

			<?php the_posts_pagination( array(
				'prev_text'          => esc_html__( 'Previous', 'holycross' ),
				'next_text'          => esc_html__( 'Next', 'holycross' ),
				'screen_reader_text' => ' ',
			) ); ?>

		</div>
		<?php
	}
endif;

if ( ! function_exists( 'holycross_post_nav' ) ) :
	function holycross_post_nav() {
		global $post;
		// Don't print empty markup if there's nowhere to navigate.
		$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
		$next     = get_adjacent_post( false, '', false );
		if ( ! $next && ! $previous )
			return;
		?>
		<nav class="post-navigation row" >
			<div class="col-md-12">
				<div class="nav-links">
					<div class="pull-left prev-post">
					<?php previous_post_link( '%link', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'holycross' ) ); ?>
					</div>
					<div class="pull-right next-post">
					<?php next_post_link( '%link', _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link', 'holycross' ) ); ?>
					</div>
				</div><!-- .nav-links -->
			</div>
		</nav><!-- .navigation -->
		<?php
		}
endif;
if ( ! function_exists( 'holycross_sticky_ribbon' ) ) :
	/**
	 * Display sticky ribbon.
	*/
	function holycross_sticky_ribbon(){
		if ( is_sticky() && is_home() && ! is_paged() ) {
			echo '<div class="slz-sticky"><div class="inner"></div></div>';
		}
	}
endif;
if ( ! function_exists( 'holycross_post_thumbnail' ) ) :
	/**
	 * Display an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 *
	 */
	function holycross_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}
		?>

		<div class="block-image">

			<a class="post-thumbnail" href="<?php echo esc_url(holycross_get_link_url()); ?>" aria-hidden="true">

				<?php
					the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title(), 'class' => 'img-responsive img-full' ) );
				?>

			</a>

		</div>

		<?php
	}
endif;

if ( ! function_exists( 'holycross_post_detail_thumbnail' ) ) :
	/**
	 * Display an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 *
	 */
	function holycross_post_detail_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}
		?>
		<div class="slz-featured-block">
			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
				<?php
					the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title(), 'class' => 'img-responsive' ) );
				?>
			</a>
		</div>
		<?php
	}
endif;

if ( ! function_exists( 'holycross_first_category' ) ) :

	function holycross_first_category( $post, $class = 'block-category', $format = null ) {

		$out = '';

		if( $format == null ) $format = '<a href="%1$s" class="%3$s">%2$s</a>';

		$cat = current( get_the_category( $post ) );


		if ( $cat ) {

			$out = sprintf( $format, get_category_link($cat->cat_ID), esc_html( $cat->name ), $class );

		}

		return $out;

	}

endif;

if ( ! function_exists( 'holycross_entry_meta' ) ) :

	function holycross_entry_meta() {

		edit_post_link( esc_html__( 'Edit', 'holycross' ), '<li class="edit-link"><i class="fa fa-pencil"></i>', '</li>' );

		if ( 'post' === get_post_type() ) {
			printf( '<li>%1$s <a href="%2$s"  class="link author">%3$s</a></li>',
				_x( 'By ', 'Used before post author name.', 'holycross' ),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author()
			);
		}

		if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
			$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

			$time_string = sprintf( $time_string,
				esc_attr( get_the_date( 'c' ) ),
				get_the_date(),
				esc_attr( get_the_modified_date( 'c' ) ),
				get_the_modified_date()
			);

			printf( '<li><a href="%1$s" class="link date" rel="bookmark">%2$s</a></li>',
				esc_url( holycross_get_link_url() ),
				$time_string
			);
		}

		if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			printf('<li><a href="%1$s" class="link comment">%2$s</a></li>', esc_url( get_comments_link() ), get_comments_number_text() );
		}

}
endif;

if ( ! function_exists( 'holycross_tags_meta' ) ) :

	function holycross_tags_meta( $container = true ) {

		$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'Used between list items, there is a space after the comma.', 'holycross' ) );
		if ( $tags_list ) {
			$format = '<li>%1$s%2$s</li>';
			if( $container ) {
				$format = '<ul class="tags-list"><li>%1$s%2$s</li></ul>';
			}
			printf( $format,
					esc_html_x( 'Tags:', 'Used before tag names.', 'holycross' ),
					$tags_list
			);
		}

	}
endif;
if ( ! function_exists( 'holycross_categories_meta' ) ) :

	function holycross_categories_meta( $container = true ) {

		$categories_list = get_the_category_list( esc_html_x( ', ', 'Used between list items, there is a space after the comma.', 'holycross' ) );

		if ( $categories_list ) {
			$format = '<li>%1$s%2$s</li>';
			if( $container ) {
				$format = '<ul class="categories-list"><li>%1$s%2$s</li></ul>';
			}
			printf( $format,
					esc_html_x( 'Categories:', 'Used before category names.', 'holycross' ),
					$categories_list
			);
		}
	}
endif;
if ( ! function_exists( 'holycross_get_link_url' ) ) :
	/**
	 * Return the post URL.
	*
	* @uses get_url_in_content() to get the URL in the post meta (if it exists) or
	* the first link found in the post content.
	*
	* Falls back to the post permalink if no URL is found in the post.
	*
	*
	* @return string The Link format URL.
	*/
	function holycross_get_link_url() {
		$has_url = '';
		if( get_post_format() == 'link') {
			$content = get_the_content();
			$has_url = get_url_in_content( $content );
		}
		return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
	}
endif;

if ( ! function_exists( 'holycross_fonts_url' ) ) :

	function holycross_fonts_url( $fonts = array() ) {
		$fonts_url = '';
		$subsets   = 'latin,latin-ext';

		if( empty($fonts)) {
			if ( 'off' !== _x( 'on', 'Source Sans Pro font: on or off', 'holycross' ) ) {
				$fonts[] = 'Source Sans Pro:400,400i,600,600i,700,700i';
			}
	
			if ( 'off' !== _x( 'on', 'Poppins font: on or off', 'holycross' ) ) {
				$fonts[] = 'Poppins:400,500,600,700';
			}
			if ( 'off' !== _x( 'on', 'Crimson Text font: on or off', 'holycross' ) ) {
				$fonts[] = 'Crimson Text:400,400i,600,600i,700,700i';
			}
		}
		if ( $fonts ) {
			$fonts_url = add_query_arg( array(
				'family' => urlencode( implode( '|', $fonts ) ),
				'subset' => urlencode( $subsets ),
			), 'https://fonts.googleapis.com/css' );
		}

		return $fonts_url;
	}

endif;

if ( ! function_exists( 'holycross_return_memory_size' ) ) :

	function holycross_return_memory_size( $size ) {
		$symbol = substr( $size, -1 );
		$return = (int)$size;
		switch ( strtoupper( $symbol ) ) {
			case 'P':
				$return *= 1024;
			case 'T':
				$return *= 1024;
			case 'G':
				$return *= 1024;
			case 'M':
				$return *= 1024;
			case 'K':
				$return *= 1024;
		}
		return $return;
	}

endif;

if ( ! function_exists( 'holycross_check_extension' ) ) :

	function holycross_check_extension( $extension ) {

		if ( !defined( ('SLZ') ) )
			return false;


		return slz()->extensions->_get_db_active_extensions( $extension );

	}

endif;
if ( ! function_exists( 'holycross_check_article_layout' ) ) :

	function holycross_check_article_layout( $extension, $layout ) {

		if ( !defined( ('SLZ') ) )
			return false;
		$template = '';

		$db_template = slz_get_db_settings_option($layout, false);
		$theme_default = slz()->theme->manifest->get('post_template_default', array() );
		if( empty($db_template) && !empty($theme_default[$layout])) {
			$db_template = $theme_default[$layout];
		}
		if( $db_template && is_object( slz_ext($extension) ) ) {
			$template = slz_ext($extension)->get_article( $db_template );
		}

		return $template;
	}

endif;
if ( ! function_exists( 'holycross_check_post_layout' ) ) :

	function holycross_check_post_layout( $extension, $layout ) {

		if ( !defined( ('SLZ') ) )
			return false;
		$template = '';
		$post_template = slz_get_db_post_option( get_the_ID(), 'post-template' );
		if( $post_template && $post_template != 'default') {
			$db_template = $post_template;
		} else {
			$db_template = slz_get_db_settings_option($layout, false);
		}
		$theme_default = slz()->theme->manifest->get('post_template_default', array() );

		if( empty($db_template) && !empty($theme_default[$layout])) {
			$db_template = $theme_default[$layout];
		}

		if( $db_template && is_object( slz_ext($extension) ) ) {
			$template = slz_ext($extension)->get_post( $db_template );
		}

		return $template;
	}

endif;
if ( ! function_exists( 'holycross_show_help_link' ) ) :
	function holycross_show_help_link() {?>
		<div class="help-links">
		<?php
		$menu_location = 'page-404-nav' ;
		$locations = get_nav_menu_locations();
			if( isset($locations[$menu_location]) ):?>
				<h3 class="title"><?php esc_html_e('Helpful Links', 'holycross')?></h3>
				<div class="help-links-content row"><?php
					$nav_items = wp_get_nav_menu_items( $locations[$menu_location] );
					if( $nav_items ) {
						$item_columns = array_chunk($nav_items, ceil(count($nav_items) / 3));
						if( $item_columns ) {
							foreach( $item_columns as $columns ) {
								if( $columns ) {
									echo '<div class="col-md-4 col-sm-4">';
										echo '<ul class="list-useful list-unstyled">';
											foreach( $columns as $menu_item ){
												printf('<li><a class="link" href="%1$s">%2$s</a></li>', esc_url($menu_item->url), esc_html($menu_item->title) );
											}
										echo '</ul>';
									echo '</div>';
								}
							}
						}
					}?>
				</div><?php
			endif;
			?>
		</div>
	<?php }
endif;

if ( ! function_exists( 'holycross_is_post_type_archive' ) ) :
	function holycross_is_post_type_archive() {
		if( is_post_type_archive('slz-portfolio') || is_tax( 'slz-portfolio-cat' ) ) {
			return 'portfolio';
		} else if( is_post_type_archive('slz-service') || is_tax( 'slz-service-cat' ) ) {
			return 'service';
		} else if( is_post_type_archive('slz-team') || is_tax( 'slz-team-cat' ) ) {
			return 'team';
		} else if( is_post_type_archive('slz-event') || is_tax( 'slz-event-cat' ) ) {
			return 'event';
		} else if( is_post_type_archive('slz-gallery') || is_tax( 'slz-gallery-cat' )
				|| is_post_type_archive('slz-testi')   || is_tax( 'slz-testi-cat' ) ){
			return '99';
		}

		return false;
	}
endif;

// Breadcrumb
if ( ! function_exists( 'holycross_get_breadcrumb' ) ) :
	function holycross_get_breadcrumb()
	{
		if ( class_exists( 'WooCommerce' ) && get_post_type() == 'product' )
		{
			$breadcrumbs = new WC_Breadcrumb();
			$breadcrumbs->add_crumb( esc_html_x( 'Home', 'breadcrumb', 'holycross' ), apply_filters( 'woocommerce_breadcrumb_home_url', esc_url( home_url('/') ) ) );
		} else {
			$breadcrumbs = new Holycross_Breadcrumb();
			$breadcrumbs->add_crumb( esc_html_x( 'Home', 'breadcrumb', 'holycross' ), apply_filters( 'holycross_breadcrumb_home_url', esc_url( home_url('/') ) ) );
		}
		return $breadcrumbs->generate();
	}
endif;

/*--------------------Page Title << --------------------*/
if(! function_exists( 'holycross_show_slider_area' ) ) :
	function holycross_show_slider_area() {
		global $holycross_glb_options;
		$show_slider = false;
		$holycross_glb_options['show_pagetitle'] = 'disable';
		$holycross_glb_options['show_title'] = 'disable';
		if ( defined( 'SLZ' ) && function_exists('slz_extra_show_slider') ) {
			slz_extra_show_slider( $show_slider );
		}
		if( ! $show_slider ) {
			if( ! is_front_page() && ! is_home() ){
				holycross_show_page_title();
			}
		}
	}
endif;
if ( ! function_exists( 'holycross_get_title' ) ) :
	function holycross_get_title( $args = array() ){
		$def_args = array(
			'count_breadcrumb' => '',
		);
		$title = '';
		$args = array_merge( $def_args, $args );
		$is_custom_archive = false;
		$post_id = get_the_ID();
		$post_type = get_post_type();
		$is_shop_page = false;
		/////////////////
		if ( defined( 'SLZ' ) ) {
			list($post_id, $is_shop_page) = slz_extra_get_post_id();
			$post_type_arr = slz()->theme->get_config('active_posttype_ext');
			$post_type_arr['post'] = '';
			
			if( is_single() && isset($post_type_arr[$post_type]) ){
				$page_type = $post_type;
			}else{
				$page_type = 'general';
			}
			$theme_options = slz_get_db_settings_option();
			$page_options = slz_get_db_post_option( $post_id, 'pagetitle-options');
			$title_setting = array();
			if( isset($page_options['enable-page-option']) && $page_options['enable-page-option'] == 'enable'
					&& isset($page_options['enable']['group-pagetitle']['enable']['enable-pt-title']) && $page_options['enable']['group-pagetitle']['enable']['enable-pt-title'] == 'enable' ){
				if( !empty($page_options['enable']['group-pagetitle']['enable']['type-of-title']['title-type']) && $page_options['enable']['group-pagetitle']['enable']['type-of-title']['title-type']!='default'){
					$title_setting = $page_options['enable']['group-pagetitle']['enable']['type-of-title'];
				}
			}
			
			if( empty($title_setting) ) {
			    // Array to map extensions with template setting custom title
				$archive_map = array(
                    'slz-portfolio' => 'portfolio-ac-title',
                    'slz-event'     => 'event-ac-title',
                    'slz-team'      => 'team-ac-title',
                    'slz-service'   => 'service-ac-title',
                );
				if( isset($archive_map[$post_type]) && is_post_type_archive($post_type) ) {
					if( isset($theme_options[$archive_map[$post_type]]) ) {
						$title_setting = $theme_options[ $archive_map[$post_type] ];
						$is_custom_archive = true;
					}
				} else {
					if( isset($theme_options[$page_type.'-pagetitle']['enable']) && $group_pageheader = $theme_options[$page_type.'-pagetitle']['enable']){
						if( isset($group_pageheader['general-pagetitle-title']) && $setting_options = $group_pageheader[ 'general-pagetitle-title' ]){
							if( isset($setting_options['enable-pt-title']) && $setting_options['enable-pt-title'] == 'enable'
									&& isset($setting_options['enable']['type-of-title'])){
								$title_setting = $setting_options['enable']['type-of-title'];
							}
						}
					}


				}
			}
			if( !empty($title_setting) && isset($title_setting['title-type']) && isset($title_setting['custom']) ){
				if( $title_setting['title-type'] == 'custom' && !empty($title_setting['custom']['custom-title'])) {
					$title = $title_setting['custom']['custom-title'];
				} else if($title_setting['title-type'] == 'level') {
					if( is_single() ) {
						$taxonomy_name = 'category';
						if($post_type != 'post' && in_array($post_type,$post_type_arr)) {
							$taxonomy_name = $post_type . '-cat';
						}
						$categories = get_the_terms( $post_id, $taxonomy_name );
						if ( $categories && ! is_wp_error( $categories ) ) {
							$cat = current( $categories );
							$title = $cat->name;
						} else {
							$post_type_obj = get_post_type_object( $post_type );
							$title = $post_type_obj->labels->singular_name;
						}
					} elseif(is_post_type_archive($post_type)) {
						$post_type_obj = get_post_type_object( $post_type );
						$title = $post_type_obj->labels->singular_name;
					}
				}
			}
		} else {
			if( is_single() ) {
				$cat = current( get_the_category( $post_id ) );
				if( $cat ) {
					$title = $cat->name;
				}
			}
		}
		///////////////
		$output_title = '';
		if( empty($title)) {
			$title = get_the_title( $post_id );
		}
		if ( is_search() ) {
			$output_title = sprintf( esc_html__( 'Search results', 'holycross' ), get_search_query() );
		} elseif( is_archive() ) {
			if ( is_month() ) {
				$output_title = sprintf( '%s' , get_the_date( esc_html_x( 'F Y', 'monthly archives date format', 'holycross' ) ) );
			} elseif ( is_day() ) {
				$output_title = sprintf( '%s' , get_the_date( esc_html_x( 'F j, Y', 'daily archives date format', 'holycross' ) ) );
			} else{
				if( ! $is_custom_archive ) {
					$output_title = get_the_archive_title();
				}
				if( $is_shop_page ) {
					$output_title = $post_id ? $title : '';
					if ( ! $output_title ) {
						$product_post_type = get_post_type_object( 'product' );
						$output_title = $product_post_type->labels->singular_name;
					}
				}
				
			}
		} else if( is_404() ) {
			$output_title = esc_html__( 'Error 404', 'holycross' );
		}
		if( empty($output_title) ) {
			$output_title = esc_html($title);
		}
		return wp_kses_post( $output_title );
	}
endif;
if ( ! function_exists( 'holycross_show_title' ) ) :
	function holycross_show_title( $before = '', $after = '' ){
		global $holycross_glb_options;
		if( $holycross_glb_options['show_pagetitle'] != 'enable'
				&& $holycross_glb_options['show_title'] == 'enable' ) {
					$title = holycross_get_title();
					if( ! empty($title) ) {
						return $before . $title . $after;
					}
				}
	}
endif;
if ( ! function_exists( 'holycross_show_page_title' ) ) :
	function holycross_show_page_title() {
		global $holycross_glb_options;
		$subheader = $subheader_class = '';
		$post_id = get_the_ID();
		$is_shop_page = false;
		if ( defined( 'SLZ' ) ) {
			list($post_id, $is_shop_page) = slz_extra_get_post_id();
			$post_type_arr = slz()->theme->get_config('active_posttype_ext');
			$post_type_arr['post'] = '';
			$post_type = get_post_type();
			if( is_single() && isset($post_type_arr[$post_type]) ){
				$post_type = get_post_type();
			}else{
				$post_type = 'general';
			}
			$options = slz_get_db_post_option( $post_id, 'pagetitle-options', '' );

			// page title
			$pagetitle_options = slz_get_db_settings_option( $post_type.'-pagetitle', '');
			$show_pagetitle = SLZ_Com::merge_options('pagetitle-options','enable/group-pagetitle/enable-page-title',slz_akg('enable-page-title', $pagetitle_options, '' ));
			// title
			$pt_title_options = slz_akg( 'enable/general-pagetitle-title', $pagetitle_options, '');
			$show_title = SLZ_Com::merge_options('pagetitle-options','enable/group-pagetitle/enable/enable-pt-title',slz_akg('enable-pt-title',$pt_title_options, '' ));

			// breadcrumb
			$pt_bc_options = slz_akg( 'enable/general-pagetitle-bc', $pagetitle_options, '');
			$show_bc  = SLZ_Com::merge_options('pagetitle-options','enable/group-pagetitle/enable/enable-pt-breadcrumb',slz_akg('enable-pt-breadcrumb', $pt_bc_options, '' ));

			$header = slz_get_db_settings_option('slz-header-style-group/slz-header-style', '');
			$subheader = slz_get_db_settings_option('slz-header-style-group/'.$header.'/enable-subheader/enable', '');
			//subheader class
			if( $subheader == 'show' ){
				$subheader_class = "header-absolute";
			}
		}else{
			$show_pagetitle = 'enable';
			$show_title = 'enable';
			$show_bc = 'enable';
		}
		if( $show_pagetitle != 'enable') {
			$show_title = '';
			$show_bc = '';
		}
		$holycross_glb_options['show_pagetitle'] = $show_pagetitle;
		$holycross_glb_options['show_title'] = $show_title;

		if($show_pagetitle != 'enable'){
			return;
		}
		$breadcrumb = holycross_get_breadcrumb();
		$count_breadcrumb = count($breadcrumb);

		?>
			<div class="slz-title-command page-title-area <?php echo esc_attr($subheader_class);?>">
				<div class="container">
					<div class="title-command-wrapper">
						<?php

						if( $show_title == 'enable' ){
							$args = array(
								'count_breadcrumb' => $count_breadcrumb,
							);
							echo '<h1 class="title">';
								echo holycross_get_title( $args );
							echo '</h1>';
						}

						if( $show_bc == 'enable' ){
							$breadcrumb_html = '';
							if ( $breadcrumb ) {

								foreach ( $breadcrumb as $key => $crumb ) {
									if ( ! empty( $crumb[1] ) && sizeof( $breadcrumb ) !== $key + 1 ) {
										$breadcrumb_html .= '<li class="breadcrumb-item"><a class="breadcrumb-link" href="' . esc_url( $crumb[1] ) . '">' . esc_html( $crumb[0] ) . '</a></li>';
									} else {
										if( ! empty( $crumb[0] ) ) {
											$breadcrumb_html .= '<li class="breadcrumb-item"><a class="breadcrumb-active">' . esc_html( $crumb[0] ) . '</a></li>';
										}
									}
								}
							}?>
							<div class="breadcrumb-wrapper">
								<?php printf('<ol class="breadcrumb">%s</ol>', $breadcrumb_html );?>
							</div>
						<?php }?>

					</div>
				</div>
			</div>
		<?php }
	endif;

/*--------------------Comment << --------------------*/
/*move field of comment form*/
if ( ! function_exists( 'holycross_move_comment_field' ) ) :
	function holycross_move_comment_field( $fields ) {
		$comment_field = $fields['comment'];
		unset( $fields['comment'] );
		$fields['comment'] = $comment_field;
		return $fields;
	}
	add_filter( 'comment_form_fields', 'holycross_move_comment_field' );
endif;
// Comment Form
if(! function_exists( 'holycross_comment_form' ) ) :
	function holycross_comment_form() {
		$commenter = wp_get_current_commenter();
		$req       = get_option( 'require_name_email' );
		$aria_req  = ( $req ? " aria-required='true'" : '' );
		$html_req  = ( $req ? " required='required'" : '' );
		$format    = 'xhtml';//The comment form format. Default 'xhtml'. Accepts 'xhtml', 'html5'.
		$html5     = 'html5' === $format;
		$author_field = sprintf(
				'<div class="comment-form-author">
						<label for="author">%4$s<span class="required">*</span></label>
						<input id="author" placeholder="%4$s" name="author" type="text" value="%1$s" %2$s>
						<div id="author-err-required" class="input-error-msg hide">%3$s</div>
					</div>',
				esc_attr( $commenter['comment_author'] ),//value
				$aria_req . $html_req,
				esc_html__( 'Please enter your name.', 'holycross' ),//error message
				esc_html__('Your Name', 'holycross')

		);
		$email_field = sprintf(
				'<div class="comment-form-email">
						<label for="email">%6$s<span class="required">*</span></label>
						<input  id="email" name="email" %5$s value="%1$s" size="30" %2$s placeholder="%6$s" />
						<div class="input-error-msg hide" id="email-err-required">%3$s</div>
						<div class="input-error-msg hide" id="email-err-valid">%4$s</div>
					</div>',
				esc_attr( $commenter['comment_author_email'] ),//value
				$aria_req . $html_req,
				esc_html__( 'Please enter your email address.', 'holycross' ),//error message
				esc_html__( 'Please enter a valid email address.', 'holycross' ),//error message
				( $html5 ? 'type="email"' : 'type="text"' ),
				esc_html__('Email Address', 'holycross')

		);

		$comment_field = sprintf(
				'<div class="comment-form-comment">
						<label for="email">%2$s<span class="required">*</span></label>
						<textarea id="comment" name="comment" required="required" placeholder="%2$s"></textarea>
						<div class="input-error-msg hide" id="comment-err-required">%1$s</div>
					</div>',
				esc_html__( 'Please enter comment.', 'holycross' ),//error message
				esc_html__('Your Comment ', 'holycross')
		);

		$url_field = sprintf(
				'<div class="comment-form-url">
						<label for="url">%3$s</label>
						<input id="url" name="url" value="%1$s" %2$s placeholder="%3$s">
					</div>',
				esc_attr( $commenter['comment_author_url'] ),//value
				(  $html5 ? 'type="url"' : 'type="text"' ),
				esc_html__('Your Website', 'holycross')
		);

		$comments_args = array(
			'cancel_reply_link'   => esc_html__( 'Cancel', 'holycross' ),
			'comment_notes_before'=> '',
			'format'              => $format,
			'fields'              => array( 'author' => $author_field, 'email' => $email_field,'url' => $url_field),
			'logged_in_as'        => '',
			'class_form'          => 'comment-form',
			'id_form'             => 'commentform',
			'comment_field'       => $comment_field,
			'label_submit'        => esc_html__( 'Submit Comment ', 'holycross' ),
			'title_reply_before'  => '<h3 class="title">',
			'title_reply_after'   => '</h3>',
			'title_reply'         => esc_html__( 'Leave your comment', 'holycross' ),
			'submit_button'       => '<div class="form-submit"><input name="%1$s" id="%2$s" type="submit" value="%4$s" class="%3$s submit "></div>',
			'submit_field'        => '%1$s%2$s',
		);
		return $comments_args;
	}
endif;
// 404 page
if(! function_exists( 'holycross_404_page' ) ) :
	function holycross_404_page() {
		$options = array(
			'title'            => esc_html__( 'Page Not Found', 'holycross' ),
			'description'      => '',
			'home_text'        => esc_html__( 'Back To Home', 'holycross' ),
			'button_text'      => esc_html__( 'Need Help', 'holycross' ),
			'bg_text'          => esc_html__( '404', 'holycross' ),
			'button_link'      => '',
			'404-illustration' => '',
		);
		if ( defined( 'SLZ' ) ) {
			$map = array(
				'title'            => '404-title',
				'home_text'        => '404-btn-text',
				'button_text'      => '404-btn-02-text',
				'description'      => '404-description',
				'404-illustration' => '404-illustration',
			);
			$settings = slz_get_db_settings_option();
			if( isset($settings['404-title'])){
				$options['title'] = $settings['404-title'];
			}
			foreach( $map as $key => $val ) {
				if( !empty($settings[$val]) ){
					$options[$key] = $settings[$val];
				}
			}
			if( !empty($settings['404-btn-02-link']) ){
				$options['button_link'] =  $settings['404-btn-02-link'];
			}
		}
		return $options;
	}
endif;

/**
 * Custom callback function, see comments.php
 *
 */
 if ( ! function_exists( 'holycross_display_comments' ) ) :
	function holycross_display_comments( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		$comment_id = get_comment_ID();
		$rate = '';

		$queried_object = get_queried_object();
		$post_type = $queried_object->post_type;
		if( defined( 'SLZ' ) ) {
			$post_type_arr = slz()->theme->get_config('posts_rating');
			if( isset($post_type_arr[$post_type]) ){

				$rating = get_comment_meta( $comment_id, $post_type_arr[$post_type], true);

				if($rating){
					if ( $rating == 1 ) {
						$class_rate = 'width-20';
					}elseif ( $rating == 2 ) {
						$class_rate = 'width-40';
					}elseif ( $rating == 3 ) {
						$class_rate = 'width-60';
					}elseif ( $rating == 4 ) {
						$class_rate = 'width-80';
					}elseif ( $rating == 5 ) {
						$class_rate = 'width-100';
					}

					$rate = sprintf('<div class="ratings">
				                <div class="star-rating">
				                    <span class="%1$s">
				                        <strong class="rating">%2$s.00 out of 5</strong>
				                    </span>
				                </div>
				            </div>', esc_attr($class_rate), esc_html( $rating ) );
				}
			}
		}

		$comment_reply_link_args = array(
			'depth'  => $depth,
			'before' => '<div class="comment-feedback-wrapper">'.($rate).'<span class="action-type">',
			'after'  => '</span></div>'
		);
		?>

		<li id="li-comment-<?php echo esc_attr($comment_id) ?>" class="comment">
			<div id="div-comment-<?php echo esc_attr($comment_id) ?>" class="comment-body">
				<div class="media-left author-photo-wrapper">
					<a href="<?php esc_url ( get_comment_author_url( $comment ) ); ?>" class="author-photo">
						<?php echo get_avatar($comment, 50, '', esc_html__('User Avatar', 'holycross'), array('class' => array('media-object') ) ); ?>
					</a>
				</div>
				<div class="media-body body-not-hidden">
					<div class="heading-wrapper">
						<div class="comment-info-wrapper">
							<div class="author-name"><?php echo get_comment_author_link(); ?></div>
							<ul class="info">
								<li>
									<a href="<?php esc_url ( get_comment_author_url( $comment ) ); ?>" class="link date">
										<?php echo get_comment_date(); ?>
									</a>
								</li>
								<li>
									<a href="<?php esc_url ( get_comment_author_url( $comment ) ); ?>" class="link">
										<?php echo get_comment_time(); ?>
									</a>
								</li>
							</ul>
						</div>
					<div class="clearfix"></div>
					</div>
					<div class="comment-content">
						<?php comment_text() ?>
					</div>
					<?php echo comment_reply_link( array_merge ( $args, $comment_reply_link_args ) ); ?>
					<div class="clearfix"></div>
				</div>
			</div>
		<?php
	}
endif;
if ( ! function_exists( 'holycross_setting_woocommerce' ) ) :
	function holycross_setting_woocommerce( $output_html = false ){
		if( defined( 'SLZ' ) ) {
			$settings = slz_get_db_settings_option();
			$args = array(
				'posts_per_page' => 4,
				'columns'        => 4
			);
			if( isset($settings['product-related-post']['status']) && $settings['product-related-post']['status'] == 'show' ) { //status
				if( isset($settings['product-related-post']['show']['limit']) ) {
					$args['posts_per_page'] = $settings['product-related-post']['show']['limit'];
				}
				if( isset($settings['product-related-post']['show']['column']) ) {
					$args['columns'] = absint($settings['product-related-post']['show']['column']);
				}
			}
			if( $output_html ){
				echo '<div class="slz-woocommerce-setting" data-show="'.esc_attr($args['columns']).'"></div>';
			}
			return $args;
		}
	}
endif;
if ( ! function_exists( 'holycross_menu_style' ) ) :
	function holycross_menu_style() {
		if ( defined( ('SLZ') ) ) {
			$menu_style = slz_get_db_settings_option( 'menu-style', '' );
			if( !empty($menu_style) && $menu_style == 'holycross' ) {
				echo ' holycross-menu';
			}
			$header_style = slz_get_header_transparent(slz_get_db_settings_option('slz-header-style-group/slz-header-style',''));
			if( in_array( 'header-transparent', $header_style) ){
				echo ' has-header-transpanrent';
			}
		}
	}

endif;

if(! function_exists( 'holycross_get_footer_banner' ) ) :
    function holycross_get_footer_banner() {
        if ( defined( 'SLZ' )) {
            //theme option
            $options = slz_get_db_settings_option('footer-banner');
            $subcribe_page = slz_get_db_post_option( get_the_ID(), 'subcribe', array());

            $enable_custom_page = 'hidden';
             if (slz_akg('enable-subcribe', $subcribe_page, '') == 'default' || slz_akg('custom/enable-footer-banner', $subcribe_page, '') == 'show') {
                $enable_custom_page = 'show';
            }
            $enable_show_banner_footer = slz_akg('enable-footer-banner', $options, '');
            $custom_css = '';
            $format_css = '.slz-footer-quote{
                              %1$s
                          }
                          .slz-footer-quote .quote{
                                %2$s
                          }
                        ';
            if ($enable_custom_page == 'show' && $enable_show_banner_footer == 'show') {
                $banner_content = slz_akg('banner_content', $options['show'], '');
                $styling_footer = '';
                $styling_quote = '';
                if (isset($options['show']['styling']) && is_array($options['show']['styling'])) {
                    $styling = $options['show']['styling'];
                    if (isset($styling['block-bg-color']) && !empty($styling['block-bg-color'])) {
                        $styling_footer .= 'background-color:'.esc_attr($styling['block-bg-color'], 'holycross').';';
                    }
                    if (isset($styling['bg-image']['data']['icon']) && !empty($styling['bg-image']['data']['icon'])) {
                        $styling_footer .= 'background-image:url('.esc_attr($styling['bg-image']['data']['icon'], 'holycross').');';
                    }
                    if (isset($styling['text-color-content']['color']) && !empty($styling['text-color-content']['color'])) {
                        $styling_quote .= 'color:'.esc_attr($styling['text-color-content']['color'], 'holycross').';';
                    }
                }
            }

            if ($enable_custom_page == 'show' && $enable_show_banner_footer == 'show') {
                printf('<div class="slz-footer-quote">
                          <div class="container">
                            <div class="quote">%1$s</div>
                          </div>
                        </div>',
                    wp_kses_post($banner_content)
                );
                $custom_css = sprintf($format_css, $styling_footer, $styling_quote);
                do_action( 'slz_add_inline_style', $custom_css);
            }

        }
    }
endif;

if( !function_exists( 'holycross_get_form_shortcode_donation_pay' ) ):
    function holycross_get_form_shortcode_donation_pay($uniq_id) {
		if ( ! defined( 'SLZ' ))  return;
        $data_price_paypal = (array)slz()->theme->get_config('price_paypal');
        $format_price_paypal = '<div class="donate-item">
                            <input type="radio" name="%1$s" value="%2$s" />
                            <span class="label-check slz-btn">%3$s</span>
                        </div>';
        $html_price_paypal = '';
        $num_limit_show_price_paypal = 4;
        foreach ($data_price_paypal as $index=>$value) {
            $html_price_paypal .= sprintf($format_price_paypal, 'valueDonation', $value, slz_get_currency_format_options($value));
            if ($index == $num_limit_show_price_paypal-1) {
                break;
            }
        }
        return '
			<div id="donate-modal-'. esc_attr( $uniq_id ) .'" tabindex="-1" role="dialog" class="modal fade">
				<div role="document" class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" data-dismiss="modal" aria-label="Close" class="close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title">'. esc_html__( 'Events Donation', 'holycross' ) .'</h4>
						</div>
						<div class="slz-event-donate-submit slz-form-event-donate">
							<div class="modal-body">
								<div class="form-group">
								    <span class="gdlr-head">How much would you like to donate?</span>
									<div class="donation-button-segment-group slz-form-donate">
										<div class="radio">
											'.$html_price_paypal.'
											<div class="donate-item">
												<input type="radio" class="donation-other-price" name="valueDonation" value="100" />
												<div class="label-check another-donation">
													<span class="currencies">'. slz_get_db_settings_option( 'currency-money-format', '$' ) .'</span>
													<input class="form-control" type="text" maxlength="12" name="anotherAmount" />
												</div>
											</div>
										</div>
										<input type="text" name="slz_event_post_id" value="" class="slz_event_post_id" hidden />
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="slz-btn btn-block-donate slz_money_donate_btn">'. esc_html__( 'Donate now', 'holycross' ) .'</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		';
    }
endif;