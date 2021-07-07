<?php
/**
 * Template part for displaying post author meta.
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
<div class="maximo-post-meta-entry maximo-post-author-entries">
	<?php if ( $args['display_icon'] ) { ?>
		<span class="maximo-post-meta-icon maximo-post-author-meta-icon"><?php echo get_avatar( get_the_author_meta( 'email' ), 30 ); ?></span>
	<?php } ?>
	<span><?php echo __( 'By', 'maximo' ); ?></span>
	<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
		<span class="maximo-post-author-name"><?php echo wp_kses_post( get_the_author() ); ?></span>
	</a>
</div>