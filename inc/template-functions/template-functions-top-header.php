<?php

if( ! function_exists( 'maximo_top_header_template' ) ) {
	/**
	 * Outputs template for header's top header section.
	 */
	function maximo_top_header_template() {

		$display_top_header = maximo_get_option( 'display_top_header' );

		$display_top_header_right_elements = maximo_get_option( 'display_top_header_right_element' );

		$display_top_header_left_elements = maximo_get_option( 'display_top_header_left_element' );

		if ( ! $display_top_header || ( ! $display_top_header_left_elements && ! $display_top_header_right_elements ) ) {
			return;
		}

		$customizer_defaults = maximo_get_customizer_defaults();

		$args = array(
			'classes' => array()
		);

		$args['classes'][] = maximo_get_option( 'top_header_visibility' ) ? maximo_get_option( 'top_header_visibility' ) : $customizer_defaults['top_header_visibility'];

		$args['classes'][] = maximo_get_option( 'top_header_width' ) ? maximo_get_option( 'top_header_width' ) : $customizer_defaults['top_header_width'];

		$args['classes'][] = $display_top_header_left_elements ? '' : 'maximo-no-left-element';

		$args['classes'][] = $display_top_header_right_elements ? '' : 'maximo-no-right-element';

		$args['classes'] = apply_filters( 'maximo_top_header_classes', $args['classes'] );

		get_template_part( 'template-parts/top-header/top', 'header', $args );
	}
}
add_action( 'maximo_top_header', 'maximo_top_header_template' );


if ( ! function_exists( 'maximo_top_header_left_element_template' ) ) {

	function maximo_top_header_left_element_template() {

		$display_top_header_left_elements = maximo_get_option( 'display_top_header_left_element' );

		if ( ! $display_top_header_left_elements ) {
			return;
		}

		$elements = maximo_get_option( 'top_header_left_element' );

		if ( $elements ) {
			?>
			<div class="maximo-col-lg">
				<?php 
				do_action( 
					'maximo_' . $elements . '_element', 
					array(
						'section' => 'top-header',
						'position' => 'left'
					) 
				); ?>
			</div>
			<?php
		}
	}
}
add_action( 'maximo_top_header_left_element', 'maximo_top_header_left_element_template' );


if ( ! function_exists( 'maximo_top_header_right_element_template' ) ) {

	function maximo_top_header_right_element_template() {

		$display_top_header_right_elements = maximo_get_option( 'display_top_header_right_element' );

		if ( $display_top_header_right_elements === false ) {
			return;
		}

		$elements = maximo_get_option( 'top_header_right_element' );

		if ( $elements ) {
			?>
			<div class="maximo-col-lg">
				<?php 
				do_action( 
					'maximo_' . $elements . '_element', 
					array(
						'section' => 'top-header',
						'position' => 'right'
					) 
				); ?>
			</div>
			<?php
		}
	}
}
add_action( 'maximo_top_header_right_element', 'maximo_top_header_right_element_template' );


if ( ! function_exists( 'maximo_text_element_template' ) ) {

	function maximo_text_element_template( $location ) {

		$customizer_defaults = maximo_get_customizer_defaults();

		$args = array(
			'classes' => array( 'maximo-text-element' ),
			'content' => ''
		);

		if ( $location['section'] == 'top-header' ) {

			$args['classes'][] = 'maximo-top-header-element';

			$args['classes'][] = ( $location['position'] == 'left' ) ? 'maximo-top-header-left-element' : 'maximo-top-header-right-element';

			$args['classes'][] = maximo_get_option( 'top_header_text_visibility' ) ? maximo_get_option( 'top_header_text_visibility' ) : $customizer_defaults['top_header_text_visibility'];

			$args['content'] = maximo_get_option( 'top_header_text' ) ? maximo_get_option( 'top_header_text' ) : $customizer_defaults['top_header_text'];
		}

		if ( $location['section'] == 'copyright-bar' ) {

			$args['classes'][] = 'maximo-bottom-footer-element';

			$args['classes'][] = 'maximo-copyright-text-element';

			$args['content'] = maximo_get_option( 'footer_copyright_bar_text' ) ? maximo_get_option( 'footer_copyright_bar_text' ) : '';
		}


		$args['classes'] = apply_filters( 'maximo_text_element_classes', $args['classes'] );

		get_template_part( 'template-parts/elements/element', 'text', $args );
	}
}
add_action( 'maximo_text_element', 'maximo_text_element_template' );


if ( ! function_exists( 'maximo_nav_menu_element_template' ) ) {

	function maximo_nav_menu_element_template( $location ) {

		$customizer_defaults = maximo_get_customizer_defaults();

		$args = array(
			'classes' => array( 'maximo-nav-menu-element' ),
			'menu' => ''
		);

		if ( $location['section'] == 'top-header' ) {

			$args['classes'][] = 'maximo-top-header-element';

			$args['classes'][] = ( $location['position'] == 'left' ) ? 'maximo-top-header-left-element' : 'maximo-top-header-right-element';

			$args['classes'][] = maximo_get_option( 'top_header_nav_menu_visibility' ) ? maximo_get_option( 'top_header_nav_menu_visibility' ) : $customizer_defaults['top_header_nav_menu_visibility'];

			$nav_menu_id = maximo_get_option( 'top_header_nav_menu' );

			$nav_menu_slug = maximo_get_nav_menu_slug( $nav_menu_id );

			if ( $nav_menu_slug ) {

				$args['menu'] = $nav_menu_slug;
			}
		}

		if ( $location['section'] == 'copyright-bar' ) {

			$args['classes'][] = 'maximo-bottom-footer-element';

			$args['classes'][] = 'maximo-copyright-nav-menu-element';

			$nav_menu_id = maximo_get_option( 'footer_copyright_bar_nav_menu' );

			$nav_menu_slug = maximo_get_nav_menu_slug( $nav_menu_id );

			if ( $nav_menu_slug ) {

				$args['menu'] = $nav_menu_slug;
			}
		}

		$args['classes'] = apply_filters( 'maximo_nav_menu_element_classes', $args['classes'] );

		get_template_part( 'template-parts/elements/element', 'nav-menu', $args );
	}
}
add_action( 'maximo_nav_menu_element', 'maximo_nav_menu_element_template' );


if ( ! function_exists( 'maximo_social_menu_element_template' ) ) {

	function maximo_social_menu_element_template( $location ) {

		$customizer_defaults = maximo_get_customizer_defaults();

		$args = array(
			'classes' => array( 'maximo-social-menu-element' ),
			'menu' => ''
		);

		if ( $location['section'] == 'top-header' ) {

			$args['classes'][] = 'maximo-top-header-element';

			$args['classes'][] = ( $location['position'] == 'left' ) ? 'maximo-top-header-left-element' : 'maximo-top-header-right-element';

			$args['classes'][] = maximo_get_option( 'top_header_social_menu_visibility' ) ? maximo_get_option( 'top_header_social_menu_visibility' ) : $customizer_defaults['top_header_social_menu_visibility'];


			$args['classes'][] = maximo_get_option( 'top_header_display_social_menu_title' ) ? 'maximo-social-menu-title-displayed' : '';

			$nav_menu_id = maximo_get_option( 'top_header_social_menu' );

			$nav_menu_slug = maximo_get_nav_menu_slug( $nav_menu_id );

			if ( $nav_menu_slug ) {

				$args['menu'] = $nav_menu_slug;
			}
		}

		if ( $location['section'] == 'copyright-bar' ) {

			$args['classes'][] = 'maximo-bottom-footer-element';

			$args['classes'][] = 'maximo-copyright-social-menu-element';

			$args['classes'][] = maximo_get_option( 'footer_copyright_bar_display_social_menu_title' ) ? 'maximo-social-menu-title-displayed' : '';

			$nav_menu_id = maximo_get_option( 'footer_copyright_bar_social_menu' );

			$nav_menu_slug = maximo_get_nav_menu_slug( $nav_menu_id );

			if ( $nav_menu_slug ) {

				$args['menu'] = $nav_menu_slug;
			}
		}

		$args['classes'] = apply_filters( 'maximo_nav_menu_element_classes', $args['classes'] );

		get_template_part( 'template-parts/elements/element', 'social-menu', $args );
	}
}
add_action( 'maximo_social_menu_element', 'maximo_social_menu_element_template' );