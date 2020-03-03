<?php
/**
 * The template for displaying the header
 *
 * @package WordPress
 * @subpackage HolyCross
 * @since 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif;?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page" class="body-wrapper <?php holycross_menu_style(); ?>">

		<!-- WRAPPER CONTENT-->
		<div class="slz-wrapper-content">

			<?php 

				if ( holycross_check_extension('headers') ) {

					if ( is_page( ) ) {

						$holycross_selected_header = slz_get_db_post_option( get_the_ID(), 'page-header-style' );

						if ( $holycross_selected_header == 'default' )
							unset ( $holycross_selected_header );

					}

					if ( empty ( $holycross_selected_header ) && slz_get_db_settings_option('slz-header-style-group/slz-header-style', false) ){

						$holycross_selected_header = slz_get_db_settings_option('slz-header-style-group/slz-header-style', '');

					}

					SLZ_Live_Setting::get_header_style($holycross_selected_header);
					if ( !empty ( $holycross_selected_header ) ) {

						$holycross_header = slz_ext('headers')->get_header( $holycross_selected_header );

						if ( !empty ( $holycross_header ) ) {
							$holycross_header->render();
						}

					}

				}
				else
					get_template_part('default-templates/header');
				?>

				<!-- show slider and page title-->
				<?php holycross_show_slider_area();?>
				<?php holycross_setting_woocommerce(true);?>