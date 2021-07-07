<?php
/**
 * Template part for displaying theme pagination.
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

if ( $args['type'] === 'default' ) {

	if ( get_previous_posts_link() || get_next_posts_link() ) {
		?>
		<div class="maximo-site-navigation">
			<?php
			if ( get_previous_posts_link() ) {
				?>
				<div class="maximo-nav-previous">
					<?php previous_posts_link( isset( $args['prev_btn_label'] ) ? esc_html( $args['prev_btn_label'] ) : __( 'Newer Posts', 'maximo' ) ); ?>
				</div>
				<?php
			}

			if ( get_next_posts_link() ) {
				?>
				<div class="maximo-nav-next">
					<?php next_posts_link( isset( $args['next_btn_label'] ) ? esc_html( $args['next_btn_label'] ) : __( 'Older Posts', 'maximo' ) ); ?>
				</div>
				<?php
			}
			?>
		</div>
		<?php
	}
} else {
	?>
	<div class="maximo-site-pagination">
		<?php
		the_posts_pagination( 
			array(
				'prev_text' => '<i class="icon-arrow-left" aria-hidden="true"></i>',
				'next_text' => '<i class="icon-arrow-right" aria-hidden="true"></i>',
				'mid_size' => isset( $args['mid_size'] ) ? absint( $args['mid_size'] ) : 2,
			) 
		);
		?>
	</div>
	<?php
}