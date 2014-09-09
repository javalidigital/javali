<?php

	/* Shortcodes
	========================*/

	/*
	customizationOpts($options, 'sc_accordion', 'Accordion/Toggle', array(
			'border' => true,
			'font' => true,
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));
	*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Accordion/Toggle', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_accordion', 'Accordion/Toggle', array(
			'border' => true,
			'font' => true,
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Button', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Button Font',
		'desc' => 'Configure the font of button (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'sc_button_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts,
			'disable-line-height' => true,
			'disable-styles' => true,
			'disable-color' => true,
			'disable-size' => true,
			 )
		);

		customizationOpts($options, 'sc_button', 'Button', array(
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Carousel', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_carousel', 'Carousel', array(
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		customizationOpts($options, 'sc_carousel_timebar', 'Carousel Timebar', array(
			'bg' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Divider', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_divider', 'Divider', array(
			'border' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Dropcap', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_dropcap', 'Dropcap', array(
			'border' => true,
			'color_a' => true,
			'bg' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Icon Box', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_iconbox_title', 'Icon Box Icon', array(
			'color' => true,
		));

		customizationOpts($options, 'sc_iconbox_title', 'Icon Box Title', array(
			'font' => true,
		));

		customizationOpts($options, 'sc_iconbox_text', 'Icon Box Text', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Block Icons', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_blockicon', 'Block Icon', array(
			'color_a' => true,
			'color_a_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Latest Post Grid', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_latest_post', 'Latest Post Grid', array(
			'bg' => true,
		));

		customizationOpts($options, 'sc_latest_post', 'Latest Post Grid Title', array(
			'font' => true,
			'color_a_hover' => true,
		));

		customizationOpts($options, 'sc_latest_post_meta', 'Latest Post Grid Meta', array(
			'font' => true,
			'color_a' => true,
			'color_a_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Latest Post List', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_lastest_post_list', 'Latest Post List Title', array(
			'font' => true,
			'color_a_hover' => true,
		));

		customizationOpts($options, 'sc_lastest_post_list_icon', 'Latest Post List Icon', array(
			'bg' => true,
			'color_a' => true,
		));

		customizationOpts($options, 'sc_latest_post_list_meta', 'Latest Post List Meta', array(
			'font' => true,
			'color_a' => true,
			'color_a_hover' => true,
		));

		customizationOpts($options, 'sc_lastest_post_list_rm', 'Latest Post List Read More', array(
			'font' => true,
			'color_a_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Member Block', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_member_block', 'Member Block', array(
			'bg' => true,
		));

		customizationOpts($options, 'sc_member_name', 'Member Name', array(
			'font' => true,
		));

		customizationOpts($options, 'sc_member_role', 'Member Role', array(
			'font' => true,
		));

		customizationOpts($options, 'sc_member_content', 'Member Content', array(
			'font' => true,
			'border' => true,
		));

		customizationOpts($options, 'sc_member_icon', 'Member Social Icons', array(
			'bg' => true,
			'bg_hover' => true,
			'color_a' => true,
			'color_a_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Skill Bars', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_skill_name', 'Skill Heading', array(
			'font' => true,
		));

		customizationOpts($options, 'sc_skill_bar', 'Skill Bar', array(
			'bg' => true,
		));

		customizationOpts($options, 'sc_skill_bar_inner', 'Skill Bar Inner', array(
			'bg' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Message Boxes', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Messabe Box Font',
		'desc' => 'Configure the font of message box content (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'sc_msgbox_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts,
			'disable-color' => true,
			 )
		);

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Pricing Table', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_ptable_plan', 'Title', array(
			'font' => true,
			'bg' => true,
		));

		customizationOpts($options, 'sc_ptable_price', 'Price', array(
			'font' => true,
			'bg' => true,
		));

		customizationOpts($options, 'sc_ptable_time', 'Time', array(
			'font' => true,
		));

		customizationOpts($options, 'sc_ptable_item', 'Items', array(
			'border' => true,
			'font' => true,
			'bg' => true,
		));

		customizationOpts($options, 'sc_ptable_button', 'Button', array(
			'font' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		customizationOpts($options, 'sc_ptable_top', 'Top Box', array(
			'font' => true,
			'bg' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Pricing Table Featured', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'sc_ptablefeat_plan', 'Title', array(
			'font' => true,
			'bg' => true,
		));

		customizationOpts($options, 'sc_ptablefeat_price', 'Price', array(
			'font' => true,
			'bg' => true,
		));

		customizationOpts($options, 'sc_ptablefeat_time', 'Time', array(
			'font' => true,
		));

		customizationOpts($options, 'sc_ptablefeat_item', 'Items', array(
			'border' => true,
			'font' => true,
			'bg' => true,
		));

		customizationOpts($options, 'sc_ptablefeat_button', 'Button', array(
			'font' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));