<?php
/**
 * The base template for displaying theme footer.
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
<?php do_action( 'maximo_before_footer' ); ?>
<div id="maximo-footer" class="<?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
	<div class="maximo-footer-inner">
		<?php do_action( 'maximo_footer_content' ); ?>
	</div>
</div>
<?php do_action( 'maximo_before_footer' );