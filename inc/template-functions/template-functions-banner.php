<?php

if ( ! function_exists( 'maximo_banner_template' ) ) {

	function maximo_banner_template() {

		if ( maximo_get_option( 'enable_banner_slider' ) ) {

			$banner_enabled_page = maximo_get_option( 'banner_slider_enable_on' );

			if ( ! ( is_home() && ( $banner_enabled_page == 'blog_page' || $banner_enabled_page == 'blog_and_front' ) ) || ! ( is_front_page() && ( $banner_enabled_page == 'blog_page' || $banner_enabled_page == 'blog_and_front' ) ) ) {

				return;
			}

		} else {

			return;
		}

		$customizer_defaults = maximo_get_customizer_defaults();

		$args = array(
			'classes' => array(),
			'width' => $customizer_defaults['banner_slider_width']
		);

		$args['width'] = maximo_get_option( 'banner_slider_width' );

		$args['classes'][] = maximo_get_option( 'banner_slider_width' );

		$args['classes'][] = maximo_get_option( 'banner_slider_visibility' );

		$args['classes'] = apply_filters( 'maximo_main_header_classes', $args['classes'] );

		get_template_part( 'template-parts/banner/base', '', $args );
	}
}
add_action( 'maximo_banner', 'maximo_banner_template' );


if ( ! function_exists( 'maximo_slider_banner_template' ) ) {

	function maximo_slider_banner_template() {

		$customizer_defaults = maximo_get_customizer_defaults();

		$args = array(
			'classes' => array( 'maximo-banner-background'),
			'content' => array(
				'posts_no' => $customizer_defaults['banner_slider_post_no'],
				'post_categories' => $customizer_defaults['banner_slider_post_category'],
				'post_meta' => $customizer_defaults['banner_slider_post_meta'],
				'show_meta_icons' => $customizer_defaults['banner_slider_enable_meta_icons'],
				'show_post_categories' => $customizer_defaults['banner_slider_display_categories'],
				'show_post_excerpt' => $customizer_defaults['banner_slider_display_excerpt']
			),
			'button' => array(
				'show_button' => $customizer_defaults['banner_slider_enable_button'],
				'button_label' => $customizer_defaults['banner_slider_button_title'],
				'open_in_new_tab' => $customizer_defaults['banner_slider_open_link_in_new_tab']
			),
			'thumbnail_size' => $customizer_defaults['banner_slider_image_size'],
			'enable_image_overlay' => $customizer_defaults['banner_slider_enable_overlay']
		);

		$args['classes'][] = maximo_get_option( 'banner_slider_content_width' );

		$content_position = maximo_get_option( 'banner_slider_content_position' );

		switch ( $content_position ) {
			case 'top' :
				$args['classes'][] = 'maximo-banner-content-top';
				break;
			case 'bottom' :
				$args['classes'][] = 'maximo-banner-content-bottom';
				break;
			default :
				$args['classes'][] = 'maximo-banner-content-center';
		}

		$text_alignment = maximo_get_option( 'banner_slider_content_alignment' );

		switch ( $text_alignment ) {
			case 'left' :
				$args['classes'][] = 'maximo-text-left';
				break;
			case 'right' :
				$args['classes'][] = 'maximo-text-right';
				break;
			default :
				$args['classes'][] = 'maximo-text-center';
		}

		$args['content']['posts_no'] = maximo_get_option( 'banner_slider_post_no' );

		$args['content']['post_categories'] = maximo_get_option( 'banner_slider_post_category' );

		$args['content']['post_meta'] = maximo_get_option( 'banner_slider_post_meta' );

		$args['content']['show_meta_icons'] = maximo_get_option( 'banner_slider_enable_meta_icons' ) ? true : false;

		$args['content']['show_post_categories'] = maximo_get_option( 'banner_slider_display_categories' ) ? true : false;

		$args['content']['show_post_excerpt'] = maximo_get_option( 'banner_slider_display_excerpt' ) ? true : false;

		$args['button']['show_button'] = maximo_get_option( 'banner_slider_enable_button' ) ? true : false;

		if ( $args['button']['show_button'] ) { 

			$args['button']['button_label'] = maximo_get_option( 'banner_slider_button_title' );

			$args['button']['open_in_new_tab'] = maximo_get_option( 'banner_slider_open_link_in_new_tab' ) ? true : false;
		}

		$args['enable_image_overlay'] = maximo_get_option( 'banner_slider_enable_overlay' ) ? true : false;

		$args['set_image_in_background'] = maximo_get_option( 'banner_slider_set_image_in_background' ) ? true : false;

		$args['image_size'] = maximo_get_option( 'banner_slider_image_size' );

		$args = apply_filters( 'maximo_slider_banner_args', $args );

		get_template_part( 'template-parts/banner/banner', 'slider', $args );
	}
}
add_action( 'maximo_slider_banner', 'maximo_slider_banner_template' );