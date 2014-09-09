<?php

	function xt_bool($s) {
		if($s == 'yes')
			$s = 'true';
		else
			$s = 'false';

		return $s;
	}

	/*-----------------------------------------------------------------------------------*/
	/* WP Auto Formatting Fix w/Raw shortocde
	/*-----------------------------------------------------------------------------------*/	

	if(!function_exists("xt_wp_empty_paragraph_fix")) :

		add_filter('the_content', 'xt_wp_empty_paragraph_fix');

		function xt_wp_empty_paragraph_fix($content)
		{   
		    $array = array (
		        '<p>[' => '[', 
		        ']</p>' => ']', 
		        ']<br />' => ']'
		    );

		    $content = strtr($content, $array);

			return $content;
		}

	endif;

	/*-----------------------------------------------------------------------------------*/
	/* [xt_slider]
	/*-----------------------------------------------------------------------------------*/

	function xt_slider($atts) {
		extract(shortcode_atts(array(
			'id' => '',
		), $atts));

		if($id == '') return '';

		$query_slider = get_posts( array('name' => $id, 'post_type' => 'xt_sliders', 'post_status' => 'publish',) );

		if( $query_slider ) {
		
			//return var_export( $query_slider[0]->ID, true );

			$type = get_post_meta($query_slider[0]->ID, 'slider-type', true);
			
			$_ID = $query_slider[0]->ID;
			
			$output = '';

			if($type == '')
				return '';

			if($type == 'nivo')
				$output = xt_slider_nivo($_ID);

			if($type == 'camera')
				$output = xt_slider_camera($_ID);

			if($type == 'kenburnpanel')
				$output = xt_slider_kenburnpanel($_ID);

			if($type == 'ios')
				$output = xt_slider_ios($_ID);

			if($type == 'dream')
				$output = xt_slider_dream($_ID);

			if($type == 'scarousel')
				$output = xt_slider_scarousel($_ID);

			if($type == 'flick')
				$output = xt_slider_flick($_ID);

			if($type == 'jfancytile')
				$output = xt_slider_jfancytile($_ID);

			if($type == 'revolution')
				$output = xt_slider_revolution($_ID);

			if($type == 'piecemaker')

				$output = xt_slider_piecemaker($_ID);

			if($type == 'mediaslider')
				$output = xt_slider_mediaslider($_ID);

			if($type == 'elastislide')
				$output = xt_slider_elastislide($_ID);
			
			if($type == 'flexslider')
				$output = xt_slider_flexslider($_ID);			
		}
		//wp_reset_postdata();
		//rewind_posts();
		
		return $output;		
	}
	add_shortcode('xt_slider', 'xt_slider');