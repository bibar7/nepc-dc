<?php
/**
 * The template for displaying the blog detail content
 *
 * @package WordPress
 * @subpackage HolyCross
 * @since 1.0
 */

get_header(); ?>

<div class="slz-main-content">

	<div class="container padding-top-100 padding-bottom-100">

		<?php
			if( $holycross_template = holycross_check_post_layout('posts', 'blog-layout')){
				$holycross_template->render();
			}
			else
				get_template_part('default-templates/single');

		?>

	</div>

</div>

<?php get_footer(); ?>
