<?php
/**
 * Template part for displaying theme top header's search element.
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
<div id="maximo-main-header-search-element" class="<?php echo isset( $args['classes'] ) ? esc_attr( implode( ' ', $args['classes'] ) ) : ''; ?>">
	<div class="maximo-header-search-inner" aria-haspopup="true">
		<a href="#" id="maximo-header-search" class="maximo-header-element-icon maximo-search">
			<i class="fi fi-search"></i>
		</a>

		<div class="maximo-search-container maximo-hide">
			<div class="maximo-search-container-inner">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</div>