<?php
if ( ! function_exists( 'maximo_get_option' ) ) {

    /**
     * Get theme option.
     *
     * @since 1.0.0
     *
     * @param string $key Option key.
     * @return mixed Option value.
     */
    function maximo_get_option( $key ) {

        if ( empty( $key ) ) {

            return;
        }

        $value = '';

        $default = maximo_get_customizer_defaults();

        $default_value = null;

        if ( is_array( $default ) && isset( $default[ $key ] ) ) {
            $default_value = $default[ $key ];
        }

        if ( null !== $default_value ) {

            $value = get_theme_mod( $key, $default_value );
        } else {

            $value = get_theme_mod( $key );
        }

        return $value;
    }
}

if ( ! function_exists( 'maximo_get_customizer_defaults' ) ) {

    function maximo_get_customizer_defaults() {

        $defaults = array(
            'enable_custom_site_background' => false,
            'site_background_type' => 'color',
            'site_layout' => 'maximo-fullwidth-contained',
            'container_width' => 1200,
            'theme_skin' => 'maximo-theme-light',
            'accent_color' => '#16c1ff',
            'display_dark_mode_toggle_button' => false,
            'text_color' => '#000000',
            'link_color' => '#000000',
            'link_hover_color' => '#16c1ff',
            'headings_color' => '#000000',
            'boxed_content_bg_color' => '#ffffff',
            'border_color' => '#eeeeee',
            'body_font_type' => 'system_font',
            'body_system_font_family' => 'arial',
            'body_system_font_weight' => '400',
            'body_google_font' => json_encode(
                array(
                    'font' => 'Open Sans',
                    'regularweight' => array( 'regular' ),
                    'boldweight' => array( '400' ),
                    'category' => 'sans-serif'
                )
            ),
            'body_font_size' => array(
                'desktop' => 15,
                'tablet' => 15,
                'mobile' => 15
            ),
            'body_line_height' => array(
                'desktop' => 1.5,
                'tablet' => 1.5,
                'mobile' => 1.5,
            ),
            'headings_font_type' => 'system_font',
            'headings_system_font_family' => 'helvetica',
            'headings_system_font_weight' => '500',
            'headings_google_font' => json_encode(
                array(
                    'font' => 'Open Sans',
                    'regularweight' => array( 'regular' ),
                    'boldweight' => array( '400' ),
                    'category' => 'sans-serif'
                )
            ),
            'h1_font_size' => array(
                'desktop' => 36,
                'tablet' => 36,
                'mobile' => 36,
            ),
            'h1_line_height' => array(
                'desktop' => 1.2,
                'tablet' => 1.2,
                'mobile' => 1.2,
            ),
            'h2_font_size' => array(
                'desktop' => 32,
                'tablet' => 32,
                'mobile' => 32,
            ),
            'h2_line_height' => array(
                'desktop' => 1.3,
                'tablet' => 1.3,
                'mobile' => 1.3
            ),
            'h3_font_size' => array(
                'desktop' => 28,
                'tablet' => 28,
                'mobile' => 28
            ),
            'h3_line_height' => array(
                'desktop' => 1.3,
                'tablet' => 1.3,
                'mobile' => 1.3
            ),
            'h4_font_size' => array(
                'desktop' => 24,
                'tablet' => 24,
                'mobile' => 24,
            ),
            'h4_line_height' => array(
                'desktop' => 1.4,
                'tablet' => 1.4,
                'mobile' => 1.4
            ),
            'h5_font_size' => array(
                'desktop' => 20,
                'tablet' => 20,
                'mobile' => 20,
            ),
            'h5_line_height' => array(
                'desktop' => 1.5,
                'tablet' => 1.5,
                'mobile' => 1.5,
            ),
            'h6_font_size' => array(
                'desktop' => 18,
                'tablet' => 18,
                'mobile' => 18,
            ),
            'h6_line_height' => array(
                'desktop' => 1.5,
                'tablet' => 1.5,
                'mobile' => 1.5,
            ),
            'button_style' => 'default',
            'btn_txt_color' => '#ffffff',
            'btn_bg_color' => '#000000',
            'btn_txt_hover_color' => '#000000',
            'btn_bg_hover_color' => '#16c1ff',
            'btn_border_width' => 0,
            'btn_border_radius' => 3,
            'btn_border_color' => '#000000',
            'btn_border_hover_color' => '#16c1ff',
            'txt_button_style' => 'default',
            'txt_btn_txt_color' => '#ffffff',
            'txt_btn_bg_color' => '#000000',
            'txt_btn_txt_hover_color' => '#000000',
            'txt_btn_bg_hover_color' => '#16c1ff',
            'txt_btn_border_width' => 0,
            'txt_btn_border_radius' => 0,
            'txt_btn_border_color' => '#000000',
            'txt_btn_border_hover_color' => '#16c1ff',
            'enable_scroll_top_button' => false,
            'scroll_top_btn_device_visibility' => 'default',
            'enable_page_header' => false,
            'page_header_display_pages' => array(),
            'page_header_content_width' => 'maximo-content-width',
            'page_header_content_position' => 'bottom',
            'page_header_text_alignments' => 'left',
            'page_header_text_color' => '#ffffff',
            'page_header_link_hover_color' => '#16c1ff',
            'page_header_background_type' => 'color',
            'page_header_bg_color' => '#000000',
            'page_header_gradient_bg_color_1' => '#000000',
            'page_header_gradient_location_1' => 30,
            'page_header_gradient_bg_color_2' => '#000000',
            'page_header_gradient_location_2' => 100,
            'page_header_gradient_type' => 'linear',
            'page_header_gradient_linear_angle' => 45,
            'page_header_gradient_radial_position' => 'center_center',
            'page_header_image_background_repeat' => 'no-repeat',
            'page_header_image_background_size' => 'auto',
            'page_header_image_background_position' => 'center-center',
            'page_header_image_background_attachment' => 'scroll',
            'page_header_overlay_color' => '#000000',
            'page_header_height' => array(
                'desktop' => 100,
                'tablet' => 100,
                'mobile' => 100,
            ),
            'page_header_content_margin' => array(
                'desktop_top' => 0,
                'desktop_right' => 0,
                'desktop_bottom' => 0,
                'desktop_left' => 0,
                'tablet_top' => 0,
                'tablet_right' => 0,
                'tablet_bottom' => 0,
                'tablet_left' => 0,
                'mobile_top' => 0,
                'mobile_right' => 0,
                'mobile_bottom' => 0,
                'mobile_left' => 0,
            ),
            'page_header_content_padding' => array(
                'desktop_top' => 0,
                'desktop_right' => 0,
                'desktop_bottom' => 0,
                'desktop_left' => 0,
                'tablet_top' => 0,
                'tablet_right' => 0,
                'tablet_bottom' => 0,
                'tablet_left' => 0,
                'mobile_top' => 0,
                'mobile_right' => 0,
                'mobile_bottom' => 0,
                'mobile_left' => 0,
            ),
            'enable_breadcrumbs' => false,
            'breadcrumbs_source' => 'default',
            'breadcrumbs_width' => 'maximo-content-width',
            'breadcrumbs_display_pages' => array( 'blog_page', 'archive_page', 'search_page', 'post_single', 'page_single', 'page_404' ),
            'breadcrumbs_position' => 'default',
            'breadcrumbs_position_inside_page_header' => 'after',
            'breadcrumbs_alignment' => 'left',
            'breadcrumb_visibility' => 'default',
            'archive_layout' => 'horizontal-list',
            'archive_content_width' => 'maximo-content-width',
            'archive_narrow_width' => 700,
            'archive_fullwidth_post_structure' => array( 'image', 'category', 'title', 'meta', 'excerpt' ),
            'archive_horizontal_list_post_structure' => array( 'category', 'title', 'meta', 'excerpt' ),
            'archive_post_meta' => array( 'author', 'date', 'comment', 'categories' ),
            'archive_show_icons_in_post_meta' => true,
            'archive_show_post_thumbnail' => true,
            'archive_post_thumbnail_size' => 'large',
            'archive_post_thumbnail_position' => 'right',
            'archive_excerpt_length' => 30,
            'archive_excerpt_more' => '...',
            'archive_enable_read_more_button' => false,
            'archive_read_more_button_title' => esc_html__( 'Read More', 'maximo' ),
            'archive_pagination_type' => 'default',
            'previous_posts_link_btn_label' => esc_html__( 'Newer Posts', 'maximo' ),
            'next_posts_link_btn_label' => esc_html__( 'Older Posts', 'maximo' ),
            'pagination_mid_size' => 2,
            'archive_post_title_font_size' => array(
                'desktop' => 32,
                'tablet' => 32,
                'mobile' => 32,
            ),
            'single_content_width' => 'maximo-narrow-width',
            'single_narrow_width' => 700,
            'single_title_header_alignment' => 'left',
            'single_post_elements' => array( 'image', 'category', 'tags', 'updated_date', 'author_box', 'post_nav' ),
            'single_post_meta' => array( 'author', 'date', 'comment', 'categories' ),
            'single_show_icons_in_post_meta' => true,
            'single_show_toggle_comments_btn' => false,
            'single_comment_toggle_btn_title' => esc_html__( 'Show Comments', 'maximo' ),
            'prev_post_link_title_label' => esc_html__( 'Previous Post', 'maximo' ),
            'next_post_link_title_label' => esc_html__( 'Next Post', 'maximo' ),  
            'display_top_header' => false,
            'top_header_visibility' => 'default',
            'top_header_width' => 'maximo-content-width',
            'display_top_header_left_element' => false,
            'top_header_left_element' => 'text',
            'display_top_header_right_element' => false,
            'top_header_right_element' => 'nav_menu',
            'top_header_nav_menu' => '',
            'top_header_nav_menu_visibility' => 'default',
            'top_header_text' => '',
            'top_header_text_visibility' => 'default',
            'top_header_social_menu' => '',
            'top_header_display_social_menu_title' => false,
            'top_header_social_menu_visibility' => 'default',
            'main_header_layout' => 'header_2',
            'main_header_width' => 'maximo-content-width',
            'main_header_enable_header_ad' => false,
            'main_header_ad_visibility' => 'default',
            'main_header_enable_header_elements' => false,
            'main_header_elements' => array( 'search' ),
            'main_header_elements_separator' => 'none',
            'main_header_search_visibility' => 'default',
            'main_header_button_text' => esc_html__( 'Button Text', 'maximo' ),
            'main_header_button_link' => '#',
            'main_header_button_link_in_new_tab' => false,
            'main_header_button_visibility' => 'default',
            'main_header_button_background_color' => '#000000',
            'main_header_button_hover_background_color' => '#16c1ff',
            'main_header_button_border_width' => '0',
            'main_header_button_border_color' => '#000000',
            'main_header_button_hover_border_color' => '#16c1ff',
            'main_header_button_text_color' => '#FFFFFF',
            'main_header_button_hover_text_color' => '#FFFFFF',
            'main_header_button_padding' => array(
                'desktop_top' => 12,
                'desktop_right' => 20,
                'desktop_bottom' => 12,
                'desktop_left' => 20,
                'tablet_top' => 12,
                'tablet_right' => 20,
                'tablet_bottom' => 12,
                'tablet_left' => 20,
                'mobile_top' => 12,
                'mobile_right' => 15,
                'mobile_bottom' => 12,
                'mobile_left' => 15,
            ),
            'main_navigation_enable_sticky' => false,
            'main_navigation_alignment' => 'left',
            'main_navigation_mobile_breakpoint' => 768,
            'main_navigation_mobile_menu_button_label' => '',
            'main_navigation_alignment' => 'left',
            'enable_transparent_header' => false,
            'enable_transparent_header_on_pages' => '',
            'transparent_header_alternative_logo' => '',
            'transparent_header_site_title_color' => '#ffffff',
            'transparent_header_tagline_color' => '#ffffff',
            'transparent_header_text_color' => '#ffffff',
            'transparent_header_link_hover_color' => '#16c1ff',
            'transparent_header_border_color' => '#eeeeee',
            'site_identity_logo_max_width' => array(
                'desktop' => 200,
                'tablet' => 200,
                'mobile' => 200
            ),
            'dark_mode_logo' => '',
            'site_title_color' => '#000000',
            'dark_mode_site_title_color' => '#ffffff',
            'dark_mode_site_description_color' => '#ffffff',
            'site_identity_alignment' => 'left',
            'site_identity_font_type' => 'system_font',
            'site_identity_system_font_family' => 'helvetica',
            'site_identity_system_font_weight' => '500',
            'site_identity_google_font' => json_encode(
                array(
                    'font' => 'Open Sans',
                    'regularweight' => array( 'regular' ),
                    'boldweight' => array( '400' ),
                    'category' => 'sans-serif'
                )
            ),
            'site_identity_font_size' => array(
                'desktop' => 32,
                'tablet' => 26,
                'mobile' => 22,
            ),
            'site_identity_line_height' => array(
                'desktop' => 1.2,
                'tablet' => 1.3,
                'mobile' => 1.3,
            ),
            'enable_banner_slider' => false,
            'banner_slider_enable_on' => 'blog_page',
            'banner_slider_visibility' => 'default',
            'banner_slider_width' => 'maximo-banner-content-width',
            'banner_slider_post_no' => 3,
            'banner_slider_post_category' => 'default',
            'banner_slider_display_categories' => false,
            'banner_slider_post_meta' => array( 'author', 'date', 'comment', 'categories' ),
            'banner_slider_enable_meta_icons' => false,
            'banner_slider_display_excerpt' => false,
            'banner_slider_enable_button' => false,
            'banner_slider_button_title' => esc_html__( 'Read More', 'maximo' ),
            'banner_slider_open_link_in_new_tab' => false,
            'banner_slider_content_position' => 'top',
            'banner_slider_content_alignment' => 'left',
            'banner_slider_content_width' => 'maximo-content-width',
            'banner_slider_content_wrap_width' => array(
                'desktop' => 100,
                'tablet' => 100,
                'mobile' => 100,
            ),
            'banner_slider_image_size' => 'large',
            'banner_slider_image_background_repeat' => 'no-repeat',
            'banner_slider_image_background_size' => 'auto',
            'banner_slider_image_background_position' => 'center-center',
            'banner_slider_height' => array(
                'desktop' => 100,
                'tablet' => 100,
                'mobile' => 100,
            ),
            'banner_slider_margin' => array(
                'desktop_top' => 0,
                'desktop_right' => 0,
                'desktop_bottom' => 0,
                'desktop_left' => 0,
                'tablet_top' => 0,
                'tablet_right' => 0,
                'tablet_bottom' => 0,
                'tablet_left' => 0,
                'mobile_top' => 0,
                'mobile_right' => 0,
                'mobile_bottom' => 0,
                'mobile_left' => 0,
            ),
            'banner_slider_content_margin' => array(
                'desktop_top' => 0,
                'desktop_right' => 0,
                'desktop_bottom' => 0,
                'desktop_left' => 0,
                'tablet_top' => 0,
                'tablet_right' => 0,
                'tablet_bottom' => 0,
                'tablet_left' => 0,
                'mobile_top' => 0,
                'mobile_right' => 0,
                'mobile_bottom' => 0,
                'mobile_left' => 0,
            ),
            'banner_slider_content_padding' => array(
                'desktop_top' => 0,
                'desktop_right' => 0,
                'desktop_bottom' => 0,
                'desktop_left' => 0,
                'tablet_top' => 0,
                'tablet_right' => 0,
                'tablet_bottom' => 0,
                'tablet_left' => 0,
                'mobile_top' => 0,
                'mobile_right' => 0,
                'mobile_bottom' => 0,
                'mobile_left' => 0,
            ),
            'banner_slider_enable_overlay' => false,
            'banner_slider_overlay_color' => 'rgba(0,0,0,0.2)',
            'banner_slider_text_color' => '#ffffff',
            'sidebar_default_position' => 'no-sidebar',
            'sidebar_post_single_position' => 'default',
            'sidebar_page_single_position' => 'default',
            'sidebar_archives_and_search_position' => 'default',
            'sidebar_width' => 30,
            'sidebar_widget_style' => 'default',
            'enable_sticky_sidebar' => false,
            'sidebar_responsive_position' => 'hide',
            'display_footer_widgets' => false,
            'footer_widgets_visibility' => 'default',
            'footer_widgets_width' => 'maximo-content-width',
            'footer_widgets_columns' => '3',
            'footer_widget_2_columns_layout' => 'variation_1',
            'footer_widget_3_columns_layout' => 'variation_1',
            'footer_copyright_bar_layout' => 'variation_1',
            'footer_copyright_bar_width' => 'maximo-content-width',
            'footer_copyright_text' => esc_html__( 'Copyright &copy; {current_year} {site_title}', 'maximo' ),
            'footer_copyright_position' => 'left',
            'footer_copyright_bar_extra_element_visibility' => 'default',
            'footer_copyright_bar_extra_element' => 'text',
            'footer_copyright_bar_text' => '',
            'footer_copyright_bar_social_menu' => '',
            'footer_copyright_bar_display_social_menu_title' => false,
            'footer_copyright_bar_nav_menu' => ''
        );

        if ( class_exists( 'WooCommerce' ) ) {

            $woocommerce_defaults = array(
                'main_header_display_cart_items_no' => false,
                'main_header_cart_visibility' => 'default',
                'sidebar_woocommerce_archive_position' => 'default',
                'sidebar_woocommerce_product_position' => 'default',
                'related_products_heading' => esc_html__( 'Related products', 'maximo' ),
                'related_products_columns_per_row' => 3,
                'related_products_per_page' => 3,
                'upsell_products_heading' => esc_html__( 'You may also like???', 'maximo' ),
                'upsell_products_columns_per_row' => 3,
                'upsell_products_per_page' => 3,
                'cross_sell_products_heading' => esc_html__( 'You may be interested in???', 'maximo' ),
                'cross_sell_products_columns_per_row' => 3,
                'cross_sell_products_per_page' => 3
            );

            $defaults = array_merge( $defaults, $woocommerce_defaults );
        }

        if ( class_exists( 'YITH_WCWL' ) ) {

            $yith_defaults = array(
                'main_header_display_wishlist_items_no' => false,
                'main_header_wishlist_visibility' => 'default'
            );

            $defaults = array_merge( $defaults, $yith_defaults );
        }

        return apply_filters( 'maximo_customizer_defaults', $defaults );
    }
}