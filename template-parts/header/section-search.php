<?php
/**
 * Template part for displaying search section.
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
<div id="maximo-search-modal" class="maximo-search-modal">
	<div class="maximo-container">
		<div class="maximo-search-wrapper">
			<div class="maximo-search-form-close-wrapper">
				<span class="screen-reader-text"><?php echo __( 'Close search form', 'maximo' ); ?></span>
				<button id="maximo-search-modal-close-btn" class="maximo-search-form-close-btn">
					<i class="maximo-search-form-close-icon fi fi-close-a"></i>
					<span><i class="fi fi-close-a"></i></span>
				</button>
			</div>

			<div class="maximo-search-wrapper-inner">
				<div class="maximo-search-form-wrapper">
					<?php get_search_form(); ?>
				</div>			
				<p class="maximo-text-left"><?php echo __( 'Type and press enter to search or press esc to close the search', 'maximo' ); ?></p>
			</div>
		</div>
		<a href="#" id="maximo-search-form-close-link" class="screen-reader-text"><?php echo esc_html__( 'Close Search Form', 'maximo' ); ?></a>
	</div>
</div>