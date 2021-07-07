<?php

if ( ! function_exists( 'maximo_post_structure_categories_template' ) ) {

	function maximo_post_structure_categories_template() {

		if ( ! maximo_is_categories_in_post_structure() ) {
			return;
		}

		$args = array(
			'sep' => '',
			'display_icon' => false			
		);
		?>
		<div class="maximo-post-structure-categories">
			<?php get_template_part( 'template-parts/entry/entry', 'categories', $args ); ?>
		</div>
		<?php	
	}
}
add_action( 'maximo_post_structure_categories', 'maximo_post_structure_categories_template' );


if ( ! function_exists( 'maximo_post_meta_template' ) ) {

	function maximo_post_meta_template() {

		if ( ! maximo_is_post_meta_active() ) {
			return;
		}

		$args = array(
			'post_meta_elements' => array()
		);

		if ( is_archive() || is_home() || is_search() ) {
			$args['post_meta_elements'] = maximo_get_option( 'archive_post_meta' );
		}

		if ( is_single() ) {
			$args['post_meta_elements'] = maximo_get_option( 'single_post_meta' );
		}

		$args = apply_filters( 'maximo_post_meta_structure', $args );

		get_template_part( 'template-parts/entry/entry', 'meta', $args );
	}
}
add_action( 'maximo_post_meta', 'maximo_post_meta_template' );


if ( ! function_exists( 'maximo_post_meta_categories_template' ) ) {

	function maximo_post_meta_categories_template() {

		if ( ! maximo_is_meta_in_post_meta( 'categories' ) ) {
			return;
		}

		$args = array(
			'sep' => ', ',
			'display_icon' => false
		);

		$args['display_icon'] = maximo_is_meta_icon_enabled() ? true : false;

		get_template_part( 'template-parts/entry/entry', 'categories', $args );	
	}
}
add_action( 'maximo_post_meta_categories', 'maximo_post_meta_categories_template' );


if ( ! function_exists( 'maximo_post_meta_author_template' ) ) {

	function maximo_post_meta_author_template() {

		if ( ! maximo_is_meta_in_post_meta( 'author' ) ) {
			return;
		}

		$args = array(
			'display_icon' => false
		);

		$args['display_icon'] = maximo_is_meta_icon_enabled() ? true : false;

		get_template_part( 'template-parts/entry/entry', 'author', $args );	
	}
}
add_action( 'maximo_post_meta_author', 'maximo_post_meta_author_template' );

if ( ! function_exists( 'maximo_post_meta_comments_template' ) ) {

	function maximo_post_meta_comments_template() {

		if ( ! maximo_is_meta_in_post_meta( 'comment' ) ) {
			return;
		}

		$args = array(
			'display_icon' => false
		);

		$args['display_icon'] = maximo_is_meta_icon_enabled() ? true : false;

		get_template_part( 'template-parts/entry/entry', 'comment', $args );	
	}
}
add_action( 'maximo_post_meta_comments', 'maximo_post_meta_comments_template' );


if ( ! function_exists( 'maximo_post_meta_date_template' ) ) {

	function maximo_post_meta_date_template() {

		if ( ! maximo_is_meta_in_post_meta( 'date' ) ) {
			return;
		}

		$args = array(
			'display_icon' => false
		);

		$args['display_icon'] = maximo_is_meta_icon_enabled() ? true : false;

		get_template_part( 'template-parts/entry/entry', 'date', $args );	
	}
}
add_action( 'maximo_post_meta_date', 'maximo_post_meta_date_template' );

if ( ! function_exists( 'maximo_loop_content_template' ) ) {

	function maximo_loop_content_template() {

		$args = array(
			'post_content_elements' => array(),
			'display_post_thumbnail' => false
		);

		$archive_layout = maximo_get_option( 'archive_layout' );

		switch ( $archive_layout ) {
			case 'horizontal-list':
				$args['post_content_elements'] = maximo_get_option( 'archive_horizontal_list_post_structure' );
				break;
			default:
				$args['post_content_elements'] = maximo_get_option( 'archive_fullwidth_post_structure' );
				break;
		}

		$args['display_post_thumbnail'] = maximo_get_option( 'archive_show_post_thumbnail' ) ? true : false;

		$args = apply_filters( 'maximo_archive_args', $args );

		get_template_part( 'template-parts/content/content', $archive_layout, $args );
	}
}
add_action( 'maximo_loop_content', 'maximo_loop_content_template' );


if ( ! function_exists( 'maximo_post_thumbnail_template' ) ) {

	function maximo_post_thumbnail_template() {

		if ( is_singular() && ! maximo_is_post_content_element_enabled( 'image' ) ) {
			return;
		}

		get_template_part( 'template-parts/entry/entry', 'thumbnail' );
	}
}
add_action( 'maximo_post_thumbnail', 'maximo_post_thumbnail_template' );


if ( ! function_exists( 'maximo_post_title_template' ) ) {

	function maximo_post_title_template() {

		get_template_part( 'template-parts/entry/entry', 'header' );	
	}
}
add_action( 'maximo_post_title', 'maximo_post_title_template' );


if ( ! function_exists( 'maximo_post_excerpt_template' ) ) {

	function maximo_post_excerpt_template() {

		get_template_part( 'template-parts/entry/entry', 'summary' );	
	}
}
add_action( 'maximo_post_excerpt', 'maximo_post_excerpt_template' );


if ( ! function_exists( 'maximo_post_read_more_button_template' ) ) {

	function maximo_post_read_more_button_template() {

		if ( ! maximo_get_option( 'archive_enable_read_more_button' ) ) {
			return;
		}

		$customizer_defaults = maximo_get_customizer_defaults();

		$args = array(
			'read_more_button_label' => $customizer_defaults['archive_read_more_button_title']
		);

		$args['read_more_button_label'] = maximo_get_option( 'archive_read_more_button_title' );

		$args = apply_filters( 'maximo_read_more_button_args', $args );

		get_template_part( 'template-parts/entry/entry', 'summary-footer', $args );	
	}
}
add_action( 'maximo_post_read_more_button', 'maximo_post_read_more_button_template' );


if ( ! function_exists( 'maximo_post_footer_template' ) ) {

	function maximo_post_footer_template() {

		if ( ! maximo_is_post_content_element_enabled( 'tags' ) && ! maximo_is_post_content_element_enabled( 'updated_date' ) ) {
			return;
		}

		get_template_part( 'template-parts/entry/entry', 'footer' );
	}
}
add_action( 'maximo_post_footer', 'maximo_post_footer_template' );


if ( ! function_exists( 'maximo_posts_navigation_template' ) ) {

	function maximo_posts_navigation_template() {

		if ( ! maximo_is_post_content_element_enabled( 'post_nav' ) ) {
			return;
		}

		$customizer_defaults = maximo_get_customizer_defaults();

	    $args = array(
	    	'prev_post_link_title' => $customizer_defaults['prev_post_link_title_label'],
	    	'next_post_link_title' => $customizer_defaults['next_post_link_title_label']
	    );

	    $args['prev_post_link_title'] = maximo_get_option( 'prev_post_link_title_label' );

	    $args['next_post_link_title'] = maximo_get_option( 'next_post_link_title_label' );

	    $args = apply_filters( 'maximo_posts_navigation_args', $args );

	    get_template_part( 'template-parts/entry/entry', 'navigation', $args );
	}
}
add_action( 'maximo_posts_navigation', 'maximo_posts_navigation_template' );


if ( ! function_exists( 'maximo_post_author_box_template' ) ) {

	function maximo_post_author_box_template() {

		if ( ! maximo_is_post_content_element_enabled( 'author_box' ) ) {
			return;
		}

		get_template_part( 'template-parts/content/content', 'author-box' );
	}
}
add_action( 'maximo_post_author_box', 'maximo_post_author_box_template' );

if ( ! function_exists( 'maximo_post_comments_box_template' ) ) {

	function maximo_post_comments_box_template() {

		$args = [
			'show_cmnts_toggle_btn' => false,
			'cmnts_toggle_btn_label' => '',
		];

		if ( maximo_get_option( 'single_show_toggle_comments_btn' ) && maximo_get_option( 'single_comment_toggle_btn_title' ) ) {

			$args['show_cmnts_toggle_btn'] = true;

			$args['cmnts_toggle_btn_label'] = maximo_get_option( 'single_comment_toggle_btn_title' );
		}

		$args = apply_filters( 'maximo_post_comments_box_args', $args );

		get_template_part( 'template-parts/content/content', 'comments', $args );
	}
}
add_action( 'maximo_post_comments_box', 'maximo_post_comments_box_template' );

if ( ! function_exists( 'maximo_pagination_template' ) ) {

	function maximo_pagination_template() {

		$pagination_args = [];

		$pagination_template = maximo_get_option( 'archive_pagination_type' );

		$pagination_args['type'] = $pagination_template;

		if ( maximo_get_option( 'previous_posts_link_btn_label' ) ) {
			$pagination_args['prev_btn_label'] = maximo_get_option( 'previous_posts_link_btn_label' );
		}

		if ( maximo_get_option( 'next_posts_link_btn_label' ) ) {
			$pagination_args['next_btn_label'] = maximo_get_option( 'next_posts_link_btn_label' );
		}

		if ( maximo_get_option( 'pagination_mid_size' ) ) {
			$pagination_args['mid_size'] = maximo_get_option( 'pagination_mid_size' );
		}

		$pagination_args = apply_filters( 'maximo_pagination_args', $pagination_args );

		get_template_part( 'template-parts/content/content', 'pagination', $pagination_args );
	}
}
add_action( 'maximo_pagination', 'maximo_pagination_template' );


if ( ! function_exists( 'maximo_content_single_template' ) ) {

	function maximo_content_single_template() {

		get_template_part( 'template-parts/content/content', 'single' );
	}
}
add_action( 'maximo_content_single', 'maximo_content_single_template' );




if ( ! function_exists( 'maximo_archive_page_title_template' ) ) {

	function maximo_archive_page_title_template() {

		if ( maximo_is_page_header_activated() ) {
			return;
		}

		$archive_description = get_the_archive_description();
		?>
		<div class="maximo-archive-title-wrapper <?php if ( $archive_description ) { echo 'maximo-has-archive-description'; } ?>">
			<div class="maximo-archive-title-wrapper-inner">
				<?php do_action( 'maximo_archive_title' ); ?>
			</div>
		</div>
		<?php
	}
}
add_action( 'maximo_archive_page_title', 'maximo_archive_page_title_template' );


if ( ! function_exists( 'maximo_post_format_icon_template' ) ) {
	function maximo_post_format_icon_template() {
		$post_format = get_post_format();
		switch ( $post_format ) {
			case 'audio':
				get_template_part( 'template-parts/entry/format/media', 'audio' );
				break;
			case 'gallery':
				get_template_part( 'template-parts/entry/format/media', 'gallery' );
				break;
			case 'image':
				get_template_part( 'template-parts/entry/format/media', 'image' );
				break;
			case 'link':
				get_template_part( 'template-parts/entry/format/media', 'link' );
				break;
			case 'quote':
				get_template_part( 'template-parts/entry/format/media', 'quote' );
				break;
			case 'video':
				get_template_part( 'template-parts/entry/format/media', 'video' );
				break;
			default:
				break;
		}
	}
}
add_action( 'maximo_post_format_icon', 'maximo_post_format_icon_template' );