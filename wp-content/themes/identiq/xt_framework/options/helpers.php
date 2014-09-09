<?php

/* Theme Options Field Helpers
=======================================*/

function customizationOpts( &$options, $id, $name, $attrs = array( 'border' => false, 'font' => false, 'color_a' => false, 'color_a_hover' => false, 'bg' => false, 'bg_hover' => false, 'border_hover' => false, 'color' => false ) ) {

	if(isset($attrs['border']) && $attrs['border'] != false) {
		$options[] = array(
		'name' => __($name . ' Border', 'options_framework_theme'),
		'desc' => __('Define the border color of '.$name, 'options_framework_theme'),
		'id' => $id.'_border',
		'std' => '', 
		'type' => 'color' );
	}

	if(isset($attrs['border_hover']) && $attrs['border_hover'] != false) {
		$options[] = array(
		'name' => __($name . ' Border Hover', 'options_framework_theme'),
		'desc' => __('Define the border color of '.$name.' when hovered', 'options_framework_theme'),
		'id' => $id.'_border_hover',
		'std' => '', 
		'type' => 'color' );
	}

	if(isset($attrs['color']) && $attrs['color'] != false) {
		$options[] = array(
		'name' => __($name . ' Color', 'options_framework_theme'),
		'desc' => __('Define the color of '.$name, 'options_framework_theme'),
		'id' => $id.'_color',
		'std' => '', 
		'type' => 'color' );
	}

	if(isset($attrs['font']) && $attrs['font'] != false) {
		global $typography_mixed_fonts;

		$options[] = array( 'name' => $name . ' Font',
		'desc' => 'Configure the font of '. $name .' (size, font family, style, line height and color).<br /><strong>Font Family and Font Size are mandatory!</strong><br /><small>Note: almost fonts do not have all the font styles avaliable. Check the avaliable styles at <a href="http://www.google.com/fonts/" target="_blank">Google Webfonts</a>.</small>',
		'id' => $id.'_font',
		'std' => array( 'size' => '', 'face' => '', 'color' => '', 'style' => '', 'line_height' => ''),
		'type' => 'typography',
		'options' => array(
			'faces' => $typography_mixed_fonts )
		);
	}

	if(isset($attrs['color_a']) && $attrs['color_a'] != false) {
		$options[] = array(
		'name' => __($name . ' Link Color', 'options_framework_theme'),
		'desc' => __('Define the link color of '.$name, 'options_framework_theme'),
		'id' => $id.'_link',
		'std' => '', 
		'type' => 'color' );
	}

	if(isset($attrs['color_a_hover']) && $attrs['color_a_hover'] != false) {
		$options[] = array(
		'name' => __($name . ' Link Color Hover', 'options_framework_theme'),
		'desc' => __('Define the link color of '.$name.' when hovered.', 'options_framework_theme'),
		'id' => $id.'_link_hover',
		'std' => '', 
		'type' => 'color' );
	}

	if(isset($attrs['bg']) && $attrs['bg'] != false) {
		$options[] = array(
		'name' => __($name . ' Background', 'options_framework_theme'),
		'desc' => __('Define the background color of '.$name, 'options_framework_theme'),
		'id' => $id.'_bg',
		'std' => '', 
		'type' => 'color' );
	}

	if(isset($attrs['bg_hover']) && $attrs['bg_hover'] != false) {
		$options[] = array(
		'name' => __($name . ' Background Hover', 'options_framework_theme'),
		'desc' => __('Define the background color of '.$name.' when hovered.', 'options_framework_theme'),
		'id' => $id.'_bg_hover',
		'std' => '', 
		'type' => 'color' );
	}
}

function printOpts( $id, $attrs = array( 'border' => false, 'font' => false, 'color_a' => false, 'color_a_hover' => false, 'bg' => false, 'bg_hover' => false, 'border_hover' => false, 'color' => false  ) ) {

	if(isset($attrs['border']) && $attrs['border'] != false) {
		xt_printColorBorder($id.'_border', $attrs['border'], ' !important');
	}

	if(isset($attrs['border_hover']) && $attrs['border_hover'] != false) {
		xt_printColorBorder($id.'_border_hover', $attrs['border_hover'], ' !important');
	}

	if(isset($attrs['font']) && $attrs['font'] != false) {
		xt_printFont($id.'_font', $attrs['font'], ' !important');
	}

	if(isset($attrs['color']) && $attrs['color'] != false) {
		xt_printColor($id.'_color', $attrs['color'], ' !important');
	}

	if(isset($attrs['color_a']) && $attrs['color_a'] != false) {
		xt_printColor($id.'_link', $attrs['color_a'], ' !important');
	}

	if(isset($attrs['color_a_hover']) && $attrs['color_a_hover'] != false) {
		xt_printColor($id.'_link_hover', $attrs['color_a_hover'], ' !important');
	}

	if(isset($attrs['bg']) && $attrs['bg'] != false) {
		xt_printColorBg($id.'_bg', $attrs['bg'], ' !important');
	}

	if(isset($attrs['bg_hover']) && $attrs['bg_hover'] != false) {
		xt_printColorBg($id.'_bg_hover', $attrs['bg_hover'], ' !important');
	}
}

/* Print Style Helpers
=======================================*/

// Print Background Rule
function xt_printBg($field, $selector, $sux = '') {
	$field = of_get_option($field);

	if($field['color'] OR $field['image'] != '') :

		echo $selector . ' {';

			$bg = '';

			if($field['image'] != '')
				$bg = 'url("'.$field['image'].'")';

			echo 'background: '.$field['color'].' '.$bg.' '.$field['repeat'].' '.$field['attachment'].' '.$field['position'].$sux.';';

		echo '}';

	endif;
}

// Print Font Style
function xt_printFont($field, $selector, $sufix = ' !important', $blockLH = '') {
	$field = of_get_option($field);

	$color = '';

	echo $selector . ' {';

	// Font Family
	if(isset($field['face']) == true && $field['face'] != '')
		echo 'font-family:'.$field['face'].$sufix.';';
	// Font Size
	if(isset($field['size']) == true && $field['size'] != '')
		echo 'font-size:'.$field['size'].$sufix.';';
	// Line Height
	if(isset($field['line_height']) == true && $field['line_height'] != '')
		echo 'line-height:'.$field['line-height'].$sufix.';';
	// Color
	if(isset($field['color']) == true && $field['color'] != '')
		echo 'color: '.$field['color']. ' !important;';
	// Style
	if(isset($field['style']) == true && $field['style'] != '') :

		if($field['style'] != 'italic' && $field['style'] != 'bold italic')
			echo 'font-weight:'.$field['style'].$sufix.';';
		else if($field['style'] == 'italic')
			echo 'font-style: italic'.$sufix.';';
		else if($field['style'] == 'bold italic')
			echo 'font-style: italic'.$sufix.'; font-weight: bold'.$sufix.';';

	endif;

	echo '}';
}

// Print Font Style
function xt_printFontFamily($field, $selector, $sufix = ' !important', $blockLH = '') {
	$field = of_get_option($field);

	$color = '';

	echo $selector . ' {';

	if($field['face'] != '') :
		
		echo 'font-family: '.$field['face'].$sufix.';';
	
	endif;

	echo '}';
}

// Print Color
function xt_printColor($field, $selector, $sufix = ' !important') {
	$field = of_get_option($field);

	if($field != '') :

		echo $selector . ' {';

			echo 'color: '.$field.' '.$sufix.';';

		echo '}';

	endif;
}

// Print Background Color
function xt_printColorBg($field, $selector, $sufix = '') {
	$field = of_get_option($field);

	if($field != '') :

		echo $selector . ' {';

			echo 'background-color: '.$field.$sufix.';';

		echo '}';

	endif;
}


// Print Border Color
function xt_printColorBorder($field, $selector) {
	$field = of_get_option($field);

	if($field != '') :

		echo $selector . ' {';

			echo 'border-color: '.$field.';';

		echo '}';

	endif;
}

// Disable Shadow
function xt_disableShadow($field, $selector) {
	if(of_get_option($field)) :
		?>
	<?php echo $selector; ?> {
		box-shadow: none;
		-webkit-box-shadow: none;
	}
	<?php
	endif;
}

// Disable Text Shadow
function xt_disableTextShadow($field, $selector) {
	if(of_get_option($field)) :
		?>
	<?php echo $selector; ?> {
		text-shadow: none;
		-webkit-text-shadow: none;
	}
	<?php
	endif;
}

// Get Sub Levels of Color
function xt_getColor($hex, $steps) {
	// Steps should be between -255 and 255. Negative = darker, positive = lighter
	$steps = max(-255, min(255, $steps));

	// Format the hex color string
	$hex = str_replace('#', '', $hex);
	if (strlen($hex) == 3) {
		$hex = str_repeat(substr($hex,0,1), 2).str_repeat(substr($hex,1,1), 2).str_repeat(substr($hex,2,1), 2);
	}

	// Get decimal values
	$r = hexdec(substr($hex,0,2));
	$g = hexdec(substr($hex,2,2));
	$b = hexdec(substr($hex,4,2));

	// Adjust number of steps and keep it inside 0 to 255
	$r = max(0,min(255,$r + $steps));
	$g = max(0,min(255,$g + $steps));
	$b = max(0,min(255,$b + $steps));

	$r_hex = str_pad(dechex($r), 2, '0', STR_PAD_LEFT);
	$g_hex = str_pad(dechex($g), 2, '0', STR_PAD_LEFT);
	$b_hex = str_pad(dechex($b), 2, '0', STR_PAD_LEFT);

	return '#'.$r_hex.$g_hex.$b_hex;
}

// Hex to RGB
function xt_hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb;
}

// Hex to RGB
function xt_hex2rgbImplode($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   return implode(",", $rgb); // returns the rgb values separated by commas
}