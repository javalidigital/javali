<?php

	/* Sidebar
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Widgets: General Styles', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Widget Title Fonts',
		'desc' => 'Configure the fonts of widget title (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'sidebar_title_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array( 'name' => 'Widget Text Fonts',
		'desc' => 'Configure the fonts of widget text/content (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'sidebar_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);		

		$options[] = array(
		'name' => __('Widget Link Color', 'options_framework_theme'),
		'desc' => __('Select the color of widget links.', 'options_framework_theme'),
		'id' => 'sidebar_a',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Widget Link Color Hover', 'options_framework_theme'),
		'desc' => __('Select the color of widget links when hovered.', 'options_framework_theme'),
		'id' => 'sidebar_a_hover',
		'std' => '', 
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Widgets: Input', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Input Forms Background', 'options_framework_theme'),
		'desc' => __('Define the background of inputs, like text fields, textareas and others.', 'options_framework_theme'),
		'id' => 'sidebar_input_bg',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Input Forms Border Color', 'options_framework_theme'),
		'desc' => __('Define the border of inputs, like text fields, textareas and others.', 'options_framework_theme'),
		'id' => 'sidebar_input_border',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Input Forms Text Color', 'options_framework_theme'),
		'desc' => __('Define the text color of inputs, like text fields, textareas and others.', 'options_framework_theme'),
		'id' => 'sidebar_input_color',
		'std' => '', 
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Widgets: MailChimp', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Submit Background Color', 'options_framework_theme'),
		'desc' => __('Select the background color to be used in buttons.', 'options_framework_theme'),
		'id' => 'sidebar_widget_btn_bg',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Submit Background Text Color', 'options_framework_theme'),
		'desc' => __('Select the text color to be used in buttons.', 'options_framework_theme'),
		'id' => 'sidebar_widget_btn_text',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Submit Background Color Hover', 'options_framework_theme'),
		'desc' => __('Select the background color to be used in buttons at hover.', 'options_framework_theme'),
		'id' => 'sidebar_widget_btn_bg_hover',
		'std' => '',
		'type' => 'color' );		

		$options[] = array(
		'name' => __('Submit Background Text Color Hover', 'options_framework_theme'),
		'desc' => __('Select the text color to be used in buttons at hover.', 'options_framework_theme'),
		'id' => 'sidebar_widget_btn_text_hover',
		'std' => '',
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Widgets: Categories, Tags, Archives (Framed Tabs)', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Border Color', 'options_framework_theme'),
		'desc' => __('Select the border color to framed tabs widget.', 'options_framework_theme'),
		'id' => 'sidebar_widget_framed_border',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Background Color', 'options_framework_theme'),
		'desc' => __('Select the bockground color to framed tabs widget.', 'options_framework_theme'),
		'id' => 'sidebar_widget_framed_bg',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Tab Text Color', 'options_framework_theme'),
		'desc' => __('Select the color to be used in tab text.', 'options_framework_theme'),
		'id' => 'sidebar_widget_framed_tab_color',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Tab Background Color', 'options_framework_theme'),
		'desc' => __('Select the color to be used in tab background.', 'options_framework_theme'),
		'id' => 'sidebar_widget_framed_tab_bg',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Tab Text Color Hover', 'options_framework_theme'),
		'desc' => __('Select the color to be used in tab text at hover.', 'options_framework_theme'),
		'id' => 'sidebar_widget_framed_tab_color_hover',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Tab Background Color Hover', 'options_framework_theme'),
		'desc' => __('Select the color to be used in tab background at hover.', 'options_framework_theme'),
		'id' => 'sidebar_widget_framed_tab_bg_hover',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Item Text Color', 'options_framework_theme'),
		'desc' => __('Select the color to be used in tab items.', 'options_framework_theme'),
		'id' => 'sidebar_widget_framed_text',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Item Counter/Date Color', 'options_framework_theme'),
		'desc' => __('Select the color to be used in item sub text, like post counter or date.', 'options_framework_theme'),
		'id' => 'sidebar_widget_framed_span',
		'std' => '',
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Widgets: Tag Cloud', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Tag Text Color', 'options_framework_theme'),
		'desc' => __('Select the color to be used in tag text.', 'options_framework_theme'),
		'id' => 'sidebar_widget_tag_color',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Tag Background Color', 'options_framework_theme'),
		'desc' => __('Select the background color to be used in tag.', 'options_framework_theme'),
		'id' => 'sidebar_widget_tag_bg',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Tag Text Color Hover', 'options_framework_theme'),
		'desc' => __('Select the color to be used in tag text at hover.', 'options_framework_theme'),
		'id' => 'sidebar_widget_tag_color_hover',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Tag Background Color Hover', 'options_framework_theme'),
		'desc' => __('Select the background color to be used in tag at hover.', 'options_framework_theme'),
		'id' => 'sidebar_widget_tag_bg_hover',
		'std' => '',
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Features Menu', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Features Menu Font',
		'desc' => 'Configure the fonts of features menu items (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'sidebar_features_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Features Border', 'options_framework_theme'),
		'desc' => __('Select the border color to be used in the features menu.', 'options_framework_theme'),
		'id' => 'sidebar_features_border',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Features Normal Background', 'options_framework_theme'),
		'desc' => __('Select the background color to be used in the features menu.', 'options_framework_theme'),
		'id' => 'sidebar_features_bg',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Features Hover Background', 'options_framework_theme'),
		'desc' => __('Select the background color to be used in the features menu item when hovered.', 'options_framework_theme'),
		'id' => 'sidebar_features_hover_bg',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Features Hover Color', 'options_framework_theme'),
		'desc' => __('Select the text color to be used in the features menu item when hovered.', 'options_framework_theme'),
		'id' => 'sidebar_features_hover_color',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Features Current Background', 'options_framework_theme'),
		'desc' => __('Select the background color to be used in the current features menu item.', 'options_framework_theme'),
		'id' => 'sidebar_features_curr_bg',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Features Current Color', 'options_framework_theme'),
		'desc' => __('Select the text color to be used in the current features menu item.', 'options_framework_theme'),
		'id' => 'sidebar_features_curr_color',
		'std' => '',
		'type' => 'color' );