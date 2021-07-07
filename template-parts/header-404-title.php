<?php
/**
 * Template part for displaying 404 title.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Maximo
 * @author  Themebeez <themebeez@gmail.com>
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
	
if ( $args['tag'] == 'h1' ) {
	?>
	<h1 class="maximo-page-title">
	<?php
}

echo wp_kses_post( $args['title'] );

if ( $args['tag'] == 'h1' ) {
	?>
	</h1>
	<?php
}