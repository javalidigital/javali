<?php

/* The Content Filter */

function xt_the_content_filter( $content ){

	global $post;

	$usebuilder = get_post_meta($post->ID, "usebuilder", true);

	if($usebuilder != '') :

		require_once("widgets.php");				
		require_once("layouts.php");

		$elements = get_post_meta($post->ID, "elements", true);

		/*var_dump($elements);*/

		if($elements != "") :
								
			if (@base64_decode( $elements, true )) {
				$elements = base64_decode( $elements );
				$elements = maybe_unserialize( $elements );
				/*var_dump($elements);*/
			}
							
			if($elements != null && $elements != '') {

				$lb_content = '';

				foreach($elements as $element) {

					if($element[0] == "widget") {
						$lb_content .= 'Widget';
						//$lb_content .= readWidget($element);
						continue;
					}
								
					if($element[0] == "layout" || $element[0] == "wrapper_start" || $element[0] == "wrapper_end") {
						//$lb_content .= 'Layout';
						$lb_content .= readLayout($element);
						continue;
					}		

				}		
			}
						
		endif;

		if(isset($lb_content)) :

			remove_filter('the_content', 'xt_the_content_filter', 99);

			$lb_content = apply_filters("the_content", $lb_content);

			add_filter( 'the_content', 'xt_the_content_filter', 99);
			
			return $lb_content;

		else :

			return $content;

		endif;

	endif;

	return $content;
}

add_filter( 'the_content', 'xt_the_content_filter', 99);

/*
	Layout Builder Functions
*/

	function readWidget($w) {
		$class = $w[1];
		$content = $w[2];
		$fn = $class;

		return $fn($content);
	}
						
	function readLayout($l) {
		$class = $l[1];
		$widgets = $l[2];
							
		$off = 0;
		$c = 0;
		$length = count($widgets);
		$output = '';
							
		while($c < $length) {
			$_inc = 4;

			$_tmpArr = array_slice($widgets, $off, $_inc);
			if($_tmpArr[1] == 'section_wrapper' OR $_tmpArr[1] == 'section_wrapper_end')
				$_inc = 5;

			$output .= readWidget(array_slice($widgets, $off, $_inc));
			$c += $_inc;
			$off += $_inc;
		}

		return builder_column($output, $class);
	}

?>