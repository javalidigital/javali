<?php


// don't load directly
if ( !function_exists( 'is_admin' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

if ( !class_exists( "XT_Walker_Nav_Menu_Edit" ) && class_exists( 'Walker_Nav_Menu_Edit' ) ):

class XT_Walker_Nav_Menu_Edit extends Walker_Nav_Menu_Edit {
	
	
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		
		// append next menu element to $output
		parent::start_el($output, $item, $depth, $args);
		
		// now let's add a custom form field
		
		if ( ! class_exists( 'phpQuery') ) {
			// load phpQuery at the last moment, to minimise chance of conflicts
			require_once('phpQuery-onefile.php');
		}
		
		$_doc = phpQuery::newDocumentHTML( $output );
		$_li = phpQuery::pq( 'li.menu-item:last' ); // ":last" is important, because $output will contain all the menu elements before current element
		
		// if the last <li>'s id attribute doesn't match $item->ID something is very wrong, don't do anything
		// just a safety, should never happen...
		$menu_item_id = str_replace( 'menu-item-', '', $_li->attr( 'id' ) );
		if( $menu_item_id != $item->ID ) {
			return;
		}
		
		// fetch previously saved meta for the post (menu_item is just a post type)
		$external_open = esc_attr( get_post_meta( $menu_item_id, 'xt_menu_item_external_open', true ) );

		$external_open_checked = '';
		if($external_open == 'on')
			$external_open_checked = ' checked="checked"';
		
		// by means of phpQuery magic, inject a new input field
		$_li->find( '.link-to-original' )
			->after(  "<p class='description' style='padding-top: 10px;'><label><input type='checkbox' value='on' $external_open_checked name='xt_menu_item_external_open_$menu_item_id' /> This item won't be listed in home (open externally)</label></p>" );
		
		// swap the $output
		$output = $_doc->html();
		
	}

}

endif;
