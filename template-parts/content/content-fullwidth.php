<?php
/**
 * Template part for displaying posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maximo
 * @author  Themebeez <themebeez@gmail.com>
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php do_action( 'maximo_before_loop_article' ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-article-inner">
		<?php
		if ( $args['post_content_elements'] ) {
			foreach ( $args['post_content_elements'] as $post_element ) {
				switch ( $post_element ) {
					case 'image' :
						if ( has_post_thumbnail() && $args['display_post_thumbnail'] ) {
							echo '<div class="maximo-post-element maximo-post-element-thumbnail">';
							do_action( 'maximo_post_thumbnail' );
							echo '</div>';
						}
						break;
					case 'category' :
						echo '<div class="maximo-post-element maximo-post-element-category">';
						do_action( 'maximo_post_structure_categories' );
						echo '</div>';
						break;
					case 'title' :
						echo '<div class="maximo-post-element maximo-post-element-title">';
						do_action( 'maximo_post_title' );
						echo '</div>';
						break;
					case 'meta' :
						echo '<div class="maximo-post-element maximo-post-element-meta">';
						do_action( 'maximo_post_meta' );
						echo '</div>';
						break;
					default :
						echo '<div class="maximo-post-element maximo-post-element-excerpt">';
						do_action( 'maximo_post_excerpt' );
						echo '</div>';
				}
			}
		}
		?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
<?php do_action( 'maximo_after_loop_article' ); ?>