<?php

$maximo_customizer_defaults = maximo_get_customizer_defaults();

$wp_customize->get_section( 'title_tagline' )->panel = 'maximo_site_header_panel';
$wp_customize->get_section( 'title_tagline' )->priority = 11;


$wp_customize->get_control( 'custom_logo' )->priority = 10;


$wp_customize->add_setting(
	'site_identity_separator_1',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'site_identity_separator_1',
		array(
			'section' => 'title_tagline',
			'priority' => 10,
		)
	)
);



$wp_customize->add_setting( 
	'dark_mode_logo', 
	array(
		'sanitize_callback'		=> 'esc_url_raw',
		'default'				=> $maximo_customizer_defaults['dark_mode_logo'],
	)
);


$wp_customize->add_control( 
	new WP_Customize_Image_Control( 
		$wp_customize, 
		'dark_mode_logo', 
		array(
			'label' => esc_html__( 'Dark Mode - Logo', 'maximo' ),
			'section' => 'title_tagline',
			'priority' => 10,
			'active_callback' => 'maximo_is_dark_mode_switcher_enabled'
		)
	) 
);


$wp_customize->add_setting(
	'site_identity_separator_2',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'site_identity_separator_2',
		array(
			'section' => 'title_tagline',
			'priority' => 10,
			'active_callback' => 'maximo_is_dark_mode_switcher_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'site_identity_logo_max_width_desktop', 
	array(
		'default'           	=> $maximo_customizer_defaults['site_identity_logo_max_width']['desktop'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'site_identity_logo_max_width_tablet', 
	array(
		'default'           	=> $maximo_customizer_defaults['site_identity_logo_max_width']['tablet'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'site_identity_logo_max_width_mobile', 
	array(
		'default'           	=> $maximo_customizer_defaults['site_identity_logo_max_width']['mobile'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Slider_Control( 
		$wp_customize, 
		'site_identity_logo_max_width', 
		array(
			'label' 			=> esc_html__( 'Logo max width (px)', 'maximo' ),
			'section'  			=> 'title_tagline',
			'settings' => array(
		        'desktop' 	=> 'site_identity_logo_max_width_desktop',
		        'tablet' 	=> 'site_identity_logo_max_width_tablet',
		        'mobile' 	=> 'site_identity_logo_max_width_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 30,
		        'max'   => 600,
		        'step'  => 1,
		    )
		) 
	) 
);


$wp_customize->add_setting(
	'site_identity_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'site_identity_info_1',
		array(
			'label' => esc_html__( 'Site Identity', 'maximo' ),
			'section' => 'title_tagline',
			'priority' => 11,
		)
	)
);


$wp_customize->get_control( 'blogname' )->priority = 12;

$wp_customize->add_setting(
	'site_identity_separator_3',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'site_identity_separator_3',
		array(
			'section' => 'title_tagline',
			'priority' => 13,
		)
	)
);

$wp_customize->get_control( 'blogdescription' )->priority = 14;


$wp_customize->add_setting(
	'site_identity_separator_4',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'site_identity_separator_4',
		array(
			'section' => 'title_tagline',
			'priority' => 15,
		)
	)
);

$wp_customize->get_control( 'display_header_text' )->label = esc_html__( 'Display Tagline', 'maximo' );
$wp_customize->get_control( 'display_header_text' )->priority = 16;


$wp_customize->add_setting(
	'site_identity_separator_5',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'site_identity_separator_5',
		array(
			'section' => 'title_tagline',
			'priority' => 16,
		)
	)
);

$wp_customize->add_setting( 
	'site_title_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $maximo_customizer_defaults['site_title_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'site_title_color', 
		array(
			'label'	   	=> esc_html__( 'Site Title Color', 'maximo' ),
			'section'  	=> 'title_tagline',
			'priority' 	=> 16,
		) 
	) 
);


$wp_customize->add_setting(
	'site_identity_separator_6',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'site_identity_separator_6',
		array(
			'section' => 'title_tagline',
			'priority' => 16
		)
	)
);


$wp_customize->add_setting( 
	'dark_mode_site_title_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $maximo_customizer_defaults['dark_mode_site_title_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'dark_mode_site_title_color', 
		array(
			'label'	   	=> esc_html__( 'Dark Mode - Site Title Color', 'maximo' ),
			'section'  	=> 'title_tagline',
			'priority' 	=> 16,
			'active_callback' => 'maximo_is_dark_mode_switcher_enabled'
		) 
	) 
);

$wp_customize->add_setting(
	'site_identity_separator_7',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'site_identity_separator_7',
		array(
			'section' => 'title_tagline',
			'priority' => 16,
			'active_callback' => 'maximo_is_dark_mode_switcher_enabled'
		)
	)
);

$wp_customize->get_control( 'header_textcolor' )->section = 'title_tagline';
$wp_customize->get_control( 'header_textcolor' )->label = esc_html__( 'Tagline Color', 'maximo' );
$wp_customize->get_control( 'header_textcolor' )->priority = 17;


$wp_customize->add_setting(
	'site_identity_separator_8',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'site_identity_separator_8',
		array(
			'section' => 'title_tagline',
			'priority' => 17,
			'active_callback' => 'maximo_is_dark_mode_switcher_enabled'
		)
	)
);

$wp_customize->add_setting( 
	'dark_mode_site_description_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $maximo_customizer_defaults['dark_mode_site_description_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'dark_mode_site_description_color', 
		array(
			'label'	   	=> esc_html__( 'Dark Mode - Tagline Color', 'maximo' ),
			'section'  	=> 'title_tagline',
			'priority' 	=> 17,
			'active_callback' => 'maximo_is_dark_mode_switcher_enabled'
		) 
	) 
);


$wp_customize->add_setting(
	'site_identity_info_2',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'site_identity_info_2',
		array(
			'label' => esc_html__( 'Alignment', 'maximo' ),
			'section' => 'title_tagline',
			'priority' => 17
		)
	)
);

$wp_customize->add_setting( 
	'site_identity_alignment',
	array(
		'default' => $maximo_customizer_defaults['site_identity_alignment'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'site_identity_alignment',
		array(
			'label' => esc_html__( 'Logo/Site Identity Alignment', 'maximo' ),
			'section' => 'title_tagline',
			'choices' => maximo_get_alignments(),
			'priority' => 17
		)
	)
);


$wp_customize->add_setting(
	'site_identity_info_3',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'site_identity_info_3',
		array(
			'label' => esc_html__( 'Site Title Typo', 'maximo' ),
			'section' => 'title_tagline',
			'priority' => 17,
		)
	)
);


$wp_customize->add_setting( 
	'site_identity_font_type',
	array(
		'default' => $maximo_customizer_defaults['site_identity_font_type'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize, 
		'site_identity_font_type',
		array(
			'label' => esc_html__( 'Font Type', 'maximo' ),
			'section' => 'title_tagline',
			'choices' => maximo_font_types(),
			'priority' => 17,
		)
	)
);

$wp_customize->add_setting(
	'site_identity_separator_9',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'site_identity_separator_9',
		array(
			'section' => 'title_tagline',
			'priority' 	=> 17,
		)
	)
);


$wp_customize->add_setting( 
	'site_identity_system_font_family',
	array(
		'default' => $maximo_customizer_defaults['site_identity_system_font_family'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'site_identity_system_font_family',
		array(
			'label' => esc_html__( 'Font Family', 'maximo' ),
			'section' => 'title_tagline',
			'choices' => maximo_get_standard_fonts(),
			'active_callback' => 'maximo_is_site_title_font_a_system_font',
			'priority' 	=> 17,
		)
	)
);

$wp_customize->add_setting( 
	'site_identity_system_font_weight',
	array(
		'default' => $maximo_customizer_defaults['site_identity_system_font_weight'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'site_identity_system_font_weight',
		array(
			'label' => esc_html__( 'Font Weight', 'maximo' ),
			'section' => 'title_tagline',
			'choices' => maximo_get_standard_font_weights(),
			'active_callback' => 'maximo_is_site_title_font_a_system_font',
			'priority' 	=> 17,
		)
	)
);


$wp_customize->add_setting( 
	'site_identity_google_font',
	array(
		'default' => $maximo_customizer_defaults['site_identity_google_font'],
		'sanitize_callback' => ''
	)
);

$wp_customize->add_control( 
	new Maximo_Customize_Google_Font_Selector_Control( 
		$wp_customize, 
		'site_identity_google_font',
		array(
			'label' => '',
			'section' => 'title_tagline',
			'input_attrs' => array(
				'font_count' => 'all',
				'orderby' => 'alpha',
			),
			'active_callback' => 'maximo_is_site_title_font_a_google_font',
			'priority' 	=> 17,
		)
	) 
);

$wp_customize->add_setting(
	'site_identity_separator_10',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'site_identity_separator_10',
		array(
			'section' => 'title_tagline',
			'priority' 	=> 17,
		)
	)
);

$wp_customize->add_setting( 
	'site_identity_font_size_desktop', 
	array(
		'default'           	=> $maximo_customizer_defaults['site_identity_font_size']['desktop'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'site_identity_font_size_tablet', 
	array(
		'default'           	=> $maximo_customizer_defaults['site_identity_font_size']['tablet'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'site_identity_font_size_mobile', 
	array(
		'default'           	=> $maximo_customizer_defaults['site_identity_font_size']['mobile'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Slider_Control( 
		$wp_customize, 
		'site_identity_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'maximo' ),
			'section'  			=> 'title_tagline',
			'settings' => array(
		        'desktop' 	=> 'site_identity_font_size_desktop',
		        'tablet' 	=> 'site_identity_font_size_tablet',
		        'mobile' 	=> 'site_identity_font_size_mobile',
		    ),
			'priority' 				=> 17,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    ),
		) 
	) 
);

$wp_customize->add_setting(
	'site_identity_separator_11',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'site_identity_separator_11',
		array(
			'section' => 'title_tagline',
			'priority' 	=> 17,
		)
	)
);

$wp_customize->add_setting( 
	'site_identity_line_height_desktop', 
	array(
		'default'           	=> $maximo_customizer_defaults['site_identity_line_height']['desktop'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'site_identity_line_height_tablet', 
	array(
		'default'           	=> $maximo_customizer_defaults['site_identity_line_height']['tablet'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'site_identity_line_height_mobile', 
	array(
		'default'           	=> $maximo_customizer_defaults['site_identity_line_height']['mobile'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Slider_Control( 
		$wp_customize, 
		'site_identity_line_height', 
		array(
			'label' 			=> esc_html__( 'Line Height', 'maximo' ),
			'section'  			=> 'title_tagline',
			'settings' => array(
		        'desktop' 	=> 'site_identity_line_height_desktop',
		        'tablet' 	=> 'site_identity_line_height_tablet',
		        'mobile' 	=> 'site_identity_line_height_mobile',
		    ),
			'priority' 				=> 17,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 0.1,
		    ),
		) 
	) 
);