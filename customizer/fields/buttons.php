<?php

$maximo_customizer_defaults = maximo_get_customizer_defaults();

$wp_customize->add_section( 
	'maximo_buttons',
	array(
		'title' => esc_html__( 'Buttons', 'maximo' ),
		'panel' => 'maximo_general_panel'
	)
);

$wp_customize->add_setting(
	'buttons_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'buttons_info_1',
		array(
			'label' => esc_html__( 'Primary Button', 'maximo' ),
			'section' => 'maximo_buttons',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'button_style',
	array(
		'default' => $maximo_customizer_defaults['button_style'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'button_style',
		array(
			'label' => esc_html__( 'Style', 'maximo' ),
			'section' => 'maximo_buttons',
			'choices' => maximo_button_styles()
		) 
	)
);


$wp_customize->add_setting(
	'buttons_divider_1',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'buttons_divider_1',
		array(
			'section' => 'maximo_buttons',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'btn_txt_color', 
	array(
		'sanitize_callback' => '',
		'default' => $maximo_customizer_defaults['btn_txt_color'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'btn_txt_color', 
		array(
			'label'	   	=> esc_html__( 'Text Color', 'maximo' ),
			'section'  	=> 'maximo_buttons',
			'priority' 	=> 10,
		) 
	) 
);

$wp_customize->add_setting(
	'buttons_divider_2',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'buttons_divider_2',
		array(
			'section' => 'maximo_buttons',
			'priority' => 10
		)
	)
);

$wp_customize->add_setting( 
	'btn_bg_color', 
	array(
		'sanitize_callback' => '',
		'default' => $maximo_customizer_defaults['btn_bg_color'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'btn_bg_color', 
		array(
			'label'	   	=> esc_html__( 'Background Color', 'maximo' ),
			'section'  	=> 'maximo_buttons',
			'priority' 	=> 10,
		) 
	) 
);


$wp_customize->add_setting(
	'buttons_divider_3',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'buttons_divider_3',
		array(
			'section' => 'maximo_buttons',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'btn_txt_hover_color', 
	array(
		'sanitize_callback' => '',
		'default' => $maximo_customizer_defaults['btn_txt_hover_color'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'btn_txt_hover_color', 
		array(
			'label'	   	=> esc_html__( 'Text Color - On Hover', 'maximo' ),
			'section'  	=> 'maximo_buttons',
			'priority' 	=> 10,
		) 
	) 
);

$wp_customize->add_setting(
	'buttons_divider_4',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'buttons_divider_4',
		array(
			'section' => 'maximo_buttons',
			'priority' => 10
		)
	)
);

$wp_customize->add_setting( 
	'btn_bg_hover_color', 
	array(
		'sanitize_callback' => '',
		'default' => $maximo_customizer_defaults['btn_bg_hover_color'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'btn_bg_hover_color', 
		array(
			'label'	   	=> esc_html__( 'Background Color - On Hover', 'maximo' ),
			'section'  	=> 'maximo_buttons',
			'priority' 	=> 10,
		) 
	) 
);

$wp_customize->add_setting(
	'buttons_divider_5',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'buttons_divider_5',
		array(
			'section' => 'maximo_buttons',
			'priority' => 10
		)
	)
);

$wp_customize->add_setting( 
	'btn_border_width', 
	array(
		'default' => $maximo_customizer_defaults['btn_border_width'],
		'sanitize_callback' 	=> 'maximo_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Range_Control( 
		$wp_customize, 
		'btn_border_width', 
		array(
			'label' 			=> esc_html__( 'Border Width (px)', 'maximo' ),
			'section'  			=> 'maximo_buttons',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 15,
                'step' 		=> 1,
            ),
		) 
	) 
);

$wp_customize->add_setting(
	'buttons_divider_6',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'buttons_divider_6',
		array(
			'section' => 'maximo_buttons',
			'priority' => 10,
			'active_callback' => 'maximo_is_button_rounded'
		)
	)
);

$wp_customize->add_setting( 
	'btn_border_radius', 
	array(
		'default' => $maximo_customizer_defaults['btn_border_radius'],
		'sanitize_callback' 	=> 'maximo_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Range_Control( 
		$wp_customize, 
		'btn_border_radius', 
		array(
			'label' 			=> esc_html__( 'Border Radius (px)', 'maximo' ),
			'section'  			=> 'maximo_buttons',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 100,
                'step' 		=> 1,
            ),
            'active_callback' => 'maximo_is_button_rounded'
		) 
	) 
);

$wp_customize->add_setting(
	'buttons_divider_7',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'buttons_divider_7',
		array(
			'section' => 'maximo_buttons',
			'priority' => 10
		)
	)
);

$wp_customize->add_setting( 
	'btn_border_color', 
	array(
		'sanitize_callback' => '',
		'default' => $maximo_customizer_defaults['btn_border_color'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'btn_border_color', 
		array(
			'label'	   	=> esc_html__( 'Border Color', 'maximo' ),
			'section'  	=> 'maximo_buttons',
			'priority' 	=> 10,
		) 
	) 
);


$wp_customize->add_setting(
	'buttons_divider_8',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'buttons_divider_8',
		array(
			'section' => 'maximo_buttons',
			'priority' => 10
		)
	)
);

$wp_customize->add_setting( 
	'btn_border_hover_color', 
	array(
		'sanitize_callback' => '',
		'default' => $maximo_customizer_defaults['btn_border_hover_color'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'btn_border_hover_color', 
		array(
			'label'	   	=> esc_html__( 'Border Color - On Hover', 'maximo' ),
			'section'  	=> 'maximo_buttons',
			'priority' 	=> 10,
		) 
	) 
);






$wp_customize->add_setting(
	'buttons_info_2',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'buttons_info_2',
		array(
			'label' => esc_html__( 'Text Button', 'maximo' ),
			'section' => 'maximo_buttons',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'txt_button_style',
	array(
		'default' => $maximo_customizer_defaults['txt_button_style'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'txt_button_style',
		array(
			'label' => esc_html__( 'Style', 'maximo' ),
			'section' => 'maximo_buttons',
			'choices' => maximo_button_styles()
		) 
	)
);


$wp_customize->add_setting(
	'buttons_divider_9',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'buttons_divider_9',
		array(
			'section' => 'maximo_buttons',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'txt_btn_txt_color', 
	array(
		'sanitize_callback' => '',
		'default' => $maximo_customizer_defaults['txt_btn_txt_color'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'txt_btn_txt_color', 
		array(
			'label'	   	=> esc_html__( 'Text Color', 'maximo' ),
			'section'  	=> 'maximo_buttons',
			'priority' 	=> 10,
		) 
	) 
);

$wp_customize->add_setting(
	'buttons_divider_10',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'buttons_divider_10',
		array(
			'section' => 'maximo_buttons',
			'priority' => 10
		)
	)
);

$wp_customize->add_setting( 
	'txt_btn_bg_color', 
	array(
		'sanitize_callback' => '',
		'default' => $maximo_customizer_defaults['txt_btn_bg_color'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'txt_btn_bg_color', 
		array(
			'label'	   	=> esc_html__( 'Background Color', 'maximo' ),
			'section'  	=> 'maximo_buttons',
			'priority' 	=> 10,
		) 
	) 
);


$wp_customize->add_setting(
	'buttons_divider_11',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'buttons_divider_11',
		array(
			'section' => 'maximo_buttons',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'txt_btn_txt_hover_color', 
	array(
		'sanitize_callback' => '',
		'default' => $maximo_customizer_defaults['txt_btn_txt_hover_color'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'txt_btn_txt_hover_color', 
		array(
			'label'	   	=> esc_html__( 'Text Color - On Hover', 'maximo' ),
			'section'  	=> 'maximo_buttons',
			'priority' 	=> 10,
		) 
	) 
);

$wp_customize->add_setting(
	'buttons_divider_12',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'buttons_divider_12',
		array(
			'section' => 'maximo_buttons',
			'priority' => 10
		)
	)
);

$wp_customize->add_setting( 
	'txt_btn_bg_hover_color', 
	array(
		'sanitize_callback' => '',
		'default' => $maximo_customizer_defaults['txt_btn_bg_hover_color'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'txt_btn_bg_hover_color', 
		array(
			'label'	   	=> esc_html__( 'Background Color - On Hover', 'maximo' ),
			'section'  	=> 'maximo_buttons',
			'priority' 	=> 10,
		) 
	) 
);

$wp_customize->add_setting(
	'buttons_divider_13',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'buttons_divider_13',
		array(
			'section' => 'maximo_buttons',
			'priority' => 10
		)
	)
);

$wp_customize->add_setting( 
	'txt_btn_border_width', 
	array(
		'default' => $maximo_customizer_defaults['txt_btn_border_width'],
		'sanitize_callback' 	=> 'maximo_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Range_Control( 
		$wp_customize, 
		'txt_btn_border_width', 
		array(
			'label' 			=> esc_html__( 'Border Width (px)', 'maximo' ),
			'section'  			=> 'maximo_buttons',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 15,
                'step' 		=> 1,
            ),
		) 
	) 
);

$wp_customize->add_setting(
	'buttons_divider_14',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'buttons_divider_14',
		array(
			'section' => 'maximo_buttons',
			'priority' => 10,
			'active_callback' => 'maximo_is_text_button_rounded'
		)
	)
);

$wp_customize->add_setting( 
	'txt_btn_border_radius', 
	array(
		'default' => $maximo_customizer_defaults['txt_btn_border_radius'],
		'sanitize_callback' 	=> 'maximo_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Range_Control( 
		$wp_customize, 
		'txt_btn_border_radius', 
		array(
			'label' 			=> esc_html__( 'Border Radius (px)', 'maximo' ),
			'section'  			=> 'maximo_buttons',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 100,
                'step' 		=> 1,
            ),
            'active_callback' => 'maximo_is_text_button_rounded'
		) 
	) 
);

$wp_customize->add_setting(
	'buttons_divider_15',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'buttons_divider_15',
		array(
			'section' => 'maximo_buttons',
			'priority' => 10
		)
	)
);

$wp_customize->add_setting( 
	'txt_btn_border_color', 
	array(
		'sanitize_callback' => '',
		'default' => $maximo_customizer_defaults['txt_btn_border_color'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'txt_btn_border_color', 
		array(
			'label'	   	=> esc_html__( 'Border Color', 'maximo' ),
			'section'  	=> 'maximo_buttons',
			'priority' 	=> 10,
		) 
	) 
);


$wp_customize->add_setting(
	'buttons_divider_16',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'buttons_divider_16',
		array(
			'section' => 'maximo_buttons',
			'priority' => 10
		)
	)
);

$wp_customize->add_setting( 
	'txt_btn_border_hover_color', 
	array(
		'sanitize_callback' => '',
		'default' => $maximo_customizer_defaults['txt_btn_border_hover_color'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'txt_btn_border_hover_color', 
		array(
			'label'	   	=> esc_html__( 'Border Color - On Hover', 'maximo' ),
			'section'  	=> 'maximo_buttons',
			'priority' 	=> 10,
		) 
	) 
);