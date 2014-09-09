<?php

	function xt_slider_nivo($post_id) {

		//get_post_meta($post_id, 'slider-type', true);

		wp_enqueue_script("dc-nivo-slider-js");
		wp_enqueue_style("dc-nivo-default-theme");
		wp_enqueue_style("dc-nivo-slider");

		$slider_mode = get_post_meta($post_id, "nivo-slider-mode", true);
		if($slider_mode == "")
			$slider_mode = "Responsive";
			

		$slider_w = get_post_meta($post_id, "nivo-slider-w", true);
		if($slider_w == "")
			$slider_w = "960";
			

		$slider_h = get_post_meta($post_id, "nivo-slider-h", true);
		if($slider_h == "")
			$slider_h = "50%";
			

		$effect = get_post_meta($post_id, "nivo-effect", true);
		if($effect == "")
			$effect = "random";
			

		$anim_speed = get_post_meta($post_id, "nivo-anim-speed", true);
		if($anim_speed == "")
			$anim_speed = "500";
			

		$pause_time = get_post_meta($post_id, "nivo-pause-time", true);
		if($pause_time == "")
			$pause_time = "3000";
			

		$direction_nav = get_post_meta($post_id, "nivo-direction-nav", true);
		if($direction_nav == "yes")
			$direction_nav = "true";
		else
			$direction_nav = "false";
			

		$direction_nav_hide = get_post_meta($post_id, "nivo-direction-nav-hide", true);
		if($direction_nav_hide == "yes")
			$direction_nav_hide = "true";
		else
			$direction_nav_hide = "false";
			

		$control_nav = get_post_meta($post_id, "nivo-control-nav", true);
		if($control_nav == "yes")
			$control_nav = "true";
		else
			$control_nav = "false";
			

		$control_nav_thumbs = get_post_meta($post_id, "nivo-control-nav-thumbs", true);
		if($control_nav_thumbs == "yes")
			$control_nav_thumbs = "true";
		else
			$control_nav_thumbs = "false";

		$id = rand(0, 1000);

		ob_start();
		?>

		<script type="text/javascript">
			// <![CDATA[
				
				jQuery(window).load(function() {
					jQuery('#slider<?php echo $id; ?>').nivoSlider({
						effect: '<?php echo $effect; ?>', // Effects available: 'random,fold,fade,boxRandom,sliceDown,sliceDownLeft,sliceUp,sliceUpLeft,sliceUpDown,sliceUpDownLeft,slideInRight,slideInLeft,boxRain,boxRainReverse,boxRainGrow,boxRainGrowReverse'
						slices: 15, // For slice animations
						boxCols: 8, // For box animations
						boxRows: 4, // For box animations
						animSpeed: <?php echo $anim_speed; ?>, // Slide transition speed
						pauseTime: <?php echo $pause_time; ?>, // How long each slide will show before next slide (3000 = 3 seconds)
						startSlide: 0, // Set starting Slide (0 index)
						directionNav: <?php echo $direction_nav; ?>, // Next & Prev navigation
						directionNavHide: <?php echo $direction_nav_hide; ?>, // Only show on hover
						controlNav: <?php echo $control_nav; ?>, // 1,2,3... navigation
						controlNavThumbs: <?php echo $control_nav_thumbs; ?>, // Use thumbnails for Control Nav
						controlNavThumbsFromRel:true, // Generates the thumbnail url from the “rel” attribute in your image tags
						pauseOnHover: true, // Stop animation while hovering
						manualAdvance: false, // Force manual transitions
						prevText: '<', // Prev directionNav text
						nextText: '>', // Next directionNav text
						randomStart: false, // Start on a random slide
						beforeChange: function(){}, // Triggers before a slide transition
						afterChange: function(){}, // Triggers after a slide transition
						slideshowEnd: function(){}, // Triggers after all slides have been shown
						lastSlide: function(){}, // Triggers when last slide is shown
						afterLoad: function(){} // Triggers when slider has loaded
					});
				});

			// ]]>
		</script>

		<?php
			$sliderStyle = '';
			$class = '';

			if($slider_mode == "Fixed") {
				$sliderStyle = 'width: '.$slider_w.'px; ';
				$class = 'dc-slider dc-fixed';
			}
			else if($slider_mode == "Responsive") {
				$sliderStyle = 'width: 100%; margin:0 auto; padding:0;';
				$class = 'dc-slider dc-responsive';
			}
			else if($slider_mode == "Full Width") {
				$sliderStyle = 'width: 100%; margin:0; padding:0;';
				$class = 'dc-slider dc-fullwidth';
			}
		?>

		<?php 

		$slides = get_post_meta($post_id, "xt_slide", true);

		$slides = maybe_unserialize($slides);

		?>

		<?php 

		$i = 0;

		if(count($slides) > 0 && $slides != '') :

			$slidesHtml = '';
			$slidesCaps = '';
		?>

		<div class="<?php echo $class; ?>" style="<?php echo $sliderStyle; ?> position:relative;"> <!-- define slider container width (strict enforce) -->
			<div class="slider-wrapper theme-default">

				<?php foreach($slides as $slide) {


					$s = $slide["slide_image"];
					$c = $slide["caption"];
					$t = $slide["thumb"];

					$titleTag = '';

					if($c != '') {
						$titleTag = ' title="#htmlcaption'.$i.'"';
						$slidesCaps .= '<div id="htmlcaption'.$i.'" class="nivo-html-caption">'.stripslashes($c).'</div>';
					}

					$rel = '';

					if($control_nav_thumbs == "true" AND $t != '')
						$rel = ' data-thumb="'.$t.'"';

					$slidesHtml .= '<img src="'.$s.'"'.$titleTag.$rel.' />';

					$i++; 

				 } ?>

				<div id="slider<?php echo $id; ?>" class="nivoSlider" style="height: <?php echo $slider_h; ?>;">
			    	
						<?php echo $slidesHtml; ?>
			    	
					</div> <!-- /slider -->
			    
						<?php echo $slidesCaps; ?>
		    
			</div> <!-- /slider-wrapper -->
		</div>

		<?php endif; ?>

		<?php

		$output = ob_get_contents();

		ob_end_clean();

		return $output;

	}