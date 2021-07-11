<?php

/**
 * Function to load dynamic styles.
 *
 * @since  1.0.0
 * @access public
 * @return null
 */
if ( ! function_exists( 'maximo_dynamic_css' ) ) {

	function maximo_dynamic_css() {

        $customizer_defaults = maximo_get_customizer_defaults();

		$css = '';

		$body_font_size = null;
		$body_font_family = null;
		$headings_font_family = null;

		$body_font_type = maximo_get_option( 'body_font_type' );

		if ( $body_font_type == 'google_font' ) {

            $body_google_font = maximo_get_option( 'body_google_font' );

            $body_google_font = json_decode( $body_google_font, true );

            $body_font_category = $body_google_font['category'];

            if ( $body_font_category ) {

            	$body_font_category = ',' . $body_font_category;
            }

            $body_font_family = $body_google_font["font"] . $body_font_category;
        } else {

            $body_system_font_family = maximo_get_option( 'body_system_font_family' );

            $websafe_fonts = maximo_get_standard_fonts();

            $body_font_family = $websafe_fonts[ $body_system_font_family ];      	
        }

        $body_font_size = ( maximo_get_option( 'body_font_size_desktop' ) ) ? maximo_get_option( 'body_font_size_desktop' ) : $customizer_defaults['body_font_size']['desktop'];

    	$headings_font_type = maximo_get_option( 'headings_font_type' );

    	if ( $headings_font_type == 'google_font' ) {

            $headings_google_font = maximo_get_option( 'headings_google_font' );

            $headings_google_font = json_decode( $headings_google_font, true );

            $headings_font_category = $headings_google_font['category'];

            if ( $headings_font_category ) {

            	$headings_font_category = ',' . $headings_font_category;
            }

            $headings_font_family = $headings_google_font["font"] . $headings_font_category;
        } else {

            $headings_system_font_family = maximo_get_option( 'headings_system_font_family' );

            $websafe_fonts = maximo_get_standard_fonts();
            
            $headings_font_family = $websafe_fonts[ $headings_system_font_family ];
        }

        $accent_color = maximo_get_option( 'accent_color' );

        $css .= ':root {
        	--maximo-body-font-family: ' . esc_attr( $body_font_family ) . ';
			--maximo-body-font-size: ' . esc_attr( maximo_px_to_rem( $body_font_size ) ) . 'rem;
			--maximo-headings-font-family: ' . esc_attr( $headings_font_family ) . ';
			--maximo-font-size-small: ' . esc_attr( maximo_px_to_rem( absint( $body_font_size - ( 12.5 / 100 * $body_font_size ) ) ) ) . 'rem;
            --maximo-font-size-medium: ' . esc_attr( maximo_px_to_rem( $body_font_size + ( 12.5 / 100 * $body_font_size ) ) ) . 'rem;
            --maximo-font-size-large: ' . esc_attr( maximo_px_to_rem( $body_font_size + ( 25 / 100 * $body_font_size ) ) ) . 'rem;
            --maximo-icon-font-size: ' . esc_attr( maximo_px_to_rem( $body_font_size - ( 25 / 100 * $body_font_size ) ) ) . 'rem;
            --maximo-caption-font-size: ' . esc_attr( maximo_px_to_rem( $body_font_size - ( 18.75 / 100 * $body_font_size ) ) ) . 'rem;
            --maximo-accent-color: ' . esc_attr( $accent_color ) . ';
        }';


        $css .= '.maximo-btn, button, .button, .btn-general, .button-general, input[type="button"], input[type="reset"], input[type="submit"], .wp-block-search .wp-block-search__button {';

            $css .= '
                color: ' . esc_attr( maximo_get_option( 'btn_txt_color' ) ) . ';
            ';

            $css .= '
                background-color: ' . esc_attr( maximo_get_option( 'btn_bg_color' ) ) . ';
            ';

            $css .= '
                border-width: ' . esc_attr( maximo_get_option( 'btn_border_width' ) ) . 'px;
            ';

            $css .= '
                border-color: ' . esc_attr( maximo_get_option( 'btn_border_color' ) ) . ';
            ';

            $is_button_style_rounded = ( maximo_get_option( 'button_style' ) == 'rounded' ) ? true : false;

            if ( $is_button_style_rounded ) {
                $css .= '
                    border-radius: ' . esc_attr( maximo_get_option( 'btn_border_radius' ) ) . 'px;
                ';
            }

        $css .= '}';

        $css .= '.maximo-btn:hover, .maximo-btn:hover, button:hover, .button:hover, .btn-general:hover, .button-general:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, .wp-block-search .wp-block-search__button:hover {';

            $css .= '
                color: ' . esc_attr( maximo_get_option( 'btn_border_radius' ) ) . ';
            ';

            $css .= '
                background-color: ' . esc_attr( maximo_get_option( 'btn_border_radius' ) ) . ';
            ';

            $css .= '
                border-color: ' . esc_attr( maximo_get_option( 'btn_border_hover_color' ) ) . ';
            ';

        $css .= '}';


        // Start Text Button CSS

        $css .= '
            .maximo-txt-btn,
            .widget.widget_calendar > .calendar_wrap > .wp-calendar-nav a {';

            $css .= '
                border-style: solid;
            ';

            $css .= '
                color: ' . esc_attr( maximo_get_option( 'txt_btn_txt_color' ) ) . ';
            ';

            $css .= '
                border-width: ' . esc_attr( maximo_get_option( 'txt_btn_border_width' ) ) . 'px;
            ';

            $css .= '
                background-color: ' . esc_attr( maximo_get_option( 'txt_btn_bg_color' ) ) . ';
            ';

            $css .= '
                border-color: ' . esc_attr( maximo_get_option( 'txt_btn_border_color' ) ) . ';
            ';

            $is_txt_button_style_rounded = ( maximo_get_option( 'txt_button_style' ) == 'rounded' ) ? true : false;

            if ( $is_txt_button_style_rounded ) {
                $css .= '
                    border-radius: ' . esc_attr( maximo_get_option( 'txt_btn_border_radius' ) ) . 'px;
                ';
            }

        $css .= '}';

        $css .= '
            .maximo-txt-btn:hover,
            .widget.widget_calendar > .calendar_wrap > .wp-calendar-nav a:hover {';

            $css .= '
                color: ' . esc_attr( maximo_get_option( 'txt_btn_txt_hover_color' ) ) . ';
            ';

            $css .= '
                background-color: ' . esc_attr( maximo_get_option( 'txt_btn_bg_hover_color' ) ) . ';
            ';

            $css .= '
                border-color: ' . esc_attr( maximo_get_option( 'txt_btn_border_hover_color' ) ) . ';
            ';

        $css .= '}';

        // End Text Button CSS


		$css .= 'body {';

		$body_font_type = maximo_get_option( 'body_font_type' );

        if ( $body_font_type == 'google_font' ) {

            $body_google_font = maximo_get_option( 'body_google_font' );

            $body_google_font = json_decode( $body_google_font, true );

            $body_font_category = $body_google_font['category'];

            if ( $body_font_category ) {

            	$body_font_category = ',' . $body_font_category;
            }

            $body_font_family = $body_google_font["font"] . $body_font_category;

            $css .= '
            	font-weight: ' . maximo_google_font_weight( $body_google_font["boldweight"] ) . ';
            ';
        } else {

            $body_system_font_family = maximo_get_option( 'body_system_font_family' );

            $websafe_fonts = maximo_get_standard_fonts();

            $body_font_family = $websafe_fonts[ $body_system_font_family ];


            $css .= '
                font-weight: ' . absint( maximo_get_option( 'body_system_font_weight' ) ) . ';
            ';
        }

        $body_line_height_desktop = maximo_get_option( 'body_line_height_desktop' ) ? maximo_get_option( 'body_line_height_desktop' ) : $customizer_defaults['body_line_height']['desktop'];

        $css .= '
            line-height: ' . esc_attr( $body_line_height_desktop ) . ';
        ';

        $css .= '}';


        // Headings CSS

        $css .= 'h1,h2,h3,h4,h5,h6 {';

        if ( $headings_font_type == 'google_font' ) {

            $headings_google_font = maximo_get_option( 'headings_google_font' );

            $headings_google_font = json_decode( $headings_google_font, true );

            $headings_font_category = $headings_google_font['category'];

            if ( $headings_font_category ) {
            	$headings_font_category = ',' . $headings_font_category;
            }

            $headings_font_family = $headings_google_font["font"] . $headings_font_category;

            $css .= '
            	font-weight: ' . maximo_google_font_weight( $headings_google_font["boldweight"] ) . ';
            ';
        } else {

            $headings_system_font_family = maximo_get_option( 'headings_system_font_family' );

            $websafe_fonts = maximo_get_standard_fonts();

            $headings_font_family = $websafe_fonts[ $headings_system_font_family ];
        	
            $css .= '
                font-weight: ' . absint( maximo_get_option( 'headings_system_font_weight' ) ) . ';
            ';
        }

        $css .= '}';

        // H1 font size and line height on desktop devices

        $css .= 'h1 {';

        $h1_desktop_font_size = ( maximo_get_option( 'h1_font_size_desktop' ) ) ? maximo_get_option( 'h1_font_size_desktop' ) : $customizer_defaults['h1_font_size']['desktop'];

        $css .= '
            font-size: ' . esc_attr( maximo_px_to_rem( $h1_desktop_font_size ) ) . 'rem;
        ';

        $h1_desktop_line_height = ( maximo_get_option( 'h1_line_height_desktop' ) ) ? maximo_get_option( 'h1_line_height_desktop' ) : $customizer_defaults['h1_line_height']['desktop'];

        $css .= '
            line-height: ' . esc_attr( $h1_desktop_line_height  ) . ';
        ';

        $css .= '}';

        // H2 font size and line height on desktop devices

        $css .= 'h2 {';

        $h2_desktop_font_size = ( maximo_get_option( 'h2_font_size_desktop' ) ) ? maximo_get_option( 'h2_font_size_desktop' ) : $customizer_defaults['h2_font_size']['desktop'];

        $css .= '
            font-size: ' . esc_attr( maximo_px_to_rem( $h2_desktop_font_size ) ) . 'rem;
        ';

        $h2_desktop_line_height = ( maximo_get_option( 'h2_line_height_desktop' ) ) ? maximo_get_option( 'h2_line_height_desktop' ) : $customizer_defaults['h2_line_height']['desktop'];

        $css .= '
            line-height: ' . esc_attr( $h2_desktop_line_height  ) . ';
        ';

        $css .= '}';

        // H3 font size and line height on desktop devices

        $css .= 'h3 {';

        $h3_desktop_font_size = ( maximo_get_option( 'h3_font_size_desktop' ) ) ? maximo_get_option( 'h3_font_size_desktop' ) : $customizer_defaults['h3_font_size']['desktop'];

        $css .= '
            font-size: ' . esc_attr( maximo_px_to_rem( $h3_desktop_font_size ) ) . 'rem;
        ';

        $h3_desktop_line_height = ( maximo_get_option( 'h3_line_height_desktop' ) ) ? maximo_get_option( 'h3_line_height_desktop' ) : $customizer_defaults['h3_line_height']['desktop'];

        $css .= '
            line-height: ' . esc_attr( $h3_desktop_line_height  ) . ';
        ';

        $css .= '}';

        // H4 font size and line height on desktop devices

        $css .= 'h4 {';

        $h4_desktop_font_size = ( maximo_get_option( 'h4_font_size_desktop' ) ) ? maximo_get_option( 'h4_font_size_desktop' ) : $customizer_defaults['h4_font_size']['desktop'];

        $css .= '
            font-size: ' . esc_attr( maximo_px_to_rem( $h4_desktop_font_size ) ) . 'rem;
        ';

        $h4_desktop_line_height = ( maximo_get_option( 'h4_line_height_desktop' ) ) ? maximo_get_option( 'h4_line_height_desktop' ) : $customizer_defaults['h4_line_height']['desktop'];

        $css .= '
            line-height: ' . esc_attr( $h4_desktop_line_height  ) . ';
        ';

        $css .= '}';


        // H5 font size and line height on desktop devices

        $css .= 'h5 {';

        $h5_desktop_font_size = ( maximo_get_option( 'h5_font_size_desktop' ) ) ? maximo_get_option( 'h5_font_size_desktop' ) : $customizer_defaults['h5_font_size']['desktop'];

        $css .= '
            font-size: ' . esc_attr( maximo_px_to_rem( $h5_desktop_font_size ) ) . 'rem;
        ';

        $h5_desktop_line_height = ( maximo_get_option( 'h5_line_height_desktop' ) ) ? maximo_get_option( 'h5_line_height_desktop' ) : $customizer_defaults['h5_line_height']['desktop'];

        $css .= '
            line-height: ' . esc_attr( $h5_desktop_line_height  ) . ';
        ';

        $css .= '}';

        // H6 font size and line height on desktop devices

        $css .= 'h6 {';

        $h6_desktop_font_size = ( maximo_get_option( 'h6_font_size_desktop' ) ) ? maximo_get_option( 'h6_font_size_desktop' ) : $customizer_defaults['h6_font_size']['desktop'];

        $css .= '
            font-size: ' . esc_attr( maximo_px_to_rem( $h6_desktop_font_size ) ) . 'rem;
        ';

        $h6_desktop_line_height = ( maximo_get_option( 'h6_line_height_desktop' ) ) ? maximo_get_option( 'h6_line_height_desktop' ) : $customizer_defaults['h6_line_height']['desktop'];

        $css .= '
            line-height: ' . esc_attr( $h6_desktop_line_height  ) . ';
        ';

        $css .= '}';


        // Site title typography

        $css .= '.site-title {';

		$site_identity_font_type = maximo_get_option( 'site_identity_font_type' );

        if ( $site_identity_font_type == 'google_font' ) {
            $site_identity_google_font = maximo_get_option( 'site_identity_google_font' );
            $site_identity_google_font = json_decode( $site_identity_google_font, true );
            $site_identity_font_category = $site_identity_google_font['category'];
            if ( $site_identity_font_category ) {
            	$site_identity_font_category = ',' . $site_identity_font_category;
            }
            $css .= '
            	font-family: ' . $site_identity_google_font["font"] . $site_identity_font_category  . ';
            	font-weight: ' . maximo_google_font_weight( $site_identity_google_font["boldweight"] ) . ';
            ';
        } else {

    		$css .= '
    			font-family: ' . esc_attr( maximo_get_option( 'site_identity_system_font_family' ) ) . ';
    		';

            $css .= '
                font-weight: ' . absint( maximo_get_option( 'site_identity_system_font_weight' ) ) . ';
            ';      	
        }

        // Site title font size and line height on desktop devices

        $site_identity_desktop_font_size = ( maximo_get_option( 'site_identity_font_size_desktop' ) ) ? maximo_get_option( 'site_identity_font_size_desktop' ) : $customizer_defaults['site_identity_font_size']['desktop'];

        $css .= '
            font-size: ' . esc_attr( maximo_px_to_rem( $site_identity_desktop_font_size ) ) . 'rem;
        ';

        $site_identity_desktop_line_height = ( maximo_get_option( 'site_identity_line_height_desktop' ) ) ? maximo_get_option( 'site_identity_line_height_desktop' ) : $customizer_defaults['site_identity_line_height']['desktop'];

        $css .= '
            line-height: ' . esc_attr( $site_identity_desktop_line_height  ) . ';
        ';

        $css .= '}';


        // Archive post title font size for desktop devices

        $css .= '.maximo-post-element-title .maximo-entry-title {';

        $archive_post_title_desktop_font_size = ( maximo_get_option( 'archive_post_title_font_size_desktop' ) ) ? maximo_get_option( 'archive_post_title_font_size_desktop' ) : $customizer_defaults['archive_post_title_font_size']['desktop'];

        $css .= '
            font-size: ' . esc_attr( maximo_px_to_rem( $archive_post_title_desktop_font_size ) ) . 'rem;
        ';

        $css .= '}';

        // Site layout and container width

        $site_layout = maximo_get_option( 'site_layout' );

        $site_container_width = maximo_get_option( 'container_width' );

        $sidebar_width = maximo_get_option( 'sidebar_width' );

        if ( $site_layout != 'maximo-fullwidth-stretched' ) {
        	if ( $site_layout === 'maximo-boxed' ) {
        		$css .= 'body.maximo-boxed #page {
        			max-width: ' . absint( $site_container_width ) . 'px;
        		}';
        	} else {
	        	if ( $site_container_width ) {
	        		$css .= '.maximo-container {
	        			max-width: ' . absint( $site_container_width ) . 'px;
	        		}';
	        	}
	        }
        }


        // Site Title color
        // $css .= '.site-title a {
        //     color: ' . esc_attr( maximo_get_option( 'site_title_color' ) ) . ';
        // }';

        $css .= 'body.maximo-dark-mode-disabled:not(.maximo-transparent-header-enabled) .site-title a {
            color: ' . esc_attr( maximo_get_option( 'site_title_color' ) ) . '
        }';

        $css .= 'body.maximo-dark-mode-enabled:not(.maximo-transparent-header-enabled) .site-title a {
            color: ' . esc_attr( maximo_get_option( 'dark_mode_site_title_color' ) ) . '
        }';

        $css .= 'body.maximo-dark-mode-enabled:not(.maximo-transparent-header-enabled) .site-description {
            color: ' . esc_attr( maximo_get_option( 'dark_mode_site_description_color' ) ) . '
        }';


        // Mobile navigation breakpoint
        $main_navigation_mobile_breakpoint = maximo_get_option( 'main_navigation_mobile_breakpoint' );

		$css .= '@media( max-width: ' . $main_navigation_mobile_breakpoint . 'px ) {';

    		$css .= '
        		.maximo-mobile-navigation-toggle-container {
        			display: block;
        		}
        		.site-navigation {
        			display: none;
        		}';
		$css .= '}';

        $css .= '.main-navigation-wrapper {
            text-align: ' . esc_attr( maximo_get_option( 'main_navigation_alignment' ) ) . ';
        }';


		if ( maximo_get_option( 'main_header_layout' ) == 'header_1' && maximo_get_option( 'main_header_enable_header_ad' ) == false ) {
			$css .= '.site-branding {
				text-align: ' . esc_attr( maximo_get_option( 'site_identity_alignment' ) ) . ';
			}';
		}

        // Header button CSS styles
        $main_header_elements = maximo_get_option( 'main_header_elements' );

		if ( $main_header_elements && in_array( 'button', $main_header_elements ) ) {
            $css .= '.maximo-header-element-btn {
                color: ' . esc_attr( maximo_get_option( 'main_header_button_text_color' ) ) . ';
                background-color: ' . esc_attr( maximo_get_option( 'main_header_button_background_color' ) ) . ';
                border-color: ' . esc_attr( maximo_get_option( 'main_header_button_border_color' ) ) . ';
                border-width: ' . esc_attr( maximo_get_option( 'main_header_button_border_width' ) ) . ';
            }';

            $css .= '.maximo-header-element-btn {';
                $main_header_button_padding_desktop_top = ( maximo_get_option( 'main_header_button_padding_desktop_top' ) ) ? maximo_get_option( 'main_header_button_padding_desktop_top' ) : $customizer_defaults['main_header_button_padding']['desktop_top'];

                $css .= '
                    padding-top: ' . absint( $main_header_button_padding_desktop_top ) . 'px;
                ';

                $main_header_button_padding_desktop_right = ( maximo_get_option( 'main_header_button_padding_desktop_right' ) ) ? maximo_get_option( 'main_header_button_padding_desktop_right' ) : $customizer_defaults['main_header_button_padding']['desktop_right'];

                $css .= '
                    padding-right: ' . absint( $main_header_button_padding_desktop_right ) . 'px;
                ';

                $main_header_button_padding_desktop_bottom = ( maximo_get_option( 'main_header_button_padding_desktop_bottom' ) ) ? maximo_get_option( 'main_header_button_padding_desktop_bottom' ) : $customizer_defaults['main_header_button_padding']['desktop_bottom'];

                $css .= '
                    padding-bottom: ' . absint( $main_header_button_padding_desktop_bottom ) . 'px;
                ';

                $main_header_button_padding_desktop_left = ( maximo_get_option( 'main_header_button_padding_desktop_left' ) ) ? maximo_get_option( 'main_header_button_padding_desktop_left' ) : $customizer_defaults['main_header_button_padding']['desktop_left'];

                $css .= '
                    padding-left: ' . absint( $main_header_button_padding_desktop_left ) . 'px;
                ';

            $css .= '}';

                // tablet 

                $main_header_button_padding_tablet_top = ( maximo_get_option( 'main_header_button_padding_tablet_top' ) ) ? maximo_get_option( 'main_header_button_padding_tablet_top' ) : $customizer_defaults['main_header_button_padding']['tablet_top'];

                $main_header_button_padding_tablet_right = ( maximo_get_option( 'main_header_button_padding_tablet_right' ) ) ? maximo_get_option( 'main_header_button_padding_tablet_right' ) : $customizer_defaults['main_header_button_padding']['tablet_right'];

                $main_header_button_padding_tablet_bottom = ( maximo_get_option( 'main_header_button_padding_tablet_bottom' ) ) ? maximo_get_option( 'main_header_button_padding_tablet_bottom' ) : $customizer_defaults['main_header_button_padding']['tablet_bottom'];

                $main_header_button_padding_tablet_left = ( maximo_get_option( 'main_header_button_padding_tablet_left' ) ) ? maximo_get_option( 'main_header_button_padding_tablet_left' ) : $customizer_defaults['main_header_button_padding']['tablet_left'];

                $css .= '@media(max-width:768px) {';

                $css .= '
					.maximo-header-element-btn {
						padding-top: ' . absint( $main_header_button_padding_tablet_top ) . 'px;
                        padding-right: ' . absint( $main_header_button_padding_tablet_right ) . 'px;
                        padding-bottom: ' . absint( $main_header_button_padding_tablet_bottom ) . 'px;
                        padding-left: ' . absint( $main_header_button_padding_tablet_left ) . 'px;
					}';

                 $css .= '}';

                 // mobile 

                $main_header_button_padding_mobile_top = ( maximo_get_option( 'main_header_button_padding_mobile_top' ) ) ? maximo_get_option( 'main_header_button_padding_mobile_top' ) : $customizer_defaults['main_header_button_padding']['mobile_top'];

                $main_header_button_padding_mobile_right = ( maximo_get_option( 'main_header_button_padding_mobile_right' ) ) ? maximo_get_option( 'main_header_button_padding_mobile_right' ) : $customizer_defaults['main_header_button_padding']['mobile_right'];

                 $main_header_button_padding_mobile_bottom = ( maximo_get_option( 'main_header_button_padding_mobile_bottom' ) ) ? maximo_get_option( 'main_header_button_padding_mobile_bottom' ) : $customizer_defaults['main_header_button_padding']['mobile_bottom'];

                 $main_header_button_padding_mobile_left = ( maximo_get_option( 'main_header_button_padding_mobile_left' ) ) ? maximo_get_option( 'main_header_button_padding_mobile_left' ) : $customizer_defaults['main_header_button_padding']['mobile_left'];

                 $css .= '@media(max-width:575px) {';

                 $css .= '
					.maximo-header-element-btn {
						padding-top: ' . absint( $main_header_button_padding_mobile_top ) . 'px;
                        padding-right: ' . absint( $main_header_button_padding_mobile_right ) . 'px;
                        padding-bottom: ' . absint( $main_header_button_padding_mobile_bottom ) . 'px;
                        padding-left: ' . absint( $main_header_button_padding_mobile_left ) . 'px;
					}';

                 $css .= '}';

            // hover 

            $css .= '.maximo-header-element-btn:hover {
                color: ' . esc_attr( maximo_get_option( 'main_header_button_hover_text_color' ) ) . ';
                background-color: ' . esc_attr( maximo_get_option( 'main_header_button_hover_background_color' ) ) . ';
                border-color: ' . esc_attr( maximo_get_option( 'main_header_button_hover_border_color' ) ) . ';
            }';
        }


        // Site banner styles

		if ( maximo_get_option( 'enable_banner_slider' ) ) {

			$css .= '.maximo-banner-background {';

                $css .= '
                    background-repeat: ' . esc_attr( maximo_get_option( 'banner_slider_image_background_repeat' ) ) . ';
                ';
                $css .= '
                    background-size: ' . esc_attr( maximo_get_option( 'banner_slider_image_background_size' ) ) . ';
                ';

                $position = maximo_get_option( 'banner_slider_image_background_position' );

                $position = str_replace( '-', ' ', $position );

                $css .= '
                    background-position: ' . esc_attr( $position ) . ';
                ';

			$css .= '}';


            // Banner slider height on desktop devices

            $banner_slider_height_desktop = ( maximo_get_option( 'banner_slider_height_desktop' ) ) ? maximo_get_option( 'banner_slider_height_desktop' ) : $customizer_defaults['banner_slider_height']['desktop'];

			$css .= '
            .maximo-banner-content-wrapper {
				height: ' . absint( $banner_slider_height_desktop ) . 'vh;
			}';


            // Banner margin on desktop devices

            $css .= '#maximo-banner {';

            $banner_margin_desktop_top = ( maximo_get_option( 'banner_slider_margin_desktop_top' ) ) ? maximo_get_option( 'banner_slider_margin_desktop_top' ) : $customizer_defaults['banner_slider_margin']['desktop_top'];

            $css .= '
                margin-top: ' . absint( $banner_margin_desktop_top ) . 'px;
            ';

            $banner_margin_desktop_right = ( maximo_get_option( 'banner_slider_margin_desktop_right' ) ) ? maximo_get_option( 'banner_slider_margin_desktop_right' ) : $customizer_defaults['banner_slider_margin']['desktop_right'];

            $css .= '
                margin-right: ' . absint( $banner_margin_desktop_right ) . 'px;
            ';

            $banner_margin_desktop_bottom = ( maximo_get_option( 'banner_slider_margin_desktop_bottom' ) ) ? maximo_get_option( 'banner_slider_margin_desktop_bottom' ) : $customizer_defaults['banner_slider_margin']['desktop_bottom'];

            $css .= '
                margin-bottom: ' . absint( $banner_margin_desktop_bottom ) . 'px;
            ';

            $banner_margin_desktop_left = ( maximo_get_option( 'banner_slider_margin_desktop_left' ) ) ? maximo_get_option( 'banner_slider_margin_desktop_left' ) : $customizer_defaults['banner_slider_margin']['desktop_left'];

            $css .= '
                margin-left: ' . absint( $banner_margin_desktop_left ) . 'px;
            ';

            $css .= '}';


            // Banner slider content width on desktop devices

            $banner_slider_content_wrap_width_desktop = ( maximo_get_option( 'banner_slider_content_wrap_width_desktop' ) ) ? maximo_get_option( 'banner_slider_content_wrap_width_desktop' ) : $customizer_defaults['banner_slider_content_wrap_width']['desktop'];

            $css .= '
            .maximo-banner-content-inner {
                max-width: ' . absint( $banner_slider_content_wrap_width_desktop ) . '%;
            }';


            // Banner content margin and padding on desktop devices

			$css .= '.maximo-banner-content {';

            $banner_content_margin_desktop_top = ( maximo_get_option( 'banner_slider_content_margin_desktop_top' ) ) ? maximo_get_option( 'banner_slider_content_margin_desktop_top' ) : $customizer_defaults['banner_slider_content_margin']['desktop_top'];

			$css .= '
				margin-top: ' . absint( $banner_content_margin_desktop_top ) . 'px;
			';

			$banner_content_margin_desktop_right = ( maximo_get_option( 'banner_slider_content_margin_desktop_right' ) ) ? maximo_get_option( 'banner_slider_content_margin_desktop_right' ) : $customizer_defaults['banner_slider_content_margin']['desktop_right'];

            $css .= '
                margin-right: ' . absint( $banner_content_margin_desktop_right ) . 'px;
            ';

			$banner_content_margin_desktop_bottom = ( maximo_get_option( 'banner_slider_content_margin_desktop_bottom' ) ) ? maximo_get_option( 'banner_slider_content_margin_desktop_bottom' ) : $customizer_defaults['banner_slider_content_margin']['desktop_bottom'];

            $css .= '
                margin-bottom: ' . absint( $banner_content_margin_desktop_bottom ) . 'px;
            ';

			$banner_content_margin_desktop_left = ( maximo_get_option( 'banner_slider_content_margin_desktop_left' ) ) ? maximo_get_option( 'banner_slider_content_margin_desktop_left' ) : $customizer_defaults['banner_slider_content_margin']['desktop_left'];

            $css .= '
                margin-left: ' . absint( $banner_content_margin_desktop_left ) . 'px;
            ';

			$banner_content_padding_desktop_right = ( maximo_get_option( 'banner_slider_content_padding_desktop_right' ) ) ? maximo_get_option( 'banner_slider_content_padding_desktop_right' ) : $customizer_defaults['banner_slider_content_padding']['desktop_right'];

            $css .= '
                padding-right: ' . absint( $banner_content_padding_desktop_right ) . 'px;
            ';

            $banner_content_padding_desktop_bottom = ( maximo_get_option( 'banner_slider_content_padding_desktop_bottom' ) ) ? maximo_get_option( 'banner_slider_content_padding_desktop_bottom' ) : $customizer_defaults['banner_slider_content_padding']['desktop_bottom'];

            $css .= '
                padding-bottom: ' . absint( $banner_content_padding_desktop_bottom ) . 'px;
            ';

            $banner_content_padding_desktop_left = ( maximo_get_option( 'banner_slider_content_padding_desktop_left' ) ) ? maximo_get_option( 'banner_slider_content_padding_desktop_left' ) : $customizer_defaults['banner_slider_content_padding']['desktop_left'];

            $css .= '
                padding-left: ' . absint( $banner_content_padding_desktop_left ) . 'px;
            ';

			$css .= '}';

            // Banner slider overlay CSS

			if ( maximo_get_option( 'banner_slider_enable_overlay' ) ) {

                $css .= '
                    .maximo-banner-overlay {
                        background-color: ' . esc_attr( maximo_get_option( 'banner_slider_overlay_color' ) ) . ';
                    }
                ';
			}

            $css .= '
                .maximo-banner-content .maximo-banner-content-post-title a,
                .maximo-banner-content .maximo-post-meta-entries-inner,
                .maximo-banner-content .maximo-post-meta-entries-inner a,
                .maximo-banner-content .maximo-banner-post-excerpt {
                    color: ' . esc_attr( maximo_get_option( 'banner_slider_text_color' ) ) . ';
                }

                .maximo-banner-btn.maximo-read-more .maximo-rm-icon {
                    border-color: ' . esc_attr( maximo_get_option( 'banner_slider_text_color' ) ) . ';
                }

                .maximo-banner-btn.maximo-read-more:hover .maximo-rm-icon {
                    border-color: var(--maximo-accent-color);
                }
            ';
		}

		if ( maximo_is_page_header_activated() ) {

			$page_header_background_type = maximo_get_option( 'page_header_background_type' );

			if ( $page_header_background_type == 'image' ) {

				$css .= '.maximo-page-header-background-img {';

    				if ( ( is_archive() || is_home() || is_search() || is_404() ) && has_header_image() ) {
    					$css .= '
    						background-image: url(' . esc_url( get_header_image() ) . ');
    					';
    				}

    				if ( is_singular() ) {
    					if ( have_posts() ) :
    						while ( have_posts() ) :
    							the_post();
    							if ( has_post_thumbnail() ) {
    								$css .= '
    									background-image: url( ' . esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ) . ' );
    								';
    							} else {
    								if ( has_header_image() ) {
    									$css .= '
    										background-image: url(' . esc_url( get_header_image() ) . ');
    									';
    								}
    							}
    						endwhile;
    						wp_reset_postdata();
    					endif;
    				}

                    $css .= '
                        background-repeat: ' . esc_attr( maximo_get_option( 'page_header_image_background_repeat' ) ) . ';
                    ';

                    $css .= '
                        background-size: ' . esc_attr( maximo_get_option( 'page_header_image_background_size' ) ) . ';
                    ';

                    $css .= '
                        background-attachment: ' . esc_attr( maximo_get_option( 'page_header_image_background_attachment' ) ) . ';
                    ';

                    $position = maximo_get_option( 'page_header_image_background_position' );
                    $position = str_replace( '-', ' ', $position );
                    $css .= '
                        background-position: ' . esc_attr( $position ) . ';
                    ';

				$css .= '}';

				if ( maximo_get_option( 'page_header_overlay_color' ) ) {
					$css .= '
						.maximo-page-header-overlay {
							background-color: ' . esc_attr( maximo_get_option( 'page_header_overlay_color' ) ) . ';
						}
					';
				}
			}

			if ( $page_header_background_type == 'color' ) {

				$css .= '.maximo-page-header-background-color {';

                    $css .= '
                        background-color: ' . esc_attr( maximo_get_option( 'page_header_bg_color' ) ) . ';
                    ';

				$css .= '}';
			}

			if ( $page_header_background_type == 'gradient' ) {
				$css .= '.maximo-page-header-background-gradient {';
				$page_header_gradient_type = maximo_get_option( 'page_header_gradient_type' );
				if ( $page_header_gradient_type == 'linear' ) {
					$css .= '
						background: linear-gradient(' . esc_attr( maximo_get_option( 'page_header_gradient_linear_angle' ) ) . 'deg, ' . esc_attr( maximo_get_option( 'page_header_gradient_bg_color_1' ) ) . ' ' . absint( maximo_get_option( 'page_header_gradient_location_1' ) ) . '%, ' . esc_attr( maximo_get_option( 'page_header_gradient_bg_color_2' ) ) . ' ' . absint( maximo_get_option( 'page_header_gradient_location_2' ) ) . '%);
						background: -webkit-linear-gradient(' . esc_attr( maximo_get_option( 'page_header_gradient_linear_angle' ) ) . 'deg, ' . esc_attr( maximo_get_option( 'page_header_gradient_bg_color_1' ) ) . ' ' . absint( maximo_get_option( 'page_header_gradient_location_1' ) ) . '%, ' . esc_attr( maximo_get_option( 'page_header_gradient_bg_color_2' ) ) . ' ' . absint( maximo_get_option( 'page_header_gradient_location_2' ) ) . '%);
						background: -o-linear-gradient(' . esc_attr( maximo_get_option( 'page_header_gradient_linear_angle' ) ) . 'deg, ' . esc_attr( maximo_get_option( 'page_header_gradient_bg_color_1' ) ) . ' ' . absint( maximo_get_option( 'page_header_gradient_location_1' ) ) . '%, ' . esc_attr( maximo_get_option( 'page_header_gradient_bg_color_2' ) ) . ' ' . absint( maximo_get_option( 'page_header_gradient_location_2' ) ) . '%);
					';
				} else {
					$css .= '
						background: radial-gradient(circle at ' . esc_attr( str_replace( '_', ' ', maximo_get_option( 'page_header_gradient_radial_position' ) ) ) . ', ' . esc_attr( maximo_get_option( 'page_header_gradient_bg_color_1' ) ) . ' ' . absint( maximo_get_option( 'page_header_gradient_location_1' ) ) . '%, ' . esc_attr( maximo_get_option( 'page_header_gradient_bg_color_2' ) ) . ' ' . absint( maximo_get_option( 'page_header_gradient_location_2' ) ) . '%);
						background: -webkit-radial-gradient(circle at ' . esc_attr( str_replace( '_', ' ', maximo_get_option( 'page_header_gradient_radial_position' ) ) ) . ', ' . esc_attr( maximo_get_option( 'page_header_gradient_bg_color_1' ) ) . ' ' . absint( maximo_get_option( 'page_header_gradient_location_1' ) ) . '%, ' . esc_attr( maximo_get_option( 'page_header_gradient_bg_color_2' ) ) . ' ' . absint( maximo_get_option( 'page_header_gradient_location_2' ) ) . '%);
						background: -o-radial-gradient(circle at ' . esc_attr( str_replace( '_', ' ', maximo_get_option( 'page_header_gradient_radial_position' ) ) ) . ', ' . esc_attr( maximo_get_option( 'page_header_gradient_bg_color_1' ) ) . ' ' . absint( maximo_get_option( 'page_header_gradient_location_1' ) ) . '%, ' . esc_attr( maximo_get_option( 'page_header_gradient_bg_color_2' ) ) . ' ' . absint( maximo_get_option( 'page_header_gradient_location_2' ) ) . '%);
					';
				}
				$css .= '}';
			}

            // Page header height in desktop devices

			$page_header_height_desktop = ( maximo_get_option( 'page_header_height_desktop' ) ) ? maximo_get_option( 'page_header_height_desktop' ) : $customizer_defaults['page_header_height']['desktop'];

			$css .= '
			#maximo-page-header .maximo-page-header-content-wrapper {					
				height: ' . absint( $page_header_height_desktop ) . 'vh;
			}';

            // Page header content margins on desktop devices

			$css .= '.maximo-page-header-content {';            

            $page_header_content_margin_desktop_top = ( maximo_get_option( 'page_header_content_margin_desktop_top' ) ) ? maximo_get_option( 'page_header_content_margin_desktop_top' ) : $customizer_defaults['page_header_content_margin']['desktop_top'];

			$css .= '
				margin-top: ' . absint( $page_header_content_margin_desktop_top ) . 'px;
			';

            $page_header_content_margin_desktop_right = ( maximo_get_option( 'page_header_content_margin_desktop_right' ) ) ? maximo_get_option( 'page_header_content_margin_desktop_right' ) : $customizer_defaults['page_header_content_margin']['desktop_right'];

			$css .= '
				margin-right: ' . absint( $page_header_content_margin_desktop_right ) . 'px;
			';

            $page_header_content_margin_desktop_bottom = ( maximo_get_option( 'page_header_content_margin_desktop_bottom' ) ) ? maximo_get_option( 'page_header_content_margin_desktop_bottom' ) : $customizer_defaults['page_header_content_margin']['desktop_bottom'];

            $css .= '
                margin-bottom: ' . absint( $page_header_content_margin_desktop_bottom ) . 'px;
            ';

            $page_header_content_margin_desktop_left = ( maximo_get_option( 'page_header_content_margin_desktop_left' ) ) ? maximo_get_option( 'page_header_content_margin_desktop_left' ) : $customizer_defaults['page_header_content_margin']['desktop_left'];

            $css .= '
                margin-left: ' . absint( $page_header_content_margin_desktop_left ) . 'px;
            ';


            // Page header content paddings in desktop devices

            $page_header_content_padding_desktop_top = ( maximo_get_option( 'page_header_content_padding_desktop_top' ) ) ? maximo_get_option( 'page_header_content_padding_desktop_top' ) : $customizer_defaults['page_header_content_padding']['desktop_top'];

            $css .= '
                padding-top: ' . absint( $page_header_content_padding_desktop_top ) . 'px;
            ';

            $page_header_content_padding_desktop_right = ( maximo_get_option( 'page_header_content_padding_desktop_right' ) ) ? maximo_get_option( 'page_header_content_padding_desktop_right' ) : $customizer_defaults['page_header_content_padding']['desktop_right'];

            $css .= '
                padding-right: ' . absint( $page_header_content_padding_desktop_right ) . 'px;
            ';

            $page_header_content_padding_desktop_bottom = ( maximo_get_option( 'page_header_content_padding_desktop_bottom' ) ) ? maximo_get_option( 'page_header_content_padding_desktop_bottom' ) : $customizer_defaults['page_header_content_padding']['desktop_bottom'];

            $css .= '
                padding-bottom: ' . absint( $page_header_content_padding_desktop_bottom ) . 'px;
            ';

            $page_header_content_padding_desktop_left = ( maximo_get_option( 'page_header_content_padding_desktop_left' ) ) ? maximo_get_option( 'page_header_content_padding_desktop_left' ) : $customizer_defaults['page_header_content_padding']['desktop_left'];

            $css .= '
                padding-left: ' . absint( $page_header_content_padding_desktop_left ) . 'px;
            ';

			$css .= '}';


            // Page header text color

            $css .= '
                .maximo-page-header-content,
                .maximo-page-header-content a,
                .maximo-page-header-content .maximo-post-meta-entries-inner .maximo-post-meta-entry, 
                .maximo-page-header-content .maximo-post-meta-entries-inner .maximo-post-meta-entry a,
                body.maximo-theme-light.woocommerce .maximo-page-header-content .woocommerce-breadcrumb,
                body.maximo-theme-light.woocommerce .maximo-page-header-content .woocommerce-breadcrumb a,
                body.maximo-theme-dark.woocommerce .maximo-page-header-content .woocommerce-breadcrumb,
                body.maximo-theme-dark.woocommerce .maximo-page-header-content .woocommerce-breadcrumb a {
                    color: ' . esc_attr( maximo_get_option( 'page_header_text_color' ) ) . ';
                }
            ';

            $css .= '
                .maximo-page-header-content .maximo-post-meta-entries-inner a:hover,
                .maximo-page-header-content .trail-items a:hover,
                body.maximo-theme-light.woocommerce .maximo-page-header-content .woocommerce-breadcrumb a:hover,
                body.maximo-theme-dark.woocommerce .maximo-page-header-content .woocommerce-breadcrumb a:hover {
                    color: ' . esc_attr( maximo_get_option( 'page_header_link_hover_color' ) ) . ';
                }
            ';
		}


        // Sidebar width CSS

		if ( maximo_is_sidebar_active() ) {

			if ( $sidebar_width ) {

				$css .= '@media(min-width:992px) {';

				$css .= '
					#maximo-primary {
						max-width: ' . ( 100 - absint( $sidebar_width ) ) . '%;
					}';
				$css .= '
					#secondary {
						max-width: ' . absint( $sidebar_width ) . '%;
					}';

				$css .= '}';
			}	
		}


        if ( is_single() || is_page() ) {

            if ( maximo_get_option( 'single_content_width' ) === 'maximo-content-width' ) {

                if ( $site_container_width >= 1200 ) {
                    $ten_per_of_site_container_width = 1200 * 0.1;
                    $css .= '
                    @media ( min-width: 1200px ) {
                        body.maximo-has-no-sidebar.maximo-boxed-contain.maximo-content-width main#maximo-main {
                            padding-left: ' . absint( $ten_per_of_site_container_width ) . 'px;
                            padding-right: ' . absint( $ten_per_of_site_container_width ) . 'px;
                        }

                        body.maximo-has-no-sidebar.maximo-boxed-contain.maximo-content-width main#maximo-main > article > .maximo-entry-content .alignfull {
                            margin-left: -' . absint( $ten_per_of_site_container_width ) . 'px;
                            margin-right: -' . absint( $ten_per_of_site_container_width ) . 'px;
                        }

                        body.maximo-has-no-sidebar.maximo-boxed-contain.maximo-content-width main#maximo-main > article > .maximo-entry-content .alignwide {
                            margin-left: -' . absint( $ten_per_of_site_container_width / 2 ) . 'px;
                            margin-right: -' . absint( $ten_per_of_site_container_width / 2 ) . 'px;
                            width: calc(100% + ' . absint( $ten_per_of_site_container_width ) . 'px);
                        }
                    }';
                }

                if ( maximo_is_sidebar_active() ) {

                    $css .= '
                    body.maximo-has-sidebar.maximo-boxed-contain.maximo-content-width main#maximo-main > article > .maximo-entry-content .alignfull {
                        margin-left: -50px;
                        margin-right: -50px;
                    }

                    body.maximo-has-sidebar.maximo-boxed-contain.maximo-content-width main#maximo-main > article > .maximo-entry-content .alignwide {
                        margin-left: -25px;
                        margin-right: -25px;
                        width: calc(100% + 50px);
                    }
                    ';

                    if ( $site_container_width >= 1200 ) {
                        $css .= '

                        ';
                    }  
                } else {
                    
                }
            }

            if ( maximo_get_option( 'single_content_width' ) === 'maximo-narrow-width' && maximo_get_option( 'single_narrow_width' ) && ! maximo_is_woocommerce_page() ) {

                $single_content_width = maximo_get_option( 'single_narrow_width' );

                $css .= '
                    body.maximo-narrow-width main#maximo-main > article > .maximo-post-structure-categories,
                    body.maximo-narrow-width main#maximo-main > article > .maximo-page-title,
                    body.maximo-narrow-width main#maximo-main > article > .maximo-post-meta-entries,
                    body.maximo-narrow-width main#maximo-main > article > .maximo-entry-thumbnail-container,
                    body.maximo-narrow-width main#maximo-main > article > .maximo-entry-footer,
                    body.maximo-narrow-width main#maximo-main > article > .maximo-entry-content > :not([class*="align"]):not([class*="gallery"]):not(.wp-block-image):not(.quote-inner):not(.quote-post-bg) {
                        max-width: ' . absint( $single_content_width ) . 'px;
                        margin-left: auto;
                        margin-right: auto;
                    }
                ';

                $actual_single_container_width = $site_container_width - $sidebar_width;

                if ( maximo_is_sidebar_active() ) {
                    if ( $single_content_width < $actual_single_container_width ) {
                        if ( $site_layout === 'maximo-fullwidth-contained' || $site_layout === 'maximo-fullwidth-stretched' ) {

                            $thirty_per_of_single_content_width_extra = $single_content_width + ( $single_content_width * 0.1 );

                            $css .= '
                                body.maximo-has-sidebar.maximo-fullwidth-contained main#maximo-main > article > .maximo-entry-content .alignwide,
                                body.maximo-has-sidebar.maximo-fullwidth-stretched main#maximo-main > article > .maximo-entry-content .alignwide {
                                    max-width: ' . absint( $thirty_per_of_single_content_width_extra ) . 'px;
                                    margin-left: auto;
                                    margin-right: auto;
                                }
                            ';
                        }
                    }
                }                
            }
        }        


        if ( maximo_get_option( 'archive_content_width' ) === 'maximo-narrow-width' && maximo_get_option( 'archive_narrow_width' ) && ! maximo_is_woocommerce_page() && ( is_archive() || is_home() || is_search() ) ) {
            $css .= '
                body.maximo-narrow-width #maximo-primary,
                body.maximo-narrow-width #maximo-breadcrumbs .maximo-container,
                body.maximo-page-header-enabled.maximo-narrow-width #maximo-page-header .maximo-container {
                    max-width: ' . absint( maximo_get_option( 'archive_narrow_width' ) ) . 'px;
                }';
        }


        // Logo max width on desktop

        $site_identity_logo_max_width_desktop = ( maximo_get_option( 'site_identity_logo_max_width_desktop' ) ) ? maximo_get_option( 'site_identity_logo_max_width_desktop' ) : $customizer_defaults['site_identity_logo_max_width']['desktop'];

        $css .= '
            .custom-logo,
            .maximo-alternate-logo {
                max-width: ' . absint( $site_identity_logo_max_width_desktop ) . 'px;
                height: auto;
            }
        ';


		if ( maximo_is_transparent_header_activated() ) {

            $css .= '
                body.maximo-transparent-header-enabled .site-header #maximo-top-header, 
                body.maximo-transparent-header-enabled .site-header #maximo-top-header a, 
                body.maximo-transparent-header-enabled .site-header #maximo-main-header .maximo-main-header-container:not(.maximo-sticky-enabled), 
                body.maximo-transparent-header-enabled .site-header #maximo-main-header .maximo-main-header-container:not(.maximo-sticky-enabled) a {
                    color: ' . esc_attr( maximo_get_option( 'transparent_header_text_color' ) ) . ';
                }

                body.maximo-transparent-header-enabled .maximo-main-header-container:not(.maximo-sticky-enabled) .maximo-mobile-nav-toggle-btn .maximo-menu-icon-bar {
                    background-color: ' . esc_attr( maximo_get_option( 'transparent_header_text_color' ) ) . ';
                }
            ';

            $css .= ' 
                body.maximo-transparent-header-enabled .site-header .maximo-main-header-container:not(.maximo-sticky-enabled) #maximo-top-header a:hover,
                body.maximo-transparent-header-enabled .site-header #maximo-main-header .maximo-main-header-container:not(.maximo-sticky-enabled) a:hover {
                    color: ' . esc_attr( maximo_get_option( 'transparent_header_link_hover_color' ) ) . ';
                }

                body.maximo-transparent-header-enabled .maximo-main-header-container:not(.maximo-sticky-enabled) .maximo-mobile-nav-toggle-btn:hover .maximo-menu-icon-bar {
                    background-color: ' . esc_attr( maximo_get_option( 'transparent_header_link_hover_color' ) ) . ';
                }
            ';

            $css .= '
                .maximo-transparent-header-enabled .maximo-sticky-main-navigation:not(.maximo-sticky-enabled) .site-title a {
                    color: ' . esc_attr( maximo_get_option( 'transparent_header_site_title_color' ) ) . ';
                }

                .maximo-dark-mode-enabled.maximo-transparent-header-enabled .maximo-sticky-main-navigation.maximo-sticky-enabled .site-title a {
                    color: ' . esc_attr( maximo_get_option( 'dark_mode_site_title_color' ) ) . ';
                }

                .maximo-dark-mode-disabled.maximo-transparent-header-enabled .maximo-sticky-main-navigation.maximo-sticky-enabled .site-title a {
                    color: ' . esc_attr( maximo_get_option( 'site_title_color' ) ) . ';
                }
            ';

            $css .= '
                .maximo-transparent-header-enabled .maximo-sticky-main-navigation:not(.maximo-sticky-enabled.site-header) .site-description {
                    color: ' . esc_attr( maximo_get_option( 'transparent_header_tagline_color' ) ) . ';
                }

                .maximo-dark-mode-enabled.maximo-transparent-header-enabled .maximo-sticky-main-navigation.maximo-sticky-enabled .site-description {
                    color: ' . esc_attr( maximo_get_option( 'dark_mode_site_description_color' ) ) . ';
                }

                .maximo-dark-mode-disabled.maximo-transparent-header-enabled .maximo-sticky-main-navigation.maximo-sticky-enabled .site-description {
                    color: #' . esc_attr( get_header_textcolor() ) . ';
                }
            ';

            $css .= '
                body.maximo-transparent-header-enabled #maximo-top-header,
                body.maximo-transparent-header-enabled .maximo-main-header-2 {
                    border-color: ' . esc_attr( maximo_get_option( 'transparent_header_border_color' ) ) . ';
                }

                .maximo-main-header-navigation-elements-container {
                    border-top-color: ' . esc_attr( maximo_get_option( 'transparent_header_border_color' ) ) . ';
                    border-bottom-color: ' . esc_attr( maximo_get_option( 'transparent_header_border_color' ) ) . ';
                }
            ';
		}


		// Start styles for tablet devices

		$css .= '@media screen and (max-width: 768px) {';

            // Body font size and line height for tablet devices

			$css .= 'body {';

            $body_tablet_font_size = ( maximo_get_option( 'body_font_size_tablet' ) ) ? maximo_get_option( 'body_font_size_tablet' ) : $customizer_defaults['body_font_size']['tablet'];

            $css .= '
                font-size: ' . esc_attr( maximo_px_to_rem( $body_tablet_font_size ) ) . 'rem;
            ';

            $body_tablet_line_height = ( maximo_get_option( 'body_line_height_tablet' ) ) ? maximo_get_option( 'body_line_height_tablet' ) : $customizer_defaults['body_line_height']['tablet'];

            $css .= '
                line-height: ' . esc_attr( $body_tablet_line_height  ) . ';
            ';

	        $css .= '}';


            // H1 font size and line height for tablet devices

			$css .= 'h1 {';

	        $h1_tablet_font_size = ( maximo_get_option( 'h1_font_size_tablet' ) ) ? maximo_get_option( 'h1_font_size_tablet' ) : $customizer_defaults['h1_font_size']['tablet'];

            $css .= '
                font-size: ' . esc_attr( maximo_px_to_rem( $h1_tablet_font_size ) ) . 'rem;
            ';

            $h1_tablet_line_height = ( maximo_get_option( 'h1_line_height_tablet' ) ) ? maximo_get_option( 'h1_line_height_tablet' ) : $customizer_defaults['h1_line_height']['tablet'];

            $css .= '
                line-height: ' . esc_attr( $h1_tablet_line_height  ) . ';
            ';

	        $css .= '}';

            // H2 font size and line height for tablet devices

	        $css .= 'h2 {';

	        $h2_tablet_font_size = ( maximo_get_option( 'h2_font_size_tablet' ) ) ? maximo_get_option( 'h2_font_size_tablet' ) : $customizer_defaults['h2_font_size']['tablet'];

            $css .= '
                font-size: ' . esc_attr( maximo_px_to_rem( $h2_tablet_font_size ) ) . 'rem;
            ';

            $h2_tablet_line_height = ( maximo_get_option( 'h2_line_height_tablet' ) ) ? maximo_get_option( 'h2_line_height_tablet' ) : $customizer_defaults['h2_line_height']['tablet'];

            $css .= '
                line-height: ' . esc_attr( $h2_tablet_line_height  ) . ';
            ';

	        $css .= '}';

            // H3 font size and line height for tablet devices

	        $css .= 'h3 {';

	        $h3_tablet_font_size = ( maximo_get_option( 'h3_font_size_tablet' ) ) ? maximo_get_option( 'h3_font_size_tablet' ) : $customizer_defaults['h3_font_size']['tablet'];

            $css .= '
                font-size: ' . esc_attr( maximo_px_to_rem( $h3_tablet_font_size ) ) . 'rem;
            ';

            $h3_tablet_line_height = ( maximo_get_option( 'h3_line_height_tablet' ) ) ? maximo_get_option( 'h3_line_height_tablet' ) : $customizer_defaults['h3_line_height']['tablet'];

            $css .= '
                line-height: ' . esc_attr( $h3_tablet_line_height  ) . ';
            ';

	        $css .= '}';

            // H4 font size and line height for tablet devices

	        $css .= 'h4 {';

	        $h4_tablet_font_size = ( maximo_get_option( 'h4_font_size_tablet' ) ) ? maximo_get_option( 'h4_font_size_tablet' ) : $customizer_defaults['h4_font_size']['tablet'];

            $css .= '
                font-size: ' . esc_attr( maximo_px_to_rem( $h4_tablet_font_size ) ) . 'rem;
            ';

            $h4_tablet_line_height = ( maximo_get_option( 'h4_line_height_tablet' ) ) ? maximo_get_option( 'h4_line_height_tablet' ) : $customizer_defaults['h4_line_height']['tablet'];

            $css .= '
                line-height: ' . esc_attr( $h4_tablet_line_height  ) . ';
            ';

	        $css .= '}';

            // H5 font size and line height for tablet devices

	        $css .= 'h5 {';

	        $h5_tablet_font_size = ( maximo_get_option( 'h5_font_size_tablet' ) ) ? maximo_get_option( 'h5_font_size_tablet' ) : $customizer_defaults['h5_font_size']['tablet'];

            $css .= '
                font-size: ' . esc_attr( maximo_px_to_rem( $h5_tablet_font_size ) ) . 'rem;
            ';

            $h5_tablet_line_height = ( maximo_get_option( 'h5_line_height_tablet' ) ) ? maximo_get_option( 'h5_line_height_tablet' ) : $customizer_defaults['h5_line_height']['tablet'];

            $css .= '
                line-height: ' . esc_attr( $h5_tablet_line_height  ) . ';
            ';

	        $css .= '}';

            // H6 font size and line height for tablet devices

	        $css .= 'h6 {';

	        $h6_tablet_font_size = ( maximo_get_option( 'h6_font_size_tablet' ) ) ? maximo_get_option( 'h6_font_size_tablet' ) : $customizer_defaults['h6_font_size']['tablet'];

            $css .= '
                font-size: ' . esc_attr( maximo_px_to_rem( $h6_tablet_font_size ) ) . 'rem;
            ';

            $h6_tablet_line_height = ( maximo_get_option( 'h6_line_height_tablet' ) ) ? maximo_get_option( 'h6_line_height_tablet' ) : $customizer_defaults['h6_line_height']['tablet'];

            $css .= '
                line-height: ' . esc_attr( $h6_tablet_line_height  ) . ';
            ';

	        $css .= '}';


            // Site title font size and line height for tablet devices

	        $css .= '.site-title {';

	        $site_identity_tablet_font_size = ( maximo_get_option( 'site_identity_font_size_tablet' ) ) ? maximo_get_option( 'site_identity_font_size_tablet' ) : $customizer_defaults['site_identity_font_size']['tablet'];

            $css .= '
                font-size: ' . esc_attr( maximo_px_to_rem( $site_identity_tablet_font_size ) ) . 'rem;
            ';

            $site_identity_tablet_line_height = ( maximo_get_option( 'site_identity_line_height_tablet' ) ) ? maximo_get_option( 'site_identity_line_height_tablet' ) : $customizer_defaults['site_identity_line_height']['tablet'];

            $css .= '
                line-height: ' . esc_attr( $site_identity_tablet_line_height  ) . ';
            ';

	        $css .= '}';


            // Archive post title font size for tablet devices

            $css .= '.maximo-post-element-title .maximo-entry-title {';

            $archive_post_title_tablet_font_size = ( maximo_get_option( 'archive_post_title_font_size_tablet' ) ) ? maximo_get_option( 'archive_post_title_font_size_tablet' ) : $customizer_defaults['archive_post_title_font_size']['tablet'];

            $css .= '
                font-size: ' . esc_attr( maximo_px_to_rem( $archive_post_title_tablet_font_size ) ) . 'rem;
            ';

            $css .= '}';

	        // Start page header styles for tablet

	        if ( maximo_is_page_header_activated() ) {

                // Page header height for maximo t devices

		        $page_header_height_tablet = ( maximo_get_option( 'page_header_height_tablet' ) ) ? maximo_get_option( 'page_header_height_tablet' ) : $customizer_defaults['page_header_height']['tablet'];

                $css .= '
                #maximo-page-header .maximo-page-header-content-wrapper {                    
                    height: ' . absint( $page_header_height_tablet ) . 'vh;
                }';

                // Page header content margins on tablet devices

                $css .= '.maximo-page-header-content {';            

                $page_header_content_margin_tablet_top = ( maximo_get_option( 'page_header_content_margin_tablet_top' ) ) ? maximo_get_option( 'page_header_content_margin_tablet_top' ) : $customizer_defaults['page_header_content_margin']['tablet_top'];

                $css .= '
                    margin-top: ' . absint( $page_header_content_margin_tablet_top ) . 'px;
                ';

                $page_header_content_margin_tablet_right = ( maximo_get_option( 'page_header_content_margin_tablet_right' ) ) ? maximo_get_option( 'page_header_content_margin_tablet_right' ) : $customizer_defaults['page_header_content_margin']['tablet_right'];

                $css .= '
                    margin-right: ' . absint( $page_header_content_margin_tablet_right ) . 'px;
                ';

                $page_header_content_margin_tablet_bottom = ( maximo_get_option( 'page_header_content_margin_tablet_bottom' ) ) ? maximo_get_option( 'page_header_content_margin_tablet_bottom' ) : $customizer_defaults['page_header_content_margin']['tablet_bottom'];

                $css .= '
                    margin-bottom: ' . absint( $page_header_content_margin_tablet_bottom ) . 'px;
                ';

                $page_header_content_margin_tablet_left = ( maximo_get_option( 'page_header_content_margin_tablet_left' ) ) ? maximo_get_option( 'page_header_content_margin_tablet_left' ) : $customizer_defaults['page_header_content_margin']['tablet_left'];

                $css .= '
                    margin-left: ' . absint( $page_header_content_margin_tablet_left ) . 'px;
                ';


                // Page header content paddings in tablet devices

                $page_header_content_padding_tablet_top = ( maximo_get_option( 'page_header_content_padding_tablet_top' ) ) ? maximo_get_option( 'page_header_content_padding_tablet_top' ) : $customizer_defaults['page_header_content_padding']['tablet_top'];

                $css .= '
                    padding-top: ' . absint( $page_header_content_padding_tablet_top ) . 'px;
                ';

                $page_header_content_padding_tablet_right = ( maximo_get_option( 'page_header_content_padding_tablet_right' ) ) ? maximo_get_option( 'page_header_content_padding_tablet_right' ) : $customizer_defaults['page_header_content_padding']['tablet_right'];

                $css .= '
                    padding-right: ' . absint( $page_header_content_padding_tablet_right ) . 'px;
                ';

                $page_header_content_padding_tablet_bottom = ( maximo_get_option( 'page_header_content_padding_tablet_bottom' ) ) ? maximo_get_option( 'page_header_content_padding_tablet_bottom' ) : $customizer_defaults['page_header_content_padding']['tablet_bottom'];

                $css .= '
                    padding-bottom: ' . absint( $page_header_content_padding_tablet_bottom ) . 'px;
                ';

                $page_header_content_padding_tablet_left = ( maximo_get_option( 'page_header_content_padding_tablet_left' ) ) ? maximo_get_option( 'page_header_content_padding_tablet_left' ) : $customizer_defaults['page_header_content_padding']['tablet_left'];

                $css .= '
                    padding-left: ' . absint( $page_header_content_padding_tablet_left ) . 'px;
                ';

                $css .= '}';
			}

			// End page header styles for tablet


			// Start banner/slider styles for tablet

			if ( maximo_get_option( 'enable_banner_slider' ) ) {

				// Banner slider height on tablet devices

                $banner_slider_height_tablet = ( maximo_get_option( 'banner_slider_height_tablet' ) ) ? maximo_get_option( 'banner_slider_height_tablet' ) : $customizer_defaults['banner_slider_height']['tablet'];

                $css .= '
                .maximo-banner-content-wrapper {
                    height: ' . absint( $banner_slider_height_tablet ) . 'vh;
                }';


                // Banner margin on tablet devices

                $css .= '#maximo-banner {';

                $banner_margin_tablet_top = ( maximo_get_option( 'banner_slider_margin_tablet_top' ) ) ? maximo_get_option( 'banner_slider_margin_tablet_top' ) : $customizer_defaults['banner_slider_margin']['tablet_top'];

                $css .= '
                    margin-top: ' . absint( $banner_margin_tablet_top ) . 'px;
                ';

                $banner_margin_tablet_right = ( maximo_get_option( 'banner_slider_margin_tablet_right' ) ) ? maximo_get_option( 'banner_slider_margin_tablet_right' ) : $customizer_defaults['banner_slider_margin']['tablet_right'];

                $css .= '
                    margin-right: ' . absint( $banner_margin_tablet_right ) . 'px;
                ';

                $banner_margin_tablet_bottom = ( maximo_get_option( 'banner_slider_margin_tablet_bottom' ) ) ? maximo_get_option( 'banner_slider_margin_tablet_bottom' ) : $customizer_defaults['banner_slider_margin']['tablet_bottom'];

                $css .= '
                    margin-bottom: ' . absint( $banner_margin_tablet_bottom ) . 'px;
                ';

                $banner_margin_tablet_left = ( maximo_get_option( 'banner_slider_margin_tablet_left' ) ) ? maximo_get_option( 'banner_slider_margin_tablet_left' ) : $customizer_defaults['banner_slider_margin']['tablet_left'];

                $css .= '
                    margin-left: ' . absint( $banner_margin_tablet_left ) . 'px;
                ';

                $css .= '}';


                // Banner slider content width on tablet devices

                $banner_slider_content_wrap_width_tablet = ( maximo_get_option( 'banner_slider_content_wrap_width_tablet' ) ) ? maximo_get_option( 'banner_slider_content_wrap_width_tablet' ) : $customizer_defaults['banner_slider_content_wrap_width']['tablet'];

                $css .= '
                .maximo-banner-content-inner {
                    max-width: ' . absint( $banner_slider_content_wrap_width_tablet ) . '%;
                }';


                // Banner content margin and padding on tablet devices

                $css .= '.maximo-banner-content {';

                $banner_content_margin_tablet_top = ( maximo_get_option( 'banner_slider_content_margin_tablet_top' ) ) ? maximo_get_option( 'banner_slider_content_margin_tablet_top' ) : $customizer_defaults['banner_slider_content_margin']['tablet_top'];

                $css .= '
                    margin-top: ' . absint( $banner_content_margin_tablet_top ) . 'px;
                ';

                $banner_content_margin_tablet_right = ( maximo_get_option( 'banner_slider_content_margin_tablet_right' ) ) ? maximo_get_option( 'banner_slider_content_margin_tablet_right' ) : $customizer_defaults['banner_slider_content_margin']['tablet_right'];

                $css .= '
                    margin-right: ' . absint( $banner_content_margin_tablet_right ) . 'px;
                ';

                $banner_content_margin_tablet_bottom = ( maximo_get_option( 'banner_slider_content_margin_tablet_bottom' ) ) ? maximo_get_option( 'banner_slider_content_margin_tablet_bottom' ) : $customizer_defaults['banner_slider_content_margin']['tablet_bottom'];

                $css .= '
                    margin-bottom: ' . absint( $banner_content_margin_tablet_bottom ) . 'px;
                ';

                $banner_content_margin_tablet_left = ( maximo_get_option( 'banner_slider_content_margin_tablet_left' ) ) ? maximo_get_option( 'banner_slider_content_margin_tablet_left' ) : $customizer_defaults['banner_slider_content_margin']['tablet_left'];

                $css .= '
                    margin-left: ' . absint( $banner_content_margin_tablet_left ) . 'px;
                ';

                $banner_content_padding_tablet_right = ( maximo_get_option( 'banner_slider_content_padding_tablet_right' ) ) ? maximo_get_option( 'banner_slider_content_padding_tablet_right' ) : $customizer_defaults['banner_slider_content_padding']['tablet_right'];

                $css .= '
                    padding-right: ' . absint( $banner_content_padding_tablet_right ) . 'px;
                ';

                $banner_content_padding_tablet_bottom = ( maximo_get_option( 'banner_slider_content_padding_tablet_bottom' ) ) ? maximo_get_option( 'banner_slider_content_padding_tablet_bottom' ) : $customizer_defaults['banner_slider_content_padding']['tablet_bottom'];

                $css .= '
                    padding-bottom: ' . absint( $banner_content_padding_tablet_bottom ) . 'px;
                ';

                $banner_content_padding_tablet_left = ( maximo_get_option( 'banner_slider_content_padding_tablet_left' ) ) ? maximo_get_option( 'banner_slider_content_padding_tablet_left' ) : $customizer_defaults['banner_slider_content_padding']['tablet_left'];

                $css .= '
                    padding-left: ' . absint( $banner_content_padding_tablet_left ) . 'px;
                ';

                $css .= '}';
			}

			// End banner/slider styles for tablet


            // Logo max width on tablet

            $site_identity_logo_max_width_tablet = ( maximo_get_option( 'site_identity_logo_max_width_tablet' ) ) ? maximo_get_option( 'site_identity_logo_max_width_tablet' ) : $customizer_defaults['site_identity_logo_max_width']['tablet'];

            $css .= '
                .custom-logo,
                .maximo-alternate-logo {
                    max-width: ' . absint( $site_identity_logo_max_width_tablet ) . 'px;
                }
            ';

		$css .= '}';

		// End styles for tablet devices


		// Start styles for mobile devices

		$css .= '@media screen and (max-width: 576px) {';

			// Body font size and line height for mobile devices

            $css .= 'body {';

            $body_mobile_font_size = ( maximo_get_option( 'body_font_size_mobile' ) ) ? maximo_get_option( 'body_font_size_mobile' ) : $customizer_defaults['body_font_size']['mobile'];

            $css .= '
                font-size: ' . esc_attr( maximo_px_to_rem( $body_mobile_font_size ) ) . 'rem;
            ';

            $body_mobile_line_height = ( maximo_get_option( 'body_line_height_mobile' ) ) ? maximo_get_option( 'body_line_height_mobile' ) : $customizer_defaults['body_line_height']['mobile'];

            $css .= '
                line-height: ' . esc_attr( $body_mobile_line_height  ) . ';
            ';

            $css .= '}';


            // H1 font size and line height for mobile devices

            $css .= 'h1 {';

            $h1_mobile_font_size = ( maximo_get_option( 'h1_font_size_mobile' ) ) ? maximo_get_option( 'h1_font_size_mobile' ) : $customizer_defaults['h1_font_size']['mobile'];

            $css .= '
                font-size: ' . esc_attr( maximo_px_to_rem( $h1_mobile_font_size ) ) . 'rem;
            ';

            $h1_mobile_line_height = ( maximo_get_option( 'h1_line_height_mobile' ) ) ? maximo_get_option( 'h1_line_height_mobile' ) : $customizer_defaults['h1_line_height']['mobile'];

            $css .= '
                line-height: ' . esc_attr( $h1_mobile_line_height  ) . ';
            ';

            $css .= '}';

            // H2 font size and line height for mobile devices

            $css .= 'h2 {';

            $h2_mobile_font_size = ( maximo_get_option( 'h2_font_size_mobile' ) ) ? maximo_get_option( 'h2_font_size_mobile' ) : $customizer_defaults['h2_font_size']['mobile'];

            $css .= '
                font-size: ' . esc_attr( maximo_px_to_rem( $h2_mobile_font_size ) ) . 'rem;
            ';

            $h2_mobile_line_height = ( maximo_get_option( 'h2_line_height_mobile' ) ) ? maximo_get_option( 'h2_line_height_mobile' ) : $customizer_defaults['h2_line_height']['mobile'];

            $css .= '
                line-height: ' . esc_attr( $h2_mobile_line_height  ) . ';
            ';

            $css .= '}';

            // H3 font size and line height for mobile devices

            $css .= 'h3 {';

            $h3_mobile_font_size = ( maximo_get_option( 'h3_font_size_mobile' ) ) ? maximo_get_option( 'h3_font_size_mobile' ) : $customizer_defaults['h3_font_size']['mobile'];

            $css .= '
                font-size: ' . esc_attr( maximo_px_to_rem( $h3_mobile_font_size ) ) . 'rem;
            ';

            $h3_mobile_line_height = ( maximo_get_option( 'h3_line_height_mobile' ) ) ? maximo_get_option( 'h3_line_height_mobile' ) : $customizer_defaults['h3_line_height']['mobile'];

            $css .= '
                line-height: ' . esc_attr( $h3_mobile_line_height  ) . ';
            ';

            $css .= '}';

            // H4 font size and line height for mobile devices

            $css .= 'h4 {';

            $h4_mobile_font_size = ( maximo_get_option( 'h4_font_size_mobile' ) ) ? maximo_get_option( 'h4_font_size_mobile' ) : $customizer_defaults['h4_font_size']['mobile'];

            $css .= '
                font-size: ' . esc_attr( maximo_px_to_rem( $h4_mobile_font_size ) ) . 'rem;
            ';

            $h4_mobile_line_height = ( maximo_get_option( 'h4_line_height_mobile' ) ) ? maximo_get_option( 'h4_line_height_mobile' ) : $customizer_defaults['h4_line_height']['mobile'];

            $css .= '
                line-height: ' . esc_attr( $h4_mobile_line_height  ) . ';
            ';

            $css .= '}';

            // H5 font size and line height for mobile devices

            $css .= 'h5 {';

            $h5_mobile_font_size = ( maximo_get_option( 'h5_font_size_mobile' ) ) ? maximo_get_option( 'h5_font_size_mobile' ) : $customizer_defaults['h5_font_size']['mobile'];

            $css .= '
                font-size: ' . esc_attr( maximo_px_to_rem( $h5_mobile_font_size ) ) . 'rem;
            ';

            $h5_mobile_line_height = ( maximo_get_option( 'h5_line_height_mobile' ) ) ? maximo_get_option( 'h5_line_height_mobile' ) : $customizer_defaults['h5_line_height']['mobile'];

            $css .= '
                line-height: ' . esc_attr( $h5_mobile_line_height  ) . ';
            ';

            $css .= '}';

            // H6 font size and line height for mobile devices

            $css .= 'h6 {';

            $h6_mobile_font_size = ( maximo_get_option( 'h6_font_size_mobile' ) ) ? maximo_get_option( 'h6_font_size_mobile' ) : $customizer_defaults['h6_font_size']['mobile'];

            $css .= '
                font-size: ' . esc_attr( maximo_px_to_rem( $h6_mobile_font_size ) ) . 'rem;
            ';

            $h6_mobile_line_height = ( maximo_get_option( 'h6_line_height_mobile' ) ) ? maximo_get_option( 'h6_line_height_mobile' ) : $customizer_defaults['h6_line_height']['mobile'];

            $css .= '
                line-height: ' . esc_attr( $h6_mobile_line_height  ) . ';
            ';

            $css .= '}';


            // Site title font size and line height for mobile devices

            $css .= '.site-title {';

            $site_identity_mobile_font_size = ( maximo_get_option( 'site_identity_font_size_mobile' ) ) ? maximo_get_option( 'site_identity_font_size_mobile' ) : $customizer_defaults['site_identity_font_size']['mobile'];

            $css .= '
                font-size: ' . esc_attr( maximo_px_to_rem( $site_identity_mobile_font_size ) ) . 'rem;
            ';

            $site_identity_mobile_line_height = ( maximo_get_option( 'site_identity_line_height_mobile' ) ) ? maximo_get_option( 'site_identity_line_height_mobile' ) : $customizer_defaults['site_identity_line_height']['mobile'];

            $css .= '
                line-height: ' . esc_attr( $site_identity_mobile_line_height  ) . ';
            ';

            $css .= '}';


            // Archive post title font size for mobile devices

            $css .= '.maximo-post-element-title .maximo-entry-title {';

            $archive_post_title_mobile_font_size = ( maximo_get_option( 'archive_post_title_font_size_mobile' ) ) ? maximo_get_option( 'archive_post_title_font_size_mobile' ) : $customizer_defaults['archive_post_title_font_size']['mobile'];

            $css .= '
                font-size: ' . esc_attr( maximo_px_to_rem( $archive_post_title_mobile_font_size ) ) . 'rem;
            ';

            $css .= '}';

	        // Start page header styles for mobile

	        if ( maximo_is_page_header_activated() ) {

		        // Page header height for maximo mobile devices

                $page_header_height_mobile = ( maximo_get_option( 'page_header_height_mobile' ) ) ? maximo_get_option( 'page_header_height_mobile' ) : $customizer_defaults['page_header_height']['mobile'];

                $css .= '
                #maximo-page-header .maximo-page-header-content-wrapper {                    
                    height: ' . absint( $page_header_height_mobile ) . 'vh;
                }';

                // Page header content margins on mobile devices

                $css .= '.maximo-page-header-content {';            

                $page_header_content_margin_mobile_top = ( maximo_get_option( 'page_header_content_margin_mobile_top' ) ) ? maximo_get_option( 'page_header_content_margin_mobile_top' ) : $customizer_defaults['page_header_content_margin']['mobile_top'];

                $css .= '
                    margin-top: ' . absint( $page_header_content_margin_mobile_top ) . 'px;
                ';

                $page_header_content_margin_mobile_right = ( maximo_get_option( 'page_header_content_margin_mobile_right' ) ) ? maximo_get_option( 'page_header_content_margin_mobile_right' ) : $customizer_defaults['page_header_content_margin']['mobile_right'];

                $css .= '
                    margin-right: ' . absint( $page_header_content_margin_mobile_right ) . 'px;
                ';

                $page_header_content_margin_mobile_bottom = ( maximo_get_option( 'page_header_content_margin_mobile_bottom' ) ) ? maximo_get_option( 'page_header_content_margin_mobile_bottom' ) : $customizer_defaults['page_header_content_margin']['mobile_bottom'];

                $css .= '
                    margin-bottom: ' . absint( $page_header_content_margin_mobile_bottom ) . 'px;
                ';

                $page_header_content_margin_mobile_left = ( maximo_get_option( 'page_header_content_margin_mobile_left' ) ) ? maximo_get_option( 'page_header_content_margin_mobile_left' ) : $customizer_defaults['page_header_content_margin']['mobile_left'];

                $css .= '
                    margin-left: ' . absint( $page_header_content_margin_mobile_left ) . 'px;
                ';


                // Page header content paddings in mobile devices

                $page_header_content_padding_mobile_top = ( maximo_get_option( 'page_header_content_padding_mobile_top' ) ) ? maximo_get_option( 'page_header_content_padding_mobile_top' ) : $customizer_defaults['page_header_content_padding']['mobile_top'];

                $css .= '
                    padding-top: ' . absint( $page_header_content_padding_mobile_top ) . 'px;
                ';

                $page_header_content_padding_mobile_right = ( maximo_get_option( 'page_header_content_padding_mobile_right' ) ) ? maximo_get_option( 'page_header_content_padding_mobile_right' ) : $customizer_defaults['page_header_content_padding']['mobile_right'];

                $css .= '
                    padding-right: ' . absint( $page_header_content_padding_mobile_right ) . 'px;
                ';

                $page_header_content_padding_mobile_bottom = ( maximo_get_option( 'page_header_content_padding_mobile_bottom' ) ) ? maximo_get_option( 'page_header_content_padding_mobile_bottom' ) : $customizer_defaults['page_header_content_padding']['mobile_bottom'];

                $css .= '
                    padding-bottom: ' . absint( $page_header_content_padding_mobile_bottom ) . 'px;
                ';

                $page_header_content_padding_mobile_left = ( maximo_get_option( 'page_header_content_padding_mobile_left' ) ) ? maximo_get_option( 'page_header_content_padding_mobile_left' ) : $customizer_defaults['page_header_content_padding']['mobile_left'];

                $css .= '
                    padding-left: ' . absint( $page_header_content_padding_mobile_left ) . 'px;
                ';

                $css .= '}';
			}

			// End page header styles for mobile


			// Start banner/slider styles for mobile

			if ( maximo_get_option( 'enable_banner_slider' ) ) {

				// Banner slider height on mobile devices

                $banner_slider_height_mobile = ( maximo_get_option( 'banner_slider_height_mobile' ) ) ? maximo_get_option( 'banner_slider_height_mobile' ) : $customizer_defaults['banner_slider_height']['mobile'];

                $css .= '
                .maximo-banner-content-wrapper {
                    height: ' . absint( $banner_slider_height_mobile ) . 'vh;
                }';


                // Banner margin on mobile devices

                $css .= '#maximo-banner {';

                $banner_margin_mobile_top = ( maximo_get_option( 'banner_slider_margin_mobile_top' ) ) ? maximo_get_option( 'banner_slider_margin_mobile_top' ) : $customizer_defaults['banner_slider_margin']['mobile_top'];

                $css .= '
                    margin-top: ' . absint( $banner_margin_mobile_top ) . 'px;
                ';

                $banner_margin_mobile_right = ( maximo_get_option( 'banner_slider_margin_mobile_right' ) ) ? maximo_get_option( 'banner_slider_margin_mobile_right' ) : $customizer_defaults['banner_slider_margin']['mobile_right'];

                $css .= '
                    margin-right: ' . absint( $banner_margin_mobile_right ) . 'px;
                ';

                $banner_margin_mobile_bottom = ( maximo_get_option( 'banner_slider_margin_mobile_bottom' ) ) ? maximo_get_option( 'banner_slider_margin_mobile_bottom' ) : $customizer_defaults['banner_slider_margin']['mobile_bottom'];

                $css .= '
                    margin-bottom: ' . absint( $banner_margin_mobile_bottom ) . 'px;
                ';

                $banner_margin_mobile_left = ( maximo_get_option( 'banner_slider_margin_mobile_left' ) ) ? maximo_get_option( 'banner_slider_margin_mobile_left' ) : $customizer_defaults['banner_slider_margin']['mobile_left'];

                $css .= '
                    margin-left: ' . absint( $banner_margin_mobile_left ) . 'px;
                ';

                $css .= '}';


                // Banner slider content width on mobile devices

                $banner_slider_content_wrap_width_mobile = ( maximo_get_option( 'banner_slider_content_wrap_width_mobile' ) ) ? maximo_get_option( 'banner_slider_content_wrap_width_mobile' ) : $customizer_defaults['banner_slider_content_wrap_width']['mobile'];

                $css .= '
                .maximo-banner-content-inner {
                    max-width: ' . absint( $banner_slider_content_wrap_width_mobile ) . '%;
                }';


                // Banner content margin and padding on mobile devices

                $css .= '.maximo-banner-content {';

                $banner_content_margin_mobile_top = ( maximo_get_option( 'banner_slider_content_margin_mobile_top' ) ) ? maximo_get_option( 'banner_slider_content_margin_mobile_top' ) : $customizer_defaults['banner_slider_content_margin']['mobile_top'];

                $css .= '
                    margin-top: ' . absint( $banner_content_margin_mobile_top ) . 'px;
                ';

                $banner_content_margin_mobile_right = ( maximo_get_option( 'banner_slider_content_margin_mobile_right' ) ) ? maximo_get_option( 'banner_slider_content_margin_mobile_right' ) : $customizer_defaults['banner_slider_content_margin']['mobile_right'];

                $css .= '
                    margin-right: ' . absint( $banner_content_margin_mobile_right ) . 'px;
                ';

                $banner_content_margin_mobile_bottom = ( maximo_get_option( 'banner_slider_content_margin_mobile_bottom' ) ) ? maximo_get_option( 'banner_slider_content_margin_mobile_bottom' ) : $customizer_defaults['banner_slider_content_margin']['mobile_bottom'];

                $css .= '
                    margin-bottom: ' . absint( $banner_content_margin_mobile_bottom ) . 'px;
                ';

                $banner_content_margin_mobile_left = ( maximo_get_option( 'banner_slider_content_margin_mobile_left' ) ) ? maximo_get_option( 'banner_slider_content_margin_mobile_left' ) : $customizer_defaults['banner_slider_content_margin']['mobile_left'];

                $css .= '
                    margin-left: ' . absint( $banner_content_margin_mobile_left ) . 'px;
                ';

                $banner_content_padding_mobile_right = ( maximo_get_option( 'banner_slider_content_padding_mobile_right' ) ) ? maximo_get_option( 'banner_slider_content_padding_mobile_right' ) : $customizer_defaults['banner_slider_content_padding']['mobile_right'];

                $css .= '
                    padding-right: ' . absint( $banner_content_padding_mobile_right ) . 'px;
                ';

                $banner_content_padding_mobile_bottom = ( maximo_get_option( 'banner_slider_content_padding_mobile_bottom' ) ) ? maximo_get_option( 'banner_slider_content_padding_mobile_bottom' ) : $customizer_defaults['banner_slider_content_padding']['mobile_bottom'];

                $css .= '
                    padding-bottom: ' . absint( $banner_content_padding_mobile_bottom ) . 'px;
                ';

                $banner_content_padding_mobile_left = ( maximo_get_option( 'banner_slider_content_padding_mobile_left' ) ) ? maximo_get_option( 'banner_slider_content_padding_mobile_left' ) : $customizer_defaults['banner_slider_content_padding']['mobile_left'];

                $css .= '
                    padding-left: ' . absint( $banner_content_padding_mobile_left ) . 'px;
                ';

                $css .= '}';
			}

			// End banner/slider styles for mobile


            // Logo max width on mobile

            $site_identity_logo_max_width_mobile = ( maximo_get_option( 'site_identity_logo_max_width_mobile' ) ) ? maximo_get_option( 'site_identity_logo_max_width_mobile' ) : $customizer_defaults['site_identity_logo_max_width']['mobile'];

            $css .= '
                .custom-logo,
                .maximo-alternate-logo {
                    max-width: ' . absint( $site_identity_logo_max_width_mobile ) . 'px;
                }
            ';

            // End site logo max width style for mobile

		$css .= '}';

		// End styles for mobile devices

		// Allow CSS to be filtered.
		$css = apply_filters( 'maximo_dynamic_css', $css ); 

		// Minify the CSS code.
		$css = maximo_minify_css( $css );

		return $css;
	}
}

/**
 * Simple minification of CSS codes.
 *
 * @since    2.0.8
 */
if ( ! function_exists( 'maximo_minify_css' ) ) {

	function maximo_minify_css( $css ) {
		$css = preg_replace( '/\s+/', ' ', $css );
		$css = preg_replace( '/\/\*[^\!](.*?)\*\//', '', $css );
		$css = preg_replace( '/(,|:|;|\{|}) /', '$1', $css );
		$css = preg_replace( '/ (,|;|\{|})/', '$1', $css );
		$css = preg_replace( '/(:| )0\.([0-9]+)(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}.${2}${3}', $css );
		$css = preg_replace( '/(:| )(\.?)0(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}0', $css );

		return trim( $css );
	}
}


if ( ! function_exists( 'maximo_google_font_weight' ) ) {

	function maximo_google_font_weight( $weight ) {

		if ( $weight === 'regular' || $weight === 'italic' ) {
			return 400;
		} else {
			return absint( str_replace( 'italic', '', $weight ) );
		}
	}
}


if ( ! function_exists( 'maximo_px_to_rem' ) ) {

	function maximo_px_to_rem( $px ) {

		return ( 1/16 * $px );
	}
}