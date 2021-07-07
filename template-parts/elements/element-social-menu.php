<?php
/**
 * Template part for displaying theme socila menu element.
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
	<div class="maximo-social-menu-element-inner">
		<?php
		if ( $args['menu'] ) {
			wp_nav_menu( 
				array(
					'menu' => $args['menu'],
					'depth' => 1
				) 
			); 
		}
		?>
	</div>
</div>