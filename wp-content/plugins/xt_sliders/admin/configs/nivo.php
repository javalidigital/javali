<?php

$slider_mode = isset( $values["nivo-slider-mode"] ) ? esc_attr( $values["nivo-slider-mode"][0] ) : "Responsive";
$slider_w = isset( $values["nivo-slider-w"] ) ? esc_attr( $values["nivo-slider-w"][0] ) : "960";
$slider_h = isset( $values["nivo-slider-h"] ) ? esc_attr( $values["nivo-slider-h"][0] ) : "50%";

$effect = isset( $values["nivo-effect"] ) ? esc_attr( $values["nivo-effect"][0] ) : "fade";
$anim_speed = isset( $values["nivo-anim-speed"] ) ? esc_attr( $values["nivo-anim-speed"][0] ) : "500";
$pause_time = isset( $values["nivo-pause-time"] ) ? esc_attr( $values["nivo-pause-time"][0] ) : "3000";
$direction_nav = isset( $values["nivo-direction-nav"] ) ? esc_attr( $values["nivo-direction-nav"][0] ) : "yes";
$direction_nav_hide = isset( $values["nivo-direction-nav-hide"] ) ? esc_attr( $values["nivo-direction-nav-hide"][0] ) : "yes";
$control_nav = isset( $values["nivo-control-nav"] ) ? esc_attr( $values["nivo-control-nav"][0] ) : "yes";
$control_nav_thumbs = isset( $values["nivo-control-nav-thumbs"] ) ? esc_attr( $values["nivo-control-nav-thumbs"][0] ) : "no";

?>

<div class="dc-input" id="dc-slider-mode">
	<label>Slider Mode</label>
	<span class="dc-radio"><input type="radio" name="nivo-slider-mode" value="Responsive"<?php if($slider_mode == "Responsive") echo ' checked="checked"'; ?> />Responsive</span> 
	<span class="dc-radio"><input type="radio" name="nivo-slider-mode" value="Fixed"<?php if($slider_mode == "Fixed") echo ' checked="checked"'; ?> />Fixed</span> 
	<span class="dc-radio"><input type="radio" name="nivo-slider-mode" value="Full Width"<?php if($slider_mode == "Full Width") echo ' checked="checked"'; ?> />Full Width</span> 
	
	<span class="dc-help">Define the way your slider will be showed</span>
</div> <!-- .dc-input -->

<div class="dc-input" id="slider-w" style="display: none;">
	<label>Slider Width</label>
	<input type="text" name="nivo-slider-w" value="<?php echo stripslashes($slider_w); ?>" /> 
	<span class="dc-help">Define the width of fixed slider</span>
</div> <!-- .dc-input -->

<script type="text/javascript">
	// <![CDATA[

	jQuery(document).ready(function() {
		var v = jQuery("#dc-slider-mode input:checked").val();

		if(v == "Fixed") {
			jQuery("#slider-w").css("display", "block");
		}
	});

	jQuery("#dc-slider-mode input").change(function() {
		
		var v = jQuery("#dc-slider-mode input:checked").val();

		if(v == "Fixed") {
			jQuery("#slider-w").css("display", "block");
		}
		else {
			jQuery("#slider-w").css("display", "none");
		}

	});
	// ]]>
</script>

<!-- JAVASCRIPT HERE -->

<div class="dc-input" id="slider-h">
	<label>Slider Height</label>
	<input type="text" name="nivo-slider-h" value="<?php echo stripslashes($slider_h); ?>" /> 
	<span class="dc-help">Define the height of fixed slider, 50% or 400px for example</span>	
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Transition Effect</label>
	<select id="nivo-effect" name="nivo-effect">
		<option value="fade"<?php if($effect == "fade") echo ' selected="selected"'; ?>>fade</option>
		<option value="slideInRight"<?php if($effect == "slideInRight") echo ' selected="selected"'; ?>>slideInRight</option>
		<option value="slideInLeft"<?php if($effect == "slideInLeft") echo ' selected="selected"'; ?>>slideInLeft</option>
	</select>
	<span class="dc-help">Select the transition used in the slider.</span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Slider Speed</label>
	<input type="text" id="nivo-anim-speed" name="nivo-anim-speed" value="<?php echo stripslashes($anim_speed); ?>" /> 
	<span class="dc-help">Slide Transition Speed</span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Pause Time</label>
	<input type="text" id="nivo-pause-time" name="nivo-pause-time" value="<?php echo stripslashes($pause_time); ?>" /> 
	<span class="dc-help">How long each slide will show before next slide (3000 = 3 seconds)</span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Use Direction Navigation?</label>
	<span class="dc-radio"><input type="radio" id="nivo-direction-nav" name="nivo-direction-nav" value="yes"<?php if($direction_nav == "yes") echo ' checked="checked"'; ?> />yes</span> 
	<span class="dc-radio"><input type="radio" id="nivo-direction-nav" name="nivo-direction-nav" value="no"<?php if($direction_nav == "no") echo ' checked="checked"'; ?> />no</span> 
	
	<span class="dc-help">Next and Prev navigation.</span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Only show Navigation on hover?</label>
	<span class="dc-radio"><input type="radio" id="nivo-direction-nav-hide" name="nivo-direction-nav-hide" value="yes"<?php if($direction_nav_hide == "yes") echo ' checked="checked"'; ?> />yes</span> 
	<span class="dc-radio"><input type="radio" id="nivo-direction-nav-hide" name="nivo-direction-nav-hide" value="no"<?php if($direction_nav_hide == "no") echo ' checked="checked"'; ?> />no</span> 
	
	<span class="dc-help"></span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Use 1,2,3... (bullets) Navigation?</label>
	<span class="dc-radio"><input type="radio" id="nivo-control-nav" name="nivo-control-nav" value="yes"<?php if($control_nav == "yes") echo ' checked="checked"'; ?> />yes</span> 
	<span class="dc-radio"><input type="radio" id="nivo-control-nav" name="nivo-control-nav" value="no"<?php if($control_nav == "no") echo ' checked="checked"'; ?> />no</span> 
	
	<span class="dc-help"></span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Use thumbnails for Control Nav?</label>
	<span class="dc-radio"><input type="radio" id="nivo-control-nav-thumbs" name="nivo-control-nav-thumbs" value="yes"<?php if($control_nav_thumbs == "yes") echo ' checked="checked"'; ?> />yes</span> 
	<span class="dc-radio"><input type="radio" id="nivo-control-nav-thumbs" name="nivo-control-nav-thumbs" value="no"<?php if($control_nav_thumbs == "no") echo ' checked="checked"'; ?> />no</span> 
	
	<span class="dc-help"></span>
</div> <!-- .dc-input -->