<?php

	function xt_slider_elastislide($post_id) {

		//get_post_meta($post_id, 'slider-type', true);
	
		wp_enqueue_style( 'dc-elastislide-css');
		
		wp_enqueue_script( 'dc-elastislide-js');

		$slider_mode = get_post_meta($post_id, "elastislide-slider-mode", true);
		if($slider_mode == "")
			$slider_mode = "Responsive";
			

		$slider_w = get_post_meta($post_id, "elastislide-slider-w", true);
		if($slider_w == "")
			$slider_w = "960";
			

		$slider_h = get_post_meta($post_id, "elastislide-slider-h", true);
		if($slider_h == "")
			$slider_h = "200";

		$orientation = get_post_meta($post_id, "elastislide-orientation", true);
		if($orientation == "")
			$orientation = "horizontal";

		$style = get_post_meta($post_id, "elastislide-style", true);
		if($style == "")
			$style = "shadow";
			
			if($style == 'shadow' && $orientation == "horizontal")
				$style = '1';
			if($style == 'shadow' && $orientation == "vertical")
				$style = '2';

			if($style == 'dark' && $orientation == "horizontal")
				$style = '3';
			if($style == 'dark' && $orientation == "vertical")
				$style = '4';

			if($style == 'simple' && $orientation == "horizontal")
				$style = '5';
			if($style == 'simple' && $orientation == "vertical")
				$style = '6';

			if($style == 'minimalist' && $orientation == "horizontal")
				$style = '7';
			if($style == 'minimalist' && $orientation == "vertical")
				$style = '8';

		$speed = get_post_meta($post_id, "elastislide-speed", true);
		if($speed == "")
			$speed = "500";
			

		$minitems = get_post_meta($post_id, "elastislide-minitems", true);
		if($minitems == "")
			$minitems = "3";
		
		$id = rand(0, 1000);
		
		ob_start();
		?>

		<?php 

		$slides = get_post_meta($post_id, "xt_slide", true);

		$slides = maybe_unserialize($slides);

		?>

		<?php 

		$i = 0;

		if(count($slides) > 0 && $slides != '') :

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

			<div class="<?php echo $class; ?>" style="<?php echo $sliderStyle; ?> position:relative;"> 
				<div class="dc-elasticslide dc-elastislide-style<?php echo $style; ?>">
						<ul id="carousel_<?php echo $id; ?>" class="elastislide-list">
							<?php foreach($slides as $slide) {

								$s = $slide["slide_image"];

								$_link = $slide["elastislide-link"];
						  		$_target = $slide["elastislide-target"];
						
						  		$aBegin = '';
						  		$aEnd = '';

						  		if($_link != '') {

						  			$aBegin = '<a href="'.$_link.'" target="'.$_target.'">';
						  			$aEnd = '</a>';
						  		}
						  		else {
						  			$aBegin = '<span>';
						  			$aEnd = '</span>';
						  		}

							?>

							<li>
								<?php echo $aBegin; ?>
									<img src="<?php echo $s; ?>" alt=" " />
								<?php echo $aEnd; ?>
							</li>

							<?php 
								$i++;
							} ?>
						</ul>

				</div>
			</div>
				
			<script type="text/javascript">	
				jQuery(document).ready(function() {
					jQuery( '#carousel_<?php echo $id; ?>' ).elastislide({
						orientation: "<?php echo $orientation; ?>",
						speed: <?php echo $speed; ?>,
						minItems: <?php echo $minitems; ?>
					});
				});
			</script>
		
		<?php endif; ?>

		<?php

		$output = ob_get_contents();

		ob_end_clean();

		return $output;

	}