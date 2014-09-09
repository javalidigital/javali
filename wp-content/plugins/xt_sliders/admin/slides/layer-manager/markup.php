<?php

	wp_enqueue_style("dc-captions-css-admin");
	wp_enqueue_style("dc-settings-css-admin");
	wp_enqueue_style("dc-layer-manager-style");

	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('jquery-ui-widget');
	wp_enqueue_script('jquery-ui-mouse');
	wp_enqueue_script('jquery-ui-draggable');
	wp_enqueue_script('jquery-ui-sortable');
	wp_enqueue_script('layer-manager-js');



	$slider_wl = isset( $values["revolution-slider-w"] ) ? esc_attr( $values["revolution-slider-w"][0] ) : "960";
	$slider_hl = isset( $values["revolution-slider-h"] ) ? esc_attr( $values["revolution-slider-h"][0] ) : "490";
?>

<div class="layer-manager-modal">

	<a class="layer-manager-close" href="#">
		<span class="media-modal-icon"></span>
	</a>

	<div class="layer-manager-content">

		<div class="header-title">
			
			<div class="layer-controls">
				<a href="#" class="layer-button" id="delete-layer">Delete Layer</a>
				<a href="#" class="layer-button" id="add-layer">Add Text Layer</a>
				<a href="#" class="layer-button" id="add-image-layer">Add Image Layer</a>
				<a href="#" class="layer-button" id="add-video-layer">Add Video Layer</a>
			</div>	

			<h1>Layer Manager</h1>

		</div>

		<div class="layer-manager-display">
			
			<div class="layers-inner">

				<div class="layer-slide-area" style="width: <?php echo $slider_wl; ?>px; 
						height: <?php echo $slider_hl; ?>px;">
					<div class="slide-area" style="width: <?php echo $slider_wl; ?>px; 
						height: <?php echo $slider_hl; ?>px;">
					</div>

					<div id="lm-guide-left"></div>
					<div id="lm-guide-right"></div>
					<div id="lm-guide-top"></div>
					<div id="lm-guide-bottom"></div>
				</div> <!-- .layer-slide-area -->

				<div class="dc-twothird">
					<div id="layer-params" class="param-box">
						<div class="title-area">Layer Parameters</div>

						<div class="param-box-content">

							<div id="layer-fields" class="">

								<div class="dc-half">

									<!--
									<div class="dc-input">
										<label>Layer Type</label>
										<span class="dc-radio"><input type="radio" name="lm-types" value="text" />Text</span> 
										<span class="dc-radio"><input type="radio" name="lm-types" value="image" />Image</span>
										<span class="dc-radio"><input type="radio" name="lm-types" value="video" />Video</span> 
									</div>
									-->

									<input type="hidden" id="lm-type" />

									<div class="dc-input hidetext">
										<label>Text</label>
										<input type="text" name="lm-text" id="lm-text" /> 
										<span class="dc-help">If in a image or video layer, will only be the title.</span>
									</div> <!-- .dc-input -->

									<div class="dc-input hideimage hidevideo">
										<label>Text/HTML</label>
										<textarea name="lm-caption" id="lm-caption"></textarea>
										<span class="dc-help">Supports HTML Tags</span>
									</div> <!-- .dc-input -->

									<div class="dc-input">
										<label>Layer Style</label>
										<select name="lm-style" id="lm-style">
											<option value="">None</option>
											<option value="default-heading">Default Header</option>
											<option value="subheader-gray">Gray Color Header</option>
											<option value="paragraph">Paragraph</option>
											<option value="opacity-dark">Opacity Bg Header</option>
											<option value="very-big">Very Big Header</option>
											<option value="very-big-dark">Very Big Header Dark</option>
											<!--
											<option value="big_white">big_white</option>
											<option value="big_orange">big_orange</option>
											<option value="big_black">big_black</option>
											<option value="medium_grey">medium_grey</option>
											<option value="small_text">small_text</option>
											<option value="medium_text">medium_text</option>
											<option value="large_text">large_text</option>
											<option value="very_large_text">very_large_text</option>
											<option value="very_big_white">very_big_white</option>
											<option value="very_big_black">very_big_black</option>
											<option value="boxshadow">boxshadow</option>
											<option value="black">black</option>
											<option value="noshadow">noshadow</option>
											-->
										</select>
										<span class="dc-help">Optional to video and image layers.</span>
									</div> <!-- .dc-input -->

									<div class="dc-half">

										<div class="dc-input">
											<label>Animation</label>
											<select name="lm-anim" id="lm-anim">
												<option value="fade">Fade</option>
												<option value="sft">Short from Top</option>
												<option value="sfb">Short from Bottom</option>
												<option value="sfr">Short from Right</option>
												<option value="sfl">Short from Left</option>
												<option value="lft">Long from Top</option>
												<option value="lfb">Long from Bottom</option>
												<option value="lfr">Long from Right</option>
												<option value="lfl">Long from Left</option>
												<option value="randomrotate">Random Rotate</option>
											</select>
										</div> <!-- .dc-input -->

									</div>

									<div class="dc-half last">

										<div class="dc-input">
											<label>Easing</label>
											<select name="lm-easing" id="lm-easing">
												<option value="easeOutBack">easeOutBack</option>
												<option value="easeInQuad">easeInQuad</option>
												<option value="easeOutQuad">easeOutQuad</option>
												<option value="easeInOutQuad">easeInOutQuad</option>
												<option value="easeInCubic">easeInCubic</option>
												<option value="easeOutCubic">easeOutCubic</option>
												<option value="easeInOutCubic">easeInOutCubic</option>
												<option value="easeInQuart">easeInQuart</option>
												<option value="easeOutQuart">easeOutQuart</option>
												<option value="easeInOutQuart">easeInOutQuart</option>
												<option value="easeInQuint">easeInQuint</option>
												<option value="easeOutQuint">easeOutQuint</option>
												<option value="easeInOutQuint">easeInOutQuint</option>
												<option value="easeInSine">easeInSine</option>
												<option value="easeOutSine">easeOutSine</option>
												<option value="easeInOutSine">easeInOutSine</option>
												<option value="easeInExpo">easeInExpo</option>
												<option value="easeOutExpo">easeOutExpo</option>
												<option value="easeInOutExpo">easeInOutExpo</option>
												<option value="easeInCirc">easeInCirc</option>
												<option value="easeOutCirc">easeOutCirc</option>
												<option value="easeInOutCirc">easeInOutCirc</option>
												<option value="easeInElastic">easeInElastic</option>
												<option value="easeOutElastic">easeOutElastic</option>
												<option value="easeInOutElastic">easeInOutElastic</option>
												<option value="easeInBack">easeInBack</option>
												<option value="easeInOutBack">easeInOutBack</option>
												<option value="easeInBounce">easeInBounce</option>
												<option value="easeOutBounce">easeOutBounce</option>
												<option value="easeInOutBounce">easeInOutBounce</option>
											</select>
										</div> <!-- .dc-input -->
									</div> <!-- .dc-half -->
									<div class="dc-clear"></div>

									<div class="dc-half">

										<div class="dc-input">
											<label>Speed</label>
											<input type="text" name="lm-speed" id="lm-speed" value="" /> 
											<span class="dc-help">Animation Velocity.</span>
										</div> <!-- .dc-input -->

									</div> <!-- .dc-half -->

									<div class="dc-half last">

										<div class="dc-input">
											<label>Delay</label>
											<input type="text" name="lm-delay" id="lm-delay" value="" /> 
											<span class="dc-help">Time that must pass before this caption/layer be showed at screen.</span>
										</div> <!-- .dc-input -->

									</div> <!-- .dc-half last -->
									<div class="dc-clear"></div>


								</div> <!-- .dc-half -->

								<div class="dc-half last">

									<div class="dc-input hidetext hidevideo">
										<div class="wpts-row preview-row">
											<label>Slide Image</label>
											<input type="text" class="dc-upload-admin-input" name="lm-image" id="lm-image" /> 
											<input class="dc-upload-admin" type="button" value="Upload" />
											<div class="dc-clear"></div>
										</div>
										<div class="dc-clear"></div>
										<span class="dc-help">The image to this image layer</span>
									</div>

									<div class="dc-half hidetext hidevideo">

										<div class="dc-input hidetext hidevideo">
											<label>Link</label>
											<input type="text" name="lm-link" id="lm-link" value="" /> 
											<span class="dc-help">Layer Link ex.: #</span>
										</div> <!-- .dc-input -->

									</div> <!-- .dc-half -->

									<div class="dc-half last hidetext hidevideo">

										<div class="dc-input hidetext hidevideo">
											<label>Link Target</label>
											<select name="lm-target" id="lm-target">
												<option value="_self">Same Window</option>
												<option value="_blank">New Window</option>
											</select>
										</div> <!-- .dc-input -->

									</div> <!-- .dc-half last -->
									<div class="dc-clear hidetext hidevideo"></div>

									
									<div class="dc-half hideimage hidetext">

										<div class="dc-input hideimage hidetext">
											<label>Vimeo ID</label>
											<input type="text" name="lm-vimeo" id="lm-vimeo" value="" /> 
											<span class="dc-help">Vimeo ID, ex.: 30300114 (Use only Vimeo OR Youtube, never both)</span>
										</div> <!-- .dc-input -->

									</div> <!-- .dc-half -->

									<div class="dc-half last hideimage hidetext">

										<div class="dc-input hideimage hidetext">
											<label>Youtube ID</label>
											<input type="text" name="lm-yt" id="lm-yt" value="" /> 
											<span class="dc-help">Youtube ID, ex.: QohUdrgbD2k (Use only Vimeo OR Youtube, never both)</span>
										</div> <!-- .dc-input -->

									</div> <!-- .dc-half last -->
									<div class="dc-clear hideimage hidetext"></div>

									<div class="dc-half hideimage hidetext">

										<div class="dc-input hideimage hidetext">
											<label>Video Width</label>
											<input type="text" name="lm-videow" id="lm-videow" value="" /> 
										</div> <!-- .dc-input -->

									</div> <!-- .dc-half -->

									<div class="dc-half last hideimage hidetext">

										<div class="dc-input hideimage hidetext">
											<label>Video Height</label>
											<input type="text" name="lm-videoh" id="lm-videoh" value="" /> 
										</div> <!-- .dc-input -->

									</div> <!-- .dc-half last -->
									<div class="dc-clear hideimage hidetext"></div>

									<div class="dc-half">

										<div class="dc-input">
											<label>X</label>
											<input type="text" name="lm-x" id="lm-x" value="" /> 
										</div> <!-- .dc-input -->

									</div> <!-- .dc-half -->

									<div class="dc-half last">

										<div class="dc-input">
											<label>Y</label>
											<input type="text" name="lm-y" id="lm-y" value="" /> 
										</div> <!-- .dc-input -->

									</div> <!-- .dc-half last -->
									<div class="dc-clear"></div>
									
								</div> <!-- main second column -->

								<div class="dc-clear"></div>

							</div> <!-- #layer-fields -->

							<div class="layer-error">Select or create a new layer first.</div> <!-- .layer-error -->

						</div> <!-- .param-box-content -->
					</div> <!-- .#layer-params -->
				</div> <!-- .dc-half -->

				<div class="dc-third last">
					<div id="layers-list-box" class="param-box">
						<div class="title-area">Layers</div>

						<div class="param-box-content">

							<div id="layers-list">

							</div> <!-- #layers-list -->

							<div class="layer-error">Create a new layer first.</div> <!-- .layer-error -->

							</div> <!-- #layer-fields -->

						</div> <!-- .param-box-content -->

					</div> <!-- .#layer-params -->
				</div> <!-- .dc-half -->

				<div class="dc-clear"></div>

				<div class="layer-clones">

					<div class="layer-list-clone">
						<div class="layer-link">
							<a href="#" id="l-0" rel="0">
								<span>Title Here</span>
							</a>
							<input type="text" id="delay-0" value="3000" />
							<input type="hidden" id="data-layer" value="" />
						</div>
					</div>

				</div>

			</div> <!-- .layers-inner -->

		<div class="save-layer-controls">
			<div class="save-btn">
				<input type="hidden" id="data-from-layer" />
				<a href="#" class="layer-button" id="save-layer-settings">Save Layer Settings</a>
			</div>
		</div> <!-- .save-layer-controls -->

	</div> <!-- .layer-manager-content -->

</div> <!-- .layer-manager-modal -->