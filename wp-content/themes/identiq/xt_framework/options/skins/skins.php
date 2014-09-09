<?php

	add_filter('xt_apply_skin', 'xt_apply_custom_skin');

	function xt_apply_custom_skin($opts) {
		
		if(isset($opts['default_skin'])) {
			$previousSkin = of_get_option('default_skin');
			$actualSkin = $opts['default_skin'];

			if($previousSkin != $actualSkin) :
				if(xt_getSkin($actualSkin) != false)
					$opts = array_merge($opts, xt_getSkin($actualSkin));
			endif;
		}

		return $opts;
	}

	// #\b[0-9A-F]{6}\b - search hex when trying to build the default fields
	// http://rvision.ws/cssextractor/ - CSS Extractor

	//add_action('optionsframework_after_validate', 'xt_print_opts_fields');
	function xt_print_opts_fields() {

		$opts = get_option('identiq');

		$unallowed = array('logo_text', 'logo', 'logo_retina', 'logo_sub', 'logo_margin_left',
			'logo_margin_top', 'logo_margin_bottom', 'favicon_default', 'favicon_nonretina_iphone',
			'favicon_nonretina_ipad', 'favicon_retina_iphone', 'favicon_retina_ipad',
			'gcode', 'menu_type', 'menu_type', 'disable_responsive', 'wpml_footer', 'wpml_header',
			'title_post', 'down_footer_text', 'down_footer_sub_text', 'custom_css', 'default_skin',
			  );
		$opts = array_diff_key($opts, array_flip($unallowed));

		ob_start();
			$var = var_export($opts, true);
			$var = str_replace('),', '),<br />', $var);
			echo $var;
			$r = ob_get_contents();
		ob_end_clean();
		add_settings_error(
		'xt_text_string',
		'xt_texterror',
		$r,
		'error'
		);
	}

	include( 'skins_fn.php' );