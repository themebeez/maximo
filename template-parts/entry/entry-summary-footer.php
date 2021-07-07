<?php
/**
 * Template part for displaying post read more link.
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
<a href="<?php the_permalink(); ?>" class="maximo-read-more" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php echo esc_html( $args['read_more_button_label'] ); ?><span class="maximo-rm-icon"><i class="fi fi-angle-right"></i></span></a>