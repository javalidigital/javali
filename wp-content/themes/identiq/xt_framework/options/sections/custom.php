<?php

	/* Custom
	========================*/

	$options[] = array(
		'name' => __('Custom', 'options_framework_theme'),
		'type' => 'heading');

		$options[] = array(
		'name' => __('Custom CSS', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Custom CSS', 'options_framework_theme'),
		'desc' => __('Write your own Custom CSS rules', 'options_framework_theme'),
		'id' => 'custom_css',
		'std' => '',
		'type' => 'textarea');