<?php

	/* Blog
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Post', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Post Border Color', 'options_framework_theme'),
		'desc' => __('Define the border color of post.', 'options_framework_theme'),
		'id' => 'blog_post_border',
		'std' => '', 
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Mansory Post', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Post Mansory Background Color', 'options_framework_theme'),
		'desc' => __('Define the background color of mansory layout post.', 'options_framework_theme'),
		'id' => 'blog_post_mansory_bg',
		'std' => '', 
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Thumbnail', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Thumbnail Hover Background', 'options_framework_theme'),
		'desc' => __('Define the background color of thumbnail when hovered.', 'options_framework_theme'),
		'id' => 'blog_thumb_bg',
		'std' => '', 
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Icon', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
		'name' => __('Icon Background', 'options_framework_theme'),
		'desc' => __('Define the background color of post type icon.', 'options_framework_theme'),
		'id' => 'blog_pt_bg',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Icon Color', 'options_framework_theme'),
		'desc' => __('Define the color of post type icon.', 'options_framework_theme'),
		'id' => 'blog_pt_color',
		'std' => '', 
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Title', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Post Title Font',
		'desc' => 'Configure the fonts of post title (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'blog_title_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Post Title Hover', 'options_framework_theme'),
		'desc' => __('Define the color of post title when hovered.', 'options_framework_theme'),
		'id' => 'blog_title_hover',
		'std' => '', 
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Meta', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Post Meta',
		'desc' => 'Configure the fonts of post meta (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'blog_meta_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Post Meta Links', 'options_framework_theme'),
		'desc' => __('Define the color of post meta links.', 'options_framework_theme'),
		'id' => 'blog_meta_color',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Post Meta Links Hover', 'options_framework_theme'),
		'desc' => __('Define the color of post meta links when hovered.', 'options_framework_theme'),
		'id' => 'blog_meta_hover',
		'std' => '', 
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Excerpt', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Post Excerpt',
		'desc' => 'Configure the fonts of post excerpt (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'blog_excerpt_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Read More Button', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Read More Link',
		'desc' => 'Configure the fonts of post read more link (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'blog_readmore_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Read More Link Hover', 'options_framework_theme'),
		'desc' => __('Define the color of read more link when hovered.', 'options_framework_theme'),
		'id' => 'blog_readmore_hover',
		'std' => '', 
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Pagination', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Pagination Button',
		'desc' => 'Configure the fonts of pagination link (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'blog_pagination_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Pagination Background', 'options_framework_theme'),
		'desc' => __('Define the background color of pagination link when hovered.', 'options_framework_theme'),
		'id' => 'blog_pagination_bg',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Pagination Text Hover', 'options_framework_theme'),
		'desc' => __('Define the text color of pagination link when hovered.', 'options_framework_theme'),
		'id' => 'blog_pagination_text_hover',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Pagination Background Hover', 'options_framework_theme'),
		'desc' => __('Define the background color of pagination link when hovered.', 'options_framework_theme'),
		'id' => 'blog_pagination_bg_hover',
		'std' => '', 
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Quote Post', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'blog_quote_post', 'Quote Post', array(
			'border' => true,
			'font' => true,
			'bg' => true,
			'bg_hover' => true,
		));

		$options[] = array(
		'name' => __('Quote Post Text Color Hover', 'options_framework_theme'),
		'desc' => __('Define the color of quote post text at hover.', 'options_framework_theme'),
		'id' => 'blog_quote_post_text_hover',
		'std' => '', 
		'type' => 'color' );

		customizationOpts($options, 'blog_quote_author', 'Quote Author', array(
			'font' => true,
		));