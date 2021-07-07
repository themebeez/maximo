<?php

$maximo_customizer_defaults = maximo_get_customizer_defaults();

$wp_customize->add_section( 
	'maximo_main_header', 
	array(
		'priority'		=> 10,
		'title'			=> esc_html__( 'Main Header', 'maximo' ),
		'panel'			=> 'maximo_site_header_panel'
	) 
);


$wp_customize->add_setting( 
	'main_header_layout', 
	array(
		'sanitize_callback'		=> 'maximo_sanitize_select',
		'default'				=> $maximo_customizer_defaults['main_header_layout'],
	)
);

$wp_customize->add_control( 
	new Maximo_Customize_Radio_Image_Control( 
		$wp_customize, 
		'main_header_layout', 
		array( 
			'label' => esc_html__( 'Header Layout', 'maximo' ),
			'type'	=> 'select',
			'choices' => maximo_get_header_layouts(),
			'section' => 'maximo_main_header',
		)
	) 
);


$wp_customize->add_setting(
	'main_header_separator_1',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'main_header_separator_1',
		array(
			'section' => 'maximo_main_header',
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting( 
	'main_header_width',
	array(
		'default' => $maximo_customizer_defaults['main_header_width'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'main_header_width',
		array(
			'label' => esc_html__( 'Width', 'maximo' ),
			'section' => 'maximo_main_header',
			'choices' => maximo_get_container_widths(),
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting(
	'main_header_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'main_header_info_1',
		array(
			'label' => esc_html__( 'Header AD', 'maximo' ),
			'section' => 'maximo_main_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_main_header_one_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'main_header_enable_header_ad', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['main_header_enable_header_ad'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'main_header_enable_header_ad', 
		array(
			'label' => esc_html__( 'Enable Header AD', 'maximo' ),
			'section' => 'maximo_main_header',
			'type' => 'ios',
			'active_callback' => 'maximo_is_main_header_one_enabled'
		) 
	) 
);


$wp_customize->add_setting(
	'main_header_separator_2',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'main_header_separator_2',
		array(
			'section' => 'maximo_main_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_ad_element_enabled_on_main_header'
		)
	)
);


$wp_customize->add_setting( 
	'main_header_ad_notice',
	array(
		'default' => '',
		'sanitize_callback' => 'esc_html',
	)
);

$wp_customize->add_control( 
	new Maximo_Customize_Simple_Notice_Control( 
		$wp_customize, 
		'main_header_ad_notice',
		array(
			'label' => esc_html__( 'AD Info', 'maximo' ),
			'description' => esc_html__('Go to <strong><i>Appearance > Widgets </strong></i> and add a widget inside <strong><i>Header AD </strong></i> widget area.', 'maximo' ),
			'section' => 'maximo_main_header',
			'active_callback' => 'maximo_is_ad_element_enabled_on_main_header'
		)
	) 
);


$wp_customize->add_setting(
	'main_header_separator_3',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'main_header_separator_3',
		array(
			'section' => 'maximo_main_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_ad_element_enabled_on_main_header'
		)
	)
);


$wp_customize->add_setting( 
	'main_header_ad_visibility',
	array(
		'default' => $maximo_customizer_defaults['main_header_ad_visibility'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'main_header_ad_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'maximo' ),
			'section' => 'maximo_main_header',
			'choices' => maximo_get_device_visibility(),
			'priority' => 10,
			'active_callback' => 'maximo_is_ad_element_enabled_on_main_header'
		)
	)
);


$wp_customize->add_setting(
	'main_header_info_2',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'main_header_info_2',
		array(
			'label' => esc_html__( 'Header Elements', 'maximo' ),
			'section' => 'maximo_main_header',
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting( 
	'main_header_enable_header_elements', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['main_header_enable_header_elements'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'main_header_enable_header_elements', 
		array(
			'label' => esc_html__( 'Enable Header Elements', 'maximo' ),
			'section' => 'maximo_main_header',
			'type' => 'ios',
		) 
	) 
);


$wp_customize->add_setting(
	'main_header_separator_4',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'main_header_separator_4',
		array(
			'section' => 'maximo_main_header',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting(
	'main_header_elements',
	array(
		'default'           => $maximo_customizer_defaults['main_header_elements'],
		'sanitize_callback' => 'maximo_sanitize_multi_checkboxes_value'
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Sortable_Checkbox_Control(
		$wp_customize,
		'main_header_elements',
		array(
			'label'   => esc_html__( 'Elements', 'maximo' ),
			'section' => 'maximo_main_header',
			'input_attrs' => array(
				'sortable' => true,
				'fullwidth' => true,
			),
			'choices' => maximo_get_main_header_elements(),
			'priority' => 10,
			'active_callback' => 'maximo_is_main_header_elements_section_enabled'
		)
	)
);


$wp_customize->add_setting(
	'main_header_separator_5',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'main_header_separator_5',
		array(
			'section' => 'maximo_main_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_main_header_elements_section_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'main_header_elements_separator',
	array(
		'default' => $maximo_customizer_defaults['main_header_elements_separator'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'main_header_elements_separator',
		array(
			'label' => esc_html__( 'Elements Separator', 'maximo' ),
			'section' => 'maximo_main_header',
			'choices' => maximo_get_main_header_elements_separators(),
			'priority' => 10,
			'active_callback' => 'maximo_is_main_header_elements_section_enabled'
		)
	)
);


$wp_customize->add_setting(
	'main_header_info_3',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'main_header_info_3',
		array(
			'label' => esc_html__( 'Element - Search', 'maximo' ),
			'section' => 'maximo_main_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_search_element_enabled_on_main_header'
		)
	)
);


$wp_customize->add_setting( 
	'main_header_search_visibility',
	array(
		'default' => $maximo_customizer_defaults['main_header_search_visibility'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'main_header_search_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'maximo' ),
			'section' => 'maximo_main_header',
			'choices' => maximo_get_device_visibility(),
			'priority' => 10,
			'active_callback' => 'maximo_is_search_element_enabled_on_main_header'
		)
	)
);


$wp_customize->add_setting(
	'main_header_info_4',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'main_header_info_4',
		array(
			'label' => esc_html__( 'Element - Button', 'maximo' ),
			'section' => 'maximo_main_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_button_element_enabled_on_main_header'
		)
	)
);


$wp_customize->add_setting( 
	'main_header_button_text', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $maximo_customizer_defaults['main_header_button_text'],
	) 
);

$wp_customize->add_control( 
	'main_header_button_text', 
	array(
		'label' => esc_html__( 'Title', 'maximo' ),
		'section' => 'maximo_main_header',
		'type' => 'text',
		'active_callback' => 'maximo_is_button_element_enabled_on_main_header'
	) 
);

$wp_customize->add_setting(
	'main_header_separator_6',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'main_header_separator_6',
		array(
			'section' => 'maximo_main_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_button_element_enabled_on_main_header'
		)
	)
);


$wp_customize->add_setting( 
	'main_header_button_link', 
	array(
		'sanitize_callback' => 'esc_url_raw',
		'default' => $maximo_customizer_defaults['main_header_button_link'],
	) 
);

$wp_customize->add_control( 
	'main_header_button_link', 
	array(
		'label' => esc_html__( 'Link', 'maximo' ),
		'section' => 'maximo_main_header',
		'type' => 'url',
		'active_callback' => 'maximo_is_button_element_enabled_on_main_header'
	) 
);


$wp_customize->add_setting(
	'main_header_separator_7',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'main_header_separator_7',
		array(
			'section' => 'maximo_main_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_button_element_enabled_on_main_header'
		)
	)
);


$wp_customize->add_setting( 
	'main_header_button_link_in_new_tab', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $maximo_customizer_defaults['main_header_button_link_in_new_tab'],
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'main_header_button_link_in_new_tab', 
		array(
			'label' => esc_html__( 'Open In A New Tab', 'maximo' ),
			'section' => 'maximo_main_header',
			'type' => 'ios',
			'active_callback' => 'maximo_is_button_element_enabled_on_main_header'
		) 
	) 
);

$wp_customize->add_setting(
	'main_header_separator_8',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'main_header_separator_8',
		array(
			'section' => 'maximo_main_header',
			'priority' => 10,
			'active_callback' => 'maximo_is_button_element_enabled_on_main_header'
		)
	)
);

$wp_customize->add_setting( 
	'main_header_button_visibility',
	array(
		'default' => $maximo_customizer_defaults['main_header_button_visibility'],
		'sanitize_callback' => 'maximo_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_SlimSelect_Control( 
		$wp_customize,
		'main_header_button_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'maximo' ),
			'section' => 'maximo_main_header',
			'choices' => maximo_get_device_visibility(),
			'priority' => 10,
			'active_callback' => 'maximo_is_button_element_enabled_on_main_header'
		)
	)
);


if ( class_exists( 'WooCommerce' ) ) {

	$wp_customize->add_setting(
		'main_header_info_5',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => ''
		)
	);

	$wp_customize->add_control(
		new Maximo_Customize_Info_Control(
			$wp_customize,
			'main_header_info_5',
			array(
				'label' => esc_html__( 'Element - Cart', 'maximo' ),
				'section' => 'maximo_main_header',
				'priority' => 10,
				'active_callback' => 'maximo_is_cart_element_enabled_on_main_header'
			)
		)
	);

	$wp_customize->add_setting( 
		'main_header_display_cart_items_no', 
		array(
			'sanitize_callback' => 'wp_validate_boolean',
			'default' => $maximo_customizer_defaults['main_header_display_cart_items_no'],
		) 
	);

	$wp_customize->add_control( 
		new Maximo_Customize_Toggle_Switch_Control( 
			$wp_customize,
			'main_header_display_cart_items_no', 
			array(
				'label' => esc_html__( 'Display Cart Items Number', 'maximo' ),
				'section' => 'maximo_main_header',
				'type' => 'ios',
				'active_callback' => 'maximo_is_cart_element_enabled_on_main_header'
			) 
		) 
	);

	$wp_customize->add_setting(
		'main_header_separator_9',
		array(
			'sanitize_callback' => 'esc_html',
			'default' => '',
		)
	);

	$wp_customize->add_control(
		new Maximo_Customize_Divider_Control(
			$wp_customize,
			'main_header_separator_9',
			array(
				'section' => 'maximo_main_header',
				'priority' => 10,
				'active_callback' => 'maximo_is_cart_element_enabled_on_main_header'
			)
		)
	);

	$wp_customize->add_setting( 
		'main_header_cart_visibility',
		array(
			'default' => $maximo_customizer_defaults['main_header_cart_visibility'],
			'sanitize_callback' => 'maximo_sanitize_select'
		) 
	);

	$wp_customize->add_control( 
		new Maximo_Customize_SlimSelect_Control( 
			$wp_customize,
			'main_header_cart_visibility',
			array(
				'label' => esc_html__( 'Device Visibility', 'maximo' ),
				'section' => 'maximo_main_header',
				'choices' => maximo_get_device_visibility(),
				'priority' => 10,
				'active_callback' => 'maximo_is_cart_element_enabled_on_main_header'
			)
		)
	);
}


if ( class_exists( 'WooCommerce' ) && ( class_exists( 'Addonify_Wishlist' ) || defined( 'YITH_WCWL' ) ) ) {

	$wp_customize->add_setting(
		'main_header_info_6',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => ''
		)
	);

	$wp_customize->add_control(
		new Maximo_Customize_Info_Control(
			$wp_customize,
			'main_header_info_6',
			array(
				'label' => esc_html__( 'Element - Wishlist', 'maximo' ),
				'section' => 'maximo_main_header',
				'priority' => 10,
				'active_callback' => 'maximo_is_wishlist_element_enabled_on_main_header'
			)
		)
	);

	$wp_customize->add_setting( 
		'main_header_display_wishlist_items_no', 
		array(
			'sanitize_callback' => 'wp_validate_boolean',
			'default' => $maximo_customizer_defaults['main_header_display_wishlist_items_no'],
		) 
	);

	$wp_customize->add_control( 
		new Maximo_Customize_Toggle_Switch_Control( 
			$wp_customize,
			'main_header_display_wishlist_items_no', 
			array(
				'label' => esc_html__( 'Display Wishlist Items Number', 'maximo' ),
				'section' => 'maximo_main_header',
				'type' => 'ios',
				'active_callback' => 'maximo_is_wishlist_element_enabled_on_main_header'
			) 
		) 
	);

	$wp_customize->add_setting(
		'main_header_separator_10',
		array(
			'sanitize_callback' => 'esc_html',
			'default' => '',
		)
	);

	$wp_customize->add_control(
		new Maximo_Customize_Divider_Control(
			$wp_customize,
			'main_header_separator_10',
			array(
				'section' => 'maximo_main_header',
				'priority' => 10,
				'active_callback' => 'maximo_is_wishlist_element_enabled_on_main_header'
			)
		)
	);

	$wp_customize->add_setting( 
		'main_header_wishlist_visibility',
		array(
			'default' => $maximo_customizer_defaults['main_header_wishlist_visibility'],
			'sanitize_callback' => 'maximo_sanitize_select'
		) 
	);

	$wp_customize->add_control( 
		new Maximo_Customize_SlimSelect_Control( 
			$wp_customize,
			'main_header_wishlist_visibility',
			array(
				'label' => esc_html__( 'Device Visibility', 'maximo' ),
				'section' => 'maximo_main_header',
				'choices' => maximo_get_device_visibility(),
				'priority' => 10,
				'active_callback' => 'maximo_is_wishlist_element_enabled_on_main_header'
			)
		)
	);
}