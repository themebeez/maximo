<?php

$maximo_customizer_defaults = maximo_get_customizer_defaults();

$wp_customize->add_section( 
	'maximo_miscellaneous',
	array(
		'title' => esc_html__( 'Miscellaneous', 'maximo' ),
		'panel' => 'maximo_general_panel'
	)
);

$wp_customize->add_setting(
	'miscellaneous_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'miscellaneous_info_1',
		array(
			'label' => esc_html__( 'Site Icon', 'maximo' ),
			'section' => 'maximo_miscellaneous',
			'priority' => 10,
		)
	)
);


$wp_customize->get_control( 'site_icon' )->section = 'maximo_miscellaneous';
$wp_customize->get_control( 'site_icon' )->priority = 11;


$wp_customize->add_setting(
	'miscellaneous_info_2',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'miscellaneous_info_2',
		array(
			'label' => esc_html__( 'Scroll Top Button', 'maximo' ),
			'section' => 'maximo_miscellaneous',
			'priority' => 12,
		)
	)
);


$wp_customize->add_setting( 
	'enable_scroll_top_button',
	array(
		'default' => $maximo_customizer_defaults['enable_scroll_top_button'],
		'sanitize_callback' => 'wp_validate_boolean'
	)
);
$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize, 
		'enable_scroll_top_button',
		array(
			'label' => esc_html__( 'Enable Scroll Top Button', 'maximo' ),
			'section' => 'maximo_miscellaneous',
			'type' => 'ios',
			'priority' => 12
		)
	) 
);


$wp_customize->add_setting(
	'miscellaneous_divider_1',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'miscellaneous_divider_1',
		array(
			'section' => 'maximo_miscellaneous',
			'priority' => 12
		)
	)
);


$wp_customize->add_setting( 
	'scroll_top_btn_device_visibility',
	array(
		'default' => $maximo_customizer_defaults['scroll_top_btn_device_visibility'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'scroll_top_btn_device_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'maximo' ),
			'section' => 'maximo_miscellaneous',
			'choices' => maximo_get_device_visibility(),
			'priority' => 12,
			'active_callback' => 'maximo_is_scroll_top_button_enabled'
		) 
	)
);