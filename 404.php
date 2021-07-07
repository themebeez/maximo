<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Maximo
 */

get_header();
	?>
	<div class="maximo-container">
		<div class="maximo-row maximo-container-inner">
			<div id="maximo-primary" class="maximo-content-area">
				<main id="maximo-main" class="maximo-site-main">
					<section class="error-404 not-found">
						<div class="page-header">
							<h1 class="page-title"><?php esc_html_e( '404', 'maximo' ); ?></h1>
							<p><?php esc_html_e( 'Oops! page can&rsquo;t be found.', 'maximo' ); ?></p>
						</div><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'We could&rsquo;t find the page you&rsquo;re looking for. Maybe try searching?', 'maximo' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</main>
			</div>
		</div>
	</div>
	<?php
get_footer();
