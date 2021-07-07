<?php

$maximo_customizer_defaults = maximo_get_customizer_defaults();

$wp_customize->add_section( 
	'maximo_single', 
	array(
		'priority'		=> 10,
		'title'			=> esc_html__( 'Post / Page Single', 'maximo' ),
		'panel'			=> 'maximo_site_pages'
	) 
);


$wp_customize->add_setting( 
	'single_content_width',
	array(
		'default' => $maximo_customizer_defaults['single_content_width'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'single_content_width',
		array(
			'label' => esc_html__( 'Content Width', 'maximo' ),
			'section' => 'maximo_single',
			'choices' => maximo_content_widths(),
			'priority' => 10,
		) 
	)
);


$wp_customize->add_setting(
	'single_separator_1',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'single_separator_1',
		array(
			'section' => 'maximo_single',
			'priority' => 10,
			'active_callback' => 'maximo_is_single_content_width_narrow_width'
		)
	)
);


$wp_customize->add_setting( 
	'single_narrow_width', 
	array(
		'default' => $maximo_customizer_defaults['single_narrow_width'],
		'sanitize_callback' 	=> 'maximo_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Range_Control( 
		$wp_customize, 
		'single_narrow_width', 
		array(
			'label' 			=> esc_html__( 'Narrow Width (px)', 'maximo' ),
			'section'  			=> 'maximo_single',
            'input_attrs' 		=> array(
                'min'		=> 500,
                'max' 		=> 1500,
                'step' 		=> 1,
            ),
            'active_callback' => 'maximo_is_single_content_width_narrow_width'
		) 
	) 
);


$wp_customize->add_setting(
	'single_separator_2',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'single_separator_2',
		array(
			'section' => 'maximo_single',
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting( 
	'single_title_header_alignment',
	array(
		'default' => $maximo_customizer_defaults['single_title_header_alignment'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'single_title_header_alignment',
		array(
			'label' => esc_html__( 'Title Header Alignment', 'maximo' ),
			'section' => 'maximo_single',
			'choices' => maximo_get_alignments(),
		) 
	)
);

$wp_customize->add_setting(
	'single_header_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'single_header_info_1',
		array(
			'label' => esc_html__( 'Post Elements', 'maximo' ),
			'section' => 'maximo_single',
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting(
	'single_post_elements',
	array(
		'default'           => $maximo_customizer_defaults['single_post_elements'],
		'sanitize_callback' => 'maximo_sanitize_multi_checkboxes_value'
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Sortable_Checkbox_Control(
		$wp_customize,
		'single_post_elements',
		array(
			'label'   => esc_html__( 'Post Elements', 'maximo' ),
			'section' => 'maximo_single',
			'input_attrs' => array(
				'sortable' => false,
				'fullwidth' => true,
			),
			'choices' => maximo_get_single_post_elements(),
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting(
	'single_separator_3',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'single_separator_3',
		array(
			'section' => 'maximo_single',
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting(
	'single_post_meta',
	array(
		'default'           => $maximo_customizer_defaults['single_post_meta'],
		'sanitize_callback' => 'maximo_sanitize_multi_checkboxes_value'
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Sortable_Checkbox_Control(
		$wp_customize,
		'single_post_meta',
		array(
			'label'   => esc_html__( 'Post Meta', 'maximo' ),
			'section' => 'maximo_single',
			'input_attrs' => array(
				'sortable' => true,
				'fullwidth' => true,
			),
			'choices' => maximo_get_post_meta_structure(),
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting(
	'single_separator_4',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'single_separator_4',
		array(
			'section' => 'maximo_single',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'single_show_icons_in_post_meta', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['single_show_icons_in_post_meta'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'single_show_icons_in_post_meta', 
		array(
			'label' => esc_html__( 'Display Icons In Post Meta', 'maximo' ),
			'section' => 'maximo_single',
			'type' => 'ios',
			'priority' => 10,
		) 
	) 
);

$wp_customize->add_setting(
	'single_separator_5',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'single_separator_5',
		array(
			'section' => 'maximo_single',
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting( 
	'single_show_toggle_comments_btn', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['single_show_toggle_comments_btn'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'single_show_toggle_comments_btn', 
		array(
			'label' => esc_html__( 'Show Comments Toggle Button', 'maximo' ),
			'section' => 'maximo_single',
			'type' => 'ios',
			'priority' => 10,
		) 
	) 
);

$wp_customize->add_setting(
	'single_separator_6',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'single_separator_6',
		array(
			'section' => 'maximo_single',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'single_comment_toggle_btn_title', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $maximo_customizer_defaults['single_comment_toggle_btn_title'],
	) 
);

$wp_customize->add_control( 
	'single_comment_toggle_btn_title', 
	array(
		'label' => esc_html__( 'Comments Toggle Button Title', 'maximo' ),
		'section' => 'maximo_single',
		'type' => 'text',
	) 
);

$wp_customize->add_setting(
	'single_separator_7',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'single_separator_7',
		array(
			'section' => 'maximo_single',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'prev_post_link_title_label', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $maximo_customizer_defaults['prev_post_link_title_label'],
	) 
);

$wp_customize->add_control( 
	'prev_post_link_title_label', 
	array(
		'label' => esc_html__( 'Previous Post Link Title Label', 'maximo' ),
		'section' => 'maximo_single',
		'type' => 'text',
	) 
);

$wp_customize->add_setting(
	'single_separator_8',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'single_separator_8',
		array(
			'section' => 'maximo_single',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'next_post_link_title_label', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $maximo_customizer_defaults['next_post_link_title_label'],
	) 
);

$wp_customize->add_control( 
	'next_post_link_title_label', 
	array(
		'label' => esc_html__( 'Next Post Link Title Label', 'maximo' ),
		'section' => 'maximo_single',
		'type' => 'text',
	) 
);