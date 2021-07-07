<?php
$maximo_customizer_defaults = maximo_get_customizer_defaults();

$wp_customize->add_section( 
	'maximo_top_header', 
	array(
		'priority'		=> 10,
		'title'			=> esc_html__( 'Top Header', 'maximo' ),
		'panel'			=> 'maximo_site_header_panel'
	) 
);


$wp_customize->add_setting( 
	'display_top_header', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['display_top_header'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'display_top_header', 
		array(
			'label' => esc_html__( 'Display Top Header', 'maximo' ),
			'section' => 'maximo_top_header',
			'type' => 'ios',
			'priority' => 10,
		) 
	) 
);


$wp_customize->add_setting(
	'top_header_separator_1',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'top_header_separator_1',
		array(
			'section' => 'maximo_top_header',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'top_header_visibility',
	array(
		'default' => $maximo_customizer_defaults['top_header_visibility'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'top_header_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'maximo' ),
			'section' => 'maximo_top_header',
			'choices' => maximo_get_device_visibility(),
			'priority' => 10,
			'active_callback' => 'maximo_is_top_header_enabled'
		)
	)
);


$wp_customize->add_setting(
	'top_header_separator_2',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'top_header_separator_2',
		array(
			'section' => 'maximo_top_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_top_header_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'top_header_width',
	array(
		'default' => $maximo_customizer_defaults['top_header_width'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'top_header_width',
		array(
			'label' => esc_html__( 'Width', 'maximo' ),
			'section' => 'maximo_top_header',
			'choices' => maximo_get_container_widths(),
			'priority' => 10,
			'active_callback' => 'maximo_is_top_header_enabled'
		)
	)
);



$wp_customize->add_setting(
	'top_header_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'top_header_info_1',
		array(
			'label' => esc_html__( 'Left Element', 'maximo' ),
			'section' => 'maximo_top_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_top_header_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'display_top_header_left_element', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['display_top_header_left_element'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( $wp_customize,
		'display_top_header_left_element', 
		array(
			'label' => esc_html__( 'Display Left Element', 'maximo' ),
			'section' => 'maximo_top_header',
			'type' => 'ios',
			'priority' => 10,
			'active_callback' => 'maximo_is_top_header_enabled'
		) 
	) 
);

$wp_customize->add_setting(
	'top_header_separator_3',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'top_header_separator_3',
		array(
			'section' => 'maximo_top_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_top_left_header_element_enabled'
		)
	)
);

$wp_customize->add_setting( 
	'top_header_left_element',
	array(
		'default' => $maximo_customizer_defaults['top_header_left_element'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'top_header_left_element',
		array(
			'label' => esc_html__( 'Select Element', 'maximo' ),
			'section' => 'maximo_top_header',
			'choices' => maximo_get_top_header_elements(),
			'priority' => 10,
			'active_callback' => 'maximo_is_top_left_header_element_enabled'
		)
	)
);



$wp_customize->add_setting(
	'top_header_info_2',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'top_header_info_2',
		array(
			'label' => esc_html__( 'Right Element', 'maximo' ),
			'section' => 'maximo_top_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_top_header_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'display_top_header_right_element', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['display_top_header_right_element'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( $wp_customize,
		'display_top_header_right_element', 
		array(
			'label' => esc_html__( 'Display Right Element', 'maximo' ),
			'section' => 'maximo_top_header',
			'type' => 'ios',
			'priority' => 10,
			'active_callback' => 'maximo_is_top_header_enabled'
		) 
	) 
);

$wp_customize->add_setting(
	'top_header_separator_4',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'top_header_separator_4',
		array(
			'section' => 'maximo_top_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_top_right_header_element_enabled'
		)
	)
);



$wp_customize->add_setting( 
	'top_header_right_element',
	array(
		'default' => $maximo_customizer_defaults['top_header_right_element'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'top_header_right_element',
		array(
			'label' => esc_html__( 'Select Element', 'maximo' ),
			'section' => 'maximo_top_header',
			'choices' => maximo_get_top_header_elements(),
			'priority' => 10,
			'active_callback' => 'maximo_is_top_right_header_element_enabled'
		) 
	)
);



$wp_customize->add_setting(
	'top_header_info_3',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'top_header_info_3',
		array(
			'label' => esc_html__( 'Navigation Menu', 'maximo' ),
			'section' => 'maximo_top_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_nav_menu_element_enabled_on_top_header'
		)
	)
);

$wp_customize->add_setting( 
	'top_header_nav_menu',
	array(
		'default' => $maximo_customizer_defaults['top_header_nav_menu'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'top_header_nav_menu',
		array(
			'label' => esc_html__( 'Select Navigation Menu', 'maximo' ),
			'section' => 'maximo_top_header',
			'choices' => maximo_get_nav_menus(),
			'priority' => 10,
			'active_callback' => 'maximo_is_nav_menu_element_enabled_on_top_header'
		) 
	)
);

$wp_customize->add_setting(
	'top_header_separator_5',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'top_header_separator_5',
		array(
			'section' => 'maximo_top_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_nav_menu_element_enabled_on_top_header'
		)
	)
);


$wp_customize->add_setting( 
	'top_header_nav_menu_visibility',
	array(
		'default' => $maximo_customizer_defaults['top_header_nav_menu_visibility'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'top_header_nav_menu_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'maximo' ),
			'section' => 'maximo_top_header',
			'choices' => maximo_get_device_visibility(),
			'priority' => 10,
			'active_callback' => 'maximo_is_nav_menu_element_enabled_on_top_header'
		)
	)
);


$wp_customize->add_setting(
	'top_header_info_4',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'top_header_info_4',
		array(
			'label' => esc_html__( 'Text', 'maximo' ),
			'section' => 'maximo_top_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_text_element_enabled_on_top_header'
		)
	)
);


$wp_customize->add_setting( 
	'top_header_text', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $maximo_customizer_defaults['top_header_text'],
	) 
);

$wp_customize->add_control( 
	'top_header_text', 
	array(
		'label' => esc_html__( 'Text', 'maximo' ),
		'section' => 'maximo_top_header',
		'type' => 'text',
		'active_callback' => 'maximo_is_text_element_enabled_on_top_header'
	) 
);


$wp_customize->add_setting(
	'top_header_separator_6',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'top_header_separator_6',
		array(
			'section' => 'maximo_top_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_text_element_enabled_on_top_header'
		)
	)
);

$wp_customize->add_setting( 
	'top_header_text_visibility',
	array(
		'default' => $maximo_customizer_defaults['top_header_text_visibility'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'top_header_text_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'maximo' ),
			'section' => 'maximo_top_header',
			'choices' => maximo_get_device_visibility(),
			'priority' => 10,
			'active_callback' => 'maximo_is_text_element_enabled_on_top_header'
		)
	)
);


$wp_customize->add_setting(
	'top_header_info_5',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'top_header_info_5',
		array(
			'label' => esc_html__( 'Social Links', 'maximo' ),
			'section' => 'maximo_top_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_social_menu_element_enabled_on_top_header'
		)
	)
);

$wp_customize->add_setting( 
	'top_header_social_menu',
	array(
		'default' => $maximo_customizer_defaults['top_header_social_menu'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'top_header_social_menu',
		array(
			'label' => esc_html__( 'Select Social Menu', 'maximo' ),
			'section' => 'maximo_top_header',
			'choices' => maximo_get_nav_menus(),
			'priority' => 10,
			'active_callback' => 'maximo_is_social_menu_element_enabled_on_top_header'
		)
	)
);


$wp_customize->add_setting(
	'top_header_separator_7',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'top_header_separator_7',
		array(
			'section' => 'maximo_top_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_social_menu_element_enabled_on_top_header'
		)
	)
);


$wp_customize->add_setting( 
	'top_header_display_social_menu_title', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['top_header_display_social_menu_title'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( $wp_customize,
		'top_header_display_social_menu_title', 
		array(
			'label' => esc_html__( 'Display Social Link&rsquo;s Title', 'maximo' ),
			'section' => 'maximo_top_header',
			'type' => 'ios',
			'priority' => 10,
			'active_callback' => 'maximo_is_social_menu_element_enabled_on_top_header'
		) 
	) 
);


$wp_customize->add_setting(
	'top_header_separator_8',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'top_header_separator_8',
		array(
			'section' => 'maximo_top_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_social_menu_element_enabled_on_top_header'
		)
	)
);

$wp_customize->add_setting( 
	'top_header_social_menu_visibility',
	array(
		'default' => $maximo_customizer_defaults['top_header_social_menu_visibility'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'top_header_social_menu_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'maximo' ),
			'section' => 'maximo_top_header',
			'choices' => maximo_get_device_visibility(),
			'priority' => 10,
			'active_callback' => 'maximo_is_social_menu_element_enabled_on_top_header'
		)
	)
);