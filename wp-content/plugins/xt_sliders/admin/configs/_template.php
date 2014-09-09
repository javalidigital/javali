<?php

$slider_mode = isset( $values["nivo-slider-mode"] ) ? esc_attr( $values["nivo-slider-mode"][0] ) : "Responsive";
$slider_w = isset( $values["nivo-slider-w"] ) ? esc_attr( $values["nivo-slider-w"][0] ) : "960";
$slider_h = isset( $values["nivo-slider-h"] ) ? esc_attr( $values["nivo-slider-h"][0] ) : "350";

// New fields here

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

<div class="dc-input" id="slider-h" style="display: none;">
	<label>Slider Height</label>
	<input type="text" name="nivo-slider-h" value="<?php echo stripslashes($slider_h); ?>" /> 
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