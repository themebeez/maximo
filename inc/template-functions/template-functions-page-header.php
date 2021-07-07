<?php

if ( ! function_exists( 'maximo_page_header_template' ) ) {

	function maximo_page_header_template() {

		if ( maximo_is_page_header_activated() == true ) {

			$customizer_defaults = maximo_get_customizer_defaults();

			$args = array(
				'classes' => array(),
				'is_breadcrumb_enabled' => false,
				'breadcrumbs_position' => 'before-title',
				'display_background_overlay' => false
			);

			if ( maximo_is_breadcrumbs_activated() == true ) {

				$breadcrumbs_position = maximo_get_option( 'breadcrumbs_position' ) ? maximo_get_option( 'breadcrumbs_position' )  : $customizer_defaults['breadcrumbs_position'];

				if ( $breadcrumbs_position == 'page_header' ) {

					$args['classes'][] = 'maximo-page-header-breadcrumbs-enabled';

					$args['is_breadcrumb_enabled'] = true;

					$inner_breadcrumbs_position = maximo_get_option( 'breadcrumbs_position_inside_page_header' ) ? maximo_get_option( 'breadcrumbs_position_inside_page_header' ) : $customizer_defaults['breadcrumbs_position_inside_page_header'];

					if ( $inner_breadcrumbs_position == 'before' ) {
						$args['classes'][] = 'maximo-page-header-breadcrumbs-before';
						$args['breadcrumbs_position'] = 'before-title';
					} else {
						$args['classes'][] = 'maximo-page-header-breadcrumbs-after';
						$args['breadcrumbs_position'] = 'after-title';
					}
				}
			}

			$args['classes'][] = maximo_get_option( 'page_header_content_width' ) ? maximo_get_option( 'page_header_content_width' ) : $customizer_defaults['page_header_content_width'];

			$content_position = maximo_get_option( 'page_header_content_position' ) ? maximo_get_option( 'page_header_content_position' ) : $customizer_defaults['page_header_content_position'];

			switch ( $content_position ) {
				case 'top' :
					$args['classes'][] = 'maximo-page-header-content-top';
					break;
				case 'bottom' :
					$args['classes'][] = 'maximo-page-header-content-bottom';
					break;
				default :
					$args['classes'][] = 'maximo-page-header-content-center';
			}

			$content_alignment = maximo_get_option( 'page_header_text_alignments' ) ? maximo_get_option( 'page_header_text_alignments' ) : $customizer_defaults['page_header_text_alignments'];

			switch ( $content_alignment ) {
				case 'left' :
					$args['classes'][] = 'maximo-text-left';
					break;
				case 'right' :
					$args['classes'][] = 'maximo-text-right';
					break;
				default :
					$args['classes'][] = 'maximo-text-center';
			}

			$background_type = maximo_get_option( 'page_header_background_type' ) ? maximo_get_option( 'page_header_background_type' ) : $customizer_defaults['page_header_background_type'];

			switch ( $background_type ) {
				case 'gradient' :
					$args['classes'][] = 'maximo-page-header-background-gradient';
					break;
				case 'image' :
					$args['classes'][] = 'maximo-page-header-background-img';
					$args['display_background_overlay'] = true;
					break;
				default :
					$args['classes'][] = 'maximo-page-header-background-color';
			}

			$args = apply_filters( 'maximo_page_header_args', $args );

			get_template_part( 'template-parts/content/content', 'page-header', $args );
		} else {

			return;
		}
	}
}
add_action( 'maximo_page_header', 'maximo_page_header_template' );


if ( ! function_exists( 'maximo_page_header_title_action' ) ) {

	function maximo_page_header_title_action() {

		if ( is_home() || is_search() || is_archive() ) {			
			do_action( 'maximo_archive_title' );
		}

		if ( is_single() || is_page() ) {
			do_action( 'maximo_singular_title' );
		}

		if ( is_404() ) {
			do_action( 'maximo_404_title' );
		}
	}
}
add_action( 'maximo_page_header_title', 'maximo_page_header_title_action' );


if ( ! function_exists( 'maximo_archive_title_template' ) ) {

	function maximo_archive_title_template() {

		$args = array(
			'title' => '',
			'description' => '',
			'tag' => 'h1'
		);

		if ( is_home() ) {
			$args['title'] = esc_html__( 'Blog', 'maximo' );
			if ( maximo_is_page_header_activated() == true ) {
				$args['tag'] = 'h1';
			} else {
				$args['tag'] = 'h2';
			}
		}

		if ( is_archive() ) {
			$args['title'] = get_the_archive_title();
			$args['description'] = get_the_archive_description();
			$args['tag'] = 'h1';
		}

		if ( is_search() ) {
			$args['title'] = sprintf( 
				/* translators: %s: search query. */
				__( 'Search Results for: %s', 'maximo' ), '<span>' . get_search_query() . '</span>' 
			);
			$args['tag'] = 'h1';
		}

		get_template_part( 'template-parts/header', 'archive-title', $args );
	}
}
add_action( 'maximo_archive_title', 'maximo_archive_title_template' );


if ( ! function_exists( 'maximo_singular_title_template' ) ) {

	function maximo_singular_title_template() {

		get_template_part( 'template-parts/header', 'single-title' );
	}
}
add_action( 'maximo_singular_title', 'maximo_singular_title_template' );

if ( ! function_exists( 'maximo_404_title_template' ) ) {

	function maximo_404_title_template() {

		$args = array(
			'title' => esc_html__( '404', 'maximo' ),
			'tag' => 'h1'
		);

		get_template_part( 'template-parts/header', '404-title', $args );
	}
}
add_action( 'maximo_404_title', 'maximo_404_title_template' );