<?php

if ( ! function_exists( 'maximo_woocommerce_result_count_catalog_ordering_wrapper_start' ) ) {

	function maximo_woocommerce_result_count_catalog_ordering_wrapper_start() {
		?>
		<div class="woocommerce-result-count-catalog-ordering-wrapper">
		<?php
	}
}
add_action( 'woocommerce_before_shop_loop', 'maximo_woocommerce_result_count_catalog_ordering_wrapper_start', 19 );

if ( ! function_exists( 'maximo_woocommerce_result_count_catalog_ordering_wrapper_end' ) ) {

	function maximo_woocommerce_result_count_catalog_ordering_wrapper_end() {
		?>
		</div>
		<?php
	}
}
add_action( 'woocommerce_before_shop_loop', 'maximo_woocommerce_result_count_catalog_ordering_wrapper_end', 31 );


if ( ! function_exists( 'maximo_woocommerce_sidebar_template' ) ) {

	function maximo_woocommerce_sidebar_template() {

		$sidebar_position = maximo_get_sidebar_position();

		// var_dump($sidebar_position);

		if ( ! is_active_sidebar( 'maximo-woocommerce-sidebar' ) || $sidebar_position === 'no-sidebar' ) {
			return;
		}

		$sidebar_classes = array( 'widget-area maximo-woocommerce-sidebar site-sidebar' );

		if ( maximo_get_option( 'sidebar_widget_style' ) ) {
			$sidebar_classes[] = maximo_get_option( 'sidebar_widget_style' );
		}
		?>
		<aside id="secondary" class="<?php echo esc_attr( implode( ' ', $sidebar_classes ) ); ?>">
			<?php dynamic_sidebar( 'maximo-woocommerce-sidebar' ); ?>
		</aside><!-- #secondary -->
		<?php
	}
} 
add_action( 'maximo_woocommerce_sidebar', 'maximo_woocommerce_sidebar_template' );