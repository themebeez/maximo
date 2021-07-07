<?php

$maximo_customizer_defaults = maximo_get_customizer_defaults();

$wp_customize->add_section( 
	'maximo_colors',
	array(
		'title' => esc_html__( 'Colors', 'maximo' ),
		'panel' => 'maximo_general_panel'
	)
);


$wp_customize->add_setting( 
	'theme_skin',
	array(
		'default' => $maximo_customizer_defaults['theme_skin'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'theme_skin',
		array(
			'label' => esc_html__( 'Theme Skin', 'maximo' ),
			'section' => 'maximo_colors',
			'choices' => maximo_color_themes()
		) 
	)
);

$wp_customize->add_setting(
	'colors_divider_2',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'colors_divider_2',
		array(
			'section' => 'maximo_colors',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'accent_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $maximo_customizer_defaults['accent_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'accent_color', 
		array(
			'label'	   	=> esc_html__( 'Accent Color', 'maximo' ),
			'section'  	=> 'maximo_colors',
			'priority' 	=> 10,
		) 
	) 
);


$wp_customize->add_setting(
	'colors_divider_3',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'colors_divider_3',
		array(
			'section' => 'maximo_colors',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'display_dark_mode_toggle_button', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['display_dark_mode_toggle_button'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'display_dark_mode_toggle_button', 
		array(
			'label' => esc_html__( 'Display Dark Mode Toggle Button', 'maximo' ),
			'section' => 'maximo_colors',
			'type' => 'ios',
			'active_callback' => 'maximo_is_theme_skin_not_dark'
		) 
	) 
);


$wp_customize->add_setting(
	'colors_divider_4',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'colors_divider_4',
		array(
			'section' => 'maximo_colors',
			'priority' => 10,
			'active_callback' => 'maximo_is_theme_skin_not_dark'
		)
	)
);