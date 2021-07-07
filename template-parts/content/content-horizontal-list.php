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
		<div class="maximo-row maximo-align-items-center maximo-justify-content-between">
			<?php if ( $args['display_post_thumbnail'] && has_post_thumbnail() ) { ?>
				<div class="maximo-col maximo-post-thumbnail-col">
					<div class="maximo-post-element maximo-post-element-thumbnail">
						<?php do_action( 'maximo_post_thumbnail' ); ?>
					</div>
				</div>
			<?php } ?>
			<div class="maximo-col maximo-post-content-col">
				<?php
				if ( $args['post_content_elements'] ) {
					foreach ( $args['post_content_elements'] as $post_element ) {
						switch ( $post_element ) {
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
			</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
<?php do_action( 'maximo_after_loop_article' ); ?>