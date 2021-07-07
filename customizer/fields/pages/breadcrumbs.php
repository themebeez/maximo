<?php

$maximo_customizer_defaults = maximo_get_customizer_defaults();

$wp_customize->add_section( 
	'maximo_breadcrumbs', 
	array(
		'priority'		=> 10,
		'title'			=> esc_html__( 'Breadcrumbs', 'maximo' ),
		'panel'			=> 'maximo_site_pages'
	) 
);


$wp_customize->add_setting( 
	'enable_breadcrumbs',
	array(
		'default' => $maximo_customizer_defaults['enable_breadcrumbs'],
		'sanitize_callback' => 'wp_validate_boolean'
	)
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize, 
		'enable_breadcrumbs',
		array(
			'label' => esc_html__( 'Enable Breadcrumbs', 'maximo' ),
			'section' => 'maximo_breadcrumbs',
			'type' => 'ios'
		)
	) 
);


$wp_customize->add_setting(
	'breadcrumbs_divider_1',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'breadcrumbs_divider_1',
		array(
			'section' => 'maximo_breadcrumbs',
			'priority' => 10
		)
	)
);

$wp_customize->add_setting( 
	'breadcrumbs_source',
	array(
		'default' => $maximo_customizer_defaults['breadcrumbs_source'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'breadcrumbs_source',
		array(
			'label' => esc_html__( 'Source', 'maximo' ),
			'description' => sprintf( esc_html__( 'You can use theme&rsquo;s default breadcrumb or use any one of the plugin for breadcrumb, %sBreadcrumb NavXT%s or %sYoast SEO%s or %sRank Math%s', 'maximo' ), '<a href="https://wordpress.org/plugins/breadcrumb-navxt/" target="_blank">', '</a>', '<a href="https://wordpress.org/plugins/wordpress-seo/" target="_blank">', '</a>', '<a href="https://wordpress.org/plugins/seo-by-rank-math/" target="_blank">', '</a>' ),
			'section' => 'maximo_breadcrumbs',
			'choices' => maximo_breadcrumb_sources(),
			'active_callback' => 'maximo_is_breadcrumb_enabled'
		) 
	)
);


$wp_customize->add_setting(
	'breadcrumbs_divider_2',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'breadcrumbs_divider_2',
		array(
			'section' => 'maximo_breadcrumbs',
			'priority' => 10,
			'active_callback' => 'maximo_is_breadcrumb_enabled'
		)
	)
);

$wp_customize->add_setting(
	'breadcrumbs_display_pages',
	array(
		'default'           => $maximo_customizer_defaults['breadcrumbs_display_pages'],
		'sanitize_callback' => 'maximo_sanitize_multi_checkboxes_value'
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Sortable_Checkbox_Control(
		$wp_customize,
		'breadcrumbs_display_pages',
		array(
			'label'   => esc_html__( 'Enable On', 'maximo' ),
			'section' => 'maximo_breadcrumbs',
			'input_attrs' => array(
				'sortable' => false,
				'fullwidth' => true,
			),
			'choices' => maximo_get_general_pages(),
			'priority' => 10,
			'active_callback' => 'maximo_is_breadcrumb_enabled'
		)
	)
);


$wp_customize->add_setting(
	'breadcrumbs_divider_3',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'breadcrumbs_divider_3',
		array(
			'section' => 'maximo_breadcrumbs',
			'priority' => 10,
			'active_callback' => 'maximo_is_breadcrumb_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'breadcrumbs_position',
	array(
		'default' => $maximo_customizer_defaults['breadcrumbs_position'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'breadcrumbs_position',
		array(
			'label' => esc_html__( 'Position', 'maximo' ),
			'section' => 'maximo_breadcrumbs',
			'choices' => maximo_get_breadcrumb_positions(),
			'active_callback' => 'maximo_is_breadcrumb_enabled'
		) 
	)
);


$wp_customize->add_setting(
	'breadcrumbs_divider_4',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'breadcrumbs_divider_4',
		array(
			'section' => 'maximo_breadcrumbs',
			'priority' => 10,
			'active_callback' => 'maximo_is_breadcrumb_placed_inside_page_header'
		)
	)
);


$wp_customize->add_setting( 
	'breadcrumbs_position_inside_page_header',
	array(
		'default' => $maximo_customizer_defaults['breadcrumbs_position_inside_page_header'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'breadcrumbs_position_inside_page_header',
		array(
			'label' => esc_html__( 'Position Inside Page Header', 'maximo' ),
			'section' => 'maximo_breadcrumbs',
			'choices' => maximo_get_breadcrumb_page_header_positions(),
			'active_callback' => 'maximo_is_breadcrumb_placed_inside_page_header'
		) 
	)
);


$wp_customize->add_setting(
	'breadcrumbs_divider_5',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'breadcrumbs_divider_5',
		array(
			'section' => 'maximo_breadcrumbs',
			'priority' => 10,
			'active_callback' => 'maximo_is_breadcrumb_position_placed_in_separate_container'
		)
	)
);


$wp_customize->add_setting( 
	'breadcrumbs_width',
	array(
		'default' => $maximo_customizer_defaults['breadcrumbs_width'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'breadcrumbs_width',
		array(
			'label' => esc_html__( 'Width', 'maximo' ),
			'section' => 'maximo_breadcrumbs',
			'choices' => maximo_get_container_widths(),
			'active_callback' => 'maximo_is_breadcrumb_position_placed_in_separate_container'
		) 
	)
);


$wp_customize->add_setting(
	'breadcrumbs_divider_6',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'breadcrumbs_divider_6',
		array(
			'section' => 'maximo_breadcrumbs',
			'priority' => 10,
			'active_callback' => 'maximo_is_breadcrumb_position_placed_in_separate_container'
		)
	)
);


$wp_customize->add_setting( 
	'breadcrumbs_alignment',
	array(
		'default' => $maximo_customizer_defaults['breadcrumbs_alignment'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'breadcrumbs_alignment',
		array(
			'label' => esc_html__( 'Alignment', 'maximo' ),
			'section' => 'maximo_breadcrumbs',
			'choices' => maximo_get_alignments(),
			'active_callback' => 'maximo_is_breadcrumb_position_placed_in_separate_container'
		) 
	)
);


$wp_customize->add_setting(
	'breadcrumbs_divider_7',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'breadcrumbs_divider_7',
		array(
			'section' => 'maximo_breadcrumbs',
			'priority' => 10,
			'active_callback' => 'maximo_is_breadcrumb_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'breadcrumb_visibility',
	array(
		'default' => $maximo_customizer_defaults['breadcrumb_visibility'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'breadcrumb_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'maximo' ),
			'section' => 'maximo_breadcrumbs',
			'choices' => maximo_get_device_visibility(),
			'priority' => 10,
			'active_callback' => 'maximo_is_breadcrumb_enabled'
		) 
	)
);