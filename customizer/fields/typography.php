<?php

$maximo_customizer_defaults = maximo_get_customizer_defaults();

$wp_customize->add_section( 
	'maximo_typography',
	array(
		'title' => esc_html__( 'Typography', 'maximo' ),
		'panel' => 'maximo_general_panel'
	)
);


$wp_customize->add_setting(
	'typography_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'typography_info_1',
		array(
			'label' => esc_html__( 'Body &amp; Content', 'maximo' ),
			'section' => 'maximo_typography',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'body_font_type',
	array(
		'default' => $maximo_customizer_defaults['body_font_type'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'body_font_type',
		array(
			'label' => esc_html__( 'Font Type', 'maximo' ),
			'section' => 'maximo_typography',
			'choices' => maximo_font_types()
		) 
	)
);

$wp_customize->add_setting(
	'typography_divider_1',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'typography_divider_1',
		array(
			'section' => 'maximo_typography',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'body_system_font_family',
	array(
		'default' => $maximo_customizer_defaults['body_system_font_family'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'body_system_font_family',
		array(
			'label' => esc_html__( 'Font Family', 'maximo' ),
			'section' => 'maximo_typography',
			'choices' => maximo_get_standard_fonts(),
			'active_callback' => 'maximo_is_body_font_a_system_font',
		) 
	)
);

$wp_customize->add_setting( 
	'body_system_font_weight',
	array(
		'default' => $maximo_customizer_defaults['body_system_font_weight'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'body_system_font_weight',
		array(
			'label' => esc_html__( 'Font Weight', 'maximo' ),
			'section' => 'maximo_typography',
			'choices' => maximo_get_standard_font_weights(),
			'active_callback' => 'maximo_is_body_font_a_system_font',
		) 
	)
);


$wp_customize->add_setting( 
	'body_google_font',
	array(
		'default' => $maximo_customizer_defaults['body_google_font'],
		'sanitize_callback' => ''
	)
);

$wp_customize->add_control( 
	new Maximo_Customize_Google_Font_Selector_Control( 
		$wp_customize, 
		'body_google_font',
		array(
			'label' => '',
			'section' => 'maximo_typography',
			'input_attrs' => array(
				'font_count' => 'all',
				'orderby' => 'alpha',
			),
			'active_callback' => 'maximo_is_body_font_a_google_font',
		)
	) 
);

$wp_customize->add_setting(
	'typography_divider_2',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'typography_divider_2',
		array(
			'section' => 'maximo_typography',
			'priority' => 10
		)
	)
);

$wp_customize->add_setting( 
	'body_font_size_desktop', 
	array(
		'default'           	=> $maximo_customizer_defaults['body_font_size']['desktop'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'body_font_size_tablet', 
	array(
		'default'           	=> $maximo_customizer_defaults['body_font_size']['tablet'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'body_font_size_mobile', 
	array(
		'default'           	=> $maximo_customizer_defaults['body_font_size']['mobile'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Slider_Control( 
		$wp_customize, 
		'body_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'maximo' ),
			'section'  			=> 'maximo_typography',
			'settings' => array(
		        'desktop' 	=> 'body_font_size_desktop',
		        'tablet' 	=> 'body_font_size_tablet',
		        'mobile' 	=> 'body_font_size_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    )
		) 
	) 
);


$wp_customize->add_setting(
	'typography_divider_3',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'typography_divider_3',
		array(
			'section' => 'maximo_typography',
			'priority' => 10
		)
	)
);

$wp_customize->add_setting( 
	'body_line_height_desktop', 
	array(
		'default'           	=> $maximo_customizer_defaults['body_line_height']['desktop'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'body_line_height_tablet', 
	array(
		'default'           	=> $maximo_customizer_defaults['body_line_height']['tablet'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'body_line_height_mobile', 
	array(
		'default'           	=> $maximo_customizer_defaults['body_line_height']['mobile'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Slider_Control( 
		$wp_customize, 
		'body_line_height', 
		array(
			'label' 			=> esc_html__( 'Line Height', 'maximo' ),
			'section'  			=> 'maximo_typography',
			'settings' => array(
		        'desktop' 	=> 'body_line_height_desktop',
		        'tablet' 	=> 'body_line_height_tablet',
		        'mobile' 	=> 'body_line_height_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 0.1,
		    )
		) 
	) 
);


$wp_customize->add_setting(
	'typography_info_2',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'typography_info_2',
		array(
			'label' => esc_html__( ' Headings (H1-H6)', 'maximo' ),
			'section' => 'maximo_typography',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'headings_font_type',
	array(
		'default' => $maximo_customizer_defaults['headings_font_type'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'headings_font_type',
		array(
			'label' => esc_html__( 'Font Type', 'maximo' ),
			'section' => 'maximo_typography',
			'choices' => maximo_font_types()
		) 
	)
);

$wp_customize->add_setting(
	'typography_divider_4',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'typography_divider_4',
		array(
			'section' => 'maximo_typography',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'headings_system_font_family',
	array(
		'default' => $maximo_customizer_defaults['headings_system_font_family'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'headings_system_font_family',
		array(
			'label' => esc_html__( 'Font Family', 'maximo' ),
			'section' => 'maximo_typography',
			'choices' => maximo_get_standard_fonts(),
			'active_callback' => 'maximo_is_headings_font_a_system_font',
		) 
	)
);

$wp_customize->add_setting( 
	'headings_system_font_weight',
	array(
		'default' => $maximo_customizer_defaults['headings_system_font_weight'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'headings_system_font_weight',
		array(
			'label' => esc_html__( 'Font Weight', 'maximo' ),
			'section' => 'maximo_typography',
			'choices' => maximo_get_standard_font_weights(),
			'active_callback' => 'maximo_is_headings_font_a_system_font',
		) 
	)
);


$wp_customize->add_setting( 
	'headings_google_font',
	array(
		'default' => $maximo_customizer_defaults['headings_google_font'],
		'sanitize_callback' => ''
	)
);

$wp_customize->add_control( 
	new Maximo_Customize_Google_Font_Selector_Control( 
		$wp_customize, 
		'headings_google_font',
		array(
			'label' => '',
			'section' => 'maximo_typography',
			'input_attrs' => array(
				'font_count' => 'all',
				'orderby' => 'alpha',
			),
			'active_callback' => 'maximo_is_headings_font_a_google_font',
		)
	) 
);


$wp_customize->add_setting(
	'typography_info_3',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'typography_info_3',
		array(
			'label' => esc_html__( 'Heading - H1', 'maximo' ),
			'section' => 'maximo_typography',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'h1_font_size_desktop', 
	array(
		'default'           	=> $maximo_customizer_defaults['h1_font_size']['desktop'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h1_font_size_tablet', 
	array(
		'default'           	=> $maximo_customizer_defaults['h1_font_size']['tablet'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h1_font_size_mobile', 
	array(
		'default'           	=> $maximo_customizer_defaults['h1_font_size']['mobile'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Slider_Control( 
		$wp_customize, 
		'h1_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'maximo' ),
			'section'  			=> 'maximo_typography',
			'settings' => array(
		        'desktop' 	=> 'h1_font_size_desktop',
		        'tablet' 	=> 'h1_font_size_tablet',
		        'mobile' 	=> 'h1_font_size_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    ),
		) 
	) 
);

$wp_customize->add_setting(
	'typography_divider_5',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'typography_divider_5',
		array(
			'section' => 'maximo_typography',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'h1_line_height_desktop', 
	array(
		'default'           	=> $maximo_customizer_defaults['h1_line_height']['desktop'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h1_line_height_tablet', 
	array(
		'default'           	=> $maximo_customizer_defaults['h1_line_height']['tablet'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h1_line_height_mobile', 
	array(
		'default'           	=> $maximo_customizer_defaults['h1_line_height']['mobile'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Slider_Control( 
		$wp_customize, 
		'h1_line_height', 
		array(
			'label' 			=> esc_html__( 'Line Height', 'maximo' ),
			'section'  			=> 'maximo_typography',
			'settings' => array(
		        'desktop' 	=> 'h1_line_height_desktop',
		        'tablet' 	=> 'h1_line_height_tablet',
		        'mobile' 	=> 'h1_line_height_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 0.1,
		    ),
		) 
	) 
);





$wp_customize->add_setting(
	'typography_info_4',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'typography_info_4',
		array(
			'label' => esc_html__( 'Heading - H2', 'maximo' ),
			'section' => 'maximo_typography',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'h2_font_size_desktop', 
	array(
		'default'           	=> $maximo_customizer_defaults['h2_font_size']['desktop'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h2_font_size_tablet', 
	array(
		'default'           	=> $maximo_customizer_defaults['h2_font_size']['tablet'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h2_font_size_mobile', 
	array(
		'default'           	=> $maximo_customizer_defaults['h2_font_size']['mobile'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Slider_Control( 
		$wp_customize, 
		'h2_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'maximo' ),
			'section'  			=> 'maximo_typography',
			'settings' => array(
		        'desktop' 	=> 'h2_font_size_desktop',
		        'tablet' 	=> 'h2_font_size_tablet',
		        'mobile' 	=> 'h2_font_size_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    ),
		) 
	) 
);

$wp_customize->add_setting(
	'typography_divider_6',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'typography_divider_6',
		array(
			'section' => 'maximo_typography',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'h2_line_height_desktop', 
	array(
		'default'           	=> $maximo_customizer_defaults['h2_line_height']['desktop'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h2_line_height_tablet', 
	array(
		'default'           	=> $maximo_customizer_defaults['h2_line_height']['tablet'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h2_line_height_mobile', 
	array(
		'default'           	=> $maximo_customizer_defaults['h2_line_height']['mobile'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Slider_Control( 
		$wp_customize, 
		'h2_line_height', 
		array(
			'label' 			=> esc_html__( 'Line Height', 'maximo' ),
			'section'  			=> 'maximo_typography',
			'settings' => array(
		        'desktop' 	=> 'h2_line_height_desktop',
		        'tablet' 	=> 'h2_line_height_tablet',
		        'mobile' 	=> 'h2_line_height_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 0.1,
		    ),
		) 
	) 
);




$wp_customize->add_setting(
	'typography_info_5',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'typography_info_5',
		array(
			'label' => esc_html__( 'Heading - H3', 'maximo' ),
			'section' => 'maximo_typography',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'h3_font_size_desktop', 
	array(
		'default'           	=> $maximo_customizer_defaults['h3_font_size']['desktop'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h3_font_size_tablet', 
	array(
		'default'           	=> $maximo_customizer_defaults['h3_font_size']['tablet'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h3_font_size_mobile', 
	array(
		'default'           	=> $maximo_customizer_defaults['h3_font_size']['mobile'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Slider_Control( 
		$wp_customize, 
		'h3_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'maximo' ),
			'section'  			=> 'maximo_typography',
			'settings' => array(
		        'desktop' 	=> 'h3_font_size_desktop',
		        'tablet' 	=> 'h3_font_size_tablet',
		        'mobile' 	=> 'h3_font_size_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    ),
		) 
	) 
);

$wp_customize->add_setting(
	'typography_divider_7',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'typography_divider_7',
		array(
			'section' => 'maximo_typography',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'h3_line_height_desktop', 
	array(
		'default'           	=> $maximo_customizer_defaults['h3_line_height']['desktop'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h3_line_height_tablet', 
	array(
		'default'           	=> $maximo_customizer_defaults['h3_line_height']['tablet'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h3_line_height_mobile', 
	array(
		'default'           	=> $maximo_customizer_defaults['h3_line_height']['mobile'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Slider_Control( 
		$wp_customize, 
		'h3_line_height', 
		array(
			'label' 			=> esc_html__( 'Line Height', 'maximo' ),
			'section'  			=> 'maximo_typography',
			'settings' => array(
		        'desktop' 	=> 'h3_line_height_desktop',
		        'tablet' 	=> 'h3_line_height_tablet',
		        'mobile' 	=> 'h3_line_height_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 0.1,
		    ),
		) 
	) 
);




$wp_customize->add_setting(
	'typography_info_6',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'typography_info_6',
		array(
			'label' => esc_html__( 'Heading - H4', 'maximo' ),
			'section' => 'maximo_typography',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'h4_font_size_desktop', 
	array(
		'default'           	=> $maximo_customizer_defaults['h4_font_size']['desktop'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h4_font_size_tablet', 
	array(
		'default'           	=> $maximo_customizer_defaults['h4_font_size']['tablet'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h4_font_size_mobile', 
	array(
		'default'           	=> $maximo_customizer_defaults['h4_font_size']['mobile'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Slider_Control( 
		$wp_customize, 
		'h4_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'maximo' ),
			'section'  			=> 'maximo_typography',
			'settings' => array(
		        'desktop' 	=> 'h4_font_size_desktop',
		        'tablet' 	=> 'h4_font_size_tablet',
		        'mobile' 	=> 'h4_font_size_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    ),
		) 
	) 
);

$wp_customize->add_setting(
	'typography_divider_8',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'typography_divider_8',
		array(
			'section' => 'maximo_typography',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'h4_line_height_desktop', 
	array(
		'default'           	=> $maximo_customizer_defaults['h4_line_height']['desktop'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h4_line_height_tablet', 
	array(
		'default'           	=> $maximo_customizer_defaults['h4_line_height']['tablet'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h4_line_height_mobile', 
	array(
		'default'           	=> $maximo_customizer_defaults['h4_line_height']['mobile'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Slider_Control( 
		$wp_customize, 
		'h4_line_height', 
		array(
			'label' 			=> esc_html__( 'Line Height', 'maximo' ),
			'section'  			=> 'maximo_typography',
			'settings' => array(
		        'desktop' 	=> 'h4_line_height_desktop',
		        'tablet' 	=> 'h4_line_height_tablet',
		        'mobile' 	=> 'h4_line_height_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 0.1,
		    ),
		) 
	) 
);





$wp_customize->add_setting(
	'typography_info_7',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'typography_info_7',
		array(
			'label' => esc_html__( 'Heading - H5', 'maximo' ),
			'section' => 'maximo_typography',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'h5_font_size_desktop', 
	array(
		'default'           	=> $maximo_customizer_defaults['h5_font_size']['desktop'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h5_font_size_tablet', 
	array(
		'default'           	=> $maximo_customizer_defaults['h5_font_size']['tablet'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h5_font_size_mobile', 
	array(
		'default'           	=> $maximo_customizer_defaults['h5_font_size']['mobile'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Slider_Control( 
		$wp_customize, 
		'h5_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'maximo' ),
			'section'  			=> 'maximo_typography',
			'settings' => array(
		        'desktop' 	=> 'h5_font_size_desktop',
		        'tablet' 	=> 'h5_font_size_tablet',
		        'mobile' 	=> 'h5_font_size_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    ),
		) 
	) 
);

$wp_customize->add_setting(
	'typography_divider_9',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'typography_divider_9',
		array(
			'section' => 'maximo_typography',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'h5_line_height_desktop', 
	array(
		'default'           	=> $maximo_customizer_defaults['h5_line_height']['desktop'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h5_line_height_tablet', 
	array(
		'default'           	=> $maximo_customizer_defaults['h5_line_height']['tablet'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h5_line_height_mobile', 
	array(
		'default'           	=> $maximo_customizer_defaults['h5_line_height']['mobile'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Slider_Control( 
		$wp_customize, 
		'h5_line_height', 
		array(
			'label' 			=> esc_html__( 'Line Height', 'maximo' ),
			'section'  			=> 'maximo_typography',
			'settings' => array(
		        'desktop' 	=> 'h5_line_height_desktop',
		        'tablet' 	=> 'h5_line_height_tablet',
		        'mobile' 	=> 'h5_line_height_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 0.1,
		    ),
		) 
	) 
);




$wp_customize->add_setting(
	'typography_info_8',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'typography_info_8',
		array(
			'label' => esc_html__( 'Heading - H6', 'maximo' ),
			'section' => 'maximo_typography',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'h6_font_size_desktop', 
	array(
		'default'           	=> $maximo_customizer_defaults['h6_font_size']['desktop'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h6_font_size_tablet', 
	array(
		'default'           	=> $maximo_customizer_defaults['h6_font_size']['tablet'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h6_font_size_mobile', 
	array(
		'default'           	=> $maximo_customizer_defaults['h6_font_size']['mobile'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Slider_Control( 
		$wp_customize, 
		'h6_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'maximo' ),
			'section'  			=> 'maximo_typography',
			'settings' => array(
		        'desktop' 	=> 'h6_font_size_desktop',
		        'tablet' 	=> 'h6_font_size_tablet',
		        'mobile' 	=> 'h6_font_size_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    ),
		) 
	) 
);

$wp_customize->add_setting(
	'typography_divider_10',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'typography_divider_10',
		array(
			'section' => 'maximo_typography',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'h6_line_height_desktop', 
	array(
		'default'           	=> $maximo_customizer_defaults['h6_line_height']['desktop'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h6_line_height_tablet', 
	array(
		'default'           	=> $maximo_customizer_defaults['h6_line_height']['tablet'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h6_line_height_mobile', 
	array(
		'default'           	=> $maximo_customizer_defaults['h6_line_height']['mobile'],
		'sanitize_callback' 	=> 'maximo_sanitize_float_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Slider_Control( 
		$wp_customize, 
		'h6_line_height', 
		array(
			'label' 			=> esc_html__( 'Line Height', 'maximo' ),
			'section'  			=> 'maximo_typography',
			'settings' => array(
		        'desktop' 	=> 'h6_line_height_desktop',
		        'tablet' 	=> 'h6_line_height_tablet',
		        'mobile' 	=> 'h6_line_height_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 0.1,
		    ),
		) 
	) 
);