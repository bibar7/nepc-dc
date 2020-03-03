<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$holycross_container = holycross_get_container_class( );

get_header( 'shop' ); ?>
<div class="slz-main-content padding-top-100 padding-bottom-100">
	<div class="container">
		<div class="slz-blog-detail <?php echo esc_attr( $holycross_container['sidebar_layout_class'] ); ?>">
			<div class="row slz-woocommerce">
				<div id="page-content" class="<?php echo esc_attr( $holycross_container['content_class'] ); ?> slz-content-column">
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
						<?php
                            /**
                             * Hook: woocommerce_before_main_content.
                             *
                             * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                             * @hooked woocommerce_breadcrumb - 20
                             * @hooked WC_Structured_Data::generate_website_data() - 30
                             */
                            do_action( 'woocommerce_before_main_content' );

								/**
								 * woocommerce_archive_description hook.
								 *
								 * @hooked woocommerce_taxonomy_archive_description - 10
								 * @hooked woocommerce_product_archive_description - 10
								 */
								do_action( 'woocommerce_archive_description' );
							?>
					
							<?php if ( have_posts() ) : ?>
					
								<?php
									/**
									 * woocommerce_before_shop_loop hook.
									 *
									 * @hooked woocommerce_result_count - 20
									 * @hooked woocommerce_catalog_ordering - 30
									 */
									do_action( 'woocommerce_before_shop_loop' );
								?>
					
								<?php woocommerce_product_loop_start();


								if ( wc_get_loop_prop( 'total' ) ) {
								while ( have_posts() ) {
									the_post();

									/**
									 * Hook: woocommerce_shop_loop.
									 *
									 * @hooked WC_Structured_Data::generate_product_data() - 10
									 */
									do_action( 'woocommerce_shop_loop' );

									wc_get_template_part( 'content', 'product' );
								}
							}

							woocommerce_product_loop_end();

							/**
							 * Hook: woocommerce_after_shop_loop.
							 *
							 * @hooked woocommerce_pagination - 10
							 */
							do_action( 'woocommerce_after_shop_loop' );


							?>
					
							<?php else:


							/**
							 * Hook: woocommerce_no_products_found.
							 *
							 * @hooked wc_no_products_found - 10
							 */
							do_action( 'woocommerce_no_products_found' );

							 endif; ?>
					
						<?php
							/**
							 * woocommerce_after_main_content hook.
							 *
							 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
							 */
							do_action( 'woocommerce_after_main_content' );
						?>
					</div>
				</div>
				<?php if( $holycross_container['show_sidebar'] ):?>
				<div id='page-sidebar' class="slz-sidebar-column  slz-widgets sidebar-widget <?php echo esc_attr( $holycross_container['sidebar_class'] ); ?>">
					<?php holycross_get_sidebar($holycross_container['sidebar']);?>
				</div>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>
<?php get_footer( 'shop' ); ?>