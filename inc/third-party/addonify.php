<?php

if ( ! function_exists( 'maximo_addonify_wishlist_items_count' ) ) {

	function maximo_addonify_wishlist_items_count() {

		if ( ! class_exists( 'Addonify_Wishlist' ) ) {
			return;
		}

		if ( function_exists( 'addonify_wishlist_get_total_items' ) ) {

			return addonify_wishlist_get_total_items();
		}
	}
}