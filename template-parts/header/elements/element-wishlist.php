<?php
/**
 * Template part for displaying theme top header's wishlist element.
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
	<div class="maximo-header-wishlist-inner">
		<div class="maximo-wishlist-container">
			<a class="maximo-header-element-icon maximo-wishlist" href="<?php echo esc_url( get_page_link( absint( get_option( 'addonify_wishlist_wishlist_page' ) ) ) ); ?>"><i class="fi fi-heart"></i></a>
			<?php if ( $args['enable_wishlist_items_no'] ) { ?>
				<span id="maximo-wishlist-items-count"><?php echo esc_html( maximo_addonify_wishlist_items_count() ); ?></span>
			<?php }  ?>
		</div>

	</div>
</div>