<?php

	/* Pages
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Cart Widget', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_widget_cart', 'Widget Cart', array(
			'border' => true,
			'color' => true,
		));

		customizationOpts($options, 'woo_widget_cart_amount', 'Widget Cart Amount', array(
			'color' => true,
		));
		
		customizationOpts($options, 'woo_widget_cart_del', 'Widget Cart Del', array(
			'color' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Filter Widget', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_widget_filter', 'Widget Filter', array(
			'border' => true,
			'bg' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Filtered Nav', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_widget_filter_nav', 'Widget Filtered Nav', array(
			'bg' => true,
			'color' => true,
		));