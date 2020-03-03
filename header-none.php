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
	<meta name="viewport" content="width=device-width">
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
