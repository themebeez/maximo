<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
				if( have_posts() ) :				
					/* Start the Loop */
					while ( have_posts() ) :

						the_post();
						/**
					    * Hook - maximo_loop_content.
					    *
					    * @hooked maximo_loop_content_template - 10
					    */
					    do_action( 'maximo_loop_content' );
					    
					endwhile;
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
				?>
			</main><!-- #main -->
			<?php
			if( have_posts() ) :
				/**
			    * Hook - maximo_pagination.
			    *
			    * @hooked maximo_pagination_template - 10
			    */
			    do_action( 'maximo_pagination' );  
			endif;
		    ?>
			<?php do_action( 'maximo_after_content' ); ?>
		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	</div>
</div>
<?php    
get_footer();
