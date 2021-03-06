<?php
/**
 * Maximo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Maximo
 */

if ( ! defined( 'MAXIMO_THEME_VERSION' ) ) {

	define( 'MAXIMO_THEME_VERSION', '1.0.0' );
}

if ( ! defined( 'MAXIMO_THEME_URI' ) ) {

	define( 'MAXIMO_THEME_URI', get_template_directory_uri() );
}

if ( ! defined( 'MAXIMO_THEME_DIR' ) ) {

	define( 'MAXIMO_THEME_DIR', get_template_directory() );
}

if ( ! defined( 'MAXIMO_THEME_SLUG' ) ) {

	define( 'MAXIMO_THEME_SLUG', 'maximo' );
}

if ( ! function_exists( 'maximo_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function maximo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Maximo, use a find and replace
		 * to change 'maximo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'maximo', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary Navigation Menu', 'maximo' )
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		add_theme_support( 'post-formats', array( 'gallery', 'link', 'image', 'quote', 'video', 'audio', 'chat', 'status', 'aside' ) );

		add_theme_support( 'align-wide' );

		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'editor-styles' );

		add_editor_style( 'assets/css/editor-styles.css' );


		// This variable is intended to be overruled from themes.
		// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
		// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
		$GLOBALS['content_width'] = apply_filters( 'maximo_content_width', 640 );

	}
endif;
add_action( 'after_setup_theme', 'maximo_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function maximo_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'maximo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'maximo' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
	) );

	$footer_widgets_count = absint( maximo_get_option( 'footer_widgets_columns' ) );

	if ( $footer_widgets_count ) {

		for ( $i = 1; $i <= $footer_widgets_count; $i++ ) {

			register_sidebar( array(
				'name'          => sprintf( 
					esc_html__( 'Footer %s', 'maximo' ), 
					$i 
				),
				'id'            => 'footer-' . $i,
				'description'   => esc_html__( 'Add widgets here.', 'maximo' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="widget-title"><h4>',
				'after_title'   => '</h4></div>',
			) );
		}
	}

	register_sidebar( array(
		'name'          => esc_html__( 'Header Advertisement Area', 'maximo' ),
		'id'            => 'maximo-header-ad-area',
		'description'   => esc_html__( 'Add widgets here.', 'maximo' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
	) );

	if ( class_exists( 'WooCommerce' ) ) {
		register_sidebar( array(
			'name'          => esc_html__( 'WooCommerce Sidebar', 'maximo' ),
			'id'            => 'maximo-woocommerce-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'maximo' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title"><h3>',
			'after_title'   => '</h3></div>',
		) );
	}
}
add_action( 'widgets_init', 'maximo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function maximo_scripts() {

	$script_params = [];

	wp_enqueue_style( 'maximo-style', get_stylesheet_uri() );

	wp_enqueue_style( 'maximo-google-font', maximo_google_fonts() );
	
	wp_enqueue_style( 'fontisto', get_template_directory_uri() . '/assets/css/fontisto.min.css' );

	if ( maximo_get_option( 'enable_banner_slider' ) ) {
		
		wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '6.4.6', 'all' );
		
		wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '6.4.6', true );

	}

	wp_enqueue_style( 'maximo-theme', get_template_directory_uri() . '/assets/css/maximo.min.css', array(), MAXIMO_THEME_VERSION );

	$dynamic_css = maximo_dynamic_css();

	wp_add_inline_style( 'maximo-theme', $dynamic_css );

	$script_params = array();


	if ( maximo_get_option( 'enable_banner_slider' ) ) {

		$bannerParams = array();

		$bannerParams = apply_filters( 'maximo_banner_slider_js_args', $bannerParams );

		$script_params['bannerArgs'] = $bannerParams;
	}

	wp_enqueue_script( 'maximo-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.min.js', array( 'jquery' ), MAXIMO_THEME_VERSION, true );		

	wp_register_script( 'maximo-theme', get_template_directory_uri() . '/assets/js/maximo.min.js', array(), MAXIMO_THEME_VERSION, true );

	wp_localize_script( 'maximo-theme', 'scriptObj', $script_params );

	wp_enqueue_script( 'maximo-theme' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {

		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'maximo_scripts' );

/**
 * Enqueue backend's scripts and styles.
 */
function maximo_admin_scripts() {

	wp_enqueue_script( 'media-upload' );

	wp_enqueue_media();

	wp_enqueue_style( 'maximo-theme-backend', get_template_directory_uri() . '/assets/css/theme-backend.min.css' );

	wp_enqueue_script( 'maximo-theme-backend', get_template_directory_uri() . '/assets/js/theme-backend.min.js', array( 'jquery' ), MAXIMO_THEME_VERSION, true );
}
add_action( 'admin_enqueue_scripts', 'maximo_admin_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 *
 */
require MAXIMO_THEME_DIR . '/inc/init.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/customizer/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {

	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Custom Post Field.
 */
require get_template_directory() . '/inc/custom-fields.php';

/**
 * Theme functions.
 */
require get_template_directory() . '/inc/theme-functions.php';

/**
 * Load Custom filters.
 */
require get_template_directory() . '/inc/theme-filters.php';

/**
 * Load Plugin Recommendation.
 */
require get_template_directory() . '/inc/tgmpa/recommended-plugins.php';