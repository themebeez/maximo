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
<div id="maximo-light-dark-mode-switch-btn-wrapper">
    <button id="maximo-light-dark-mode-switch-btn" class="maximo-light-dark-mode-switch-btn <?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
        <span class="screen-reader-text"><?php echo esc_html__( 'Toggle Dark Mode', 'maximo' ); ?></span>
        <span class="maximo-light-mode-icon"><i class="fi fi-day-sunny"></i></span>
        <span class="maximo-dark-mode-icon"><i class="fi fi-night-clear"></i></span>
    </button>
</div>