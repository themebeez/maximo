<?php
/**
 * Template part for displaying posts navigation.
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

if ( empty( get_next_post() ) && empty( get_previous_post() ) ) {
	return;
}
?>
<?php do_action( 'maximo_before_posts_navigation' ); ?>
<section class="maximo-posts-navigation" role="navigation">
	<div class="maximo-posts-navigation-inner">
		<div class="maximo-row">
			<?php
			// Previous post link.
			previous_post_link(
				'<div class="maximo-col-md"><div class="nav-previous"><h6 class="nav-title">' . esc_html( $args['prev_post_link_title'] ) . '</h6>%link</div></div>',
				sprintf(
					'<div class="nav-content">%1$s <span>%2$s</span></div>',
					get_the_post_thumbnail( get_previous_post(), array( 75, 75 ) ),
					'%title'
				)
			);

			// Next post link.
			next_post_link(
				'<div class="maximo-col-md"><div class="nav-next"><h6 class="nav-title">' . esc_html( $args['next_post_link_title'] ) . '</h6>%link</div></div>',
				sprintf(
					'<div class="nav-content"><span>%2$s</span> %1$s</div>',
					get_the_post_thumbnail( get_next_post(), array( 75, 75 ) ),
					'%title'
				)
			);
			?>
		</div>
	</div>
</section>
<?php do_action( 'maximo_after_posts_navigation' ); ?>