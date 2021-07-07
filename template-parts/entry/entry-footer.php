<?php
/**
 * Template part for displaying post tag meta and updated date.
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
<div class="maximo-entry-footer">
	<div class="maximo-row maximo-align-items-start maximo-justify-content-between">
		<div class="maximo-col-md">
			<?php 
			if ( maximo_is_post_content_element_enabled( 'tags' ) ) { 

				$tags_list = get_the_tag_list();

				if ( $tags_list ) {
					?>	
					<div class="maximo-entry-post-tags">
						<?php echo wp_kses_post( $tags_list ); // phpcs:ignore. ?>
					</div><!-- .post-tags -->
					<?php
				}
			}
			?>
		</div>
		<div class="maximo-col-md-auto">
			<?php
			if ( maximo_is_post_content_element_enabled( 'updated_date' ) ) {
				?>
				<span class="maximo-entry-updated-date">
					<?php
					/* translators: %s: post modified date */ 
					printf( __( 'Last Updated On: %s', 'maximo' ), esc_html( get_the_modified_date() ) );
					?>
						
					</span>
				<?php
			}
			?>
		</div>
	</div>
</div>