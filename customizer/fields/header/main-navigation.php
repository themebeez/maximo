<?php

$maximo_customizer_defaults = maximo_get_customizer_defaults();

$wp_customize->add_section( 
	'maximo_main_navigation', 
	array(
		'priority'		=> 11,
		'title'			=> esc_html__( 'Main Navigation', 'maximo' ),
		'panel'			=> 'maximo_site_header_panel'
	) 
);


$wp_customize->add_setting( 
	'main_navigation_enable_sticky', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['main_navigation_enable_sticky'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'main_navigation_enable_sticky', 
		array(
			'label' => esc_html__( 'Enable Sticky Header', 'maximo' ),
			'description' => esc_html__( 'Only the section with the main navigation is made sticky.', 'maximo' ),
			'section' => 'maximo_main_navigation',
			'type' => 'ios',
		) 
	) 
);


$wp_customize->add_setting(
	'main_navigation_separator_1',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'main_navigation_separator_1',
		array(
			'section' => 'maximo_main_navigation',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'main_navigation_alignment',
	array(
		'default' => $maximo_customizer_defaults['main_navigation_alignment'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'main_navigation_alignment',
		array(
			'label' => esc_html__( 'Menu Alignment', 'maximo' ),
			'section' => 'maximo_main_navigation',
			'choices' => maximo_get_alignments()
		)
	)
);


$wp_customize->add_setting(
	'main_navigation_separator_2',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'main_navigation_separator_2',
		array(
			'section' => 'maximo_main_navigation',
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting( 
	'main_navigation_mobile_breakpoint', 
	array(
		'default' => $maximo_customizer_defaults['main_navigation_mobile_breakpoint'],
		'sanitize_callback' 	=> 'maximo_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Range_Control( 
		$wp_customize, 
		'main_navigation_mobile_breakpoint', 
		array(
			'label' 			=> esc_html__( 'Mobile Breakpoint (px)', 'maximo' ),
			'section'  			=> 'maximo_main_navigation',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 1920,
                'step' 		=> 1,
            ),
		) 
	) 
);


$wp_customize->add_setting(
	'main_navigation_separator_3',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'main_navigation_separator_3',
		array(
			'section' => 'maximo_main_navigation',
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting( 
	'main_navigation_mobile_menu_button_label', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $maximo_customizer_defaults['main_navigation_mobile_menu_button_label'],
	) 
);

$wp_customize->add_control( 
	'main_navigation_mobile_menu_button_label', 
	array(
		'label' => esc_html__( 'Mobile Menu Button Label', 'maximo' ),
		'section' => 'maximo_main_navigation',
		'type' => 'text',
	) 
);