<?php
	
	function xt_slider_ios($post_id) {

		//get_post_meta($post_id, 'slider-type', true);
				
		wp_enqueue_style("dc-ios-css");
		
		wp_enqueue_script("dc-jquery-easing");
		wp_enqueue_script("dc-ios-js");

		$slider_mode = get_post_meta($post_id, "ios-slider-mode", true);
		if($slider_mode == "")
			$slider_mode = "Responsive";
			

		$slider_w = get_post_meta($post_id, "ios-slider-w", true);
		if($slider_w == "")
			$slider_w = "960";
			

		$slider_h = get_post_meta($post_id, "ios-slider-h", true);
		if($slider_h == "")
			$slider_h = "350";

		$scrollbar = get_post_meta($post_id, "ios-scrollbar", true);
		if($scrollbar == "")
			$scrollbar = "false";

		$keyboardcontrols = get_post_meta($post_id, "ios-keyboardcontrols", true);
		if($keyboardcontrols == "")
			$keyboardcontrols = "true";
			

		$autoslide = get_post_meta($post_id, "ios-autoslide", true);
		if($autoslide == "")
			$autoslide = "false";
			

		$desktopclickdrag = get_post_meta($post_id, "ios-desktopclickdrag", true);
		if($desktopclickdrag == "")
			$desktopclickdrag = "true";
			

		$infinitslider = get_post_meta($post_id, "ios-infinitslider", true);
		if($infinitslider == "")
			$infinitslider = "false";
			
		$id = rand(0, 1000);

		ob_start();
		?>
			
			<script type="text/javascript">
			// <![CDATA[
				jQuery(document).ready(function() {
					
					jQuery('#iosSlider_<?php echo $id; ?>').iosSlider({
						desktopClickDrag: true,
						snapToChildren: true,
						navSlideSelector: '#iossliderContainer_<?php echo $id; ?> .slideSelectors .item',
						onSlideComplete: ios_<?php echo $id; ?>_slideComplete,
						onSliderLoaded: ios_<?php echo $id; ?>_sliderLoaded,
						onSlideChange: ios_<?php echo $id; ?>_slideChange,
						autoSlide: <?php echo $autoslide; ?>, // auto slide on load
						scrollbar: <?php echo $scrollbar; ?>, // show thin scrollbars
						scrollbarContainer: '#iossliderContainer_<?php echo $id; ?> .scrollbarContainer',
						scrollbarMargin: '0',
						scrollbarBorderRadius: '0',
						keyboardControls: <?php echo $keyboardcontrols; ?>,
						infiniteSlider: <?php echo $infinitslider; ?>,
						desktopClickDrag: <?php echo $desktopclickdrag; ?>
					});
					
				});
				
				function ios_<?php echo $id; ?>_slideChange(args) {
				
					jQuery('#iossliderContainer_<?php echo $id; ?> .slideSelectors .item').removeClass('selected');
					jQuery('#iossliderContainer_<?php echo $id; ?> .slideSelectors .item:eq(' + args.currentSlideNumber + ')').addClass('selected');
				
				}
				
				function ios_<?php echo $id; ?>_slideComplete(args) {
						
					jQuery(args.sliderObject).find('.text1, .text2').attr('style', '');
					jQuery(args.currentSlideObject).find('.text1').animate({
						right: '150px',
						opacity: '0.8'
					}, 400, 'easeOutQuint');
					jQuery(args.currentSlideObject).find('.text2').delay(200).animate({
						right: '100px',
						opacity: '0.8'
					}, 400, 'easeOutQuint');
				}
				
				function ios_<?php echo $id; ?>_sliderLoaded(args) {
					ios_<?php echo $id; ?>_slideComplete(args);
					ios_<?php echo $id; ?>_slideChange(args);
				}
			// ]]>
			</script>
			
			<?php 

			$slides = get_post_meta($post_id, "xt_slide", true);

			$slides = maybe_unserialize($slides);

			?>

			<?php 

			$i = 0;

			if(count($slides) > 0 && $slides != '') :

			?>

			<style type="text/css">
			<?php foreach($slides as $slide) { 

				$s = $slide["slide_image"];

				?>

				#iosSlider_<?php echo $id; ?> .slider .item<?php echo $i; ?> .inner { background-image: url(<?php echo $s; ?>); }
				
			<?php 
				$i++;
			} ?>
			</style>


			<?php
				$sliderStyle = '';
				$class = '';

				if($slider_mode == "Fixed") {
					$sliderStyle = 'width: '.$slider_w.'px; height: '.$slider_h.'px;';
					$class = 'dc-slider dc-fixed';
				}
				else if($slider_mode == "Responsive") {
					$sliderStyle = 'width: 100%; margin:0 auto; padding:0; ';
					$class = 'dc-slider dc-responsive';
				}
				else if($slider_mode == "Full Width") {
					$sliderStyle = 'width: 100%; margin:0; padding:0; ';
					$class = 'dc-slider dc-fullwidth';
				}
			?>

			<div class="<?php echo $class; ?>" style="<?php echo $sliderStyle; ?> position:relative;"> <!-- define slider container width (strict enforce) -->
			<div class="fluidHeight">
				<div class="iossliderContainer" id="iossliderContainer_<?php echo $id; ?>">
					<div class="iosSlider" id="iosSlider_<?php echo $id; ?>">
						<div class="slider">

							<?php 

							$i = 0;

							foreach($slides as $slide) {

									$_title = $slide["ios-header-big"];
									$_caption = $slide["ios-header-bottom"];
								?>

								<div class="item item<?php echo $i; ?>">
									<div class="inner">
										<div class="selectorShadow"></div>
										<?php if($_title != '') : ?>
											<div class="text1"><span><?php echo stripslashes($_title); ?></span></div>
										<?php endif; ?>

										<?php if($_caption != '') : ?>
											<div class="text2"><span><?php echo nl2br(stripslashes($_caption)); ?></span></div>
										<?php endif; ?>
									</div>
								</div>

							<?php 
								$i++;
							} ?>
						
						</div>
					</div> <!-- /iosSlider -->
					
					<!-- bullet selectors -->
					<div class="slideSelectors" style="<?php echo $sliderStyle; ?> position:relative;">

						<?php 

							$i = 0;

							foreach($slides as $slide) {

								if($i != 0)
									echo '<div class="item"></div>';
								else
									echo '<div class="item selected"></div>';
							}

						?>

					</div>
					
					<!-- horizontal scrollbars -->
					<div class="scrollbarContainer" style="<?php echo $sliderStyle; ?> position:relative;"></div>
					
				</div> <!-- /iossliderContainer -->
			</div> <!-- /fluidHeight -->
			</div>
			<!-- DC iOS Slider End -->
			<div class="xt_clear"></div> <!-- line break/clear line -->

		<?php endif; ?>

		<?php

		$output = ob_get_contents();

		ob_end_clean();

		return $output;

	}