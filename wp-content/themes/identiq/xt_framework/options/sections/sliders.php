<?php

	/* Sliders
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Revolution Slider', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Default Heading Font',
		'desc' => 'Configure the font of default heading caption (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'slider_rev_default',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Default Heading Background', 'options_framework_theme'),
		'desc' => __('Define the background color of default heading.', 'options_framework_theme'),
		'id' => 'slider_rev_default_bg',
		'std' => '', 
		'type' => 'color' );

		$options[] = array( 'name' => 'Subheading Gray Font',
		'desc' => 'Configure the font of subheading gray caption (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'slider_rev_subgray',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array( 'name' => 'Paragraph Font',
		'desc' => 'Configure the font of paragraph caption (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'slider_rev_paragraph',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array( 'name' => 'Opacity Dark Font',
		'desc' => 'Configure the font of opacity dark caption (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'slider_rev_opacdark',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array( 'name' => 'Very Big Font',
		'desc' => 'Configure the font of very big caption (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'slider_rev_verybig',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array( 'name' => 'Very Big Dark Font',
		'desc' => 'Configure the font of very big dark caption (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'slider_rev_verybigdark',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Link', 'options_framework_theme'),
		'desc' => __('Define the color of any link in the captions.', 'options_framework_theme'),
		'id' => 'slider_rev_link',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Link Hover', 'options_framework_theme'),
		'desc' => __('Define the color of any link in the captions when hovered.', 'options_framework_theme'),
		'id' => 'slider_rev_link_hover',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Navigation Button Hover', 'options_framework_theme'),
		'desc' => __('Define the color of navigation button when hovered.', 'options_framework_theme'),
		'id' => 'slider_rev_nav_bg_hover',
		'std' => '', 
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Camera/Flex/Nivo Slider', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Default Caption Font',
		'desc' => 'Configure the font of default caption (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'slider_all_caption',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Background Caption', 'options_framework_theme'),
		'desc' => __('Define the background color of the caption block.', 'options_framework_theme'),
		'id' => 'slider_all_caption_bg',
		'std' => '', 
		'type' => 'color' );