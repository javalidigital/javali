<?php

	/* Portfolio
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Filters', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Filter Side Border', 'options_framework_theme'),
		'desc' => __('Define the border color of filter box.', 'options_framework_theme'),
		'id' => 'portfolio_filter_border',
		'std' => '', 
		'type' => 'color' );

		$options[] = array( 'name' => 'Filter "Show" Font',
		'desc' => 'Configure the font of portfolio filters "show" word (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'portfolio_filter_font_show',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array( 'name' => 'Filter Selected Font',
		'desc' => 'Configure the font of portfolio selected filter (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'portfolio_filter_font_selected',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Filter Box Background Hover', 'options_framework_theme'),
		'desc' => __('Define the background color of filter box at hover state.', 'options_framework_theme'),
		'id' => 'portfolio_filter_bg_hover',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Filter Box Border', 'options_framework_theme'),
		'desc' => __('Define the border color of filter box at hover state.', 'options_framework_theme'),
		'id' => 'portfolio_filter_box_border',
		'std' => '', 
		'type' => 'color' );

		customizationOpts($options, 'portfolio_filter_items', 'Filter Items', array(
			'font' => true,
			'color_a_hover' => true,
			'bg_hover' => true,
		));

		$options[] = array(
		'name' => __('Filter Selected Color', 'options_framework_theme'),
		'desc' => __('Define the color of selected filter item.', 'options_framework_theme'),
		'id' => 'portfolio_filter_selected_color',
		'std' => '', 
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Project Counter', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'portfolio_counter_number', 'Project Counter Number', array(
			'font' => true,
		));

		customizationOpts($options, 'portfolio_counter_word', 'Project Counter "projects"', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Portfolio Items Normal', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Item Background', 'options_framework_theme'),
		'desc' => __('Define the background color of portfolio items.', 'options_framework_theme'),
		'id' => 'portfolio_item_bg',
		'std' => '', 
		'type' => 'color' );

		customizationOpts($options, 'portfolio_item_title', 'Portfolio Item Title', array(
			'font' => true,
		));

		customizationOpts($options, 'portfolio_item_excerpt', 'Portfolio Item Excerpt', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Portfolio Items Hover', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Item Cover Background', 'options_framework_theme'),
		'desc' => __('Define the background color of portfolio items cover.', 'options_framework_theme'),
		'id' => 'portfolio_item_cover_bg',
		'std' => '', 
		'type' => 'color' );

		customizationOpts($options, 'portfolio_item_title_cover', 'Portfolio Item Cover Title', array(
			'font' => true,
		));

		customizationOpts($options, 'portfolio_item_excerpt_cover', 'Portfolio Item Cover Excerpt', array(
			'font' => true,
		));

		$options[] = array(
		'name' => __('Item Cover Arrow Color', 'options_framework_theme'),
		'desc' => __('Define the color that is inside item cover.', 'options_framework_theme'),
		'id' => 'portfolio_item_cover_arrow',
		'std' => '', 
		'type' => 'color' );