<?php
/**
 * @package xt_shortcodes
 * @version 1.4.0
 */
/*
Plugin Name: XiaoThemes WordPress Shortcodes
Plugin URI: 
Description: Add a lot of shortcodes to your WordPress installation and also adds a nice Shortcode Generator. Really easy and useful for you, you will have everything you want with this incredible package.
Author: XiaoThemes
Version: 1.4.0
Author URI: http://www.xiaothemes.com
*/

/*****************
	Init Method
******************/

$xt_scs_brute_dir = str_replace('/xt_shortcodes.php', '', plugin_basename(__FILE__));
//$xt_scs_brute_dir = plugin_basename(__FILE__);

define("XT_SCS_DIR", $xt_scs_brute_dir);

add_action( 'init', 'xt_setup' );

function xt_setup() {

	load_plugin_textdomain( 'xt-shortcodes', false, 'xt_shortcodes/languages' );

	if(!is_admin()) {
		require_once( plugin_dir_path(__FILE__) . "shortcodes/shortcodes.php" );
	}
	else {
		require_once( plugin_dir_path(__FILE__) . "shortcodes/tinymce/tinymce_shortcodes.php" );
	}
}


/*****************
	Declaration No Generator Shortcodes
******************/

global $XT_CUSTOM_NONGEN;

$XT_CUSTOM_NONGEN = '';

add_action("xt_add_non_generator", "xt_add_nongen_shortcodes", 10);

function xt_add_nongen_shortcodes() {
	global $XT_CUSTOM_NONGEN;

	echo $XT_CUSTOM_NONGEN;
}

/*****************
	Custom Shortcodes to Menu
******************/

global $XT_CUSTOM_MENU;

$XT_CUSTOM_MENU = '';

add_action("xt_add_menu", "xt_add_custom_menu", 10);

function xt_add_custom_menu() {
	global $XT_CUSTOM_MENU;

	echo $XT_CUSTOM_MENU;
}