<?php
/**
 * Template part for displaying post meta.
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

if ( ! $args['post_meta_elements'] ) {
	return;
}

if ( 'post' === get_post_type() ) {
	?>
	<div class="maximo-post-meta-entries">
		<div class="maximo-post-meta-entries-inner">
			<?php
			foreach ( $args['post_meta_elements'] as $element ) {
				switch ( $element ) {
					case 'author' :
						do_action( 'maximo_post_meta_author' );
						break;
					case 'date' :
						do_action( 'maximo_post_meta_date' );
						break;
					case 'comment' :
						do_action( 'maximo_post_meta_comments' );
						break;
					default :
						do_action( 'maximo_post_meta_categories' );
				}
			}
			?>
		</div>
	</div>
	<?php
}