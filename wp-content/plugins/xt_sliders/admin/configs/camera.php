<?php

$slider_mode = isset( $values["camera-slider-mode"] ) ? esc_attr( $values["camera-slider-mode"][0] ) : "Responsive";
$slider_w = isset( $values["camera-slider-w"] ) ? esc_attr( $values["camera-slider-w"][0] ) : "960";
$slider_h = isset( $values["camera-slider-h"] ) ? esc_attr( $values["camera-slider-h"][0] ) : "50%";

$scheme = isset( $values["camera-scheme"] ) ? esc_attr( $values["camera-scheme"][0] ) : "amber";
$auto_advance = isset( $values["camera-auto-advance"] ) ? esc_attr( $values["camera-auto-advance"][0] ) : "yes";
$bar_position = isset( $values["camera-bar-position"] ) ? esc_attr( $values["camera-bar-position"][0] ) : "bottom";
$fx = isset( $values["camera-fx"] ) ? esc_attr( $values["camera-fx"][0] ) : "random";
$pause_onhover = isset( $values["camera-pause-onhover"] ) ? esc_attr( $values["camera-pause-onhover"][0] ) : "yes";
$loader = isset( $values["camera-loader"] ) ? esc_attr( $values["camera-loader"][0] ) : "pie";
$navigation = isset( $values["camera-navigation"] ) ? esc_attr( $values["camera-navigation"][0] ) : "yes";
$pagination = isset( $values["camera-pagination"] ) ? esc_attr( $values["camera-pagination"][0] ) : "yes";
$pie_position = isset( $values["camera-pie-position"] ) ? esc_attr( $values["camera-pie-position"][0] ) : "rightTop";
$portrait = isset( $values["camera-portrait"] ) ? esc_attr( $values["camera-portrait"][0] ) : "no";
$thumbnails = isset( $values["camera-thumbnails"] ) ? esc_attr( $values["camera-thumbnails"][0] ) : "no";
$time = isset( $values["camera-time"] ) ? esc_attr( $values["camera-time"][0] ) : "7000";


?>

<div class="dc-input" id="dc-slider-mode">
	<label>Slider Mode</label>
	<span class="dc-radio"><input type="radio" name="camera-slider-mode" value="Responsive"<?php if($slider_mode == "Responsive") echo ' checked="checked"'; ?> />Responsive</span> 
	<span class="dc-radio"><input type="radio" name="camera-slider-mode" value="Fixed"<?php if($slider_mode == "Fixed") echo ' checked="checked"'; ?> />Fixed</span> 
	<span class="dc-radio"><input type="radio" name="camera-slider-mode" value="Full Width"<?php if($slider_mode == "Full Width") echo ' checked="checked"'; ?> />Full Width</span> 
	
	<span class="dc-help">Define the way your slider will be showed</span>
</div> <!-- .dc-input -->

<div class="dc-input" id="slider-w" style="display: none;">
	<label>Slider Width</label>
	<input type="text" name="camera-slider-w" value="<?php echo stripslashes($slider_w); ?>" /> 
	<span class="dc-help">Define the width of fixed slider</span>
</div> <!-- .dc-input -->

<div class="dc-input" id="slider-h">
	<label>Slider Height</label>
	<input type="text" name="camera-slider-h" value="<?php echo stripslashes($slider_h); ?>" /> 
	<span class="dc-help">Define the height of fixed slider (ex. 50%, 400px or auto)</span>	
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

<div class="dc-input">
	<label>Color Scheme</label>
	<select id="camera-scheme" name="camera-scheme">
		<option value="amber"<?php if($scheme == "amber") echo ' selected="selected"'; ?>>amber</option>
		<option value="ash"<?php if($scheme == "ash") echo ' selected="selected"'; ?>>ash</option>
		<option value="azure"<?php if($scheme == "azure") echo ' selected="selected"'; ?>>azure</option>
		<option value="beige"<?php if($scheme == "beige") echo ' selected="selected"'; ?>>beige</option>
		<option value="black"<?php if($scheme == "black") echo ' selected="selected"'; ?>>black</option>
		<option value="blue"<?php if($scheme == "blue") echo ' selected="selected"'; ?>>blue</option>
		<option value="brown"<?php if($scheme == "brown") echo ' selected="selected"'; ?>>brown</option>
		<option value="burgundy"<?php if($scheme == "burgundy") echo ' selected="selected"'; ?>>burgundy</option>
		<option value="charcoal"<?php if($scheme == "charcoal") echo ' selected="selected"'; ?>>charcoal</option>
		<option value="chocolate"<?php if($scheme == "chocolate") echo ' selected="selected"'; ?>>chocolate</option>
		<option value="coffee"<?php if($scheme == "coffee") echo ' selected="selected"'; ?>>coffee</option>
		<option value="cyan"<?php if($scheme == "cyan") echo ' selected="selected"'; ?>>cyan</option>
		<option value="fuchsia"<?php if($scheme == "fuchsia") echo ' selected="selected"'; ?>>fuchsia</option>
		<option value="gold"<?php if($scheme == "gold") echo ' selected="selected"'; ?>>gold</option>
		<option value="green"<?php if($scheme == "green") echo ' selected="selected"'; ?>>green</option>
		<option value="grey"<?php if($scheme == "grey") echo ' selected="selected"'; ?>>grey</option>
		<option value="indigo"<?php if($scheme == "indigo") echo ' selected="selected"'; ?>>indigo</option>
		<option value="khaki"<?php if($scheme == "khaki") echo ' selected="selected"'; ?>>khaki</option>
		<option value="lime"<?php if($scheme == "lime") echo ' selected="selected"'; ?>>lime</option>
		<option value="magenta"<?php if($scheme == "magenta") echo ' selected="selected"'; ?>>magenta</option>
		<option value="maroon"<?php if($scheme == "maroon") echo ' selected="selected"'; ?>>maroon</option>
		<option value="orange"<?php if($scheme == "orange") echo ' selected="selected"'; ?>>orange</option>
		<option value="olive"<?php if($scheme == "olive") echo ' selected="selected"'; ?>>olive</option>
		<option value="pink"<?php if($scheme == "pink") echo ' selected="selected"'; ?>>pink</option>
		<option value="pistachio"<?php if($scheme == "pistachio") echo ' selected="selected"'; ?>>pistachio</option>
		<option value="red"<?php if($scheme == "red") echo ' selected="selected"'; ?>>red</option>
		<option value="tangerine"<?php if($scheme == "tangerine") echo ' selected="selected"'; ?>>tangerine</option>
		<option value="turquoise"<?php if($scheme == "turquoise") echo ' selected="selected"'; ?>>turquoise</option>
		<option value="violet"<?php if($scheme == "violet") echo ' selected="selected"'; ?>>violet</option>
		<option value="white"<?php if($scheme == "white") echo ' selected="selected"'; ?>>white</option>
		<option value="yellow"<?php if($scheme == "yellow") echo ' selected="selected"'; ?>>yellow</option>	
	</select>
	<span class="dc-help">Change Color Scheme of slider UI.</span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Enable autoplay?</label>
	<span class="dc-radio"><input type="radio" id="camera-auto-advance" name="camera-auto-advance" value="yes"<?php if($auto_advance == "yes") echo ' checked="checked"'; ?> />yes</span> 
	<span class="dc-radio"><input type="radio" id="camera-auto-advance" name="camera-auto-advance" value="no"<?php if($auto_advance == "no") echo ' checked="checked"'; ?> />no</span> 
	
	<span class="dc-help"></span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Define bar position:</label>
	<select id="camera-bar-position" name="camera-bar-position">
		<option value="bottom"<?php if($bar_position == "bottom") echo ' selected="selected"'; ?>>bottom</option>
		<option value="top"<?php if($bar_position == "top") echo ' selected="selected"'; ?>>top</option>
		<option value="right"<?php if($bar_position == "right") echo ' selected="selected"'; ?>>right</option>
		<option value="left"<?php if($bar_position == "left") echo ' selected="selected"'; ?>>left</option>
	
	</select>
	<span class="dc-help">Only applied if you're using the bar loader instead pie</span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Transition Effect</label>
	<select id="camera-fx" name="camera-fx">
		<option value="random"<?php if($fx == "random") echo ' selected="selected"'; ?>>random</option>
		<option value="simpleFade"<?php if($fx == "simpleFade") echo ' selected="selected"'; ?>>simpleFade</option>
		<option value="curtainTopLeft"<?php if($fx == "curtainTopLeft") echo ' selected="selected"'; ?>>curtainTopLeft</option>
		<option value="curtainTopRight"<?php if($fx == "curtainTopRight") echo ' selected="selected"'; ?>>curtainTopRight</option>
		<option value="curtainBottomLeft"<?php if($fx == "curtainBottomLeft") echo ' selected="selected"'; ?>>curtainBottomLeft</option>
		<option value="curtainBottomRight"<?php if($fx == "curtainBottomRight") echo ' selected="selected"'; ?>>curtainBottomRight</option>
		<option value="curtainSliceLeft"<?php if($fx == "curtainSliceLeft") echo ' selected="selected"'; ?>>curtainSliceLeft</option>
		<option value="curtainSliceRight"<?php if($fx == "curtainSliceRight") echo ' selected="selected"'; ?>>curtainSliceRight</option>
		<option value="blindCurtainTopRight"<?php if($fx == "blindCurtainTopRight") echo ' selected="selected"'; ?>>blindCurtainTopRight</option>
		<option value="blindCurtainBottomLeft"<?php if($fx == "blindCurtainBottomLeft") echo ' selected="selected"'; ?>>blindCurtainBottomLeft</option>
		<option value="blindCurtainBottomRight"<?php if($fx == "blindCurtainBottomRight") echo ' selected="selected"'; ?>>blindCurtainBottomRight</option>
		<option value="blindCurtainSliceBottom"<?php if($fx == "blindCurtainSliceBottom") echo ' selected="selected"'; ?>>blindCurtainSliceBottom</option>
		<option value="blindCurtainSliceTop"<?php if($fx == "blindCurtainSliceTop") echo ' selected="selected"'; ?>>blindCurtainSliceTop</option>
		<option value="stampede"<?php if($fx == "stampede") echo ' selected="selected"'; ?>>stampede</option>
		<option value="mosaic"<?php if($fx == "mosaic") echo ' selected="selected"'; ?>>mosaic</option>
		<option value="mosaicReverse"<?php if($fx == "mosaicReverse") echo ' selected="selected"'; ?>>mosaicReverse</option>
		<option value="mosaicRandom"<?php if($fx == "mosaicRandom") echo ' selected="selected"'; ?>>mosaicRandom</option>
		<option value="mosaicSpiral"<?php if($fx == "mosaicSpiral") echo ' selected="selected"'; ?>>mosaicSpiral</option>
		<option value="mosaicSpiralReverse"<?php if($fx == "mosaicSpiralReverse") echo ' selected="selected"'; ?>>mosaicSpiralReverse</option>
		<option value="topLeftBottomRight"<?php if($fx == "topLeftBottomRight") echo ' selected="selected"'; ?>>topLeftBottomRight</option>
		<option value="bottomRightTopLeft"<?php if($fx == "bottomRightTopLeft") echo ' selected="selected"'; ?>>bottomRightTopLeft</option>
		<option value="bottomLeftTopRight"<?php if($fx == "bottomLeftTopRight") echo ' selected="selected"'; ?>>bottomLeftTopRight</option>
		<option value="bottomLeftTopRight"<?php if($fx == "bottomLeftTopRight") echo ' selected="selected"'; ?>>bottomLeftTopRight</option>
		<option value="scrollLeft"<?php if($fx == "scrollLeft") echo ' selected="selected"'; ?>>scrollLeft</option>
		<option value="scrollRight"<?php if($fx == "scrollRight") echo ' selected="selected"'; ?>>scrollRight</option>
		<option value="scrollHorz"<?php if($fx == "scrollHorz") echo ' selected="selected"'; ?>>scrollHorz</option>
		<option value="scrollBottom"<?php if($fx == "scrollBottom") echo ' selected="selected"'; ?>>scrollBottom</option>
		<option value="scrollTop"<?php if($fx == "scrollTop") echo ' selected="selected"'; ?>>scrollTop</option>
	</select>
	<span class="dc-help">Select the transition used in the slider.</span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Pause when hover?</label>
	<span class="dc-radio"><input type="radio" id="camera-pause-onhover" name="camera-pause-onhover" value="yes"<?php if($pause_onhover == "yes") echo ' checked="checked"'; ?> />yes</span> 
	<span class="dc-radio"><input type="radio" id="camera-pause-onhover" name="camera-pause-onhover" value="no"<?php if($pause_onhover == "no") echo ' checked="checked"'; ?> />no</span> 
	
	<span class="dc-help"></span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Loader Type</label>
	<select id="camera-loader" name="camera-loader">
		<option value="pie"<?php if($loader == "pie") echo ' selected="selected"'; ?>>pie</option>
		<option value="bar"<?php if($loader == "bar") echo ' selected="selected"'; ?>>bar</option>
		<option value="none"<?php if($loader == "none") echo ' selected="selected"'; ?>>none</option>
	
	</select>
	<span class="dc-help">Select the loader type.</span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Enable Arrow Navigation?</label>
	<span class="dc-radio"><input type="radio" id="camera-navigation" name="camera-navigation" value="yes"<?php if($navigation == "yes") echo ' checked="checked"'; ?> />yes</span> 
	<span class="dc-radio"><input type="radio" id="camera-navigation" name="camera-navigation" value="no"<?php if($navigation == "no") echo ' checked="checked"'; ?> />no</span> 
	
	<span class="dc-help"></span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Enable Pagination?</label>
	<span class="dc-radio"><input type="radio" id="camera-pagination" name="camera-pagination" value="yes"<?php if($pagination == "yes") echo ' checked="checked"'; ?> />yes</span> 
	<span class="dc-radio"><input type="radio" id="camera-pagination" name="camera-pagination" value="no"<?php if($pagination == "no") echo ' checked="checked"'; ?> />no</span> 
	
	<span class="dc-help"></span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Pie Loader Position</label>
	<select id="camera-pie-position" name="camera-pie-position">
		<option value="rightTop"<?php if($pie_position == "rightTop") echo ' selected="selected"'; ?>>rightTop</option>
		<option value="leftTop"<?php if($pie_position == "leftTop") echo ' selected="selected"'; ?>>leftTop</option>
		<option value="leftBottom"<?php if($pie_position == "leftBottom") echo ' selected="selected"'; ?>>leftBottom</option>
		<option value="rightBottom"<?php if($pie_position == "rightBottom") echo ' selected="selected"'; ?>>rightBottom</option>
	
	</select>
	<span class="dc-help">Has effect only if you're using the pie loader instead bar.</span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Enable Portrait Mode?</label>
	<span class="dc-radio"><input type="radio" id="camera-portrait" name="camera-portrait" value="no"<?php if($portrait == "no") echo ' checked="checked"'; ?> />no</span> 
	<span class="dc-radio"><input type="radio" id="camera-portrait" name="camera-portrait" value="yes"<?php if($portrait == "yes") echo ' checked="checked"'; ?> />yes</span> 
	
	<span class="dc-help">Enabling this mode your images won't be cropped.</span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Enable Thumbnails?</label>
	<span class="dc-radio"><input type="radio" id="camera-thumbnails" name="camera-thumbnails" value="no"<?php if($thumbnails == "no") echo ' checked="checked"'; ?> />no</span> 
	<span class="dc-radio"><input type="radio" id="camera-thumbnails" name="camera-thumbnails" value="yes"<?php if($thumbnails == "yes") echo ' checked="checked"'; ?> />yes</span> 
	
	<span class="dc-help"></span>
</div> <!-- .dc-input -->

<div class="dc-input">
	<label>Time to each slide</label>
	<input type="text" id="camera-time" name="camera-time" value="<?php echo stripslashes($time); ?>" /> 
	<span class="dc-help">In milliseconds.</span>
</div> <!-- .dc-input -->