<?php
/**
 * Template part for displaying post content.
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
?>
<?php do_action( 'maximo_before_article' ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( ! maximo_is_page_header_activated() ) {

		do_action( 'maximo_post_structure_categories' );
		?>
		<h1 class="maximo-page-title"><?php the_title(); ?></h1>
		<?php
		do_action( 'maximo_post_meta' );
	}

	if ( ! maximo_is_page_header_activated() || ! maximo_is_page_header_background_image_active() ) {

		do_action( 'maximo_post_thumbnail' );
	}
	?>
	<div class="maximo-entry-content">
		<?php 
		the_content(); 

		wp_link_pages( array(
			'before' => '<div class="page-links">',
			'after'  => '</div>',
		) );

		if ( get_edit_post_link() ) :

			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( '<i class="icon-note"></i> Edit <span class="screen-reader-text">%s</span>', 'maximo' ),
						array(
							'span' => array(
								'class' => array(),
							),
							'i' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		endif;
		?>
	</div>
	<?php do_action( 'maximo_post_footer' ); ?>
</article>
<?php do_action( 'maximo_after_article' ); ?>
