<?php

$slider_mode = isset( $values["flexslider-slider-mode"] ) ? esc_attr( $values["flexslider-slider-mode"][0] ) : "Responsive";
$slider_w = isset( $values["flexslider-slider-w"] ) ? esc_attr( $values["flexslider-slider-w"][0] ) : "960";
$slider_h = isset( $values["flexslider-slider-h"] ) ? esc_attr( $values["flexslider-slider-h"][0] ) : "350";

// New fields here

$animation = isset( $values["flexslider-animation"] ) ? esc_attr( $values["flexslider-animation"][0] ) : "fade";
$direction = isset( $values["flexslider-direction"] ) ? esc_attr( $values["flexslider-direction"][0] ) : "horizontal";
$smoothheight = isset( $values["flexslider-smoothheight"] ) ? esc_attr( $values["flexslider-smoothheight"][0] ) : "true";
$slideshow = isset( $values["flexslider-slideshow"] ) ? esc_attr( $values["flexslider-slideshow"][0] ) : "true";
$slideshowspeed = isset( $values["flexslider-slideshowspeed"] ) ? esc_attr( $values["flexslider-slideshowspeed"][0] ) : "7000";
$animationspeed = isset( $values["flexslider-animationspeed"] ) ? esc_attr( $values["flexslider-animationspeed"][0] ) : "600";
$pauseonhover = isset( $values["flexslider-pauseonhover"] ) ? esc_attr( $values["flexslider-pauseonhover"][0] ) : "false";
$controlnav = isset( $values["flexslider-controlnav"] ) ? esc_attr( $values["flexslider-controlnav"][0] ) : "true";
$directionnav = isset( $values["flexslider-directionnav"] ) ? esc_attr( $values["flexslider-directionnav"][0] ) : "true";

?>

<div class="dc-half">

	<div class="dc-input" id="dc-slider-mode">
		<label>Slider Mode</label>
		<span class="dc-radio"><input type="radio" name="flexslider-slider-mode" value="Responsive"<?php if($slider_mode == "Responsive") echo ' checked="checked"'; ?> />Responsive</span> 
		<span class="dc-radio"><input type="radio" name="flexslider-slider-mode" value="Fixed"<?php if($slider_mode == "Fixed") echo ' checked="checked"'; ?> />Fixed</span> 
		<span class="dc-radio"><input type="radio" name="flexslider-slider-mode" value="Full Width"<?php if($slider_mode == "Full Width") echo ' checked="checked"'; ?> />Full Width</span> 
		
		<span class="dc-help">Define the way your slider will be showed</span>
	</div> <!-- .dc-input -->

	<div class="dc-input" id="slider-w" style="display: none;">
		<label>Slider Width</label>
		<input type="text" name="flexslider-slider-w" value="<?php echo stripslashes($slider_w); ?>" /> 
		<span class="dc-help">Define the width of fixed slider</span>
	</div> <!-- .dc-input -->

	<div class="dc-input" id="slider-h" style="display: none;">
		<label>Slider Height</label>
		<input type="text" name="flexslider-slider-h" value="<?php echo stripslashes($slider_h); ?>" /> 
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
		<label>Animation</label>
		<select id="flexslider-animation" name="flexslider-animation">
			<option value="fade"<?php if($animation == "fade") echo ' selected="selected"'; ?>>fade</option>
			<option value="slide"<?php if($animation == "slide") echo ' selected="selected"'; ?>>slide</option>
		
		</select>
		<span class="dc-help">The animation type</span>
	</div> <!-- .dc-input -->

	<div class="dc-input">
		<label>Slide Direction</label>
		<select id="flexslider-direction" name="flexslider-direction">
			<option value="horizontal"<?php if($direction == "horizontal") echo ' selected="selected"'; ?>>horizontal</option>
			<option value="vertical"<?php if($direction == "vertical") echo ' selected="selected"'; ?>>vertical</option>
		
		</select>
		<span class="dc-help"></span>
	</div> <!-- .dc-input -->

	<div class="dc-input">
		<label>Enable Smooth Height</label>
		<select id="flexslider-smoothheight" name="flexslider-smoothheight">
			<option value="false"<?php if($smoothheight == "false") echo ' selected="selected"'; ?>>false</option>
			<option value="true"<?php if($smoothheight == "true") echo ' selected="selected"'; ?>>true</option>
		
		</select>
		<span class="dc-help">Allow height of slider to animate smoothly in horizontal mode</span>
	</div> <!-- .dc-input -->

	<div class="dc-input">
		<label>Enable autoplay</label>
		<select id="flexslider-slideshow" name="flexslider-slideshow">
			<option value="true"<?php if($slideshow == "true") echo ' selected="selected"'; ?>>true</option>
			<option value="false"<?php if($slideshow == "false") echo ' selected="selected"'; ?>>false</option>
		
		</select>
		<span class="dc-help"></span>
	</div> <!-- .dc-input -->

</div> <!-- .dc-half -->

<div class="dc-half last">

	<div class="dc-input">
		<label>Slide Duration</label>
		<input type="text" id="flexslider-slideshowspeed" name="flexslider-slideshowspeed" value="<?php echo stripslashes($slideshowspeed); ?>" /> 
		<span class="dc-help">Sets how much time stay in one single slide</span>
	</div> <!-- .dc-input -->

	<div class="dc-input">
		<label>Animation Duration</label>
		<input type="text" id="flexslider-animationspeed" name="flexslider-animationspeed" value="<?php echo stripslashes($animationspeed); ?>" /> 
		<span class="dc-help">How much time to complete the transition animation</span>
	</div> <!-- .dc-input -->

	<div class="dc-input">
		<label>Pause On Hover</label>
		<select id="flexslider-pauseonhover" name="flexslider-pauseonhover">
			<option value="false"<?php if($pauseonhover == "false") echo ' selected="selected"'; ?>>false</option>
			<option value="true"<?php if($pauseonhover == "true") echo ' selected="selected"'; ?>>true</option>
		
		</select>
		<span class="dc-help"></span>
	</div> <!-- .dc-input -->

	<div class="dc-input">
		<label>Create Pagination (bullets)?</label>
		<select id="flexslider-controlnav" name="flexslider-controlnav">
			<option value="true"<?php if($controlnav == "true") echo ' selected="selected"'; ?>>true</option>
			<option value="false"<?php if($controlnav == "false") echo ' selected="selected"'; ?>>false</option>
		
		</select>
		<span class="dc-help"></span>
	</div> <!-- .dc-input -->

	<div class="dc-input">
		<label>Create Previous/Next Slide controls?</label>
		<select id="flexslider-directionnav" name="flexslider-directionnav">
			<option value="true"<?php if($directionnav == "true") echo ' selected="selected"'; ?>>true</option>
			<option value="false"<?php if($directionnav == "false") echo ' selected="selected"'; ?>>false</option>
		
		</select>
		<span class="dc-help"></span>
	</div> <!-- .dc-input -->

</div> <!-- .dc-last -->

<div class="dc-clear"