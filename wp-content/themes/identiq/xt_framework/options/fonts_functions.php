<?php

	/* Fields to check custom Google Fonts */

	global $_gfontFields;

	$_gfontFields = array(
		'header_callout_main',
		'header_callout_sub',
		'main_menu_font',
		'sub_menu_font',
		'sidebar_title_font',
		'sidebar_font',
		'header_block_font',
		'footer_font_gototop',
		'footer_widget_title',
		'footer_widget_text',
		'down_footer_text_font',
		'down_footer_menu_font',
		'page_title_font',
		'content_h1',
		'content_h2',
		'content_h3',
		'content_h4',
		'content_h5',
		'content_h6',
		'content_p',
		'content_li',
		'sidebar_features_font',
		'blog_title_font',
		'blog_meta_font',
		'blog_excerpt_font',
		'blog_readmore_font',
		'blog_pagination_font',
		'post_tags',
		'post_share',
		'post_authorbox_name',
		'post_authorbox_bio',
		'post_relatedposts',
		'post_relatedposts_items',
		'post_comments',
		'post_comments_author',
		'post_comments_content',
		'post_comments_reply',
		'post_lac',
		'post_lac_logged',
		'portfolio_filter_font',
		'portfolio_item_title',
		'portfolio_item_excerpt',
		'single_project_pagination_font',
		'single_project_related_font',
		'slider_rev_default',
		'slider_rev_subgray',
		'slider_rev_paragraph',
		'slider_rev_opacdark',
		'slider_rev_verybig',
		'slider_rev_verybigdark',
		'slider_all_caption',
		'sc_button_font',
		'sc_iconbox_title_font',
		'sc_iconbox_text_font',
		'sc_latest_post_font',
		'sc_latest_post_meta_font',
		'sc_lastest_post_list_font',
		'sc_latest_post_list_meta_font',
		'sc_lastest_post_list_rm_font',
		'sc_member_name_font',
		'sc_member_role_font',
		'sc_member_content_font',
		'sc_skill_name_font',
		'sc_msgbox_font',
		'sc_ptable_plan_font',
		'sc_ptable_price_font',
		'sc_ptable_freq_font',
		'sc_ptable_items_font',
		'sc_ptable_btn_font',
		'sc_ptable_featured_font',
		'sc_tabsf_font',
		'sc_tabsb_font',
		'sc_tabsv_font',
		'sc_tabsf_content_font',
		'sc_tabsb_content_font',
		'sc_tabsv_content_font',
		'sc_teasersimple_font',
		'sc_teasersimple_h_font',
		'sc_callout_font',
		'sc_callout_h_font',
		'sc_testimonialb_font',
		'sc_testimonialb_author_font',
		'sc_testimonialblock_font',
		'sc_testimonialblock_author_font',
		'sc_blockquote_font',
		'sc_blockquote_author_font',
		'sc_pullquote_font',
		'sc_headerimg_font',
		'skin_main_font',
		'skin_sub_font',
	);

	require_once('font_list.php');
	
	/**
	 * Checks font options to see if a Google font is selected.
	 * If so, options_typography_enqueue_google_font is called to enqueue the font.
	 * Ensures that each Google font is only enqueued once.
	 */
	if ( !function_exists( 'options_typography_google_fonts' ) ) {
		function options_typography_google_fonts() {

			global $_gfontFields;

			$all_google_fonts = array_keys( options_typography_get_google_fonts() );
			// Define all the options that possibly have a unique Google font
			/*
			$google_font = of_get_option('google_font', 'Rokkitt, serif');
			$google_mixed = of_get_option('google_mixed', false);
			$google_mixed_2 = of_get_option('google_mixed_2', 'Arvo, serif');
			*/
			// Get the font face for each option and put it in an array
			/*
			$selected_fonts = array(
				$google_font['face'],
				$google_mixed['face'],
				$google_mixed_2['face'] );
				*/

			$selected_fonts = array();

			foreach ($_gfontFields as $font) {
				$fontField = of_get_option($font, false);

				$selected_fonts[] = $fontField['face'];				
			}

			// Remove any duplicates in the list
			$selected_fonts = array_unique($selected_fonts);
			// Check each of the unique fonts against the defined Google fonts
			// If it is a Google font, go ahead and call the function to enqueue it
			foreach ( $selected_fonts as $font ) {
				if ( in_array( $font, $all_google_fonts ) ) {
					options_typography_enqueue_google_font($font);
				}
			}
		}
	}
	add_action( 'wp_enqueue_scripts', 'options_typography_google_fonts' );
	/**
	 * Enqueues the Google $font that is passed
	 */
	function options_typography_enqueue_google_font($font) {
		$font = explode(',', $font);
		$font = $font[0];
		// Certain Google fonts need slight tweaks in order to load properly
		// Like our friend "Raleway"
		if ( $font == 'Raleway' )
			$font = 'Raleway:100';
		$font = str_replace(" ", "+", $font);
		wp_enqueue_style( "options_typography_$font", "http://fonts.googleapis.com/css?family=$font:300,400,700,400italic,700italic,100,900", false, null, 'all' );
	}