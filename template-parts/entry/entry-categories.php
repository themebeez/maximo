<?php
/**
 * Template part for displaying post categories meta.
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

if ( 'post' === get_post_type() ) {

	$maximo_categories = '';

	if ( $args['sep'] ) {
		$maximo_categories = get_the_category_list( $args['sep'] );
	} else {
		$maximo_categories = get_the_category_list();
	}	

	if ( $maximo_categories ) {
		?>
		<div class="maximo-post-meta-entry maximo-post-cat-entries">
			<?php if ( $args['display_icon'] ) { ?>
				<span class="maximo-post-meta-icon maximo-post-category-meta-icon"><i class="fi fi-archive"></i></span>
			<?php } ?>
			<?php echo wp_kses_post( $maximo_categories ); // phpcs:ignore. ?>
		</div>
		<?php
	}
}
