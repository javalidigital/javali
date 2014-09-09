<div class="dc-slide" id="rev-slider-<?php echo $id; ?>">

	<div class="dc-header">

		
		<div class="thumb">
			<?php if($slide["slide_image"] != '') : ?>
				<img src="<?php echo $slide["slide_image"]; ?>" width="80" height="60" alt="Preview Image" />
			<?php endif;?>
		</div> <!-- .thumb -->


		<div class="dc-commands">
			<a href="#" class="dc-edit"><img src="<?php echo plugins_url().'/xt_sliders/admin/assets/images/ic_edit.png'; ?>" alt="Edit" /></a>
			<a href="#" class="dc-remove"><img src="<?php echo plugins_url().'/xt_sliders/admin/assets/images/ic_cancel.png'; ?>" alt="Remove" /></a>
			<a href="#" class="dc-drag"><img src="<?php echo plugins_url().'/xt_sliders/admin/assets/images/ic_fullscreen.png'; ?>" alt="Drag/Reorder" /></a>
		</div>

		<div class="dc-clear"></div>
	</div>

	<div class="dc-content-slide">
		
		<div class="dc-input dc-main-image">
			<?php if($slide["slide_image"] != '') : ?>
				<div class="dc-preview">
					<img src="<?php echo $slide["slide_image"]; ?>" alt="Preview Image" />
				</div>
			<?php endif; ?>
			<label>Slide Image</label>
			<input type="text" class="dc-upload-admin-input" name="xt_slide[<?php echo $id; ?>][slide_image]" value="<?php echo $slide["slide_image"]; ?>" /> 
			<input class="dc-upload-admin" type="button" value="Upload" />
			<span class="dc-help">Defines the slide image.</span>
		</div> <!-- .dc-input -->