<?php
/**
 * The base template for displaying scroll top button.
 *
 * @see https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Maximo
 * @author  Themebeez <themebeez@gmail.com>
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>
<div id="maximo-scroll-top-btn-wrapper" class="maximo-hide-stb">
    <button class="maximo-scroll-top-btn <?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
        <span class="screen-reader-text"><?php echo esc_html__( 'Scroll to Top', 'maximo' ); ?></span>
        <i class="fi fi-angle-up"></i>
    </button>
</div>