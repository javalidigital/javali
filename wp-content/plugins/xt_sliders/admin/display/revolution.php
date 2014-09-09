<?php

	function xt_slider_revolution($post_id) {

		//get_post_meta($post_id, 'slider-type', true);

		/*
		wp_enqueue_style( 'dc-configs-css');
		wp_enqueue_style( 'dc-captions-css');
		wp_enqueue_style( 'dc-settings-css');
		*/
		wp_enqueue_style( 'dc-revolution-min-css');
		
		//wp_enqueue_script( 'dc-templateaccess-plugins-js');
		wp_enqueue_script( 'dc-templateaccess-revolution-js-min');

		global $slider_w, $slider_h;

		$slider_mode = get_post_meta($post_id, "revolution-slider-mode", true);
		if($slider_mode == "")
			$slider_mode = "Responsive";
			

		$slider_w = get_post_meta($post_id, "revolution-slider-w", true);
		if($slider_w == "")
			$slider_w = "960";
			

		$slider_h = get_post_meta($post_id, "revolution-slider-h", true);
		if($slider_h == "")
			$slider_h = "490";
		
		$delay = get_post_meta($post_id, "revolution-delay", true);
		if($delay == "")
			$delay = "9000";
			

		$navigationtype = get_post_meta($post_id, "revolution-navigationtype", true);
		if($navigationtype == "")
			$navigationtype = "none";
			

		$navigationarrows = get_post_meta($post_id, "revolution-navigationarrows", true);
		if($navigationarrows == "")
			$navigationarrows = "nexttobullets";
			

		$navigationstyle = get_post_meta($post_id, "revolution-navigationstyle", true);
		if($navigationstyle == "")
			$navigationstyle = "round";
			

		$touchenabled = get_post_meta($post_id, "revolution-touchenabled", true);
		if($touchenabled == "")
			$touchenabled = "on";
			

		$navoffsethorizontal = get_post_meta($post_id, "revolution-navoffsethorizontal", true);
		if($navoffsethorizontal == "")
			$navoffsethorizontal = "";
			

		$navoffsetvertical = get_post_meta($post_id, "revolution-navoffsetvertical", true);
		if($navoffsetvertical == "")
			$navoffsetvertical = "";
			

		$shadow = get_post_meta($post_id, "revolution-shadow", true);
		if($shadow == "")
			$shadow = "1";

		if($shadow == 'no shadow')
			$shadow = '0';
			

		$onhoverstop = get_post_meta($post_id, "revolution-onhoverstop", true);
		if($onhoverstop == "")
			$onhoverstop = "on";
			

		$thumbwidth = get_post_meta($post_id, "revolution-thumbwidth", true);
		if($thumbwidth == "")
			$thumbwidth = "100";
			

		$thumbheight = get_post_meta($post_id, "revolution-thumbheight", true);
		if($thumbheight == "")
			$thumbheight = "50";
			

		$thumbamount = get_post_meta($post_id, "revolution-thumbamount", true);
		if($thumbamount == "")
			$thumbamount = "5";
			

		$bgcolor = get_post_meta($post_id, "revolution-bgcolor", true);
		if($bgcolor == "")
			$bgcolor = "#bbbbbb";

		// SIZES

		$slider_w1 = get_post_meta($post_id, "revolution-slider-w1", true);
		if($slider_w1 == "")
			$slider_w1 = "748";

		$slider_w2 = get_post_meta($post_id, "revolution-slider-w2", true);
		if($slider_w2 == "")
			$slider_w2 = "460";

		$slider_w3 = get_post_meta($post_id, "revolution-slider-w3", true);
		if($slider_w3 == "")
			$slider_w3 = "300";

		$useCustomTheme = get_post_meta($post_id, "revolution-usecustomtheme", true);
		if($useCustomTheme == "")
			$useCustomTheme = "on";
		
		$id = rand(0, 1000);

		if(!function_exists("getResponsive")) :
			function getResponsive($i) {

				global $slider_w, $slider_h;

				return ((int)$i / (int)$slider_w) * (int)$slider_h;  
			}
		endif;

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

			<style type="text/css">

				#revslider-<?php echo $id; ?> {
					background-color: <?php echo $bgcolor; ?>;
					overflow-x: hidden;
				}

				<?php if($slider_mode == "Responsive" || $slider_mode == "Fixed") : ?>

				#revwrapper-container-<?php echo $id; ?> {
					margin-left: auto;
					margin-right: auto;
					width: <?php echo $slider_w; ?>px;
					box-sizing: content-box;
					-webkit-box-sizing: content-box;
				}

				#revslider-<?php echo $id; ?> {
					width: <?php echo $slider_w; ?>px;
					height: <?php echo $slider_h; ?>px;
					max-height: <?php echo $slider_h; ?>px;
				}

				#revwrapper-<?php echo $id; ?> {
					width: <?php echo $slider_w; ?>px;
					height: <?php echo $slider_h; ?>px;
					max-height: <?php echo $slider_h; ?>px;
				}

				<?php endif; ?>

				<?php if($slider_mode == "Responsive") : ?>

				/* Tablet Portrait size to standard 960 (devices and browsers) */
				@media only screen and (min-width: 768px) and (max-width: 959px) {

					#revwrapper-container-<?php echo $id; ?> {
						width: <?php echo $slider_w1; ?>px;
					}

					#revslider-<?php echo $id; ?> {
						width: <?php echo $slider_w1; ?>px;
						height: auto;
					}

					#revwrapper-<?php echo $id; ?> {
						width: <?php echo $slider_w1; ?>px;
						height: auto;
					}	
				}

				/* Mobile Landscape Size to Tablet Portrait (devices and browsers) */
				@media only screen and (min-width: 480px) and (max-width: 767px) {

					#revwrapper-container-<?php echo $id; ?> {
						width: <?php echo $slider_w2; ?>px;
					}

					#revslider-<?php echo $id; ?> {
						width: <?php echo $slider_w2; ?>px;
						height: auto;
					}

					#revwrapper-<?php echo $id; ?> {
						width: <?php echo $slider_w2; ?>px;
						height: auto;
					}	
				}

				/* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
				@media only screen and (max-width: 479px) {

					#revwrapper-container-<?php echo $id; ?> {
						width: <?php echo $slider_w3; ?>px;
					}

					#revslider-<?php echo $id; ?> {
						width: <?php echo $slider_w3; ?>px;
						height: auto;
					}

					#revwrapper-<?php echo $id; ?> {
						width: <?php echo $slider_w3; ?>px;
						height: auto;
					}	
				}

				<?php endif; ?>

				<?php if($slider_mode == "Full Width") : ?>
				
				#revslider-<?php echo $id; ?> {
					width: 100%;
					max-height: <?php echo $slider_h; ?>px !important;
				}

				#revwrapper-<?php echo $id; ?> {
					width:100% !important;
					position:relative;
					padding:0;
					max-height:<?php echo $slider_h; ?>px !important;
				}

				<?php endif; ?>

			</style>

			<div class="rev_bannercontainer<?php if($useCustomTheme == 'on') echo ' rev_banner_custom_arrows'; ?>" id="revwrapper-container-<?php echo $id; ?>">
			  <div class="rev_banner" id="revslider-<?php echo $id; ?>">
				<ul>
				  
					<?php foreach($slides as $slide) {

						$bgimage = $slide["slide_image"];

						$transition = $slide["revolution-transition"];
						if($transition != '')
							$transition = ' data-transition="'.$transition.'"';

						$masterspeed = $slide["revolution-masterspeed"];
						if($masterspeed != '')
							$masterspeed = ' data-masterspeed="'.$masterspeed.'"';

						$delay_s = $slide["revolution-delay"];
						if($delay_s != '')
							$delay_s = ' data-delay="'.$delay_s.'"';

						$enablelink = $slide["revolution-enablelink"];
						if($enablelink == 'enable')
							$enablelink = true;
						else
							$enablelink = false;

						$link_s = '';
						$target_s = '';

						if($enablelink) {

							$link_s = $slide["revolution-link"];
							if($link_s != '')
								$link_s = ' data-link="'.$link_s.'"';

							$target_s = @$slide["revolution-target"];
							if($target_s != '') {
								$target_s = ' data-target="'.$target_s.'"';
								$target_s = str_replace("_", "", $target_s);
							}
						}

						//

						$thumb_s = $slide["revolution-thumb"];
						if($thumb_s != '')
							$thumb_s = ' data-thumb="'.$thumb_s.'"';

						//

						$enablevideo = $slide["revolution-enablevideo"];
						if($enablevideo == 'enable')
							$enablevideo = true;
						else
							$enablevideo = false;

						$videoframe = '';

						if($enablevideo) {

							$iframe_v = '';

							$vimeoid = $slide["revolution-vimeoid"];
							if($vimeoid != '')
								$iframe_v = '<iframe src="http://player.vimeo.com/video/'.$vimeoid.'?title=0&amp;byline=0&amp;portrait=0" width="100%" height="100%"></iframe>';

				            $ytid = $slide["revolution-ytid"];
							if($ytid != '')
								$iframe_v = '<iframe src="http://www.youtube.com/embed/'.$ytid.'?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0" width="460" height="259"></iframe>';

				            $autoplay_v = @$slide["revolution-videoautoplay"];
				            if($autoplay_v != '')
				            	$autoplay_v = ' data-autoplay="true"';

							$videoframe = '
							<div class="caption fade fullscreenvideo" data-x="0" data-y="0"
				                data-speed="500" data-start="10" data-easing="easeOutBack"'.$autoplay_v.'>
				                '.$iframe_v.'
				            </div>
							';

						}

					?>

					<li<?php echo $transition.$masterspeed.$delay_s.$link_s.$target_s.$thumb_s; ?> data-slotamount="7">

						<img src="<?php echo $bgimage; ?>">

						<?php echo $videoframe; ?>

						<?php 

						$layerAll = $slide["revolution-layers"];

						if($layerAll != '') : 

							$layers = explode("*;*", $layerAll);

							if(count($layers) > 0) {

								foreach ($layers as $layer) {

								if($layer != '') {

									$_l = explode(";;", $layer);

									$l_type = $_l[0];
									$l_text = $_l[1];
									$l_style = $_l[2];
									$l_animation = $_l[3];
									$l_easing = $_l[4];
									$l_x = $_l[5];
									$l_y = $_l[6];
									$l_speed = $_l[7];
									$l_delay = $_l[8];
									$l_image = $_l[9];
									$l_link = $_l[10];
									$l_target = $_l[11];
									$l_vimeo = $_l[12];
									$l_youtube = $_l[13];
									$l_videow = $_l[14];
									$l_videoh = $_l[15];
									$l_captionhtml = $_l[16];
						?>

							<?php if($l_type == "text") : ?>

								<div class="caption <?php echo $l_animation; ?> <?php echo $l_style; ?>" data-x="<?php echo $l_x; ?>" data-y="<?php echo $l_y; ?>"
								data-speed="<?php echo $l_speed; ?>" data-start="<?php echo $l_delay; ?>" data-easing="<?php echo $l_easing; ?>">
								  <?php echo do_shortcode($l_captionhtml); ?>
								</div>
						
							<?php endif; ?>

							<?php if($l_type == "image") : 

								$_href = '';
								$_hrefend = '';

								if($l_link != '') {
									$_href = '<a href="'.$l_link.'" target="'.$l_target.'">';
									$_hrefend = '</a>';
								}
							?>

								<div class="caption <?php echo $l_animation; ?> <?php echo $l_style; ?>" data-x="<?php echo $l_x; ?>" data-y="<?php echo $l_y; ?>"
								data-speed="<?php echo $l_speed; ?>" data-start="<?php echo $l_delay; ?>" data-easing="<?php echo $l_easing; ?>">
									<?php echo $_href; ?>
									<img src="<?php echo $l_image; ?>">
									<?php echo $_hrefend; ?>
								</div>

							<?php endif; ?>

							<?php if($l_type == "video") : ?>

								<div class="caption <?php echo $l_animation; ?> <?php echo $l_style; ?>" data-x="<?php echo $l_x; ?>" data-y="<?php echo $l_y; ?>"
								data-speed="<?php echo $l_speed; ?>" data-start="<?php echo $l_delay; ?>" data-easing="<?php echo $l_easing; ?>">

								<?php if($l_youtube != '' && $l_vimeo == '') : ?>
									<iframe src="http://www.youtube.com/embed/<?php echo $l_youtube; ?>?hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0" width="<?php echo $l_videow; ?>" height="<?php echo $l_videoh; ?>"></iframe>
								<?php endif; ?>
								<?php if($l_vimeo != '' && $l_youtube == '') : ?>
									<iframe src="http://player.vimeo.com/video/<?php echo $l_vimeo; ?>?title=0&amp;byline=0&amp;portrait=0;api=1" width="<?php echo $l_videow; ?>" height="<?php echo $l_videoh; ?>"></iframe>
								<?php endif; ?>
								</div>

							<?php endif; ?>



						<?php
								} // if layer != ''

								} // foreach
							} // layers > 0

						endif; ?>
					
					</li>

					<?php } // end foreach ?>

				</ul>
				<div class="tp-bannertimer"></div>
			  </div>
			</div>

			<div class="xt_clear"></div>
			
			<script type="text/javascript">
				// <![CDATA[

				var tpj=jQuery;

				tpj(document).ready(function() {

				if (tpj.fn.cssOriginal!=undefined)
					tpj.fn.css = tpj.fn.cssOriginal;

					tpj('#revslider-<?php echo $id; ?>').revolution(
						{
							delay: <?php echo $delay; ?>,

							startheight:<?php echo $slider_h; ?>,
							startwidth:<?php echo $slider_w; ?>,

							navigationType: "<?php echo $navigationtype; ?>",
							navigationArrows: "<?php echo $navigationarrows; ?>",
							navigationStyle: "<?php echo $navigationstyle; ?>",
							touchenabled: "<?php echo $touchenabled; ?>",
							navOffsetHorizontal: <?php echo $navoffsethorizontal; ?>,
							navOffsetVertical: <?php echo $navoffsetvertical; ?>,
							shadow: <?php echo $shadow; ?>,
							onHoverStop: "<?php echo $onhoverstop; ?>",
							thumbWidth: <?php echo $thumbwidth; ?>,
							thumbHeight: <?php echo $thumbheight; ?>,
							thumbAmount: <?php echo $thumbamount; ?>,

							hideThumbs:200,
							fullWidth:"off",							// Turns On or Off the Fullwidth Image Centering in FullWidth Modus
							stopLoop:"off"							// on == Stop loop at the last Slie,  off== Loop all the time.
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