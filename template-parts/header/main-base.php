<?php
/**
 * The base template for displaying theme main header area.
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
<?php do_action( 'maximo_before_main_header' ); ?>
<div id="maximo-main-header" class="<?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
	<div class="maximo-main-header-inner">
		<?php do_action( 'maximo_main_header_content' ); ?>
	</div>
</div>
<?php do_action( 'maximo_after_main_header' ); ?>