<?php

	/* Down Footer
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Down Footer', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' =>  __('Down Footer Background', 'options_framework_theme'),
		'desc' => __('Define here the down footer background', 'options_framework_theme'),
		'id' => 'down_footer_bg',
		'std' => $content_bg,
		'type' => 'background' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Footer Copyright Text', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Copyright Text', 'options_framework_theme'),
		'desc' => __('Define copyright text that will appear at down footer.', 'options_framework_theme'),
		'id' => 'down_footer_text',
		'std' => '&copy; 2013 Identiq Interactive Ltd. Powered by <a href="#">WordPress</a>. <a href="#">Identiq Theme</a> by <a href="#">TVDA and XiaoThemes</a>.',
		'type' => 'textarea' );

		$options[] = array( 'name' => 'Copyright Text Font',
		'desc' => 'Configure the fonts of copyright text (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'down_footer_text_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		customizationOpts($options, 'copyright_text', 'Copyright Text', array(
			'color_a' => true,
			'color_a_hover' => true,
		));