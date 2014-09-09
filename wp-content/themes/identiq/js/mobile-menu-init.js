
jQuery(document).ready( function($) {
	jQuery('#topnav ul, #mainnav ul').mobileMenu({
		switchWidth: 979,
		topOptionText: mobile_menu_init_translation.select_page,
		indentString: '&nbsp;&nbsp;&nbsp;'
	});
});