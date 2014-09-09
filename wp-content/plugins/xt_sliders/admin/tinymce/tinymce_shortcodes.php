<?php
/**
 *
 * xt_slider_wp WordPress Theme Framework
 * TinyMCE Shortcode Integration
 *
 * @author  Jason Bobich
 * @credit	Based on the work of the Shortcode Ninja plugin by VisualShortcodes.com
 *
 */

class xt_slider_wp_TinyMCE_Shortcodes {
	
	##############################################################
	# Constructor
	##############################################################
	
	function xt_slider_wp_TinyMCE_Shortcodes() {
	
		//admin_init
		add_action( 'admin_init', array( &$this, 'init' ) );
		
		//Only use wp_ajax if user is logged in
		add_action( 'wp_ajax_xt_slider_wp_check_url_action', array( &$this, 'ajax_action_check_url' ) );
	
	}

	##############################################################
	# Get everything started
	##############################################################

	function init() {
	
		if ( ( current_user_can( 'edit_posts' ) || current_user_can( 'edit_pages' ) ) && get_user_option('rich_editing') == 'true' )  {
		
		  	// TinyMCE plugin stuff
			add_filter( 'mce_buttons', array( &$this, 'filter_mce_buttons' ) );
			add_filter( 'mce_external_plugins', array( &$this, 'filter_mce_external_plugins' ) );
			
			// TinyMCE shortcode plugin CSS
			wp_register_style( 'xt_slider_wp-tinymce-shortcodes', plugins_url("layout/css/tinymce_shortcodes.css", __FILE__) );
			wp_enqueue_style( 'xt_slider_wp-tinymce-shortcodes' );
			
		}
	
	}
	
	##############################################################
	# Filter mce buttons
	##############################################################
	
	function filter_mce_buttons( $buttons ) {
		array_push( $buttons, '|', 'xt_slider_wp_shortcodes_button' );
		return $buttons;
	}
	
	##############################################################
	# Actually add tinyMCE plugin attachment
	##############################################################
	
	function filter_mce_external_plugins( $plugins ) {
        $plugins['xt_slider_wpShortcodes'] = plugins_url("editor_plugin.php", __FILE__);
        return $plugins;
	}

	##############################################################
	# Ajax Check
	##############################################################
	
	function ajax_action_check_url() {
		$hadError = true;
		$url = isset( $_REQUEST['url'] ) ? $_REQUEST['url'] : '';
		if ( strlen( $url ) > 0  && function_exists( 'get_headers' ) ) {
			$file_headers = @get_headers( $url );
			$exists       = $file_headers && $file_headers[0] != 'HTTP/1.1 404 Not Found';
			$hadError     = false;
		}
		echo '{ "exists": '. ($exists ? '1' : '0') . ($hadError ? ', "error" : 1 ' : '') . ' }';
		die();
	}


##################################################################
} # end xt_slider_wp_TinyMCE_Shortcodes class
##################################################################

$xt_slider_wp_shortcode_tinymce = new xt_slider_wp_TinyMCE_Shortcodes();
?>