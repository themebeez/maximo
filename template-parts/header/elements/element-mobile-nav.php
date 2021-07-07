<?php
/**
 * Template part for displaying mobile navigation.
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
<div id="maximo-mobile-nav-overlay"></div>
<div id="maximo-mobile-nav-container" class="maximo-sidebar-navigation">
	<div class="maximo-mobile-nav-top-bar">
		<div class="maximo-moible-nav-label">
			<span class="maximo-menu-icon">
				<span class="maximo-menu-icon">
					<i class="maximo-menu-icon-bar"></i>
					<i class="maximo-menu-icon-bar"></i>
					<i class="maximo-menu-icon-bar"></i>
				</span>
			</span>
			<?php echo esc_html( $args['menu_label'] ); ?>
		</div>
		<div class="maximo-mobile-nav-close">
			<a href="#" id="maximo-mobile-nav-close-btn" class="maximo-mobile-nav-close-btn">
				<i class="fi fi-close-a" aria-hidden="true"></i>
			</a>
		</div>
	</div>	
	<div class="maximo-mobile-nav-wrapper">
		<nav id="maximo-mobile-nav" class="maximo-mobile-nav" role="navigation">
			<?php
	    	$maximo_primary_menu_args = array(
	 			'theme_location' => 'menu-1',
	 			'container' => '',
	 			'menu_class' => 'primary-menu',
				'menu_id' => '',
				'fallback_cb' => 'maximo_navigation_fallback',
	 		);
			wp_nav_menu( $maximo_primary_menu_args );
	    	?>
		</nav>
	</div>
	<a href="#" id="maximo-mobile-nav-close-link" class="screen-reader-text"><?php echo esc_html__( 'Close Navigation Menu', 'maximo' ); ?></a>
</div>