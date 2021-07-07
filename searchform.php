<?php
/**
 * The template for displaying search form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maximo
 */

/**
 * Do not allow direct script access.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<form role="search" method="get" class="maximo-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="screen-reader-text" for="s"><?php echo esc_html__( 'Search for:', 'maximo' ); ?></label>
	<input type="search" name="s" placeholder="<?php echo esc_html_x( 'Type here to search', 'placeholder', 'maximo' )?>" value="<?php echo get_search_query(); ?>">
	<button type="submit" class="maximo-search-form-submit"><i class="fi fi-search" aria-hidden="true"></i></button>
</form>
