<?php
/**
 * The base template for displaying theme footer copyright.
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
<?php do_action( 'maximo_before_footer_copyright' ); ?>
<div id="maximo-footer-copyright-wrapper" class="<?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
	<div class="maximo-container">
		<div class="maximo-footer-copyright">
			<?php do_action( 'maximo_copyright_text' ); ?>
			<?php do_action( 'maximo_copyright_bar_element' ); ?>
		</div>
	</div>
</div>
<?php do_action( 'maximo_after_footer_copyright' ); ?>