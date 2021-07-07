<?php
/**
 * Template part for displaying theme slider banner.
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

$maximo_banner_query_results = new WP_Query( array(
	'post_type' => 'post',
	'ignore_sticky_posts' => true,
	'posts_per_page' => absint( $args['content']['posts_no'] ),
	'cat' => implode( ',', $args['content']['post_categories'] )
) );

if ( $maximo_banner_query_results->have_posts() ) {
	?>
	<div id="maximo-banner-container">
		<div class="swiper-wrapper">
			<?php
			while ( $maximo_banner_query_results->have_posts() ) {

				$maximo_banner_query_results->the_post();

				$maximo_banner_thumbnail_size = maximo_get_thumbnail_size_array( 'full', $args['thumbnail_size'] );
				?>
				<div class="swiper-slide">
					<div class="<?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>" style="background-image: url( <?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), $maximo_banner_thumbnail_size ) ); ?> )">
						<div class="maximo-container">
							<?php if ( $args['enable_image_overlay'] === true ) { ?>
							<div class="maximo-banner-overlay"></div>
							<?php } ?>
							<div class="maximo-banner-content-wrapper">
								<div class="maximo-banner-content">
									<div class="maximo-banner-content-inner">
										<?php
										if ( $args['content']['show_post_categories'] === true ) {
											do_action( 'maximo_post_structure_categories' );
										}
										?>
										<h2 class="maximo-banner-content-post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
										<?php 
										if ( $args['content']['post_meta'] ) {
											?>
											<div class="maximo-post-meta-entries">
												<div class="maximo-post-meta-entries-inner">
													<?php

													$maximo_meta_args = array();

													if ( in_array( 'categories', $args['content']['post_meta'] ) ) {
														$maximo_meta_args['sep'] = ', ';
													}

													$maximo_meta_args['display_icon'] = $args['content']['show_meta_icons'];

													foreach ( $args['content']['post_meta'] as $post_meta ) {

														get_template_part( 'template-parts/entry/entry' , $post_meta, $maximo_meta_args );
													}
													?>
												</div>
											</div>
											<?php
										} 

										if ( $args['content']['show_post_excerpt'] === true ) {
											?>
											<div class="maximo-banner-post-excerpt">
												<div class="maximo-banner-post-excerpt-inner">
													<?php the_excerpt(); ?>
												</div>
											</div>
											<?php
										}

										if ( $args['button']['show_button'] === true && ! empty( $args['button']['button_label'] ) ) {
											?>
											<a href="<?php the_permalink(); ?>" class="maximo-banner-btn maximo-read-more" <?php echo ( $args['button']['open_in_new_tab'] === true ) ? 'target="_blank"' : ''; ?>>
												<?php echo esc_html( $args['button']['button_label'] ); ?>
												<span class="maximo-rm-icon"><i class="fi fi-angle-right"></i></span>
											</a>
											<?php
										}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
			wp_reset_postdata();
			?>
		</div>


		<div class="maximo-banner-pagination"></div>

		<div class="maximo-banner-button-prev"><button class="maximo-banner-nav-button"><i class="fi fi-angle-left"></i></button></div>
	  	<div class="maximo-banner-button-next"><button class="maximo-banner-nav-button"><i class="fi fi-angle-right"></i></button></div>
	</div>
	<?php
}