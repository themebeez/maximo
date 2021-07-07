<?php
/**
 * The base template for displaying theme footer widgets.
 *
 * @see https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Maximo
 * @author  Themebeez <themebeez@gmail.com>
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php do_action( 'maximo_before_footer_widgets' ); ?>
<div id="maximo-footer-widgets-wrapper" class="<?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
	<div class="maximo-container">
		<div class="maximo-row">
			<?php for ( $i = 1; $i <= $args['widget_columns_no']; $i++ ) { ?>
				<div class="<?php echo esc_attr( $args['widget_column_class'][$i-1] ); ?>">
					<?php
					if ( is_active_sidebar( 'footer-' . $i ) ) {
						dynamic_sidebar( 'footer-' . $i );
					}
					?>
				</div>
			<?php } ?>
		</div>
		<div class="maximo-footer-widget-separator"></div>
	</div>
</div>
<?php do_action( 'maximo_after_footer_widgets' );