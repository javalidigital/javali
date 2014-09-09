<?php

	/* Pages
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Cart Content', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_cart_table', 'Table', array(
			'border' => true,
		));

		customizationOpts($options, 'woo_cart_table_th', 'Table Head', array(
			'font' => true,
			'bg' => true,
		));

		customizationOpts($options, 'woo_cart_table_td', 'Table Products', array(
			'border' => true,
			'font' => true,
			'bg' => true,
			'color_a' => true,
			'color_a_hover' => true,
		));

		customizationOpts($options, 'woo_cart_table_tfoot', 'Table Footer', array(
			'border' => true,
			'bg' => true,
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Cart Titles', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_cart_titles', 'Titles', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Cart Totals', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_cart_totals_table', 'Table', array(
			'border' => true,
		));

		customizationOpts($options, 'woo_cart_totals_table_th', 'Table Head', array(
			'font' => true,
			'bg' => true,
		));

		customizationOpts($options, 'woo_cart_totals_table_td', 'Table Products', array(
			'border' => true,
			'font' => true,
			'bg' => true,
		));

		customizationOpts($options, 'woo_cart_totals_table_tfoot', 'Table Footer', array(
			'border' => true,
			'bg' => true,
			'font' => true,
		));