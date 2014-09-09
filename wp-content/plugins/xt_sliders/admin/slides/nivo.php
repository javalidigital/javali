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
			<textarea name="xt_slide[<?php echo @$id; ?>][caption]"><?php echo stripslashes(@$slide["caption"]); ?></textarea>
			<span class="dc-help">Add a Caption to your slide, supports HTML tags.</span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<div class="dc-preview">
				<?php if(@$slide["thumb"] != '') : ?>
					<img src="<?php echo @$slide["thumb"]; ?>" alt="PREVIEW" width="80" height="65" />
				<?php endif; ?>
			</div>
			<div class="wpts-row preview-row">
				<label>Slide Thumbnail</label>
				<input type="text" class="dc-upload-admin-input" name="xt_slide[<?php echo @$id; ?>][thumb]" value="<?php echo @$slide["thumb"]; ?>" /> 
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
			<textarea name="xt_clone[x][caption]"></textarea>
			<span class="dc-help">Add a Caption to your slide, supports HTML tags.</span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<div class="dc-preview">
					 
			</div>
			<div class="wpts-row preview-row">
				<label>Slide Thumbnail</label>
				<input type="text" class="dc-upload-admin-input" name="xt_clone[x][thumb]" /> 
				<input class="dc-upload-admin" type="button" value="Upload" />
				<div class="dc-clear"></div>
			</div>
			<div class="dc-clear"></div>
			<span class="dc-help">(Optional) If you want to use thumbnails, upload it now!</span>
		</div>

<?php include("_clone-bottom.php"); ?>