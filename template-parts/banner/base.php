<?php
/**
 * The base template for displaying theme banner.
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
<?php do_action( 'maximo_before_banner' ); ?>
<div id="maximo-banner" class="<?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
	<div class="maximo-banner-inner">
		<?php 
		switch ( $args['width'] ) {
			case 'maximo-banner-content-width' :
			case 'maximo-banner-wide-width' :
				echo '<div class="maximo-container"><div class="row">';
				do_action( 'maximo_slider_banner' );
				echo '</div></div>';
				break;
			default :
				do_action( 'maximo_slider_banner' );
		}
		?>
	</div>
</div>
<?php do_action( 'maximo_after_banner' ); ?>