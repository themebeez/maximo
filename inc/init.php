<?php

$maximo_template_functions_path = MAXIMO_THEME_DIR . '/inc/template-functions/template-functions-';

// Load template actions.

require $maximo_template_functions_path . 'header.php';
require $maximo_template_functions_path . 'top-header.php';
require $maximo_template_functions_path . 'main-header.php';
require $maximo_template_functions_path . 'banner.php'; 
require $maximo_template_functions_path . 'page-header.php';
require $maximo_template_functions_path . 'breadcrumbs.php';
require $maximo_template_functions_path . 'article-content.php';
require $maximo_template_functions_path . 'footer.php';
require $maximo_template_functions_path . 'miscellaneous.php';


require MAXIMO_THEME_DIR . '/inc/helpers.php'; 

require MAXIMO_THEME_DIR . '/inc/third-party/breadcrumbs.php'; 

if ( class_exists( 'WooCommerce' ) ) {

	require MAXIMO_THEME_DIR . '/inc/third-party/woocommerce.php'; 

	require $maximo_template_functions_path . 'woocommerce.php'; 

	if ( class_exists( 'Addonify_Wishlist' ) ) {

		require MAXIMO_THEME_DIR . '/inc/third-party/addonify.php';
	}
}


