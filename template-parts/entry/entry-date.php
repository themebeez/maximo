<?php
/**
 * Template part for displaying post date meta.
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

$data_time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

$data_time_string = sprintf( $data_time_string,
	esc_attr( get_the_date( DATE_W3C ) ),
	esc_html( get_the_date() )
);
?>
<div class="maximo-post-meta-entry maximo-post-date-entries">
	<?php if ( $args['display_icon'] ) { ?>
		<span class="maximo-post-meta-icon maximo-post-date-meta-icon"><i class="fi fi-date"></i></span>
	<?php } ?>
	<?php echo $data_time_string // phpcs:ignore. ?>
</div>