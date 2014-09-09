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
			<label>Transition</label>
			<select name="xt_slide[<?php echo @$id; ?>][kenburn-panel-transition]">
				<option value="fade"<?php if(@$slide["kenburn-panel-transition"] == "fade") echo ' selected="selected"'; ?>>fade</option>
				<option value="slide"<?php if(@$slide["kenburn-panel-transition"] == "slide") echo ' selected="selected"'; ?>>slide</option>
			
			</select>
			<span class="dc-help">The transition used to change slide.</span>
		</div> <!-- .dc-input -->

		<div class="dc-group">

			<div class="dc-half">

				<div class="dc-input">
					<label>Horizontal Move from</label>
					<select name="xt_slide[<?php echo @$id; ?>][kenburn-panel-movex]">
						<option value="right"<?php if(@$slide["kenburn-panel-movex"] == "right") echo ' selected="selected"'; ?>>right</option>
						<option value="left"<?php if(@$slide["kenburn-panel-movex"] == "left") echo ' selected="selected"'; ?>>left</option>
						<option value="center"<?php if(@$slide["kenburn-panel-movex"] == "center") echo ' selected="selected"'; ?>>center</option>
					
					</select>
					<span class="dc-help">From where the horizontal pan move begins?</span>
				</div> <!-- .dc-input -->

			</div> <!-- .dc-half -->

			<div class="dc-half last">

				<div class="dc-input">
					<label>Vertical Move from</label>
					<select name="xt_slide[<?php echo @$id; ?>][kenburn-panel-movey]">
						<option value="top"<?php if(@$slide["kenburn-panel-movey"] == "top") echo ' selected="selected"'; ?>>top</option>
						<option value="bottom"<?php if(@$slide["kenburn-panel-movey"] == "bottom") echo ' selected="selected"'; ?>>bottom</option>
						<option value="center"<?php if(@$slide["kenburn-panel-movey"] == "center") echo ' selected="selected"'; ?>>center</option>
					
					</select>
					<span class="dc-help">From where the vertical pan move begins?</span>
				</div> <!-- .dc-input -->

			</div> <!-- .dc-half last -->

			<div class="dc-clear"></div>

			<div class="dc-half">

				<div class="dc-input">
					<label>Horizontal Move Ends at</label>
					<select name="xt_slide[<?php echo @$id; ?>][kenburn-panel-moveendx]">
						<option value="left"<?php if(@$slide["kenburn-panel-moveendx"] == "left") echo ' selected="selected"'; ?>>left</option>
						<option value="right"<?php if(@$slide["kenburn-panel-moveendx"] == "right") echo ' selected="selected"'; ?>>right</option>
						<option value="center"<?php if(@$slide["kenburn-panel-moveendx"] == "center") echo ' selected="selected"'; ?>>center</option>
					
					</select>
					<span class="dc-help">Where the horizontal pan move ends?</span>
				</div> <!-- .dc-input -->

			</div> <!-- .dc-half -->

			<div class="dc-half last">

				<div class="dc-input">
					<label>Vertical Move Ends at</label>
					<select name="xt_slide[<?php echo @$id; ?>][kenburn-panel-moveendy]">
						<option value="top"<?php if(@$slide["kenburn-panel-moveendy"] == "top") echo ' selected="selected"'; ?>>top</option>
						<option value="bottom"<?php if(@$slide["kenburn-panel-moveendy"] == "bottom") echo ' selected="selected"'; ?>>bottom</option>
						<option value="center"<?php if(@$slide["kenburn-panel-moveendy"] == "center") echo ' selected="selected"'; ?>>center</option>
					
					</select>
					<span class="dc-help">Where the vertical pan move ends?</span>
				</div> <!-- .dc-input -->

			</div> <!-- .dc-half last -->

			<div class="dc-clear"></div>

			<div class="dc-input">
				<label>Move Duration</label>
				<input type="text" name="xt_slide[<?php echo @$id; ?>][kenburn-panel-moveduration]" value="<?php echo stripslashes(@$slide["kenburn-panel-moveduration"]); ?>" /> 
				<span class="dc-help">Slide Pan/Move duration in Seconds</span>
			</div> <!-- .dc-input -->

		</div> <!-- .dc-group -->

		<div class="dc-group">

			<div class="dc-input">
				<label>Zoom  Type</label>
				<select name="xt_slide[<?php echo @$id; ?>][kenburn-panel-zoomtype]">
					<option value="out"<?php if(@$slide["kenburn-panel-zoomtype"] == "out") echo ' selected="selected"'; ?>>out</option>
					<option value="in"<?php if(@$slide["kenburn-panel-zoomtype"] == "in") echo ' selected="selected"'; ?>>in</option>
				
				</select>
				<span class="dc-help">Increase or decrease zoom?</span>
			</div> <!-- .dc-input -->

			<div class="dc-input">
				<label>Zoom Factor</label>
				<input type="text" name="xt_slide[<?php echo @$id; ?>][kenburn-panel-zoom]" value="<?php echo stripslashes(@$slide["kenburn-panel-zoom"]); ?>" /> 
				<span class="dc-help">How much zoom? Ex.: 1.5 (use values greater than 1.0)</span>
			</div> <!-- .dc-input -->

		</div> <!-- .dc-group -->

		<div class="dc-input">
			<div class="dc-preview">
				<?php if(@$slide["kenburn-panel-blurimage"] != '') : ?>
					<img src="<?php echo @$slide["kenburn-panel-blurimage"]; ?>" alt="PREVIEW" width="80" height="65" />
				<?php endif; ?>
			</div>
			<div class="wpts-row preview-row">
				<label>Optional Blur Image</label>
				<input type="text" class="dc-upload-admin-input" name="xt_slide[<?php echo @$id; ?>][kenburn-panel-blurimage]" value="<?php echo @$slide["kenburn-panel-blurimage"]; ?>" /> 
				<input class="dc-upload-admin" type="button" value="Upload" />
				<div class="dc-clear"></div>
			</div>
			<div class="dc-clear"></div>
			<span class="dc-help">This optinal image will be used in the zoom and pan move to create a blur effect.</span>
		</div>

		<div class="dc-input">
			<div class="dc-preview">
				<?php if(@$slide["kenburn-panel-thumb"] != '') : ?>
					<img src="<?php echo @$slide["kenburn-panel-thumb"]; ?>" alt="PREVIEW" width="80" height="65" />
				<?php endif; ?>
			</div>
			<div class="wpts-row preview-row">
				<label>Optional Thumbnail</label>
				<input type="text" class="dc-upload-admin-input" name="xt_slide[<?php echo @$id; ?>][kenburn-panel-thumb]" value="<?php echo @$slide["kenburn-panel-thumb"]; ?>" /> 
				<input class="dc-upload-admin" type="button" value="Upload" />
				<div class="dc-clear"></div>
			</div>
			<div class="dc-clear"></div>
			<span class="dc-help">Will be displayed at navigation if you enable use of thumbnails.</span>
		</div>

	</div> <!-- .dc-half -->

	<div class="dc-half last">

		<div class="dc-half">

			<div class="dc-input">
				<label>Caption Position</label>
				<select name="xt_slide[<?php echo @$id; ?>][kenburn-panel-captionposition]">
					<option value="left"<?php if(@$slide["kenburn-panel-captionposition"] == "left") echo ' selected="selected"'; ?>>left</option>
					<option value="top"<?php if(@$slide["kenburn-panel-captionposition"] == "top") echo ' selected="selected"'; ?>>top</option>
					<option value="right"<?php if(@$slide["kenburn-panel-captionposition"] == "right") echo ' selected="selected"'; ?>>right</option>
					<option value="bottom"<?php if(@$slide["kenburn-panel-captionposition"] == "bottom") echo ' selected="selected"'; ?>>bottom</option>
				
				</select>
				<span class="dc-help">Where to display the captions?</span>
			</div> <!-- .dc-input -->

		</div> <!-- .dc-half -->

		<div class="dc-half last">

			<div class="dc-input">
				<label>Caption Fade</label>
				<select name="xt_slide[<?php echo @$id; ?>][kenburn-panel-captionfade]">
					<option value="none"<?php if(@$slide["kenburn-panel-captionfade"] == "none") echo ' selected="selected"'; ?>>none</option>
					<option value="right"<?php if(@$slide["kenburn-panel-captionfade"] == "right") echo ' selected="selected"'; ?>>right</option>
					<option value="top"<?php if(@$slide["kenburn-panel-captionfade"] == "top") echo ' selected="selected"'; ?>>top</option>
					<option value="left"<?php if(@$slide["kenburn-panel-captionfade"] == "left") echo ' selected="selected"'; ?>>left</option>
					<option value="bottom"<?php if(@$slide["kenburn-panel-captionfade"] == "bottom") echo ' selected="selected"'; ?>>bottom</option>
				
				</select>
				<span class="dc-help">To where the caption will go?</span>
			</div> <!-- .dc-input -->

		</div> <!-- .dc-half last -->

		<div class="dc-clear"></div>

		<div class="dc-input">
			<label>Caption Title</label>
			<input type="text" name="xt_slide[<?php echo @$id; ?>][kenburn-panel-captiontitle]" value="<?php echo stripslashes(@$slide["kenburn-panel-captiontitle"]); ?>" /> 
			<span class="dc-help"></span>
		</div> <!-- .dc-input -->

		<div class="dc-input">
			<label>Caption</label>
			<textarea name="xt_slide[<?php echo @$id; ?>][kenburn-panel-caption]"><?php echo stripslashes(@$slide["kenburn-panel-caption"]); ?></textarea> 
			<span class="dc-help">Supports HTML tags</span>
		</div> <!-- .dc-input -->

		<div class="dc-group">

			<div class="dc-input">
				<label>Enable Video?</label>
				<input type="checkbox" name="xt_slide[<?php echo @$id; ?>][kenburn-panel-enablevideo]" value="on"<?php if(@$slide["kenburn-panel-enablevideo"] == "on") echo ' checked="checked"'; ?> /> Check to enable video at the slide
				<span class="dc-help">Check it to enable video in the slide.</span>
			</div> <!-- .dc-input -->

			<div class="dc-input">
				<label>Vimeo Video ID</label>
				<input type="text" name="xt_slide[<?php echo @$id; ?>][kenburn-panel-vimeoid]" value="<?php echo stripslashes(@$slide["kenburn-panel-vimeoid"]); ?>" /> 
				<span class="dc-help">Type only the ID, like 25565458 - use only Vimeo or YouTube, never both.</span>
			</div> <!-- .dc-input -->

			<div class="dc-input">
				<label>Youtube Video ID</label>
				<input type="text" name="xt_slide[<?php echo @$id; ?>][kenburn-panel-youtubeid]" value="<?php echo stripslashes(@$slide["kenburn-panel-youtubeid"]); ?>" /> 
				<span class="dc-help">Type only the ID, like j57IzkTFnT8 - use only Vimeo or YouTube, never both.</span>
			</div> <!-- .dc-input -->

			<div class="dc-input">
				<label>Video Title</label>
				<input type="text" name="xt_slide[<?php echo @$id; ?>][kenburn-panel-videotitle]" value="<?php echo stripslashes(@$slide["kenburn-panel-videotitle"]); ?>" /> 
				<span class="dc-help"></span>
			</div> <!-- .dc-input -->

			<div class="dc-input">
				<label>Video Caption</label>
				<textarea name="xt_slide[<?php echo @$id; ?>][kenburn-panel-videocaption]"><?php echo stripslashes(@$slide["kenburn-panel-videocaption"]); ?></textarea>
				<span class="dc-help"></span>
			</div> <!-- .dc-input -->

		</div> <!-- .dc-group -->

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
		
		<div class="dc-input">
		<label>Transition</label>
		<select name="xt_clone[x][kenburn-panel-transition]">
			<option value="fade">fade</option>
			<option value="slide">slide</option>
		
		</select>
		<span class="dc-help">The transition used to change slide.</span>
		</div> <!-- .dc-input -->

		<div class="dc-half">

			<div class="dc-group">

				<div class="dc-half">

					<div class="dc-input">
						<label>Horizontal Move from</label>
						<select name="xt_clone[x][kenburn-panel-movex]">
							<option value="right">right</option>
							<option value="left">left</option>
							<option value="center">center</option>
						
						</select>
						<span class="dc-help">From where the horizontal pan move begins?</span>
					</div> <!-- .dc-input -->

					<div class="dc-input">
						<label>Vertical Move from</label>
						<select name="xt_clone[x][kenburn-panel-movey]">
							<option value="top">top</option>
							<option value="bottom">bottom</option>
							<option value="center">center</option>
						
						</select>
						<span class="dc-help">Where the horizontal pan move ends?</span>
					</div> <!-- .dc-input -->

				</div> <!-- .dc-half -->

				<div class="dc-half last">

					<div class="dc-input">
						<label>Horizontal Move Ends at</label>
						<select name="xt_clone[x][kenburn-panel-moveendx]">
							<option value="left">left</option>
							<option value="right">right</option>
							<option value="center">center</option>
						
						</select>
						<span class="dc-help">From where the vertical pan move begins?</span>
					</div> <!-- .dc-input -->

					<div class="dc-input">
						<label>Vertical Move Ends at</label>
						<select name="xt_clone[x][kenburn-panel-moveendy]">
							<option value="top">top</option>
							<option value="bottom">bottom</option>
							<option value="center">center</option>
						
						</select>
						<span class="dc-help">Where the vertical pan move ends?</span>
					</div> <!-- .dc-input -->

				</div> <!-- .dc-half last -->

				<div class="dc-clear"></div>

					<div class="dc-input">
						<label>Move Duration</label>
						<input type="text" name="xt_clone[x][kenburn-panel-moveduration]" /> 
						<span class="dc-help">Slide Pan/Move duration in Seconds</span>
					</div> <!-- .dc-input -->

			</div> <!-- .dc-group -->

			<div class="dc-group">

				<div class="dc-input">
					<label>Zoom  Type</label>
					<select name="xt_clone[x][kenburn-panel-zoomtype]">
						<option value="out">out</option>
						<option value="in">in</option>
					
					</select>
					<span class="dc-help">Increase or decrease zoom?</span>
				</div> <!-- .dc-input -->

				<div class="dc-input">
					<label>Zoom Factor</label>
					<input type="text" name="xt_clone[x][kenburn-panel-zoom]" /> 
					<span class="dc-help">How much zoom? Ex.: 1.5 (use values greater than 1.0)</span>
				</div> <!-- .dc-input -->

			</div> <!-- .dc-group -->

			<div class="dc-input">
				<div class="dc-preview">
						 
				</div>
				<div class="wpts-row preview-row">
					<label>Optional Blur Image</label>
					<input type="text" class="dc-upload-admin-input" name="xt_clone[x][kenburn-panel-blurimage]" /> 
					<input class="dc-upload-admin" type="button" value="Upload" />
					<div class="dc-clear"></div>
				</div>
				<div class="dc-clear"></div>
				<span class="dc-help">This optinal image will be used in the zoom and pan move to create a blur effect.</span>
			</div>

			<div class="dc-input">
				<div class="dc-preview">
						 
				</div>
				<div class="wpts-row preview-row">
					<label>Optional Thumbnail</label>
					<input type="text" class="dc-upload-admin-input" name="xt_clone[x][kenburn-panel-thumb]" /> 
					<input class="dc-upload-admin" type="button" value="Upload" />
					<div class="dc-clear"></div>
				</div>
				<div class="dc-clear"></div>
				<span class="dc-help">Will be displayed at navigation if you enable use of thumbnails.</span>
			</div>

		</div> <!-- .dc-half -->

		<div class="dc-half last">

			<div class="dc-half">

				<div class="dc-input">
					<label>Caption Position</label>
					<select name="xt_clone[x][kenburn-panel-captionposition]">
						<option value="left">left</option>
						<option value="top">top</option>
						<option value="right">right</option>
						<option value="bottom">bottom</option>
					
					</select>
					<span class="dc-help">Where to display the captions?</span>
				</div> <!-- .dc-input -->

			</div> <!-- .dc-half -->

			<div class="dc-half last">

				<div class="dc-input">
					<label>Caption Fade</label>
					<select name="xt_clone[x][kenburn-panel-captionfade]">
						<option value="none">none</option>
						<option value="right">right</option>
						<option value="top">top</option>
						<option value="left">left</option>
						<option value="bottom">bottom</option>
					
					</select>
					<span class="dc-help">To where the caption will go?</span>
				</div> <!-- .dc-input -->
			
			</div> <!-- .dc-half last -->

			<div class="dc-clear"></div>

			<div class="dc-input">
				<label>Caption Title</label>
				<input type="text" name="xt_clone[x][kenburn-panel-captiontitle]" /> 
				<span class="dc-help"></span>
			</div> <!-- .dc-input -->

			<div class="dc-input">
				<label>Caption</label>
				<input type="text" name="xt_clone[x][kenburn-panel-caption]" /> 
				<span class="dc-help">Supports Html tags</span>
			</div> <!-- .dc-input -->

			<div class="dc-group">

				<div class="dc-input">
					<label>Enable Video?</label>
					<input type="checkbox" name="xt_clone[x][kenburn-panel-enablevideo]" /> Check it to enable video at slide
					<span class="dc-help">Check it to enable video in the slide.</span>
				</div> <!-- .dc-input -->

				<div class="dc-input">
					<label>Vimeo Video ID</label>
					<input type="text" name="xt_clone[x][kenburn-panel-vimeoid]" /> 
					<span class="dc-help">Type only the ID, like 25565458 - use only Vimeo or YouTube, never both.</span>
				</div> <!-- .dc-input -->

				<div class="dc-input">
					<label>Youtube Video ID</label>
					<input type="text" name="xt_clone[x][kenburn-panel-youtubeid]" /> 
					<span class="dc-help">Type only the ID, like j57IzkTFnT8 - use only Vimeo or YouTube, never both.</span>
				</div> <!-- .dc-input -->

				<div class="dc-input">
					<label>Video Title</label>
					<input type="text" name="xt_clone[x][kenburn-panel-videotitle]" /> 
					<span class="dc-help"></span>
				</div> <!-- .dc-input -->

				<div class="dc-input">
					<label>Video Caption</label>
					<textarea name="xt_clone[x][kenburn-panel-videocaption]"></textarea>
					<span class="dc-help"></span>
				</div> <!-- .dc-input -->

			</div> <!-- .dc-group -->
		</div> <!-- .dc-half last -->

		<div class="dc-clear"></div>


<?php include("_clone-bottom.php"); ?>