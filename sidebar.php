<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Maximo
 */

if ( ! maximo_is_sidebar_active() ) {
	
	return;
}

$maximo_sidebar_classes = array( 'widget-area site-sidebar' );

if ( maximo_get_option( 'sidebar_widget_style' ) ) {
	$maximo_sidebar_classes[] = maximo_get_option( 'sidebar_widget_style' );
}
?>
<aside id="secondary" class="<?php echo esc_attr( implode( ' ', $maximo_sidebar_classes ) ); ?>">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
