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
		
		<!--
		<div class="dc-input">
			<label>Big Header</label>
			<input type="text" name="xt_slide[<?php echo @$id; ?>][elastislide-header]" value="<?php echo stripslashes(@$slide["elastislide-header"]); ?>" /> 
			<span class="dc-help">Supports Html tags</span>
		</div>

		<div class="dc-input">
			<label>Caption</label>
			<input type="text" name="xt_slide[<?php echo @$id; ?>][elastislide-caption]" value="<?php echo stripslashes(@$slide["elastislide-caption"]); ?>" /> 
			<span class="dc-help">Supports Html tags</span>
		</div>
		-->

		<div class="dc-input">
			<label>Link</label>
			<input type="text" name="xt_slide[<?php echo @$id; ?>][elastislide-link]" value="<?php echo stripslashes(@$slide["elastislide-link"]); ?>" /> 
			<span class="dc-help"></span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Link Target</label>
			<select name="xt_slide[<?php echo @$id; ?>][elastislide-target]">
				<option value="_self"<?php if(@$slide["elastislide-target"] == "_self") echo ' selected="selected"'; ?>>_self</option>
				<option value="_blank"<?php if(@$slide["elastislide-target"] == "_blank") echo ' selected="selected"'; ?>>_blank</option>
				
			</select>
			<span class="dc-help">_self: same window
			 - _blank: new window</span>
		</div> <!-- .dc-input -->

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
		
		<!-- 
		<div class="dc-input">
			<label>Big Header</label>
			<input type="text" name="xt_clone[x][elastislide-header]" /> 
			<span class="dc-help">Supports Html tags</span>
		</div>

		<div class="dc-input">
			<label>Caption</label>
			<input type="text" name="xt_clone[x][elastislide-caption]" /> 
			<span class="dc-help">Supports Html tags</span>
		</div>
		-->

		<div class="dc-input">
			<label>Link</label>
			<input type="text" name="xt_clone[x][elastislide-link]" /> 
			<span class="dc-help"></span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Link Target</label>
			<select name="xt_clone[x][elastislide-target]">
				<option value="_self">_self</option>
				<option value="_blank">_blank</option>
			
			</select>
			<span class="dc-help">_self: same window
		 _blank: new window</span>
		</div> <!-- .dc-input -->


<?php include("_clone-bottom.php"); ?>