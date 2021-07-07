<?php

$maximo_customizer_defaults = maximo_get_customizer_defaults();

$wp_customize->add_section( 
	'maximo_layout',
	array(
		'title' => esc_html__( 'Layout', 'maximo' ),
		'panel' => 'maximo_general_panel'
	)
);


$wp_customize->add_setting( 
	'site_layout',
	array(
		'default' => $maximo_customizer_defaults['site_layout'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control(
		$wp_customize, 
		'site_layout',
		array(
			'label' => esc_html__( 'Site Layout', 'maximo' ),
			'section' => 'maximo_layout',
			'choices' => maximo_get_site_layouts()
		) 
	)
);


$wp_customize->add_setting(
	'layout_divider_1',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'layout_divider_1',
		array(
			'section' => 'maximo_layout',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'container_width', 
	array(
		'default' => $maximo_customizer_defaults['container_width'],
		'sanitize_callback' 	=> 'maximo_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Range_Control( 
		$wp_customize, 
		'container_width', 
		array(
			'label' 			=> esc_html__( 'Container Width (px)', 'maximo' ),
			'section'  			=> 'maximo_layout',
            'input_attrs' 		=> array(
                'min'		=> 500,
                'max' 		=> 1920,
                'step' 		=> 1,
            ),
            'active_callback' => 'maximo_is_fullwidth_stretched_site_layout_disabled'
		) 
	) 
);


$wp_customize->add_setting(
	'layout_divider_2',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'layout_divider_2',
		array(
			'section' => 'maximo_layout',
			'priority' => 10,
			'active_callback' => 'maximo_is_fullwidth_stretched_site_layout_disabled'
		)
	)
);