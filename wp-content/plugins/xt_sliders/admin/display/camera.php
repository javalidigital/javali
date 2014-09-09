<?php

	function xt_slider_camera($post_id) {

		wp_enqueue_style("dc-camera-slider-css");

		//wp_enqueue_script("dc-mobile-customized-js");
		wp_enqueue_script("dc-jquery-easing");
		wp_enqueue_script("dc-camera-js");

		$slider_mode = get_post_meta($post_id, "camera-slider-mode", true);
		if($slider_mode == "")
			$slider_mode = "Responsive";
			

		$slider_w = get_post_meta($post_id, "camera-slider-w", true);
		if($slider_w == "")
			$slider_w = "960";
			

		$slider_h = get_post_meta($post_id, "camera-slider-h", true);
		if($slider_h == "")
			$slider_h = "350";

		$scheme = get_post_meta($post_id, "camera-scheme", true);
		if($scheme == "")
			$scheme = "amber";

		$auto_advance = get_post_meta($post_id, "camera-auto-advance", true);
		if($auto_advance == "")
			$auto_advance = "yes";
			

		$bar_position = get_post_meta($post_id, "camera-bar-position", true);
		if($bar_position == "")
			$bar_position = "bottom";
			

		$fx = get_post_meta($post_id, "camera-fx", true);
		if($fx == "")
			$fx = "random";
			

		$pause_onhover = get_post_meta($post_id, "camera-pause-onhover", true);
		if($pause_onhover == "")
			$pause_onhover = "yes";
			

		$loader = get_post_meta($post_id, "camera-loader", true);
		if($loader == "")
			$loader = "pie";
			

		$navigation = get_post_meta($post_id, "camera-navigation", true);
		if($navigation == "")
			$navigation = "yes";
			

		$pagination = get_post_meta($post_id, "camera-pagination", true);
		if($pagination == "")
			$pagination = "yes";
			

		$pie_position = get_post_meta($post_id, "camera-pie-position", true);
		if($pie_position == "")
			$pie_position = "rightTop";
			

		$portrait = get_post_meta($post_id, "camera-portrait", true);
		if($portrait == "")
			$portrait = "no";
			

		$thumbnails = get_post_meta($post_id, "camera-thumbnails", true);
		if($thumbnails == "")
			$thumbnails = "no";
			

		$time = get_post_meta($post_id, "camera-time", true);
		if($time == "")
			$time = "7000";


		$id = rand(0, 1000);

		ob_start();

		?>

		<script type="text/javascript">
			// <![CDATA[
			jQuery(document).ready(function(){
				
				jQuery('#camera_wrap_<?php echo $id; ?>').camera({
					height: '<?php echo $slider_h; ?>',
					autoAdvance: <?php echo xt_bool($auto_advance); ?>,
					barPosition: '<?php echo $bar_position; ?>',
					fx: '<?php echo $fx; ?>',
					hover: <?php echo xt_bool($pause_onhover); ?>,
					loader: '<?php echo $loader; ?>',
					navigation: <?php echo xt_bool($navigation); ?>,
					pagination: <?php echo xt_bool($pagination); ?>,
					piePosition: '<?php echo $pie_position; ?>',
					portrait: <?php echo xt_bool($portrait); ?>,
					thumbnails: <?php echo xt_bool($thumbnails); ?>,
					time: <?php echo $time; ?>

				});
			});
			// ]]>
		</script>

		<?php

			$sliderStyle = '';
			$class = '';

			if($slider_mode == "Fixed") {
				$sliderStyle = 'width: '.$slider_w.'px; height: '.$slider_h.';';
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

		<?php 

		$slides = get_post_meta($post_id, "xt_slide", true);

		$slides = maybe_unserialize($slides);

		?>

		<?php 

		$i = 0;

		if(count($slides) > 0 && $slides != '') :
		?>

		<div class="<?php echo $class; ?>" style="<?php echo $sliderStyle; ?> position:relative;">
			<div class="camera_wrap camera_<?php echo $scheme; ?>_skin" id="camera_wrap_<?php echo $id; ?>">
		    
		    <?php foreach($slides as $slide) { 

		    	$img = $slide["slide_image"];

		    	$caption = $slide["camera-caption"];
		    	if($caption != '')
		    		$caption = '<div class="camera_caption">'.$caption.'</div>';

		    	$video = $slide["camera-video"];

		    	$href = $slide["camera-href"];
		    	if($href != '')
		    		$href = ' data-link="'.$href.'"';

		    	$target = $slide["camera-target"];
		    	if($target != '')
		    		$target = ' data-target="'.$target.'"';

		    	$fx = $slide["camera-fx"];
		    	if($fx != '')
		    		$fx = ' data-fx="'.$fx.'"';

		    	$portrait = @$slide["camera-portrait"];
		    	if($portrait != '')
		    		$portrait = ' data-portrait="'.xt_bool($portrait).'"';

		    	$thumb = $slide["camera-thumb"];
		    	if($thumb != '')
		    		$thumb = ' data-thumb="'.$thumb.'"';

		    ?>
		    	<div data-src="<?php echo $img; ?>"<?php echo $href.$target.$fx.$portrait.$thumb; ?>>
		    		<?php echo stripslashes($caption); ?>
		    		<?php echo stripslashes($video); ?>
		    	</div>

		    <?php
		    	$i++;
			} 
			?>

			</div>
		</div>

		<div class="xt_clear"></div>

		<?php endif; ?>

		<?php

		$output = ob_get_contents();

		ob_end_clean();

		return $output;

	}