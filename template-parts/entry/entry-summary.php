<?php
/**
 * Template part for displaying post excerpt.
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
<div class="maximo-entry-excerpt-container">
	<div class="maximo-entry-excerpt-container-inner">
		<?php the_excerpt(); ?>
		<?php do_action( 'maximo_post_read_more_button' ); ?>
	</div>
</div>
