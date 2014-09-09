<?php

	function xt_slider_kenburnpanel($post_id) {

		/*
		wp_enqueue_script("dc-waitforimages-js");
		wp_enqueue_script("dc-cssAnimate-js");
		wp_enqueue_script("dc-touchwipe-js");
		*/
		wp_enqueue_script("dc-kenburns-panel-js");
		
		wp_enqueue_style("dc-kenburns-panel-settings-css");

		$slider_mode = get_post_meta($post_id, "kenburn-panel-slider-mode", true);
		if($slider_mode == "")
			$slider_mode = "Responsive";
			

		$slider_w = get_post_meta($post_id, "kenburn-panel-slider-w", true);
		if($slider_w == "")
			$slider_w = "960";
			

		$time = get_post_meta($post_id, "kenburn-panel-time", true);
		if($time == "")
			$time = "7000";
			

		$thumbwidth = get_post_meta($post_id, "kenburn-panel-thumbwidth", true);
		if($thumbwidth == "")
			$thumbwidth = "70";
			

		$thumbheight = get_post_meta($post_id, "kenburn-panel-thumbheight", true);
		if($thumbheight == "")
			$thumbheight = "40";
			

		$thumbamount = get_post_meta($post_id, "kenburn-panel-thumbamount", true);
		if($thumbamount == "")
			$thumbamount = "4";
			

		$thumbstyle = get_post_meta($post_id, "kenburn-panel-thumbstyle", true);
		if($thumbstyle == "")
			$thumbstyle = "both";
			

		$thumbyoffset = get_post_meta($post_id, "kenburn-panel-thumbyoffset", true);
		if($thumbyoffset == "")
			$thumbyoffset = "40";
			

		$bulletyoffset = get_post_meta($post_id, "kenburn-panel-bulletyoffset", true);
		if($bulletyoffset == "")
			$bulletyoffset = "-16";
			

		$hidethumbs = get_post_meta($post_id, "kenburn-panel-hidethumbs", true);
		if($hidethumbs == "")
			$hidethumbs = "on";
			

		$timer = get_post_meta($post_id, "kenburn-panel-timer", true);
		if($timer == "")
			$timer = "5";
			

		$skin = get_post_meta($post_id, "kenburn-panel-skin", true);
		if($skin == "")
			$skin = "dark";
		
		$id = rand(0, 1000);

		ob_start();
		?>
		
			<script type="text/javascript">
			// <![CDATA[
				jQuery(document).ready(function() {    

					jQuery('#kbpanel-bannercontainer_<?php echo $id; ?>').kenburn({

						thumbWidth: <?php echo $thumbwidth; ?>, // thumbnail width
						thumbHeight: <?php echo $thumbheight; ?>, // thumbnail height
						
						thumbAmount: <?php echo $thumbamount; ?>,  // number of thumbnails to show
						thumbStyle: "<?php echo $thumbstyle; ?>",   // thumb, bullet, none, both
						thumbVideoIcon: "on", // show a video icon for video content: off, on
						
						thumbVertical:"bottom",
						thumbHorizontal:"center",							
						thumbXOffset:0,
						thumbYOffset: <?php echo $thumbyoffset; ?>,
						bulletXOffset:0,
						bulletYOffset:<?php echo $bulletyoffset; ?>,
						hideThumbs:"<?php echo $hidethumbs; ?>",
						touchenabled:'on',  // allow touch swipe (suitable for mobile devices): on, off
						pauseOnRollOverThumbs:'off', // pause slider when mouse over thumbnail
						pauseOnRollOverMain:'on', // pause slider when mouse over slider
						preloadedSlides:2, // number of slides to preload during startup
						
						timer: <?php echo $timer; ?>, // time before next slide (5 = 5 seconds)
						
						debug:"off"					
					});			 
						
					jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tnone').click(function() {
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tbull').removeClass('selected');
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tthumb').removeClass('selected');
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tnone').addClass('selected');
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tauto').removeClass('selected');
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .kenburn_thumb_container').css({'visibility':'hidden'});
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .thumbbuttons').css({'visibility':'hidden'});        
					});
					
					jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tthumb').click(function() {
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tbull').removeClass('selected');
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tauto').removeClass('selected');
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tthumb').addClass('selected');
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tnone').removeClass('selected');
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .kenburn_thumb_container').css({'visibility':'visible'});
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .thumbbuttons').css({'visibility':'hidden'});
						jQuery('body').addClass('tp_showthumbsalways');
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .kenburn_thumb_container').animate({'opacity':1},{duration:300,queue:false});
						
					});
					
					jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tauto').click(function() {
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tauto').addClass('selected');
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tthumb').removeClass('selected');
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tnone').removeClass('selected');
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tbull').removeClass('selected');
						jQuery('body').removeClass('tp_showthumbsalways');
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .kenburn_thumb_container').css({'visibility':'visible'});
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .thumbbuttons').css({'visibility':'hidden'});
						setTimeout(function() {
							jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .kenburn_thumb_container').animate({'opacity':0},{duration:300,queue:false});
						},100);
						
					});
					
					jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tbull').click(function() {
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tbull').addClass('selected');
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tauto').removeClass('selected');
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tthumb').removeClass('selected');
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tnone').removeClass('selected');
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .kenburn_thumb_container').css({'visibility':'hidden'});
						jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .thumbbuttons').css({'visibility':'visible'});        
					});
					
					jQuery('body').addClass('tp_showthumbsalways');
					jQuery('#xt_ken_burns_panel_<?php echo $id; ?> .tthumb').click();
						
				});
								 
			// ]]>
			</script>

			<?php 

			$slides = get_post_meta($post_id, "xt_slide", true);

			$slides = maybe_unserialize($slides);

			?>

			<?php
			if(count($slides) > 0 && $slides != '') : 

				$i = 0;
			?>

				<?php
					$sliderStyle = '';
					$class = '';

					if($slider_mode == "Fixed") {
						$sliderStyle = 'width: '.$slider_w.'px; height: auto;';
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
			
				<div  id="xt_ken_burns_panel_<?php echo $id; ?>" class="<?php echo $class; ?>" style="<?php echo $sliderStyle; ?> position:relative;"> <!-- define slider container width (by strict force) -->
				  <div class="demoholder">
					<div class="bggradient"></div>
					<div class="kbpanel-bannercontainer centerme <?php echo $skin; ?>" id="kbpanel-bannercontainer_<?php echo $id; ?>">
					  <ul>

					  	<?php foreach($slides as $slide) {

					  		$_img = $slide["slide_image"];

					  		$_transition = $slide["kenburn-panel-transition"];
					  		if($_transition != '')
					  			$_transition = 'data-transition="'.$_transition.'"';

					  		$_movex = $slide["kenburn-panel-movex"];
					  		$_movey = $slide["kenburn-panel-movey"];

					  		$_zoomtype = $slide["kenburn-panel-zoomtype"];
					  		if($_zoomtype != '')
					  			$_zoomtype = 'data-zoom="'.$_zoomtype.'"';

					  		$_zoom = $slide["kenburn-panel-zoom"];
					  		if($_zoom != '')
					  			$_zoom = 'data-zoomfact="'.$_zoom.'"';
					  		else
					  			$_zoom = 'data-zoomfact="1.5"';


					  		$_moveendx = $slide["kenburn-panel-moveendx"];
					  		$_moveendy = $slide["kenburn-panel-moveendy"];

					  		$_moveduration = $slide["kenburn-panel-moveduration"];
					  		if($_moveduration != '')
					  			$_moveduration = 'data-panduration="'.$_moveduration.'"';
					  		else
					  			$_moveduration = 'data-panduration="6"';

					  		$_blur = $slide["kenburn-panel-blurimage"];
					  		if($_blur != '')
					  			$_blur = ' data-bw="'.$_blur.'"';

					  		$_thumb = $slide["kenburn-panel-thumb"];
					  		if($_thumb != '')
					  			$_thumb = ' data-thumb="'.$_thumb.'"';

					  		$_captionposition = $slide["kenburn-panel-captionposition"];

					  		$_captionfade = $slide["kenburn-panel-captionfade"];

					  		$_captiontitle = $slide["kenburn-panel-captiontitle"];

					  		$_caption = $slide["kenburn-panel-caption"];

					  		$_class = '';

					  		if($_captiontitle != '' OR $_caption != '')
					  			$_class = 'cp-'.$_captionposition.' fade'.$_captionfade;

					  		if( isset($slide["kenburn-panel-enablevideo"]) )
					  			$_enablevideo = $slide["kenburn-panel-enablevideo"];
					  		else
					  			$_enablevideo = '';

					  		$_vimeoid = $slide["kenburn-panel-vimeoid"];

					  		$_youtubeid = $slide["kenburn-panel-youtubeid"];

					  		$_videotitle = $slide["kenburn-panel-videotitle"];

					  		$_videocaption = $slide["kenburn-panel-videocaption"];


					  	?>
					  	<li <?php echo $_transition; ?> data-startalign="<?php echo $_movex; ?>,<?php echo $_movey; ?>" <?php echo $_zoomtype; ?> <?php echo $_zoom; ?> data-endAlign="<?php echo $_moveendx; ?>,<?php echo $_moveendy; ?>" <?php echo $_moveduration; ?> data-colortransition="4">
					  		<img alt="" src="<?php echo $_img; ?>"<?php echo $_blur.$_thumb; ?> />
					  		
					  		<?php if($_enablevideo != '') : ?>

							  	<div class="video_kenburner">
									<div class="video_kenburn_wrap">
									  <div class="video_video">
									  	<?php if($_vimeoid != '') : ?>
										<iframe class="video_clip" src="http://player.vimeo.com/video/<?php echo $_vimeoid; ?>?title=0&amp;byline=0&amp;portrait=0"></iframe>
									  	<?php endif; ?>
									  	<?php if($_youtubeid != '') : ?>
									  	<iframe class="video_clip" src="http://www.youtube.com/embed/<?php echo $_youtubeid; ?>?hd=1&amp;wmode=opaque&amp;autohide=1&amp;showinfo=0"></iframe>
									  	<?php endif; ?>
									  </div>
									  <div class="video_details">
									  	<?php if($_videotitle != '') : ?>
										<p class="cp-title"><?php echo $_videotitle; ?></p>
										<?php endif; ?>

										<?php if($_videocaption != '') { ?>
										<p>
										 <?php echo nl2br( do_shortcode( stripslashes($_videocaption) ) ); ?>
										</p>
										<?php } ?>

										<div class="clear"></div>
									  </div>
									  <div class="close"></div>
									</div>
								</div>

						  <?php endif; ?>

					  		<div class="creative_layer">
								<div class="<?php echo $_class; ?>">
									<?php if($_captiontitle != '' OR $_caption != '') : ?>

										<?php if($_captiontitle != '') { ?>
									  	<p class="cp-title"><?php echo stripslashes($_captiontitle); ?></p>
									  	<?php } ?>

									  	<?php if($_caption != '') { ?>
									  	<p>
										 <?php echo nl2br( do_shortcode( stripslashes($_caption) ) ); ?>
										</p>
										<?php } ?>

										<div class="clear"></div>

								  	<?php endif; ?>
								</div>
						  </div>

						</li>

						<?php 
							$i++;
						}
						?>
			
					  </ul>
					</div> <!-- /kbpanel-bannercontainer -->
					<!-- Banner Shadow Effect -->
					<div class="bannershadow centerme"><img style="max-width: 100%; height: auto;" height="40px" src="<?php echo xt_PLUGIN_DIR; ?>/frontend/sliders/kbpanel-slider/images/bannershadow.png"></div>
				  </div> <!-- /demoholder -->
				  
				</div> 
				<!-- DC Ken Burns Panel slider End -->
				<div class="xt_clear"></div> <!-- line break/clear line -->
			<?php endif; ?>
			
		<?php

		$output = ob_get_contents();

		ob_end_clean();

		return $output;

	}