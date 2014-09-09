<?php

$slider_mode = isset( $values["elastislide-slider-mode"] ) ? esc_attr( $values["elastislide-slider-mode"][0] ) : "Responsive";
$slider_w = isset( $values["elastislide-slider-w"] ) ? esc_attr( $values["elastislide-slider-w"][0] ) : "960";
$slider_h = isset( $values["elastislide-slider-h"] ) ? esc_attr( $values["elastislide-slider-h"][0] ) : "350";

// New fields here

$orientation = isset( $values["elastislide-orientation"] ) ? esc_attr( $values["elastislide-orientation"][0] ) : "horizontal";
$speed = isset( $values["elastislide-speed"] ) ? esc_attr( $values["elastislide-speed"][0] ) : "500";
$minitems = isset( $values["elastislide-minitems"] ) ? esc_attr( $values["elastislide-minitems"][0] ) : "3";

$style = isset( $values["elastislide-style"] ) ? esc_attr( $values["elastislide-style"][0] ) : "shadow";

?>

<div class="dc-input" id="dc-slider-mode">
	<label>Slider Mode</label>
	<span class="dc-radio"><input type="radio" name="elastislide-slider-mode" value="Responsive"<?php if($slider_mode == "Responsive") echo ' checked="checked"'; ?> />Responsive</span> 
	<span class="dc-radio"><input type="radio" name="elastislide-slider-mode" value="Fixed"<?php if($slider_mode == "Fixed") echo ' checked="checked"'; ?> />Fixed</span> 
	<span class="dc-radio"><input type="radio" name="elastislide-slider-mode" value="Full Width"<?php if($slider_mode == "Full Width") echo ' checked="checked"'; ?> />Full Width</span> 
	
	<span class="dc-help">Define the way your slider will be showed</span>
</div> <!-- .dc-input -->

<div class="dc-input" id="slider-w" style="display: none;">
	<label>Slider Width</label>
	<input type="text" name="elastislide-slider-w" value="<?php echo stripslashes($slider_w); ?>" /> 
	<span class="dc-help">Define the width of fixed slider</span>
</div> <!-- .dc-input -->

<div class="dc-input" id="slider-h" style="display: none;">
	<label>Slider Height</label>
	<input type="text" name="elastislide-slider-h" value="<?php echo stripslashes($slider_h); ?>" /> 
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
	<label>Orientation</label>
	<select id="elastislide-orientation" name="elastislide-orientation">
		<option value="horizontal"<?php if($orientation == "horizontal") echo ' selected="selected"'; ?>>horizontal</option>
		<option value="vertical"<?php if($orientation == "vertical") echo ' selected="selected"'; ?>>vertical</option>
	
	</select>
	<span class="dc-help"></span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Style</label>
	<select id="elastislide-style" name="elastislide-style">
		<option value="shadow"<?php if($style == "shadow") echo ' selected="selected"'; ?>>Shadowed</option>
		<option value="dark"<?php if($style == "dark") echo ' selected="selected"'; ?>>Dark</option>
		<option value="simple"<?php if($style == "simple") echo ' selected="selected"'; ?>>Simple</option>
		<option value="minimalist"<?php if($style == "minimalist") echo ' selected="selected"'; ?>>Minimal</option>
	</select>
	<span class="dc-help">Select carousel style.</span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Speed</label>
	<input type="text" id="elastislide-speed" name="elastislide-speed" value="<?php echo stripslashes($speed); ?>" /> 
	<span class="dc-help">Velocity in milliseconds.</span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Minimum Visible Items numer</label>
	<input type="text" id="elastislide-minitems" name="elastislide-minitems" value="<?php echo stripslashes($minitems); ?>" /> 
	<span class="dc-help">Defines how many items always will be visible (default: 3)</span>
</div> <!-- .dc-input -->
