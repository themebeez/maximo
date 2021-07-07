<?php
/**
 * Template part for displaying theme top header.
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
<?php do_action( 'maximo_before_top_header' ); ?>
<div id="maximo-top-header" class="<?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
	<div class="maximo-container">
		<div class="maximo-row maximo-align-items-center maximo-justify-content-between">
			<?php do_action( 'maximo_top_header_left_element' ); ?>
			<?php do_action( 'maximo_top_header_right_element' ); ?>
		</div>
	</div>
</div>
<?php do_action( 'maximo_after_top_header' ); ?>