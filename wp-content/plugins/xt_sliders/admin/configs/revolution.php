<?php

$slider_mode = isset( $values["revolution-slider-mode"] ) ? esc_attr( $values["revolution-slider-mode"][0] ) : "Responsive";
$slider_w = isset( $values["revolution-slider-w"] ) ? esc_attr( $values["revolution-slider-w"][0] ) : "960";
$slider_h = isset( $values["revolution-slider-h"] ) ? esc_attr( $values["revolution-slider-h"][0] ) : "490";

// New fields here

$slider_w1 = isset( $values["revolution-slider-w1"] ) ? esc_attr( $values["revolution-slider-w1"][0] ) : "748";
$slider_w2 = isset( $values["revolution-slider-w2"] ) ? esc_attr( $values["revolution-slider-w2"][0] ) : "460";
$slider_w3 = isset( $values["revolution-slider-w3"] ) ? esc_attr( $values["revolution-slider-w3"][0] ) : "300";

$delay = isset( $values["revolution-delay"] ) ? esc_attr( $values["revolution-delay"][0] ) : "9000";
$navigationtype = isset( $values["revolution-navigationtype"] ) ? esc_attr( $values["revolution-navigationtype"][0] ) : "none";
$navigationarrows = isset( $values["revolution-navigationarrows"] ) ? esc_attr( $values["revolution-navigationarrows"][0] ) : "nexttobullets";
$navigationstyle = isset( $values["revolution-navigationstyle"] ) ? esc_attr( $values["revolution-navigationstyle"][0] ) : "round";
$touchenabled = isset( $values["revolution-touchenabled"] ) ? esc_attr( $values["revolution-touchenabled"][0] ) : "on";
$navoffsethorizontal = isset( $values["revolution-navoffsethorizontal"] ) ? esc_attr( $values["revolution-navoffsethorizontal"][0] ) : "0";
$navoffsetvertical = isset( $values["revolution-navoffsetvertical"] ) ? esc_attr( $values["revolution-navoffsetvertical"][0] ) : "20";
$shadow = isset( $values["revolution-shadow"] ) ? esc_attr( $values["revolution-shadow"][0] ) : "1";
$onhoverstop = isset( $values["revolution-onhoverstop"] ) ? esc_attr( $values["revolution-onhoverstop"][0] ) : "on";
$thumbwidth = isset( $values["revolution-thumbwidth"] ) ? esc_attr( $values["revolution-thumbwidth"][0] ) : "100";
$thumbheight = isset( $values["revolution-thumbheight"] ) ? esc_attr( $values["revolution-thumbheight"][0] ) : "50";
$thumbamount = isset( $values["revolution-thumbamount"] ) ? esc_attr( $values["revolution-thumbamount"][0] ) : "5";
$bgcolor = isset( $values["revolution-bgcolor"] ) ? esc_attr( $values["revolution-bgcolor"][0] ) : "#bbbbbb";

$use_custom_theme = isset( $values["revolution-usecustomtheme"] ) ? esc_attr( $values["revolution-usecustomtheme"][0] ) : "on";

?>

<div class="dc-half">

<div class="dc-input" id="dc-slider-mode">
	<label>Slider Mode</label>
	<span class="dc-radio"><input type="radio" name="revolution-slider-mode" value="Responsive"<?php if($slider_mode == "Responsive") echo ' checked="checked"'; ?> />Responsive</span> 
	<span class="dc-radio"><input type="radio" name="revolution-slider-mode" value="Fixed"<?php if($slider_mode == "Fixed") echo ' checked="checked"'; ?> />Fixed</span> 
	<span class="dc-radio"><input type="radio" name="revolution-slider-mode" value="Full Width"<?php if($slider_mode == "Full Width") echo ' checked="checked"'; ?> />Full Width</span> 
	
	<span class="dc-help">Define the way your slider will be showed</span>
</div> <!-- .dc-input -->

<div>
	<div class="dc-half">
		<div class="dc-input" id="slider-w">
			<label>Slider Width</label>
			<input type="text" name="revolution-slider-w" value="<?php echo stripslashes($slider_w); ?>" /> 
			<span class="dc-help">Define the width of fixed slider</span>
		</div> <!-- .dc-input -->
	</div>

	<div class="dc-half last">
		<div class="dc-input" id="slider-h">
			<label>Slider Height</label>
			<input type="text" name="revolution-slider-h" value="<?php echo stripslashes($slider_h); ?>" /> 
			<span class="dc-help">Define the height of fixed slider</span>	
		</div> <!-- .dc-input -->
	</div>

	<div class="dc-clear"></div>
</div>

<div>
		<div class="dc-input" id="slider-w1">
			<label>Tablet Slider Width</label>
			<input type="text" name="revolution-slider-w1" value="<?php echo stripslashes($slider_w1); ?>" /> 
		</div> <!-- .dc-input -->

		<div class="dc-input" id="slider-w2">
			<label>Mobile Landscape Slider Width</label>
			<input type="text" name="revolution-slider-w2" value="<?php echo stripslashes($slider_w2); ?>" /> 
		</div> <!-- .dc-input -->

		<div class="dc-input" id="slider-w3">
			<label>Mobile Portrait Slider Width</label>
			<input type="text" name="revolution-slider-w3" value="<?php echo stripslashes($slider_w3); ?>" /> 
		</div> <!-- .dc-input -->
</div>

<!-- OTHER HTML FIELDS HERE -->
<div class="dc-input">
	<label>Delay</label>
	<input type="text" id="revolution-delay" name="revolution-delay" value="<?php echo stripslashes($delay); ?>" /> 
	<span class="dc-help">Time one Slide Stays on the Screen</span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Touch Navigation</label>
	<select id="revolution-touchenabled" name="revolution-touchenabled">
		<option value="on"<?php if($touchenabled == "on") echo ' selected="selected"'; ?>>on</option>
		<option value="off"<?php if($touchenabled == "off") echo ' selected="selected"'; ?>>off</option>
	
	</select>
	<span class="dc-help">Enables Swipe Function on Mobile Devices</span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Shadow Type</label>
	<select id="revolution-shadow" name="revolution-shadow">
		<option value="no shadow"<?php if($shadow == "no shadow") echo ' selected="selected"'; ?>>No Shadow</option>
		<option value="1"<?php if($shadow == "1") echo ' selected="selected"'; ?>>1</option>
		<option value="2"<?php if($shadow == "2") echo ' selected="selected"'; ?>>2</option>
		<option value="3"<?php if($shadow == "3") echo ' selected="selected"'; ?>>3</option>
	
	</select>
	<span class="dc-help">The Shadow display underneath the banner</span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Stop Timer when Hover?</label>
	<select id="revolution-onhoverstop" name="revolution-onhoverstop">
		<option value="on"<?php if($onhoverstop == "on") echo ' selected="selected"'; ?>>on</option>
		<option value="off"<?php if($onhoverstop == "off") echo ' selected="selected"'; ?>>off</option>
	
	</select>
	<span class="dc-help"></span>
</div> <!-- .dc-input -->

</div> <!-- .dc-half -->

<div class="dc-half last">

<div class="dc-input">
	<label>Use navigation and bullet styles from theme?</label>
	<select id="revolution-usecustomtheme" name="revolution-usecustomtheme">
		<option value="on"<?php if($use_custom_theme == "on") echo ' selected="selected"'; ?>>on</option>
		<option value="off"<?php if($use_custom_theme == "off") echo ' selected="selected"'; ?>>off</option>
	
	</select>
	<span class="dc-help">Selecting on, this option will be more important than the options below. Turn off to be able use the options below again.<br />
		Select <strong>bullet</strong> at <strong>Navigation bar Type</strong> and <strong>round</strong> at <strong>Navigation Bullets Style</strong> to it works.</span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Navigation bar Type</label>
	<select id="revolution-navigationtype" name="revolution-navigationtype">
		<option value="bullet"<?php if($navigationtype == "bullet") echo ' selected="selected"'; ?>>bullet</option>
		<option value="thumb"<?php if($navigationtype == "thumb") echo ' selected="selected"'; ?>>thumb</option>
		<option value="none"<?php if($navigationtype == "none") echo ' selected="selected"'; ?>>none</option>
		<option value="both"<?php if($navigationtype == "both") echo ' selected="selected"'; ?>>both</option>
	</select>
	<span class="dc-help"></span>

</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Navigation Arrows Position</label>
	<select id="revolution-navigationarrows" name="revolution-navigationarrows">
		<option value="nexttobullets"<?php if($navigationarrows == "nexttobullets") echo ' selected="selected"'; ?>>nexttobullets</option>
		<option value="verticalcentered"<?php if($navigationarrows == "verticalcentered") echo ' selected="selected"'; ?>>verticalcentered</option>
		<option value="none"<?php if($navigationarrows == "none") echo ' selected="selected"'; ?>>none</option>
	
	</select>
	<span class="dc-help"></span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Navigation Bullets Style</label>
	<select id="revolution-navigationstyle" name="revolution-navigationstyle">
		<option value="round"<?php if($navigationstyle == "round") echo ' selected="selected"'; ?>>round</option>
		<option value="navbar"<?php if($navigationstyle == "navbar") echo ' selected="selected"'; ?>>navbar</option>
		<option value="round-old"<?php if($navigationstyle == "round-old") echo ' selected="selected"'; ?>>round-old</option>
		<option value="square-old"<?php if($navigationstyle == "square-old") echo ' selected="selected"'; ?>>square-old</option>
		<option value="navbar-old"<?php if($navigationstyle == "navbar-old") echo ' selected="selected"'; ?>>navbar-old</option>
	
	</select>
	<span class="dc-help"></span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Navigation Horizontal Offset</label>
	<input type="text" id="revolution-navoffsethorizontal" name="revolution-navoffsethorizontal" value="<?php echo stripslashes($navoffsethorizontal); ?>" /> 
	<span class="dc-help">The Bar is centered but could be moved this pixel count left(e.g. -10) or right (Default: 0)  ** By resizing the banner, it will be always </span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Navigation Vertical Offset</label>
	<input type="text" id="revolution-navoffsetvertical" name="revolution-navoffsetvertical" value="<?php echo stripslashes($navoffsetvertical); ?>" /> 
	<span class="dc-help">The Bar is bound to the bottom but could be moved this pixel count up (e. g. -20) or down (Default: 20) </span>
</div> <!-- .dc-input -->


<div class="dc-input">
	<label>Thumb Width</label>
	<input type="text" id="revolution-thumbwidth" name="revolution-thumbwidth" value="<?php echo stripslashes($thumbwidth); ?>" /> 
	<span class="dc-help">Only if thumb is selected</span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Thumb Height</label>
	<input type="text" id="revolution-thumbheight" name="revolution-thumbheight" value="<?php echo stripslashes($thumbheight); ?>" /> 
	<span class="dc-help">Only if thumb is selected</span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Thumb Amount</label>
	<input type="text" id="revolution-thumbamount" name="revolution-thumbamount" value="<?php echo stripslashes($thumbamount); ?>" /> 
	<span class="dc-help">Only if thumb is selected</span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Background Color</label>
	<input type="text" id="revolution-bgcolor" name="revolution-bgcolor" value="<?php echo stripslashes($bgcolor); ?>" /> 
	<span class="dc-help">Hex Background Color</span>
</div> <!-- .dc-input -->

</div> <!-- .dc-half -->

<div class="dc-clear"></div>