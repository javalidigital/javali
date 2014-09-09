<?php
/**
 * @package xt_sliders
 * @version 1.3
 */
/*
Plugin Name: XiaoThemes Sliders WordPress Plugin
Plugin URI: http://www.xiaothemes.com
Description: Add alot of responsive sliders to your WordPress website with WYSIWYG Dashobard.
Author: XiaoThemes
Version: 1.3
Author URI: http://www.xiaothemes.com
*/

$xt_sld_brute_dir = str_replace('/xt_sliders.php', '', plugin_basename(__FILE__));
//$xt_scs_brute_dir = plugin_basename(__FILE__);

define("XT_SLD_DIR", $xt_sld_brute_dir);

add_action( 'init', 'xt_sliders_setup' );

function xt_sliders_setup() {

	wp_enqueue_script( 'jquery' );

	load_plugin_textdomain( 'dc-sliders-plugin', false, 'xt_sliders/languages' );

	require_once( plugin_dir_path(__FILE__) . "admin/init.php" );

	add_action( 'wp_print_scripts', 'xt_wp_addvar' );

	/* IMAGES SIZES */

	add_image_size( "Mini Thumbnail", 100, 80, true );

	function xt_insert_custom_image_sizes( $sizes ) {
	  global $_wp_additional_image_sizes;
	  if ( empty($_wp_additional_image_sizes) )
	    return $sizes;

	  foreach ( $_wp_additional_image_sizes as $id => $data ) {
	    if ( !isset($sizes[$id]) )
	      $sizes[$id] = ucfirst( str_replace( '-', ' ', $id ) );
	  }

	  return $sizes;
	}
	add_filter( 'image_size_names_choose', 'xt_insert_custom_image_sizes' );

	if(!is_admin()) {
		/*
		require_once( plugin_dir_path(__FILE__) . "shortcodes/shortcodes.php" );
		require_once( plugin_dir_path(__FILE__) . "shortcodes/custom_shortcodes.php" );
		*/
	}
	else {
		/*
		require_once( plugin_dir_path(__FILE__) . "shortcodes/tinymce/tinymce_shortcodes.php" );
		*/
		require_once( plugin_dir_path(__FILE__) . "admin/tinymce/tinymce_shortcodes.php" );
		
		// Files to use in new Media Uploader
			
	}
}

	define("xt_PLUGIN_DIR", plugins_url("", __FILE__));

	function xt_wp_addvar() {
		echo '<script type="text/javascript">var xt_PLUGIN_DIR = "'. plugins_url("", __FILE__) .'";</script>';
	} 
	
	/*******************
		ADMIN SCRIPTS
	********************/

	function xt_sliders_admin_wp_enqueue_scripts() {

    	wp_enqueue_script( 'jquery' );
    	/*wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');*/

		wp_enqueue_media();

		wp_register_script('dc-upload', plugins_url("admin/assets/js/upload-box.js", __FILE__), array('jquery','media-upload','thickbox'));
		wp_enqueue_script('dc-upload');

		wp_enqueue_script('jquery-ui-core');
		wp_enqueue_script('jquery-ui-widget');
		wp_enqueue_script('	jquery-ui-mouse');
		wp_enqueue_script('jquery-ui-sortable');

		wp_register_script('slider-manager', plugins_url("admin/assets/js/slider-manager.js", __FILE__), array('jquery','media-upload','thickbox'));
		wp_enqueue_script('slider-manager');

		wp_register_script('layer-manager-js', plugins_url("admin/assets/js/layer-manager.js", __FILE__), array('jquery','media-upload','thickbox'));
		//wp_enqueue_script('layer-manager-js');

    	if(true == is_admin()) :

		/*** NIVO SLIDER ***/
		//wp_register_script( 'dc-nivo-slider-js', plugins_url("frontend/sliders/js/nivo-slider/jquery.nivo.slider.pack.js", __FILE__), array( 'jquery' ), '1', true );

		endif;
	}	
 	add_action( 'admin_enqueue_scripts', 'xt_sliders_admin_wp_enqueue_scripts' );

 	/****************/

 	function xt_sliders_admin_wp_enqueue_styles() {

 		wp_enqueue_style('thickbox');

    	wp_register_style( 'dc-admin-style', plugins_url("admin/assets/css/admin_styles.css", __FILE__), array(), '1', 'all' );
    	wp_enqueue_style( 'dc-admin-style' );

    	wp_register_style( 'dc-layer-manager-style', plugins_url("admin/assets/css/layer_manager.css", __FILE__), array(), '1', 'all' );

    	wp_register_style( 'dc-captions-css-admin', plugins_url("frontend/sliders/revolution/rs-plugin/css/captions.css", __FILE__), 
 			array(), '1', 'all' );	
			
		wp_register_style( 'dc-settings-css-admin', plugins_url("frontend/sliders/revolution/rs-plugin/css/settings.css", __FILE__), 
 			array(), '1', 'all' );	

	}
	add_action( 'admin_print_styles', 'xt_sliders_admin_wp_enqueue_styles' );


	/********************
		FRONTEND SCRIPTS
	*********************/

    function xt_sliders_wp_enqueue_scripts() {

    	wp_enqueue_script( 'jquery' );

    	if(false == is_admin()) :

		/*** NIVO SLIDER ***/
		wp_register_script( 'dc-nivo-slider-js', plugins_url("frontend/sliders/js/nivo-slider/jquery.nivo.slider.pack.js", __FILE__), 
			array( 'jquery' ), '1', true );

		/*** CAMERA SLIDER ***/

		//wp_register_script( 'dc-mobile-customized-js', plugins_url("frontend/sliders/js/camera/jquery.mobile.customized.min.js", __FILE__), 
		//	array( '' ), '1', true );

		wp_register_script( 'dc-jquery-easing', plugins_url("frontend/sliders/js/jquery.easing.js", __FILE__), 
			array( 'jquery' ), '1', true );

		wp_register_script( 'dc-camera-js', plugins_url("frontend/sliders/js/camera/camera.min.js", __FILE__), 
			array( 'jquery' ), '1', true );

		/*** KENBURNS SLIDER ***/

		/*
		wp_register_script( 'dc-waitforimages-js', plugins_url("frontend/sliders/kbpanel-slider/js/jquery.waitforimages.js", __FILE__), 
			array( 'jquery' ), '1', true );	
			
		wp_register_script( 'dc-cssAnimate-js', plugins_url("frontend/sliders/kbpanel-slider/js/jquery.cssAnimate.mini.js", __FILE__), 
			array( 'jquery' ), '1', true );	
			
		wp_register_script( 'dc-touchwipe-js', plugins_url("frontend/sliders/kbpanel-slider/js/jquery.touchwipe.min.js", __FILE__), 
			array( 'jquery' ), '1', true );	
		*/
			
		wp_register_script( 'dc-kenburns-panel-js', plugins_url("frontend/sliders/kbpanel-slider/js/jquery.templateaccess.kenburns-panel-min.js", __FILE__), 
			array( 'jquery' ), '1', true );	


		/*** REVOLUTION SLIDER ***/ 

		/*
		wp_register_script( 'dc-templateaccess-plugins-js', plugins_url("frontend/sliders/revolution/rs-plugin/js/jquery.templateaccess.plugins.min.js", __FILE__), 
			array( 'jquery' ), '1', true );		
			
		wp_register_script( 'dc-templateaccess-revolution-js', plugins_url("frontend/sliders/revolution/rs-plugin/js/jquery.templateaccess.revolution.js", __FILE__), 
			array( 'jquery' ), '1', true );
		*/

		wp_register_script( 'dc-templateaccess-revolution-js-min', plugins_url("frontend/sliders/revolution/rs-plugin/js/jquery.templateaccess.revolution-min.js", __FILE__), 
			array( 'jquery' ), '1', true );		
						
		/*** ELASTISLIDE ***/	
		
		/*
		wp_register_script( 'dc-modernizr-js', plugins_url("frontend/sliders/js/elastislide/modernizr.custom.17475.js", __FILE__), 
			array( 'jquery' ), '1', true );	
		
		wp_register_script( 'dc-jquerypp-js', plugins_url("frontend/sliders/js/elastislide/jquerypp.custom.js", __FILE__), 
			array( 'jquery' ), '1', true );
		*/ 

		wp_register_script( 'dc-elastislide-js', plugins_url("frontend/sliders/js/elastislide/jquery.elastislide-min.js", __FILE__), 
			array( 'jquery' ), '1', true );	
		
		
		/*** FLEXSLIDER ***/

		/*
		
		wp_register_script( 'dc-modernizr-js', plugins_url("frontend/sliders/js/flexslider/modernizr.js", __FILE__), 
			array( 'jquery' ), '1', true );	

		wp_register_script( 'dc-min-js', plugins_url("frontend/sliders/js/flexslider/jquery.min.js", __FILE__), 
			array( 'jquery' ), '1', true );	
		
		wp_register_script( 'dc-easing-js', plugins_url("frontend/sliders/js/flexslider/jquery.easing.js", __FILE__), 
			array( 'jquery' ), '1', true );

		wp_register_script( 'dc-mousewheel-js', plugins_url("frontend/sliders/js/flexslider/jquery.mousewheel.js", __FILE__), 
			array( 'jquery' ), '1', true );		

		wp_register_script( 'dc-demo-js', plugins_url("frontend/sliders/js/flexslider/demo.js", __FILE__), 
			array( 'jquery' ), '1', true );	
		*/	
			
		wp_register_script( 'dc-flexslider-js', plugins_url("frontend/sliders/js/flexslider/jquery.flexslider-min.js", __FILE__), 
			array( 'jquery' ), '1', true );		

				
		
		
		endif;
	}	
 	add_action( 'init', 'xt_sliders_wp_enqueue_scripts' );

 	/****************/

 	function xt_sliders_wp_enqueue_styles() {

 		if(false == is_admin()) :

 		/*** NIVO SLIDER ***/

 		wp_register_style( 'dc-nivo-default-theme', plugins_url("frontend/sliders/css/nivo-slider/default-theme/default.css", __FILE__), 
 			array(), '1', 'all' );

		wp_register_style( 'dc-nivo-slider', plugins_url("frontend/sliders/css/nivo-slider/nivo-slider-min.css", __FILE__), 
			array(), '1', 'all' );

		/*** CAMERA SLIDER ***/

		wp_register_style( 'dc-camera-slider-css', plugins_url("frontend/sliders/css/camera/camera-min.css", __FILE__), 
 			array(), '1', 'all' );

		/*** KENBURNS SLIDER ***/
		
		wp_register_style( 'dc-kenburns-panel-settings-css', plugins_url("frontend/sliders/kbpanel-slider/css/kenburns-panel-settings-min.css", __FILE__), 
 			array(), '1', 'all' );
		
		/*** REVOLUTION SLIDER ***/

		/*
		wp_register_style( 'dc-configs-css', plugins_url("frontend/sliders/revolution/rs-plugin/css/configs.css", __FILE__), 
 			array(), '1', 'all' );	

		wp_register_style( 'dc-captions-css', plugins_url("frontend/sliders/revolution/rs-plugin/css/captions.css", __FILE__), 
 			array(), '1', 'all' );	
			
		wp_register_style( 'dc-settings-css', plugins_url("frontend/sliders/revolution/rs-plugin/css/settings.css", __FILE__), 
 			array(), '1', 'all' );	
		*/

		wp_register_style( 'dc-revolution-min-css', plugins_url("frontend/sliders/revolution/rs-plugin/css/revolution-min.css", __FILE__), 
 			array(), '1', 'all' );	
			
		/*** ELASTISLIDE ***/
					
		/*wp_register_style( 'dc-elastislide-css', plugins_url("frontend/sliders/css/elastislide/elastislide.css", __FILE__), 
 			array(), '1', 'all' );

		wp_register_style( 'dc-custom-css', plugins_url("frontend/sliders/css/elastislide/custom.css", __FILE__), 
 			array(), '1', 'all' );*/

		wp_register_style( 'dc-elastislide-css', plugins_url("frontend/sliders/css/elastislide/elastislide-min.css", __FILE__), 
 			array(), '1', 'all' );	
			
		/*** FLEXSLIDER ***/	

		/*
		wp_register_style( 'dc-demo-css', plugins_url("frontend/sliders/css/flexslider/demo.css", __FILE__), 
 			array(), '1', 'all' );
		*/
			
		wp_register_style( 'dc-flexslider-css', plugins_url("frontend/sliders/css/flexslider/flexslider-min.css", __FILE__), 
 			array(), '1', 'all' );	

			
		endif;
	}
	add_action( 'init', 'xt_sliders_wp_enqueue_styles' );

	
	/*** CUSTOM WIDGET ***/

	require_once( plugin_dir_path(__FILE__) . "admin/widgets.php" );

	add_action( 'widgets_init', 'xt_slider_widgets' );


	function xt_slider_widgets() {
		register_widget( 'XTSliderWidget' );
	}
