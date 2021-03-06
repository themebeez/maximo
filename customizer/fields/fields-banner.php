<?php

$maximo_customizer_defaults = maximo_get_customizer_defaults();

$wp_customize->add_section( 
	'maximo_banner_slider', 
	array(
		'priority'		=> 12,
		'title'			=> esc_html__( 'Banner', 'maximo' )
	) 
);

$wp_customize->add_setting( 
	'enable_banner_slider', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['enable_banner_slider'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'enable_banner_slider', 
		array(
			'label' => esc_html__( 'Enable Banner', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'type' => 'ios',
		) 
	) 
);

$wp_customize->add_setting(
	'banner_slider_separator_1',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_1',
		array(
			'section' => 'maximo_banner_slider'
		)
	)
);


$wp_customize->add_setting( 
	'banner_slider_enable_on',
	array(
		'default' => $maximo_customizer_defaults['banner_slider_enable_on'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'banner_slider_enable_on',
		array(
			'label' => esc_html__( 'Enable On', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'choices' => maximo_banner_display_choices(),
			'priority' => 10,
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);


$wp_customize->add_setting(
	'banner_slider_separator_2',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_2',
		array(
			'section' => 'maximo_banner_slider',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'banner_slider_visibility',
	array(
		'default' => $maximo_customizer_defaults['banner_slider_visibility'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'banner_slider_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'choices' => maximo_get_device_visibility(),
			'priority' => 10,
			'active_callback' => 'maximo_is_banner_slider_enabled'
		) 
	)
);


$wp_customize->add_setting(
	'banner_slider_separator_3',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_3',
		array(
			'section' => 'maximo_banner_slider',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'banner_slider_width',
	array(
		'default' => $maximo_customizer_defaults['banner_slider_width'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'banner_slider_width',
		array(
			'label' => esc_html__( 'Width', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'choices' => maximo_banner_width_choices(),
			'priority' => 10,
			'active_callback' => 'maximo_is_banner_slider_enabled'
		) 
	)
);


$wp_customize->add_setting(
	'banner_slider_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'banner_slider_info_1',
		array(
			'label' => esc_html__( 'Banner Content', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'priority' => 10,
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'banner_slider_content_width',
	array(
		'default' => $maximo_customizer_defaults['banner_slider_content_width'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'banner_slider_content_width',
		array(
			'label' => esc_html__( 'Content Width', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'choices' => maximo_get_container_widths(),
			'priority' => 10,
			'active_callback' => 'maximo_is_banner_width_not_content_width'
		) 
	)
);


$wp_customize->add_setting(
	'banner_slider_separator_4',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_4',
		array(
			'section' => 'maximo_banner_slider',
			'active_callback' => 'maximo_is_banner_width_not_content_width'
		)
	)
);


$wp_customize->add_setting( 
	'banner_slider_content_wrap_width_desktop', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_wrap_width']['desktop'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_wrap_width_tablet', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_wrap_width']['tablet'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_wrap_width_mobile', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_wrap_width']['mobile'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Slider_Control( 
		$wp_customize, 
		'banner_slider_content_wrap_width', 
		array(
			'label' 			=> esc_html__( 'Width (%)', 'maximo' ),
			'section'  			=> 'maximo_banner_slider',
			'settings' => array(
		        'desktop' 	=> 'banner_slider_content_wrap_width_desktop',
		        'tablet' 	=> 'banner_slider_content_wrap_width_tablet',
		        'mobile' 	=> 'banner_slider_content_wrap_width_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    ),
		    'active_callback' => 'maximo_is_banner_slider_enabled'
		) 
	) 
);

$wp_customize->add_setting(
	'banner_slider_separator_5',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_5',
		array(
			'section' => 'maximo_banner_slider',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'banner_slider_content_position',
	array(
		'default' => $maximo_customizer_defaults['banner_slider_content_position'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'banner_slider_content_position',
		array(
			'label' => esc_html__( 'Content Position', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'choices' => maximo_get_content_positions(),
			'priority' => 10,
			'active_callback' => 'maximo_is_banner_slider_enabled'
		) 
	)
);

$wp_customize->add_setting(
	'banner_slider_separator_6',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_6',
		array(
			'section' => 'maximo_banner_slider',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);

$wp_customize->add_setting( 
	'banner_slider_content_alignment',
	array(
		'default' => $maximo_customizer_defaults['banner_slider_content_alignment'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'banner_slider_content_alignment',
		array(
			'label' => esc_html__( 'Content Alignment', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'choices' => maximo_get_alignments(),
			'priority' => 10,
			'active_callback' => 'maximo_is_banner_slider_enabled'
		) 
	)
);


$wp_customize->add_setting(
	'banner_slider_separator_7',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_7',
		array(
			'section' => 'maximo_banner_slider',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);



$wp_customize->add_setting( 
	'banner_slider_post_no', 
	array(
		'default' => $maximo_customizer_defaults['banner_slider_post_no'],
		'sanitize_callback' 	=> 'maximo_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Range_Control( 
		$wp_customize, 
		'banner_slider_post_no', 
		array(
			'label' 			=> esc_html__( 'Post Number', 'maximo' ),
			'section'  			=> 'maximo_banner_slider',
            'input_attrs' 		=> array(
                'min'		=> 1,
                'max' 		=> 5,
                'step' 		=> 1,
            ),
            'priority' => 10,
            'active_callback' => 'maximo_is_banner_slider_enabled'
		) 
	) 
);


$wp_customize->add_setting(
	'banner_slider_separator_8',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_8',
		array(
			'section' => 'maximo_banner_slider',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'banner_slider_post_category',
	array(
		'default' => $maximo_customizer_defaults['banner_slider_post_category'],
		'sanitize_callback' => 'maximo_sanitize_multi_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize, 
		'banner_slider_post_category',
		array(
			'label' => esc_html__( 'Category', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'input_attrs' => array(
				'multiselect' => true,
				'showsearch' => false
			),
			'choices' => maximo_get_categories(),
			'priority' => 10,
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	) 
);


$wp_customize->add_setting(
	'banner_slider_separator_9',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_9',
		array(
			'section' => 'maximo_banner_slider',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);

$wp_customize->add_setting( 
	'banner_slider_display_categories', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['banner_slider_display_categories'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'banner_slider_display_categories', 
		array(
			'label' => esc_html__( 'Display Categories', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'type' => 'ios',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		) 
	) 
);

$wp_customize->add_setting(
	'banner_slider_separator_10',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_10',
		array(
			'section' => 'maximo_banner_slider',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);


$wp_customize->add_setting(
	'banner_slider_post_meta',
	array(
		'default'           => $maximo_customizer_defaults['banner_slider_post_meta'],
		'sanitize_callback' => 'maximo_sanitize_multi_checkboxes_value'
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Sortable_Checkbox_Control(
		$wp_customize,
		'banner_slider_post_meta',
		array(
			'label'   => esc_html__( 'Post Meta', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'input_attrs' => array(
				'sortable' => false,
				'fullwidth' => true,
			),
			'choices' => maximo_get_post_meta_structure(),
			'priority' => 10,
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);

$wp_customize->add_setting(
	'banner_slider_separator_11',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_11',
		array(
			'section' => 'maximo_banner_slider',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);

$wp_customize->add_setting( 
	'banner_slider_enable_meta_icons', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['banner_slider_enable_meta_icons'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'banner_slider_enable_meta_icons', 
		array(
			'label' => esc_html__( 'Display Icons In Post Meta', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'type' => 'ios',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		) 
	) 
);

$wp_customize->add_setting(
	'banner_slider_separator_12',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_12',
		array(
			'section' => 'maximo_banner_slider',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'banner_slider_display_excerpt', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['banner_slider_display_excerpt'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'banner_slider_display_excerpt', 
		array(
			'label' => esc_html__( 'Display Post Excerpt', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'type' => 'ios',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		) 
	) 
);


$wp_customize->add_setting(
	'banner_slider_separator_13',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_13',
		array(
			'section' => 'maximo_banner_slider',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'banner_slider_enable_button', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['banner_slider_enable_button'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'banner_slider_enable_button', 
		array(
			'label' => esc_html__( 'Enable Button', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'type' => 'ios',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		) 
	) 
);

$wp_customize->add_setting(
	'banner_slider_separator_14',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_14',
		array(
			'section' => 'maximo_banner_slider',
			'active_callback' => 'maximo_is_read_more_button_enabled_in_banner'
		)
	)
);


$wp_customize->add_setting( 
	'banner_slider_button_title', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $maximo_customizer_defaults['banner_slider_button_title'],
	) 
);

$wp_customize->add_control( 
	'banner_slider_button_title', 
	array(
		'label' => esc_html__( 'Button Title', 'maximo' ),
		'section' => 'maximo_banner_slider',
		'type' => 'text',
		'active_callback' => 'maximo_is_read_more_button_enabled_in_banner'
	) 
);


$wp_customize->add_setting(
	'banner_slider_separator_15',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_15',
		array(
			'section' => 'maximo_banner_slider',
			'priority' => 10,
			'active_callback' => 'maximo_is_read_more_button_enabled_in_banner'
		)
	)
);


$wp_customize->add_setting( 
	'banner_slider_open_link_in_new_tab', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['banner_slider_open_link_in_new_tab'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'banner_slider_open_link_in_new_tab', 
		array(
			'label' => esc_html__( 'Open Link In A New Tab', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'type' => 'ios',
			'active_callback' => 'maximo_is_read_more_button_enabled_in_banner'
		) 
	) 
);




$wp_customize->add_setting(
	'banner_slider_info_2',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'banner_slider_info_2',
		array(
			'label' => esc_html__( 'Banner Image', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'priority' => 10,
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'banner_slider_image_size',
	array(
		'default' => $maximo_customizer_defaults['banner_slider_image_size'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'banner_slider_image_size',
		array(
			'label' => esc_html__( 'Image Size', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'choices' => maximo_get_thumbnail_sizes(),
			'priority' => 10,
			'active_callback' => 'maximo_is_banner_slider_enabled'
		) 
	)
);


$wp_customize->add_setting(
	'banner_slider_separator_16',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_16',
		array(
			'section' => 'maximo_banner_slider',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'banner_slider_image_background_repeat',
	array(
		'default' => $maximo_customizer_defaults['banner_slider_image_background_repeat'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'banner_slider_image_background_repeat',
		array(
			'label' => esc_html__( 'Background Repeat', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'choices' => maximo_get_background_repeat_choices(),
			'priority' => 10,
			'active_callback' => 'maximo_is_banner_slider_enabled'
		) 
	)
);


$wp_customize->add_setting(
	'banner_slider_separator_17',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_17',
		array(
			'section' => 'maximo_banner_slider',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'banner_slider_image_background_size',
	array(
		'default' => $maximo_customizer_defaults['banner_slider_image_background_size'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'banner_slider_image_background_size',
		array(
			'label' => esc_html__( 'Background Size', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'choices' => maximo_get_background_size_choices(),
			'priority' => 10,
			'active_callback' => 'maximo_is_banner_slider_enabled'
		) 
	)
);


$wp_customize->add_setting(
	'banner_slider_separator_18',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_18',
		array(
			'section' => 'maximo_banner_slider',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'banner_slider_image_background_position',
	array(
		'default' => $maximo_customizer_defaults['banner_slider_image_background_position'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'banner_slider_image_background_position',
		array(
			'label' => esc_html__( 'Background Repeat', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'choices' => maximo_get_background_position_choices(),
			'priority' => 10,
			'active_callback' => 'maximo_is_banner_slider_enabled'
		) 
	)
);


$wp_customize->add_setting(
	'banner_slider_separator_19',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_19',
		array(
			'section' => 'maximo_banner_slider',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'banner_slider_height_desktop', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_height']['desktop'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_height_tablet', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_height']['tablet'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_height_mobile', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_height']['mobile'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Slider_Control( 
		$wp_customize, 
		'banner_slider_height', 
		array(
			'label' 			=> esc_html__( 'Height (vh)', 'maximo' ),
			'section'  			=> 'maximo_banner_slider',
			'settings' => array(
		        'desktop' 	=> 'banner_slider_height_desktop',
		        'tablet' 	=> 'banner_slider_height_tablet',
		        'mobile' 	=> 'banner_slider_height_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1,
		    ),
		    'active_callback' => 'maximo_is_banner_slider_enabled'
		) 
	) 
);


$wp_customize->add_setting(
	'banner_slider_separator_20',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_20',
		array(
			'section' => 'maximo_banner_slider',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'banner_slider_enable_overlay', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['banner_slider_enable_overlay'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'banner_slider_enable_overlay', 
		array(
			'label' => esc_html__( 'Enable Overlay', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'type' => 'ios',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		) 
	) 
);


$wp_customize->add_setting(
	'banner_slider_separator_21',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_21',
		array(
			'section' => 'maximo_banner_slider',
			'priority' => 10,
			'active_callback' => 'maximo_is_overlay_layer_enabled_in_banner'
		)
	)
);

$wp_customize->add_setting( 
	'banner_slider_overlay_color', 
	array(
		'sanitize_callback' => '',
		'default' => $maximo_customizer_defaults['banner_slider_overlay_color'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'banner_slider_overlay_color', 
		array(
			'label'	   	=> esc_html__( 'Overlay Color', 'maximo' ),
			'section'  	=> 'maximo_banner_slider',
			'active_callback' => 'maximo_is_overlay_layer_enabled_in_banner'
		) 
	) 
);


$wp_customize->add_setting(
	'banner_slider_separator_22',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_22',
		array(
			'section' => 'maximo_banner_slider',
			'priority' => 10,
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'banner_slider_text_color', 
	array(
		'sanitize_callback' => '',
		'default' => $maximo_customizer_defaults['banner_slider_text_color'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'banner_slider_text_color', 
		array(
			'label'	   	=> esc_html__( 'Content Text Color', 'maximo' ),
			'section'  	=> 'maximo_banner_slider',
			'active_callback' => 'maximo_is_banner_slider_enabled'
		) 
	) 
);


$wp_customize->add_setting(
	'banner_slider_info_3',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'banner_slider_info_3',
		array(
			'label' => esc_html__( 'Margin &amp; Padding', 'maximo' ),
			'section' => 'maximo_banner_slider',
			'priority' => 10,
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'banner_slider_margin_desktop_top', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_margin']['desktop_top'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_margin_desktop_right', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_margin']['desktop_right'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_margin_desktop_bottom', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_margin']['desktop_bottom'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_margin_desktop_left', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_margin']['desktop_left'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_margin_tablet_top', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_margin']['tablet_top'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_margin_tablet_right', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_margin']['tablet_right'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_margin_tablet_bottom', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_margin']['tablet_bottom'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_margin_tablet_left', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_margin']['tablet_left'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_margin_mobile_top', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_margin']['mobile_top'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_margin_mobile_right', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_margin']['mobile_right'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_margin_mobile_bottom', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_margin']['mobile_bottom'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_margin_mobile_left', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_margin']['mobile_left'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Dimensions_Control( 
		$wp_customize, 
		'banner_slider_margin', 
		array(
			'label'	   				=> esc_html__( 'Margin (px)', 'maximo' ),
			'section'  				=> 'maximo_banner_slider',				
			'settings'   => array(
		        'desktop_top' 		=> 'banner_slider_margin_desktop_top',
		        'desktop_right' 		=> 'banner_slider_margin_desktop_right',
		        'desktop_bottom' 	=> 'banner_slider_margin_desktop_bottom',
		        'desktop_left' 	=> 'banner_slider_margin_desktop_left',
		        'tablet_top' 		=> 'banner_slider_margin_tablet_top',
		        'tablet_right' 		=> 'banner_slider_margin_tablet_right',
		        'tablet_bottom' 	=> 'banner_slider_margin_tablet_bottom',
		        'tablet_left' 	=> 'banner_slider_margin_tablet_left',
		        'mobile_top' 		=> 'banner_slider_margin_mobile_top',
		        'mobile_right' 		=> 'banner_slider_margin_mobile_right',
		        'mobile_bottom' 	=> 'banner_slider_margin_mobile_bottom',
		        'mobile_left' 	=> 'banner_slider_margin_mobile_left',
			),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 1000,
		        'step'  => 1,
		    ),
		    'active_callback' => 'maximo_is_banner_slider_enabled'
		) 
	) 
);


$wp_customize->add_setting(
	'banner_slider_separator_23',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_23',
		array(
			'section' => 'maximo_banner_slider',
			'priority' => 10,
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);

$wp_customize->add_setting( 
	'banner_slider_content_margin_desktop_top', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_margin']['desktop_top'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_margin_desktop_right', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_margin']['desktop_right'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_margin_desktop_bottom', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_margin']['desktop_bottom'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_margin_desktop_left', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_margin']['desktop_left'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_margin_tablet_top', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_margin']['tablet_top'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_margin_tablet_right', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_margin']['tablet_right'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_margin_tablet_bottom', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_margin']['tablet_bottom'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_margin_tablet_left', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_margin']['tablet_left'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_margin_mobile_top', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_margin']['mobile_top'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_margin_mobile_right', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_margin']['mobile_right'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_margin_mobile_bottom', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_margin']['mobile_bottom'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_margin_mobile_left', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_margin']['mobile_left'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Dimensions_Control( 
		$wp_customize, 
		'banner_slider_content_margin', 
		array(
			'label'	   				=> esc_html__( 'Content Margin (px)', 'maximo' ),
			'section'  				=> 'maximo_banner_slider',				
			'settings'   => array(
		        'desktop_top' 		=> 'banner_slider_content_margin_desktop_top',
		        'desktop_right' 		=> 'banner_slider_content_margin_desktop_right',
		        'desktop_bottom' 	=> 'banner_slider_content_margin_desktop_bottom',
		        'desktop_left' 	=> 'banner_slider_content_margin_desktop_left',
		        'tablet_top' 		=> 'banner_slider_content_margin_tablet_top',
		        'tablet_right' 		=> 'banner_slider_content_margin_tablet_right',
		        'tablet_bottom' 	=> 'banner_slider_content_margin_tablet_bottom',
		        'tablet_left' 	=> 'banner_slider_content_margin_tablet_left',
		        'mobile_top' 		=> 'banner_slider_content_margin_mobile_top',
		        'mobile_right' 		=> 'banner_slider_content_margin_mobile_right',
		        'mobile_bottom' 	=> 'banner_slider_content_margin_mobile_bottom',
		        'mobile_left' 	=> 'banner_slider_content_margin_mobile_left',
			),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 1000,
		        'step'  => 1,
		    ),
		    'active_callback' => 'maximo_is_banner_slider_enabled'
		) 
	) 
);


$wp_customize->add_setting(
	'banner_slider_separator_24',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'banner_slider_separator_24',
		array(
			'section' => 'maximo_banner_slider',
			'priority' => 10,
			'active_callback' => 'maximo_is_banner_slider_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'banner_slider_content_padding_desktop_top', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_padding']['desktop_top'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_padding_desktop_right', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_padding']['desktop_right'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_padding_desktop_bottom', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_padding']['desktop_bottom'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_padding_desktop_left', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_padding']['desktop_left'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_padding_tablet_top', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_padding']['tablet_top'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_padding_tablet_right', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_padding']['tablet_right'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_padding_tablet_bottom', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_padding']['tablet_bottom'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_padding_tablet_left', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_padding']['tablet_left'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_padding_mobile_top', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_padding']['mobile_top'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_padding_mobile_right', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_padding']['mobile_right'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_padding_mobile_bottom', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_padding']['mobile_bottom'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'banner_slider_content_padding_mobile_left', 
	array(
		'default'           	=> $maximo_customizer_defaults['banner_slider_content_padding']['mobile_left'],
		'sanitize_callback' 	=> 'maximo_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Dimensions_Control( 
		$wp_customize, 
		'banner_slider_content_padding', 
		array(
			'label'	   				=> esc_html__( 'Content Padding (px)', 'maximo' ),
			'section'  				=> 'maximo_banner_slider',				
			'settings'   => array(
		        'desktop_top' 		=> 'banner_slider_content_padding_desktop_top',
		        'desktop_right' 		=> 'banner_slider_content_padding_desktop_right',
		        'desktop_bottom' 	=> 'banner_slider_content_padding_desktop_bottom',
		        'desktop_left' 	=> 'banner_slider_content_padding_desktop_left',
		        'tablet_top' 		=> 'banner_slider_content_padding_tablet_top',
		        'tablet_right' 		=> 'banner_slider_content_padding_tablet_right',
		        'tablet_bottom' 	=> 'banner_slider_content_padding_tablet_bottom',
		        'tablet_left' 	=> 'banner_slider_content_padding_tablet_left',
		        'mobile_top' 		=> 'banner_slider_content_padding_mobile_top',
		        'mobile_right' 		=> 'banner_slider_content_padding_mobile_right',
		        'mobile_bottom' 	=> 'banner_slider_content_padding_mobile_bottom',
		        'mobile_left' 	=> 'banner_slider_content_padding_mobile_left',
			),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 1000,
		        'step'  => 1,
		    ),
		    'active_callback' => 'maximo_is_banner_slider_enabled'
		) 
	) 
);