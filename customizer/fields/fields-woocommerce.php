<?php

$maximo_customizer_defaults = maximo_get_customizer_defaults();

$wp_customize->get_panel( 'woocommerce' )->priority = 13;


$wp_customize->add_setting(
	'woo_related_products_info',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'woo_related_products_info',
		array(
			'label' => esc_html__( 'Related Products', 'maximo' ),
			'section' => 'woocommerce_product_catalog',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'related_products_heading', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $maximo_customizer_defaults['related_products_heading'],
	) 
);

$wp_customize->add_control( 
	'related_products_heading', 
	array(
		'label' => esc_html__( 'Related Products Heading', 'maximo' ),
		'section' => 'woocommerce_product_catalog',
		'type' => 'text'
	) 
);

$wp_customize->add_setting(
	'woo_product_catalog_separator_1',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'woo_product_catalog_separator_1',
		array(
			'section' => 'woocommerce_product_catalog'
		)
	)
);

$wp_customize->add_setting( 
	'related_products_columns_per_row', 
	array(
		'default' => $maximo_customizer_defaults['related_products_columns_per_row'],
		'sanitize_callback' 	=> 'maximo_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Range_Control( 
		$wp_customize, 
		'related_products_columns_per_row', 
		array(
			'label' 			=> esc_html__( 'Products per row', 'maximo' ),
			'section'  			=> 'woocommerce_product_catalog',
            'input_attrs' 		=> array(
                'min'		=> 1,
                'max' 		=> 5,
                'step' 		=> 1,
            )
		) 
	) 
);


$wp_customize->add_setting(
	'woo_product_catalog_separator_2',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'woo_product_catalog_separator_2',
		array(
			'section' => 'woocommerce_product_catalog'
		)
	)
);


$wp_customize->add_setting( 
	'related_products_per_page', 
	array(
		'default' => $maximo_customizer_defaults['related_products_per_page'],
		'sanitize_callback' 	=> 'maximo_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Range_Control( 
		$wp_customize, 
		'related_products_per_page', 
		array(
			'label' 			=> esc_html__( 'Products per page', 'maximo' ),
			'section'  			=> 'woocommerce_product_catalog',
            'input_attrs' 		=> array(
                'min'		=> 1,
                'max' 		=> 30,
                'step' 		=> 1,
            )
		) 
	) 
);


$wp_customize->add_setting(
	'woo_upsell_products_info',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'woo_upsell_products_info',
		array(
			'label' => esc_html__( 'Upsell Products', 'maximo' ),
			'section' => 'woocommerce_product_catalog',
			'priority' => 10
		)
	)
);

$wp_customize->add_setting( 
	'upsell_products_heading', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $maximo_customizer_defaults['upsell_products_heading'],
	) 
);

$wp_customize->add_control( 
	'upsell_products_heading', 
	array(
		'label' => esc_html__( 'Upsell Products Heading', 'maximo' ),
		'section' => 'woocommerce_product_catalog',
		'type' => 'text'
	) 
);


$wp_customize->add_setting(
	'woo_product_catalog_separator_3',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'woo_product_catalog_separator_3',
		array(
			'section' => 'woocommerce_product_catalog'
		)
	)
);

$wp_customize->add_setting( 
	'upsell_products_columns_per_row', 
	array(
		'default' => $maximo_customizer_defaults['upsell_products_columns_per_row'],
		'sanitize_callback' 	=> 'maximo_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Range_Control( 
		$wp_customize, 
		'upsell_products_columns_per_row', 
		array(
			'label' 			=> esc_html__( 'Products per row', 'maximo' ),
			'section'  			=> 'woocommerce_product_catalog',
            'input_attrs' 		=> array(
                'min'		=> 1,
                'max' 		=> 6,
                'step' 		=> 1,
            )
		) 
	) 
);


$wp_customize->add_setting(
	'woo_product_catalog_separator_4',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'woo_product_catalog_separator_4',
		array(
			'section' => 'woocommerce_product_catalog'
		)
	)
);

$wp_customize->add_setting( 
	'upsell_products_per_page', 
	array(
		'default' => $maximo_customizer_defaults['upsell_products_per_page'],
		'sanitize_callback' 	=> 'maximo_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Range_Control( 
		$wp_customize, 
		'upsell_products_per_page', 
		array(
			'label' 			=> esc_html__( 'Products per page', 'maximo' ),
			'section'  			=> 'woocommerce_product_catalog',
            'input_attrs' 		=> array(
                'min'		=> 1,
                'max' 		=> 30,
                'step' 		=> 1,
            )
		) 
	) 
);


$wp_customize->add_setting(
	'woo_cross_sell_products_info',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Info_Control(
		$wp_customize,
		'woo_cross_sell_products_info',
		array(
			'label' => esc_html__( 'Cross Sell Products', 'maximo' ),
			'section' => 'woocommerce_product_catalog',
			'priority' => 10
		)
	)
);

$wp_customize->add_setting( 
	'cross_sell_products_heading', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $maximo_customizer_defaults['cross_sell_products_heading'],
	) 
);

$wp_customize->add_control( 
	'cross_sell_products_heading', 
	array(
		'label' => esc_html__( 'Cross Sell Products Heading', 'maximo' ),
		'section' => 'woocommerce_product_catalog',
		'type' => 'text'
	) 
);

$wp_customize->add_setting(
	'woo_product_catalog_separator_5',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'woo_product_catalog_separator_5',
		array(
			'section' => 'woocommerce_product_catalog'
		)
	)
);

$wp_customize->add_setting( 
	'cross_sell_products_columns_per_row', 
	array(
		'default' => $maximo_customizer_defaults['cross_sell_products_columns_per_row'],
		'sanitize_callback' 	=> 'maximo_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Range_Control( 
		$wp_customize, 
		'cross_sell_products_columns_per_row', 
		array(
			'label' 			=> esc_html__( 'Products per row', 'maximo' ),
			'section'  			=> 'woocommerce_product_catalog',
            'input_attrs' 		=> array(
                'min'		=> 1,
                'max' 		=> 6,
                'step' 		=> 1,
            )
		) 
	) 
);

$wp_customize->add_setting(
	'woo_product_catalog_separator_6',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Maximo_Customize_Divider_Control(
		$wp_customize,
		'woo_product_catalog_separator_6',
		array(
			'section' => 'woocommerce_product_catalog'
		)
	)
);

$wp_customize->add_setting( 
	'cross_sell_products_per_page', 
	array(
		'default' => $maximo_customizer_defaults['cross_sell_products_per_page'],
		'sanitize_callback' 	=> 'maximo_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Maximo_Customize_Range_Control( 
		$wp_customize, 
		'cross_sell_products_per_page', 
		array(
			'label' 			=> esc_html__( 'Products per page', 'maximo' ),
			'section'  			=> 'woocommerce_product_catalog',
            'input_attrs' 		=> array(
                'min'		=> 1,
                'max' 		=> 30,
                'step' 		=> 1,
            )
		) 
	) 
);