<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage HolyCross
 * @since 1.0
 */

get_header();
$holycross_container = holycross_get_container_class( 'search-article-style' );
?>

	<div class="slz-main-content">

		<?php echo holycross_show_title( '<div class="archive-header"><div class="container"><h1 class="title">', '</h1></div></div>' ); ?>

		<div class="container">

			<div class="slz-blog-detail <?php echo esc_attr( $holycross_container['sidebar_layout_class'] ); ?> margin-top-100 margin-bottom-100">

				<div class="row">

					<div id="page-content" class="<?php echo esc_attr( $holycross_container['content_class'] ); ?> slz-content-column">

						<?php if ( have_posts() ) : ?>

							<div class="slz-list-block <?php echo esc_attr( $holycross_container['block_class'] ); ?>">

								<?php

									if ( $holycross_template = holycross_check_article_layout('articles', 'search-article-style') ) {

										while ( have_posts() ) : the_post();

											$holycross_template->render( $post );

										endwhile;

									} else{

										while ( have_posts() ) : the_post();

											get_template_part( 'default-templates/article' );

										endwhile;

									}

								?>

							</div>

							<?php holycross_posts_pagination();?>

						<?php

						else :
							get_template_part( 'default-templates/no-content' );

						endif;
						?>
						
					</div>

					<?php if( $holycross_container['show_sidebar']):?>

						<div id="page-sidebar" class="<?php echo esc_attr($holycross_container['sidebar_class'])?> slz-sidebar-column slz-widgets">

							<?php holycross_get_sidebar($holycross_container['sidebar']);?>

						</div>

					<?php endif; ?>

					<div class="clearfix"></div>

				</div>

			</div>

		</div>

	</div>

<?php get_footer(); ?>
