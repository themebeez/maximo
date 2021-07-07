<?php
/**
 * Template part for displaying theme main header layout one.
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
<div class="maximo-main-header-logo-ad-container">
	<div class="maximo-container">
		<div class="maximo-row maximo-align-items-center">
			<div class="<?php echo ( $args['display_ad'] ? 'maximo-col-md-auto' : 'maximo-col-md' ); ?>">
				<?php do_action( 'maximo_site_identity' ); ?>
			</div>
			<?php if ( $args['display_ad'] ) { ?>
				<div class="maximo-col">
					<?php do_action( 'maximo_header_ad' ); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<div class="maximo-main-header-navigation-elements-container <?php echo ( $args['enable_sticky_navigation'] ? 'maximo-sticky-main-navigation' : '' ); ?>">
	<div class="maximo-container">
		<div class="maximo-row maximo-align-items-center maximo-justify-content-between">
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