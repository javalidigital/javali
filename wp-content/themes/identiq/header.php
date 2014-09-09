<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

	<!-- Meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Utils -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- Favicons
	================================================== -->

		<?php if( of_get_option('favicon_default') != '' ) : ?>
		<!-- Default Favicon -->
		<link href="<?php echo of_get_option('favicon_default'); ?>" rel="icon" type="image/x-icon" />
		<?php endif; ?>

		<?php if( of_get_option('favicon_retina_ipad') != '' ) : ?>
		<!-- For third-generation iPad with high-resolution Retina display: -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo of_get_option('favicon_retina_ipad'); ?>">
		<?php endif; ?>

		<?php if( of_get_option('favicon_retina_iphone') != '' ) : ?>
		<!-- For iPhone with high-resolution Retina display: -->
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo of_get_option('favicon_retina_iphone'); ?>">
		<?php endif; ?>

		<?php if( of_get_option('favicon_nonretina_ipad') != '' ) : ?>
		<!-- For first- and second-generation iPad: -->
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo of_get_option('favicon_nonretina_ipad'); ?>">
		<?php endif; ?>

		<?php if( of_get_option('favicon_nonretina_iphone') != '' ) : ?>
		<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
		<link rel="apple-touch-icon-precomposed" href="<?php echo of_get_option('favicon_nonretina_iphone'); ?>">
		<?php endif; ?>

	<!-- Title-->
	<title><?php
		global $page, $paged;

		wp_title( '-', true, 'right' );
		bloginfo( 'name' );

		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " - $site_description";
	?></title>

	<!-- WP_Head -->
	<?php wp_head(); ?>

</head>
<?php
	$xt_frontpage = 'false';
	if( is_home() || is_front_page() )
		$xt_frontpage = 'true';
?>
<body <?php body_class('front-page-'.$xt_frontpage); ?>>

<?php if($xt_frontpage == 'true') : ?>
<!-- Start Homepage -->
	<header id="home">
		<div class="header-bg"></div>
		<div class="pattern"></div>
		<div class="container">
			<div class="row">
				<div class="span4">
					<a href="<?php echo wpml_get_home_url(); ?>" id="logo"><?php echo get_bloginfo('name'); ?></a>
				</div>



		<!-- Navigation -->
			<nav id="topnav" class="span8">
				<?php
					if(has_nav_menu('main_menu')) :

						wp_nav_menu( array( 'theme_location' => 'main_menu', 'link_before' => '', 'link_after' => '',
							'container' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 'menu_id' => 'fixed-nav', 'menu_class' => 'visible-desktop', 'walker' => new XT_Walker() ) 
						);

					endif;
				?>
			</nav>
				<!-- End Navigation -->
			</div>
			<div class="row">
				<div class="span12">
					<div id="slidecaption">
						<?php echo do_shortcode( of_get_option('header_content') ); ?>
					</div>
				</div>
			</div>
		</div>
	</header>
<?php endif; ?>	

	<div class="wrapper">
	
		<!-- Start Sticky Navigation -->
		<nav id="mainnav">
			<div class="container">
				<div class="row">
					<div class="span4">
						<a href="<?php echo wpml_get_home_url() . '#home'; ?>" id="logo-secondary"><?php echo get_bloginfo('name'); ?></a>
					</div>
					<div class="span8">

						<?php
							if(has_nav_menu('main_menu')) :

								$_homeLink = '<li class="menu-item menu-item-home-link"><a href="' . wpml_get_home_url() . '#home">'. __('Home', 'identiq') . '</a></li>';

								wp_nav_menu( array( 'theme_location' => 'main_menu', 'link_before' => '', 'link_after' => '',
									'container' => 'div', 'container_id'  => 'fluid-nav-wrapper', 'items_wrap' => '<ul id="%1$s" class="%2$s">' . $_homeLink . '%3$s</ul>', 'menu_id' => 'fluid-nav', 'menu_class' => 'nav fluid-navigation visible-desktop', 'walker' => new XT_Walker() ) 
								);

							endif;
						?>

					</div>
				</div>
			</div>
		</nav>
		<!-- End Sticky Navigation -->