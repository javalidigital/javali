<?php

	/* Pages
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Results Number', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_shop_order', '"Showing..."', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Product Listing', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_shop_thumb', 'Thumbnail', array(
			'border' => true,
			'border_hover' => true,
		));

		customizationOpts($options, 'woo_shop_title', 'Title', array(
			'font' => true,
		));

		customizationOpts($options, 'woo_shop_stars', 'Stars', array(
			'color' => true,
			'color_a' => true,
			'color_a_hover' => true,
		));

		customizationOpts($options, 'woo_shop_price', 'Price', array(
			'font' => true,
		));

		customizationOpts($options, 'woo_shop_price_ins', 'Price On Sale', array(
			'color' => true,
		));

		customizationOpts($options, 'woo_shop_price_del', 'Price Normal', array(
			'color' => true,
		));

		customizationOpts($options, 'woo_shop_sale', 'Sale Circle', array(
			'bg' => true,
			'color' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Navigation', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_shop_nav', 'Navigation', array(
			'border' => true,
			'font' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));