<?php

$maximo_customizer_defaults = maximo_get_customizer_defaults();

$wp_customize->add_section( 
	'maximo_transparent_header', 
	array(
		'priority'		=> 12,
		'title'			=> esc_html__( 'Transparent Header', 'maximo' ),
		'panel'			=> 'maximo_site_header_panel'
	) 
);


$wp_customize->add_setting( 
	'enable_transparent_header', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['enable_transparent_header'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'enable_transparent_header', 
		array(
			'label' => esc_html__( 'Enable Transparent Header', 'maximo' ),
			'section' => 'maximo_transparent_header',
			'type' => 'ios',
			'priority' => 10,
		) 
	) 
);

$wp_customize->add_setting(
	'transparent_header_separator_1',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'transparent_header_separator_1',
		array(
			'section' => 'maximo_transparent_header',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'enable_transparent_header_on_pages',
	array(
		'default' => $maximo_customizer_defaults['enable_transparent_header_on_pages'],
		'sanitize_callback' => 'sanitize_text_field'
	) 
);

$wp_customize->add_control(
	new Maximo_Customize_Sortable_Checkbox_Control(
		$wp_customize,
		'enable_transparent_header_on_pages',
		array(
			'label'   => esc_html__( 'Enable On', 'maximo' ),
			'section' => 'maximo_transparent_header',
			'input_attrs' => array(
				'sortable' => false,
				'fullwidth' => true,
			),
			'choices' => maximo_get_general_pages(),
			'priority' => 10,
			'active_callback' => 'maximo_is_transparent_header_enabled'
		)
	)
);


$wp_customize->add_setting(
	'transparent_header_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'transparent_header_info_1',
		array(
			'label' => esc_html__( 'Logo', 'maximo' ),
			'section' => 'maximo_transparent_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_transparent_header_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'transparent_header_alternative_logo', 
	array(
		'sanitize_callback'		=> 'esc_url_raw',
		'default'				=> $maximo_customizer_defaults['transparent_header_alternative_logo'],
	)
);


$wp_customize->add_control( 
	new WP_Customize_Image_Control( 
		$wp_customize, 
		'transparent_header_alternative_logo', 
		array(
			'label' => esc_html__( 'Alternative Logo', 'maximo' ),
			'section' => 'maximo_transparent_header',
			'active_callback' => 'maximo_is_transparent_header_enabled'
		)
	) 
);


$wp_customize->add_setting(
	'transparent_header_info_2',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'transparent_header_info_2',
		array(
			'label' => esc_html__( 'Colors', 'maximo' ),
			'section' => 'maximo_transparent_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_transparent_header_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'transparent_header_site_title_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $maximo_customizer_defaults['transparent_header_site_title_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'transparent_header_site_title_color', 
		array(
			'label'	   	=> esc_html__( 'Site Title', 'maximo' ),
			'section'  	=> 'maximo_transparent_header',
			'priority' 	=> 10,
			'active_callback' => 'maximo_is_transparent_header_enabled'
		) 
	) 
);


$wp_customize->add_setting(
	'transparent_header_separator_2',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'transparent_header_separator_2',
		array(
			'section' => 'maximo_transparent_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_transparent_header_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'transparent_header_tagline_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $maximo_customizer_defaults['transparent_header_tagline_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'transparent_header_tagline_color', 
		array(
			'label'	   	=> esc_html__( 'Tagline', 'maximo' ),
			'section'  	=> 'maximo_transparent_header',
			'priority' 	=> 10,
			'active_callback' => 'maximo_is_transparent_header_enabled'
		) 
	) 
);

$wp_customize->add_setting(
	'transparent_header_separator_3',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'transparent_header_separator_3',
		array(
			'section' => 'maximo_transparent_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_transparent_header_enabled'
		)
	)
);

$wp_customize->add_setting( 
	'transparent_header_text_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $maximo_customizer_defaults['transparent_header_text_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'transparent_header_text_color', 
		array(
			'label'	   	=> esc_html__( 'Text &amp Links', 'maximo' ),
			'section'  	=> 'maximo_transparent_header',
			'priority' 	=> 10,
			'active_callback' => 'maximo_is_transparent_header_enabled'
		) 
	) 
);


$wp_customize->add_setting(
	'transparent_header_separator_4',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'transparent_header_separator_4',
		array(
			'section' => 'maximo_transparent_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_transparent_header_enabled'
		)
	)
);

$wp_customize->add_setting( 
	'transparent_header_link_hover_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $maximo_customizer_defaults['transparent_header_link_hover_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'transparent_header_link_hover_color', 
		array(
			'label'	   	=> esc_html__( 'Link - On Hover', 'maximo' ),
			'section'  	=> 'maximo_transparent_header',
			'priority' 	=> 10,
			'active_callback' => 'maximo_is_transparent_header_enabled'
		) 
	) 
);


$wp_customize->add_setting(
	'transparent_header_separator_5',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'transparent_header_separator_5',
		array(
			'section' => 'maximo_transparent_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_transparent_header_enabled'
		)
	)
);

$wp_customize->add_setting( 
	'transparent_header_border_color', 
	array(
		'sanitize_callback' => '',
		'default' => $maximo_customizer_defaults['transparent_header_border_color'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'transparent_header_border_color', 
		array(
			'label'	   	=> esc_html__( 'Border Color', 'maximo' ),
			'section'  	=> 'maximo_transparent_header',
			'priority' 	=> 10,
			'active_callback' => 'maximo_is_transparent_header_enabled'
		) 
	) 
);