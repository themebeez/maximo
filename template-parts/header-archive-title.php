<?php
/**
 * Template part for displaying archive title.
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
} else {
	?>
	<h2 class="maximo-page-title">
	<?php
}

echo wp_kses_post( $args['title'] );

if ( $args['tag'] == 'h1' ) {
	?>
	</h1>
	<?php
} else {
	?>
	</h2>
	<?php
}

if ( $args['description'] ) {
	?>
	<div class="maximo-archive-description"><?php echo wp_kses_post( $args['description'] ); ?></div>
	<?php
}