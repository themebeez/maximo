<?php

$maximo_customizer_defaults = maximo_get_customizer_defaults();

$wp_customize->add_section( 
	'maximo_page_header', 
	array(
		'priority'		=> 10,
		'title'			=> esc_html__( 'Page Header', 'maximo' ),
		'panel'			=> 'maximo_site_pages'
	) 
);


$wp_customize->add_setting( 
	'enable_page_header',
	array(
		'default' => $maximo_customizer_defaults['enable_page_header'],
		'sanitize_callback' => 'wp_validate_boolean'
	)
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize, 
		'enable_page_header',
		array(
			'label' => esc_html__( 'Enable Page header', 'maximo' ),
			'section' => 'maximo_page_header',
			'type' => 'ios'
		)
	) 
);


$wp_customize->add_setting(
	'page_header_divider_1',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_1',
		array(
			'section' => 'maximo_page_header',
			'priority' => 10
		)
	)
);

$wp_customize->add_setting(
	'page_header_display_pages',
	array(
		'default'           => $maximo_customizer_defaults['page_header_display_pages'],
		'sanitize_callback' => 'maximo_sanitize_multi_checkboxes_value'
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Sortable_Checkbox_Control(
		$wp_customize,
		'page_header_display_pages',
		array(
			'label'   => esc_html__( 'Enable On', 'maximo' ),
			'section' => 'maximo_page_header',
			'input_attrs' => array(
				'sortable' => false,
				'fullwidth' => true,
			),
			'choices' => maximo_get_general_pages(),
			'priority' => 10,
			'active_callback' => 'maximo_is_page_header_enabled'
		)
	)
);


$wp_customize->add_setting(
	'page_header_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'page_header_info_1',
		array(
			'label' => esc_html__( 'Content', 'maximo' ),
			'section' => 'maximo_page_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_page_header_enabled'
		)
	)
);

$wp_customize->add_setting( 
	'page_header_content_width',
	array(
		'default' => $maximo_customizer_defaults['page_header_content_width'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'page_header_content_width',
		array(
			'label' => esc_html__( 'Width', 'maximo' ),
			'section' => 'maximo_page_header',
			'choices' => maximo_get_container_widths(),
			'priority' => 10,
			'active_callback' => 'maximo_is_page_header_enabled'
		) 
	)
);


$wp_customize->add_setting(
	'page_header_divider_2',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_2',
		array(
			'section' => 'maximo_page_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_page_header_enabled'
		)
	)
);



$wp_customize->add_setting( 
	'page_header_content_position',
	array(
		'default' => $maximo_customizer_defaults['page_header_content_position'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'page_header_content_position',
		array(
			'label' => esc_html__( 'Content Position', 'maximo' ),
			'section' => 'maximo_page_header',
			'choices' => maximo_get_content_positions(),
			'priority' => 10,
			'active_callback' => 'maximo_is_page_header_enabled'
		) 
	)
);


$wp_customize->add_setting(
	'page_header_divider_3',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_3',
		array(
			'section' => 'maximo_page_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_page_header_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'page_header_text_alignments',
	array(
		'default' => $maximo_customizer_defaults['page_header_text_alignments'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'page_header_text_alignments',
		array(
			'label' => esc_html__( 'Content Alignment', 'maximo' ),
			'section' => 'maximo_page_header',
			'choices' => maximo_get_alignments(),
			'priority' => 10,
			'active_callback' => 'maximo_is_page_header_enabled'
		) 
	)
);


$wp_customize->add_setting(
	'page_header_info_2',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'page_header_info_2',
		array(
			'label' => esc_html__( 'Design Settings', 'maximo' ),
			'section' => 'maximo_page_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_page_header_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'page_header_text_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $maximo_customizer_defaults['page_header_text_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'page_header_text_color', 
		array(
			'label'	   	=> esc_html__( 'Text/Link Color', 'maximo' ),
			'section'  	=> 'maximo_page_header',
			'priority' 	=> 10,
			'active_callback' => 'maximo_is_page_header_enabled'
		) 
	) 
);

$wp_customize->add_setting(
	'page_header_divider_4',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_4',
		array(
			'section' => 'maximo_page_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_page_header_enabled'
		)
	)
);

$wp_customize->add_setting( 
	'page_header_link_hover_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $maximo_customizer_defaults['page_header_link_hover_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'page_header_link_hover_color', 
		array(
			'label'	   	=> esc_html__( 'Link Color - On Hover', 'maximo' ),
			'section'  	=> 'maximo_page_header',
			'priority' 	=> 10,
			'active_callback' => 'maximo_is_page_header_enabled'
		) 
	) 
);

$wp_customize->add_setting(
	'page_header_divider_5',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_5',
		array(
			'section' => 'maximo_page_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_page_header_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'page_header_background_type',
	array(
		'default' => $maximo_customizer_defaults['page_header_background_type'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'page_header_background_type',
		array(
			'label' => esc_html__( 'Background Type', 'maximo' ),
			'section' => 'maximo_page_header',
			'choices' => maximo_get_page_header_background_choices(),
			'active_callback' => 'maximo_is_page_header_enabled'
		) 
	)
);

$wp_customize->add_setting(
	'page_header_divider_6',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_6',
		array(
			'section' => 'maximo_page_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_page_header_background_a_color'
		)
	)
);


$wp_customize->add_setting( 
	'page_header_bg_color', 
	array(
		'sanitize_callback' => '',
		'default' => $maximo_customizer_defaults['page_header_bg_color'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'page_header_bg_color', 
		array(
			'label'	   	=> esc_html__( 'Background Color', 'maximo' ),
			'section'  	=> 'maximo_page_header',
			'priority' 	=> 10,
			'active_callback' => 'maximo_is_page_header_background_a_color'
		) 
	) 
);

$wp_customize->add_setting(
	'page_header_divider_7',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_7',
		array(
			'section' => 'maximo_page_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_page_header_background_a_gradient'
		)
	)
);

$wp_customize->add_setting( 
	'page_header_gradient_bg_color_1', 
	array(
		'sanitize_callback' => '',
		'default' => $maximo_customizer_defaults['page_header_gradient_bg_color_1'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'page_header_gradient_bg_color_1', 
		array(
			'label'	   	=> esc_html__( 'Color 1', 'maximo' ),
			'section'  	=> 'maximo_page_header',
			'priority' 	=> 10,
			'active_callback' => 'maximo_is_page_header_background_a_gradient'
		) 
	) 
);

$wp_customize->add_setting(
	'page_header_divider_8',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_8',
		array(
			'section' => 'maximo_page_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_page_header_background_a_gradient'
		)
	)
);

$wp_customize->add_setting( 
	'page_header_gradient_location_1', 
	array(
		'default' => $maximo_customizer_defaults['page_header_gradient_location_1'],
		'sanitize_callback' 	=> 'maximo_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Range_Control( 
		$wp_customize, 
		'page_header_gradient_location_1', 
		array(
			'label' 			=> esc_html__( 'Location 1', 'maximo' ),
			'section'  			=> 'maximo_page_header',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 100,
                'step' 		=> 1,
            ),
            'active_callback' => 'maximo_is_page_header_background_a_gradient'
		) 
	) 
);

$wp_customize->add_setting(
	'page_header_divider_9',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_9',
		array(
			'section' => 'maximo_page_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_page_header_background_a_gradient'
		)
	)
);

$wp_customize->add_setting( 
	'page_header_gradient_bg_color_2', 
	array(
		'sanitize_callback' => '',
		'default' => $maximo_customizer_defaults['page_header_gradient_bg_color_2'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'page_header_gradient_bg_color_2', 
		array(
			'label'	   	=> esc_html__( 'Color 2', 'maximo' ),
			'section'  	=> 'maximo_page_header',
			'priority' 	=> 10,
			'active_callback' => 'maximo_is_page_header_background_a_gradient'
		) 
	) 
);

$wp_customize->add_setting(
	'page_header_divider_10',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_10',
		array(
			'section' => 'maximo_page_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_page_header_background_a_gradient'
		)
	)
);

$wp_customize->add_setting( 
	'page_header_gradient_location_2', 
	array(
		'default' => $maximo_customizer_defaults['page_header_gradient_location_2'],
		'sanitize_callback' 	=> 'maximo_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Range_Control( 
		$wp_customize, 
		'page_header_gradient_location_2', 
		array(
			'label' 			=> esc_html__( 'Location 2', 'maximo' ),
			'section'  			=> 'maximo_page_header',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 100,
                'step' 		=> 1,
            ),
            'active_callback' => 'maximo_is_page_header_background_a_gradient'
		) 
	) 
);

$wp_customize->add_setting(
	'page_header_divider_11',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_11',
		array(
			'section' => 'maximo_page_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_page_header_background_a_gradient'
		)
	)
);

$wp_customize->add_setting( 
	'page_header_gradient_type',
	array(
		'default' => $maximo_customizer_defaults['page_header_gradient_type'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'page_header_gradient_type',
		array(
			'label' => esc_html__( 'Background Type', 'maximo' ),
			'section' => 'maximo_page_header',
			'choices' => maximo_get_gradient_choices(),
			'active_callback' => 'maximo_is_page_header_background_a_gradient'
		) 
	)
);

$wp_customize->add_setting(
	'page_header_divider_12',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_12',
		array(
			'section' => 'maximo_page_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_page_header_gradient_background_linear'
		)
	)
);

$wp_customize->add_setting( 
	'page_header_gradient_linear_angle', 
	array(
		'default' => $maximo_customizer_defaults['page_header_gradient_linear_angle'],
		'sanitize_callback' 	=> 'maximo_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Range_Control( 
		$wp_customize, 
		'page_header_gradient_linear_angle', 
		array(
			'label' 			=> esc_html__( 'Angle', 'maximo' ),
			'section'  			=> 'maximo_page_header',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 360,
                'step' 		=> 1,
            ),
            'active_callback' => 'maximo_is_page_header_gradient_background_linear'
		) 
	) 
);

$wp_customize->add_setting(
	'page_header_divider_13',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_13',
		array(
			'section' => 'maximo_page_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_page_header_gradient_background_radial'
		)
	)
);

$wp_customize->add_setting( 
	'page_header_gradient_radial_position',
	array(
		'default' => $maximo_customizer_defaults['page_header_gradient_radial_position'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'page_header_gradient_radial_position',
		array(
			'label' => esc_html__( 'Position', 'maximo' ),
			'section' => 'maximo_page_header',
			'choices' => maximo_get_radial_gradient_positions(),
			'active_callback' => 'maximo_is_page_header_gradient_background_radial'
		) 
	)
);

$wp_customize->add_setting(
	'page_header_divider_14',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_14',
		array(
			'section' => 'maximo_page_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_page_header_background_a_image'
		)
	)
);

$wp_customize->get_control( 'header_image' )->section = 'maximo_page_header';
$wp_customize->get_control( 'header_image' )->priority = 11;
$wp_customize->get_control( 'header_image' )->label = esc_html__( 'Normal Image', 'maximo' );
$wp_customize->get_control( 'header_image' )->active_callback = 'maximo_is_page_header_background_a_image';


$wp_customize->add_setting(
	'page_header_divider_15',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_15',
		array(
			'section' => 'maximo_page_header',
			'priority' => 11,
			'active_callback' => 'maximo_is_page_header_background_a_image'
		)
	)
);


$wp_customize->add_setting( 
	'page_header_image_background_repeat',
	array(
		'default' => $maximo_customizer_defaults['page_header_image_background_repeat'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'page_header_image_background_repeat',
		array(
			'label' => esc_html__( 'Background Repeat', 'maximo' ),
			'section' => 'maximo_page_header',
			'choices' => maximo_get_background_repeat_choices(),
			'priority' => 12,
			'active_callback' => 'maximo_is_page_header_background_a_image'
		) 
	)
);

$wp_customize->add_setting(
	'page_header_divider_16',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_16',
		array(
			'section' => 'maximo_page_header',
			'priority' => 12,
			'active_callback' => 'maximo_is_page_header_background_a_image'
		)
	)
);


$wp_customize->add_setting( 
	'page_header_image_background_size',
	array(
		'default' => $maximo_customizer_defaults['page_header_image_background_size'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'page_header_image_background_size',
		array(
			'label' => esc_html__( 'Background Size', 'maximo' ),
			'section' => 'maximo_page_header',
			'choices' => maximo_get_background_size_choices(),
			'priority' => 12,
			'active_callback' => 'maximo_is_page_header_background_a_image'
		) 
	)
);


$wp_customize->add_setting(
	'page_header_divider_17',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_17',
		array(
			'section' => 'maximo_page_header',
			'priority' => 12,
			'active_callback' => 'maximo_is_page_header_background_a_image'
		)
	)
);


$wp_customize->add_setting( 
	'page_header_image_background_position',
	array(
		'default' => $maximo_customizer_defaults['page_header_image_background_position'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'page_header_image_background_position',
		array(
			'label' => esc_html__( 'Background Repeat', 'maximo' ),
			'section' => 'maximo_page_header',
			'choices' => maximo_get_background_position_choices(),
			'priority' => 12,
			'active_callback' => 'maximo_is_page_header_background_a_image'
		) 
	)
);


$wp_customize->add_setting(
	'page_header_divider_18',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_18',
		array(
			'section' => 'maximo_page_header',
			'priority' => 12,
			'active_callback' => 'maximo_is_page_header_background_a_image'
		)
	)
);


$wp_customize->add_setting( 
	'page_header_image_background_attachment',
	array(
		'default' => $maximo_customizer_defaults['page_header_image_background_attachment'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'page_header_image_background_attachment',
		array(
			'label' => esc_html__( 'Background Attachment', 'maximo' ),
			'section' => 'maximo_page_header',
			'choices' => maximo_get_background_attachment_choices(),
			'priority' => 12,
			'active_callback' => 'maximo_is_page_header_background_a_image'
		) 
	)
);


$wp_customize->add_setting(
	'page_header_divider_19',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_19',
		array(
			'section' => 'maximo_page_header',
			'priority' => 12,
			'active_callback' => 'maximo_is_page_header_background_a_image'
		)
	)
);


$wp_customize->add_setting( 
	'page_header_overlay_color', 
	array(
		'sanitize_callback' => '',
		'default' => $maximo_customizer_defaults['page_header_overlay_color'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'page_header_overlay_color', 
		array(
			'label'	   	=> esc_html__( 'Overlay Color', 'maximo' ),
			'section'  	=> 'maximo_page_header',
			'priority' 	=> 12,
			'active_callback' => 'maximo_is_page_header_background_a_image'
		) 
	) 
);


$wp_customize->add_setting(
	'page_header_divider_20',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_20',
		array(
			'section' => 'maximo_page_header',
			'priority' => 12,
			'active_callback' => 'maximo_is_page_header_enabled'
		)
	)
);

$wp_customize->add_setting( 
	'page_header_height_desktop', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_height']['desktop'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_height_tablet', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_height']['tablet'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_height_mobile', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_height']['mobile'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Slider_Control( 
		$wp_customize, 
		'page_header_height', 
		array(
			'label' 			=> esc_html__( 'Height (vh)', 'maximo' ),
			'section'  			=> 'maximo_page_header',
			'settings' => array(
		        'desktop' 	=> 'page_header_height_desktop',
		        'tablet' 	=> 'page_header_height_tablet',
		        'mobile' 	=> 'page_header_height_mobile',
		    ),
			'priority' 				=> 12,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    ),
		    'active_callback' => 'maximo_is_page_header_enabled'
		) 
	) 
);


$wp_customize->add_setting(
	'page_header_info_3',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'page_header_info_3',
		array(
			'label' => esc_html__( 'Margin &amp; Padding', 'maximo' ),
			'section' => 'maximo_page_header',
			'priority' => 12,
			'active_callback' => 'maximo_is_page_header_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'page_header_content_margin_desktop_top', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_margin']['desktop_top'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_desktop_right', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_margin']['desktop_right'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_desktop_bottom', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_margin']['desktop_bottom'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_desktop_left', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_margin']['desktop_left'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_tablet_top', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_margin']['tablet_top'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_tablet_right', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_margin']['tablet_right'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_tablet_bottom', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_margin']['tablet_bottom'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_tablet_left', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_margin']['tablet_left'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_mobile_top', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_margin']['mobile_top'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_mobile_right', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_margin']['mobile_right'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_mobile_bottom', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_margin']['mobile_bottom'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_margin_mobile_left', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_margin']['mobile_left'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Dimensions_Control( 
		$wp_customize, 
		'page_header_content_margin', 
		array(
			'label'	   				=> esc_html__( 'Content Margin (px)', 'maximo' ),
			'section'  				=> 'maximo_page_header',				
			'settings'   => array(
		        'desktop_top' 		=> 'page_header_content_margin_desktop_top',
		        'desktop_right' 		=> 'page_header_content_margin_desktop_right',
		        'desktop_bottom' 	=> 'page_header_content_margin_desktop_bottom',
		        'desktop_left' 	=> 'page_header_content_margin_desktop_left',
		        'tablet_top' 		=> 'page_header_content_margin_tablet_top',
		        'tablet_right' 		=> 'page_header_content_margin_tablet_right',
		        'tablet_bottom' 	=> 'page_header_content_margin_tablet_bottom',
		        'tablet_left' 	=> 'page_header_content_margin_tablet_left',
		        'mobile_top' 		=> 'page_header_content_margin_mobile_top',
		        'mobile_right' 		=> 'page_header_content_margin_mobile_right',
		        'mobile_bottom' 	=> 'page_header_content_margin_mobile_bottom',
		        'mobile_left' 	=> 'page_header_content_margin_mobile_left',
			),
			'priority' 				=> 12,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 1000,
		        'step'  => 1,
		    ),
		    'active_callback'		=> 'maximo_is_page_header_enabled',
		) 
	) 
);

$wp_customize->add_setting(
	'page_header_divider_21',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'page_header_divider_21',
		array(
			'section' => 'maximo_page_header',
			'priority' => 12,
			'active_callback' => 'maximo_is_page_header_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'page_header_content_padding_desktop_top', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_padding']['desktop_top'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_desktop_right', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_padding']['desktop_right'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_desktop_bottom', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_padding']['desktop_bottom'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_desktop_left', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_padding']['desktop_left'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_tablet_top', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_padding']['tablet_top'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_tablet_right', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_padding']['tablet_right'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_tablet_bottom', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_padding']['tablet_bottom'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_tablet_left', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_padding']['tablet_left'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_mobile_top', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_padding']['mobile_top'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_mobile_right', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_padding']['mobile_right'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_mobile_bottom', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_padding']['mobile_bottom'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'page_header_content_padding_mobile_left', 
	array(
		'default'           	=> $maximo_customizer_defaults['page_header_content_padding']['mobile_left'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Dimensions_Control( 
		$wp_customize, 
		'page_header_content_padding', 
		array(
			'label'	   				=> esc_html__( 'Content Padding (px)', 'maximo' ),
			'section'  				=> 'maximo_page_header',				
			'settings'   => array(
		        'desktop_top' 		=> 'page_header_content_padding_desktop_top',
		        'desktop_right' 		=> 'page_header_content_padding_desktop_right',
		        'desktop_bottom' 	=> 'page_header_content_padding_desktop_bottom',
		        'desktop_left' 	=> 'page_header_content_padding_desktop_left',
		        'tablet_top' 		=> 'page_header_content_padding_tablet_top',
		        'tablet_right' 		=> 'page_header_content_padding_tablet_right',
		        'tablet_bottom' 	=> 'page_header_content_padding_tablet_bottom',
		        'tablet_left' 	=> 'page_header_content_padding_tablet_left',
		        'mobile_top' 		=> 'page_header_content_padding_mobile_top',
		        'mobile_right' 		=> 'page_header_content_padding_mobile_right',
		        'mobile_bottom' 	=> 'page_header_content_padding_mobile_bottom',
		        'mobile_left' 	=> 'page_header_content_padding_mobile_left',
			),
			'priority' 				=> 12,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 1000,
		        'step'  => 1,
		    ),
		    'active_callback'		=> 'maximo_is_page_header_enabled',
		) 
	) 
);