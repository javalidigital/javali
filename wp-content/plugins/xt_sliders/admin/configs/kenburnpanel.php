<?php

$slider_mode = isset( $values["kenburn-panel-slider-mode"] ) ? esc_attr( $values["kenburn-panel-slider-mode"][0] ) : "Responsive";
$slider_w = isset( $values["kenburn-panel-slider-w"] ) ? esc_attr( $values["kenburn-panel-slider-w"][0] ) : "960";

// New fields here

$thumbwidth = isset( $values["kenburn-panel-thumbwidth"] ) ? esc_attr( $values["kenburn-panel-thumbwidth"][0] ) : "70";
$thumbheight = isset( $values["kenburn-panel-thumbheight"] ) ? esc_attr( $values["kenburn-panel-thumbheight"][0] ) : "40";
$thumbamount = isset( $values["kenburn-panel-thumbamount"] ) ? esc_attr( $values["kenburn-panel-thumbamount"][0] ) : "4";
$thumbstyle = isset( $values["kenburn-panel-thumbstyle"] ) ? esc_attr( $values["kenburn-panel-thumbstyle"][0] ) : "both";
$thumbyoffset = isset( $values["kenburn-panel-thumbyoffset"] ) ? esc_attr( $values["kenburn-panel-thumbyoffset"][0] ) : "40";
$bulletyoffset = isset( $values["kenburn-panel-bulletyoffset"] ) ? esc_attr( $values["kenburn-panel-bulletyoffset"][0] ) : "-16";
$hidethumbs = isset( $values["kenburn-panel-hidethumbs"] ) ? esc_attr( $values["kenburn-panel-hidethumbs"][0] ) : "on";
$timer = isset( $values["kenburn-panel-timer"] ) ? esc_attr( $values["kenburn-panel-timer"][0] ) : "5";
$skin = isset( $values["kenburn-panel-skin"] ) ? esc_attr( $values["kenburn-panel-skin"][0] ) : "dark";

?>

<div class="dc-half">

	<div class="dc-input" id="dc-slider-mode">
		<label>Slider Mode</label>
		<span class="dc-radio"><input type="radio" name="kenburn-panel-slider-mode" value="Responsive"<?php if($slider_mode == "Responsive") echo ' checked="checked"'; ?> />Responsive</span> 
		<span class="dc-radio"><input type="radio" name="kenburn-panel-slider-mode" value="Fixed"<?php if($slider_mode == "Fixed") echo ' checked="checked"'; ?> />Fixed</span> 
		<span class="dc-radio"><input type="radio" name="kenburn-panel-slider-mode" value="Full Width"<?php if($slider_mode == "Full Width") echo ' checked="checked"'; ?> />Full Width</span> 
		
		<span class="dc-help">Define the way your slider will be showed</span>
	</div> <!-- .dc-input -->

	<div class="dc-input" id="slider-w" style="display: none;">
		<label>Slider Width</label>
		<input type="text" name="kenburn-panel-slider-w" value="<?php echo stripslashes($slider_w); ?>" /> 
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

	<!-- OTHER HTML FIELDS HERE -->


	<div class="dc-input">
		<label>Thumb Width</label>
		<input type="text" id="kenburn-panel-thumbwidth" name="kenburn-panel-thumbwidth" value="<?php echo stripslashes($thumbwidth); ?>" /> 
		<span class="dc-help"></span>
	</div> <!-- .dc-input -->

	<div class="dc-input">
		<label>Thumb Height</label>
		<input type="text" id="kenburn-panel-thumbheight" name="kenburn-panel-thumbheight" value="<?php echo stripslashes($thumbheight); ?>" /> 
		<span class="dc-help"></span>
	</div> <!-- .dc-input -->

	<div class="dc-input">
		<label>Thumb displayed at screen</label>
		<input type="text" id="kenburn-panel-thumbamount" name="kenburn-panel-thumbamount" value="<?php echo stripslashes($thumbamount); ?>" /> 
		<span class="dc-help"></span>
	</div> <!-- .dc-input -->

	<div class="dc-input">
		<label>Thumb Style</label>
		<select id="kenburn-panel-thumbstyle" name="kenburn-panel-thumbstyle">
			<option value="thumb"<?php if($thumbstyle == "thumb") echo ' selected="selected"'; ?>>thumb</option>
			<option value="bullet"<?php if($thumbstyle == "bullet") echo ' selected="selected"'; ?>>bullet</option>
			<option value="none"<?php if($thumbstyle == "none") echo ' selected="selected"'; ?>>none</option>
			<option value="both"<?php if($thumbstyle == "both") echo ' selected="selected"'; ?>>both</option>
		
		</select>
		<span class="dc-help"></span>
	</div> <!-- .dc-input -->

</div> <!-- .dc-half -->

<div class="dc-half last">

	<div class="dc-input">
		<label>Thumb Vertical Offset</label>
		<input type="text" id="kenburn-panel-thumbyoffset" name="kenburn-panel-thumbyoffset" value="<?php echo stripslashes($thumbyoffset); ?>" /> 
		<span class="dc-help"></span>
	</div> <!-- .dc-input -->

	<div class="dc-input">
		<label>Bullet Vertical Offset</label>
		<input type="text" id="kenburn-panel-bulletyoffset" name="kenburn-panel-bulletyoffset" value="<?php echo stripslashes($bulletyoffset); ?>" /> 
		<span class="dc-help"></span>
	</div> <!-- .dc-input -->

	<div class="dc-input">
		<label>Hide Thumbnails</label>
		<select id="kenburn-panel-hidethumbs" name="kenburn-panel-hidethumbs">
			<option value="on"<?php if($hidethumbs == "on") echo ' selected="selected"'; ?>>on</option>
			<option value="off"<?php if($hidethumbs == "off") echo ' selected="selected"'; ?>>off</option>
		
		</select>
		<span class="dc-help"></span>
	</div> <!-- .dc-input -->

	<div class="dc-input">
		<label>Slide Delay</label>
		<input type="text" id="kenburn-panel-timer" name="kenburn-panel-timer" value="<?php echo stripslashes($timer); ?>" /> 
		<span class="dc-help">Slide time delay (seconds)</span>
	</div> <!-- .dc-input -->

	<div class="dc-input">
		<label>Skin</label>
		<select id="kenburn-panel-skin" name="kenburn-panel-skin">
			<option value="dark"<?php if($skin == "dark") echo ' selected="selected"'; ?>>dark</option>
			<option value="light"<?php if($skin == "light") echo ' selected="selected"'; ?>>light</option>
		
		</select>
		<span class="dc-help"></span>
	</div> <!-- .dc-input -->

</div> <!-- .dc-half last -->

<div class="dc-clear"></div>
