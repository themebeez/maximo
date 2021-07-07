<?php

/**
 * Checks if Site Layout is not Fullwidth: Stretched.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'maximo_is_fullwidth_stretched_site_layout_disabled' ) ) {

	function maximo_is_fullwidth_stretched_site_layout_disabled( $control ) {

		$site_layout = $control->manager->get_setting( 'site_layout' )->value();

		return ( $site_layout != 'maximo-fullwidth-stretched' ) ? true : false;
	}
}