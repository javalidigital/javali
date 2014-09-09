<?php

	$slides = isset( $values['xt_slide'] ) ? $values['xt_slide'][0] : '';

    $slides = maybe_unserialize($slides);

    $slides = maybe_unserialize($slides);

    $id = 0;

?>

<div class="dc-slides">

<?php 

if(count(@$slides) > 0 && @$slides != '') :

foreach($slides as $slide) { ?>

	<?php include("_default-top.php"); ?>

		<div class="dc-input">
			<label>Slide Caption</label>
			<textarea name="xt_slide[<?php echo @$id; ?>][camera-caption]"><?php echo stripslashes(@$slide["camera-caption"]); ?></textarea>
			<span class="dc-help">Add here your caption, supports HTML tags like strong, i, a.</span>
		</div> <!-- .dc-input -->

		<!-- 
		<div class="dc-input">
			<label>HTML</label>
			<textarea name="xt_slide[<?php echo @$id; ?>][camera-html]"><?php echo stripslashes(@$slide["camera-html"]); ?></textarea>
			<span class="dc-help">Add here your custom HTML elements</span>
		</div> -->

		<div class="dc-input">
			<label>Video</label>
			<textarea name="xt_slide[<?php echo @$id; ?>][camera-video]"><?php echo stripslashes(@$slide["camera-video"]); ?></textarea>
			<span class="dc-help">Insert here a iframe to display a video!</span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Slide Link</label>
			<input type="text" name="xt_slide[<?php echo @$id; ?>][camera-href]" value="<?php echo stripslashes(@$slide["camera-href"]); ?>" /> 
			<span class="dc-help">Insert a Link (URL) in your slide.</span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Link Target</label>
			<select name="xt_slide[<?php echo @$id; ?>][camera-target]">
				<option value=""<?php if(@$slide["camera-target"] == "") echo ' selected="selected"'; ?>></option>
				<option value="_self"<?php if(@$slide["camera-target"] == "_self") echo ' selected="selected"'; ?>>_self</option>
				<option value="_blank"<?php if(@$slide["camera-target"] == "_blank") echo ' selected="selected"'; ?>>_blank</option>
			
			</select>
			<span class="dc-help">Defines if the link will be open at a new window (_blank) or in the same (_self)</span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Transition Effect</label>
			<select name="xt_slide[<?php echo @$id; ?>][camera-fx]">
				<option value=""<?php if(@$slide["camera-fx"] == "") echo ' selected="selected"'; ?>></option>
				<option value="random"<?php if(@$slide["camera-fx"] == "random") echo ' selected="selected"'; ?>>random</option>
				<option value="simpleFade"<?php if(@$slide["camera-fx"] == "simpleFade") echo ' selected="selected"'; ?>>simpleFade</option>
				<option value="curtainTopLeft"<?php if(@$slide["camera-fx"] == "curtainTopLeft") echo ' selected="selected"'; ?>>curtainTopLeft</option>
				<option value="curtainTopRight"<?php if(@$slide["camera-fx"] == "curtainTopRight") echo ' selected="selected"'; ?>>curtainTopRight</option>
				<option value="curtainBottomLeft"<?php if(@$slide["camera-fx"] == "curtainBottomLeft") echo ' selected="selected"'; ?>>curtainBottomLeft</option>
				<option value="curtainBottomRight"<?php if(@$slide["camera-fx"] == "curtainBottomRight") echo ' selected="selected"'; ?>>curtainBottomRight</option>
				<option value="curtainSliceLeft"<?php if(@$slide["camera-fx"] == "curtainSliceLeft") echo ' selected="selected"'; ?>>curtainSliceLeft</option>
				<option value="curtainSliceRight"<?php if(@$slide["camera-fx"] == "curtainSliceRight") echo ' selected="selected"'; ?>>curtainSliceRight</option>
				<option value="blindCurtainTopRight"<?php if(@$slide["camera-fx"] == "blindCurtainTopRight") echo ' selected="selected"'; ?>>blindCurtainTopRight</option>
				<option value="blindCurtainBottomLeft"<?php if(@$slide["camera-fx"] == "blindCurtainBottomLeft") echo ' selected="selected"'; ?>>blindCurtainBottomLeft</option>
				<option value="blindCurtainBottomRight"<?php if(@$slide["camera-fx"] == "blindCurtainBottomRight") echo ' selected="selected"'; ?>>blindCurtainBottomRight</option>
				<option value="blindCurtainSliceBottom"<?php if(@$slide["camera-fx"] == "blindCurtainSliceBottom") echo ' selected="selected"'; ?>>blindCurtainSliceBottom</option>
				<option value="blindCurtainSliceTop"<?php if(@$slide["camera-fx"] == "blindCurtainSliceTop") echo ' selected="selected"'; ?>>blindCurtainSliceTop</option>
				<option value="stampede"<?php if(@$slide["camera-fx"] == "stampede") echo ' selected="selected"'; ?>>stampede</option>
				<option value="mosaic"<?php if(@$slide["camera-fx"] == "mosaic") echo ' selected="selected"'; ?>>mosaic</option>
				<option value="mosaicReverse"<?php if(@$slide["camera-fx"] == "mosaicReverse") echo ' selected="selected"'; ?>>mosaicReverse</option>
				<option value="mosaicRandom"<?php if(@$slide["camera-fx"] == "mosaicRandom") echo ' selected="selected"'; ?>>mosaicRandom</option>
				<option value="mosaicSpiral"<?php if(@$slide["camera-fx"] == "mosaicSpiral") echo ' selected="selected"'; ?>>mosaicSpiral</option>
				<option value="mosaicSpiralReverse"<?php if(@$slide["camera-fx"] == "mosaicSpiralReverse") echo ' selected="selected"'; ?>>mosaicSpiralReverse</option>
				<option value="topLeftBottomRight"<?php if(@$slide["camera-fx"] == "topLeftBottomRight") echo ' selected="selected"'; ?>>topLeftBottomRight</option>
				<option value="bottomRightTopLeft"<?php if(@$slide["camera-fx"] == "bottomRightTopLeft") echo ' selected="selected"'; ?>>bottomRightTopLeft</option>
				<option value="bottomLeftTopRight"<?php if(@$slide["camera-fx"] == "bottomLeftTopRight") echo ' selected="selected"'; ?>>bottomLeftTopRight</option>
				<option value="bottomLeftTopRight"<?php if(@$slide["camera-fx"] == "bottomLeftTopRight") echo ' selected="selected"'; ?>>bottomLeftTopRight</option>
			
			</select>
			<span class="dc-help">Select the transition used in the slider.</span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Enable Portrait Mode?</label>
			<span class="dc-radio"><input type="radio" name="xt_slide[<?php echo @$id; ?>][camera-portrait]" value="no"<?php if(@$slide["camera-portrait"] == "no") echo ' checked="checked"'; ?> />no</span> 
			<span class="dc-radio"><input type="radio" name="xt_slide[<?php echo @$id; ?>][camera-portrait]" value="yes"<?php if(@$slide["camera-portrait"] == "yes") echo ' checked="checked"'; ?> />yes</span> 
			
			<span class="dc-help">Enabling this mode your images won't be cropped.</span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<div class="preview">
				<?php if(@$slide["camera-thumb"] != '') : ?>
					<img src="<?php echo @$slide["camera-thumb"]; ?>" alt="PREVIEW" width="80" height="65" />
				<?php endif; ?>
			</div>
			<div class="wpts-row preview-row">
				<label>Slide Thumbnail</label>
				<input type="text" class="dc-upload-admin-input" name="xt_slide[<?php echo @$id; ?>][camera-thumb]" value="<?php echo @$slide["camera-thumb"]; ?>" /> 
				<input class="dc-upload-admin" type="button" value="Upload" />
				<div class="dc-clear"></div>
			</div>
			<div class="dc-clear"></div>
			<span class="dc-help">(Optional) If you want to use thumbnails, upload it now!</span>
		</div>


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

	<div class="dc-input">
		<label>Slide Caption</label>
		<textarea name="xt_clone[x][camera-caption]"></textarea>
		<span class="dc-help">Add here your caption, supports HTML tags like strong, i, a.</span>
	</div> <!-- .dc-input -->

	<!-- <div class="dc-input">
		<label>HTML</label>
		<textarea name="xt_clone[x][camera-html]"></textarea>
		<span class="dc-help">Add here your custom HTML elements</span>
	</div> -->

	<div class="dc-input">
		<label>Video</label>
		<textarea name="xt_clone[x][camera-video]"></textarea>
		<span class="dc-help">Insert here a iframe to display a video!</span>
	</div> <!-- .dc-input -->


	<div class="dc-input">
		<label>Slide Link</label>
		<input type="text" name="xt_clone[x][camera-href]" /> 
		<span class="dc-help">Insert a Link (URL) in your slide.</span>
	</div> <!-- .dc-input -->

	<div class="dc-input">
		<label>Link Target</label>
		<select name="xt_clone[x][camera-target]">
			<option value=""></option>
			<option value="_self">_self</option>
			<option value="_blank">_blank</option>
		
		</select>
		<span class="dc-help">Defines if the link will be open at a new window (_blank) or in the same (_self)</span>
	</div> <!-- .dc-input -->

	<div class="dc-input">
		<label>Transition Effect</label>
		<select name="xt_clone[x][camera-fx]">
			<option value=""></option>
			<option value="random">random</option>
			<option value="simpleFade">simpleFade</option>
			<option value="curtainTopLeft">curtainTopLeft</option>
			<option value="curtainTopRight">curtainTopRight</option>
			<option value="curtainBottomLeft">curtainBottomLeft</option>
			<option value="curtainBottomRight">curtainBottomRight</option>
			<option value="curtainSliceLeft">curtainSliceLeft</option>
			<option value="curtainSliceRight">curtainSliceRight</option>
			<option value="blindCurtainTopRight">blindCurtainTopRight</option>
			<option value="blindCurtainBottomLeft">blindCurtainBottomLeft</option>
			<option value="blindCurtainBottomRight">blindCurtainBottomRight</option>
			<option value="blindCurtainSliceBottom">blindCurtainSliceBottom</option>
			<option value="blindCurtainSliceTop">blindCurtainSliceTop</option>
			<option value="stampede">stampede</option>
			<option value="mosaic">mosaic</option>
			<option value="mosaicReverse">mosaicReverse</option>
			<option value="mosaicRandom">mosaicRandom</option>
			<option value="mosaicSpiral">mosaicSpiral</option>
			<option value="mosaicSpiralReverse">mosaicSpiralReverse</option>
			<option value="topLeftBottomRight">topLeftBottomRight</option>
			<option value="bottomRightTopLeft">bottomRightTopLeft</option>
			<option value="bottomLeftTopRight">bottomLeftTopRight</option>
			<option value="bottomLeftTopRight">bottomLeftTopRight</option>
		</select>
		<span class="dc-help">Select the transition used in the slider.</span>
	</div> <!-- .dc-input -->

	<div class="dc-input">
		<label>Enable Portrait Mode?</label>
		<span class="dc-radio"><input type="radio" name="xt_clone[x][camera-portrait]" />no</span> 
		<span class="dc-radio"><input type="radio" name="xt_clone[x][camera-portrait]" />yes</span> 
		
		<span class="dc-help">Enabling this mode your images won't be cropped.</span>
	</div> <!-- .dc-input -->

	<div class="dc-input">
		<div class="preview">
				 
		</div>
		<div class="wpts-row preview-row">
			<label>Slide Thumbnail</label>
			<input type="text" class="dc-upload-admin-input" name="xt_clone[x][camera-thumb]" /> 
			<input class="dc-upload-admin" type="button" value="Upload" />
			<div class="dc-clear"></div>
		</div>
		<div class="dc-clear"></div>
		<span class="dc-help">(Optional) If you want to use thumbnails, upload it now!</span>
	</div>

<?php include("_clone-bottom.php"); ?>