<?php
/**
 * Default Function (DO NOT modify)
**/

require_once('helpers.php');
include('skins/skins.php');

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

function optionsframework_theme_name() {
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	return $themename;
}

/**
 * XT Options Array
 */

function optionsframework_options($_interal = null) {

	/* Original and Google Fonts */

	global $typography_mixed_fonts;
	
	$typography_mixed_fonts = array_merge( options_typography_get_os_fonts() , options_typography_get_google_fonts() );
	asort($typography_mixed_fonts);

	/* Layout Configurations */

		$layout_opts = array(
			'boxed' => __('Boxed', 'options_framework_theme'),
			'wide' => __('Wide', 'options_framework_theme')
		);

	/* Layout: Menu */

		$menu_style = array(
			'solid' => __('Solid', 'options_framework_theme'),
			'opaque' => __('Opacity', 'options_framework_theme')
		);

	/* Layout: Content */

		$body_bg = array(
			'color' => '',
			'image' => '',
			'repeat' => 'repeat',
			'position' => 'top center',
			'attachment'=>'scroll' );

		$content_bg = array(
			'color' => '',
			'image' => '',
			'repeat' => 'repeat',
			'position' => 'top center',
			'attachment'=>'scroll' );

		$header_bg = array(
			'color' => '',
			'image' => '',
			'repeat' => 'repeat',
			'position' => 'top center',
			'attachment'=>'scroll' );

	/* Layout: Footer */

		$footer_bg = array(
			'color' => '',
			'image' => '',
			'repeat' => 'repeat',
			'position' => 'top center',
			'attachment'=>'scroll' );

	/* Layout: Down Footer */

		$downfooter_bg = array(
			'color' => '',
			'image' => '',
			'repeat' => 'repeat',
			'position' => 'top center',
			'attachment'=>'scroll' );

	// Image Paths
	$imagepath =  get_template_directory_uri() . '/xt_framework/options/schemes/';

	$patternpath = get_template_directory_uri() . '/xt_framework/options/patterns/';

	$options = array();

	//delete_transient( 'xt_theme_opts' );
	//var_dump($_interal);
	$section = null;
	if(isset($_GET['section']))
		$section = $_GET['section'];

		if($_interal == 1 || $_interal == null) :

			// General

			$options[] = array(
				'name' => __('General', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 1,
				'external' => ($section != null && $section != 1 ? true : false )
				);

			if(!isset($_GET['section']) || $_GET['section'] == 1  || $_interal == 1)
			include('sections/general.php');

			$options[] = array(
				'name' => __('Layout', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 1,
				'external' => ($section != null && $section != 1 ? true : false )
				);

			if(!isset($_GET['section']) || $_GET['section'] == 1  || $_interal == 1)
			include('sections/layout.php');

			$options[] = array(
				'name' => __('Skins', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 1,
				'external' => ($section != null && $section != 1 ? true : false )
				);

			if(!isset($_GET['section']) || $_GET['section'] == 1  || $_interal == 1)
			include('sections/skins.php');
				
			$options[] = array(
				'name' => __('Header', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 1,
				'external' => ($section != null && $section != 1 ? true : false )
				);

			
			if(!isset($_GET['section']) || $_GET['section'] == 1  || $_interal == 1)
			include('sections/header.php');

			/*
			$options[] = array(
				'name' => __('Titles', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 1,
				'external' => ($section != null && $section != 1 ? true : false )
				);

			if(!isset($_GET['section']) || $_GET['section'] == 1  || $_interal == 1)
			include('sections/content.php');
			*/

			$options[] = array(
				'name' => __('Footer', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 1,
				'external' => ($section != null && $section != 1 ? true : false )
				);

			if(!isset($_GET['section']) || $_GET['section'] == 1  || $_interal == 1)
			include('sections/footer.php');

			$options[] = array(
				'name' => __('Down Footer', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 1,
				'external' => ($section != null && $section != 1 ? true : false )
				);

			if(!isset($_GET['section']) || $_GET['section'] == 1  || $_interal == 1)
			include('sections/down_footer.php');

		endif;

		///////////////////
			
			$options[] = array(
				'name' => __('Content Elements', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 2,
				'external' => ($section == null || $section != 2 ? true : false )
				);

			//if( $_interal == true || (isset($_GET['section']) && $_GET['section'] == 2) )
			if(isset($_GET['section']) && $_GET['section'] == 2  || $_interal == 2)
			include('sections/pages.php');

			$options[] = array(
				'name' => __('Sidebar', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 2,
				'external' => ($section == null || $section != 2 ? true : false )
				);

			if(isset($_GET['section']) && $_GET['section'] == 2  || $_interal == 2)
			include('sections/sidebar.php');

			$options[] = array(
				'name' => __('Blog', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 2,
				'external' => ($section == null || $section != 2 ? true : false )
				);

			if(isset($_GET['section']) && $_GET['section'] == 2  || $_interal == 2)
			include('sections/blog.php');

		///////////////////

			$options[] = array(
				'name' => __('Post', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 3,
				'external' => ($section == null || $section != 3 ? true : false )
				);

			if(isset($_GET['section']) && $_GET['section'] == 3  || $_interal == 3)
			include('sections/post_single.php');

			$options[] = array(
				'name' => __('Portfolio', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 3,
				'external' => ($section == null || $section != 3 ? true : false )
				);

			if(isset($_GET['section']) && $_GET['section'] == 3  || $_interal == 3)
			include('sections/portfolio.php');

		///////////////////

			$options[] = array(
				'name' => __('Project', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 4,
				'external' => ($section == null || $section != 4 ? true : false )
				);

			if(isset($_GET['section']) && $_GET['section'] == 4  || $_interal == 4)
			include('sections/project_single.php');

			$options[] = array(
				'name' => __('Sliders', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 4,
				'external' => ($section == null || $section != 4 ? true : false )
				);

			if(isset($_GET['section']) && $_GET['section'] == 4  || $_interal == 4)
			include('sections/sliders.php');

		///////////////////

			$options[] = array(
				'name' => __('Shortcodes', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 5,
				'external' => ($section == null || $section != 5 ? true : false )
				);

			if(isset($_GET['section']) && $_GET['section'] == 5  || $_interal == 5)
			include('sections/shortcodes.php');

		///////////////////

		///////////////////

			$options[] = array(
				'name' => __('Shortcodes II', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 12,
				'external' => ($section == null || $section != 12 ? true : false )
				);

			if(isset($_GET['section']) && $_GET['section'] == 12  || $_interal == 12)
			include('sections/shortcodes_two.php');

		///////////////////

		///////////////////

			$options[] = array(
				'name' => __('Woo General', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 6,
				'external' => ($section == null || $section != 6 ? true : false )
				);

			if(isset($_GET['section']) && $_GET['section'] == 6  || $_interal == 6)
			include('sections/woo_general.php');

		///////////////////

		///////////////////

			$options[] = array(
				'name' => __('Woo Shop', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 7,
				'external' => ($section == null || $section != 7 ? true : false )
				);

			if(isset($_GET['section']) && $_GET['section'] == 7  || $_interal == 7)
			include('sections/woo_shop.php');

		///////////////////

		///////////////////

			$options[] = array(
				'name' => __('Woo Widgets', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 8,
				'external' => ($section == null || $section != 8 ? true : false )
				);

			if(isset($_GET['section']) && $_GET['section'] == 8  || $_interal == 8)
			include('sections/woo_widgets.php');

		///////////////////

		///////////////////

			$options[] = array(
				'name' => __('Woo Product', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 9,
				'external' => ($section == null || $section != 9 ? true : false )
				);

			if(isset($_GET['section']) && $_GET['section'] == 9  || $_interal == 9)
			include('sections/woo_product.php');

		///////////////////

		///////////////////

			$options[] = array(
				'name' => __('Woo Cart', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 10,
				'external' => ($section == null || $section != 10 ? true : false )
				);

			if(isset($_GET['section']) && $_GET['section'] == 10  || $_interal == 10)
			include('sections/woo_cart.php');

		///////////////////

		///////////////////

			$options[] = array(
				'name' => __('Woo Checkout', 'options_framework_theme'),
				'type' => 'heading',
				'section' => 11,
				'external' => ($section == null || $section != 11 ? true : false )
				);

			if(isset($_GET['section']) && $_GET['section'] == 11  || $_interal == 11)
			include('sections/woo_checkout.php');

		///////////////////

		// Custom
		include('sections/custom.php');	

	return $options;
}

/*
 * This is an example of how to add custom scripts to the options panel.
 * This example shows/hides an option when a checkbox is clicked.
 */

add_action('optionsframework_custom_scripts', 'optionsframework_custom_scripts');

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function($) {

	/*
	$('#example_showhidden').click(function() {
  		$('#section-example_text_hidden').fadeToggle(400);
	});

	if ($('#example_showhidden:checked').val() !== undefined) {
		$('#section-example_text_hidden').show();
	}
	*/

});
</script>

<?php
}