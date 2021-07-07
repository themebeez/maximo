<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Maximo
 */

?>

	</div><!-- #content -->
	<?php 

	do_action( 'maximo_footer_base' );

	/**
	 * Hook: maximo_mobile_navigation.
	 *
	 * @hooked maximo_mobile_navigation_template - 10
	 */
	do_action( 'maximo_mobile_navigation' );

	/**
	 * Hook: maximo_search_section.
	 *
	 * @hooked maximo_search_section_template - 10
	 */
	do_action( 'maximo_search_section' );

	do_action( 'maximo_light_dark_mode_toggle_button' );

	/**
	 * Hook: maximo_scroll_top_button.
	 *
	 * @hooked maximo_scroll_top_button_template - 10
	 */
	do_action( 'maximo_scroll_top_button' );
	?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
