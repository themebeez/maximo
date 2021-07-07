<?php

$maximo_customizer_defaults = maximo_get_customizer_defaults();

$wp_customize->add_section( 
	'maximo_footer_widgets', 
	array(
		'priority'		=> 10,
		'title'			=> esc_html__( 'Footer Widgets', 'maximo' ),
		'panel'		=> 'maximo_footer_panel'
	) 
);

$wp_customize->add_setting( 
	'display_footer_widgets', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['display_footer_widgets'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'display_footer_widgets', 
		array(
			'label' => esc_html__( 'Enable Footer Widgets', 'maximo' ),
			'section' => 'maximo_footer_widgets',
			'type' => 'ios',
		) 
	) 
);

$wp_customize->add_setting(
	'footer_widgets_separator_1',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'footer_widgets_separator_1',
		array(
			'section' => 'maximo_footer_widgets',
			'priority' => 10
		)
	)
);

$wp_customize->add_setting( 
	'footer_widgets_visibility',
	array(
		'default' => $maximo_customizer_defaults['footer_widgets_visibility'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'footer_widgets_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'maximo' ),
			'section' => 'maximo_footer_widgets',
			'choices' => maximo_get_device_visibility(),
			'priority' => 10,
			'active_callback' => 'maximo_is_footer_widgets_enabled'
		)
	)
);


$wp_customize->add_setting(
	'footer_widgets_separator_2',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'footer_widgets_separator_2',
		array(
			'section' => 'maximo_footer_widgets',
			'priority' => 10,
			'active_callback' => 'maximo_is_footer_widgets_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'footer_widgets_width',
	array(
		'default' => $maximo_customizer_defaults['footer_widgets_width'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'footer_widgets_width',
		array(
			'label' => esc_html__( 'Width', 'maximo' ),
			'section' => 'maximo_footer_widgets',
			'choices' => maximo_get_container_widths(),
			'priority' => 10,
			'active_callback' => 'maximo_is_footer_widgets_enabled'
		)
	)
);

$wp_customize->add_setting(
	'footer_widgets_separator_3',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'footer_widgets_separator_3',
		array(
			'section' => 'maximo_footer_widgets',
			'priority' => 10,
			'active_callback' => 'maximo_is_footer_widgets_enabled'
		)
	)
);

$wp_customize->add_setting( 
	'footer_widgets_columns',
	array(
		'default' => $maximo_customizer_defaults['footer_widgets_columns'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'footer_widgets_columns',
		array(
			'label' => esc_html__( 'Widget Columns', 'maximo' ),
			'section' => 'maximo_footer_widgets',
			'choices' => maximo_get_footer_widget_columns(),
			'priority' => 10,
			'active_callback' => 'maximo_is_footer_widgets_enabled'
		)
	)
);


$wp_customize->add_setting(
	'footer_widgets_separator_4',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'footer_widgets_separator_4',
		array(
			'section' => 'maximo_footer_widgets',
			'priority' => 10,
			'active_callback' => 'maximo_is_footer_widgets_columns_2'
		)
	)
);


$wp_customize->add_setting( 
	'footer_widget_2_columns_layout', 
	array(
		'sanitize_callback'		=> 'maximo_sanitize_select',
		'default'				=> $maximo_customizer_defaults['footer_widget_2_columns_layout'],
	)
);

$wp_customize->add_control( 
	new Maximo_Customize_Radio_Image_Control( 
		$wp_customize, 
		'footer_widget_2_columns_layout', 
		array( 
			'label' => esc_html__( '2 Columns Layout', 'maximo' ),
			'type'	=> 'select',
			'choices' => maximo_get_footer_widget_2_columns_variations(),
			'section' => 'maximo_footer_widgets',
			'active_callback' => 'maximo_is_footer_widgets_columns_2'
		)
	) 
);


$wp_customize->add_setting(
	'footer_widgets_separator_5',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'footer_widgets_separator_5',
		array(
			'section' => 'maximo_footer_widgets',
			'priority' => 10,
			'active_callback' => 'maximo_is_footer_widgets_columns_3'
		)
	)
);


$wp_customize->add_setting( 
	'footer_widget_3_columns_layout', 
	array(
		'sanitize_callback'		=> 'maximo_sanitize_select',
		'default'				=> $maximo_customizer_defaults['footer_widget_3_columns_layout'],
	)
);

$wp_customize->add_control( 
	new Maximo_Customize_Radio_Image_Control( 
		$wp_customize, 
		'footer_widget_3_columns_layout', 
		array( 
			'label' => esc_html__( '3 Columns Layout', 'maximo' ),
			'type'	=> 'select',
			'choices' => maximo_get_footer_widget_3_columns_variations(),
			'section' => 'maximo_footer_widgets',
			'active_callback' => 'maximo_is_footer_widgets_columns_3'
		)
	) 
);