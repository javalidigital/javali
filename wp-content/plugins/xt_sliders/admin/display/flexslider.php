<?php

	function xt_slider_flexslider($post_id) {

		
		wp_enqueue_style("dc-flexslider-css");

		wp_enqueue_script("dc-flexslider-js");
		
		$slider_mode = get_post_meta($post_id, "flexslider-slider-mode", true);
		if($slider_mode == "")
			$slider_mode = "Responsive";
			

		$slider_w = get_post_meta($post_id, "flexslider-slider-w", true);
		if($slider_w == "")
			$slider_w = "960";
			

		$slider_h = get_post_meta($post_id, "flexslider-slider-h", true);
		if($slider_h == "")
			$slider_h = "350";

		$animation = get_post_meta($post_id, "flexslider-animation", true);
		if($animation == "")
			$animation = "fade";
			

		$direction = get_post_meta($post_id, "flexslider-direction", true);
		if($direction == "")
			$direction = "horizontal";
			

		$smoothheight = get_post_meta($post_id, "flexslider-smoothheight", true);
		if($smoothheight == "")
			$smoothheight = "true";
			

		$slideshow = get_post_meta($post_id, "flexslider-slideshow", true);
		if($slideshow == "")
			$slideshow = "true";
			

		$slideshowspeed = get_post_meta($post_id, "flexslider-slideshowspeed", true);
		if($slideshowspeed == "")
			$slideshowspeed = "7000";
			

		$animationspeed = get_post_meta($post_id, "flexslider-animationspeed", true);
		if($animationspeed == "")
			$animationspeed = "600";
			

		$pauseonhover = get_post_meta($post_id, "flexslider-pauseonhover", true);
		if($pauseonhover == "")
			$pauseonhover = "false";
			

		$controlnav = get_post_meta($post_id, "flexslider-controlnav", true);
		if($controlnav == "")
			$controlnav = "true";
			

		$directionnav = get_post_meta($post_id, "flexslider-directionnav", true);
		if($directionnav == "")
			$directionnav = "true";

		$id = rand(0, 1000);

		ob_start();

		?>

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

		<?php 

		$slides = get_post_meta($post_id, "xt_slide", true);

		$slides = maybe_unserialize($slides);

		?>

		<?php 

		$i = 0;

		if(count($slides) > 0 && $slides != '') :

		?>
				 
		<div class="<?php echo $class; ?>" style="<?php echo $sliderStyle; ?> position:relative;">
			<div class="flexslider" id="flexslider_<?php echo $id; ?>">
				<ul class="slides">
					<?php foreach($slides as $slide) {

						$s = $slide["slide_image"];
						$_link = $slide["flexslider-link"];
					  	$_target = $slide["flexslider-target"];

					  	$_caption = $slide["flexslider-caption"];
					  	$_captionpos = $slide["flexslider-captionpos"];

					  	$enablevideo = @$slide["flexslider-enablevideo"];
						if($enablevideo == 'on')
							$enablevideo = true;
						else
							$enablevideo = false;

						$videoframe = '';

						if($enablevideo) {

							$iframe_v = '';

							$vimeoid = $slide["flexslider-vimeoid"];
							if($vimeoid != '')
								$iframe_v = '
								<div class="dc-videowrapper">
								<iframe src="http://player.vimeo.com/video/'.$vimeoid.'?title=0&amp;byline=0&amp;portrait=0" width="100%"></iframe>
								</div>';

				            $ytid = $slide["flexslider-youtubeid"];
							if($ytid != '')
								$iframe_v = '
								<div class="dc-videowrapper">
								<iframe src="http://www.youtube.com/embed/'.$ytid.'?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0" width="100%"></iframe>
								</div>';

							$videoframe = $iframe_v;
						}

					  	$aBegin = '';
					  	$aEnd = '';

					  	if($_link != '') {
					  		$aBegin = '<a href="'.$_link.'" target="'.$_target.'">';
					  		$aEnd = '</a>';
					  	}
					?>
					<li>
						<?php if($enablevideo != 'on') : ?>
							<?php echo $aBegin; ?>
							<img src="<?php echo $s; ?>" />
							<?php echo $aEnd; ?>
						<?php else : ?>

						<?php echo $videoframe; ?>

						<?php endif; ?>

						<?php if($_caption != '') : ?>

							<div class="flex-caption flex-caption-<?php echo $_captionpos; ?>">
								<?php echo nl2br( do_shortcode( stripslashes($_caption) ) ); ?>
							</div>

						<?php endif; ?>

					</li>

					<?php
						$i++;
					} // end foreach
					?>
				</ul>
			</div>
		</div>
				   
			<script type="text/javascript">
			// <![CDATA[
			jQuery(window).load(function(){

				jQuery('#flexslider_<?php echo $id; ?>').flexslider({
					animation: "<?php echo $animation; ?>",
					direction: "<?php echo $direction; ?>",
					smoothHeight: <?php echo $smoothheight; ?>,
					slideshow: <?php echo $slideshow; ?>,
					slideshowSpeed: <?php echo $slideshowspeed; ?>,
					animationSpeed: <?php echo $animationspeed; ?>,
					pauseOnHover: <?php echo $pauseonhover; ?>,
					controlNav: <?php echo $controlnav; ?>,
					directionNav: <?php echo $directionnav; ?>
				});

			});
			// ]]>
			</script>

		<?php endif; ?>

		<?php

		$output = ob_get_contents();

		ob_end_clean();

		return $output;

	}