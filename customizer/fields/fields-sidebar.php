<?php

$maximo_customizer_defaults = maximo_get_customizer_defaults();

$wp_customize->add_section( 
	'maximo_sidebar', 
	array(
		'priority'		=> 11,
		'title'			=> esc_html__( 'Sidebar', 'maximo' )
	) 
);


$wp_customize->add_setting( 
	'sidebar_default_position',
	array(
		'default' => $maximo_customizer_defaults['sidebar_default_position'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'sidebar_default_position',
		array(
			'label' => esc_html__( 'Default Position', 'maximo' ),
			'section' => 'maximo_sidebar',
			'choices' => maximo_get_default_sidebar_positions(),
			'priority' => 10,
		) 
	)
);

$wp_customize->add_setting(
	'sidebar_separator_1',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'sidebar_separator_1',
		array(
			'section' => 'maximo_sidebar',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'sidebar_post_single_position',
	array(
		'default' => $maximo_customizer_defaults['sidebar_post_single_position'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'sidebar_post_single_position',
		array(
			'label' => esc_html__( 'Post Single', 'maximo' ),
			'section' => 'maximo_sidebar',
			'choices' => maximo_get_sidebar_positions(),
			'priority' => 10,
		) 
	)
);


$wp_customize->add_setting(
	'sidebar_separator_2',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'sidebar_separator_2',
		array(
			'section' => 'maximo_sidebar',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'sidebar_page_single_position',
	array(
		'default' => $maximo_customizer_defaults['sidebar_page_single_position'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'sidebar_page_single_position',
		array(
			'label' => esc_html__( 'Page Single', 'maximo' ),
			'section' => 'maximo_sidebar',
			'choices' => maximo_get_sidebar_positions(),
			'priority' => 10,
		) 
	)
);


$wp_customize->add_setting(
	'sidebar_separator_3',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'sidebar_separator_3',
		array(
			'section' => 'maximo_sidebar',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'sidebar_archives_and_search_position',
	array(
		'default' => $maximo_customizer_defaults['sidebar_archives_and_search_position'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'sidebar_archives_and_search_position',
		array(
			'label' => esc_html__( 'Archives &amp; Search', 'maximo' ),
			'section' => 'maximo_sidebar',
			'choices' => maximo_get_sidebar_positions(),
			'priority' => 10,
		) 
	)
);


if ( class_exists( 'WooCommerce' ) ) {

	$wp_customize->add_setting(
		'sidebar_separator_4',
		array(
			'sanitize_callback' => 'esc_html',
			'default' => '',
		)
	);

	$wp_customize->add_control(
		new Maximo_Customize_Divider_Control(
			$wp_customize,
			'sidebar_separator_4',
			array(
				'section' => 'maximo_sidebar',
				'priority' => 10,
			)
		)
	);

	$wp_customize->add_setting( 
		'sidebar_woocommerce_archive_position',
		array(
			'default' => $maximo_customizer_defaults['sidebar_woocommerce_archive_position'],
			'sanitize_callback' => 'maximo_sanitize_select'
		) 
	);

	$wp_customize->add_control( 
		new Maximo_Customize_SlimSelect_Control( 
			$wp_customize,
			'sidebar_woocommerce_archive_position',
			array( 
				'label' => esc_html__( 'WooCommerce Archive', 'maximo' ),
				'section' => 'maximo_sidebar',
				'choices' => maximo_get_sidebar_positions(),
				'priority' => 10,
			) 
		)
	);


	$wp_customize->add_setting(
		'sidebar_separator_5',
		array(
			'sanitize_callback' => 'esc_html',
			'default' => '',
		)
	);

	$wp_customize->add_control(
		new Maximo_Customize_Divider_Control(
			$wp_customize,
			'sidebar_separator_5',
			array(
				'section' => 'maximo_sidebar',
				'priority' => 10,
			)
		)
	);

	$wp_customize->add_setting( 
		'sidebar_woocommerce_product_position',
		array(
			'default' => $maximo_customizer_defaults['sidebar_woocommerce_product_position'],
			'sanitize_callback' => 'maximo_sanitize_select'
		) 
	);

	$wp_customize->add_control(
		new Maximo_Customize_SlimSelect_Control( 
			$wp_customize,
			'sidebar_woocommerce_product_position',
			array( 
				'label' => esc_html__( 'WooCommerce Product Single', 'maximo' ),
				'section' => 'maximo_sidebar',
				'choices' => maximo_get_sidebar_positions(),
				'priority' => 10,
			) 
		)
	);
}

$wp_customize->add_setting(
	'sidebar_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'sidebar_info_1',
		array(
			'label' => esc_html__( 'Options', 'maximo' ),
			'section' => 'maximo_sidebar',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'sidebar_width', 
	array(
		'default' => $maximo_customizer_defaults['sidebar_width'],
		'sanitize_callback' 	=> 'maximo_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Range_Control( 
		$wp_customize, 
		'sidebar_width', 
		array(
			'label' 			=> esc_html__( 'Sidebar Width (%)', 'maximo' ),
			'section'  			=> 'maximo_sidebar',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 40,
                'step' 		=> 1,
            ),
		) 
	) 
);

$wp_customize->add_setting(
	'sidebar_separator_6',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'sidebar_separator_6',
		array(
			'section' => 'maximo_sidebar',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'sidebar_widget_style',
	array(
		'default' => $maximo_customizer_defaults['sidebar_widget_style'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'sidebar_widget_style',
		array(
			'label' => esc_html__( 'Widget Style', 'maximo' ),
			'section' => 'maximo_sidebar',
			'choices' => maximo_get_sidebar_styles(),
			'priority' => 10,
		) 
	)
);

$wp_customize->add_setting(
	'sidebar_separator_7',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'sidebar_separator_7',
		array(
			'section' => 'maximo_sidebar',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'enable_sticky_sidebar', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['enable_sticky_sidebar'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'enable_sticky_sidebar', 
		array(
			'label' => esc_html__( 'Set Sidebar Sticky', 'maximo' ),
			'section' => 'maximo_sidebar',
			'type' => 'ios',
		) 
	) 
);

$wp_customize->add_setting(
	'sidebar_separator_8',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'sidebar_separator_8',
		array(
			'section' => 'maximo_sidebar',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'sidebar_responsive_position',
	array(
		'default' => $maximo_customizer_defaults['sidebar_responsive_position'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'sidebar_responsive_position',
		array(
			'label' => esc_html__( 'Responsive Sidebar Position', 'maximo' ),
			'section' => 'maximo_sidebar',
			'choices' => maximo_get_responsive_sidebar_positions(),
			'priority' => 10,
		) 
	)
);