<?php


if ( ! function_exists( 'maximo_light_dark_mode_toggle_button_template' ) ) {

	function maximo_light_dark_mode_toggle_button_template() {

		$customizer_defaults = maximo_get_customizer_defaults();

		$theme_skin = maximo_get_option( 'theme_skin' ) ? maximo_get_option( 'theme_skin' ) : $customizer_defaults['theme_skin'];

		$enable_dark_mode_toggler = maximo_get_option( 'display_dark_mode_toggle_button' ) ? true : false;

		if ( $enable_dark_mode_toggler === false || $theme_skin === 'maximo-theme-dark'  ) {
			return;
		}

		$args = array(
			'classes' => array()
		);

		$args['classes'][] = ( $theme_skin !== 'maximo-theme-dark' ) ? 'maximo-show-dark-icon maximo-hide-light-icon' : 'maximo-show-light-icon maximo-hide-dark-icon';

		$args = apply_filters( 'maximo_light_dark_mode_toggle_button_args', $args );

		get_template_part( 'template-parts/miscellaneous/button', 'light-dark-mode-toggle', $args );
	}
}
add_action( 'maximo_light_dark_mode_toggle_button', 'maximo_light_dark_mode_toggle_button_template' );


if ( ! function_exists( 'maximo_scroll_top_button_template' ) ) {

	function maximo_scroll_top_button_template() {

		if ( ! maximo_get_option( 'enable_scroll_top_button' ) ) {
			return;
		}

		$customizer_defaults = maximo_get_customizer_defaults();

		$args = array(
			'classes' => array()
		);

		$args['classes'][] = maximo_get_option( 'scroll_top_btn_device_visibility' ) ? maximo_get_option( 'scroll_top_btn_device_visibility' ) : $customizer_defaults['scroll_top_btn_device_visibility'];

		$args = apply_filters( 'maximo_scroll_top_button_args', $args );

		get_template_part( 'template-parts/miscellaneous/button', 'scroll-top', $args );
	}
}
add_action( 'maximo_scroll_top_button', 'maximo_scroll_top_button_template' );