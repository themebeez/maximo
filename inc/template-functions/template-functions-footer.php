<?php

if ( ! function_exists( 'maximo_footer_base_template' ) ) {

	function maximo_footer_base_template() {

		if ( is_single() ) {

			$is_default_footer_disabled = get_post_meta( get_the_ID(), 'maximo_post_disable_default_footer', true );

			if ( $is_default_footer_disabled ) {

				return;
			}
		}

		if ( is_page() ) {

			$is_default_footer_disabled = get_post_meta( get_the_ID(), 'maximo_post_disable_default_footer', true );

			if ( $is_default_footer_disabled ) {
				
				return;
			}
		}

		$args = array(
			'classes' => array( 'maximo-site-footer' )
		);

		$args = apply_filters( 'maximo_footer_base_args', $args );

		get_template_part( 'template-parts/footer/footer', 'base', $args );
	}
}
add_action( 'maximo_footer_base', 'maximo_footer_base_template' );


if ( ! function_exists( 'maximo_footer_content_template' ) ) {

	function maximo_footer_content_template() {

		do_action( 'maximo_footer_widgets' );

		do_action( 'maximo_footer_copyright' );
	}
}
add_action( 'maximo_footer_content', 'maximo_footer_content_template' );


if ( ! function_exists( 'maximo_footer_widgets_template' ) ) {

	function maximo_footer_widgets_template() {

		if ( ! maximo_get_option( 'display_footer_widgets' ) ) {
			return;
		}

		$customizer_defaults = maximo_get_customizer_defaults();

		$args = array(
			'classes' => array( 'maximo-footer-widgets-area' ),
			'widget_columns_no' => maximo_get_option( 'footer_widgets_columns' ) ? absint( maximo_get_option( 'footer_widgets_columns' ) ) : absint( $customizer_defaults['footer_widgets_columns'] ),
			'widget_column_class' => array(),
		);


		$args['classes'][] = maximo_get_option( 'footer_widgets_visibility' ) ? maximo_get_option( 'footer_widgets_visibility' ) : $customizer_defaults['footer_widgets_visibility'];

		$args['classes'][] = maximo_get_option( 'footer_widgets_width' ) ? maximo_get_option( 'footer_widgets_width' ) : $customizer_defaults['footer_widgets_width'];

		if ( $args['widget_columns_no'] == 2 ) {

			$args['classes'][] = 'maximo-two-columns-footer-widgets';

			$layout = maximo_get_option( 'footer_widget_2_columns_layout' );

			switch ( $layout ) {
				case 'variation_1' :
					$args['classes'][] = 'maximo-two-columns-layout-1';
					$args['widget_column_class'] = [ 'maximo-col-lg-6', 'maximo-col-lg-6' ];
					break;
				case 'variation_2' :
					$args['classes'][] = 'maximo-two-columns-layout-2';
					$args['widget_column_class'] = [ 'maximo-col-lg-4', 'maximo-col-lg-8' ];
					break;
				default :
					$args['classes'][] = 'maximo-two-columns-layout-3';
					$args['widget_column_class'] = [ 'maximo-col-lg-8', 'maximo-col-lg-4' ];
			}
		}

		if ( $args['widget_columns_no'] == 3 ) {

			$args['classes'][] = 'maximo-three-columns-footer-widgets';

			$layout = maximo_get_option( 'footer_widget_3_columns_layout' );

			switch ( $layout ) {
				case 'variation_1' :
					$args['classes'][] = 'maximo-three-columns-layout-1';
					$args['widget_column_class'] = [ 'maximo-col-lg-4', 'maximo-col-lg-4', 'maximo-col-lg-4' ];
					break;
				case 'variation_2' :
					$args['classes'][] = 'maximo-three-columns-layout-2';
					$args['widget_column_class'] = [ 'maximo-col-lg-3', 'maximo-col-lg-6', 'maximo-col-lg-3' ];
					break;
				case 'variation_3' :
					$args['classes'][] = 'maximo-three-columns-layout-3';
					$args['widget_column_class'] = [ 'maximo-col-lg-6', 'maximo-col-lg-3', 'maximo-col-lg-3' ];
					break;
				default :
					$args['classes'][] = 'maximo-three-columns-layout-4';
					$args['widget_column_class'] = [ 'maximo-col-lg-3', 'maximo-col-lg-3', 'maximo-col-lg-6' ];
			}
		}

		$args = apply_filters( 'maximo_footer_widgets_args', $args );

		get_template_part( 'template-parts/footer/footer', 'widgets', $args );
	}
}
add_action( 'maximo_footer_widgets', 'maximo_footer_widgets_template' );


if ( ! function_exists( 'maximo_footer_copyright_template' ) ) {

	function maximo_footer_copyright_template() {

		$customizer_defaults = maximo_get_customizer_defaults();

		$args = array(
			'classes' => array( 'maximo-footer-copyright-area')
		);

		$args['classes'][] = maximo_get_option( 'footer_copyright_bar_width' ) ? maximo_get_option( 'footer_copyright_bar_width' ) : $customizer_defaults['footer_copyright_bar_width'];

		$copyright_bar_layout = maximo_get_option( 'footer_copyright_bar_layout' ) ? maximo_get_option( 'footer_copyright_bar_layout' ) : $customizer_defaults['footer_copyright_bar_layout'];

		if ( $copyright_bar_layout == 'variation_1' ) {
			$args['classes'][] = 'maximo-footer-copyright-layout-1';
		} else {
			$args['classes'][] = 'maximo-footer-copyright-layout-2';
		}

		$args = apply_filters( 'maximo_footer_copyright_area_args', $args );

		get_template_part( 'template-parts/footer/footer', 'copyright', $args );
	}
}
add_action( 'maximo_footer_copyright', 'maximo_footer_copyright_template' );



if ( ! function_exists( 'maximo_copyright_text_template' ) ) {

	function maximo_copyright_text_template() {

		$customizer_defaults = maximo_get_customizer_defaults();

		$args = array(
			'classes' => array( 'maximo-footer-col' ),
			'copyright_content' => maximo_get_option( 'footer_copyright_text' ) ? maximo_get_option( 'footer_copyright_text' ) : $customizer_defaults['footer_copyright_text']
		);

		if ( maximo_get_option( 'footer_copyright_position' ) == 'left' ) {
			$args['classes'][] = 'col-start';
		} else {
			$args['classes'][] = 'col-end';
		}
		
		$replace = array(
			'{current_year}' => date_i18n( 'Y' ),
			'{site_title}'   => get_bloginfo( 'name' )
		);

		$args['copyright_content'] = str_replace( array_keys($replace), array_values($replace), $args['copyright_content']);

		$args['copyright_content'] .= sprintf( __( ' | %1$s Theme by %2$s.', 'maximo' ), 'Maximo', '<a href="https://themebeez.com" rel="author" target="_blank">Themebeez</a>' );

		$args = apply_filters( 'maximo_footer_copyright_args', $args );

		get_template_part( 'template-parts/elements/element', 'copyright', $args );
	}
}
add_action( 'maximo_copyright_text', 'maximo_copyright_text_template' );

if ( ! function_exists( 'maximo_copyright_bar_element_template' ) ) {

	function maximo_copyright_bar_element_template() {

		$customizer_defaults = maximo_get_customizer_defaults();

		$args = array(
			'classes' => array( 'maximo-footer-col' )
		);

		$copyright_position = maximo_get_option( 'footer_copyright_position' ) ? maximo_get_option( 'footer_copyright_position' ) : $customizer_defaults['footer_copyright_position'];

		$args['classes'][] = ( $copyright_position === 'left' ) ? 'col-end' : 'col-start';

		$args['classes'][] = maximo_get_option( 'footer_copyright_bar_extra_element_visibility' ) ? maximo_get_option( 'footer_copyright_bar_extra_element_visibility' ) : $customizer_defaults['footer_copyright_bar_extra_element_visibility'];

		$copyright_element = maximo_get_option( 'footer_copyright_bar_extra_element' );

		if ( $copyright_element ) {
			?>
			<div class="<?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
				<?php
				do_action( 
					'maximo_' . $copyright_element . '_element', 
					array(
						'section' => 'copyright-bar'
					) 
				);
				?>
			</div>
			<?php
		}
	}
}
add_action( 'maximo_copyright_bar_element', 'maximo_copyright_bar_element_template' );