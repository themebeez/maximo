<?php
/**
 * Template part for displaying theme main header layout two.
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
<div class="maximo-main-header-container <?php echo ( $args['enable_sticky_navigation'] ? 'maximo-sticky-main-navigation' : '' ); ?>">
	<div class="maximo-container">
		<div class="maximo-row maximo-align-items-center maximo-justify-content-between">
			<div class="maximo-col-auto">
				<?php do_action( 'maximo_site_identity' ); ?>
			</div>
			<div class="maximo-col">
				<?php do_action( 'maximo_main_navigation' ); ?>
			</div>
			<?php if ( $args['header_elements_enabled'] ) { ?>
				<div class="maximo-col-auto">
					<?php do_action( 'maximo_main_header_elements' ); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>