<?php

$maximo_active_callbacks_path = MAXIMO_THEME_DIR . '/customizer/functions/active-callbacks/';

require $maximo_active_callbacks_path . 'callback-layout.php';

require $maximo_active_callbacks_path . 'callback-color.php';

require $maximo_active_callbacks_path . 'callback-typography.php';

require $maximo_active_callbacks_path . 'callback-button.php';

require $maximo_active_callbacks_path . 'callback-miscellaneous.php';

require $maximo_active_callbacks_path . 'callback-top-header.php';

require $maximo_active_callbacks_path . 'callback-main-header.php';

require $maximo_active_callbacks_path . 'callback-transparent-header.php';

require $maximo_active_callbacks_path . 'callback-site-identity.php';

require $maximo_active_callbacks_path . 'callback-page-header.php';

require $maximo_active_callbacks_path . 'callback-breadcrumb.php';

require $maximo_active_callbacks_path . 'callback-archive.php';

require $maximo_active_callbacks_path . 'callback-single.php';

require $maximo_active_callbacks_path . 'callback-sidebar.php';

require $maximo_active_callbacks_path . 'callback-footer.php';

require $maximo_active_callbacks_path . 'callback-banner.php';

if ( class_exists( 'WooCommerce' ) ) {

	require $maximo_active_callbacks_path . 'callback-woocommerce.php';
}