<?php
/**
 * Template part for displaying post author box.
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
<?php do_action( 'maximo_before_author_box' ); ?>
<section class="maximo-author-box">
	<div class="maximo-author-box-inner">
		<div class="maximo-row">
			<div class="maximo-col-auto">
				<div class="author-box-avatar">
					<?php echo get_avatar( get_the_author_meta( 'email' ), 75 ); ?>
				</div>
			</div>
			<div class="maximo-col">
				<div class="author-box-content">
					<h4 class="author-name"><?php echo esc_html( get_the_author() ); ?></h4>
					<?php
					if( get_the_author_meta( 'description' ) ) {
						?>
						<div class="author-description">
							<p><?php echo esc_html( get_the_author_meta( 'description' ) ); ?></p>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php do_action( 'maximo_after_author_box' ); ?>