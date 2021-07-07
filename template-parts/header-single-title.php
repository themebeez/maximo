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

if ( have_posts() ) :

	while ( have_posts() ) :

		the_post();

		do_action( 'maximo_post_structure_categories' );
		?>
		<h1 class="maximo-page-title"><?php the_title(); ?></h1>
		<?php
		do_action( 'maximo_post_meta' );
		
	endwhile;
endif;