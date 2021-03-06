<?php

if ( ! function_exists( 'maximo_breadcrumbs_template' ) ) {

	function maximo_breadcrumbs_template() {

		if ( ! maximo_is_breadcrumbs_activated() ) {
			return;
		}

		$customizer_defaults = maximo_get_customizer_defaults();

		$args = array(
			'classes' => array(),
			'breadcrumbs_source' => 'default',			
			'display_in_separate_container' => false
		);

		$breadcrumbs_source = maximo_get_option( 'breadcrumbs_source' );

		switch ( $breadcrumbs_source ) {

			case 'yoast' :
				$args['breadcrumbs_source'] = 'yoast';
 				$args['classes'][] = 'maximo-yoast-breadcrumb';
 				break;
 			case 'rank_math' :
 				$args['breadcrumbs_source'] = 'rank-math';
 				$args['classes'][] = 'maximo-rank_math-breadcrumb';
 				break;
 			case 'bcn' :
 				$args['breadcrumbs_source'] = 'bcn';
 				$args['classes'][] = 'maximo-navxt-breadcrumb';
 				break;
 			default :
 				$args['breadcrumbs_source'] = 'default';
 				$args['classes'][] = 'maximo-default-breadcrumb';
		}

		if ( ! maximo_is_page_header_activated() ) {

			$args['display_in_separate_container'] = true;
			$args['classes'][] = 'maximo-breadcrumb-default-container';

			$breadcrumb_algnment = maximo_get_option( 'breadcrumbs_alignment' ) ? maximo_get_option( 'breadcrumbs_alignment' ) : $customizer_defaults['breadcrumbs_alignment'];

			switch ( $breadcrumb_algnment ) {
				case 'left' :
					$args['classes'][] = 'maximo-text-left';
					break;
				case 'right' :
					$args['classes'][] = 'maximo-text-right';
					break;
				default :
					$args['classes'][] = 'maximo-text-center';
			}

			$args['classes'][] = maximo_get_option( 'breadcrumbs_width' ) ? maximo_get_option( 'breadcrumbs_width' ) : $customizer_defaults['breadcrumbs_width'];
		} else {

			if ( maximo_get_option( 'breadcrumbs_position' ) == 'default' ) {
				
				$args['display_in_separate_container'] = true;
				$args['classes'][] = 'maximo-breadcrumb-default-container';

				$breadcrumb_algnment = maximo_get_option( 'breadcrumbs_alignment' ) ? maximo_get_option( 'breadcrumbs_alignment' ) : $customizer_defaults['breadcrumbs_alignment'];

				switch ( $breadcrumb_algnment ) {
					case 'left' :
						$args['classes'][] = 'maximo-text-left';
						break;
					case 'right' :
						$args['classes'][] = 'maximo-text-right';
						break;
					default :
						$args['classes'][] = 'maximo-text-center';
				}

				$args['classes'][] = maximo_get_option( 'breadcrumbs_width' ) ? maximo_get_option( 'breadcrumbs_width' ) : $customizer_defaults['breadcrumbs_width'];
			}
		}

		$args['classes'][] = maximo_get_option( 'breadcrumb_visibility' ) ? maximo_get_option( 'breadcrumb_visibility' ) : $customizer_defaults['breadcrumb_visibility'];

		$args = apply_filters( 'maximo_breadcrumbs_args', $args );		

		get_template_part( 'template-parts/content/content', 'breadcrumb', $args );
	}
} 
add_action( 'maximo_breadcrumbs', 'maximo_breadcrumbs_template' );