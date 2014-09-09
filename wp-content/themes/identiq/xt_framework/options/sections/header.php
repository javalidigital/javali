<?php

	/* Header
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Header', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Header Full Background', 'options_framework_theme'),
		'desc' => __('Upload header full background.', 'options_framework_theme'),
		'id' => 'header_bg',
		'std' => $header_bg,
		'type' => 'background' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Header Markup', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Header Content', 'options_framework_theme'),
		'desc' => __('Write your own header content.', 'options_framework_theme'),
		'id' => 'header_content',
		'std' => '[xt_big_text tag="h1" align="center"]WE CREATE BEAUTIFUL THEMES FOR

<strong>STARTUPS</strong> &amp; <strong>LEADING BRANDS</strong>[/xt_big_text]

[xt_lead_text align="center"]We are award winning interactive agency. We bring a personal and effective approach to every project we work on, which is why our clients love us and why they keep coming back.[/xt_lead_text]
<p style="text-align: center;">[xt_button style="flat" size="medium" href="#" target="_self" color="default" type="image"]GET STARTED[/xt_button]</p>',
		'type' => 'editor');

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Header Callout', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Callout Content', 'options_framework_theme'),
		'desc' => __('Write your own header callout content.', 'options_framework_theme'),
		'id' => 'header_callout',
		'std' => '[xt_callout style="minimal" title="KUTCHER STUDIO PARALLAX WP THEME. JUST $40." href="#" btntext="BUY IT NOW" icon="tags" btnstyle="flat" btnsize="large" target="_blank" btnpos="right"]

Kutcher Studio is a grid-based single page responsive template for photostudio, creative or digital agency.
[/xt_callout]',
		'type' => 'editor');

		/***********************************/
		/***********************************/
/*
		$options[] = array(
		'name' => __('Main Menu', 'options_framework_theme'),
		'type' => 'subheading');
*/

		/*
		$options[] = array(
		'name' => __('Menu Height', 'options_framework_theme'),
		'desc' => __('Define the menu height, number only. Default: 80', 'options_framework_theme'),
		'id' => 'menu_height',
		'std' => '80',
		'type' => 'text' );
		*/

		/*
		$options[] = array(
			'name' => __('Enable Fixed Header?', 'options_framework_theme'),
			'desc' => __('Check it turn header fixed at page\'s top even after scroll down.', 'options_framework_theme'),
			'id' => 'header_fixed',
			'std' => '1',
			'type' => 'checkbox');
		*/
/*
		$options[] = array( 'name' => 'Main Menu Fonts',
		'desc' => 'Configure the fonts of main menu (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'main_menu_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Main Menu Link Hover', 'options_framework_theme'),
		'desc' => __('Select the color to main menu link in hover status.', 'options_framework_theme'),
		'id' => 'main_menu_link_hover',
		'std' => '',
		'type' => 'color' );

		customizationOpts($options, 'main_menu_selected', 'Main Menu Link Selected', array(
			'border' => true,
		));

		customizationOpts($options, 'main_select', 'Select Menu', array(
			'bg' => true,
			'color_a' => true,
			'border' => true,
		));
*/

		/***********************************/
		/***********************************/
/*
		$options[] = array(
		'name' => __('Sub Menu', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Sub Menu Background', 'options_framework_theme'),
		'desc' => __('Define sub menu background.', 'options_framework_theme'),
		'id' => 'sub_menu_bg',
		'std' => '', // use something like #2accee
		'type' => 'color' );

		$options[] = array(
		'name' => __('Sub Menu Arrow Color', 'options_framework_theme'),
		'desc' => __('Define sub menu top arrow color.', 'options_framework_theme'),
		'id' => 'sub_menu_border',
		'std' => '', // use something like #2accee
		'type' => 'color' );

		$options[] = array(
		'name' => __('Sub Menu Border Bottom', 'options_framework_theme'),
		'desc' => __('Define sub menu border bottom color.', 'options_framework_theme'),
		'id' => 'sub_menu_border_bottom',
		'std' => '', // use something like #2accee
		'type' => 'color' );


		$options[] = array( 'name' => 'Sub Menu Fonts',
		'desc' => 'Configure the fonts of sub menu (size, font family, style, line height and color)',
		'id' => 'sub_menu_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts)
		);

		$options[] = array(
		'name' => __('Sub Menu Link Hover', 'options_framework_theme'),
		'desc' => __('Select the color to sub menu link in hover status.', 'options_framework_theme'),
		'id' => 'sub_menu_link_hover',
		'std' => '', // use something like #2accee
		'type' => 'color' );

		customizationOpts($options, 'sub_menu_link', 'Sub Menu Link', array(
			'bg_hover' => true,
		));
*/