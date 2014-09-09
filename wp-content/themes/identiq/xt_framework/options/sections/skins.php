<?php

	/* Skins
	========================*/

		/***********************************/
		/***********************************/
/*
		$options[] = array(
		'name' => __('Ready Skins', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
			'name' => "Default Skins",
			'desc' => "Select a default skin to theme",
			'id' => "default_skin",
			'std' => "default",
			'type' => "images",
			'options' => array(
				'default' => $imagepath . 'default.png',
				'green_wood' => $imagepath . 'green_wood.png',
				'yellow_dark' => $imagepath . 'yellow_dark.png',
				'red_transparent' => $imagepath . 'red_transparent.png',
				'light_blue_wood' => $imagepath . 'light_blue_wood.png',
				'gray_scale_dark' => $imagepath . 'gray_scale_dark.png',
				'orange_light' => $imagepath . 'orange_light.png',
				'brown_wood' => $imagepath . 'brown_wood.png',
				'pink_light' => $imagepath . 'pink_light.png',
				'navy_light' => $imagepath . 'navy_light.png',
				'dark' => $imagepath . 'dark.png',
				//'blue_dark' => $imagepath . 'blue_dark.png',
				)
		);
*/

		/***********************************/
		/***********************************/

		$options[] = array(
		'name' => __('Fast Custom Skin', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Custom Base Color', 'options_framework_theme'),
		'desc' => __('Select the base color to build a custom skin.', 'options_framework_theme'),
		'id' => 'base_color',
		'std' => '',
		'type' => 'color' );

/*
		$options[] = array(
			'name' => __('Base Scheme', 'options_framework_theme'),
			'desc' => __('Select the base scheme to be applied.', 'options_framework_theme'),
			'id' => 'base_color_scheme',
			'std' => 'light',
			'type' => 'select',
			'class' => 'mini', //mini, tiny, small
			'options' => array('light' => 'Light', 'dark' => 'Dark'),
			);
*/