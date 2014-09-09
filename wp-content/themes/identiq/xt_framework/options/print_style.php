<?php
/*
 *	Print style at wp_head hook with all custom changes made! *
*/

require_once('helpers.php');


add_action('wp_head', 'xt_print_custom_styles');
function xt_print_custom_styles() {
	?>
	<style type="text/css">

	/* General */

		#logo {
			display: none;
		}

		<?php if(of_get_option('logo') != '') : ?>
			#logo {
				background-image: url('<?php echo of_get_option('logo'); ?>');
				background-repeat: no-repeat;
				overflow: hidden;
				text-indent: -9999px;

				<?php 
					$logo = str_replace(' ', '%20', of_get_option('logo'));
					list($width, $height) = @getimagesize( $logo ) ;
				?>

				width: <?php echo $width; ?>px;
				height: <?php echo $height; ?>px;
				display: block;
			}
		<?php endif; ?>

		<?php if(of_get_option('logo_retina') != '') : ?>
			@media all and (-webkit-min-device-pixel-ratio: 1.5) {
				#logo {
					background-image: url('<?php echo of_get_option('logo_retina'); ?>');
					background-size: <?php echo $width; ?>px <?php echo $height; ?>px;
				}
			}
		<?php endif; ?>

		<?php if(of_get_option('logo_margin_left') != '') : ?>
			#logo {
				margin-left: <?php echo of_get_option('logo_margin_left'); ?>px;
			}
		<?php endif; ?>

		<?php if(of_get_option('logo_margin_top') != '') : ?>
			#logo {
				margin-top: <?php echo of_get_option('logo_margin_top'); ?>px;
			}
		<?php endif; ?>

		<?php if(of_get_option('logo_margin_bottom') != '') : ?>
			#logo {
				margin-bottom: <?php echo of_get_option('logo_margin_bottom'); ?>px;
			}
		<?php endif; ?>

		/* Logo Secondary Styles */

		#logo-secondary {
			display: none;
		}

		<?php if(of_get_option('logo_secondary') != '') : ?>
			#logo-secondary {
				background-image: url('<?php echo of_get_option('logo_secondary'); ?>');
				background-repeat: no-repeat;
				overflow: hidden;
				text-indent: -9999px;

				<?php 
					$logo = str_replace(' ', '%20', of_get_option('logo_secondary'));
					list($width, $height) = @getimagesize( $logo ) ;
				?>

				width: <?php echo $width; ?>px;
				height: <?php echo $height; ?>px;
				display: block;
			}
		<?php endif; ?>

		<?php if(of_get_option('logo_retina_secondary') != '') : ?>
			@media all and (-webkit-min-device-pixel-ratio: 1.5) {
				#logo-secondary {
					background-image: url('<?php echo of_get_option('logo_retina_secondary'); ?>');
					background-size: <?php echo $width; ?>px <?php echo $height; ?>px;
				}
			}
		<?php endif; ?>

		<?php if(of_get_option('logo_margin_left_secondary') != '') : ?>
			#logo-secondary {
				margin-left: <?php echo of_get_option('logo_margin_left_secondary'); ?>px;
			}
		<?php endif; ?>

		<?php if(of_get_option('logo_margin_top_secondary') != '') : ?>
			#logo-secondary {
				margin-top: <?php echo of_get_option('logo_margin_top_secondary'); ?>px;
			}
		<?php endif; ?>

		<?php if(of_get_option('logo_margin_bottom_secondary') != '') : ?>
			#logo-secondary {
				margin-bottom: <?php echo of_get_option('logo_margin_bottom_secondary'); ?>px;
			}
		<?php endif; ?>



		/* Main Background */

		<?php if( of_get_option('pattern') != 'default' && of_get_option('pattern') != '' ) : ?>

			body {
				background: url(<?php echo XT_THEME_DIR; ?>/images/patterns/<?php echo of_get_option('pattern'); ?>.png) repeat;
			}

		<?php endif; ?>

		<?php xt_printBg('body_bg', 'body'); ?>

		<?php if(of_get_option('enable_cover')) : ?>
			body {
				-webkit-background-size: cover !important;
				-moz-background-size: cover !important;
				-o-background-size: cover !important;
				background-size: cover !important;
			}
		<?php endif; ?>

		/* Fast Skin System */
		<?php

		$_baseColor = '';
		$_darkerColor = '';
		$_lighterColor = '';

		// Custom Base color
		if( of_get_option('base_color') != '') {
			$_baseColor = of_get_option('base_color');
			$_darkerColor = xt_getColor($_baseColor, -30);
			$_lighterColor = xt_getColor($_baseColor, 30);

			?>

				/* Custom Base Color */

::-moz-selection {
	background: <?php echo $_baseColor; ?>;
}

::selection {
	background: <?php echo $_baseColor; ?>;
}

.button.button.button-normal.button-default, .button.button.button-default,
.widget_ns_mailchimp input[type="submit"], .widget_ns_mailchimp input[type="submit"]:active,
#respond input[type="submit"], .wpcf7 .wpcf7-form .wpcf7-submit,
.btn, #searchsubmit,
.btn.white:hover, .btn.white:hover,
#copyright,
body .navigation .page-numbers a.active,
.sidebar .widget .tagcloud a:hover,
#footer .widget .tagcloud a:hover,
.services,
.post-single .post-tags p a:hover,
.post-single .share-post .share-icons a:hover,
.comments .blog_comment_user span,
.comments .blog_comment_det .blog_comment_name_det .comment-reply-link:hover,
body .flex-control-paging li a:hover, .flex-control-paging li a.flex-active,
body .accordions .accordion-title a:hover,
body .toggle .toggle-title a:hover,
body .list_carousel .prev:hover, 
body .list_carousel .next:hover,
body .xt-posts-list-wrapper .post-item .post-format-icon span,
body .member-block .member-social .zocial-icon-wrap:hover,
body .skill-bar .skill-wrapper .skill-progress,
body .xt-column-pricing .pricing-button .button:hover,
body .xt-column-pricing.pricing-featured h1,
body .xt-column-pricing.pricing-featured .pricing-button a,
body .zocial-icon-wrap:hover,
body ul.xt_tabs_button li.current a,
body ul.xt_tabs_vertical li.current a,
body .styled-box.styled-box-2,
body .process-circle.direction,
body a.heart-circle,
body .woocommerce a.button, 
body .woocommerce button.button, 
body .woocommerce input.button, 
body .woocommerce #respond input#submit, 
body .woocommerce #content input.button, 
body.woocommerce-page a.button, 
body.woocommerce-page button.button, 
body.woocommerce-page input.button, 
body.woocommerce-page #respond input#submit, 
body.woocommerce-page #content input.button,
body.woocommerce nav.woocommerce-pagination ul li a, 
body.woocommerce nav.woocommerce-pagination ul li span, 
body.woocommerce #content nav.woocommerce-pagination ul li a, 
body.woocommerce #content nav.woocommerce-pagination ul li span, 
body.woocommerce-page nav.woocommerce-pagination ul li a, 
body.woocommerce-page nav.woocommerce-pagination ul li span, 
body.woocommerce-page #content nav.woocommerce-pagination ul li a, 
body.woocommerce-page #content nav.woocommerce-pagination ul li span,
body.woocommerce a.button.alt:hover, 
body.woocommerce button.button.alt:hover,
body.woocommerce input.button.alt:hover, 
body.woocommerce #respond input#submit.alt:hover, 
body.woocommerce #content input.button.alt:hover, 
body.woocommerce-page a.button.alt:hover, 
body.woocommerce-page button.button.alt:hover, 
body.woocommerce-page input.button.alt:hover, 
body.woocommerce-page #respond input#submit.alt:hover, 
body.woocommerce-page #content input.button.alt:hover,
body.woocommerce .shipping_calculator h2 a,
body.woocommerce-page .shipping_calculator h2 a,
body.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
body.woocommerce-page .widget_price_filter .ui-slider .ui-slider-range,
body.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, 
body.woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle,
#slidecaption .button.button:hover {
	background: <?php echo $_baseColor; ?>;
}

nav #fluid-nav > li > ul {
	background: <?php echo $_darkerColor; ?>;
}

nav #fluid-nav > li > ul a:hover {
	background: <?php echo $_lighterColor; ?>;
}

nav #fluid-nav > li > ul li.active a {
	color: <?php echo $_lighterColor; ?>;
}

a,
nav #fixed-nav li a:hover,
nav #fixed-nav > li > a:hover, nav #fixed-nav > li:hover > a,
.color-text,
.post .post-title h1 a:hover,
.post .post-meta a:hover,
.post .read-more a:hover,
.sidebar .widget li a,
.sidebar .widget a, .sidebar .widget a:visited,
.profile-social-icons li a:hover,
.social-icons li a:hover,
.post-single .post-details .post-infos .post-title h1 a:hover,
.post.post-single .post-details .post-meta span a:hover,
body .xt-filters-wrapper ul.xt-filters li a:hover, body .xt-filters-wrapper ul.xt-filters li a.current,
.option-set li a:hover,
.option-set li a.selected,
body .block-font-icon .block-icon-wrapper .icon-wrap:hover,
.image-header-wrapper strong,
.big-text a,
.big-text a:visited,
body .xt-wrapper-color-scheme-light a, 
body .xt-wrapper-color-scheme-light a:visited,
body .xt-wrapper-color-scheme-light a:hover,
.woocommerce .summary a:hover,
.woocommerce-page .summary a:hover,
.woocommerce .woocommerce-tabs .panel a:hover,
.woocommerce-page .woocommerce-tabs .panel a:hover,
.woocommerce .addresses .title .edit, .woocommerce-page .addresses .title .edit,
#slidecaption .big-text h1 strong {
	color: <?php echo $_baseColor; ?>;
}

nav #fixed-nav li.current a,
nav #fixed-nav > li > a:hover, nav #fixed-nav > li:hover > a {
	border-bottom: 3px solid <?php echo $_baseColor; ?>;
}

nav#mainnav,
.sidebar .widget_nav_menu .menu li.current-menu-item a,
.sidebar .widget_nav_menu .menu li.current-menu-item a,
.project-wrp:hover,
body ul.xt_tabs_framed li.current a {
	background-color: <?php echo $_baseColor; ?>;
}

nav #fixed-nav > li > ul,
nav #fixed-nav > li > ul > li > ul,
nav #fluid-nav > li > ul,
#twitter-parallax a:hover {
	border-bottom: 2px solid <?php echo $_baseColor; ?>;
}

.section-page #title-wrapper,
hr,
hr.mini,
.post .read-more a, 
.post .read-more a:visited,
.profile,
.post.post-single .post-details .post-meta span a:hover,
body .member-block,
body ul.xt_tabs_framed li.current a,
.big-text a,
.big-text a:visited,
body .xt-wrapper-color-scheme-light a:hover,
body .lead-text a,
body .lead-text a:visited,
.parallax-title a {
	border-bottom: 1px solid <?php echo $_baseColor; ?>;
}

body .xt_tabs_framed_container .panes {
	border-top: 1px solid <?php echo $_baseColor; ?>;
}

body .blockquote {
	border-left: 3px solid <?php echo $_baseColor; ?>;
}

.post .post-meta a:hover,
.sidebar .widget_nav_menu .menu li.current-menu-item a,
.sidebar .widget_nav_menu .menu li.current-menu-item a,
body ul.xt_tabs_vertical li.current a,
body .image-header-wrapper-bottom,
body .divider.divider-colored,
body.woocommerce ul.products li.product a:hover img, 
body.woocommerce-page ul.products li.product a:hover img,
body .woocommerce ul.products li.product a:hover img, 
body .woocommerce-page ul.products li.product a:hover img {
	border-color: <?php echo $_baseColor; ?>;
}

			<?php
		}

		?>

		/* Scheme Specific Styles */

		/* Header */

			<?php xt_printBg('header_bg', '#home .header-bg'); ?>

		/* Main Menu */

			<?php xt_printFont('main_menu_font', 'header nav #navigation > li > a', '', true); ?>

			<?php xt_printColor('main_menu_link_hover', 'header nav #navigation > li > a:hover,
				header nav #navigation > li.current_page_item > a, header nav #navigation > li.current-menu-parent > a, header nav #navigation > li.current-menu-ancestor > a'); ?>

			<?php printOpts('main_select', array(
				'bg' => '.selectnav',
				'color_a' => '.selectnav',
				'border' => '.selectnav',
				)); ?>			

			<?php printOpts('main_menu_selected', array(
				'border' => 'header nav #navigation > li.current_page_item > a, header nav #navigation > li.current-menu-parent > a, header nav #navigation > li.current-menu-ancestor > a',
				)); ?>

		/* Sub Menu */

			<?php xt_printColorBg('sub_menu_bg', 'header nav #navigation > li > ul, header nav #navigation > li > ul ul'); ?>

			<?php if(of_get_option('sub_menu_border')) : ?>
				header nav #navigation li ul:before {
					border-bottom-color: <?php echo of_get_option('sub_menu_border'); ?> !important;
				}
			<?php endif; ?>

			<?php if(of_get_option('sub_menu_border_bottom')) : ?>
				header nav #navigation li ul {
					border-bottom-color: <?php echo of_get_option('sub_menu_border_bottom'); ?> !important;
				}
			<?php endif; ?>

			<?php xt_printFont('sub_menu_font', 'header nav #navigation > li > ul li a'); ?>

			<?php xt_printColor('sub_menu_link_hover', 'header nav #navigation > li > ul li a:hover'); ?>

			<?php printOpts('sub_menu_link', array(
				'bg_hover' => 'header nav #navigation > li > ul li a:hover',
				)); ?>

		/* Callouts */

			<?php xt_printFont('header_callout_main', '#title-wrapper h1'); ?>

			<?php xt_printColorBorder('header_callout_border', '#title-container'); ?>

		/* Footer */

			<?php if( of_get_option('pattern_footer') != 'default' && of_get_option('pattern_footer') != '' ) : ?>

				#footer {
					background: url(<?php echo XT_THEME_DIR; ?>/images/patterns/<?php echo of_get_option('pattern_footer'); ?>.png) repeat;
				}

			<?php endif; ?>

			<?php xt_printBg('footer_bg', '#footer'); ?>

			<?php xt_printFont('footer_widget_title', '#footer .widget .widgettitle h3'); ?>
			<?php xt_printFont('footer_widget_text', '#footer .widget, #footer .widget p, #footer .widget a, #footer .cats-arch-tags-widget li, #footer .recent-popular-comments li, #footer .cats-arch-tags-widget li a, #footer .recent-popular-comments li a'); ?>

			<?php xt_printColor('footer_widget_a', '#footer .widget a, #footer .widget a:visited'); ?>
			<?php xt_printColor('footer_widget_a_hover', '#footer .widget a:hover'); ?>

			<?php xt_printColorBg('footer_widget_input_bg', '#footer .widget input[type="text"], #footer .widget textarea, #footer .widget select, #footer .widget.widget_search input[type="text"]'); ?>
			<?php xt_printColor('footer_widget_input_color', '#footer .widget input[type="text"], #footer .widget textarea, #footer .widget select, #footer .widget.widget_search input[type="text"]'); ?>
			<?php xt_printColorBorder('footer_widget_input_border', '#footer .widget input[type="text"], #footer .widget input[type="text"]:focus, #footer .widget textarea, #footer .widget select,
				#footer .widget.widget_search input[type="text"], #footer .widget.widget_search input[type="text"]:focus'); ?>

			<?php xt_printColorBg('footer_widget_tag_bg', '#footer .widget .tagcloud a, #footer .widget .tagcloud a:visited'); ?>
			<?php xt_printColor('footer_widget_tag_color', '#footer .widget .tagcloud a, #footer .widget .tagcloud a:visited'); ?>
			<?php xt_printColorBg('footer_widget_tag_bg_hover', '#footer .widget .tagcloud a:hover'); ?>
			<?php xt_printColor('footer_widget_tag_color_hover', '#footer .widget .tagcloud a:hover'); ?>

			<?php xt_printColorBg('footer_widget_btn_bg', '#footer .widget_ns_mailchimp input[type="submit"], #footer .widget_ns_mailchimp input[type="submit"]:active, #footer .widget .button.button'); ?>
			<?php xt_printColorBg('footer_widget_btn_bg_hover', '#footer .widget_ns_mailchimp input[type="submit"]:hover, #footer .widget .button.button:hover'); ?>
			<?php xt_printColor('footer_widget_btn_text', '#footer .widget_ns_mailchimp input[type="submit"], #footer .widget_ns_mailchimp input[type="submit"]:active, #footer .widget .button.button'); ?>
			<?php xt_printColor('footer_widget_btn_text_hover', '#footer .widget_ns_mailchimp input[type="submit"]:hover, #footer .widget .button.button:hover'); ?>

			
		/* Down Footer */

			<?php xt_printBg('down_footer_bg', '#copyright'); ?>

			<?php xt_printFont('down_footer_text_font', '#copyright'); ?>

			<?php printOpts('copyright_text', array(
				'color_a' => '#copyright a',
				'color_a_hover' => '#copyright a:hover',
				)); ?>

		/* Pages */

			<?php xt_printFont('content_h1', '.the-content h1'); ?>
			<?php xt_printFont('content_h2', '.the-content h2'); ?>
			<?php xt_printFont('content_h3', '.the-content h3'); ?>
			<?php xt_printFont('content_h4', '.the-content h4'); ?>
			<?php xt_printFont('content_h5', '.the-content h5'); ?>
			<?php xt_printFont('content_h6', '.the-content h6'); ?>
			<?php xt_printFont('content_p', '.the-content, .the-content p, .the-content address, .the-content .wpcf7-form p, .the-content label'); ?>
			<?php xt_printFont('content_li', '.the-content li'); ?>

			<?php xt_printColor('content_a', '.the-content a', ''); ?>
			<?php xt_printColor('content_a_hover', '.the-content a:hover', ''); ?>
			<?php xt_printColor('content_address', '.the-content address', ''); ?>

			<?php xt_printColorBg('content_input_bg', 'body .the-content .wpcf7-form input[type="text"], body .the-content .wpcf7-form input[type="password"], 
				body .the-content .wpcf7-form input[type="email"], body .the-content .wpcf7-form textarea, body .the-content .wpcf7-form select'); ?>
			<?php xt_printColor('content_input_color', 'body .the-content .wpcf7-form input[type="text"], body .the-content .wpcf7-form input[type="password"], 
				body .the-content .wpcf7-form input[type="email"], body .the-content .wpcf7-form textarea, body .the-content .wpcf7-form select'); ?>
			<?php xt_printColorBorder('content_input_border', 'body .the-content .wpcf7-form input[type="text"], body .the-content .wpcf7-form input[type="password"], 
				body .the-content .wpcf7-form input[type="email"], body .the-content .wpcf7-form textarea, body .the-content .wpcf7-form select'); ?>

			<?php if(of_get_option('content_input_focus') != '') : ?>
				textarea:focus,
				input[type="text"]:focus,
				input[type="password"]:focus,
				input[type="datetime"]:focus,
				input[type="datetime-local"]:focus,
				input[type="date"]:focus,
				input[type="month"]:focus,
				input[type="time"]:focus,
				input[type="week"]:focus,
				input[type="number"]:focus,
				input[type="email"]:focus,
				input[type="url"]:focus,
				input[type="search"]:focus,
				input[type="tel"]:focus,
				input[type="color"]:focus {
					-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(<?php echo xt_hex2rgbImplode(of_get_option('content_input_focus')); ?>,.4) !important;
					-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(<?php echo xt_hex2rgbImplode(of_get_option('content_input_focus')); ?>,.4) !important;
					box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(<?php echo xt_hex2rgbImplode(of_get_option('content_input_focus')); ?>,.4) !important;
					border-color: <?php echo of_get_option('content_input_focus'); ?> !important;
				}
			<?php endif; ?>

			<?php if(of_get_option('content_input_placeholder') != '') : ?>

				input:-moz-placeholder,
				textarea:-moz-placeholder {
					color: <?php echo of_get_option('content_input_placeholder'); ?>;
				}

				input:-ms-input-placeholder,
				textarea:-ms-input-placeholder {
					color: <?php echo of_get_option('content_input_placeholder'); ?>;
				}

				input::-webkit-input-placeholder,
				textarea::-webkit-input-placeholder {
					color: <?php echo of_get_option('content_input_placeholder'); ?>;
				}
			<?php endif; ?>

		/* Sidebar */

			<?php xt_printFont('sidebar_title_font', '.sidebar .widget .widgettitle'); ?>

			<?php xt_printFont('sidebar_font', '.sidebar .widget, .sidebar .widget p, .sidebar .widget .textwidget, .sidebar .widget ul li, .sidebar .widget ol li, .sidebar .cats-arch-tags-widget, .sidebar .recent-popular-comments'); ?>

			<?php xt_printColor('sidebar_a', '.sidebar .widget a, .sidebar .widget a:visited'); ?>

			<?php xt_printColor('sidebar_a_hover', '.sidebar .widget a:hover'); ?>

			<?php xt_printColorBg('sidebar_input_bg', '.sidebar .widget input, .sidebar .widget select, .sidebar .widget textarea,
				.sidebar .widget input:focus, .sidebar .widget select:focus, .sidebar .widget textarea:focus, .sidebar .widget.widget_search input[type="text"]'); ?>

			<?php xt_printColor('sidebar_input_color', '.sidebar .widget input, .sidebar .widget select, .sidebar .widget textarea,
				.sidebar .widget input:focus, .sidebar .widget select:focus, .sidebar .widget textarea:focus, .sidebar .widget.widget_search input[type="text"]'); ?>

			<?php xt_printColorBorder('sidebar_input_border', '.sidebar .widget input, .sidebar .widget select, .sidebar .widget textarea,
				.sidebar .widget input:focus, .sidebar .widget select:focus, .sidebar .widget textarea:focus, .sidebar .widget.widget_search input[type="text"]'); ?>

			<?php xt_printColorBorder('sidebar_widget_framed_border', '.sidebar .xt_tabs_framed_container, .sidebar .xt_tabs_framed_container .panes, .sidebar .xt_tabs_framed a,
			.sidebar .cats-arch-tags-widget .xt_tabs_framed li a, .sidebar .cats-arch-tags-widget .xt_tabs_framed li a:first-child,
			.sidebar .recent-popular-comments .xt_tabs_framed li a, .sidebar .recent-popular-comments .xt_tabs_framed li a:first-child,
			.sidebar .cats-arch-tags-widget .panes ul li, .sidebar .recent-popular-comments .panes ul li'); ?>
			<?php xt_printColorBg('sidebar_widget_framed_bg', '.sidebar .xt_tabs_framed_container .panes'); ?>

			<?php xt_printColor('sidebar_widget_framed_tab_color', '.sidebar ul.xt_tabs_framed a, .sidebar ul.xt_tabs_framed a:visited'); ?>
			<?php xt_printColorBg('sidebar_widget_framed_tab_bg', '.sidebar .cats-arch-tags-widget .xt_tabs_framed a, .sidebar .recent-popular-comments .xt_tabs_framed a', ' !important'); ?>
			<?php xt_printColor('sidebar_widget_framed_tab_color_hover', '.sidebar ul.xt_tabs_framed .current a, .sidebar ul.xt_tabs_framed a:hover'); ?>
			<?php xt_printColorBg('sidebar_widget_framed_tab_bg_hover', '.sidebar .cats-arch-tags-widget .xt_tabs_framed a:hover, .sidebar .cats-arch-tags-widget .xt_tabs_framed .current a,
				.sidebar .recent-popular-comments .xt_tabs_framed .current a, .sidebar .recent-popular-comments .xt_tabs_framed a:hover', ' !important'); ?>

			<?php xt_printColor('sidebar_widget_framed_text', '.sidebar .cats-arch-tags-widget .panes ul li a, .sidebar .cats-arch-tags-widget .panes ul li a:hover,
				.sidebar .recent-popular-comments .panes ul li a, .sidebar .recent-popular-comments .panes ul li a:hover'); ?>
			<?php xt_printColor('sidebar_widget_framed_span', '.sidebar .cats-arch-tags-widget .panes ul li span, .sidebar .cats-arch-tags-widget .panes ul li span:before, .sidebar .cats-arch-tags-widget .panes ul li span:after,
			.sidebar .recent-popular-comments .panes ul li .rpc_post_date'); ?>

			<?php xt_printColorBg('sidebar_widget_tag_bg', '.sidebar .widget .tagcloud a, .sidebar .widget .tagcloud a:visited'); ?>
			<?php xt_printColor('sidebar_widget_tag_color', '.sidebar .widget .tagcloud a, .sidebar .widget .tagcloud a:visited'); ?>
			<?php xt_printColorBg('sidebar_widget_tag_bg_hover', '.sidebar .widget .tagcloud a:hover'); ?>
			<?php xt_printColor('sidebar_widget_tag_color_hover', '.sidebar .widget .tagcloud a:hover'); ?>

			<?php xt_printColorBg('sidebar_widget_btn_bg', '.sidebar .widget_ns_mailchimp input[type="submit"], .sidebar .widget_ns_mailchimp input[type="submit"]:active, .sidebar .widget .button.button'); ?>
			<?php xt_printColorBg('sidebar_widget_btn_bg_hover', '.sidebar .widget_ns_mailchimp input[type="submit"]:hover, .sidebar .widget .button.button:hover'); ?>
			<?php xt_printColor('sidebar_widget_btn_text', '.sidebar .widget_ns_mailchimp input[type="submit"], .sidebar .widget_ns_mailchimp input[type="submit"]:active, .sidebar .widget .button.button'); ?>
			<?php xt_printColor('sidebar_widget_btn_text_hover', '.sidebar .widget_ns_mailchimp input[type="submit"]:hover, .sidebar .widget .button.button:hover'); ?>

			<?php xt_printFont('sidebar_features_font', '.sidebar .widget_nav_menu .menu li a, .sidebar .widget_nav_menu .menu li a:visited'); ?>
			<?php xt_printColorBorder('sidebar_features_border', '.sidebar .widget_nav_menu .menu li a, .sidebar .widget_nav_menu .menu li:last-child a'); ?>
			<?php xt_printColorBg('sidebar_features_bg', '.sidebar .widget_nav_menu .menu li a, .sidebar .widget_nav_menu .menu li a:visited'); ?>
			<?php xt_printColorBg('sidebar_features_hover_bg', '.sidebar .widget_nav_menu .menu li a:hover'); ?>
			<?php xt_printColor('sidebar_features_hover_color', '.sidebar .widget_nav_menu .menu li a:hover'); ?>

			<?php xt_printColorBg('sidebar_features_curr_bg', '.sidebar .widget_nav_menu .menu li.current-menu-item a, .sidebar .widget_nav_menu .menu li.current-menu-item a:visited'); ?>
			<?php xt_printColorBorder('sidebar_features_curr_bg', '.sidebar .widget_nav_menu .menu li.current-menu-item a, .sidebar .widget_nav_menu .menu li.current-menu-item a:visited'); ?>
			<?php xt_printColor('sidebar_features_curr_color', '.sidebar .widget_nav_menu .menu li.current-menu-item a'); ?>

		/* Blog */

			<?php xt_printColorBorder('blog_post_border', 'body .post'); ?>

			<?php if(of_get_option('blog_thumb_bg')) : ?>
				.post .thumbnail .post-thumb-hover {
					background-color: rgba(<?php echo xt_hex2rgbImplode(of_get_option('blog_thumb_bg'));?>, 0.6);
				}
			<?php endif; ?>

			<?php xt_printColorBg('blog_post_mansory_bg', 'body .post.post-mansory .post-mansory-inner'); ?>

			<?php xt_printColorBg('blog_pt_bg', '.post.post-large .post-details .post-format-icon span, .post.post-medium .side-post .post-format-icon, .post.post-single .post-details .post-format-icon span'); ?>
			<?php xt_printColor('blog_pt_color', '.post.post-large .post-details .post-format-icon span, .post.post-medium .side-post .post-format-icon, .post.post-single .post-details .post-format-icon span'); ?>

			<?php xt_printFont('blog_title_font', '.post.post-large .post-details .post-infos .post-title h1, .post.post-large .post-details .post-infos .post-title h1 a, 
				.post.post-medium .post-details .post-infos .post-title h1, .post.post-medium .post-details .post-infos .post-title h1 a,
				.post.post-single .post-details .post-infos .post-title h1, .post.post-single .post-details .post-infos .post-title h1 a'); ?>
			<?php xt_printColor('blog_title_hover', '.post.post-large .post-details .post-infos .post-title h1 a:hover, .post.post-medium .post-details .post-infos .post-title h1 a:hover, 
				.post.post-single .post-details .post-infos .post-title h1 a:hover'); ?>

			<?php xt_printFont('blog_meta_font', '.post.post-large .post-details .post-meta, .post.post-large .post-details .post-meta span, .post.post-medium .post-meta, .post.post-medium .post-meta span,
				.post.post-single .post-details .post-meta, .post.post-single .post-details .post-meta span'); ?>

			<?php xt_printColor('blog_meta_color', '.post.post-large .post-details .post-meta a, .post.post-large .post-details .post-meta span a, .post.post-medium .post-meta a, .post.post-medium .post-meta span a,
				.post.post-single .post-details .post-meta a, .post.post-single .post-details .post-meta span a'); ?>

			<?php xt_printColor('blog_meta_hover', '.post.post-large .post-details .post-meta a:hover, .post.post-large .post-details .post-meta span a:hover, .post.post-medium .post-meta a:hover,
			 .post.post-medium .post-meta span a:hover,	.post.post-single .post-details .post-meta a:hover, .post.post-single .post-details .post-meta span a:hover'); ?>

			<?php xt_printFont('blog_excerpt_font', '.post.post-large .post-details .post-excerpt, .post.post-large .post-details .post-excerpt p, .post.post-medium .post-details .post-excerpt,
				.post.post-medium .post-details .post-excerpt p'); ?>

			<?php xt_printFont('blog_readmore_font', '.post.post-large .post-details .read-more a, .post.post-medium .post-details .read-more a'); ?>
			<?php xt_printColor('blog_readmore_hover', '.post.post-large .post-details .read-more a:hover, .post.post-medium .post-details .read-more a:hover'); ?>

			<?php xt_printFont('blog_pagination_font', 'body .navigation .page-numbers a, body .navigation .page-numbers a:visited, body .navigation .page-numbers span, body .navigation .page-arrows a'); ?>
			<?php xt_printColorBg('blog_pagination_bg', 'body .navigation .page-numbers a, body .navigation .page-numbers a:visited, body .navigation .page-numbers span, body .navigation .page-arrows a'); ?>

			<?php xt_printColor('blog_pagination_text_hover', 'body .navigation .page-numbers a:hover, body .navigation .page-numbers a.active, body .navigation .page-arrows a:hover'); ?>
			<?php xt_printColorBg('blog_pagination_bg_hover', 'body .navigation .page-numbers a:hover, body .navigation .page-numbers a.active, body .navigation .page-arrows a:hover'); ?>

			<?php printOpts('blog_quote_post', array(
				'border' => 'body .post.post-large .post-details .post-quote, body .post.post-medium .post-details .post-quote, body .post.post-single .post-details .post-quote',
				'font' => 'body .post.post-large .post-details .post-quote p, body .post.post-large .post-details .post-quote p:before, 
				body .post.post-large .post-details .post-quote p:after, body .post.post-medium .post-details .post-quote p, 
				body .post.post-medium .post-details .post-quote p:before, body .post.post-medium .post-details .post-quote p:after, body .post.post-single .post-details .post-quote p, 
				body .post.post-single .post-details .post-quote p:before, body .post.post-single .post-details .post-quote p:after',
				'bg' => 'body .post.post-large .post-details .post-quote, body .post.post-medium .post-details .post-quote, body .post.post-single .post-details .post-quote',
				'bg_hover' => 'body .post.post-large .post-details .post-quote:hover, body .post.post-medium .post-details .post-quote:hover, body .post.post-single .post-details .post-quote:hover',
				)); ?>

			<?php xt_printColor('blog_quote_post_text_hover', 'body .post.post-large .post-details .post-quote:hover p, body .post.post-large .post-details .post-quote:hover p:before, body .post.post-large .post-details .post-quote:hover p:after'); ?>

			<?php printOpts('blog_quote_author', array(
				'font' => '.post.post-large .post-details .post-quote-author a,
				.post.post-medium .post-details .post-quote-author a, .post.post-single .post-details .post-quote-author a',
				)); ?>

		/* Post */

			<?php printOpts('post_tags', array(
				'border' => 'body .post-single .post-tags, body .post-single .share-post'
				)); ?>

			<?php xt_printFont('post_tags', '.post-single .post-tags, .post-single .post-tags p, .post-single .post-tags p a'); ?>
			<?php xt_printColor('post_tags_link', '.post-single .post-tags p a, .post-single .post-tags p a:visited'); ?>
			<?php xt_printColor('post_tags_hover', '.post-single .post-tags p a:hover'); ?>

			<?php printOpts('post_tags', array(
				'bg' => '.post-single .post-tags p a, .post-single .post-tags p a:visited',
				'bg_hover' => '.post-single .post-tags p a:hover',
				)); ?>

			<?php xt_printFont('post_share', '.post-single .share-post .share-text', ''); ?>
			<?php xt_printColor('post_share_color', '.post-single .share-post .share-icons a, .post-single .share-post .share-icons a:visited'); ?>
			<?php xt_printColorBg('post_share_bg', '.post-single .share-post .share-icons a, .post-single .share-post .share-icons a:visited'); ?>
			<?php xt_printColor('post_share_hover', '.post-single .share-post .share-icons a:hover'); ?>
			<?php xt_printColorBg('post_share_bg_hover', '.post-single .share-post .share-icons a:hover', ' !important'); ?>

			<?php xt_printFont('post_authorbox_name', '.post-single .author-meta .author-details h3, .post-single .author-meta .author-details h3 a'); ?>
			<?php xt_printFont('post_authorbox_bio', '.post-single .author-meta .author-details p'); ?>
			<?php xt_printColorBg('post_authorbox_bg', '.post-single .author-meta'); ?>
			<?php xt_printColorBorder('post_authorbox_bg', '.post-single .author-meta .author-image img'); ?>

			<?php xt_printFont('post_relatedposts', '.post-single .related-posts h3'); ?>
			<?php xt_printFont('post_relatedposts_items', '.post-single .related-posts ol li, .post-single .related-posts ol li a, .post-single .related-posts ol li a:visited'); ?>
			<?php xt_printColor('post_relatedposts_hover', '.post-single .related-posts ol li:hover, .post-single .related-posts ol li a:hover'); ?>
			<?php xt_printColor('post_relatedposts_arrow', '.related-posts ol li i'); ?>

			<?php xt_printFont('post_comments', '#comments #comments_header h3'); ?>
			<?php xt_printColorBg('post_comments_authortag_bg', '.comments .blog_comment_user span'); ?>
			<?php xt_printColor('post_comments_authortag_color', '.comments .blog_comment_user span'); ?>
			<?php xt_printFont('post_comments_author', '.comments .blog_comment_det .blog_comment_name_det, .comments .blog_comment_det .blog_comment_name_det a'); ?>
			<?php xt_printColor('post_comments_author_color', '.comments .blog_comment_det .blog_comment_name_det a, .comments .blog_comment_det .blog_comment_name_det a:hover'); ?>
			<?php xt_printFont('post_comments_content', '.comments .blog_comment_text, .comments .blog_comment_text p'); ?>
			<?php xt_printColor('post_comments_content_color', '.comments .blog_comment_text a, .comments .blog_comment_text a:visited, .comments .blog_comment_text a:hover'); ?>
			<?php xt_printFont('post_comments_reply', '.comments .blog_comment_det .blog_comment_name_det .comment-reply-link, .comments .blog_comment_det .blog_comment_name_det .comment-reply-link:hover'); ?>
			<?php xt_printColorBg('post_comments_reply_bg', '.comments .blog_comment_det .blog_comment_name_det .comment-reply-link, .comments .blog_comment_det .blog_comment_name_det .comment-reply-link:hover'); ?>

			<?php xt_printFont('post_lac', '#reply-title, #reply-title small, #reply-title a'); ?>
			<?php xt_printFont('post_lac_logged', '#respond .logged-in-as, #respond .logged-in-as a, #respond .logged-in-as a'); ?>
			<?php xt_printColor('post_lac_logged_color', '#respond .logged-in-as a, #respond .logged-in-as a:hover'); ?>
			<?php xt_printColorBg('post_lac_input_bg', '#respond input[type="text"], #respond textarea'); ?>
			<?php xt_printColorBorder('post_lac_input_border', '#respond input[type="text"], #respond textarea'); ?>
			<?php xt_printColor('post_lac_input_color', '#respond input[type="text"], #respond textarea'); ?>
			<?php xt_printColorBg('post_lac_btn_bg', '#respond input[type="submit"], #respond input[type="submit"]:hover', ' !important'); ?>
			<?php xt_printColor('post_lac_btn_text', '#respond input[type="submit"], #respond input[type="submit"]:hover'); ?>
			<?php xt_printColorBg('post_lac_btn_bg_hover', '#respond input[type="submit"]:hover', ' !important'); ?>
			<?php xt_printColor('post_lac_btn_text_hover', '#respond input[type="submit"]:hover'); ?>

		/* Portfolio */

			<?php xt_printColorBg('portfolio_filter_border', '.dropmenu:before'); ?>

			<?php xt_printFont('portfolio_filter_font_show', '.dropmenu .menu-title'); ?>
			<?php xt_printFont('portfolio_filter_font_selected', '.dropmenu .selected'); ?>

			<?php xt_printColorBg('portfolio_filter_bg_hover', '.dropmenu-active, .dropdown:hover .dropmenu'); ?>
			<?php xt_printColorBorder('portfolio_filter_box_border', '.dropmenu-active'); ?>

			<?php printOpts('portfolio_filter_items', array(
				'font' => '.dropmenu-active li a',
				'color_a_hover' => '.dropmenu-active li a:hover',
				'bg_hover' => '.dropmenu-active li a:hover',
				)); ?>

			<?php xt_printColor('portfolio_filter_selected_color', '.dropmenu-active li a.drop-selected'); ?>	

			<?php printOpts('portfolio_counter_number', array(
				'font' => '#title-wrapper .projects-counter .number',
				)); ?>

			<?php printOpts('portfolio_counter_word', array(
				'font' => '#title-wrapper .projects-counter p',
				)); ?>

			<?php xt_printColorBorder('portfolio_item_border', '.the-content .project-item .thumbnail'); ?>

			<?php xt_printColorBg('portfolio_item_bg', '.project-wrp'); ?>

			<?php printOpts('portfolio_item_title', array(
				'font' => '.project-wrp .project-name',
				)); ?>

			<?php printOpts('portfolio_item_excerpt', array(
				'font' => '.project-wrp .project-desc',
				)); ?>

			<?php xt_printColorBg('portfolio_item_cover_bg', '.project-wrp .overlay-wrp'); ?>

			<?php printOpts('portfolio_item_title_cover', array(
				'font' => '.project-wrp .overlay-wrp .project-name',
				)); ?>

			<?php printOpts('portfolio_item_excerpt_cover', array(
				'font' => '.project-wrp .overlay-wrp .project-desc',
				)); ?>
			
			<?php xt_printColor('portfolio_item_cover_arrow', '.project-wrp .overlay-wrp i'); ?>

		/* Single Project */

			<?php if(of_get_option('single_project_gradient_color') != '') : ?>
				.background .gradient {
					background: -webkit-linear-gradient(top, transparent, <?php echo of_get_option('single_project_gradient_color'); ?>);
					background:	-moz-linear-gradient(top, transparent, <?php echo of_get_option('single_project_gradient_color_color'); ?>);
					background:	 -ms-linear-gradient(top, transparent, <?php echo of_get_option('single_project_gradient_color'); ?>);
					background:	  -o-linear-gradient(top, transparent, <?php echo of_get_option('single_project_gradient_color'); ?>);
					background:		 linear-gradient(top, transparent, <?php echo of_get_option('single_project_gradient_color'); ?>);
				}
			<?php endif; ?>

			<?php if(of_get_option('single_project_opacity') != '') : ?>
				.background img {
					opacity: <?php echo str_replace(',', '.', of_get_option('single_project_opacity')); ?>;
					filter: alpha(opacity=<?php echo str_replace(',', '.', of_get_option('single_project_opacity')) * 100; ?>);
				}
			<?php endif; ?>

			<?php printOpts('single_project_title', array(
				'font' => '#project-description h1',
				)); ?>

			<?php printOpts('single_project_meta', array(
				'font' => '#project-description .project-info',
				'border' => '#project-description .line'
				)); ?>

			<?php printOpts('single_project_excerpt', array(
				'font' => '.project-description p',
				)); ?>

			<?php printOpts('single_project_share', array(
				'font' => '#project-description .up-title',
				)); ?>

			<?php printOpts('single_project_launch', array(
				'font' => 'a.launch, a.launch span',
				'color_a_hover' => 'a.launch:hover, a.launch:hover span',
				)); ?>

			<?php printOpts('single_project_icon', array(
				'color_a' => 'a.launch i.font-icon-link',
				'bg' => 'a.launch i.font-icon-link',
				'color_a_hover' => 'a.launch:hover i.font-icon-link',
				'bg_hover' => 'a.launch:hover i.font-icon-link',
				)); ?>

			<?php printOpts('single_project_nav', array(
				'border' => '.single-project .post-navigation',
				'font' => '.single-project .post-navigation a, .single-project .post-navigation a:visited',
				'color_a_hover' => '.single-project .post-navigation a:hover',
				)); ?>

			<?php printOpts('single_project_nav_icon', array(
				'color_a' => '.single-project .post-navigation a i',
				'bg' => '.single-project .post-navigation a i',
				'color_a_hover' => '.single-project .post-navigation a:hover i',
				'bg_hover' => '.single-project .post-navigation a:hover i',
				)); ?>

			<?php if(of_get_option('single_project_item_bg') != '') : ?>
				body .project-media .xt-project-hover {
					background-color: rgba(<?php echo xt_hex2rgbImplode(of_get_option('single_project_item_bg'));?>, 0.6) !important;
				}
			<?php endif; ?>

			<?php xt_printFont('single_project_related_font', '.single-project-related .xt-related-headline h1'); ?>

		/* Sliders */

			<?php xt_printColorBg('slider_nav_bg', 'body .rev_banner_custom_arrows .tp-bullets.simplebullets.round .bullet,
				body .camera_wrap .camera_pag .camera_pag_ul li, body .elastislide-wrapper nav span,
				body .flex-control-nav li', ' !important'); ?>
			<?php xt_printColorBorder('slider_nav_bg', 'body .rev_banner_custom_arrows .tp-bullets.simplebullets.round .bullet,
				body .theme-default .nivo-controlNav a', ' !important'); ?>

			<?php xt_printColorBg('slider_nav_bullet', 'body .rev_banner_custom_arrows .tp-bullets.simplebullets.round .bullet,
				body .camera_wrap .camera_pag .camera_pag_ul li span, body .flex-control-paging li a,  body .theme-default .nivo-controlNav a', ' !important'); ?>

			<?php xt_printColorBg('slider_nav_bullet_hover', 'body .rev_banner_custom_arrows .tp-bullets.simplebullets.round .bullet.selected,
				body .camera_wrap .camera_pag .camera_pag_ul li.cameracurrent span, body .flex-control-paging li a.flex-active, body .flex-control-paging li a:hover,
				body .theme-default .nivo-controlNav a.active', ' !important'); ?>

			<?php xt_printFont('slider_rev_default', 'body .tp-caption.default-heading'); ?>
			<?php xt_printColorBg('slider_rev_default_bg', 'body .tp-caption.default-heading', ' !important'); ?>

			<?php xt_printFont('slider_rev_subgray', 'body .tp-caption.subheader-gray'); ?>
			<?php xt_printFont('slider_rev_paragraph', 'body .tp-caption.paragraph'); ?>
			<?php xt_printFont('slider_rev_opacdark', 'body .tp-caption.opacity-dark'); ?>
			<?php xt_printFont('slider_rev_verybig', 'body .tp-caption.very-big'); ?>
			<?php xt_printFont('slider_rev_verybigdark', 'body .tp-caption.very-big-dark'); ?>

			<?php xt_printColor('slider_rev_link', 'body .tp-caption a'); ?>
			<?php xt_printColor('slider_rev_link_hover', 'body .tp-caption a:hover'); ?>

			<?php xt_printFont('slider_all_caption', 'body .camera_caption, body .camera_caption>div, .camera_caption>div a, .camera_caption>div a:hover,
			 .flexslider .flex-caption, .flexslider .flex-caption a, .flexslider .flex-caption a:hover, .nivo-caption, .nivo-caption a, .nivo-caption a:hover'); ?>
			<?php xt_printColorBg('slider_all_caption_bg', 'body .camera_caption, body .camera_caption>div, .flexslider .flex-caption, .nivo-caption', ' !important'); ?>

			<?php xt_printColorBg('slider_rev_nav_bg_hover', 'body .rev_banner_custom_arrows .tp-leftarrow.default:hover, body .rev_banner_custom_arrows .tp-rightarrow.default:hover'); ?>
		/* Shortcodes */

			<?php printOpts('sc_accordion', array(
				'border' => '.accordions .accordion-title a, .toggle .toggle-title a, .toggle .toggle-content',
				'font' => '.accordions .accordion-title a, .toggle .toggle-title a',
				'color_a' => '.accordions .accordion-title a, .toggle .toggle-title a',
				'bg' => '.accordions .accordion-title a, .toggle .toggle-title a',
				'color_a_hover' => '.accordions .accordion-title a:hover, .accordions .accordion-title a:hover i, body .accordions .accordion-title.accordion-active a, body .accordions .accordion-title.accordion-active a i, .toggle .toggle-title a:hover, .toggle .toggle-title a:hover i, .toggle .toggle-title.toggle-active a i',
				'bg_hover' => '.accordions .accordion-title a:hover, body .accordions .accordion-title.accordion-active a, .toggle .toggle-title a:hover, .toggle .toggle-title.toggle-active a',
				)); ?>

			<?php printOpts('sc_button', array(
				'font' => 'body .button.button, .button.button.button-normal.button-default, .button.button.button-default, .wpcf7 .wpcf7-form .wpcf7-submit, .btn, #searchsubmit',
				'color_a' => '.button.button.button-normal.button-default, .button.button.button-default, .wpcf7 .wpcf7-form .wpcf7-submit, .btn, #searchsubmit',
				'bg' => '.button.button.button-normal.button-default, .button.button.button-default, .wpcf7 .wpcf7-form .wpcf7-submit, .btn, #searchsubmit',
				'color_a_hover' => '.button.button.button-normal.button-default:hover, .button.button.button-default:hover, .btn:hover, .btn:focus, .wpcf7 .wpcf7-form .wpcf7-submit:hover, #searchsubmit:hover',
				'bg_hover' => '.button.button.button-normal.button-default:hover, .button.button.button-default:hover, .btn:hover, .btn:focus, .wpcf7 .wpcf7-form .wpcf7-submit:hover, #searchsubmit:hover',
				)); ?>

			<?php printOpts('sc_carousel', array(
				'color_a' => 'body  .list_carousel .prev, body .list_carousel .next',
				'bg' => 'body  .list_carousel .prev, body .list_carousel .next',
				'color_a_hover' => 'body .list_carousel .prev:hover, body .list_carousel .next:hover',
				'bg_hover' => 'body .list_carousel .prev:hover, body .list_carousel .next:hover',
				)); ?>

			<?php xt_printColorBg('sc_carousel_timebar_bg', 'body .list_carousel .timer'); ?>

			<?php xt_printColorBg('sc_divider_border', 'body .divider.divider-shadow'); ?>
			<?php xt_printColorBorder('sc_divider_border', 'body .divider.divider-normal'); ?>

			<?php printOpts('sc_dropcap', array(
				'border' => '.dropcap, .dropcap-circle, .dropcap-square, .dropcap-classic',
				'color_a' => '.dropcap, .dropcap-circle, .dropcap-square, .dropcap-classic',
				'bg' => '.dropcap-circle, .dropcap-square',
				)); ?>

			<?php printOpts('sc_iconbox_title', array(
				'font' => '.the-content .box-font-icon h3',
				'color' => '.the-content .box-font-icon i',
				)); ?>

			<?php printOpts('sc_iconbox_text', array(
				'font' => '.box-font-icon p',
				)); ?>

			<?php printOpts('sc_blockicon', array(
				'color_a' => '.the-content .block-font-icon .block-icon-wrapper .icon-wrap, .the-content .block-font-icon .block-icon-wrapper .icon-wrap i',
				'color_a_hover' => '.the-content .block-font-icon .block-icon-wrapper .icon-wrap:hover i',
				)); ?>

			<?php printOpts('sc_latest_post', array(
				'bg' => 'body .xt-posts-wrapper .post-item .post-infos',
				'font' => 'body .xt-posts-wrapper .post-item .post-infos h1, body .xt-posts-wrapper .post-item .post-infos h1 a',
				'color_a_hover' => 'body .xt-posts-wrapper .post-item .post-infos h1 a:hover',
				)); ?>

			<?php printOpts('sc_latest_post_meta', array(
				'font' => '.xt-posts-wrapper .post-item .post-infos .post-meta',
				'color_a' => '.xt-posts-wrapper .post-item .post-infos .post-meta a, .xt-posts-wrapper .post-item .post-infos .post-meta a:visited',
				'color_a_hover' => '.xt-posts-wrapper .post-item .post-infos .post-meta a:hover',
				)); ?>

			<?php printOpts('sc_lastest_post_list', array(
				'font' => '.xt-posts-list-wrapper .post-item .post-infos .post-title h1, .xt-posts-list-wrapper .post-item .post-infos .post-title h1 a',
				'color_a_hover' => '.xt-posts-list-wrapper .post-item .post-infos .post-title h1 a:hover',
				)); ?>

			<?php printOpts('sc_lastest_post_list_icon', array(
				'color_a' => '.xt-posts-list-wrapper .post-item .post-format-icon span',
				'bg' => '.xt-posts-list-wrapper .post-item .post-format-icon span',
				)); ?>

			<?php printOpts('sc_latest_post_list_meta', array(
				'font' => '.xt-posts-list-wrapper .post-item .post-meta, .xt-posts-list-wrapper .post-item .post-meta span',
				'color_a' => '.xt-posts-list-wrapper .post-item .post-meta a',
				'color_a_hover' => '.xt-posts-list-wrapper .post-item .post-meta span a:hover',
				)); ?>

			<?php printOpts('sc_lastest_post_list_rm', array(
				'font' => '.xt-posts-list-wrapper .post-item .read-more a',
				'color_a_hover' => '.xt-posts-list-wrapper .post-item .read-more a:hover',
				)); ?>

			<?php printOpts('sc_member_block', array(
				'bg' => 'body .member-block',
				)); ?>

			<?php printOpts('sc_member_name', array(
				'font' => '.the-content .member-block .member-header h2',
				)); ?>

			<?php printOpts('sc_member_role', array(
				'font' => '.the-content .member-block .member-header h4',
				)); ?>

			<?php printOpts('sc_member_content', array(
				'font' => 'body .member-block .member-content, body .member-block .member-content p',
				'border' => 'body .member-block .member-header',
				)); ?>

			<?php printOpts('sc_member_icon', array(
				'color_a' => '.the-content .member-block .member-social .zocial-icon-wrap',
				'bg' => '.the-content .member-block .member-social .zocial-icon-wrap',
				'color_a_hover' => '.the-content .member-block .member-social .zocial-icon-wrap:hover',
				'bg_hover' => '.the-content .member-block .member-social .zocial-icon-wrap:hover',
				)); ?>

			<?php printOpts('sc_skill_name', array(
				'font' => '.skill-bar .skill-title',
				)); ?>

			<?php printOpts('sc_skill_bar', array(
				'bg' => '.skill-bar .skill-wrapper',
				)); ?>

			<?php printOpts('sc_skill_bar_inner', array(
				'bg' => '.the-content .skill-bar .skill-wrapper .skill-progress',
				)); ?>

			<?php printOpts('sc_msgbox', array(
				'font' => '.notification-box',
				)); ?>


			<?php printOpts('sc_ptable_plan', array(
				'font' => 'body .xt-column-pricing h1',
				'bg' => 'body .xt-column-pricing h1',
				)); ?>

			<?php printOpts('sc_ptable_price', array(
				'font' => 'body .xt-column-pricing h2',
				'bg' => 'body .xt-column-pricing .pricing-details',
				)); ?>

			<?php printOpts('sc_ptable_time', array(
				'font' => 'body .xt-column-pricing h3',
				)); ?>

			<?php printOpts('sc_ptable_item', array(
				'border' => 'body .xt-column-pricing ul li',
				'font' => 'body .xt-column-pricing ul li',
				'bg' => 'body .xt-column-pricing .pricing-content, body .xt-column-pricing ul li',
				)); ?>

			<?php printOpts('sc_ptable_button', array(
				'font' => 'body .xt-column-pricing .pricing-button .button',
				'color_a_hover' => 'body .xt-column-pricing .pricing-button .button:hover',
				'bg' => 'body .xt-column-pricing .pricing-button .button',
				'bg_hover' => 'body .xt-column-pricing .pricing-button .button:hover',
				)); ?>

			<?php printOpts('sc_ptablefeat_plan', array(
				'font' => 'body .xt-column-pricing.pricing-featured h1',
				'bg' => 'body .xt-column-pricing.pricing-featured h1',
				)); ?>

			<?php printOpts('sc_ptablefeat_price', array(
				'font' => 'body .xt-column-pricing.pricing-featured h2',
				'bg' => 'body .xt-column-pricing.pricing-featured .pricing-details',
				)); ?>

			<?php printOpts('sc_ptablefeat_time', array(
				'font' => 'body .xt-column-pricing.pricing-featured h3',
				)); ?>

			<?php printOpts('sc_ptablefeat_item', array(
				'border' => 'body .xt-column-pricing.pricing-featured ul li',
				'font' => 'body .xt-column-pricing.pricing-featured ul li',
				'bg' => 'body .xt-column-pricing.pricing-featured .pricing-content, body .xt-column-pricing.pricing-featured ul li',
				)); ?>

			<?php printOpts('sc_ptablefeat_button', array(
				'font' => 'body .xt-column-pricing.pricing-featured .pricing-button .button',
				'color_a_hover' => 'body .xt-column-pricing.pricing-featured .pricing-button .button:hover',
				'bg' => 'body .xt-column-pricing.pricing-featured .pricing-button .button',
				'bg_hover' => 'body .xt-column-pricing.pricing-featured .pricing-button .button:hover',
				)); ?>

			<?php printOpts('sc_ptable_top', array(
				'font' => 'body .xt-column-pricing .pricing-top',
				'bg' => 'body .xt-column-pricing .pricing-top',
				)); ?>

			<?php printOpts('sc_smedia', array(
				'color_a' => 'body .zocial-icon-wrap',
				'bg' => 'body .zocial-icon-wrap',
				'color_a_hover' => 'body .zocial-icon-wrap:hover',
				'bg_hover' => 'body .zocial-icon-wrap:hover',
				)); ?>

			<?php printOpts('sc_table', array(
				'border' => 'table, .table_style_zebra table',
				)); ?>

			<?php printOpts('sc_table_head', array(
				'border' => '.table_style_zebra table thead tr th, .table_style_normal table thead tr th, .table_style_minimal table thead tr th',
				'bg' => '.table_style_zebra table thead tr th, .table_style_normal table thead tr th, .table_style_minimal table thead tr th',
				'font' => '.table_style_zebra table thead tr th, .table_style_normal table thead tr th, .table_style_minimal table thead tr th',
				)); ?>

			<?php printOpts('sc_table_rows', array(
				'border' => '.table_style_zebra table tbody tr, .table_style_zebra table tbody tr td, .table_style_normal table tbody tr, .table_style_normal table tbody tr td, .table_style_minimal table tbody tr',
				'bg' => '.table_style_zebra table tbody tr, .table_style_zebra table tbody tr td, .table_style_normal table tbody tr, .table_style_normal table tbody tr td, .table_style_minimal table tbody tr',
				'font' => '.table_style_zebra table tbody tr, .table_style_zebra table tbody tr td, .table_style_normal table tbody tr, .table_style_normal table tbody tr td, .table_style_minimal table tbody tr',
				)); ?>

			<?php printOpts('sc_table_rowsh', array(
				'bg' => '.table_style_zebra table tbody tr:nth-child(even) td, .table_style_normal table tbody tr:hover td, .table_style_minimal table tbody tr:hover td',
				)); ?>

			<?php printOpts('sc_table_foot', array(
				'border' => '.table_style_zebra table tfoot tr td, .table_style_normal table tfoot tr td, .table_style_minimal table tfoot tr td',
				'bg' => '.table_style_zebra table tfoot tr td, .table_style_normal table tfoot tr td, .table_style_minimal table tfoot tr td',
				'font' => '.table_style_zebra table tfoot tr td, .table_style_normal table tfoot tr td, .table_style_minimal table tfoot tr td',
				)); ?>

			<?php printOpts('sc_tabsf', array(
				'border' => 'body .xt_tabs_framed_container .panes, ul.xt_tabs_framed a, ul.xt_tabs_framed li.current a',
				'font' => 'ul.xt_tabs_framed a, ul.xt_tabs_framed li.current a',
				'color_a' => '.xt_tabs_framed_container .panes a, .xt_tabs_framed_container .panes a:hover',
				'bg' => 'ul.xt_tabs_framed li a',
				'color_a_hover' => 'ul.xt_tabs_framed a:hover, ul.xt_tabs_framed li.current a',
				'bg_hover' => 'ul.xt_tabs_framed a:hover, ul.xt_tabs_framed li.current a',
				)); ?>

			<?php if(of_get_option('sc_tabsf_bg')) : ?>
				ul.xt_tabs_framed li.current a {
					border-bottom-color: <?php echo of_get_option('sc_tabsf_bg'); ?> !important;
				}
			<?php endif; ?>

			<?php printOpts('sc_tabsf_content', array(
				'font' => '.xt_tabs_framed_container .panes',
				'bg' => 'body .xt_tabs_framed_container .panes',
				)); ?>

			<?php printOpts('sc_tabsb', array(
				'border' => 'ul.xt_tabs_button li.current a',
				'font' => 'ul.xt_tabs_button a',
				'color_a' => 'ul.xt_tabs_button li.current a',
				'bg' => 'ul.xt_tabs_button li a',
				'color_a_hover' => 'ul.xt_tabs_button li a:hover, ul.xt_tabs_button li.current a',
				'bg_hover' => 'ul.xt_tabs_button li a:hover, ul.xt_tabs_button li.current a',
				)); ?>

			<?php printOpts('sc_tabsb_content', array(
				'font' => '.xt_tabs_button_container .panes',
				)); ?>

			<?php printOpts('sc_tabsv', array(
				'border' => 'ul.xt_tabs_vertical li a, body ul.xt_tabs_vertical li.current a',
				'font' => 'ul.xt_tabs_vertical li a',
				'color_a' => 'ul.xt_tabs_vertical li.current a',
				'bg' => 'ul.xt_tabs_vertical li a',
				'color_a_hover' => 'ul.xt_tabs_vertical li a:hover, ul.xt_tabs_vertical li.current a',
				'bg_hover' => 'ul.xt_tabs_vertical li a:hover, ul.xt_tabs_vertical li.current a',
				)); ?>

			<?php if(of_get_option('sc_tabsv_bg_hover')) : ?>
				body ul.xt_tabs_vertical li.current a, body ul.xt_tabs_vertical li a:hover {
					border-color: <?php echo of_get_option('sc_tabsv_bg_hover'); ?> !important;
				}
			<?php endif; ?>

			<?php printOpts('sc_tabsv_content', array(
				'font' => '.xt_tabs_vertical_container .panes',
				)); ?>

			<?php printOpts('sc_teaser', array(
				'font' => 'body .teaser-simple p',
				'bg' => 'body .teaser-simple',
				)); ?>

			<?php printOpts('sc_teaser_h', array(
				'font' => 'body .teaser-simple h1, body .teaser-simple h2, body .teaser-simple h3,
				body .teaser-simple h4, body .teaser-simple h5, body .teaser-simple h6',
				)); ?>

			<?php printOpts('sc_teaser_box', array(
				'border' => '.teaser-box',
				'font' => '.teaser-box .teaser-box-content p',
				'bg' => '.teaser-box, .teaser-box .teaser-box-content',
				)); ?>

			<?php printOpts('sc_teaser_h_box', array(
				'font' => '.teaser-box .teaser-box-content .teaser-box-title',
				)); ?>

			<?php printOpts('sc_callout', array(
				'border' => '.callout-box',
				'font' => '.callout-box .callout-box-content p',
				'bg' => '.callout-box, .callout-box .callout-box-content',
				)); ?>

			<?php printOpts('sc_callout_h', array(
				'font' => '.callout-box .callout-box-content .callout-box-title',
				)); ?>

			<?php printOpts('sc_boxstyled', array(
				'bg' => '.styled-box.styled-box-1, .styled-box.styled-box-2',
				'color' => '.styled-box h1, .styled-box h2, .styled-box h3, .styled-box h4,
				.styled-box h4, .styled-box h5, .styled-box h6, .styled-box p',
				)); ?>

			<?php printOpts('sc_testimonialb', array(
				'font' => 'body .testimonial-content-bubble, .testimonial-content-bubble p',
				'bg' => '.testimonial-content-bubble',
				'border' => '.testimonial-content-bubble',
				)); ?>

			<?php if(of_get_option('sc_testimonialb_bg')) : ?>
				.testimonial-content-bubble:after {
					border-top-color: <?php echo of_get_option('sc_testimonialb_bg'); ?> !important;
				}
			<?php endif; ?>

			<?php if(of_get_option('sc_testimonialb_border')) : ?>
				.testimonial-content-bubble:before {
					border-top-color: <?php echo of_get_option('sc_testimonialb_border'); ?> !important;
				}
			<?php endif; ?>

			<?php printOpts('sc_testimonialb_author', array(
				'font' => '.testimonial .testimonial-meta',
				)); ?>

			<?php printOpts('sc_testimonialblock', array(
				'font' => 'body .testimonial-block .testimonial-content, body .testimonial-block .testimonial-content p',
				'border' => 'body .blockquote blockquote',
				)); ?>

			<?php printOpts('sc_testimonialblock_author', array(
				'font' => '.testimonial-block .testimonial-meta .author-name',
				)); ?>

			<?php printOpts('sc_blockquote', array(
				'font' => 'blockquote, .blockquote, .the-content blockquote p, .the-content .blockquote p',
				'border' => 'blockquote, .blockquote',
				)); ?>

			<?php printOpts('sc_blockquote_author', array(
				'font' => '.blockquote blockquote .author',
				)); ?>

			<?php printOpts('sc_pullquote', array(
				'font' => '.the-content .pullquote, .the-content .pullquote p, .the-content .pullquote.pull-left, .the-content .pullquote.pull-right',
				'border' => '.the-content .pullquote, .the-content .pullquote p, .the-content .pullquote.pull-left, .the-content .pullquote.pull-right',
				)); ?>

			<?php printOpts('sc_headerimg', array(
				'font' => 'body .image-header span',
				)); ?>

			<?php printOpts('sc_code', array(
				'bg' => 'body pre',
				'color' => 'body pre',
				'border' => 'body pre',
				)); ?>

			<?php printOpts('sc_wrapper', array(
				'bg' => 'body .xt-full-width-wrapper',
				)); ?>

			<?php printOpts('sc_slogan', array(
				'font' => 'body .slogan h1',
				'color_a' => 'body .slogan h1 a',
				'color_a_hover' => 'body .slogan h1 a:hover',
				)); ?>

			<?php printOpts('sc_big_title', array(
				'font' => '.big-title h1',
				'color_a' => '.big-title h1 a, .big-title h1 strong',
				'color_a_hover' => '.big-title h1 a:hover',
				)); ?>

			<?php printOpts('sc_big_title_sub', array(
				'font' => '.big-title .sub',
				)); ?>

			<?php printOpts('sc_big_text', array(
				'color_a' => '.big-text a',
				'color_a_hover' => '.big-text a:hover',
				)); ?>

			<?php printOpts('sc_big_text_h1', array(
				'font' => '.big-text h1',
				)); ?>

			<?php printOpts('sc_big_text_h2', array(
				'font' => '.big-text h2',
				)); ?>

			<?php printOpts('sc_big_text_h3', array(
				'font' => '.big-text h3',
				)); ?>

			<?php printOpts('sc_big_text_h4', array(
				'font' => '.big-text h4',
				)); ?>

			<?php printOpts('sc_big_text_h5', array(
				'font' => '.big-text h5',
				)); ?>

			<?php printOpts('sc_big_text_h6', array(
				'font' => '.big-text h6',
				)); ?>

			<?php printOpts('sc_circles_front', array(
				'font' => '.process-circle.stage',
				'bg' => '.process-circle.stage',
				)); ?>

			<?php printOpts('sc_circles_back', array(
				'font' => '.process-circle.direction',
				'bg' => '.process-circle.direction',
				)); ?>

			<?php printOpts('sc_call_to_action', array(
				'font' => '.ft-icon-action-inner span',
				'color_a' => '.ft-icon-action-inner span a',
				'color_a_hover' => '.ft-icon-action-inner span a:hover',
				)); ?>

			<?php printOpts('sc_call_to_action_icon', array(
				'color_a' => 'a.heart-circle',
				'bg' => 'a.heart-circle',
				'color_a_hover' => 'a.heart-circle:hover',
				'bg_hover' => 'a.heart-circle:hover',
				)); ?>

		/* WooCommerce General */

			<?php printOpts('woo_login_box', array(
				'bg' => 'body.woocommerce form.login, body.woocommerce-page form.login, body.woocommerce form.register, body.woocommerce-page form.register',
				)); ?>
			

			<?php printOpts('woo_input', array(
				'border' => 'body.woocommerce form .form-row input.input-text, body.woocommerce form .form-row textarea,
					body.woocommerce-page form .form-row input.input-text, body.woocommerce-page form .form-row textarea,
					body.woocommerce-page form .form-row select, .woocommerce .woocommerce-ordering select, .woocommerce-page .woocommerce-ordering select,
					.woocommerce div.product form.cart .variations select, .woocommerce-page div.product form.cart .variations select,
					.woocommerce #review_form #respond textarea, .woocommerce-page #review_form #respond textarea,
					.woocommerce #review_form #respond input[type="text"], .woocommerce-page #review_form #respond input[type="text"],
					body.woocommerce table.cart td.actions .coupon .input-text, body.woocommerce-page table.cart td.actions .coupon .input-text',
				'border_hover' => 'body.woocommerce form .form-row input.input-text:focus, body.woocommerce form .form-row textarea:focus,
					body.woocommerce-page form .form-row input.input-text:focus, body.woocommerce-page form .form-row textarea:focus,
					body.woocommerce-page form .form-row select:focus, .woocommerce .woocommerce-ordering select:focus, .woocommerce-page .woocommerce-ordering select:focus,
					.woocommerce div.product form.cart .variations select:focus, .woocommerce-page div.product form.cart .variations select:focus,
					.woocommerce #review_form #respond textarea:focus, .woocommerce-page #review_form #respond textarea:focus,
					.woocommerce #review_form #respond input[type="text"]:focus, .woocommerce-page #review_form #respond input[type="text"]:focus,
					body.woocommerce table.cart td.actions .coupon .input-text:focus, body.woocommerce-page table.cart td.actions .coupon .input-text:focus',
				'font' => 'body.woocommerce form .form-row input.input-text, body.woocommerce form .form-row textarea,
					body.woocommerce-page form .form-row input.input-text, body.woocommerce-page form .form-row textarea,
					body.woocommerce-page form .form-row select, .woocommerce .woocommerce-ordering select, .woocommerce-page .woocommerce-ordering select,
					.woocommerce div.product form.cart .variations select, .woocommerce-page div.product form.cart .variations select,
					.woocommerce #review_form #respond textarea, .woocommerce-page #review_form #respond textarea,
					.woocommerce #review_form #respond input[type="text"], .woocommerce-page #review_form #respond input[type="text"],
					body.woocommerce table.cart td.actions .coupon .input-text, body.woocommerce-page table.cart td.actions .coupon .input-text',
				'color_a_hover' => 'body.woocommerce form .form-row input.input-text:focus, body.woocommerce form .form-row textarea:focus,
					body.woocommerce-page form .form-row input.input-text:focus, body.woocommerce-page form .form-row textarea:focus,
					body.woocommerce-page form .form-row select:focus, .woocommerce .woocommerce-ordering select:focus, .woocommerce-page .woocommerce-ordering select:focus,
					.woocommerce div.product form.cart .variations select:focus, .woocommerce-page div.product form.cart .variations select:focus,
					.woocommerce #review_form #respond textarea:focus, .woocommerce-page #review_form #respond textarea:focus,
					.woocommerce #review_form #respond input[type="text"]:focus, .woocommerce-page #review_form #respond input[type="text"]:focus,
					body.woocommerce table.cart td.actions .coupon .input-text:focus, body.woocommerce-page table.cart td.actions .coupon .input-text:focus',
				'bg' => 'body.woocommerce form .form-row input.input-text, body.woocommerce form .form-row textarea,
					body.woocommerce-page form .form-row input.input-text, body.woocommerce-page form .form-row textarea,
					body.woocommerce-page form .form-row select, .woocommerce .woocommerce-ordering select, .woocommerce-page .woocommerce-ordering select,
					.woocommerce div.product form.cart .variations select, .woocommerce-page div.product form.cart .variations select,
					.woocommerce #review_form #respond textarea, .woocommerce-page #review_form #respond textarea,
					.woocommerce #review_form #respond input[type="text"], .woocommerce-page #review_form #respond input[type="text"],
					body.woocommerce table.cart td.actions .coupon .input-text, body.woocommerce-page table.cart td.actions .coupon .input-text',
				'bg_hover' => 'body.woocommerce form .form-row input.input-text:focus, body.woocommerce form .form-row textarea:focus,
					body.woocommerce-page form .form-row input.input-text:focus, body.woocommerce-page form .form-row textarea:focus,
					body.woocommerce-page form .form-row select:focus, .woocommerce .woocommerce-ordering select:focus, .woocommerce-page .woocommerce-ordering select:focus,
					.woocommerce div.product form.cart .variations select:focus, .woocommerce-page div.product form.cart .variations select:focus,
					.woocommerce #review_form #respond textarea:focus, .woocommerce-page #review_form #respond textarea:focus,
					.woocommerce #review_form #respond input[type="text"]:focus, .woocommerce-page #review_form #respond input[type="text"]:focus,
					body.woocommerce table.cart td.actions .coupon .input-text:focus, body.woocommerce-page table.cart td.actions .coupon .input-text:focus',
				)); ?>
			
			<?php printOpts('woo_msg', array(
				'font' => 'body .woocommerce-message, body .woocommerce-error li, body .woocommerce-info',
				)); ?>

			<?php printOpts('woo_btn', array(
				'font' => 'body .woocommerce a.button, 
					body .woocommerce .sidebar .widget a.button,
					body .woocommerce button.button, 
					body .woocommerce input.button, 
					body .woocommerce #respond input#submit, 
					body .woocommerce #content input.button, 
					body.woocommerce-page a.button, 
					body.woocommerce-page .sidebar .widget a.button,
					body.woocommerce-page button.button, 
					body.woocommerce-page input.button, 
					body.woocommerce-page #respond input#submit, 
					body.woocommerce-page #content input.button,
					body.woocommerce .shipping_calculator h2 a, body.woocommerce-page .shipping_calculator h2 a',
				'color_a_hover' => 'body .woocommerce a.button:hover, 
					body .woocommerce button.button:hover, 
					body .woocommerce input.button:hover, 
					body .woocommerce #respond input#submit:hover, 
					body .woocommerce #content input.button:hover, 
					body.woocommerce-page a.button:hover, 
					body.woocommerce-page button.button:hover, 
					body.woocommerce-page input.button:hover, 
					body.woocommerce-page #respond input#submit:hover, 
					body.woocommerce-page #content input.button:hover,
					body.woocommerce .shipping_calculator h2 a:hover, body.woocommerce-page .shipping_calculator h2 a:hover',
				'bg' => 'body .woocommerce a.button, 
					body .woocommerce button.button, 
					body .woocommerce input.button, 
					body .woocommerce #respond input#submit, 
					body .woocommerce #content input.button, 
					body.woocommerce-page a.button, 
					body.woocommerce-page button.button, 
					body.woocommerce-page input.button, 
					body.woocommerce-page #respond input#submit, 
					body.woocommerce-page #content input.button,
					body.woocommerce .shipping_calculator h2 a, body.woocommerce-page .shipping_calculator h2 a',
				'bg_hover' => 'body .woocommerce a.button:hover, 
					body .woocommerce button.button:hover, 
					body .woocommerce input.button:hover, 
					body .woocommerce #respond input#submit:hover, 
					body .woocommerce #content input.button:hover, 
					body.woocommerce-page a.button:hover, 
					body.woocommerce-page button.button:hover, 
					body.woocommerce-page input.button:hover, 
					body.woocommerce-page #respond input#submit:hover, 
					body.woocommerce-page #content input.button:hover,
					body.woocommerce .shipping_calculator h2 a:hover, body.woocommerce-page .shipping_calculator h2 a:hover',
				)); ?>
			
			<?php printOpts('woo_btn_alt', array(
				'font' => 'body.woocommerce a.button.alt, 
					body.woocommerce button.button.alt,
					body.woocommerce input.button.alt, 
					body.woocommerce #respond input#submit.alt, 
					body.woocommerce #content input.button.alt, 
					body.woocommerce-page a.button.alt, 
					body.woocommerce-page button.button.alt, 
					body.woocommerce-page input.button.alt, 
					body.woocommerce-page #respond input#submit.alt, 
					body.woocommerce-page #content input.button.alt',
				'color_a_hover' => 'body.woocommerce a.button.alt:hover, 
					body.woocommerce button.button.alt:hover,
					body.woocommerce input.button.alt:hover, 
					body.woocommerce #respond input#submit.alt:hover, 
					body.woocommerce #content input.button.alt:hover, 
					body.woocommerce-page a.button.alt:hover, 
					body.woocommerce-page button.button.alt:hover, 
					body.woocommerce-page input.button.alt:hover, 
					body.woocommerce-page #respond input#submit.alt:hover, 
					body.woocommerce-page #content input.button.alt:hover',
				'bg' => 'body.woocommerce a.button.alt, 
					body.woocommerce button.button.alt,
					body.woocommerce input.button.alt, 
					body.woocommerce #respond input#submit.alt, 
					body.woocommerce #content input.button.alt, 
					body.woocommerce-page a.button.alt, 
					body.woocommerce-page button.button.alt, 
					body.woocommerce-page input.button.alt, 
					body.woocommerce-page #respond input#submit.alt, 
					body.woocommerce-page #content input.button.alt',
				'bg_hover' => 'body.woocommerce a.button.alt:hover, 
					body.woocommerce button.button.alt:hover,
					body.woocommerce input.button.alt:hover, 
					body.woocommerce #respond input#submit.alt:hover, 
					body.woocommerce #content input.button.alt:hover, 
					body.woocommerce-page a.button.alt:hover, 
					body.woocommerce-page button.button.alt:hover, 
					body.woocommerce-page input.button.alt:hover, 
					body.woocommerce-page #respond input#submit.alt:hover, 
					body.woocommerce-page #content input.button.alt:hover',
				)); ?>

			/* Shop */

			<?php printOpts('woo_shop_order', array(
				'font' => '.woocommerce-result-count',
				)); ?>

			<?php printOpts('woo_shop_thumb', array(
				'border' => 'body.woocommerce ul.products li.product a img, 
					body.woocommerce-page ul.products li.product a img, 
					body .woocommerce ul.products li.product a img, 
					body .woocommerce-page ul.products li.product a img',
				'border_hover' => 'body.woocommerce ul.products li.product a:hover img, 
					body.woocommerce-page ul.products li.product a:hover img, 
					body .woocommerce ul.products li.product a:hover img, 
					body .woocommerce-page ul.products li.product a:hover img',
				)); ?>

			<?php printOpts('woo_shop_title', array(
				'font' => 'body.woocommerce ul.products li.product h3, body.woocommerce-page ul.products li.product h3, body .woocommerce ul.products li.product h3, body .woocommerce-page ul.products li.product h3',
				)); ?>

			<?php printOpts('woo_shop_stars', array(
				'color_a' => 'body.woocommerce .products .star-rating, body.woocommerce-page .products .star-rating, body .woocommerce .products .star-rating, body .woocommerce-page .products .star-rating',
				'color_a_hover' => 'body.woocommerce .products .star-rating:hover, body.woocommerce-page .products .star-rating:hover, body.woocommerce ul.products li.product a:hover .star-rating, body .woocommerce .products .star-rating:hover, body .woocommerce-page .products .star-rating:hover, body .woocommerce ul.products li.product a:hover .star-rating',
				'color' => '.woocommerce .star-rating:before, .woocommerce-page .star-rating:before',
				)); ?>

			<?php printOpts('woo_shop_price', array(
				'font' => 'body.woocommerce ul.products li.product .price, body.woocommerce-page ul.products li.product .price, body .woocommerce ul.products li.product .price, body .woocommerce-page ul.products li.product .price, .woocommerce ul.products li.product .price .from, .woocommerce-page ul.products li.product .price .from',
				)); ?>

			<?php printOpts('woo_shop_price_ins', array(
				'color' => 'body .woocommerce ul.products li.product .price ins, body .woocommerce-page ul.products li.product .price ins, body.woocommerce ul.products li.product .price ins, body.woocommerce-page ul.products li.product .price ins',
				)); ?>

			<?php printOpts('woo_shop_price_del', array(
				'color' => 'body.woocommerce ul.products li.product .price del, body.woocommerce-page ul.products li.product .price del, body .woocommerce ul.products li.product .price del, body .woocommerce-page ul.products li.product .price del',
				)); ?>

			<?php printOpts('woo_shop_sale', array(
				'bg' => '.woocommerce ul.products li.product .onsale, .woocommerce-page ul.products li.product .onsale',
				'color' => '.woocommerce ul.products li.product .onsale, .woocommerce-page ul.products li.product .onsale',
				)); ?>

			<?php printOpts('woo_shop_nav', array(
				'border' => 'body.woocommerce nav.woocommerce-pagination, body.woocommerce #content nav.woocommerce-pagination, body.woocommerce-page nav.woocommerce-pagination, body.woocommerce-page #content nav.woocommerce-pagination',
				'font' => 'body.woocommerce nav.woocommerce-pagination ul li a, body.woocommerce nav.woocommerce-pagination ul li span, body.woocommerce #content nav.woocommerce-pagination ul li a, body.woocommerce #content nav.woocommerce-pagination ul li span, body.woocommerce-page nav.woocommerce-pagination ul li a, body.woocommerce-page nav.woocommerce-pagination ul li span, body.woocommerce-page #content nav.woocommerce-pagination ul li a, body.woocommerce-page #content nav.woocommerce-pagination ul li span',
				'color_a_hover' => 'body.woocommerce nav.woocommerce-pagination ul li span.current, body.woocommerce nav.woocommerce-pagination ul li a:hover, body.woocommerce nav.woocommerce-pagination ul li a:focus, body.woocommerce #content nav.woocommerce-pagination ul li span.current, body.woocommerce #content nav.woocommerce-pagination ul li a:hover, body.woocommerce #content nav.woocommerce-pagination ul li a:focus, body.woocommerce-page nav.woocommerce-pagination ul li span.current, body.woocommerce-page nav.woocommerce-pagination ul li a:hover, body.woocommerce-page nav.woocommerce-pagination ul li a:focus, body.woocommerce-page #content nav.woocommerce-pagination ul li span.current, body.woocommerce-page #content nav.woocommerce-pagination ul li a:hover, body.woocommerce-page #content nav.woocommerce-pagination ul li a:focus',
				'bg' => 'body.woocommerce nav.woocommerce-pagination ul li a, body.woocommerce nav.woocommerce-pagination ul li span, body.woocommerce #content nav.woocommerce-pagination ul li a, body.woocommerce #content nav.woocommerce-pagination ul li span, body.woocommerce-page nav.woocommerce-pagination ul li a, body.woocommerce-page nav.woocommerce-pagination ul li span, body.woocommerce-page #content nav.woocommerce-pagination ul li a, body.woocommerce-page #content nav.woocommerce-pagination ul li span',
				'bg_hover' => 'body.woocommerce nav.woocommerce-pagination ul li span.current, body.woocommerce nav.woocommerce-pagination ul li a:hover, body.woocommerce nav.woocommerce-pagination ul li a:focus, body.woocommerce #content nav.woocommerce-pagination ul li span.current, body.woocommerce #content nav.woocommerce-pagination ul li a:hover, body.woocommerce #content nav.woocommerce-pagination ul li a:focus, body.woocommerce-page nav.woocommerce-pagination ul li span.current, body.woocommerce-page nav.woocommerce-pagination ul li a:hover, body.woocommerce-page nav.woocommerce-pagination ul li a:focus, body.woocommerce-page #content nav.woocommerce-pagination ul li span.current, body.woocommerce-page #content nav.woocommerce-pagination ul li a:hover, body.woocommerce-page #content nav.woocommerce-pagination ul li a:focus',
				)); ?>

			/* Widgets */

			<?php printOpts('woo_widget_cart', array(
				'border' => 'body.woocommerce ul.cart_list li img, body.woocommerce ul.product_list_widget li img, body.woocommerce-page ul.cart_list li img, body.woocommerce-page ul.product_list_widget li img,
				body .woocommerce ul.cart_list li dl, body .woocommerce ul.product_list_widget li dl, body.woocommerce-page ul.cart_list li dl, body.woocommerce-page ul.product_list_widget li dl,
				.woocommerce .widget_shopping_cart .total, .woocommerce-page .widget_shopping_cart .total',
				'color' => 'body.woocommerce .widget_shopping_cart .total, body.woocommerce-page .widget_shopping_cart .total,
				.woocommerce ul.cart_list li, .woocommerce ul.product_list_widget li, .woocommerce-page ul.cart_list li, .woocommerce-page ul.product_list_widget li,
				body .woocommerce .sidebar .quantity, body.woocommerce .sidebar #content .quantity, body.woocommerce-page .sidebar .quantity, body.woocommerce-page .sidebar #content .quantity,
				.woocommerce .widget_price_filter .price_slider_amount, .woocommerce-page .widget_price_filter .price_slider_amount,
				.woocommerce .widget_layered_nav ul small.count, .woocommerce-page .widget_layered_nav ul small.count',
				)); ?>

			<?php printOpts('woo_widget_cart_del', array(
				'color' => 'body .product_list_widget li del',
				)); ?>

			<?php printOpts('woo_widget_filter', array(
				'border' => 'body.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
					body.woocommerce-page .widget_price_filter .ui-slider .ui-slider-range,
					body.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, 
					body.woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle',
				'bg' => 'body.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
					body.woocommerce-page .widget_price_filter .ui-slider .ui-slider-range,
					body.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, 
					body.woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle',
				)); ?>

			<?php printOpts('woo_widget_filter_nav', array(
				'color' => 'body.woocommerce .sidebar .widget_layered_nav ul li.chosen a,
					body.woocommerce-page .sidebar .widget_layered_nav ul li.chosen a,
					body.woocommerce-page .sidebar .widget_layered_nav ul li.chosen a:active,
					body.woocommerce .sidebar .widget_layered_nav_filters ul li a, 
					body.woocommerce-page .sidebar .widget_layered_nav_filters ul li a,
					body.woocommerce-page .sidebar .widget_layered_nav_filters ul li a:active',
				'bg' => 'body.woocommerce .sidebar .widget_layered_nav ul li.chosen a,
					body.woocommerce-page .sidebar .widget_layered_nav ul li.chosen a,
					body.woocommerce-page .sidebar .widget_layered_nav ul li.chosen a:active,
					body.woocommerce .sidebar .widget_layered_nav_filters ul li a, 
					body.woocommerce-page .sidebar .widget_layered_nav_filters ul li a,
					body.woocommerce-page .sidebar .widget_layered_nav_filters ul li a:active',
				)); ?>

			<?php xt_printColorBorder('woo_widget_filter_nav_bg', 'body.woocommerce .sidebar .widget_layered_nav ul li.chosen a,
				body.woocommerce-page .sidebar .widget_layered_nav ul li.chosen a,
				body.woocommerce-page .sidebar .widget_layered_nav ul li.chosen a:active,
				body.woocommerce .sidebar .widget_layered_nav_filters ul li a, 
				body.woocommerce-page .sidebar .widget_layered_nav_filters ul li a,
				body.woocommerce-page .sidebar .widget_layered_nav_filters ul li a:active'); ?>

			/* Product */

			<?php printOpts('woo_prod_thumb', array(
				'border' => 'body.woocommerce div.product div.images img, body.woocommerce #content div.product div.images img, body.woocommerce-page div.product div.images img, body.woocommerce-page #content div.product div.images img',
				)); ?>

			<?php printOpts('woo_prod_sale', array(
				'bg' => 'body.woocommerce span.onsale, body.woocommerce-page span.onsale, body .woocommerce span.onsale, body .woocommerce-page span.onsale',
				'color' => 'body.woocommerce span.onsale, body.woocommerce-page span.onsale, body .woocommerce span.onsale, body .woocommerce-page span.onsale',
				)); ?>

			<?php printOpts('woo_prod_title', array(
				'font' => 'body.woocommerce div.product .product_title, body.woocommerce-page div.product .product_title',
				)); ?>

			<?php printOpts('woo_prod_price', array(
				'font' => 'body.woocommerce div.product p.stock, body.woocommerce-page div.product p.stock, .woocommerce div.product span.price, .woocommerce div.product p.price, .woocommerce-page div.product span.price, .woocommerce-page div.product p.price',
				)); ?>

			<?php printOpts('woo_prod_price_del', array(
				'color' => '.woocommerce div.product span.price del, .woocommerce div.product p.price del, .woocommerce-page div.product span.price del, .woocommerce-page div.product p.price del',
				)); ?>

			<?php printOpts('woo_prod_price_ins', array(
				'color' => '.woocommerce div.product span.price ins, .woocommerce div.product p.price ins, .woocommerce-page div.product span.price ins, .woocommerce-page div.product p.price ins',
				)); ?>

			<?php printOpts('woo_prod_summary', array(
				'font' => '.woocommerce div.product div.summary, .woocommerce-page div.product div.summary',
				)); ?>

			<?php printOpts('woo_prod_links', array(
				'color_a' => '.woocommerce div.product div.summary a, .woocommerce-page div.product div.summary a',
				'color_a_hover' => '.woocommerce div.product div.summary a:hover, .woocommerce-page div.product div.summary a:hover',
				)); ?>

			<?php printOpts('woo_prod_input', array(
				'color_a' => 'body.woocommerce .quantity input.qty, body.woocommerce-page .quantity input.qty, 
				body.woocommerce .quantity input.plus, body.woocommerce-page .quantity input.plus,
				body.woocommerce .quantity input.minus, body.woocommerce-page .quantity input.minus',
				'color_a_hover' => 'body.woocommerce .quantity input.qty:focus, body.woocommerce-page .quantity input.qty:focus, 
				body.woocommerce .quantity input.plus:hover, body.woocommerce-page .quantity input.plus:hover,
				body.woocommerce .quantity input.minus:hover, body.woocommerce-page .quantity input.minus:hover',
				'border' => 'body.woocommerce .quantity input.qty, body.woocommerce-page .quantity input.qty, 
				body.woocommerce .quantity input.plus, body.woocommerce-page .quantity input.plus,
				body.woocommerce .quantity input.minus, body.woocommerce-page .quantity input.minus',
				'bg' => 'body.woocommerce .quantity input.qty, body.woocommerce-page .quantity input.qty, 
				body.woocommerce .quantity input.plus, body.woocommerce-page .quantity input.plus,
				body.woocommerce .quantity input.minus, body.woocommerce-page .quantity input.minus',
				'bg_hover' => 'body.woocommerce .quantity input.qty:focus, body.woocommerce-page .quantity input.qty:focus, 
				body.woocommerce .quantity input.plus:hover, body.woocommerce-page .quantity input.plus:hover,
				body.woocommerce .quantity input.minus:hover, body.woocommerce-page .quantity input.minus:hover',
				)); ?>

			<?php printOpts('woo_prod_tabs', array(
				'border' => 'body.woocommerce div.product .woocommerce-tabs .panel, body.woocommerce-page div.product .woocommerce-tabs .panel,
				body.woocommerce div.product .woocommerce-tabs ul.tabs li, body.woocommerce-page div.product .woocommerce-tabs ul.tabs li,
				body.woocommerce div.product .woocommerce-tabs ul.tabs li:before, 
				body.woocommerce div.product .woocommerce-tabs ul.tabs li:after, 
				body.woocommerce-page div.product .woocommerce-tabs ul.tabs li:before, 
				body.woocommerce-page div.product .woocommerce-tabs ul.tabs li:after,
				body.woocommerce div.product .woocommerce-tabs ul.tabs li, 
				body.woocommerce-page div.product .woocommerce-tabs ul.tabs li,
				.woocommerce div.product .woocommerce-tabs ul.tabs:before, .woocommerce-page div.product .woocommerce-tabs ul.tabs:before',
				'color_a' => 'body.woocommerce div.product .woocommerce-tabs ul.tabs li a, body.woocommerce-page div.product .woocommerce-tabs ul.tabs li a',
				'color_a_hover' => 'body.woocommerce div.product .woocommerce-tabs ul.tabs li.active a, body.woocommerce-page div.product .woocommerce-tabs ul.tabs li.active a,
				body.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover, body.woocommerce-page div.product .woocommerce-tabs ul.tabs li a:hover',
				'bg' => 'body.woocommerce div.product .woocommerce-tabs ul.tabs li, body.woocommerce-page div.product .woocommerce-tabs ul.tabs li,
				body.woocommerce div.product .woocommerce-tabs ul.tabs li a, body.woocommerce-page div.product .woocommerce-tabs ul.tabs li a',
				'bg_hover' => 'body.woocommerce div.product .woocommerce-tabs .panel, body.woocommerce-page div.product .woocommerce-tabs .panel,
				body.woocommerce div.product .woocommerce-tabs ul.tabs li.active a, body.woocommerce-page div.product .woocommerce-tabs ul.tabs li.active a,
				body.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover, body.woocommerce-page div.product .woocommerce-tabs ul.tabs li a:hover,
				.woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active,
				body.woocommerce div.product .woocommerce-tabs ul.tabs li:hover, body.woocommerce-page div.product .woocommerce-tabs ul.tabs li:hover,
				body.woocommerce div.product .woocommerce-tabs ul.tabs li:hover a, body.woocommerce-page div.product .woocommerce-tabs ul.tabs li:hover a',
				)); 
			
			if(of_get_option('woo_prod_tabs_bg_hover')) : ?>
				.woocommerce div.product .woocommerce-tabs ul.tabs li.active, .woocommerce-page div.product .woocommerce-tabs ul.tabs li.active {
					border-bottom-color: <?php echo of_get_option('woo_prod_tabs_bg_hover'); ?> !important;
				}

				.woocommerce div.product .woocommerce-tabs ul.tabs li.active:after,
				.woocommerce-page div.product .woocommerce-tabs ul.tabs li.active:after {
					box-shadow: -2px 2px 0 <?php echo of_get_option('woo_prod_tabs_bg_hover'); ?> !important;
					-webkit-box-shadow: -2px 2px 0 <?php echo of_get_option('woo_prod_tabs_bg_hover'); ?> !important;
				}
			<?php
				endif;
			?>

			<?php printOpts('woo_prod_content_h1', array(
				'font' => '.woocommerce-tabs .panel h1',
				)); ?>

			<?php printOpts('woo_prod_content_h2', array(
				'font' => '.woocommerce-tabs .panel h2',
				)); ?>

			<?php printOpts('woo_prod_content_h3', array(
				'font' => '.woocommerce-tabs .panel h3',
				)); ?>

			<?php printOpts('woo_prod_content_h4', array(
				'font' => '.woocommerce-tabs .panel h4',
				)); ?>

			<?php printOpts('woo_prod_content_h5', array(
				'font' => '.woocommerce-tabs .panel h5',
				)); ?>

			<?php printOpts('woo_prod_content_h6', array(
				'font' => '.woocommerce-tabs .panel h6',
				)); ?>

			<?php printOpts('woo_prod_content_p', array(
				'font' => '.woocommerce-tabs .panel p',
				)); ?>

			<?php printOpts('woo_prod_content_li', array(
				'font' => '.woocommerce-tabs .panel li',
				)); ?>

			<?php printOpts('woo_prod_content_link', array(
				'color_a' => '.woocommerce-tabs .panel a',
				'color_a_hover' => '.woocommerce-tabs .panel a:hover',
				)); ?>

			<?php printOpts('woo_prod_content_table', array(
				'color' => '.woocommerce table.shop_attributes th, .woocommerce-page table.shop_attributes th',
				'border' => '.woocommerce table.shop_attributes, .woocommerce-page table.shop_attributes,
				.woocommerce table.shop_attributes th, .woocommerce-page table.shop_attributes th, .woocommerce table.shop_attributes td, .woocommerce-page table.shop_attributes td',
				)); ?>

			<?php printOpts('woo_prod_top_stars', array(
				'color_a' => 'body.woocommerce #comments .star-rating, body.woocommerce-page #comments .star-rating, body .woocommerce #comments .star-rating, body .woocommerce-page #comments .star-rating',
				'color' => '.woocommerce #comments .star-rating:before, .woocommerce-page #comments .star-rating:before',
				)); ?>

			<?php printOpts('woo_prod_comment', array(
				'border' => '.woocommerce #reviews #comments ol.commentlist li img.avatar, .woocommerce-page #reviews #comments ol.commentlist li img.avatar',
				'bg' => 'body.woocommerce #reviews #comments ol.commentlist li .comment-text, body.woocommerce-page #reviews #comments ol.commentlist li .comment-text',
				'color' => 'body.woocommerce #reviews #comments ol.commentlist li .comment-text .meta, body.woocommerce-page #reviews #comments ol.commentlist li .comment-text .meta,
				body.woocommerce #reviews #comments ol.commentlist li .comment-text .description p, body.woocommerce-page #reviews #comments ol.commentlist li .comment-text .description p',
				)); ?>

			<?php printOpts('woo_prod_comment_stars', array(
				'color_a' => 'body.woocommerce #reviews #comments ol.commentlist li .star-rating, body.woocommerce-page #reviews #comments ol.commentlist li .star-rating, body .woocommerce #reviews #comments ol.commentlist li .star-rating, body .woocommerce-page #reviews #comments ol.commentlist li .star-rating',
				'color' => '.woocommerce #reviews #comments ol.commentlist li .star-rating:before, .woocommerce-page #reviews #comments ol.commentlist li .star-rating:before',
				)); ?>

			<?php printOpts('woo_prod_review_title', array(
				'font' => '#review_form_wrapper #review_form #reply-title.comment-reply-title',
				)); ?>

			<?php printOpts('woo_prod_relup_title', array(
				'font' => 'body.woocommerce .related h2, body.woocommerce .upsells h2',
				)); ?>

			/* Cart */

			<?php printOpts('woo_cart_table', array(
				'border' => 'body.woocommerce table.shop_table, body.woocommerce-page table.shop_table',
				)); ?>

			<?php printOpts('woo_cart_table_th', array(
				'font' => 'body.woocommerce table.shop_table thead tr, 
					body.woocommerce-page table.shop_table thead tr',
				'bg' => 'body.woocommerce table.shop_table thead tr, 
					body.woocommerce-page table.shop_table thead tr',
				)); ?>

			<?php printOpts('woo_cart_table_td', array(
				'border' => 'body.woocommerce-page table.shop_table td,
					body.woocommerce table.shop_table tfoot td, .woocommerce table.cart img, .woocommerce #content table.cart img, .woocommerce-page table.cart img, .woocommerce-page #content table.cart img',
				'font' => 'body.woocommerce table.shop_table tbody td, 
					body.woocommerce-page table.shop_table tbody td',
				'bg' => 'body.woocommerce table.shop_table tbody td, 
					body.woocommerce-page table.shop_table tbody td',
				'color_a' => 'body.woocommerce table.shop_table tbody td a, 
					body.woocommerce-page table.shop_table tbody td a',
				'color_a_hover' => 'body.woocommerce table.shop_table tbody td a:hover, 
					body.woocommerce-page table.shop_table tbody td a:hover',
				)); ?>

			<?php printOpts('woo_cart_table_tfoot', array(
				'border' => 'body.woocommerce-page table.shop_table tbody td.actions, body.woocommerce table.shop_table, body.woocommerce-page table.shop_table tfoot th, body.woocommerce-page table.shop_table tfoot td',
				'bg' => 'body.woocommerce-page table.shop_table tbody td.actions, body.woocommerce table.shop_table, body.woocommerce-page table.shop_table tfoot tr',
				'font' => 'body.woocommerce-page table.shop_table tfoot tr, body.woocommerce-page table.shop_table tfoot th, body.woocommerce-page table.shop_table tfoot td',
				)); ?>

			<?php printOpts('woo_cart_titles', array(
				'font' => 'body.woocommerce.woocommerce-cart h2, body.woocommerce-page.woocommerce-cart h2',
				)); ?>

			<?php printOpts('woo_cart_totals_table', array(
				'border' => 'body.woocommerce .cart-collaterals .cart_totals table, body.woocommerce-page .cart-collaterals .cart_totals table',
				)); ?>

			<?php printOpts('woo_cart_totals_table_th', array(
				'font' => 'body.woocommerce-page .cart-collaterals .cart_totals tr.cart-subtotal td',
				'bg' => 'body.woocommerce-page .cart-collaterals .cart_totals tr.cart-subtotal, body.woocommerce-page .cart-collaterals .cart_totals tr.cart-subtotal th, body.woocommerce-page .cart-collaterals .cart_totals tr.cart-subtotal td',
				)); ?>

			<?php printOpts('woo_cart_totals_table_td', array(
				'border' => 'body.woocommerce-page .cart-collaterals .cart_totals tr th, body.woocommerce-page .cart-collaterals .cart_totals tr td',
				'font' => 'body.woocommerce-page .cart-collaterals .cart_totals tr th, body.woocommerce-page .cart-collaterals .cart_totals tr td',
				'bg' => 'body.woocommerce-page .cart-collaterals .cart_totals tr th, body.woocommerce-page .cart-collaterals .cart_totals tr td',
				)); ?>

			<?php printOpts('woo_cart_totals_table_tfoot', array(
				'border' => 'body.woocommerce-page .cart-collaterals .cart_totals tr.total',
				'bg' => 'body.woocommerce-page .cart-collaterals .cart_totals tr.total, body.woocommerce-page .cart-collaterals .cart_totals tr.total th, body.woocommerce-page .cart-collaterals .cart_totals tr.total td',
				'font' => 'body.woocommerce-page .cart-collaterals .cart_totals tr.total',
				)); ?>

			/* Checkout */

			<?php printOpts('woo_check_msg', array(
				'font' => 'body.woocommerce-checkout .woocommerce-info',
				'bg' => 'body.woocommerce-checkout .woocommerce-info',
				'color_a' => 'body.woocommerce-checkout .woocommerce-info a',
				'color_a_hover' => 'body.woocommerce-checkout .woocommerce-info a:hover',
				)); ?>

			<?php printOpts('woo_check_msg_inner', array(
				'bg' => 'body.woocommerce form.checkout_coupon, body.woocommerce-page form.checkout_coupon, body.woocommerce-checkout form.login',
				)); ?>

			<?php printOpts('woo_check_titles', array(
				'font' => 'body.woocommerce-checkout h3, body.woocommerce-checkout h3',
				)); ?>

			<?php printOpts('woo_check_shipto', array(
				'color' => '.woocommerce .checkout #shiptobilling label, .woocommerce-page .checkout #shiptobilling label',
				)); ?>
			
			<?php printOpts('woo_check_label', array(
				'font' => 'body.woocommerce form .form-row label, body.woocommerce-page form .form-row label',
				)); ?>

			<?php printOpts('woo_check_paybox', array(
				'font' => 'body.woocommerce #payment ul.payment_methods label, body.woocommerce-page #payment ul.payment_methods label',
				'bg' => 'body.woocommerce #payment ul.payment_methods, body.woocommerce-page #payment ul.payment_methods',
				)); ?>

			<?php printOpts('woo_check_paybox_desc', array(
				'font' => 'body.woocommerce #payment div.payment_box p, body.woocommerce-page #payment div.payment_box p',
				)); ?>

			<?php if(of_get_option('woo_check_paybox_desc_bg')) : ?>
				body.woocommerce #payment div.payment_box:after,
				body.woocommerce-page #payment div.payment_box:after {
					border-bottom-color: <?php echo of_get_option('woo_check_paybox_desc_bg'); ?> !important;
				}

				body.woocommerce #payment div.payment_box, body.woocommerce-page #payment div.payment_box {
					background: <?php echo of_get_option('woo_check_paybox_desc_bg'); ?> !important;
				}
			<?php
				endif;
			?>

		/* Custom CSS Rules */

		<?php echo of_get_option('custom_css'); ?>

	</style>
	<?php
}

/* Footer Styles
==============================*/

add_action('wp_footer', 'xt_print_custom_styles_footer');

function xt_print_custom_styles_footer() {
	?>
	<style type="text/css">

	</style>
	<?php
}