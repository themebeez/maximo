<?php

if ( ! function_exists( 'maximo_color_themes' ) ) {

	function maximo_color_themes() {
		return apply_filters(
			'maximo_color_themes_list',
			array(
				'maximo-theme-light' => esc_html__( 'Default (Light)', 'maximo' ),
				'maximo-theme-dark' => esc_html__( 'Dark', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_button_styles' ) ) {

	function maximo_button_styles() {
		return apply_filters(
			'maximo_button_styles_list',
			array(
				'default' => esc_html__( 'Default', 'maximo' ),
				'rounded' => esc_html__( 'Rounded', 'maximo' ),
			)
		);
	}
}

if ( ! function_exists( 'maximo_banner_display_choices' ) ) {
	/**
     * Get banner display choices on different pages
     *
     * @since 1.0.0
     *
     * @param null.
     * @return array.
     */
	function maximo_banner_display_choices() {

		return array(
			'blog_page' => esc_html__( 'Blog Page', 'maximo' ),
			'front_page' => esc_html__( 'Static Front Page', 'maximo' ),
			'blog_and_front' => esc_html__( 'Blog Page &amp; Static Front Page', 'maximo' ),
		);
	}
}


if ( ! function_exists( 'maximo_banner_width_choices' ) ) {

	function maximo_banner_width_choices() {

		$banner_widths = array(
			'maximo-banner-content-width' => esc_html__( 'Content Width', 'maximo' ),
			'maximo-banner-fullwidth' => esc_html__( 'Full Width', 'maximo' )
		);

		if ( maximo_get_option( 'site_layout' ) !== 'maximo-fullwidth-stretched' || maximo_get_option( 'site_layout' ) !== 'maximo-boxed' ) {
			$banner_widths['maximo-banner-wide-width'] = esc_html__( 'Wide Width', 'maximo' );
		}

		return apply_filters( 'maximo_banner_widths', $banner_widths );
	}
}


if( ! function_exists( 'maximo_get_header_layouts' ) ) {
	/**
     * Get sidebar positions.
     *
     * @since 1.0.0
     *
     * @param null.
     * @return array.
     */
	function maximo_get_header_layouts() {

		return apply_filters( 
			'maximo_header_layouts_array', 
			array(
				'header_1' 	=> get_template_directory_uri() . '/customizer/assets/images/header-layout-1.png',
				'header_2' => get_template_directory_uri() . '/customizer/assets/images/header-layout-2.png',
			)
		);
	}
}


if ( ! function_exists( 'maximo_font_types' ) ) {

	function maximo_font_types() {

		return array(
			'system_font' => esc_html__( 'Web Safe Font', 'maximo' ),
			'google_font' => esc_html__( 'Google Font', 'maximo' )
		);
	}
}


if ( ! function_exists( 'maximo_get_standard_fonts' ) ) {

	function maximo_get_standard_fonts() {

		return apply_filters( 
			'maximo_standard_fonts_array',  
			array(
				'arial' => 'Arial, Helvetica Neue, Helvetica, sans-serif',
				'baskerville' => 'Baskerville, Baskerville Old Face, Garamond, Times New Roman, serif',
				'bodoni' => 'Bodoni MT, Bodoni 72, Didot, Didot LT STD, Hoefler Text, Garamond, Times New Roman, serif',
				'bookman_old_style' => 'Bookman Old Style, serif',
				'calibri' => 'Calibri, Candara, Segoe, Segoe UI, Optima, Arial, sans-serif',
				'calisto_mt' => 'Calisto MT, Bookman Old Style, Bookman, Goudy Old Style, Garamond, Hoefler Text, Bitstream Charter, Georgia, serif',
				'cambria' => 'Cambria, Georgia, serif',
				'candara' => 'Candara, Calibri, Segoe, Segoe UI, Optima, Arial, sans-serif',
				'century_gothic' => 'Century Gothic, CenturyGothic, AppleGothic, sans-serif',
				'consolas' => 'Consolas, monaco, monospace',
				'copperplate' => 'Copperplate, Copperplate Gothic Light, fantasy',
				'courier_new' => 'Courier New, Courier, Lucida Sans Typewriter, Lucida Typewriter, monospace',
				'dejavu_sans' => 'Dejavu Sans, Arial, Verdana, sans-serif',
				'didot' => 'Didot, Didot LT STD, Hoefler Text, Garamond, Calisto MT, Times New Roman, serif',
				'franklin_gothic' => 'Franklin Gothic, Arial Bold',
				'garamond' => 'Garamond, Baskerville, Baskerville Old Face, Hoefler Text, Times New Roman, serif',
				'georgia' => 'Georgia, Times, Times New Roman, serif',
				'gill_sans' => 'Gill Sans, Gill Sans MT, Calibri, sans-serif',
				'goudy_old_style' => 'Goudy Old Style, Garamond, Big Caslon, Times New Roman, serif',
				'helvetica' => 'Helvetica Neue, Helvetica, Arial, sans-serif',
				'impact' => 'Impact, Charcoal, Helvetica Inserat, Bitstream Vera Sans Bold, Arial Black, sans serif',
				'lucida_bright' => 'Lucida Bright, Georgia, serif',
				'lucida_sans' => 'Lucida Sans, Helvetica, Arial, sans-serif',
				'ms_sans_serif' => 'MS Sans Serif, sans-serif',
				'optima' => 'Optima, Segoe, Segoe UI, Candara, Calibri, Arial, sans-serif',
				'palatino' => 'Palatino, Palatino Linotype, Palatino LT STD, Book Antiqua, Georgia, serif',
				'perpetua' => 'Perpetua, Baskerville, Big Caslon, Palatino Linotype, Palatino, serif',
				'rockwell' => 'Rockwell, Courier Bold, Courier, Georgia, Times, Times New Roman, serif',
				'segoe_ui' => 'Segoe UI, Frutiger, Dejavu Sans, Helvetica Neue, Arial, sans-serif',
				'tahoma' => 'Tahoma, Verdana, Segoe, sans-serif',
				'times_new_roman' => 'Times New Roman, Times, serif',
				'trebuchet_ms' => ' Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, sans-serif',
				'Verdana' => 'Verdana, Geneva, sans-serif'
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_standard_font_weights' ) ) {

	function maximo_get_standard_font_weights() {

		return apply_filters( 
			'maximo_standard_font_weights_array',  
			array(
				'inherit' => esc_html__( 'Inherit', 'maximo' ),
				'300' => esc_html__( 'Light', 'maximo' ),
				'400' => esc_html__( 'Regular', 'maximo' ),
				'500' => esc_html__( 'Medium', 'maximo' ),
				'600' => esc_html__( 'Semi Bold', 'maximo' ),
				'700' => esc_html__( 'Bold', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_text_transforms' ) ) {

	function maximo_get_text_transforms() {

		return apply_filters( 
			'maximo_text_transforms_array',  
			array(
				'inherit' => esc_html__( 'Inherit', 'maximo' ),
				'uppercase' => esc_html__( 'Uppercase', 'maximo' ),
				'lowercase' => esc_html__( 'Lowercase', 'maximo' ),
				'capitalize' => esc_html__( 'Capitalize', 'maximo' ),
			)
		);
	}
}

if ( ! function_exists( 'maximo_get_site_layouts' ) ) {

	function maximo_get_site_layouts() {

		return apply_filters( 
			'maximo_site_layouts_array',  
			array(
				'maximo-fullwidth-contained' => esc_html__( 'Fullwidth: Contained', 'maximo' ),
				'maximo-fullwidth-stretched' => esc_html__( 'Fullwidth: Stretched', 'maximo' ),
				'maximo-boxed-contain' => esc_html__( 'Boxed: Contain', 'maximo' ),
				'maximo-boxed' => esc_html__( 'Boxed', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_device_visibility' ) ) {

	function maximo_get_device_visibility() {

		return apply_filters( 
			'maximo_device_visibility_array',  
			array(
				'default' => esc_html__( 'Show On All Devices', 'maximo' ),
				'hide-mobile' => esc_html__( 'Hide On Mobile', 'maximo' ),
				'hide-tablet' => esc_html__( 'Hide On Tablet', 'maximo' ),
				'hide-mobile-tablet' => esc_html__( 'Hide On Mobile And Tablet', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_general_pages' ) ) {

	function maximo_get_general_pages() {

		$general_pages = array(
			'blog_page' => esc_html__( 'Blog Page', 'maximo' ),
			'archive_page' => esc_html__( 'Archive Page', 'maximo' ),
			'search_page' => esc_html__( 'Search Page', 'maximo' ),
			'post_single' => esc_html__( 'Post Single', 'maximo' ),
			'page_single' => esc_html__( 'Page Single', 'maximo' ),
			'page_404' => esc_html__( '404 Page', 'maximo' ),
		);

		if ( class_exists( 'WooCommerce' ) ) {

			$woocommerce_pages = array(
				'product_archive' => esc_html__( 'Product Archive', 'maximo' ),
				'product_single' => esc_html__( 'Product Single', 'maximo' ),
			);

			$general_pages = array_merge( $general_pages, $woocommerce_pages );
		}

		return apply_filters( 
			'maximo_general_pages_array',
			$general_pages
		);
	}
}

if ( ! function_exists( 'maximo_get_page_header_background_choices' ) ) {

	function maximo_get_page_header_background_choices() {

		return apply_filters( 
			'maximo_page_header_background_choices_array', 
			array(
				'color' => esc_html__( 'Color', 'maximo' ),
				'gradient' => esc_html__( 'Gradient', 'maximo' ),
				'image' => esc_html__( 'Image', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_background_repeat_choices' ) ) {

	function maximo_get_background_repeat_choices() {

		return apply_filters( 
			'maximo_background_repeat_choices_array', 
			array(
				'no-repeat' => esc_html__( 'No Repeat', 'maximo' ),
				'repeat' => esc_html__( 'Repeat', 'maximo' ),
				'repeat-x' => esc_html__( 'Tile Horizontally', 'maximo' ),
				'repeat-y' => esc_html__( 'Tile Vertically', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_background_size_choices' ) ) {

	function maximo_get_background_size_choices() {

		return apply_filters( 
			'maximo_get_background_size_choices_array', 
			array(
				'auto' => esc_html__( 'Default', 'maximo' ),
				'cover' => esc_html__( 'Cover', 'maximo' ),
				'contain' => esc_html__( 'Contain', 'maximo' )
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_background_attachment_choices' ) ) {

	function maximo_get_background_attachment_choices() {

		return apply_filters( 
			'maximo_get_background_attachment_choices_array', 
			array(
				'scroll' => esc_html__( 'Scroll', 'maximo' ),
				'fixed' => esc_html__( 'Fixed', 'maximo' ),
			)
		);
	}
}

if ( ! function_exists( 'maximo_get_background_position_choices' ) ) {

	function maximo_get_background_position_choices() {

		return apply_filters( 
			'maximo_get_background_position_choices_array', 
			array(
				'left-top' => esc_html__( 'Left Top', 'maximo' ),
				'left-center' => esc_html__( 'Left Center', 'maximo' ),
				'left-right' => esc_html__( 'Left Right', 'maximo' ),
				'right-top' => esc_html__( 'Right Top', 'maximo' ),
				'right-center' => esc_html__( 'Right Center', 'maximo' ),
				'right-bottom' => esc_html__( 'Right Bottom', 'maximo' ),
				'center-top' => esc_html__( 'Center Top', 'maximo' ),
				'center-center' => esc_html__( 'Center Center', 'maximo' ),
				'center-bottom' => esc_html__( 'Center Bottom', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_content_positions' ) ) {

	function maximo_get_content_positions() {

		return apply_filters( 
			'maximo_content_positions_array', 
			array(
				'top' => esc_html__( 'Top', 'maximo' ),
				'center' => esc_html__( 'Center', 'maximo' ),
				'bottom' => esc_html__( 'Bottom', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_alignments' ) ) {

	function maximo_get_alignments() {

		return apply_filters( 
			'maximo_get_alignments_array', 
			array(
				'left' => esc_html__( 'Left', 'maximo' ),
				'center' => esc_html__( 'Center', 'maximo' ),
				'right' => esc_html__( 'Right', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_page_header_image_choices' ) ) {

	function maximo_get_page_header_image_choices() {

		return apply_filters( 
			'maximo_get_page_header_background_image_choices_array', 
			array(
				'page-image' => esc_html__( 'Page&rsquo;s Image', 'maximo' ),
				'normal-image' => esc_html__( 'Header Image', 'maximo' )
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_page_header_background_image_choices' ) ) {

	function maximo_get_page_header_background_image_choices() {

		return apply_filters( 
			'maximo_get_page_header_background_image_choices_array', 
			array(
				'default' => esc_html__( 'Default', 'maximo' ),
				'normal-image' => esc_html__( 'Header Image', 'maximo' )
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_slider_pagination_styles' ) ) {

	function maximo_get_slider_pagination_styles() {

		return apply_filters( 
			'maximo_slider_pagination_styles_array',  
			array(
				'default' => esc_html__( 'Default', 'maximo' ),
				'dynamic' => esc_html__( 'Dynamic', 'maximo' ),
				'progress' => esc_html__( 'Progress', 'maximo' ),
				'fraction' => esc_html__( 'Fraction', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_overlay_styles' ) ) {

	function maximo_get_overlay_styles() {

		return apply_filters( 
			'maximo_overlay_style_array',  
			array(
				'full' => esc_html__( 'Full', 'maximo' ),
				'partial' => esc_html__( 'Partial', 'maximo' ),
				'none' => esc_html__( 'None', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_container_widths' ) ) {

	function maximo_get_container_widths() {

		return apply_filters( 
			'maximo_container_widths_array',  
			array(
				'maximo-content-width' => esc_html__( 'Content Width', 'maximo' ),
				'maximo-fullwidth' => esc_html__( 'Full Width', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_content_widths' ) ) {

	function maximo_content_widths() {

		return apply_filters( 
			'maximo_content_widths_array',  
			array(
				'maximo-content-width' => esc_html__( 'Content Width', 'maximo' ),
				'maximo-narrow-width' => esc_html__( 'Narrow Width', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_top_header_elements' ) ) {

	function maximo_get_top_header_elements() {

		return apply_filters( 
			'maximo_top_header_elements_array',  
			array(
				'text' => esc_html__( 'Text', 'maximo' ),
				'nav_menu' => esc_html__( 'Navigation Menu', 'maximo' ),
				'social_menu' => esc_html__( 'Social Links', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_main_header_elements' ) ) {

	function maximo_get_main_header_elements() {

		$main_header_elements = array(
			'search' => esc_html__( 'Search', 'maximo' ),
			'button' => esc_html__( 'Button', 'maximo' ),
		);

		if ( class_exists( 'WooCommerce' ) ) {

			$main_header_elements['cart'] = esc_html__( 'Cart', 'maximo' );
		}

		if ( class_exists( 'Addonify_Wishlist' ) || defined( 'YITH_WCWL' ) ) {

			$main_header_elements['wishlist'] = esc_html__( 'Wishlist', 'maximo' );
		}

		return apply_filters( 
			'maximo_main_header_elements_array',  
			$main_header_elements
		);
	}
}

if ( ! function_exists( 'maximo_get_main_header_elements_separators' ) ) {

	function maximo_get_main_header_elements_separators() {

		return apply_filters( 
			'maximo_main_header_elements_separators_array',  
			array(
				'none' => esc_html__( 'None', 'maximo' ),
				'bar' => esc_html__( 'Bar', 'maximo' ),
				'slanted-bar' => esc_html__( 'Slanted Bar', 'maximo' ),
			)
		);
	}
}

if ( ! function_exists( 'maximo_get_banner_slider_choices' ) ) {

	function maximo_get_banner_slider_choices() {

		return apply_filters( 
			'maximo_banner_slider_choices_array',  
			array(
				'banner' => esc_html__( 'Banner', 'maximo' ),
				'slider' => esc_html__( 'Slider', 'maximo' )
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_archive_layouts' ) ) {

	function maximo_get_archive_layouts() {

		return apply_filters( 
			'maximo_archive_layouts_array',  
			array(
				'horizontal-list' => esc_html__( 'Horizontal List', 'maximo' ),
				'fullwidth' => esc_html__( 'Full Width', 'maximo' )
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_pagination_layouts' ) ) {

	function maximo_get_pagination_layouts() {

		return apply_filters( 
			'maximo_pagination_layouts_array',  
			array(
				'default' => esc_html__( 'Default', 'maximo' ),
				'numeric' => esc_html__( 'Numeric', 'maximo' )
			)
		);
	}
}

if ( ! function_exists( 'maximo_get_archive_post_structure_fullwidth' ) ) {

	function maximo_get_archive_post_structure_fullwidth() {

		return apply_filters( 
			'maximo_archive_post_structure_fullwidth_array',  
			array(
				'image' => esc_html__( 'Featured Image', 'maximo' ),
				'category' => esc_html__( 'Categories', 'maximo' ),
				'title' => esc_html__( 'Title', 'maximo' ),
				'meta' => esc_html__( 'Meta', 'maximo' ),
				'excerpt' => esc_html__( 'Excerpt', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_archive_post_structure_horizontal_list' ) ) {

	function maximo_get_archive_post_structure_horizontal_list() {

		return apply_filters( 
			'maximo_archive_post_structure_horizontal_list_array',  
			array(
				'category' => esc_html__( 'Categories', 'maximo' ),
				'title' => esc_html__( 'Title', 'maximo' ),
				'meta' => esc_html__( 'Meta', 'maximo' ),
				'excerpt' => esc_html__( 'Excerpt', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_archive_post_thumbnail_position' ) ) {

	function maximo_get_archive_post_thumbnail_position() {

		return apply_filters( 
			'maximo_archive_post_thumbnail_position_array',  
			array(
				'left' => esc_html__( 'Left', 'maximo' ),
				'right' => esc_html__( 'Right', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_single_content_widths' ) ) {

	function maximo_get_single_content_widths() {

		return apply_filters( 
			'maximo_single_content_widths_array',  
			array(
				'content_width' => esc_html__( 'Content Width', 'maximo' ),
				'narrow_width' => esc_html__( 'Narrow Width', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_single_post_elements' ) ) {

	function maximo_get_single_post_elements() {

		return apply_filters( 
			'maximo_single_post_elements_array',  
			array(
				'image' => esc_html__( 'Featured Image', 'maximo' ),
				'category' => esc_html__( 'Post Categories', 'maximo' ),
				'tags' => esc_html__( 'Post Tags', 'maximo' ),
				'updated_date' => esc_html__( 'Last Updated Date', 'maximo' ),
				'author_box' => esc_html__( 'Author Box', 'maximo' ),
				'post_nav' => esc_html__( 'Post Navigation Links', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_post_meta_structure' ) ) {

	function maximo_get_post_meta_structure() {

		return apply_filters( 
			'maximo_post_meta_structure_array',  
			array(
				'author' => esc_html__( 'Author', 'maximo' ),
				'date' => esc_html__( 'Publish Date', 'maximo' ),
				'comment' => esc_html__( 'Comments', 'maximo' ),
				'categories' => esc_html__( 'Categories', 'maximo' ),
			)
		);
	}
}

if ( ! function_exists( 'maximo_breadcrumb_sources' ) ) {

	function maximo_breadcrumb_sources() {

		$sources = array(
			'default' => esc_html__( 'Default', 'maximo' ),
		);

		if ( function_exists( 'yoast_breadcrumb' ) ) {
			$sources['yoast'] = esc_html__( 'Yoast SEO', 'maximo' );
		}

		if ( function_exists( 'rank_math' ) && rank_math()->settings->get( 'general.breadcrumbs' ) ) {
			$sources['rank_math'] = esc_html__( 'Rank Math', 'maximo' );
		}

		if ( function_exists( 'bcn_display' ) ) {
			$sources['bcn'] = esc_html__( 'Breadcrumb NavXT', 'maximo' );
		}

		return apply_filters( 'maximo_breadcrumb_sources', $sources );
	}
}

if ( ! function_exists( 'maximo_get_breadcrumb_positions' ) ) {

	function maximo_get_breadcrumb_positions() {

		return apply_filters( 
			'maximo_breadcrumb_positions_array',  
			array(
				'default' => esc_html__( 'Default (Separate Container)', 'maximo' ),
				'page_header' => esc_html__( 'Inside Page Header', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_breadcrumb_page_header_positions' ) ) {

	function maximo_get_breadcrumb_page_header_positions() {

		return apply_filters( 
			'maximo_breadcrumb_page_header_positions_array',  
			array(
				'before' => esc_html__( 'Before Post Header', 'maximo' ),
				'after' => esc_html__( 'After Post Header', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_gradient_choices' ) ) {

	function maximo_get_gradient_choices() {

		return apply_filters(
			'maximo_gradient_choices',
			array(
				'linear' => esc_html__( 'Linear', 'maximo' ),
				'radial' => esc_html__( 'Radial', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_radial_gradient_positions' ) ) {

	function maximo_get_radial_gradient_positions() {

		return apply_filters(
			'maximo_get_radial_gradient_positions',
			array(
				'center_center' => esc_html__( 'Center Center', 'maximo' ),
				'center_left' => esc_html__( 'Center Left', 'maximo' ),
				'center_right' => esc_html__( 'Center Right', 'maximo' ),
				'top_center' => esc_html__( 'Top Center', 'maximo' ),
				'top_left' => esc_html__( 'Top Left', 'maximo' ),
				'top_right' => esc_html__( 'Top Right', 'maximo' ),
				'bottom_center' => esc_html__( 'Bottom Center', 'maximo' ),
				'bottom_left' => esc_html__( 'Bottom Left', 'maximo' ),
				'bottom_right' => esc_html__( 'Bottom Right', 'maximo' )
			)
		);
	}
}	


if ( ! function_exists( 'maximo_get_default_sidebar_positions' ) ) {

	function maximo_get_default_sidebar_positions() {

		return apply_filters( 
			'maximo_sidebar_default_positions_array',  
			array(
				'no-sidebar' => esc_html__( 'No Sidebar', 'maximo' ),
				'left-sidebar' => esc_html__( 'Left Sidebar', 'maximo' ),
				'right-sidebar' => esc_html__( 'Right Sidebar', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_sidebar_positions' ) ) {

	function maximo_get_sidebar_positions() {

		return apply_filters( 
			'maximo_sidebar_positions_array',  
			array(
				'default' => esc_html__( 'Default', 'maximo' ),
				'no-sidebar' => esc_html__( 'No Sidebar', 'maximo' ),
				'left-sidebar' => esc_html__( 'Left Sidebar', 'maximo' ),
				'right-sidebar' => esc_html__( 'Right Sidebar', 'maximo' ),
			)
		);
	}
}



if ( ! function_exists( 'maximo_get_sidebar_styles' ) ) {

	function maximo_get_sidebar_styles() {

		return apply_filters( 
			'maximo_sidebar_styles_array',  
			array(
				'default' => esc_html__( 'Default', 'maximo' ),
				'widget-separated' => esc_html__( 'Widget Separated', 'maximo' ),
			)
		);
	}
}

if ( ! function_exists( 'maximo_get_responsive_sidebar_positions' ) ) {

	function maximo_get_responsive_sidebar_positions() {

		return apply_filters( 
			'maximo_responsive_sidebar_positions_array',  
			array(
				'hide' => esc_html__( 'Hide', 'maximo' ),
				'before' => esc_html__( 'Before Content', 'maximo' ),
				'after' => esc_html__( 'After Content', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_footer_widget_columns' ) ) {

	function maximo_get_footer_widget_columns() {

		return apply_filters( 
			'maximo_footer_widget_columns_array',  
			array(
				'2' => esc_html__( 'Two', 'maximo' ),
				'3' => esc_html__( 'Three', 'maximo' ),
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_footer_widget_2_columns_variations' ) ) {

	function maximo_get_footer_widget_2_columns_variations() {

		return apply_filters( 
			'maximo_footer_widget_2_columns_variations_array',  
			array(
				'variation_1' 	=> get_template_directory_uri() . '/customizer/assets/images/footer-2-1.png',
				'variation_2' => get_template_directory_uri() . '/customizer/assets/images/footer-2-2.png',
				'variation_3' 	=> get_template_directory_uri() . '/customizer/assets/images/footer-2-3.png',
			)
		);
	}
}

if ( ! function_exists( 'maximo_get_footer_widget_3_columns_variations' ) ) {

	function maximo_get_footer_widget_3_columns_variations() {

		return apply_filters( 
			'maximo_footer_widget_3_columns_variations_array',  
			array(
				'variation_1' 	=> get_template_directory_uri() . '/customizer/assets/images/footer-3-1.png',
				'variation_2' => get_template_directory_uri() . '/customizer/assets/images/footer-3-2.png',
				'variation_3' 	=> get_template_directory_uri() . '/customizer/assets/images/footer-3-3.png',
				'variation_4' 	=> get_template_directory_uri() . '/customizer/assets/images/footer-3-4.png',
			)
		);
	}
}

if ( ! function_exists( 'maximo_get_footer_copyright_bar_layouts' ) ) {

	function maximo_get_footer_copyright_bar_layouts() {

		return apply_filters( 
			'maximo_footer_copyright_bar_layouts_array',  
			array(
				'variation_1' 	=> get_template_directory_uri() . '/customizer/assets/images/copyright-1.png',
				'variation_2' => get_template_directory_uri() . '/customizer/assets/images/copyright-2.png',
			)
		);
	}
}


if ( ! function_exists( 'maximo_get_categories' ) ) {

	function maximo_get_categories() {

		$taxonomy = 'category';

		$cat_terms = get_terms( $taxonomy );

		$categories = array();

		foreach( $cat_terms as $cat_term ) {

			$categories[$cat_term->term_id] = $cat_term->name;
		}

		return apply_filters( 'maximo_categories_dropdown_array', $categories );
	}
}


if ( ! function_exists( 'maximo_get_nav_menus' ) ) {

	function maximo_get_nav_menus() {

		$nav_menus = array();

		$nav_terms = wp_get_nav_menus();

		foreach ( $nav_terms as $menu ) {

			$nav_menus[ $menu->term_id ] = ucwords( $menu->name );
		}

		return apply_filters( 'maximo_nav_menus_array', $nav_menus );
	}
}


if ( ! function_exists( 'maximo_get_thumbnail_sizes' ) ) {

	function maximo_get_thumbnail_sizes() {

		global $_wp_additional_image_sizes;

		$default_image_sizes = get_intermediate_image_sizes();

		foreach ( $default_image_sizes as $size ) {
			$image_sizes[ $size ]['width']  = intval( get_option( "{$size}_size_w" ) );
			$image_sizes[ $size ]['height'] = intval( get_option( "{$size}_size_h" ) );
			$image_sizes[ $size ]['crop']   = get_option( "{$size}_crop" ) ? get_option( "{$size}_crop" ) : false;
		}

		if ( isset( $_wp_additional_image_sizes ) && count( $_wp_additional_image_sizes ) ) {
			$image_sizes = array_merge( $image_sizes, $_wp_additional_image_sizes );
		}

		$image_sizes['full'] = array(
			'width'  => '',
			'height' => '',
			'crop'   => '',
		);

		$size_choices = array();

		if ( ! empty( $image_sizes ) ) {
			foreach ( $image_sizes as $key => $value ) {
				$name = ucwords( str_replace( array( '-', '_' ), ' ', $key ) );

				$size_choices[ $key ] = $name;

				if ( $value['width'] || $value['height'] ) {
					$size_choices[ $key ] .= ' (' . $value['width'] . 'x' . $value['height'] . ')';
				}
			}
		}

		return apply_filters(  
			'maximo_thumbnail_sizes_array', 
			$size_choices 
		);
	}
}



if ( ! function_exists( 'maximo_copyright_position_choices' ) ) {

	function maximo_copyright_position_choices() {

		return array(
			'left' => esc_html__( 'Left', 'maximo' ),
			'right' => esc_html__( 'Right', 'maximo' )
		);
	}
}