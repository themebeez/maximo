<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Maximo
 */

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function maximo_pingback_header() {

	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'maximo_pingback_header' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function maximo_body_classes( $classes ) {	

	// If transparent header is enabled, adds class name 'maximo-transparent-header-enabled'. Else, adds class name 'maximo-transparent-header-disabled'.
	$classes[] = maximo_is_transparent_header_activated() ? 'maximo-transparent-header-enabled' : 'maximo-transparent-header-disabled';

	// If dark mode switcher is enabled, adds class name 'maximo-dark-mode-switcher-enabled'. Else, adds class name 'maximo-dark-mode-switcher-disabled'.
	$classes[] = ( maximo_get_option( 'theme_skin' ) !== 'maximo-theme-dark' && maximo_get_option('display_dark_mode_toggle_button') === true ) ? 'maximo-dark-mode-switcher-enabled' : 'maximo-dark-mode-switcher-disabled';

	// If breadcrumb is enabled, adds class name 'maximo-breadcrumbs-enabled'. Else, adds class name 'maximo-breadcrumbs-disabled'.
	$classes[] = maximo_is_breadcrumbs_activated() ? 'maximo-breadcrumbs-enabled' : 'maximo-breadcrumbs-disabled';

	// If page header is enabled, adds class name 'maximo-page-header-enabled'. Else, adds class name 'maximo-page-header-disabled'.
	$classes[] = maximo_is_page_header_activated() ? 'maximo-page-header-enabled' : 'maximo-page-header-disabled';

	// If scroll top button is enabled, adds class name 'maximo-scroll-top-btn-enabled'.
	$classes[] = maximo_get_option( 'enable_scroll_top_button' ) ? 'maximo-scroll-top-btn-enabled' : '';

	// If banner/slider is enabled, adds class name 'maximo-page-header-enabled'.
	$classes[] = maximo_is_banner_activated() ? 'maximo-banner-slider-enabled' : '';

	// If sticky main navigation menu is enabled, adds class name 'maximo-sticky-main-navigation-enabled'.
	$classes[] = maximo_get_option( 'main_navigation_enable_sticky' ) ? 'maximo-sticky-main-navigation-enabled' : '';

	// Check for archive pages excluding WooCommerce pages.
	if ( ( is_home() || is_archive() || is_search() ) && ! maximo_is_woocommerce_page() ) {

		// Get layout used for archive pages.
		$archive_layout = maximo_get_option( 'archive_layout' );

		// Adds class with respective archive layout for archive pages.
		$classes[] = 'maximo-archive-layout-' . $archive_layout;

		// Adds class of 'maximo-content-width', if width of archive page is same as of the container.
		$classes[] =  maximo_get_option( 'archive_content_width' ) ? maximo_get_option( 'archive_content_width' ) : '';
	}

	// If sidebar is active, adds class name 'maximo-has-sidebar'. Else adds class name 'maximo-has-no-sidebar'.
	$classes[] = maximo_is_sidebar_active() ? 'maximo-has-sidebar' : 'maximo-has-no-sidebar';


	// Checks if sidebar is active.
	if ( maximo_is_sidebar_active() ) {

		// Gets sidebar position.
		$sidebar_position = maximo_get_sidebar_position();

		// Adds class names 'maximo-has-left-sidebar' and  'maximo-has-right-sidebar' for sidebar positioned left and right respectively. 
		if ( $sidebar_position == 'left-sidebar' ) {
			$classes[] = 'maximo-has-left-sidebar';
		}

		if ( $sidebar_position == 'right-sidebar' ) {
			$classes[] = 'maximo-has-right-sidebar';
		}

		// If sticky sidebar is enabled, adds class name 'maximo-sticky-sidebar-enabled'.
		$classes[] = maximo_get_option( 'enable_sticky_sidebar' ) ? 'maximo-sticky-sidebar-enabled' : '';

		// Gets sidebar position in mobile devices.
		$sidebar_responsive_position = maximo_get_option( 'sidebar_responsive_position' );

		switch ( $sidebar_responsive_position ) {
			case 'hide' :
				// If sidebar position is hidden in mobile devices, adds class name 'maximo-sidebar-responsive-hidden'.
				$classes[] = 'maximo-sidebar-responsive-hidden';
				break;
			case 'before' :
				// If sidebar position is before the content in mobile devices, adds class name 'maximo-sidebar-before-content'.
				$classes[] = 'maximo-sidebar-before-content';
				break;
			default:
				// If sidebar position is after the content in mobile devices, adds class name 'maximo-sidebar-before-content'.
				$classes[] = 'maximo-sidebar-after-content';
		}
	}

	// Check for no-singular pages.
	if ( ! is_singular() ) {
		// Adds a class of 'hfeed' to non-singular pages.
		$classes[] = 'hfeed';
	}

	// Gets global layout of the site.
	$site_layout = maximo_get_option( 'site_layout' );

	// Check for post and page single.
	if ( is_singular( 'post' ) || is_singular( 'page' ) ) {
		// If comment toggle button is enabled and button label is present, adds class 'maximo-has-togglable-comments-box'.
		$classes[] = ( maximo_get_option( 'single_show_toggle_comments_btn' ) && maximo_get_option( 'single_comment_toggle_btn_title' ) ) ? 'maximo-has-togglable-comments-box' : '';

		// Gets layout of post or page single.
		$single_layout = get_post_meta( get_the_ID(), 'maximo_post_content_layout', true );

		// Checks if single layout is empty or single layout is set to default.
		if ( ! $single_layout || $single_layout === 'default' ) {
			// Adds class of global site layout.
			$classes[] = $site_layout;
		} else {
			// Adds class of single layout.
			$classes[] = $single_layout;
		}
	} else {
		// Adds class of global site layout.
		$classes[] = $site_layout;
	}

	// Check if page is a singular.
	if ( is_singular() ) {
		// Adds necessary class for the selected page width.
		$classes[] = maximo_get_option( 'single_content_width' );
	} else {
		// Adds class name 'hfeed' to non-singular pages.
		$classes[] = 'hfeed';
	}

	if ( is_singular() ) {
		$classes[] = 'maximo-singular';
	}

	return $classes;
}
add_filter( 'body_class', 'maximo_body_classes' );


if( ! function_exists( 'maximo_post_classes' ) ) {
	/**
	 * Adds custom classes to the array of post classes.
	 *
	 * @param array $classes Classes for the article element.
	 * @return array
	 */
	function maximo_post_classes( $classes ) {

		// Returns if page is the WooCommerce page.
		if ( maximo_is_woocommerce_page() ) {
			return $classes;
		}

		// Checks for blog page or archive page or search page.
		if ( is_home() || is_archive() || is_search() ) {

			// Gets selected archive layout.
			$layout = maximo_get_option( 'archive_layout' );

			// Adds needed class according to archive layout. 
			$classes[] = 'maximo-' . $layout . '-layout-item';


			// Adds needed class for post thumbnail positioning.
			$classes[] = 'maximo-thumbnail-' . maximo_get_option( 'archive_post_thumbnail_position' );


			// Gets global site layout.
			$site_layout = maximo_get_option( 'site_layout' );

			// Adds needed class if the site layout is 'maximo-boxed-contain'.
			$classes[] = ( $site_layout == 'maximo-boxed-contain' ) ? 'maximo-boxed-' . $layout . '-article' : '';
		}

		// Checks for singular pages.
		if ( is_singular() ) {

			// Adds class 'maximo-single-content-article'.
			$classes[] = 'maximo-single-content-article';
			
			// Gets the alignment of post title.
			$title_alignment = maximo_get_option( 'single_title_header_alignment' );

			switch ( $title_alignment ) {
				case 'left' :
					// Adds class 'maximo-single-title-left' if the title alignment is left.
					$classes[] = 'maximo-single-title-left';
					break;
				case 'center' :
					// Adds class 'maximo-single-title-center' if the title alignment is center.
					$classes[] = 'maximo-single-title-center';
					break;
				default :
					// By default adds class 'maximo-single-title-right'.
					$classes[] = 'maximo-single-title-right';
			}

			// Gets global site layout.
			$site_layout = maximo_get_option( 'site_layout' );

			// Adds class 'maximo-boxed' if the site layout is 'maximo-boxed-contain'.
			$classes[] = ( $site_layout == 'maximo-boxed-contain' ) ? 'maximo-boxed' : '';			
		}

		return $classes;
	}
}
add_filter( 'post_class', 'maximo_post_classes' );


if ( ! function_exists( 'maximo_get_active_theme_skin_data_attr' ) ) {

	function maximo_get_active_theme_skin_data_attr() {

		$theme_skin = maximo_get_option( 'theme_skin' );

		$theme_skin = apply_filters( 'maximo_theme_skin', $theme_skin );

		echo "data-skin='" . esc_attr( $theme_skin ) . "' data-active_skin='" . esc_attr( $theme_skin ) . "'";
	}
}


if ( ! function_exists( 'maximo_media_query_visibility_class' ) ) {

	function maximo_media_query_visibility_class( $visibility ) {

		$visibility_class = '';

		switch ( $visibility ) {
			case 'hide-tablet' :
				$visibility_class = 'maximo-hide-tablet maximo-show-mobile';
				break;
			case 'hide-mobile' :
				$visibility_class = 'maximo-hide-mobile';
				break;
			case 'hide-tablet-mobile' :
				$visibility_class = 'maximo-hide-tablet maximo-hide-mobile';
				break;
			default :
				$visibility_class = 'maximo-show-on-all';
		}

		return $visibility_class;
	}
}



if ( ! function_exists( 'maximo_get_thumbnail_size_array' ) ) {

	function maximo_get_thumbnail_size_array( $default_thumbnail_size, $thumbnail_size ) {

		if ( $thumbnail_size ) {
			$dimensions = explode( 'x', $thumbnail_size );
			if ( is_array( $dimensions ) && count( $dimensions ) > 1 ) {
				$int_array = array();
				foreach ($dimensions  as $value) {
					$int_array[] = (int) $value;
				}
				$default_thumbnail_size = $int_array;
			}
		}

		return $default_thumbnail_size;
	}
}