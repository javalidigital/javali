<?php

$slider_mode = isset( $values["ios-slider-mode"] ) ? esc_attr( $values["ios-slider-mode"][0] ) : "Responsive";
$slider_w = isset( $values["ios-slider-w"] ) ? esc_attr( $values["ios-slider-w"][0] ) : "960";
$slider_h = isset( $values["ios-slider-h"] ) ? esc_attr( $values["ios-slider-h"][0] ) : "350";

// New fields here
$scrollbar = isset( $values["ios-scrollbar"] ) ? esc_attr( $values["ios-scrollbar"][0] ) : "false";
$scrollbarlocation = isset( $values["ios-scrollbarlocation"] ) ? esc_attr( $values["ios-scrollbarlocation"][0] ) : "bottom";
$keyboardcontrols = isset( $values["ios-keyboardcontrols"] ) ? esc_attr( $values["ios-keyboardcontrols"][0] ) : "true";
$autoslide = isset( $values["ios-autoslide"] ) ? esc_attr( $values["ios-autoslide"][0] ) : "false";
$desktopclickdrag = isset( $values["ios-desktopclickdrag"] ) ? esc_attr( $values["ios-desktopclickdrag"][0] ) : "true";
$infinitslider = isset( $values["ios-infinitslider"] ) ? esc_attr( $values["ios-infinitslider"][0] ) : "false";
?>

<div class="dc-input" id="dc-slider-mode">
	<label>Slider Mode</label>
	<span class="dc-radio"><input type="radio" name="ios-slider-mode" value="Responsive"<?php if($slider_mode == "Responsive") echo ' checked="checked"'; ?> />Responsive</span> 
	<span class="dc-radio"><input type="radio" name="ios-slider-mode" value="Fixed"<?php if($slider_mode == "Fixed") echo ' checked="checked"'; ?> />Fixed</span> 
	<span class="dc-radio"><input type="radio" name="ios-slider-mode" value="Full Width"<?php if($slider_mode == "Full Width") echo ' checked="checked"'; ?> />Full Width</span> 
	
	<span class="dc-help">Define the way your slider will be showed</span>
</div> <!-- .dc-input -->

<div class="dc-input" id="slider-w" style="display: none;">
	<label>Slider Width</label>
	<input type="text" name="ios-slider-w" value="<?php echo stripslashes($slider_w); ?>" /> 
	<span class="dc-help">Define the width of fixed slider</span>
</div> <!-- .dc-input -->

<div class="dc-input" id="slider-h" style="display: none;">
	<label>Slider Height</label>
	<input type="text" name="ios-slider-h" value="<?php echo stripslashes($slider_h); ?>" /> 
	<span class="dc-help">Define the height of fixed slider</span>	
</div> <!-- .dc-input -->

<script type="text/javascript">
	// <![CDATA[

	jQuery(document).ready(function() {
		var v = jQuery("#dc-slider-mode input:checked").val();

		if(v == "Fixed") {
			jQuery("#slider-w").css("display", "block");
			jQuery("#slider-h").css("display", "block");
		}
	});

	jQuery("#dc-slider-mode input").change(function() {
		
		var v = jQuery("#dc-slider-mode input:checked").val();

		if(v == "Fixed") {
			jQuery("#slider-w").css("display", "block");
			jQuery("#slider-h").css("display", "block");
		}
		else {
			jQuery("#slider-w").css("display", "none");
			jQuery("#slider-h").css("display", "none");
		}

	});
	// ]]>
</script>

<!-- OTHER HTML FIELDS HERE -->

<div class="dc-input">
	<label>Show the Scrollbar</label>
	<select id="ios-scrollbar" name="ios-scrollbar">
		<option value="false"<?php if($scrollbar == "false") echo ' selected="selected"'; ?>>false</option>
		<option value="true"<?php if($scrollbar == "true") echo ' selected="selected"'; ?>>true</option>
	
	</select>
	<span class="dc-help"></span>
</div> <!-- .dc-input -->

<!--
<div class="dc-input">
	<label>Bar Location</label>
	<select id="ios-scrollbarlocation" name="ios-scrollbarlocation">
		<option value="bottom"<?php if($scrollbarlocation == "bottom") echo ' selected="selected"'; ?>>bottom</option>
		<option value="top"<?php if($scrollbarlocation == "top") echo ' selected="selected"'; ?>>top</option>
	
	</select>
	<span class="dc-help"></span>
</div> -->

<div class="dc-input">
	<label>Enable Keyboard Navigation</label>
	<select id="ios-keyboardcontrols" name="ios-keyboardcontrols">
		<option value="true"<?php if($keyboardcontrols == "true") echo ' selected="selected"'; ?>>true</option>
		<option value="false"<?php if($keyboardcontrols == "false") echo ' selected="selected"'; ?>>false</option>
	
	</select>
	<span class="dc-help"></span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Enable Auto Slide</label>
	<select id="ios-autoslide" name="ios-autoslide">
		<option value="false"<?php if($autoslide == "false") echo ' selected="selected"'; ?>>false</option>
		<option value="true"<?php if($autoslide == "true") echo ' selected="selected"'; ?>>true</option>
	
	</select>
	<span class="dc-help"></span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Enable Drag Navigation at Desktop</label>
	<select id="ios-desktopclickdrag" name="ios-desktopclickdrag">
		<option value="true"<?php if($desktopclickdrag == "true") echo ' selected="selected"'; ?>>true</option>
		<option value="false"<?php if($desktopclickdrag == "false") echo ' selected="selected"'; ?>>false</option>
	
	</select>
	<span class="dc-help"></span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Use infinite Slider?</label>
	<select id="ios-infinitslider" name="ios-infinitslider">
		<option value="false"<?php if($infinitslider == "false") echo ' selected="selected"'; ?>>false</option>
		<option value="true"<?php if($infinitslider == "true") echo ' selected="selected"'; ?>>true</option>
	
	</select>
	<span class="dc-help"></span>
</div> <!-- .dc-input -->


