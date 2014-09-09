<?php

	/* Pages
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Thumbnails', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_prod_thumb', 'Thumbnail', array(
			'border' => true,
		));

		customizationOpts($options, 'woo_prod_sale', 'Sale Circle', array(
			'bg' => true,
			'color' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Product Details', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_prod_title', 'Title', array(
			'font' => true,
		));

		customizationOpts($options, 'woo_prod_price', 'Price', array(
			'font' => true,
		));

		customizationOpts($options, 'woo_prod_price_del', 'Price Off', array(
			'color' => true,
		));

		customizationOpts($options, 'woo_prod_price_ins', 'Price Sale', array(
			'color' => true,
		));

		customizationOpts($options, 'woo_prod_summary', 'Excerpt', array(
			'font' => true,
		));

		customizationOpts($options, 'woo_prod_links', 'Links', array(
			'color_a' => true,
			'color_a_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Quantity Input', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_prod_input', 'Quantity Input', array(
			'border' => true,
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Tabs', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_prod_tabs', 'Tabs', array(
			'border' => true,
			'color_a' => true,
			'color_a_hover' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Tab Content', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_prod_content_h1', 'Heading 1', array(
			'font' => true,
		));

		customizationOpts($options, 'woo_prod_content_h2', 'Heading 2', array(
			'font' => true,
		));

		customizationOpts($options, 'woo_prod_content_h3', 'Heading 3', array(
			'font' => true,
		));

		customizationOpts($options, 'woo_prod_content_h4', 'Heading 4', array(
			'font' => true,
		));

		customizationOpts($options, 'woo_prod_content_h5', 'Heading 5', array(
			'font' => true,
		));

		customizationOpts($options, 'woo_prod_content_h6', 'Heading 6', array(
			'font' => true,
		));

		customizationOpts($options, 'woo_prod_content_p', 'Paragraph', array(
			'font' => true,
		));

		customizationOpts($options, 'woo_prod_content_li', 'List', array(
			'font' => true,
		));

		customizationOpts($options, 'woo_prod_content_link', 'Link', array(
			'color_a' => true,
			'color_a_hover' => true,
		));

		customizationOpts($options, 'woo_prod_content_table', 'Table', array(
			'border' => true,
			'color' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Tab Review', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_prod_top_stars', 'Top Stars', array(
			'color' => true,
			'color_a' => true,
		));

		customizationOpts($options, 'woo_prod_comment', 'Comment', array(
			'border' => true,
			'bg' => true,
			'color' => true,
		));

		customizationOpts($options, 'woo_prod_comment_stars', 'Comment Stars', array(
			'color' => true,
			'color_a' => true,
		));

		customizationOpts($options, 'woo_prod_review_title', 'Add a Review Title', array(
			'font' => true,
		));

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Related and Upsells', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'woo_prod_relup_title', 'Related/Upsells Title', array(
			'font' => true,
		));