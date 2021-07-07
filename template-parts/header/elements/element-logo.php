<?php
/**
 * Template part for displaying theme top header's site identity or logo element.
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
<div id="maximo-main-header-logo-element" class="<?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
	<div class="site-branding">
		<?php
		if ( has_custom_logo() ) {

			do_action( 'maximo_custom_logo' );

			do_action( 'maximo_transparent_logo' );
			
			do_action( 'maximo_dark_mode_logo' );
		} else {
			do_action( 'maximo_site_title' );
		}

		do_action( 'maximo_site_description' );
		?>
	</div>
</div>