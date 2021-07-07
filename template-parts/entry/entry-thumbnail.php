<?php
/**
 * Template part for displaying post thumbnail.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Maximo
 * @author  Themebeez <themebeez@gmail.com>
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>
<div class="maximo-entry-thumbnail-container">
	<div class="maximo-entry-thumbnail-container-inner">
		<?php maximo_post_thumbnail(); ?>
	</div>
</div>