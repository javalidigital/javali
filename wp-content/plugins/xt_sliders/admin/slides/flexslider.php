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

		<!-- SLIDES SAVED HERE -->

	<div class="dc-half">
		
		<div class="dc-input">
			<label>Link</label>
			<input type="text" name="xt_slide[<?php echo @$id; ?>][flexslider-link]" value="<?php echo stripslashes(@$slide["flexslider-link"]); ?>" /> 
			<span class="dc-help"></span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Target</label>
			<select name="xt_slide[<?php echo @$id; ?>][flexslider-target]">
				<option value="_self"<?php if(@$slide["flexslider-target"] == "_self") echo ' selected="selected"'; ?>>_self</option>
				<option value="_blank"<?php if(@$slide["flexslider-target"] == "_blank") echo ' selected="selected"'; ?>>_blank</option>
			
			</select>
			<span class="dc-help"></span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Caption</label>
			<textarea name="xt_slide[<?php echo @$id; ?>][flexslider-caption]"><?php echo stripslashes(@$slide["flexslider-caption"]); ?></textarea>
			<span class="dc-help">Support Html tags</span>
		</div> <!-- .dc-input -->

		<!-- 
		<div class="dc-input">
			<label>Caption Header</label>
			<input type="text" name="xt_slide[<?php echo @$id; ?>][flexslider-captionheader]" value="<?php echo stripslashes(@$slide["flexslider-captionheader"]); ?>" /> 
			<span class="dc-help"></span>
		</div> -->

		<div class="dc-input">
			<label>Caption Position</label>
			<select name="xt_slide[<?php echo @$id; ?>][flexslider-captionpos]">
				<option value="top"<?php if(@$slide["flexslider-captionpos"] == "top") echo ' selected="selected"'; ?>>top</option>
				<option value="left"<?php if(@$slide["flexslider-captionpos"] == "left") echo ' selected="selected"'; ?>>left</option>
				<option value="right"<?php if(@$slide["flexslider-captionpos"] == "right") echo ' selected="selected"'; ?>>right</option>
				<option value="bottom"<?php if(@$slide["flexslider-captionpos"] == "bottom") echo ' selected="selected"'; ?>>bottom</option>
			
			</select>
			<span class="dc-help"></span>
		</div> <!-- .dc-input -->

	</div> <!-- .dc-half -->

	<div class="dc-half last">

		<div class="dc-group">

		<div class="dc-input">
			<label>Enable Video?</label>
			<input type="checkbox" name="xt_slide[<?php echo @$id; ?>][flexslider-enablevideo]" value="on"<?php if(@$slide["flexslider-enablevideo"] == "on") echo ' checked="checked"'; ?> /> Check to enable video
			<span class="dc-help"></span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Vimeo ID</label>
			<input type="text" name="xt_slide[<?php echo @$id; ?>][flexslider-vimeoid]" value="<?php echo stripslashes(@$slide["flexslider-vimeoid"]); ?>" /> 
			<span class="dc-help">Use only the ID, like 155548854</span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Youtube ID</label>
			<input type="text" name="xt_slide[<?php echo @$id; ?>][flexslider-youtubeid]" value="<?php echo stripslashes(@$slide["flexslider-youtubeid"]); ?>" /> 
			<span class="dc-help">Use only the ID, like ya455b45a</span>
		</div> <!-- .dc-input -->

		</div>

	</div> <!-- .dc-half last -->

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
			<label>Link</label>
			<input type="text" name="xt_clone[x][flexslider-link]" /> 
			<span class="dc-help"></span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Target</label>
			<select name="xt_clone[x][flexslider-target]">
				<option value="_self">_self</option>
				<option value="_blank">_blank</option>
			
			</select>
			<span class="dc-help"></span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Caption</label>
			<textarea name="xt_clone[x][flexslider-caption]"></textarea>
			<span class="dc-help">Support Html tags</span>
		</div> <!-- .dc-input -->

		<!--
		<div class="dc-input">
			<label>Caption Header</label>
			<input type="text" name="xt_clone[x][flexslider-captionheader]" /> 
			<span class="dc-help"></span>
		</div> -->

		<div class="dc-input">
			<label>Caption Position</label>
			<select name="xt_clone[x][flexslider-captionpos]">
				<option value="top">top</option>
				<option value="left">left</option>
				<option value="right">right</option>
				<option value="bottom">bottom</option>
			
			</select>
			<span class="dc-help"></span>
		</div> <!-- .dc-input -->

	</div>

	<div class="dc-half last">

		<div class="dc-group">

		<div class="dc-input">
			<label>Enable Video?</label>
			<input type="checkbox" name="xt_clone[x][flexslider-enablevideo]" /> Check to enable video
			<span class="dc-help"></span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Vimeo ID</label>
			<input type="text" name="xt_clone[x][flexslider-vimeoid]" /> 
			<span class="dc-help">Use only the ID, like 54569985 </span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Youtube ID</label>
			<input type="text" name="xt_clone[x][flexslider-youtubeid]" /> 
			<span class="dc-help">Use only the ID, like 5225avAas</span>
		</div> <!-- .dc-input -->

		</div> <!-- .dc-group -->

	</div> <!-- .dc-half last -->

	<div class="dc-clear"></div>

<?php include("_clone-bottom.php"); ?>