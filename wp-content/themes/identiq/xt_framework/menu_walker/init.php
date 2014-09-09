<?php
/* This file adds some custom fields and a custom 
walker to allow using the Custon Nav Menus with One Single Page themes.
*/

/* Block direct load */
if ( !function_exists( 'is_admin' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}



// Adds custom fields actions
add_action( 'wp_edit_nav_menu_walker', 'xt_edit_nav_menu_walker' );
add_action( 'wp_update_nav_menu_item', 'xt_update_nav_menu_item', 10, 3 );
	
	/**
	 * Change the admin menu walker class name.
	 * @param string $walker
	 * @return string
	 */
	function xt_edit_nav_menu_walker( $walker ) {

		require_once('XT_Walker_Nav_Menu_Edit.php');

		// swap the menu walker class only if it's the default wp class (just in case)
		if ( $walker === 'Walker_Nav_Menu_Edit' ) {
			$walker = 'XT_Walker_Nav_Menu_Edit';
		}
		return $walker;
	}

	/**
	 * Save post meta. Menu items are just posts of type "menu_item".
	 * 
	 * 
	 * @param type $menu_id
	 * @param type $menu_item_id
	 * @param type $args
	 */
	function xt_update_nav_menu_item($menu_id, $menu_item_id, $args) {
		
		if ( isset( $_POST[ "xt_menu_item_external_open_$menu_item_id" ] ) ) {
			update_post_meta( $menu_item_id, 'xt_menu_item_external_open', $_POST[ "xt_menu_item_external_open_$menu_item_id" ] );
		} else {
			delete_post_meta( $menu_item_id, 'xt_menu_item_external_open' );
		}
	}