<?php
/**
 * Template part for displaying theme top header's cart element.
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
<div id="maximo-main-header-cart-element" class="<?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
	<div class="maximo-header-cart-inner">
		<div class="maximo-cart-container">
			<a class="maximo-header-element-icon maximo-cart" href="<?php echo esc_url( wc_get_cart_url() ); ?>"><i class="fi fi-shopping-basket"></i></a>
			<?php if ( $args['enable_cart_items_no'] ) { ?>
				<span id="maximo-cart-items-count"><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></span>
			<?php } ?>
		</div>

	</div>
</div>