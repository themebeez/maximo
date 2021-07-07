<?php
/**
 * Template part for displaying theme page header.
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
<?php do_action( 'maximo_before_page_header' ); ?>
<div id="maximo-page-header" class="<?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
	<div class="maximo-container">
		<?php if ( $args['display_background_overlay'] ) { ?>
			<div class="maximo-page-header-overlay"></div>
		<?php } ?>
		<div class="maximo-page-header-content-wrapper">
			<div class="maximo-page-header-content">
				<?php
				if ( $args['is_breadcrumb_enabled'] && $args['breadcrumbs_position'] === 'before-title' ) {
					do_action( 'maximo_breadcrumbs' );
				}

				do_action( 'maximo_page_header_title' );

				if ( $args['is_breadcrumb_enabled'] && $args['breadcrumbs_position'] === 'after-title' ) {
					do_action( 'maximo_breadcrumbs' );
				}
				?>
			</div>
		</div>
	</div>
</div>
<?php do_action( 'maximo_before_page_header' ); ?>