<?php
/**
 * Maximo Theme Customizer
 *
 * @package Maximo
 */

/**
 * Enqueue Customizer Scripts and Styles
 */
function maximo_enqueues() { 

	$asset_uri = MAXIMO_THEME_URI . '/customizer/assets/';

	wp_enqueue_style( 
		MAXIMO_THEME_SLUG . '-customizer-style', 
		$asset_uri . 
		'css/customizer-style.css' 
	);

	wp_enqueue_script( 
		MAXIMO_THEME_SLUG . '-customizer-script', 
		$asset_uri . 'js/customizer-script.js', 
		array( 'jquery' ), 
		MAXIMO_THEME_VERSION, 
		true 
	);

	// wp_enqueue_script( 'maximo-control-dependencies', $asset_uri . 'js/control-dependencies.js', array( 'jquery' ), MAXIMO_THEME_VERSION, true );
}
add_action( 'customize_controls_enqueue_scripts', 'maximo_enqueues', 15 );


/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function maximo_customize_register( $wp_customize ) {
	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$controls_path = MAXIMO_THEME_DIR . '/customizer/controls/';

	require $controls_path . 'slimselect/class-maximo-customize-slimselect-control.php';

	/**
	 * Load custom customizer control for radio image control
	 */
	require $controls_path . 'radio-image/class-maximo-customize-radio-image-control.php';
	

	/**
	 * Load custom customizer control for toggle switch control
	 */
	require $controls_path . 'toggle-switch/class-maximo-customize-toggle-switch-control.php';

	/**
	 * Load custom customizer control for divider
	 */
	require $controls_path . 'divider/class-maximo-customize-divider-control.php';

	/**
	 * Load custom customizer control for info control
	 */
	require $controls_path . 'info/class-maximo-customize-info-control.php';

	/**
	 * Load slider range custom customize control.
	 */
	require $controls_path . 'range-control/class-maximo-customize-range-control.php';

	/**
	 * Load responsive slider range custom customize control.
	 */
	require $controls_path . 'slider-control/class-maximo-customize-slider-control.php';

	$wp_customize->register_control_type( 'Maximo_Customize_Slider_Control' );

	/**
	 * Load google font custom customize control.
	 */
	require $controls_path . 'typography/class-maximo-customize-google-font-selector-control.php';

	/**
	 * Load alpha color picker custom customize control.
	 */
	require $controls_path . 'alpha-color-picker/class-maximo-customize-alpha-color-picker-control.php';

	/**
	 * Load sortable checkbox custom customize control.
	 */
	require $controls_path . 'sortable-checkbox/class-maximo-customize-sortable-checkbox-control.php';

	/**
	 * Load simple notice custom customize control.
	 */
	require $controls_path . 'simple-notice/class-maximo-customize-simple-notice-control.php';


	/**
	 * Load dimension custom customize control.
	 */
	require $controls_path . 'dimensions/class-maximo-customize-dimensions-control.php';

	$wp_customize->register_control_type( 'Maximo_Customize_Dimensions_Control' );

	/**
	 * Load custom customizer control for upsell
	 */
	require $controls_path . 'upsell/class-maximo-customize-upsell-control.php';

	$wp_customize->register_section_type( 'Maximo_Customize_Upsell_Control' );

	$wp_customize->add_section(
		new Maximo_Customize_Upsell_Control( 
			$wp_customize, 
			'maximo_pro_upsell', 
			array(
				'title'       	=> esc_html__( 'Maximo Pro', 'maximo' ),
				'button_text' 	=> esc_html__( 'Get Pro',        'maximo' ),
				'button_url'  	=> 'https://themebeez.com/themes/maximo-pro/?ref=upsell-btn',
				'priority'		=> 0,
			) 
		)
	);


	/**
	 * Load customizer functions for sanitization of input values of contol fields
	 */
	require MAXIMO_THEME_DIR . '/customizer/functions/sanitize-callbacks.php';	


	/**
	 * Load customizer functions for loading control field's choices, declaration of panel, section 
	 * and control fields
	 */

	$customizer_fields_path = MAXIMO_THEME_DIR . '/customizer/fields/';

	require $customizer_fields_path . 'panels.php';
	require $customizer_fields_path . 'layout.php';
	require $customizer_fields_path . 'colors.php';
	require $customizer_fields_path . 'typography.php';
	require $customizer_fields_path . 'buttons.php';
	require $customizer_fields_path . 'miscellaneous.php';

	require $customizer_fields_path . 'header/top-header.php';
	require $customizer_fields_path . 'header/main-header.php';
	require $customizer_fields_path . 'header/site-identity.php';
	require $customizer_fields_path . 'header/main-navigation.php';
	require $customizer_fields_path . 'header/transparent-header.php';

	require $customizer_fields_path . 'pages/inner-header.php';
	require $customizer_fields_path . 'pages/breadcrumbs.php';
	require $customizer_fields_path . 'pages/archive-settings.php';
	require $customizer_fields_path . 'pages/single-settings.php';
	
	require $customizer_fields_path . 'fields-banner.php';

	require $customizer_fields_path . 'fields-sidebar.php';

	require $customizer_fields_path . 'footer/footer-widgets.php';
	require $customizer_fields_path . 'footer/copyright-bar.php';


	if ( class_exists( 'WooCommerce' ) ) {

		require $customizer_fields_path . 'fields-woocommerce.php';
	}
	

	if ( isset( $wp_customize->selective_refresh ) ) {

		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'maximo_customize_partial_blogname',
		) );

		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'maximo_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'maximo_customize_register' );

/**
 * Load active callback functions.
 */

require MAXIMO_THEME_DIR . '/customizer/functions/active-callbacks.php';

/**
 * Load function to load customizer field's default values.
 */
require MAXIMO_THEME_DIR . '/customizer/functions/customizer-callbacks.php';

/**
 * Load function to load customizer field's options.
 */
require MAXIMO_THEME_DIR . '/customizer/functions/customizer-choices.php';

require MAXIMO_THEME_DIR . '/customizer/functions/dynamic-css.php';



/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function maximo_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function maximo_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function maximo_customize_preview_js() {

	$asset_uri = MAXIMO_THEME_URI . '/customizer/assets/';

	wp_enqueue_script( 
		MAXIMO_THEME_SLUG . '-customizer', 
		$asset_uri . 'js/customizer.js', 
		array( 'customize-preview' ), 
		MAXIMO_THEME_VERSION, 
		true 
	);
}
add_action( 'customize_preview_init', 'maximo_customize_preview_js' );



