<?php
/* XT Base Theme Functions with Main Functions and Configurations */

	// Theme Directory URI Constant
	define("XT_THEME_DIR", get_template_directory_uri());
	
	// Remove Generator Tag to improve security
	remove_action('wp_head', 'wp_generator');
	
	// Multilanguage Support	
	load_theme_textdomain( 'identiq', get_template_directory() .'/languages' );
	$locale = get_locale();
	$locale_file = get_template_directory() ."/languages/$locale.php";
	if ( is_readable($locale_file) )
		require_once($locale_file);
		
	// Define Theme Content Width
	if ( ! isset( $content_width ) )
		$content_width = 625;

	/* XT LAYOUT BUILDER */	
	require("xt_framework/layout-builder/layout-builder.php");
	
	if(!is_admin())
		require("xt_framework/layout-builder/init.php");
	
	/* XT CUSTOM SHORTCODES */
	require("xt_framework/shortcodes/init.php");
	
	/* XT PORTFOLIO */
	require("xt_framework/portfolio/portfolio-init.php");
	
	/* XT Options Panel */
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/xt_framework/options/' );
	// Options Framework
	require_once dirname( __FILE__ ) . '/xt_framework/options/options-framework.php';
	// Fonts Selector Helpers
	require_once dirname( __FILE__ ) . '/xt_framework/options/fonts_functions.php';
	// Print Style Function
	require_once dirname( __FILE__ ) . '/xt_framework/options/print_style.php';
	
	/* XT LAYOUTS */
	require("xt_framework/layouts/layouts-init.php");
		
	/* WPML Integration */
	require_once('wpml-integration.php');

	/* WooCommerce Custom Code */
	require_once('woocommerce/woo_init.php');
		
	/* WPML Integration */
	require_once('wpml-integration.php');
		
	// Function to avoid styles at Login Page
	function xt_is_login_page() {
		return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
	}

	// XT Framework Core Init
	require_once('xt_framework/core/core_init.php');
	
	// Enqueue Styles
	function xt_enqueue_styles() {
		if(!is_admin() && !xt_is_login_page()) :

			// Font Icons Overwriting XT Shortcodes Linkage
			wp_register_style( 'font-awesome', XT_THEME_DIR . '/css/fonticons/font_awesome/css/font-awesome.css', array(), '1', 'all' );
			wp_enqueue_style( 'font-awesome' );

			wp_register_style( 'zocial', XT_THEME_DIR . '/css/fonticons/zocial/css/zocial.css', array(), '1', 'all' );
			wp_enqueue_style( 'zocial' );
					
			// Skeleton Framework Base Classes
			wp_register_style( 'skeleton-fixed', XT_THEME_DIR . '/css/skeleton.css', array(), '1', 'all' );
			wp_enqueue_style( 'skeleton-fixed' );

			// Fonts 

			wp_register_style( 'Montserrat', 'http://fonts.googleapis.com/css?family=Montserrat:400,700', array(), '1', 'all' );
			wp_enqueue_style( 'Montserrat' );
			
			wp_register_style( 'OpenSans', 'http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700', array(), '1', 'all' );
			wp_enqueue_style( 'OpenSans' );
			
			// Skeleton Framework Responsive Sizes
			wp_register_style( 'skeleton-responsive', XT_THEME_DIR . '/css/skeleton-responsive.css', array(), '1', 'all' );
			wp_enqueue_style( 'skeleton-responsive' );
			
			// Main Styles to Theme
			wp_register_style( 'base-style', XT_THEME_DIR . '/css/base.css', array(), '1', 'all' );
			wp_enqueue_style( 'base-style' );

			
			// Responsive Styles to Theme
			wp_register_style( 'layout-style', XT_THEME_DIR . '/css/layout.css', array(), '1', 'all' );
			wp_enqueue_style( 'layout-style' );
			
			// Includes Main Stylesheet
			wp_enqueue_style("main-style", get_stylesheet_directory_uri() ."/style.css", false, "1.0", "all");
					
		endif;
	}
	add_action( 'wp_enqueue_scripts', 'xt_enqueue_styles' );
	
	// Enqueue Scripts
	function xt_enqueue_scripts() {
		if(!is_admin() && !xt_is_login_page()) :

			// jQuery Script
			wp_enqueue_script( 'jquery' );
			
			// HTML5 Compatibility
			wp_register_script( 'html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js', array(), null, false );
			wp_enqueue_script( 'html5-shim' );
			
			// Menu Responsiveness
			wp_enqueue_script( 'jquery.mobilemenu', get_template_directory_uri() . '/js/jquery.mobilemenu.js', array('jquery'), NULL );
			wp_enqueue_script( 'mobile-menu-init', get_template_directory_uri() . '/js/mobile-menu-init.js', array('jquery'), NULL );
			$select_menu_localized = array( 'select_page' => __( 'Menu', 'identiq' ) );
			wp_localize_script( 'mobile-menu-init', 'mobile_menu_init_translation', $select_menu_localized );
			
			// Comments Script
			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
				wp_enqueue_script( 'comment-reply' );

			wp_register_script( 'sitcky-js', XT_THEME_DIR . '/js/jquery.sticky.js', array(), null, false );
			wp_enqueue_script( 'sitcky-js' );

			wp_register_script( 'bootstrap-scrollspy-min', XT_THEME_DIR . '/js/bootstrap.scrollspy.min.js', array(), null, false );
			wp_enqueue_script( 'bootstrap-scrollspy-min' );

			wp_register_script( 'settings-js', XT_THEME_DIR . '/js/settings.js', array(), null, true );
			wp_enqueue_script( 'settings-js' );
		
		endif;
	}
	add_action( 'wp_enqueue_scripts', 'xt_enqueue_scripts' );

	function xt_init_custom_menus() {
		// Adds custom Nav Menu Walkers
		if(is_admin())
			require_once('xt_framework/menu_walker/init.php');
		else
			require_once('xt_framework/menu_walker/XT_Walker.php');
	}
	add_action('init', 'xt_init_custom_menus');

	// Custom Menus
	if ( function_exists( 'register_nav_menu' ) ) :
	
		// Main Menu
		register_nav_menu( 'main_menu', 'Main Menu' );
		
	endif;
	
	// Sidebars (Footer only)

	register_sidebar( array(
		'id'		  => 'footer-area-1',
		'name'		=> 'Footer Area #1',
		'description' => '',
		'before_title'  => '<div class="widgettitle"><h3>',
		'after_title'   => '</h3></div>',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>'
	) );
	
	register_sidebar( array(
		'id'		  => 'footer-area-2',
		'name'		=> 'Footer Area #2',
		'description' => '',
		'before_title'  => '<div class="widgettitle"><h3>',
		'after_title'   => '</h3></div>',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>'
	) );
	
	register_sidebar( array(
		'id'		  => 'footer-area-3',
		'name'		=> 'Footer Area #3',
		'description' => '',
		'before_title'  => '<div class="widgettitle"><h3>',
		'after_title'   => '</h3></div>',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>'
	) );
	
	add_filter('widget_text', 'do_shortcode');
	add_filter('widget_title', 'do_shortcode');
	
	// Post Thumbnails Support	
	if (function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'automatic-feed-links' );
	}
	
	// Additional Image Sizes
	if ( function_exists( 'add_image_size' ) ) { 
		// add_image_size( 'blog-size', 700, 9999 );
	}
	
	// Get the slug
	function xt_get_the_slug(){
	  global $post; 
	  return $post->post_name;
	}

	// Get the slug
	function xt_get_the_slug_manual($id){
	  $_post = get_post($id);
	  if(isset($_post->post_name))
	  	return $_post->post_name;
	  else
	  	return false;
	}

	// Add Title Wrapper Hook

	define('REMOVE_INNER_TITLE', true);
	define('REMOVE_INNER_TITLE_PROJECT', true);

	add_action('xt_title_wrapper', 'xt_print_title_wrapper', 10, 2);
	function xt_print_title_wrapper($noTitleTemplate = false, $location) {
		if($noTitleTemplate == false) : // Remove to enable Title Wrapper at No Title Templates
			$title = '';
			if($location != 'index' && $location != 'single' && $location != 'project' && $location != 'archive' && $location != 'category' && $location != 'author' && $location != 'search') :
				$title = get_the_title();
			elseif ($location == 'index' || $location == 'single') :
				$title = of_get_option('title_post'); // of_get_option
			elseif ($location == 'project') :
				if(!REMOVE_INNER_TITLE_PROJECT)
					$title = 'Portfolio'; // of_get_option
				else
					$title = get_the_title();
			endif;
		?>
			<div id="title-wrapper">
				<div class="container" id="title-container">

					<?php if($title != '') : ?>
					<h1><?php echo $title; ?></h1>
					<?php endif; ?>

					<?php if($location == 'archive') : ?>
						<h1><?php single_month_title(' '); ?></h1>
					<?php endif; ?>

					<?php if($location == 'author') : ?>
						<?php the_post(); ?>
						<h1><?php the_author_meta('display_name'); ?></h1>
						<?php rewind_posts(); ?>
					<?php endif; ?>

					<?php if($location == 'category') : ?>
						<h1><?php single_cat_title(''); ?></h1>
					<?php endif; ?>

					<?php if($location == 'search') : ?>
						<h1><?php printf( __( '"%s"', 'identiq' ), get_search_query()); ?></h1>
					<?php endif; ?>

				</div>
			</div> <!-- #title-wrapper -->
		<?php
		endif; // Remove to enable Title Wrapper at No Title Templates
	}

	// Optional Breadcrumb

	add_action('xt_title_wrapper', 'xt_print_breadcrumb', 20, 2); // Adds below title-wrapper
	//add_action('xt_title_wrapper', 'xt_print_breadcrumb', 5, 2); // Adds above title-wrapper
	add_action('xt_page_content_before', 'xt_print_breadcrumb', 20, 1); // Adds inside and before page content
	function xt_print_breadcrumb($noTitleTemplate = false) {
		if($noTitleTemplate == false) : // Remove to enable Breadcrumbs at No Title Templates
		?>
			<?php if(function_exists('bcn_display')) : ?>
				<div id="breadcrumbs-wrapper">
					<div class="breadcrumbs"><?php bcn_display(); ?></div>
				</div> <!-- #breadcrumbs-wrapper -->
			<?php endif; ?>
		<?php
		endif; // Remove to enable Breadcrumbs at No Title Templates
	}

	/* WPML Flag only Selector */

	function xt_language_selector_flags(){
		if( function_exists('icl_get_languages') ) : 
			$languages = icl_get_languages('skip_missing=0&orderby=code');
			if(!empty($languages)){
				foreach($languages as $l){
					if(!$l['active']) echo '<a href="'.$l['url'].'">';
					echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';
					if(!$l['active']) echo '</a>';
				}
			}
		endif;
	}