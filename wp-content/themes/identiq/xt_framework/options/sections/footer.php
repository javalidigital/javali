<?php

	/* Footer
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Layout', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
			'name' => "Patterns",
			'desc' => "Select a built in pattern to be aplied at background - it is replaced if Content Wrapper is defined!",
			'id' => "pattern_footer",
			'std' => "default",
			'type' => "images",
			'options' => array(
				'default' => $patternpath . 'default.png',
				'1' => $patternpath . '1.png',
				'2' => $patternpath . '2.png',
				'3' => $patternpath . '3.png',
				'4' => $patternpath . '4.png',
				'5' => $patternpath . '5.png',
				'6' => $patternpath . '6.png',
				'7' => $patternpath . '7.png',
				'8' => $patternpath . '8.png',
				'9' => $patternpath . '9.png',
				'10' => $patternpath . '10.png',
				'11' => $patternpath . '11.png',
				'12' => $patternpath . '12.png',
				'13' => $patternpath . '13.png',
				'14' => $patternpath . '14.png',
				'15' => $patternpath . '15.png',
				'16' => $patternpath . '16.png',
				'17' => $patternpath . '17.png',
				'18' => $patternpath . '18.png',
				)
		);

		$options[] = array(
		'name' =>  __('Footer Background', 'options_framework_theme'),
		'desc' => __('Define here the footer background', 'options_framework_theme'),
		'id' => 'footer_bg',
		'std' => $content_bg,
		'type' => 'background' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Widgets: General Styles', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Widget Title Font',
		'desc' => 'Configure the fonts of widget title (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'footer_widget_title',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array( 'name' => 'Widget Text Font',
		'desc' => 'Configure the fonts of widget text (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'footer_widget_text',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Widget Link Color', 'options_framework_theme'),
		'desc' => __('Select the color to links in widget.', 'options_framework_theme'),
		'id' => 'footer_widget_a',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Widget Link Hover Color', 'options_framework_theme'),
		'desc' => __('Select the color to links in widget when hovered.', 'options_framework_theme'),
		'id' => 'footer_widget_a_hover',
		'std' => '',
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Widgets: Input', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Widget Input Color', 'options_framework_theme'),
		'desc' => __('Select the color of input text.', 'options_framework_theme'),
		'id' => 'footer_widget_input_color',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Widget Input Border', 'options_framework_theme'),
		'desc' => __('Select the border of input text.', 'options_framework_theme'),
		'id' => 'footer_widget_input_border',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Widget Input Background', 'options_framework_theme'),
		'desc' => __('Select the background of input text.', 'options_framework_theme'),
		'id' => 'footer_widget_input_bg',
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
		'id' => 'footer_widget_btn_bg',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Submit Background Text Color', 'options_framework_theme'),
		'desc' => __('Select the text color to be used in buttons.', 'options_framework_theme'),
		'id' => 'footer_widget_btn_text',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Submit Background Color Hover', 'options_framework_theme'),
		'desc' => __('Select the background color to be used in buttons at hover.', 'options_framework_theme'),
		'id' => 'footer_widget_btn_bg_hover',
		'std' => '',
		'type' => 'color' );		

		$options[] = array(
		'name' => __('Submit Background Text Color Hover', 'options_framework_theme'),
		'desc' => __('Select the text color to be used in buttons at hover.', 'options_framework_theme'),
		'id' => 'footer_widget_btn_text_hover',
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
		'id' => 'footer_widget_tag_color',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Tag Background Color', 'options_framework_theme'),
		'desc' => __('Select the background color to be used in tag.', 'options_framework_theme'),
		'id' => 'footer_widget_tag_bg',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Tag Text Color Hover', 'options_framework_theme'),
		'desc' => __('Select the color to be used in tag text at hover.', 'options_framework_theme'),
		'id' => 'footer_widget_tag_color_hover',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Tag Background Color Hover', 'options_framework_theme'),
		'desc' => __('Select the background color to be used in tag at hover.', 'options_framework_theme'),
		'id' => 'footer_widget_tag_bg_hover',
		'std' => '',
		'type' => 'color' );