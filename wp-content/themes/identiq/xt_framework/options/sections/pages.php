<?php

	/* Pages
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Page/Single Elements', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Heading 1',
		'desc' => 'Configure the fonts of H1 (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'content_h1',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts)
		);

		$options[] = array( 'name' => 'Heading 2',
		'desc' => 'Configure the fonts of H2 (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'content_h2',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts)
		);

		$options[] = array( 'name' => 'Heading 3',
		'desc' => 'Configure the fonts of H3 (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'content_h3',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts)
		);

		$options[] = array( 'name' => 'Heading 4',
		'desc' => 'Configure the fonts of H4 (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'content_h4',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts)
		);

		$options[] = array( 'name' => 'Heading 5',
		'desc' => 'Configure the fonts of H5 (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'content_h5',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts)
		);

		$options[] = array( 'name' => 'Heading 6',
		'desc' => 'Configure the fonts of H6 (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'content_h6',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts)
		);

		$options[] = array( 'name' => 'Paragraph',
		'desc' => 'Configure the fonts of P (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'content_p',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts)
		);

		$options[] = array( 'name' => 'List',
		'desc' => 'Configure the fonts of list element (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'content_li',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts)
		);

		$options[] = array(
		'name' => __('Content Link', 'options_framework_theme'),
		'desc' => __('Select the color to content link in normal status.', 'options_framework_theme'),
		'id' => 'content_a',
		'std' => '', // use something like #2accee
		'type' => 'color' );

		$options[] = array(
		'name' => __('Content Link Hover', 'options_framework_theme'),
		'desc' => __('Select the color to content link in hover status.', 'options_framework_theme'),
		'id' => 'content_a_hover',
		'std' => '', // use something like #2accee
		'type' => 'color' );

		$options[] = array(
		'name' => __('Address', 'options_framework_theme'),
		'desc' => __('Select the color of address element.', 'options_framework_theme'),
		'id' => 'content_address',
		'std' => '', // use something like #2accee
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Page/Single Forms', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Input Color', 'options_framework_theme'),
		'desc' => __('Select the color of input text.', 'options_framework_theme'),
		'id' => 'content_input_color',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Input Border', 'options_framework_theme'),
		'desc' => __('Select the border of input text.', 'options_framework_theme'),
		'id' => 'content_input_border',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Input Background', 'options_framework_theme'),
		'desc' => __('Select the background of input text.', 'options_framework_theme'),
		'id' => 'content_input_bg',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Input Focus Shadow Color', 'options_framework_theme'),
		'desc' => __('Select the shadow color of input fields when user focus.', 'options_framework_theme'),
		'id' => 'content_input_focus',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Input Focus Placeholder Color', 'options_framework_theme'),
		'desc' => __('Select the placeholder color of a input like text or texarea.', 'options_framework_theme'),
		'id' => 'content_input_placeholder',
		'std' => '',
		'type' => 'color' );