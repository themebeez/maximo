<?php
/**
 * Template part for displaying comments on post.
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
<section class="maximo-comments-area">
	<div class="maximo-comments-area-inner">
		<?php
		if ( isset( $args['show_cmnts_toggle_btn'] ) && $args['show_cmnts_toggle_btn'] == true && isset( $args['cmnts_toggle_btn_label'] ) && $args['cmnts_toggle_btn_label'] ) {
			?>
			<div class="maximo-comments-toggle-btn">
				<button id="maximo-cmnt-tgl-btn" class="maximo-btn maximo-cmnt-tgl-btn">
					<span class="maximo-btn-icon"><i class="fi fi-comments"></i></span>
					<?php echo esc_html( $args['cmnts_toggle_btn_label'] ); ?></button>
			</div>
			<?php  
		}

		comments_template();
		?>
	</div>
</section>