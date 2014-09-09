<?php

	/* Pages
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Products Display', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Products per page...', 'options_framework_theme'),
		'desc' => __('How many products will be showed at Shop page.', 'options_framework_theme'),
		'id' => 'woo_products_per_page',
		'std' => '8',
		'type' => 'text' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('My Account Login', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_login_box', 'Login Box', array(
			'bg' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Woo Inputs', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_input', 'Input', array(
			'border' => true,
			'border_hover' => true,
			'font' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Woo Messages', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_msg', 'Message Box', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Button', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_btn', 'Button', array(
			'font' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Button Alt', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_btn_alt', 'Button Alt', array(
			'font' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));