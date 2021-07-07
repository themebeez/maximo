<?php
/**
 * Template Name: Maximo Fullwidth
 *
 * 100% wide page template without vertical spacing.
 *
 * @package     Maximo
 * @author      Themebeez <themebeez@gmail.com>
 * @since       1.0.0
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content/content', 'maximo-fullwidth' );
	endwhile;
endif;
get_footer();
