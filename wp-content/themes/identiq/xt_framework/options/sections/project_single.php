<?php

	/* Project
	========================*/

	/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Single Project Header', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'single_project_gradient', 'Project Gradient', array(
			'color' => true,
		));

		$options[] = array(
			'name' => __('Pattern Style', 'options_framework_theme'),
			'desc' => __('Select the pattern style that will be applied.', 'options_framework_theme'),
			'id' => 'single_project_pattern',
			'std' => '', // change here to wide
			'type' => 'select',
			'class' => 'mini', //mini, tiny, small
			'options' => array('' => 'Light', 'dark' => 'Dark'),
			);

		// Logo Text
		$options[] = array(
		'name' => __('Custom Background Image Opacity', 'options_framework_theme'),
		'desc' => __('Select the background image opacity, from 0.0 to 1.0, example: 0.1', 'options_framework_theme'),
		'id' => 'single_project_opacity',
		'std' => '',
		'type' => 'text' );

		customizationOpts($options, 'single_project_title', 'Project Title', array(
			'font' => true,
		));

		customizationOpts($options, 'single_project_meta', 'Project Meta', array(
			'font' => true,
			'border' => true,
		));

		customizationOpts($options, 'single_project_excerpt', 'Project Excerpt', array(
			'font' => true,
		));

		customizationOpts($options, 'single_project_share', 'Project "Share This"', array(
			'font' => true,
		));

		customizationOpts($options, 'single_project_launch', 'Project Launch Button', array(
			'font' => true,
			'color_a_hover' => true,
		));

		customizationOpts($options, 'single_project_icon', 'Project Launch Icon', array(
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Single Project Content', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Thumbnail Hover Background', 'options_framework_theme'),
		'desc' => __('Define the background color of thumbnail when hovered.', 'options_framework_theme'),
		'id' => 'single_project_item_bg',
		'std' => '', 
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Navigation', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'single_project_nav', 'Project Navigation Button', array(
			'font' => true,
			'color_a_hover' => true,
			'border' => true,
		));

		customizationOpts($options, 'single_project_nav_icon', 'Project Navigation Icon', array(
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Related Projects', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Related Heading Font',
		'desc' => 'Configure the font of related projects section (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'single_project_related_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);
