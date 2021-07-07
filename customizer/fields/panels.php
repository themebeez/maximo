<?php

$wp_customize->add_panel(
	'maximo_general_panel',
	array(
		'title' => esc_html__( 'General', 'maximo' ),
		'priority' => 10,
	)
);

$wp_customize->add_panel( 
	'maximo_site_header_panel', 
	array(
		'title'			=> esc_html__( 'Header', 'maximo' ),
		'priority'		=> 11,
	) 
);

$wp_customize->add_panel(
	'maximo_footer_panel',
	array(
		'title' => esc_html__( 'Footer', 'maximo' ),
		'priority' => 12,
	)
);


$wp_customize->add_panel(
	'maximo_site_pages',
	array(
		'title' => esc_html__( 'Pages', 'maximo' ),
		'priority' => 12,
	)
);