<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

					do_action( 'maximo_content_single' );

					do_action( 'maximo_post_author_box' );

					do_action( 'maximo_posts_navigation' );

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
