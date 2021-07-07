<?php
/**
 * Template part for displaying theme breadcrumbs.
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
<div id="maximo-breadcrumbs" class="<?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
	<?php

	if ( $args['display_in_separate_container'] ) {
		?>
		<div class="maximo-container">
		<?php
	}

	switch ( $args['breadcrumbs_source'] ) {

		case 'yoast' :
			if ( maximo_is_woocommerce_page() ) {
				do_action( 'maximo_woocommerce_breadcrumb' );
			} else {
				if ( function_exists( 'yoast_breadcrumb' ) ) {
					yoast_breadcrumb();
				} else {
					$maximo_breadcrumb_args = array(
		            	'show_browse' => false,
			        );
			        maximo_breadcrumb_trail( $maximo_breadcrumb_args );
				}
			}				
			break;
		case 'rank-math' :
			if ( maximo_is_woocommerce_page() ) {
				do_action( 'maximo_woocommerce_breadcrumb' );
			} else {
				if ( function_exists('rank_math_the_breadcrumbs') ) { 
					rank_math_the_breadcrumbs();
				} else {
					$maximo_breadcrumb_args = array(
		            	'show_browse' => false,
			        );
			        maximo_breadcrumb_trail( $maximo_breadcrumb_args );
				}
			}				
			break;
		case 'bcn' :
			if ( maximo_is_woocommerce_page() ) {
				do_action( 'maximo_woocommerce_breadcrumb' );
			} else {
				if ( function_exists( 'bcn_display' ) ) {
					bcn_display();
				} else {
					$maximo_breadcrumb_args = array(
		            	'show_browse' => false,
			        );
			        maximo_breadcrumb_trail( $maximo_breadcrumb_args );
				}
			}				
			break;
		default : 
			if ( maximo_is_woocommerce_page() ) {
				do_action( 'maximo_woocommerce_breadcrumb' );
			} else {
				$maximo_breadcrumb_args = array(
		            'show_browse' => false,
		        );
		        maximo_breadcrumb_trail( $maximo_breadcrumb_args );
			}					 
	}

	if ( $args['display_in_separate_container'] ) {
		?>
		</div>
		<?php
	}
	?>
</div>