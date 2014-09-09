<?php

	/* General
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Logo', 'options_framework_theme'),
		'type' => 'subheading');

		// Logo
		$options[] = array(
		'name' => __('Logo', 'options_framework_theme'),
		'desc' => __('Upload the default logo', 'options_framework_theme'),
		'id' => 'logo',
		'type' => 'upload');

		// Logo Retina
		$options[] = array(
		'name' => __('Logo Retina', 'options_framework_theme'),
		'desc' => __('Upload the optional retina ready logo, upload the double sized logo here', 'options_framework_theme'),
		'id' => 'logo_retina',
		'type' => 'upload');

		$options[] = array(
		'name' => __('Logo Margin Left', 'options_framework_theme'),
		'desc' => __('Apply optional left margin to logo. Only number, example: 10', 'options_framework_theme'),
		'id' => 'logo_margin_left',
		'std' => '',
		'type' => 'text' );

		$options[] = array(
		'name' => __('Logo Margin Top', 'options_framework_theme'),
		'desc' => __('Apply optional top margin to logo. Only number, example: 10', 'options_framework_theme'),
		'id' => 'logo_margin_top',
		'std' => '',
		'type' => 'text' );

		$options[] = array(
		'name' => __('Logo Margin Bottom', 'options_framework_theme'),
		'desc' => __('Apply optional bottom margin to logo. Only number, example: 10', 'options_framework_theme'),
		'id' => 'logo_margin_bottom',
		'std' => '',
		'type' => 'text' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Secondary Logo', 'options_framework_theme'),
		'type' => 'subheading');

		// Logo
		$options[] = array(
		'name' => __('Secondary Logo', 'options_framework_theme'),
		'desc' => __('Upload the default logo', 'options_framework_theme'),
		'id' => 'logo_secondary',
		'type' => 'upload');

		// Logo Retina
		$options[] = array(
		'name' => __('Secondary Logo Retina', 'options_framework_theme'),
		'desc' => __('Upload the optional retina ready logo, upload the double sized logo here', 'options_framework_theme'),
		'id' => 'logo_retina_secondary',
		'type' => 'upload');

		$options[] = array(
		'name' => __('Secondary Logo Margin Left', 'options_framework_theme'),
		'desc' => __('Apply optional left margin to logo. Only number, example: 10', 'options_framework_theme'),
		'id' => 'logo_margin_left_secondary',
		'std' => '',
		'type' => 'text' );

		$options[] = array(
		'name' => __('Secondary Logo Margin Top', 'options_framework_theme'),
		'desc' => __('Apply optional top margin to logo. Only number, example: 10', 'options_framework_theme'),
		'id' => 'logo_margin_top_secondary',
		'std' => '',
		'type' => 'text' );

		$options[] = array(
		'name' => __('Secondary Logo Margin Bottom', 'options_framework_theme'),
		'desc' => __('Apply optional bottom margin to logo. Only number, example: 10', 'options_framework_theme'),
		'id' => 'logo_margin_bottom_secondary',
		'std' => '',
		'type' => 'text' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Favicons', 'options_framework_theme'),
		'type' => 'subheading');

		// Favicon
		$options[] = array(
		'name' => __('Default Favicon', 'options_framework_theme'),
		'desc' => __('Upload default favicon to desktop and fallback (16x16)', 'options_framework_theme'),
		'id' => 'favicon_default',
		'type' => 'upload');

		// Favicon Non Retina iPhone, iPod Touch
		$options[] = array(
		'name' => __('Non-Retina iPhone, iPod Touch and Android 2.1+ Favicon', 'options_framework_theme'),
		'desc' => __('Upload non-retina favicon to iPhone, iPod Touch and Android 2.1+ (57x57)', 'options_framework_theme'),
		'id' => 'favicon_nonretina_iphone',
		'type' => 'upload');

		// Favicon Non Retina iPad
		$options[] = array(
		'name' => __('Non-Retina iPad Favicon', 'options_framework_theme'),
		'desc' => __('Upload non-retina favicon to iPad (72x72)', 'options_framework_theme'),
		'id' => 'favicon_nonretina_ipad',
		'type' => 'upload');

		// Favicon Retina iPhone
		$options[] = array(
		'name' => __('Retina iPhone Favicon', 'options_framework_theme'),
		'desc' => __('Upload retina favicon to iPhone (114x114)', 'options_framework_theme'),
		'id' => 'favicon_retina_iphone',
		'type' => 'upload');

		// Favicon Retina iPad
		$options[] = array(
		'name' => __('Retina iPad Favicon', 'options_framework_theme'),
		'desc' => __('Upload retina favicon to iPad (144x144)', 'options_framework_theme'),
		'id' => 'favicon_retina_ipad',
		'type' => 'upload');

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Analytics', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Google Analytics Track Code', 'options_framework_theme'),
		'desc' => __('Type your Google Analytics Track code, like: UA-4045XXXX-X. <a href="https://support.google.com/analytics/answer/1008080?hl=en" target="_blank">Help</a>.', 'options_framework_theme'),
		'id' => 'gcode',
		'std' => '', // use something like #2accee
		'type' => 'text' );