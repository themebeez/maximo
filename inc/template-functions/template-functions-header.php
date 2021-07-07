<?php


if ( ! function_exists( 'maximo_header_template' ) ) {

	function maximo_header_template() {

		if ( is_single() ) {

			$is_default_header_disabled = get_post_meta( get_the_ID(), 'maximo_post_disable_default_header', true );

			if ( $is_default_header_disabled ) {
				return;
			}
			
			
		}

		if ( is_page() ) {

			$is_default_header_disabled = get_post_meta( get_the_ID(), 'maximo_post_disable_default_header', true );

			if ( $is_default_header_disabled ) {
				return;
			}
		}
	

		get_template_part( 'template-parts/header/base' );
	}
}
add_action( 'maximo_header', 'maximo_header_template' );