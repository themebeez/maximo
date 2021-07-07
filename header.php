<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Maximo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php maximo_get_active_theme_skin_data_attr(); ?>>
	<?php 
	if( function_exists( 'wp_body_open' ) ) { 

		wp_body_open(); 
	} 
	?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'maximo' ); ?></a>

		<?php do_action( 'maximo_header' ); ?>

		<?php

		/**
		* Hook - maximo_page_header.
		*
		* @hooked maximo_page_header_template - 10
		*/
		do_action( 'maximo_page_header' );

		if ( maximo_is_breadcrumbs_in_separate_container() ) {
			
			/**
			* Hook - maximo_breadcrumbs.
			*
			* @hooked maximo_breadcrumbs_template - 10
			*/
			do_action( 'maximo_breadcrumbs' );
		}

		/**
		* Hook - maximo_banner.
		*
		* @hooked maximo_banner_template - 10
		*/
		do_action( 'maximo_banner' );
		?>

		<div id="content" class="site-content">