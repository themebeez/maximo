<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Maximo
 */

if ( ! function_exists( 'maximo_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function maximo_post_thumbnail() {

		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {

			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<figure>
					<?php 
					the_post_thumbnail(); 

					$thumbnail_attachment_caption = wp_get_attachment_caption( get_post_thumbnail_id( get_the_ID() ) );

					if ( $thumbnail_attachment_caption ) {
						?>
						<figcaption><?php echo wp_kses_post( $thumbnail_attachment_caption ); ?></figcaption>
						<?php
					}
					?>
				</figure>
			</div><!-- .post-thumbnail -->

			<?php 
		else : 

			$selected_size = maximo_get_option( 'archive_post_thumbnail_size' );

			$thumbnail_size = maximo_get_thumbnail_size_array( 'post-thumbnail', $selected_size );
			?>
			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<figure>
					<?php
					the_post_thumbnail( 
						array(450,800), 
						array(
							'alt' => the_title_attribute(
								array(
									'echo' => false,
								)
							),
						) 
					);

					do_action( 'maximo_post_format_icon' );
					?>
				</figure>
			</a>
			<?php
		endif; // End is_singular().
	}
endif;