<?php
/**
 * Template part for displaying post comment meta.
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

$maximo_comment_count = get_comments_number();
?>
<div class="maximo-post-meta-entry maximo-post-comment-entries">
	<?php if ( $args['display_icon'] ) { ?>
		<span class="maximo-post-meta-icon maximo-post-comment-meta-icon"><i class="fi fi-comments"></i></span>
	<?php } ?>
	<?php if ( $maximo_comment_count === '0' ) { ?>
		<a href="<?php echo esc_url( get_permalink() . '#respond' ) ; ?>">
	<?php } ?>
	<?php 
	if ( $maximo_comment_count != '0' ) {
		printf( // phpcs:ignore.
			/* translators: 1: comment count number */
			esc_html( _nx( '%1$s Comment', '%1$s Comments', $maximo_comment_count, 'maximo' ) ),
			number_format_i18n( $maximo_comment_count )
		);
	} else {
		echo __( 'No Comments', 'maximo' );
	}
	?>
	<?php if ( $maximo_comment_count === '0' ) { ?>
		</a>
	<?php } ?>
</div>