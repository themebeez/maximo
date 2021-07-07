<?php
/**
 * Template part for displaying theme top header's button element.
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
<div id="maximo-main-header-button-element" class="<?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
	<div class="maximo-header-btn-inner">
		<a class="maximo-btn maximo-text-btn maximo-header-element-btn" href="<?php echo esc_url( $args['link'] ); ?>" <?php echo ( $args['open_in_new_tab'] ? 'target="_blank"' : '' ); ?>><?php echo esc_html( $args['label'] ); ?></a>
	</div>
</div>