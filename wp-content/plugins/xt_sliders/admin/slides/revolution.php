<?php

	$slides = isset( $values['xt_slide'] ) ? $values['xt_slide'][0] : '';

    $slides = maybe_unserialize($slides);

    $slides = maybe_unserialize($slides);

    $id = 0;

?>

<?php 

if(count(@$slides) > 0 && @$slides != '') :

do_action("xt_lm_styles");

require_once("layer-manager/markup.php");

endif; ?>

<div class="dc-slides">

<?php 

if(count(@$slides) > 0 && @$slides != '') :

foreach($slides as $slide) { ?>

	<?php include("_default-top.php"); ?>

	<div class="dc-half">

		<!-- SLIDES SAVED HERE -->

	<div class="dc-input">
		<label>Layer Editor</label>
		<a href="#" rel="<?php echo @$id; ?>" class="button button-primary button-hero call-layer-editor">Layer Editor</a>
		<input type="hidden" name="xt_slide[<?php echo @$id; ?>][revolution-layers]" id="hidden-<?php echo @$id; ?>" value="<?php echo stripslashes(@$slide["revolution-layers"]); ?>" />
	</div>

	<div class="dc-input">
		<label>Transition</label>
		<select name="xt_slide[<?php echo @$id; ?>][revolution-transition]">
			<option value="boxslide"<?php if(@$slide["revolution-transition"] == "boxslide") echo ' selected="selected"'; ?>>boxslide</option>
			<option value="boxfade"<?php if(@$slide["revolution-transition"] == "boxfade") echo ' selected="selected"'; ?>>boxfade</option>
			<option value="slotzoom-horizontal"<?php if(@$slide["revolution-transition"] == "slotzoom-horizontal") echo ' selected="selected"'; ?>>slotzoom-horizontal</option>
			<option value="slotslide-horizontal"<?php if(@$slide["revolution-transition"] == "slotslide-horizontal") echo ' selected="selected"'; ?>>slotslide-horizontal</option>
			<option value="slotfade-horizontal"<?php if(@$slide["revolution-transition"] == "slotfade-horizontal") echo ' selected="selected"'; ?>>slotfade-horizontal</option>
			<option value="slotzoom-vertical"<?php if(@$slide["revolution-transition"] == "slotzoom-vertical") echo ' selected="selected"'; ?>>slotzoom-vertical</option>
			<option value="slotslide-vertical"<?php if(@$slide["revolution-transition"] == "slotslide-vertical") echo ' selected="selected"'; ?>>slotslide-vertical</option>
			<option value="slotfade-vertical"<?php if(@$slide["revolution-transition"] == "slotfade-vertical") echo ' selected="selected"'; ?>>slotfade-vertical</option>
			<option value="curtain-1"<?php if(@$slide["revolution-transition"] == "curtain-1") echo ' selected="selected"'; ?>>curtain-1</option>
			<option value="curtain-2"<?php if(@$slide["revolution-transition"] == "curtain-2") echo ' selected="selected"'; ?>>curtain-2</option>
			<option value="curtain-3"<?php if(@$slide["revolution-transition"] == "curtain-3") echo ' selected="selected"'; ?>>curtain-3</option>
			<option value="slideleft"<?php if(@$slide["revolution-transition"] == "slideleft") echo ' selected="selected"'; ?>>slideleft</option>
			<option value="slideright"<?php if(@$slide["revolution-transition"] == "slideright") echo ' selected="selected"'; ?>>slideright</option>
			<option value="slideup"<?php if(@$slide["revolution-transition"] == "slideup") echo ' selected="selected"'; ?>>slideup</option>
			<option value="slidedown"<?php if(@$slide["revolution-transition"] == "slidedown") echo ' selected="selected"'; ?>>slidedown</option>
			<option value="fade"<?php if(@$slide["revolution-transition"] == "fade") echo ' selected="selected"'; ?>>fade</option>
			<option value="random"<?php if(@$slide["revolution-transition"] == "random") echo ' selected="selected"'; ?>>random</option>
			<option value="slidehorizontal"<?php if(@$slide["revolution-transition"] == "slidehorizontal") echo ' selected="selected"'; ?>>slidehorizontal</option>
			<option value="slidevertical"<?php if(@$slide["revolution-transition"] == "slidevertical") echo ' selected="selected"'; ?>>slidevertical</option>
			<option value="papercut"<?php if(@$slide["revolution-transition"] == "papercut") echo ' selected="selected"'; ?>>papercut</option>
			<option value="flyin"<?php if(@$slide["revolution-transition"] == "flyin") echo ' selected="selected"'; ?>>flyin</option>
			<option value="turnoff"<?php if(@$slide["revolution-transition"] == "turnoff") echo ' selected="selected"'; ?>>turnoff</option>
			<option value="cube"<?php if(@$slide["revolution-transition"] == "cube") echo ' selected="selected"'; ?>>cube</option>
			<option value="3dcurtain-vertical"<?php if(@$slide["revolution-transition"] == "3dcurtain-vertical") echo ' selected="selected"'; ?>>3dcurtain-vertical</option>
			<option value="3dcurtain-horizontal"<?php if(@$slide["revolution-transition"] == "3dcurtain-horizontal") echo ' selected="selected"'; ?>>3dcurtain-horizontal</option>
		
		</select>
		<span class="dc-help">The appearance transition of this slide</span>
	</div> <!-- .dc-input -->

	<div class="dc-input">
		<label>Transition Duration</label>
		<input type="text" name="xt_slide[<?php echo @$id; ?>][revolution-masterspeed]" value="<?php echo stripslashes(@$slide["revolution-masterspeed"]); ?>" /> 
		<span class="dc-help">Set the Speed of the Slide Transition (max. 2000)</span>
	</div> <!-- .dc-input -->

	<div class="dc-input">
		<label>Delay</label>
		<input type="text" name="xt_slide[<?php echo @$id; ?>][revolution-delay]" value="<?php echo stripslashes(@$slide["revolution-delay"]); ?>" /> 
		<span class="dc-help">The time one slide stays on the screen in Milliseconds</span>
	</div> <!-- .dc-input -->

	<div class="dc-group">

		<div class="dc-input">
			<label>Enable Link</label>
			<select name="xt_slide[<?php echo @$id; ?>][revolution-enablelink]">
				<option value="disable"<?php if(@$slide["revolution-enablelink"] == "disable") echo ' selected="selected"'; ?>>disable</option>
				<option value="enable"<?php if(@$slide["revolution-enablelink"] == "enable") echo ' selected="selected"'; ?>>enable</option>
			
			</select>
			<span class="dc-help"></span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Slide Link</label>
			<input type="text" name="xt_slide[<?php echo @$id; ?>][revolution-link]" value="<?php echo stripslashes(@$slide["revolution-link"]); ?>" /> 
			<span class="dc-help">Link to Whole Image</span>
		</div> <!-- .dc-input -->

		<!-- 
		<div class="dc-input">
			<label>Target</label>
			<select name="xt_slide[<?php echo @$id; ?>][revolution-target]">
				<option value="_self"<?php if(@$slide["revolution-target"] == "_self") echo ' selected="selected"'; ?>>_self</option>
				<option value="_blank"<?php if(@$slide["revolution-target"] == "_blank") echo ' selected="selected"'; ?>>_blank</option>
			
			</select>
			<span class="dc-help">_self: Same Window and _blank New Window</span>
		</div> -->

	</div> <!-- .dc-group -->

	</div>

	<div class="dc-half last">

	<div class="dc-group">

		<div class="dc-input">
			<label>Enable Full Width Video</label>
			<select name="xt_slide[<?php echo @$id; ?>][revolution-enablevideo]">
				<option value="disable"<?php if(@$slide["revolution-enablevideo"] == "disable") echo ' selected="selected"'; ?>>disable</option>
				<option value="enable"<?php if(@$slide["revolution-enablevideo"] == "enable") echo ' selected="selected"'; ?>>enable</option>
			
			</select>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Vimeo ID</label>
			<input type="text" name="xt_slide[<?php echo @$id; ?>][revolution-vimeoid]" value="<?php echo stripslashes(@$slide["revolution-vimeoid"]); ?>" /> 
			<span class="dc-help">The field can take Vimeo ID (example: 30300114)</span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Youtube ID</label>
			<input type="text" name="xt_slide[<?php echo @$id; ?>][revolution-ytid]" value="<?php echo stripslashes(@$slide["revolution-ytid"]); ?>" /> 
			<span class="dc-help">The field can take Youtube ID (example: QohUdrgbD2k)</span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Video Autoplay</label>
			<input type="checkbox" name="xt_slide[<?php echo @$id; ?>][revolution-videoautoplay]" value="on"<?php if(@$slide["revolution-videoautoplay"] == "on") echo ' checked="checked"'; ?> /> Check to enable autoplay 
		</div> <!-- .dc-input -->

	</div> <!-- .dc-group -->

	<div class="dc-input">
		<div class="dc-preview">
			<?php if(@$slide["revolution-thumb"] != '') : ?>
				<img src="<?php echo @$slide["revolution-thumb"]; ?>" alt="PREVIEW" width="80" height="65" />
			<?php endif; ?>
		</div>
		<div class="wpts-row preview-row">
			<label>Thumbnail</label>
			<input type="text" class="dc-upload-admin-input" name="xt_slide[<?php echo @$id; ?>][revolution-thumb]" value="<?php echo @$slide["revolution-thumb"]; ?>" /> 
			<input class="dc-upload-admin" type="button" value="Upload" />
			<div class="dc-clear"></div>
		</div>
		<div class="dc-clear"></div>
		<span class="dc-help">(Optional) Slide Thumbnail. If not set - it will be taken from the slide image.</span>
	</div>

	</div> <!-- .dc-half -->

	<div class="dc-clear"></div>

	<?php include("_default-bottom.php"); ?>

<?php @$id++; ?>

<?php } 

endif; ?>

</div> <!-- .dc-slides -->

<script type="text/javascript">
	// <![CDATA[

	var xt_ID = <?php echo @$id; ?>;

	// ]]>
</script>

<?php include("_clone-top.php"); ?>

	<!-- CLONES MARKUP HERE -->
		
	<div class="dc-half">

		<div class="dc-input">
			<label>Transition</label>
			<select name="xt_clone[x][revolution-transition]">
				<option value="boxslide">boxslide</option>
				<option value="boxfade">boxfade</option>
				<option value="slotzoom-horizontal">slotzoom-horizontal</option>
				<option value="slotslide-horizontal">slotslide-horizontal</option>
				<option value="slotfade-horizontal">slotfade-horizontal</option>
				<option value="slotzoom-vertical">slotzoom-vertical</option>
				<option value="slotslide-vertical">slotslide-vertical</option>
				<option value="slotfade-vertical">slotfade-vertical</option>
				<option value="curtain-1">curtain-1</option>
				<option value="curtain-2">curtain-2</option>
				<option value="curtain-3">curtain-3</option>
				<option value="slideleft">slideleft</option>
				<option value="slideright">slideright</option>
				<option value="slideup">slideup</option>
				<option value="slidedown">slidedown</option>
				<option value="fade">fade</option>
				<option value="random">random</option>
				<option value="slidehorizontal">slidehorizontal</option>
				<option value="slidevertical">slidevertical</option>
				<option value="papercut">papercut</option>
				<option value="flyin">flyin</option>
				<option value="turnoff">turnoff</option>
				<option value="cube">cube</option>
				<option value="3dcurtain-vertical">3dcurtain-vertical</option>
				<option value="3dcurtain-horizontal">3dcurtain-horizontal</option>
			
			</select>
			<span class="dc-help">The appearance transition of this slide</span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Transition Duration</label>
			<input type="text" name="xt_clone[x][revolution-masterspeed]" /> 
			<span class="dc-help">Set the Speed of the Slide Transition (max. 2000)</span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Delay</label>
			<input type="text" name="xt_clone[x][revolution-delay]" /> 
			<span class="dc-help">The time one slide stays on the screen in Milliseconds</span>
		</div> <!-- .dc-input -->

		<div class="dc-group">

			<div class="dc-input">
				<label>Enable Link</label>
				<select name="xt_clone[x][revolution-enablelink]">
					<option value="disable">disable</option>
					<option value="enable">enable</option>
				
				</select>
				<span class="dc-help"></span>
			</div> <!-- .dc-input -->

			<div class="dc-input">
				<label>Slide Link</label>
				<input type="text" name="xt_clone[x][revolution-link]" /> 
				<span class="dc-help">Link to Whole Image</span>
			</div> <!-- .dc-input -->

		</div> <!-- .dc-group -->

	</div>

	<div class="dc-half last">

		<div class="dc-group">
			<div class="dc-input">
				<label>Enable Full Width Video</label>
				<select name="xt_clone[x][revolution-enablevideo]">
					<option value="disable">disable</option>
					<option value="enable">enable</option>
				
				</select>
			</div> <!-- .dc-input -->

			<div class="dc-input">
				<label>Vimeo ID</label>
				<input type="text" name="xt_clone[x][revolution-vimeoid]" /> 
				<span class="dc-help">The field can take Youtube ID (example: QohUdrgbD2k)</span>
			</div> <!-- .dc-input -->

			<div class="dc-input">
				<label>Youtube ID</label>
				<input type="text" name="xt_clone[x][revolution-ytid]" /> 
				<span class="dc-help">The field can take Youtube ID (example: QohUdrgbD2k)</span>
			</div> <!-- .dc-input -->

			<div class="dc-input">
				<label>Video Autoplay</label>
				<input type="checkbox" name="xt_clone[x][revolution-videoautoplay]" /> Check to enable autoplay 
			</div> <!-- .dc-input -->

		</div> <!-- .dc-group -->

		<div class="dc-input">
			<div class="dc-preview">
					 
			</div>
			<div class="wpts-row preview-row">
				<label>Thumbnail</label>
				<input type="text" class="dc-upload-admin-input" name="xt_clone[x][revolution-thumb]" /> 
				<input class="dc-upload-admin" type="button" value="Upload" />
				<div class="dc-clear"></div>
			</div>
			<div class="dc-clear"></div>
			<span class="dc-help">(Optional) Slide Thumbnail. If not set - it will be taken from the slide image.</span>
		</div>

	</div>

	<div class="dc-clear"></div>


<?php include("_clone-bottom.php"); ?>