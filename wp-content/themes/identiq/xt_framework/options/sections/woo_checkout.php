<?php

	/* Pages
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Message Boxes', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_check_msg', 'Message Box', array(
			'font' => true,
			'bg' => true,
			'color_a' => true,
			'color_a_hover' => true,
		));

		customizationOpts($options, 'woo_check_msg_inner', 'Message Box Content', array(
			'bg' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Titles', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_check_titles', 'Titles', array(
			'font' => true,
		));

		customizationOpts($options, 'woo_check_shipto', '"Ship To..."', array(
			'color' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Form', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_check_label', 'Label', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Payment Box', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_check_paybox', 'Payment Box', array(
			'font' => true,
			'bg' => true,
		));

		customizationOpts($options, 'woo_check_paybox_desc', 'Payment Description Box', array(
			'font' => true,
			'bg' => true,
		));