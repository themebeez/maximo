<?php
/**
 * The base template for displaying theme header area.
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
<header id="masthead" class="site-header">
    <?php
    /**
     * Hook: maximo_top_header.
     *
     * @hooked maximo_top_header_action - 10
     */
    do_action( 'maximo_top_header' ); 

    /**
     * Hook: maximo_main_header.
     *
     * @hooked maximo_main_header_action - 10
     */
    do_action( 'maximo_main_header' );  
    ?>
</header>