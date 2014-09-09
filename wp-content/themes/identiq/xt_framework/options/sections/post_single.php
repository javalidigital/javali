<?php

	/* Post
	========================*/

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Tags', 'options_framework_theme'),
		'type' => 'subheading');

		customizationOpts($options, 'post_tags', 'Tags', array(
			'border' => true,
		));

		$options[] = array(
			'name' => __('Disable Tags Section?', 'options_framework_theme'),
			'desc' => __('Check it turn off tags section.', 'options_framework_theme'),
			'id' => 'post_tags_disabled',
			'std' => '0',
			'type' => 'checkbox');

		$options[] = array( 'name' => 'Tags Font',
		'desc' => 'Configure the fonts of tags section (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'post_tags',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Tag Link Normal', 'options_framework_theme'),
		'desc' => __('Define the text color of tag link.', 'options_framework_theme'),
		'id' => 'post_tags_link',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Tag Link Hover', 'options_framework_theme'),
		'desc' => __('Define the text color of tag link when hovered.', 'options_framework_theme'),
		'id' => 'post_tags_hover',
		'std' => '', 
		'type' => 'color' );

		customizationOpts($options, 'post_tags', 'Tag Link', array(
			'bg' => true,
			'bg_hover' => true,
		));


		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Share Post', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
			'name' => __('Disable Share Post Section?', 'options_framework_theme'),
			'desc' => __('Check it turn off share post section.', 'options_framework_theme'),
			'id' => 'post_share_disabled',
			'std' => '0',
			'type' => 'checkbox');

		$options[] = array( 'name' => 'Share Post Font',
		'desc' => 'Configure the fonts of Share Post section (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'post_share',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Social Icon Text', 'options_framework_theme'),
		'desc' => __('Define the text color of social link.', 'options_framework_theme'),
		'id' => 'post_share_color',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Social Icon Background', 'options_framework_theme'),
		'desc' => __('Define the background color of social link.', 'options_framework_theme'),
		'id' => 'post_share_bg',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Social Icon Text Hover', 'options_framework_theme'),
		'desc' => __('Define the text color of social link when hovered.', 'options_framework_theme'),
		'id' => 'post_share_hover',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Social Icon Background Hover', 'options_framework_theme'),
		'desc' => __('Define the background color of social link when hovered.', 'options_framework_theme'),
		'id' => 'post_share_bg_hover',
		'std' => '', 
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Author Box', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
			'name' => __('Disable Author Box Section?', 'options_framework_theme'),
			'desc' => __('Check it turn off author box section.', 'options_framework_theme'),
			'id' => 'post_authorbox_disabled',
			'std' => '0',
			'type' => 'checkbox');

		$options[] = array( 'name' => 'Author Name Font',
		'desc' => 'Configure the fonts of Author name section (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'post_authorbox_name',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array( 'name' => 'Author Biography Font',
		'desc' => 'Configure the fonts of Author biography section (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'post_authorbox_bio',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Author Box Background', 'options_framework_theme'),
		'desc' => __('Define the background color of author box.', 'options_framework_theme'),
		'id' => 'post_authorbox_bg',
		'std' => '', 
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Related Posts', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array(
			'name' => __('Disable Related Posts Section?', 'options_framework_theme'),
			'desc' => __('Check it turn off related posts section.', 'options_framework_theme'),
			'id' => 'post_relatedposts_disabled',
			'std' => '0',
			'type' => 'checkbox');

		$options[] = array( 'name' => 'Related Posts Heading Font',
		'desc' => 'Configure the fonts of Related Posts Heading section (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'post_relatedposts',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array( 'name' => 'Related Posts Items Font',
		'desc' => 'Configure the fonts of Related Posts Items section (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'post_relatedposts_items',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Related Posts Items Hover', 'options_framework_theme'),
		'desc' => __('Define the text color of related posts items when hovered.', 'options_framework_theme'),
		'id' => 'post_relatedposts_hover',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Related Posts Arrow Color', 'options_framework_theme'),
		'desc' => __('Define the color of arrows that are used in each related post item.', 'options_framework_theme'),
		'id' => 'post_relatedposts_arrow',
		'std' => '', 
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Comments', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Comments Heading Font',
		'desc' => 'Configure the fonts of comments heading section (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'post_comments',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Author Tag Background', 'options_framework_theme'),
		'desc' => __('Define the background color of AUTHOR tag below author gravatar.', 'options_framework_theme'),
		'id' => 'post_comments_authortag_bg',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Author Tag Color', 'options_framework_theme'),
		'desc' => __('Define the text color of AUTHOR tag below author gravatar.', 'options_framework_theme'),
		'id' => 'post_comments_authortag_color',
		'std' => '', 
		'type' => 'color' );

		$options[] = array( 'name' => 'Comment Author Font',
		'desc' => 'Configure the fonts of comments author section (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'post_comments_author',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Author Name Color', 'options_framework_theme'),
		'desc' => __('Define the text color of author name.', 'options_framework_theme'),
		'id' => 'post_comments_author_color',
		'std' => '', 
		'type' => 'color' );

		$options[] = array( 'name' => 'Comment Content Font',
		'desc' => 'Configure the fonts of comments content section (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'post_comments_content',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Comment Content Link Color', 'options_framework_theme'),
		'desc' => __('Define the text color of comment content link.', 'options_framework_theme'),
		'id' => 'post_comments_content_color',
		'std' => '', 
		'type' => 'color' );

		$options[] = array( 'name' => 'Comment Reply Font',
		'desc' => 'Configure the fonts of comment reply section (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'post_comments_reply',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Comment Reply Background', 'options_framework_theme'),
		'desc' => __('Define the background color of a single comment reply block.', 'options_framework_theme'),
		'id' => 'post_comments_reply_bg',
		'std' => '', 
		'type' => 'color' );

		/***********************************/
		/***********************************/
		$options[] = array(
		'name' => __('Leave a Comment', 'options_framework_theme'),
		'type' => 'subheading');

		$options[] = array( 'name' => 'Leave a Comment Heading Font',
		'desc' => 'Configure the fonts of Leave a Comment heading section (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'post_lac',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array( 'name' => 'Logged in as... Heading Font',
		'desc' => 'Configure the fonts of Leave a Comment heading section (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => 'post_lac_logged',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);

		$options[] = array(
		'name' => __('Logged in as... Link Color', 'options_framework_theme'),
		'desc' => __('Define the text color of Logged in as... links.', 'options_framework_theme'),
		'id' => 'post_lac_logged_color',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Input Forms Background', 'options_framework_theme'),
		'desc' => __('Define the background of inputs, like text fields, textareas and others.', 'options_framework_theme'),
		'id' => 'post_lac_input_bg',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Input Forms Border Color', 'options_framework_theme'),
		'desc' => __('Define the border of inputs, like text fields, textareas and others.', 'options_framework_theme'),
		'id' => 'post_lac_input_border',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Input Forms Text Color', 'options_framework_theme'),
		'desc' => __('Define the text color of inputs, like text fields, textareas and others.', 'options_framework_theme'),
		'id' => 'post_lac_input_color',
		'std' => '', 
		'type' => 'color' );

		$options[] = array(
		'name' => __('Submit Background Color', 'options_framework_theme'),
		'desc' => __('Select the background color to be used in buttons.', 'options_framework_theme'),
		'id' => 'post_lac_btn_bg',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Submit Background Text Color', 'options_framework_theme'),
		'desc' => __('Select the text color to be used in buttons.', 'options_framework_theme'),
		'id' => 'post_lac_btn_text',
		'std' => '',
		'type' => 'color' );

		$options[] = array(
		'name' => __('Submit Background Color Hover', 'options_framework_theme'),
		'desc' => __('Select the background color to be used in buttons at hover.', 'options_framework_theme'),
		'id' => 'post_lac_btn_bg_hover',
		'std' => '',
		'type' => 'color' );		

		$options[] = array(
		'name' => __('Submit Text Color Hover', 'options_framework_theme'),
		'desc' => __('Select the text color to be used in buttons at hover.', 'options_framework_theme'),
		'id' => 'post_lac_btn_text_hover',
		'std' => '',
		'type' => 'color' );