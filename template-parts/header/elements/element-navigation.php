<?php
/**
 * Template part for displaying theme top header's navigation element.
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
<div class="<?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
	<div class="main-navigation-wrapper">
		<div class="maximo-mobile-navigation-toggle-container">
			<a href="#" id="maximo-mobile-nav-toggle-btn" class="maximo-mobile-nav-toggle-btn">
				<span class="maximo-menu-icon">
					<i class="maximo-menu-icon-bar"></i>
					<i class="maximo-menu-icon-bar"></i>
					<i class="maximo-menu-icon-bar"></i>
				</span>
				<?php if ( $args['menu_label'] ) { ?>
					<span class="maximo-mobile-menu-toggle-label"><?php echo esc_html( $args['menu_label'] ); ?></span>
				<?php } ?>
			</a>
		</div>
		<nav id="site-navigation" class="site-navigation maximo-hide-mobile-tablet">
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
	</div><!-- .main-navigation-wrapper -->
</div>