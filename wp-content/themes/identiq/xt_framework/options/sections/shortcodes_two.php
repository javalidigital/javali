<?php

	/* Shortcodes
	========================*/

	
		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Social Media', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_smedia', 'Social Icons', array(
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Tables', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_table', 'Table', array(
			'border' => true,
		));

		customizationOpts($options, 'sc_table_head', 'Table Head', array(
			'font' => true,
			'bg' => true,
			'border' => true,
		));

		customizationOpts($options, 'sc_table_rows', 'Table Rows', array(
			'font' => true,
			'bg' => true,
			'border' => true,
		));

		customizationOpts($options, 'sc_table_rowsh', 'Table Highlight Row', array(
			'bg' => true,
		));

		customizationOpts($options, 'sc_table_foot', 'Table Foot', array(
			'font' => true,
			'bg' => true,
			'border' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Framed Tabs', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_tabsf', 'Framed Tabs', array(
			'border' => true,
			'font' => true,
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		customizationOpts($options, 'sc_tabsf_content', 'Framed Tabs Content', array(
			'font' => true,
			'bg' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Button Tabs', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_tabsb', 'Button Tabs', array(
			'font' => true,
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		customizationOpts($options, 'sc_tabsb_content', 'Button Tabs Content', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Vertical Tabs', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_tabsv', 'Vertical Tabs', array(
			'border' => true,
			'font' => true,
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		customizationOpts($options, 'sc_tabsv_content', 'Vertical Tabs Content', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Teaser', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_teaser', 'Teaser', array(
			'font' => true,
			'bg' => true,
		));

		customizationOpts($options, 'sc_teaser_h', 'Teaser Heading', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Teaser Box', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_teaser_box', 'Teaser Box', array(
			'border' => true,
			'font' => true,
			'bg' => true,
		));

		customizationOpts($options, 'sc_teaser_h_box', 'Teaser Box Heading', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Callout', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_callout', 'Callout', array(
			'border' => true,
			'font' => true,
			'bg' => true,
		));

		customizationOpts($options, 'sc_callout_h', 'Callout Heading', array(
			'font' => true,
		));

		$options[] = array(
		'name' => __('Box Styled', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_boxstyled', 'Box Styled', array(
			'color' => true,
			'bg' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Testimonial Bubble', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_testimonialb', 'Testimonial Bubble', array(
			'font' => true,
			'bg' => true,
		));

		customizationOpts($options, 'sc_testimonialb_author', 'Testimonial Bubble Author', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Testimonial Block', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_testimonialblock', 'Testimonial Block', array(
			'font' => true,
			'border' => true,
		));

		customizationOpts($options, 'sc_testimonialblock_author', 'Testimonial Block Author', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Blockquote', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_blockquote', 'Blockquote', array(
			'font' => true,
			//'border' => true,
		));

		customizationOpts($options, 'sc_blockquote_author', 'Blockquote Author', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Pullquote', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_pullquote', 'Pullquote', array(
			'font' => true,
			'border' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Header Image', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Header Image Font',
		'desc' => 'Configure the font of Header Image (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'sc_headerimg_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts,
			'disable-line-height' => true,
			'disable-size' => true,
			'disable-styles' => true,
			 )
		);

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Code', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_code', 'Code', array(
			'bg' => true,
			'color' => true,
			'border' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Wrapper', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_wrapper', 'Wrapper Block', array(
			'bg' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Slogan', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_slogan', 'Slogan', array(
			'font' => true,
			'color_a' => true,
			'color_a_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Big Title', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_big_title', 'Big Title', array(
			'font' => true,
			'color_a' => true,
			'color_a_hover' => true,
		));

		customizationOpts($options, 'sc_big_title_sub', 'Big Title Sub Text', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Big Text', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_big_text', 'Big Text', array(
			'color_a' => true,
			'color_a_hover' => true,
		));

		customizationOpts($options, 'sc_big_text_h1', 'Big Text H1', array(
			'font' => true,
		));

		customizationOpts($options, 'sc_big_text_h2', 'Big Text H2', array(
			'font' => true,
		));

		customizationOpts($options, 'sc_big_text_h3', 'Big Text H3', array(
			'font' => true,
		));

		customizationOpts($options, 'sc_big_text_h4', 'Big Text H4', array(
			'font' => true,
		));

		customizationOpts($options, 'sc_big_text_h5', 'Big Text H5', array(
			'font' => true,
		));

		customizationOpts($options, 'sc_big_text_h6', 'Big Text H6', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Process Cirlces', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_circles_front', 'Circle Front Side', array(
			'font' => true,
			'bg' => true,
		));

		customizationOpts($options, 'sc_circles_back', 'Circle Back Side', array(
			'font' => true,
			'bg' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Icon Call to Action', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_call_to_action', 'Call to Action Text', array(
			'font' => true,
			'color_a' => true,
			'color_a_hover' => true,
		));

		customizationOpts($options, 'sc_call_to_action_icon', 'Call to Action Icon', array(
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));