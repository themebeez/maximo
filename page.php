<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maximo
 */

get_header();
?>
<div class="maximo-container">
	<div class="maximo-row maximo-container-inner">
		<div id="maximo-primary" class="maximo-content-area">
			<?php do_action( 'maximo_before_content' ); ?>
			<main id="maximo-main" class="maximo-site-main">
				<?php
				while ( have_posts() ) :

					the_post();

					get_template_part( 'template-parts/content/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :						
						do_action( 'maximo_post_comments_box' );
					endif;
				endwhile; // End of the loop.
				?>
			</main><!-- #main -->
			<?php do_action( 'maximo_after_content' ); ?>
		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	</div>
</div>
<?php    
get_footer();