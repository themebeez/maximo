<?php

$maximo_customizer_defaults = maximo_get_customizer_defaults();

$wp_customize->add_section( 
	'maximo_footer_copyright_bar', 
	array(
		'priority'		=> 10,
		'title'			=> esc_html__( 'Copyright Bar', 'maximo' ),
		'panel'		=> 'maximo_footer_panel'
	) 
);


$wp_customize->add_setting( 
	'footer_copyright_bar_layout', 
	array(
		'sanitize_callback'		=> 'maximo_sanitize_select',
		'default'				=> $maximo_customizer_defaults['footer_copyright_bar_layout'],
	)
);

$wp_customize->add_control( 
	new Maximo_Customize_Radio_Image_Control( 
		$wp_customize, 
		'footer_copyright_bar_layout', 
		array( 
			'label' => esc_html__( 'Copyright Layout', 'maximo' ),
			'type'	=> 'select',
			'choices' => maximo_get_footer_copyright_bar_layouts(),
			'section' => 'maximo_footer_copyright_bar',
		)
	) 
);

$wp_customize->add_setting(
	'footer_copyright_bar_separator_1',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'footer_copyright_bar_separator_1',
		array(
			'section' => 'maximo_footer_copyright_bar',
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting( 
	'footer_copyright_bar_width',
	array(
		'default' => $maximo_customizer_defaults['footer_copyright_bar_width'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'footer_copyright_bar_width',
		array(
			'label' => esc_html__( 'Width', 'maximo' ),
			'section' => 'maximo_footer_copyright_bar',
			'choices' => maximo_get_container_widths(),
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting(
	'footer_copyright_bar_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'footer_copyright_bar_info_1',
		array(
			'label' => esc_html__( 'Element - Copyright', 'maximo' ),
			'section' => 'maximo_footer_copyright_bar',
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting( 
	'footer_copyright_text', 
	array(
		'sanitize_callback' => 'sanitize_textarea_field',
		'default' => $maximo_customizer_defaults['footer_copyright_text'],
	) 
);

$wp_customize->add_control( 
	'footer_copyright_text', 
	array(
		'label' => esc_html__( 'Content', 'maximo' ),
		'section' => 'maximo_footer_copyright_bar',
		'type' => 'textarea',
	) 
);

$wp_customize->add_setting(
	'footer_copyright_bar_separator_2',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'footer_copyright_bar_separator_2',
		array(
			'section' => 'maximo_footer_copyright_bar',
			'priority' => 10,
			'active_callback' => 'maximo_is_footer_copyright_section_layout_one'
		)
	)
);


$wp_customize->add_setting( 
	'footer_copyright_position',
	array(
		'default' => $maximo_customizer_defaults['footer_copyright_position'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'footer_copyright_position',
		array(
			'label' => esc_html__( 'Position', 'maximo' ),
			'section' => 'maximo_footer_copyright_bar',
			'choices' => maximo_copyright_position_choices(),
			'priority' => 10,
			'active_callback' => 'maximo_is_footer_copyright_section_layout_one'
		)
	)
);


$wp_customize->add_setting(
	'footer_copyright_bar_info_2',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'footer_copyright_bar_info_2',
		array(
			'label' => esc_html__( 'Element - Extra', 'maximo' ),
			'section' => 'maximo_footer_copyright_bar',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'footer_copyright_bar_extra_element_visibility',
	array(
		'default' => $maximo_customizer_defaults['footer_copyright_bar_extra_element_visibility'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'footer_copyright_bar_extra_element_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'maximo' ),
			'section' => 'maximo_footer_copyright_bar',
			'choices' => maximo_get_device_visibility(),
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting(
	'footer_copyright_bar_separator_3',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'footer_copyright_bar_separator_3',
		array(
			'section' => 'maximo_footer_copyright_bar',
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting( 
	'footer_copyright_bar_extra_element',
	array(
		'default' => $maximo_customizer_defaults['footer_copyright_bar_extra_element'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'footer_copyright_bar_extra_element',
		array(
			'label' => esc_html__( 'Select Element', 'maximo' ),
			'section' => 'maximo_footer_copyright_bar',
			'choices' => maximo_get_top_header_elements(),
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting(
	'footer_copyright_bar_separator_4',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'footer_copyright_bar_separator_4',
		array(
			'section' => 'maximo_footer_copyright_bar',
			'priority' => 10,
			'active_callback' => 'maximo_is_text_element_enabled_in_copyright_section'
		)
	)
);

$wp_customize->add_setting( 
	'footer_copyright_bar_text', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $maximo_customizer_defaults['footer_copyright_bar_text'],
	) 
);

$wp_customize->add_control( 
	'footer_copyright_bar_text', 
	array(
		'label' => esc_html__( 'Text', 'maximo' ),
		'section' => 'maximo_footer_copyright_bar',
		'type' => 'text',
		'active_callback' => 'maximo_is_text_element_enabled_in_copyright_section'
	) 
);

$wp_customize->add_setting(
	'footer_copyright_bar_separator_5',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'footer_copyright_bar_separator_5',
		array(
			'section' => 'maximo_footer_copyright_bar',
			'priority' => 10,
			'active_callback' => 'maximo_is_social_links_element_enabled_in_copyright_section'
		)
	)
);


$wp_customize->add_setting( 
	'footer_copyright_bar_social_menu',
	array(
		'default' => $maximo_customizer_defaults['footer_copyright_bar_social_menu'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'footer_copyright_bar_social_menu',
		array(
			'label' => esc_html__( 'Select Social Menu', 'maximo' ),
			'section' => 'maximo_footer_copyright_bar',
			'choices' => maximo_get_nav_menus(),
			'priority' => 10,
			'active_callback' => 'maximo_is_social_links_element_enabled_in_copyright_section'
		)
	)
);

$wp_customize->add_setting(
	'footer_copyright_bar_separator_6',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'footer_copyright_bar_separator_6',
		array(
			'section' => 'maximo_footer_copyright_bar',
			'priority' => 10,
			'active_callback' => 'maximo_is_social_links_element_enabled_in_copyright_section'
		)
	)
);


$wp_customize->add_setting( 
	'footer_copyright_bar_display_social_menu_title', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['footer_copyright_bar_display_social_menu_title'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( $wp_customize,
		'footer_copyright_bar_display_social_menu_title', 
		array(
			'label' => esc_html__( 'Display Social Link&rsquo;s Title', 'maximo' ),
			'section' => 'maximo_footer_copyright_bar',
			'type' => 'ios',
			'priority' => 10,
			'active_callback' => 'maximo_is_social_links_element_enabled_in_copyright_section'
		) 
	) 
);

$wp_customize->add_setting(
	'footer_copyright_bar_separator_7',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'footer_copyright_bar_separator_7',
		array(
			'section' => 'maximo_footer_copyright_bar',
			'priority' => 10,
			'active_callback' => 'maximo_is_nav_menu_element_enabled_in_copyright_section'
		)
	)
);


$wp_customize->add_setting( 
	'footer_copyright_bar_nav_menu',
	array(
		'default' => $maximo_customizer_defaults['footer_copyright_bar_nav_menu'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'footer_copyright_bar_nav_menu',
		array(
			'label' => esc_html__( 'Select Navigation Menu', 'maximo' ),
			'section' => 'maximo_footer_copyright_bar',
			'choices' => maximo_get_nav_menus(),
			'priority' => 10,
			'active_callback' => 'maximo_is_nav_menu_element_enabled_in_copyright_section'
		)
	)
);