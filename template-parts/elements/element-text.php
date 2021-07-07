<?php
/**
 * Template part for displaying theme text element.
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
<div class="<?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
	<div class="maximo-text-element-inner">
		<span class="maximo-text-element-content"><?php echo wp_kses_post( $args['content'] ); ?></span>
	</div>
</div>