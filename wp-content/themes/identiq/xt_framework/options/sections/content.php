<?php

	/* Content
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Heading Titles', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Header Title',
		'desc' => 'Configure the fonts of main page header title (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'header_callout_main',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Header Title Border', 'options_framework_theme'),
		'desc' => __('Select the color to header title border.', 'options_framework_theme'),
		'id' => 'header_callout_border',
		'std' => '', // use something like #2accee
		'type' => 'color' );