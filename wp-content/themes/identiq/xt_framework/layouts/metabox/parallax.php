<?php
	
	add_action("admin_init", "xt_pages_meta_box"); 

	/*** META DEFINITION ***/
	function xt_pages_meta_box(){  
		add_meta_box("xt_parallax_options", "Parallax Background Options" , "xt_parallax_meta_options", "page", "normal");	
	}
	
	/*** PARALLAX OPTIONS ***/
	  
	function xt_parallax_meta_options()
	{  
		global $post;  
		global $post_id;

		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;  

		// Get post custom fields arrays
		$custom = get_post_custom($post->ID); 

		// Parallax Status
		$parallax_status = (isset($custom["parallax-section-status"])) ? $custom["parallax-section-status"][0] : '';

		// Parallax Location
		$parallax_location = (isset($custom["parallax-section-location"])) ? $custom["parallax-section-location"][0] : 'below';

		// Parallax Type
		$parallax_type = (isset($custom["parallax-section-type"])) ? $custom["parallax-section-type"][0] : 'default';

		// Quote
		$quote_content = (isset($custom["parallax-section-quote-content"])) ? $custom["parallax-section-quote-content"][0] : '';
		$quote_author = (isset($custom["parallax-section-quote-author"])) ? $custom["parallax-section-quote-author"][0] : '';

		// Twitter
		$twitter_acc = (isset($custom["parallax-section-twitter-acc"])) ? $custom["parallax-section-twitter-acc"][0] : '';

		// Rich Content
		$rich_parallax = (isset($custom["parallax-section-content"])) ? $custom["parallax-section-content"][0] : '';

		// Options of parallax...
		$padding_top = (isset($custom["parallax-section-padding-top"])) ? $custom["parallax-section-padding-top"][0] : '';
		$padding_bottom = (isset($custom["parallax-section-padding-bottom"])) ? $custom["parallax-section-padding-bottom"][0] : '';

		$margin_top = (isset($custom["parallax-section-margin-top"])) ? $custom["parallax-section-margin-top"][0] : '';
		$margin_bottom = (isset($custom["parallax-section-margin-bottom"])) ? $custom["parallax-section-margin-bottom"][0] : '';

		$container_type = (isset($custom["parallax-section-container-type"])) ? $custom["parallax-section-container-type"][0] : '';

		$color_scheme = (isset($custom["parallax-section-color-scheme"])) ? $custom["parallax-section-color-scheme"][0] : '';

		$style = (isset($custom["parallax-section-style"])) ? $custom["parallax-section-style"][0] : '';

		$shadow = (isset($custom["parallax-section-shadow"])) ? $custom["parallax-section-shadow"][0] : '';
		$border = (isset($custom["parallax-section-border"])) ? $custom["parallax-section-border"][0] : '';

		$bg_custom_color = (isset($custom["parallax-section-bg-custom-color"])) ? $custom["parallax-section-bg-custom-color"][0] : '';

		$bg_img = (isset($custom["parallax-section-bg-img"])) ? $custom["parallax-section-bg-img"][0] : '';
		$bg_x = (isset($custom["parallax-section-bg-x"])) ? $custom["parallax-section-bg-x"][0] : '';
		$bg_y = (isset($custom["parallax-section-bg-y"])) ? $custom["parallax-section-bg-y"][0] : '';
		$bg_attachment = (isset($custom["parallax-section-bg-attachment"])) ? $custom["parallax-section-bg-attachment"][0] : '';
		$bg_size = (isset($custom["parallax-section-bg-size"])) ? $custom["parallax-section-bg-size"][0] : '';
		$bg_repeat = (isset($custom["parallax-section-bg-repeat"])) ? $custom["parallax-section-bg-repeat"][0] : '';

		$parallax = (isset($custom["parallax-section-parallax"])) ? $custom["parallax-section-parallax"][0] : '';
		$parallax_bg_ratio = (isset($custom["parallax-section-parallax-bg-ratio"])) ? $custom["parallax-section-parallax-bg-ratio"][0] : '';

	?>
		<div class="xt-metabox">

			<div class="xt-title"><h2>Parallax Settings</h2></div>

			<div class="xt-metabox-error">
				<p>Parallax sections can't be created without the <strong>XT Shortcodes Plugin</strong> activated. Ensure you activated the plugin to see your parallax effects working.</p>
			</div>

			<?php wp_nonce_field( basename( __FILE__ ), 'xt_parallax_meta_nonce' ); ?>

			<div id="xt-height" class="xt-input">
				<label><input type="checkbox" name="parallax-section-status" value="on" <?php if($parallax_status == 'on') echo 'checked="checked"'; ?> /> Check this ENABLE the parallax for this page.</label>
			</div>

			<div class="xt-input">
				<label>The parallax will be placed...</label>
				<select name="parallax-section-location">
					<option value="below"<?php if($parallax_location == 'below') echo ' selected="selected"'; ?>>Below Content (Bottom)</option>
					<option value="above"<?php if($parallax_location == 'above') echo ' selected="selected"'; ?>>Above Content (Top)</option>
					<option value="above-title"<?php if($parallax_location == 'above-title') echo ' selected="selected"'; ?>>Above Title (Top Title)</option>
					<option value="wrapper"<?php if($parallax_location == 'wrapper') echo ' selected="selected"'; ?>>Wrapper (Content)</option>
				</select>
			</div> <!-- .xt-input -->

			<div class="xt-input type-selector">
				<label>Parallax Content</label>
				<span class="xt-radio">
				<input type="radio" name="parallax-section-type" rel="default" value="default"<?php if($parallax_type == 'default') echo ' checked="checked"'; ?> /> None
				</span>

				<span class="xt-radio">
				<input type="radio" name="parallax-section-type" rel="quote" value="quote"<?php if($parallax_type == 'quote') echo ' checked="checked"'; ?> /> Quote
				</span>

				<span class="xt-radio">
				<input type="radio" name="parallax-section-type" rel="tweet" value="tweet"<?php if($parallax_type == 'tweet') echo ' checked="checked"'; ?> /> Tweet
				</span>
			</div>

			<div id="xt-default" class="xt-input default-id"<?php if($parallax_type != 'default') echo ' style="display: none;"'; ?>>
				<p><i>None options avaliable to this type, only the image will be showed.</i></p>
			</div>

			<!-- QUOTE TYPE -->

			<div id="xt-quote" class="xt-input quote-id"<?php if($parallax_type != 'quote') echo ' style="display: none;"'; ?>>
				<label>Quote Content</label>
				<textarea name="parallax-section-quote-content" style="width: 350px; height: 100px;"><?php echo $quote_content; ?></textarea>
			</div>

			<div id="xt-parallax-section-quote-author" class="xt-input quote-id"<?php if($parallax_type != 'quote') echo ' style="display: none;"'; ?>>
				<label>Quote Author</label>
				<input type="text" name="parallax-section-quote-author" value="<?php echo $quote_author; ?>" />
			</div>

			<!-- TWEET -->

			<div id="xt-tweet" class="xt-input tweet-id"<?php if($parallax_type != 'tweet') echo ' style="display: none;"'; ?>>
				<label>Twitter Account</label>
				<input type="text" name="parallax-section-twitter-acc" value="<?php echo $twitter_acc; ?>" />
			</div>

			<!-- RICH EDITOR -->

			<div id="xt-rich" class="xt-input rich-id">
				<label>Custom Rich Content</label>
				<?php wp_editor($rich_parallax, 'parallax-section-content', array( 'textarea_rows' => 20 ) ); ?>
			</div>

			<script type="text/javascript">
				//<![CDATA[
				jQuery(document).ready(function() {

					jQuery('.type-selector input[type="radio"]').change(function() {
						/* hide everybody! */
						jQuery('.default-id, .quote-id, .tweet-id').css("display", "none");

						/* show only the selected */
						jQuery('.' + jQuery(this).attr('rel') + '-id').css("display", "block");
					});

				});
				//]]>
			</script>

			<div class="parallax-section-wrapper-controllers">

				<div class="parallax-section-wrapper-controllers-col first">

					<h4>Wrapper Spaces</h4>

					<div class="xt-wrapper-input">
					<label>Padding Top</label>
					<input type="text" name="parallax-section-padding-top" value="<?php echo $padding_top; ?>" />
					<small>Defines the padding top of wrapper in px or % for example.</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Padding Bottom</label>
					<input type="text" name="parallax-section-padding-bottom" value="<?php echo $padding_bottom; ?>" />
					<small>Defines the padding bottom of wrapper in px or % for example.</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Margin Top</label>
					<input type="text" name="parallax-section-margin-top" value="<?php echo $margin_top; ?>" />
					<small>Defines the margin top of wrapper in px or % for example.</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Margin Bottom</label>
					<input type="text" name="parallax-section-margin-bottom" value="<?php echo $margin_bottom; ?>" />
					<small>Defines the margin bottom of wrapper in px or % for example.</small>
					</div>

					<h4>Container</h4>

					<div class="xt-wrapper-input">
					<label>Container Type</label>
					<select name="parallax-section-container-type">
						<option value="normal"<?php if($container_type == "normal") echo ' selected="selected"'; ?>>Normal</option>
						<option value="full"<?php if($container_type == "full") echo ' selected="selected"'; ?>>Full</option>
					</select>
					<small>Defines if container has size or if goes until the window border (full).</small>
					</div>

					<h4>Wrapper Settings</h4>

					<div class="xt-wrapper-input">
					<label>Color Scheme</label>
					<select name="parallax-section-color-scheme">
						<option value="dark"<?php if($color_scheme == "dark") echo ' selected="selected"'; ?>>Dark</option>
						<option value="light"<?php if($color_scheme == "light") echo ' selected="selected"'; ?>>Light</option>
						<?php do_action('xt_parallax_custom_schemes', $color_scheme); ?>
					</select>
					<small>Defines if wrapper color scheme is dark (ideal to light background) or light (ideal to dark background).</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Wrapper Style</label>
					<select name="parallax-section-style">
						<option value="normal"<?php if($style == "normal") echo ' selected="selected"'; ?>>Normal</option>
						<option value="dark"<?php if($style == "dark") echo ' selected="selected"'; ?>>Dark</option>
						<option value="transparent"<?php if($style == "transparent") echo ' selected="selected"'; ?>>Transparent</option>
						<?php do_action('xt_parallax_custom_styles', $style); ?>
					</select>
					<small>Defines if wrapper default background color is normal (light), dark or transparent.</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Enable Shadow?</label>
					<select name="parallax-section-shadow">
						<option value=""<?php if($shadow == "") echo ' selected="selected"'; ?>>No</option>
						<option value="yes"<?php if($shadow == "yes") echo ' selected="selected"'; ?>>Yes</option>
					</select>
					<small>Defines if wrapper will have inner shadows.</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Enable Border?</label>
					<select name="parallax-section-border">
						<option value=""<?php if($border == "") echo ' selected="selected"'; ?>>No</option>
						<option value="yes"<?php if($border == "yes") echo ' selected="selected"'; ?>>Yes</option>
					</select>
					<small>Defines if wrapper will have top and bottom borders.</small>
					</div>

				</div>

				<div class="parallax-section-wrapper-controllers-col last">

					<h4>Background Settings</h4>

					<div class="xt-wrapper-input">
					<label>Custom Background Color</label>
					<input type="text" name="parallax-section-bg-custom-color" value="<?php echo $bg_custom_color; ?>" />
					<small>Custom hex or rgba color to use as background, like #42aa63.</small>
					</div>

					<div class="xt-wrapper-input">

					<div class="xt-preview">
						<?php if($bg_img != '') : ?>
						<img src="<?php echo $bg_img; ?>" alt="" />
						<?php endif; ?>
					</div>

					<label>Background Image</label>
					<input type="text" class="upload-admin-input" name="parallax-section-bg-img" value="<?php echo $bg_img; ?>" /> 
					<input class="button button-primary upload-admin" type="button" value="Upload" />
					<small>Background Image to use as wrapper background.</small>

					<div class="xt-clear clear clearboth"></div>

					</div>

					<div class="xt-wrapper-input">
					<label>Background X Position</label>
					<select name="parallax-section-bg-x">
						<option value="center"<?php if($bg_x == "center") echo ' selected="selected"'; ?>>Center</option>
						<option value="right"<?php if($bg_x == "right") echo ' selected="selected"'; ?>>Right</option>
						<option value="left"<?php if($bg_x == "left") echo ' selected="selected"'; ?>>Left</option>
					</select>
					<small>Defines background position horizontally.</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Background Y Position</label>
					<select name="parallax-section-bg-y">
						<option value="top"<?php if($bg_y == "top") echo ' selected="selected"'; ?>>Top</option>
						<option value="center"<?php if($bg_y == "center") echo ' selected="selected"'; ?>>Center</option>
						<option value="bottom"<?php if($bg_y == "bottom") echo ' selected="selected"'; ?>>Bottom</option>
					</select>
					<small>Defines background position vertically.</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Background Attachment</label>
					<select name="parallax-section-bg-attachment">
						<option value="fixed"<?php if($bg_attachment == "fixed") echo ' selected="selected"'; ?>>Fixed</option>
						<option value="scroll"<?php if($bg_attachment == "scroll") echo ' selected="selected"'; ?>>Scroll</option>
					</select>
					<small>Defines background behavior when user scroll the page.</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Background Size</label>
					<input type="text" name="parallax-section-bg-size" value="<?php echo $bg_size; ?>" />
					<small>Defines background size, you can use 'cover' (default), 'contain', 'auto' or a 'porcentage', like '80% auto' (width and height).</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Background Repeat</label>
					<select name="parallax-section-bg-repeat">
						<option value="no-repeat"<?php if($bg_repeat == "no-repeat") echo ' selected="selected"'; ?>>No Repeat</option>
						<option value="repeat-x"<?php if($bg_repeat == "repeat-x") echo ' selected="selected"'; ?>>Repeat X</option>
						<option value="repeat-y"<?php if($bg_repeat == "repeat-y") echo ' selected="selected"'; ?>>Repeat Y</option>
						<option value="repeat"<?php if($bg_repeat == "repeat") echo ' selected="selected"'; ?>>Repeat</option>
					</select>
					<small>Defines if background will repeat or not.</small>
					</div>

					<h4>Parallax Settings</h4>

					<div class="xt-wrapper-input">
					<label>Enable Parallax?</label>
					<select name="parallax-section-parallax">
						<option value=""<?php if($parallax == "") echo ' selected="selected"'; ?>>No</option>
						<option value="yes"<?php if($parallax == "yes") echo ' selected="selected"'; ?>>Yes</option>
					</select>
					<small>Enables Parallax effect to this wrapper.</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Parallax Background Ratio</label>
					<input type="text" name="parallax-section-parallax-bg-ratio" value="<?php echo $parallax_bg_ratio; ?>" />
					<small>Defines the ratio the background will scroll relative to scroll speed. Use values like 0.5 to scroll down in half speed. To values greater than 1 define background attachment to fixed to avoid issues.</small>
					</div>

				</div>

				<div class="clear xt-clear clearboth"></div>

			</div> <!-- Parallax Controllers -->

		<div class="xt-title"><h2>Page Background Settings</h2></div>

		<?php

		// Parallax Status
		$parallax_status_page = (isset($custom["parallax-section-status-page"])) ? $custom["parallax-section-status-page"][0] : '';

		// Options of parallax...
		$padding_top_page = (isset($custom["parallax-section-padding-top-page"])) ? $custom["parallax-section-padding-top-page"][0] : '';
		$padding_bottom_page = (isset($custom["parallax-section-padding-bottom-page"])) ? $custom["parallax-section-padding-bottom-page"][0] : '';

		$margin_top_page = (isset($custom["parallax-section-margin-top-page"])) ? $custom["parallax-section-margin-top-page"][0] : '';
		$margin_bottom_page = (isset($custom["parallax-section-margin-bottom-page"])) ? $custom["parallax-section-margin-bottom-page"][0] : '';

		$container_type_page = (isset($custom["parallax-section-container-type-page"])) ? $custom["parallax-section-container-type-page"][0] : '';

		$color_scheme_page = (isset($custom["parallax-section-color-scheme-page"])) ? $custom["parallax-section-color-scheme-page"][0] : '';

		$style_page = (isset($custom["parallax-section-style-page"])) ? $custom["parallax-section-style-page"][0] : '';

		$shadow_page = (isset($custom["parallax-section-shadow-page"])) ? $custom["parallax-section-shadow-page"][0] : '';
		$border_page = (isset($custom["parallax-section-border-page"])) ? $custom["parallax-section-border-page"][0] : '';

		$bg_custom_color_page = (isset($custom["parallax-section-bg-custom-color-page"])) ? $custom["parallax-section-bg-custom-color-page"][0] : '';

		$bg_img_page = (isset($custom["parallax-section-bg-img-page"])) ? $custom["parallax-section-bg-img-page"][0] : '';
		$bg_x_page = (isset($custom["parallax-section-bg-x-page"])) ? $custom["parallax-section-bg-x-page"][0] : '';
		$bg_y_page = (isset($custom["parallax-section-bg-y-page"])) ? $custom["parallax-section-bg-y-page"][0] : '';
		$bg_attachment_page = (isset($custom["parallax-section-bg-attachment-page"])) ? $custom["parallax-section-bg-attachment-page"][0] : '';
		$bg_size_page = (isset($custom["parallax-section-bg-size-page"])) ? $custom["parallax-section-bg-size-page"][0] : '';
		$bg_repeat_page = (isset($custom["parallax-section-bg-repeat-page"])) ? $custom["parallax-section-bg-repeat-page"][0] : '';

		$parallax_page = (isset($custom["parallax-section-parallax-page"])) ? $custom["parallax-section-parallax-page"][0] : '';
		$parallax_bg_ratio_page = (isset($custom["parallax-section-parallax-bg-ratio-page"])) ? $custom["parallax-section-parallax-bg-ratio-page"][0] : '';
		?>

		<div class="xt-input">
			<label><input type="checkbox" name="parallax-section-status-page" value="on" <?php if($parallax_status_page == 'on') echo 'checked="checked"'; ?> /> Check this ENABLE the page background settings for this page.</label>
		</div>

		<div class="parallax-section-wrapper-controllers">

				<div class="parallax-section-wrapper-controllers-col first">

					<h4>Wrapper Spaces</h4>

					<div class="xt-wrapper-input">
					<label>Padding Top</label>
					<input type="text" name="parallax-section-padding-top-page" value="<?php echo $padding_top_page; ?>" />
					<small>Defines the padding top of wrapper in px or % for example.</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Padding Bottom</label>
					<input type="text" name="parallax-section-padding-bottom-page" value="<?php echo $padding_bottom_page; ?>" />
					<small>Defines the padding bottom of wrapper in px or % for example.</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Margin Top</label>
					<input type="text" name="parallax-section-margin-top-page" value="<?php echo $margin_top_page; ?>" />
					<small>Defines the margin top of wrapper in px or % for example.</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Margin Bottom</label>
					<input type="text" name="parallax-section-margin-bottom-page" value="<?php echo $margin_bottom_page; ?>" />
					<small>Defines the margin bottom of wrapper in px or % for example.</small>
					</div>

					<h4>Wrapper Settings</h4>

					<div class="xt-wrapper-input">
					<label>Color Scheme</label>
					<select name="parallax-section-color-scheme-page">
						<option value="dark"<?php if($color_scheme_page == "dark") echo ' selected="selected"'; ?>>Dark</option>
						<option value="light"<?php if($color_scheme_page == "light") echo ' selected="selected"'; ?>>Light</option>
						<?php do_action('xt_parallax_custom_schemes', $color_scheme_page); ?>
					</select>
					<small>Defines if wrapper color scheme is dark (ideal to light background) or light (ideal to dark background).</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Wrapper Style</label>
					<select name="parallax-section-style-page">
						<option value="normal"<?php if($style_page == "normal") echo ' selected="selected"'; ?>>Normal</option>
						<option value="dark"<?php if($style_page == "dark") echo ' selected="selected"'; ?>>Dark</option>
						<option value="transparent"<?php if($style_page == "transparent") echo ' selected="selected"'; ?>>Transparent</option>
						<?php do_action('xt_parallax_custom_styles', $style_page); ?>
					</select>
					<small>Defines if wrapper default background color is normal (light), dark or transparent.</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Enable Shadow?</label>
					<select name="parallax-section-shadow-page">
						<option value=""<?php if($shadow_page == "") echo ' selected="selected"'; ?>>No</option>
						<option value="yes"<?php if($shadow_page == "yes") echo ' selected="selected"'; ?>>Yes</option>
					</select>
					<small>Defines if wrapper will have inner shadows.</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Enable Border?</label>
					<select name="parallax-section-border-page">
						<option value=""<?php if($border_page == "") echo ' selected="selected"'; ?>>No</option>
						<option value="yes"<?php if($border_page == "yes") echo ' selected="selected"'; ?>>Yes</option>
					</select>
					<small>Defines if wrapper will have top and bottom borders.</small>
					</div>

				</div>

				<div class="parallax-section-wrapper-controllers-col last">

					<h4>Background Settings</h4>

					<div class="xt-wrapper-input">
					<label>Custom Background Color</label>
					<input type="text" name="parallax-section-bg-custom-color-page" value="<?php echo $bg_custom_color_page; ?>" />
					<small>Custom hex or rgba color to use as background, like #42aa63.</small>
					</div>

					<div class="xt-wrapper-input">

					<div class="xt-preview">
						<?php if($bg_img_page != '') : ?>
						<img src="<?php echo $bg_img_page; ?>" alt="" />
						<?php endif; ?>
					</div>

					<label>Background Image</label>
					<input type="text" class="upload-admin-input" name="parallax-section-bg-img-page" value="<?php echo $bg_img_page; ?>" /> 
					<input class="button button-primary upload-admin" type="button" value="Upload" />
					<small>Background Image to use as wrapper background.</small>

					<div class="xt-clear clear clearboth"></div>

					</div>

					<div class="xt-wrapper-input">
					<label>Background X Position</label>
					<select name="parallax-section-bg-x-page">
						<option value="center"<?php if($bg_x_page == "center") echo ' selected="selected"'; ?>>Center</option>
						<option value="right"<?php if($bg_x_page == "right") echo ' selected="selected"'; ?>>Right</option>
						<option value="left"<?php if($bg_x_page == "left") echo ' selected="selected"'; ?>>Left</option>
					</select>
					<small>Defines background position horizontally.</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Background Y Position</label>
					<select name="parallax-section-bg-y-page">
						<option value="top"<?php if($bg_y_page == "top") echo ' selected="selected"'; ?>>Top</option>
						<option value="center"<?php if($bg_y_page == "center") echo ' selected="selected"'; ?>>Center</option>
						<option value="bottom"<?php if($bg_y_page == "bottom") echo ' selected="selected"'; ?>>Bottom</option>
					</select>
					<small>Defines background position vertically.</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Background Attachment</label>
					<select name="parallax-section-bg-attachment-page">
						<option value="fixed"<?php if($bg_attachment_page == "fixed") echo ' selected="selected"'; ?>>Fixed</option>
						<option value="scroll"<?php if($bg_attachment_page == "scroll") echo ' selected="selected"'; ?>>Scroll</option>
					</select>
					<small>Defines background behavior when user scroll the page.</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Background Size</label>
					<input type="text" name="parallax-section-bg-size-page" value="<?php echo $bg_size_page; ?>" />
					<small>Defines background size, you can use 'cover' (default), 'contain', 'auto' or a 'porcentage', like '80% auto' (width and height).</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Background Repeat</label>
					<select name="parallax-section-bg-repeat-page">
						<option value="no-repeat"<?php if($bg_repeat_page == "no-repeat") echo ' selected="selected"'; ?>>No Repeat</option>
						<option value="repeat-x"<?php if($bg_repeat_page == "repeat-x") echo ' selected="selected"'; ?>>Repeat X</option>
						<option value="repeat-y"<?php if($bg_repeat_page == "repeat-y") echo ' selected="selected"'; ?>>Repeat Y</option>
						<option value="repeat"<?php if($bg_repeat_page == "repeat") echo ' selected="selected"'; ?>>Repeat</option>
					</select>
					<small>Defines if background will repeat or not.</small>
					</div>

					<h4>Parallax Settings</h4>

					<div class="xt-wrapper-input">
					<label>Enable Parallax?</label>
					<select name="parallax-section-parallax-page">
						<option value=""<?php if($parallax_page == "") echo ' selected="selected"'; ?>>No</option>
						<option value="yes"<?php if($parallax_page == "yes") echo ' selected="selected"'; ?>>Yes</option>
					</select>
					<small>Enables Parallax effect to this wrapper.</small>
					</div>

					<div class="xt-wrapper-input">
					<label>Parallax Background Ratio</label>
					<input type="text" name="parallax-section-parallax-bg-ratio-page" value="<?php echo $parallax_bg_ratio_page; ?>" />
					<small>Defines the ratio the background will scroll relative to scroll speed. Use values like 0.5 to scroll down in half speed. To values greater than 1 define background attachment to fixed to avoid issues.</small>
					</div>

				</div>

				<div class="clear xt-clear clearboth"></div>

			</div> <!-- Parallax Controllers -->

		</div> <!-- .xt-metabox -->
	<?php
	}
	
	/*** SAVE OPTIONS ***/

	add_action('save_post', 'save_xt_parallax');   

	function save_xt_parallax(){  
		global $post;
		global $post_id;

		if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;

		// Checks the nonce to ensure it was requested by the user...
		if(!isset( $_POST['xt_parallax_meta_nonce']) || !wp_verify_nonce( $_POST['xt_parallax_meta_nonce'], basename( __FILE__ ) ) ) return $post_id;

		// Save the var that controls if parallax is enabled or disabled...
		if(isset($_POST['parallax-section-status']))
			update_post_meta($post->ID, "parallax-section-status", $_POST["parallax-section-status"]);
		else
			update_post_meta($post->ID, "parallax-section-status", '');

		// Save parallax section location...
		update_post_meta($post->ID, "parallax-section-location", $_POST["parallax-section-location"]);

		// Save the parallax content type
		update_post_meta($post->ID, "parallax-section-type", $_POST["parallax-section-type"]);

		// Parallax quote type fields...
		update_post_meta($post->ID, "parallax-section-quote-content", $_POST["parallax-section-quote-content"]);
		update_post_meta($post->ID, "parallax-section-quote-author", $_POST["parallax-section-quote-author"]);

		// Parallax tweet type field...
		update_post_meta($post->ID, "parallax-section-twitter-acc", $_POST["parallax-section-twitter-acc"]);

		// Parallax custom content type field...
		update_post_meta($post->ID, "parallax-section-content", $_POST["parallax-section-content"]);

		// Variables used to generate a shortcode will be saved below...
		update_post_meta($post->ID, "parallax-section-padding-top", $_POST["parallax-section-padding-top"]);
		update_post_meta($post->ID, "parallax-section-padding-bottom", $_POST["parallax-section-padding-bottom"]);

		update_post_meta($post->ID, "parallax-section-margin-top", $_POST["parallax-section-margin-top"]);
		update_post_meta($post->ID, "parallax-section-margin-bottom", $_POST["parallax-section-margin-bottom"]);
		
		update_post_meta($post->ID, "parallax-section-container-type", $_POST["parallax-section-container-type"]);
		update_post_meta($post->ID, "parallax-section-color-scheme", $_POST["parallax-section-color-scheme"]);

		update_post_meta($post->ID, "parallax-section-style", $_POST["parallax-section-style"]);

		update_post_meta($post->ID, "parallax-section-shadow", $_POST["parallax-section-shadow"]);

		update_post_meta($post->ID, "parallax-section-border", $_POST["parallax-section-border"]);

		update_post_meta($post->ID, "parallax-section-bg-custom-color", $_POST["parallax-section-bg-custom-color"]);

		update_post_meta($post->ID, "parallax-section-bg-img", $_POST["parallax-section-bg-img"]);
		update_post_meta($post->ID, "parallax-section-bg-x", $_POST["parallax-section-bg-x"]);
		update_post_meta($post->ID, "parallax-section-bg-y", $_POST["parallax-section-bg-y"]);
		update_post_meta($post->ID, "parallax-section-bg-attachment", $_POST["parallax-section-bg-attachment"]);
		update_post_meta($post->ID, "parallax-section-bg-size", $_POST["parallax-section-bg-size"]);
		update_post_meta($post->ID, "parallax-section-bg-repeat", $_POST["parallax-section-bg-repeat"]);

		update_post_meta($post->ID, "parallax-section-parallax", $_POST["parallax-section-parallax"]);
		update_post_meta($post->ID, "parallax-section-parallax-bg-ratio", $_POST["parallax-section-parallax-bg-ratio"]);

		// Save Page Settings

		// Save the var that controls if parallax is enabled or disabled...
		if(isset($_POST['parallax-section-status-page']))
			update_post_meta($post->ID, "parallax-section-status-page", $_POST["parallax-section-status-page"]);
		else
			update_post_meta($post->ID, "parallax-section-status-page", '');

		// Variables used to generate a shortcode will be saved below...
		update_post_meta($post->ID, "parallax-section-padding-top-page", $_POST["parallax-section-padding-top-page"]);
		update_post_meta($post->ID, "parallax-section-padding-bottom-page", $_POST["parallax-section-padding-bottom-page"]);

		update_post_meta($post->ID, "parallax-section-margin-top-page", $_POST["parallax-section-margin-top-page"]);
		update_post_meta($post->ID, "parallax-section-margin-bottom-page", $_POST["parallax-section-margin-bottom-page"]);
		
		update_post_meta($post->ID, "parallax-section-color-scheme-page", $_POST["parallax-section-color-scheme-page"]);

		update_post_meta($post->ID, "parallax-section-style-page", $_POST["parallax-section-style-page"]);

		update_post_meta($post->ID, "parallax-section-shadow-page", $_POST["parallax-section-shadow-page"]);

		update_post_meta($post->ID, "parallax-section-border-page", $_POST["parallax-section-border-page"]);

		update_post_meta($post->ID, "parallax-section-bg-custom-color-page", $_POST["parallax-section-bg-custom-color-page"]);

		update_post_meta($post->ID, "parallax-section-bg-img-page", $_POST["parallax-section-bg-img-page"]);
		update_post_meta($post->ID, "parallax-section-bg-x-page", $_POST["parallax-section-bg-x-page"]);
		update_post_meta($post->ID, "parallax-section-bg-y-page", $_POST["parallax-section-bg-y-page"]);
		update_post_meta($post->ID, "parallax-section-bg-attachment-page", $_POST["parallax-section-bg-attachment-page"]);
		update_post_meta($post->ID, "parallax-section-bg-size-page", $_POST["parallax-section-bg-size-page"]);
		update_post_meta($post->ID, "parallax-section-bg-repeat-page", $_POST["parallax-section-bg-repeat-page"]);

		update_post_meta($post->ID, "parallax-section-parallax-page", $_POST["parallax-section-parallax-page"]);
		update_post_meta($post->ID, "parallax-section-parallax-bg-ratio-page", $_POST["parallax-section-parallax-bg-ratio-page"]);

	}
	
	/* 
	* Define ctions used to display the parallax area
	* in the page, post or custom post type.
	* Checking where the parallax section will be displayed as well.
	* @since: 1.0
	*/
	add_action('xt_parallax_section_init', 'xt_parallax_manager_check_location');
	function xt_parallax_manager_check_location() {

		remove_action( 'xt_parallax_section_below', 'xt_parallax_manager_display', 15, 1 );
		remove_action( 'xt_parallax_section_above', 'xt_parallax_manager_display', 15, 1 );
		remove_action( 'xt_parallax_section_above_title', 'xt_parallax_manager_display', 15, 1 );

		remove_action( 'xt_parallax_section_below', 'xt_parallax_manager_display_not_close_end', 10, 1 );
		remove_action( 'xt_parallax_section_above', 'xt_parallax_manager_display_not_close', 10, 1 );

		// Check if the parallax page background is enabled...
		$status_page = get_post_meta( get_the_ID(), 'parallax-section-status-page', true );
		if( $status_page == 'on' ) {
			add_action( 'xt_parallax_section_above', 'xt_parallax_manager_display_not_close', 10, 1 );
			add_action( 'xt_parallax_section_below', 'xt_parallax_manager_display_not_close_end', 10, 1 );
		}

		// Check if the parallax is enabled...
		$status = get_post_meta( get_the_ID(), 'parallax-section-status', true );
		if( $status == 'on' ) {

			// Gets parallax's location...
			$location = get_post_meta( get_the_ID(), 'parallax-section-location', true );

			// If location is below add action xt_parallax_section_below
			if($location == 'below')
				add_action( 'xt_parallax_section_below', 'xt_parallax_manager_display', 15, 1 );

			// If location is above add action xt_parallax_section_above
			if($location == 'above')
				add_action( 'xt_parallax_section_above', 'xt_parallax_manager_display', 15, 1 );

			// If location is above tile add action xt_parallax_section_above_title
			if($location == 'above-title')
				add_action( 'xt_parallax_section_above_title', 'xt_parallax_manager_display', 15, 1 );
		}
		
	}

	/* 
	* Display the parallax section and is called
	* by both actions (above and below)
	* @since: 1.0
	*/
	function xt_parallax_manager_display($_id) {

		// Get content vars...
		$type = get_post_meta( $_id, 'parallax-section-type', true );
		$content = '';

		// Build rich content...
		$rich_content = get_post_meta( $_id, 'parallax-section-content', true );
		if($rich_content != '')
			$content .= $rich_content;

		// Build content var...
		if( $type == 'quote' ) {
			
			$quote_content = get_post_meta( $_id, 'parallax-section-quote-content', true );
			$quote_author = get_post_meta( $_id, 'parallax-section-quote-author', true );

			// Building quote block...
			if($quote_content != '')
				$content .= apply_filters('xt_parallax_section_quote', '<div class="xt-parallax-section-quote">' . $quote_content . '</div>', $quote_content );

			// Building quote author...
			if($quote_author != '')
				$content .= apply_filters('xt_parallax_section_quote_author', '<div class="xt-parallax-section-quote-author">' . $quote_author . '</div>', $quote_author );
		}
		elseif( $type == 'tweet') {
			
			$twitter_acc = get_post_meta( $_id, 'parallax-section-twitter-acc', true );
			
			// Build tweet content...
			if($twitter_acc != '') {
				$tweetSC = '[rotatingtweets screen_name="'.$twitter_acc.'" include_rts="1" tweet_count="1" no_rotate="1" show_follow="1" show_meta_via="0" show_meta_screen_name="0"]';
				$content .=  apply_filters('xt_parallax_section_tweet', '<div class="xt-parallax-section-tweet">' . do_shortcode( $tweetSC ) . '</div>', $tweetSC );
			}
		}

		// Get parallax options vars...
		$shortcodeWrapperStart = '[xt_wrapper';
		$shortcodeWrapperEnd = '[/xt_wrapper]';

		// Build parallax shortcode...

			// Paddings
			$padding_top = get_post_meta( $_id, 'parallax-section-padding-top', true );
			if( $padding_top != '' )
				$shortcodeWrapperStart .= ' padding_top="'.$padding_top.'"';

			$padding_bottom = get_post_meta( $_id, 'parallax-section-padding-bottom', true );
			if( $padding_bottom != '' )
				$shortcodeWrapperStart .= ' padding_bottom="'.$padding_bottom.'"';

			// Margins
			$margin_top = get_post_meta( $_id, 'parallax-section-margin-top', true );
			if( $margin_top != '' )
				$shortcodeWrapperStart .= ' margin_top="'.$margin_top.'"';

			$margin_bottom = get_post_meta( $_id, 'parallax-section-margin-bottom', true );
			if( $margin_bottom != '' )
				$shortcodeWrapperStart .= ' margin_bottom="'.$margin_bottom.'"';

			// Container Configs
			$container_type = get_post_meta( $_id, 'parallax-section-container-type', true );
			if( $container_type == 'full' )
				$shortcodeWrapperStart .= ' container_type="full"';
			else {
				$content = '<div class="container xt-parallax-section-container">' . $content . '</div>';
			}

			$color_scheme = get_post_meta( $_id, 'parallax-section-color-scheme', true );
			if( $color_scheme != '' )
				$shortcodeWrapperStart .= ' color_scheme="'.$color_scheme.'"';

			$style = get_post_meta( $_id, 'parallax-section-style', true );
			if( $style != '' )
				$shortcodeWrapperStart .= ' style="'.$style.'"';

			$shadow = get_post_meta( $_id, 'parallax-section-shadow', true );
			if( $shadow != '' )
				$shortcodeWrapperStart .= ' shadow="'.$shadow.'"';

			$border = get_post_meta( $_id, 'parallax-section-border', true );
			if( $border != '' )
				$shortcodeWrapperStart .= ' border="'.$border.'"';

			$bg_custom_color = get_post_meta( $_id, 'parallax-section-bg-custom-color', true );
			if( $bg_custom_color != '' )
				$shortcodeWrapperStart .= ' bg_custom_color="'.$bg_custom_color.'"';

			// Background Image Configs
			$bg_img = get_post_meta( $_id, 'parallax-section-bg-img', true );
			if( $bg_img != '' )
				$shortcodeWrapperStart .= ' bg_img="'.$bg_img.'"';

			$bg_x = get_post_meta( $_id, 'parallax-section-bg-x', true );
			if( $bg_x != '' )
				$shortcodeWrapperStart .= ' bg_x="'.$bg_x.'"';

			$bg_y = get_post_meta( $_id, 'parallax-section-bg-y', true );
			if( $bg_y != '' )
				$shortcodeWrapperStart .= ' bg_y="'.$bg_y.'"';

			$bg_attachment = get_post_meta( $_id, 'parallax-section-bg-attachment', true );
			if( $bg_attachment != '' )
				$shortcodeWrapperStart .= ' bg_attachment="'.$bg_attachment.'"';

			$bg_size = get_post_meta( $_id, 'parallax-section-bg-size', true );
			if( $bg_size != '' )
				$shortcodeWrapperStart .= ' bg_size="'.$bg_size.'"';

			$bg_repeat = get_post_meta( $_id, 'parallax-section-bg-repeat', true );
			if( $bg_repeat != '' )
				$shortcodeWrapperStart .= ' bg_repeat="'.$bg_repeat.'"';

			// Parallax configuration
			$parallax = get_post_meta( $_id, 'parallax-section-parallax', true );
			if( $parallax != '' )
				$shortcodeWrapperStart .= ' parallax="'.$parallax.'"';

			$parallax_bg_ratio = get_post_meta( $_id, 'parallax-section-parallax-bg-ratio', true );
			if( $parallax_bg_ratio != '' )
				$shortcodeWrapperStart .= ' parallax_bg_ratio="'.$parallax_bg_ratio.'"';

			// Custom classes used remove JS effects
			$shortcodeWrapperStart .= ' custom_class="xt-parallax-section"';

		// Closes the shortcode start var...
		$shortcodeWrapperStart .= ']';

		// Display result...

		echo do_shortcode( $shortcodeWrapperStart . $content . $shortcodeWrapperEnd );
	}

	/* 
	* Display the parallax section and is called
	* by both actions (above and below)
	* @since: 1.0
	*/
	function xt_parallax_manager_display_not_close($_id) {

		// Get parallax options vars...
		$shortcodeWrapperStart = '[xt_wrapper';
		$shortcodeWrapperEnd = '[/xt_wrapper]';

		// Build parallax shortcode...

			// Paddings
			$padding_top = get_post_meta( $_id, 'parallax-section-padding-top-page', true );
			if( $padding_top != '' )
				$shortcodeWrapperStart .= ' padding_top="'.$padding_top.'"';

			$padding_bottom = get_post_meta( $_id, 'parallax-section-padding-bottom-page', true );
			if( $padding_bottom != '' )
				$shortcodeWrapperStart .= ' padding_bottom="'.$padding_bottom.'"';

			// Margins
			$margin_top = get_post_meta( $_id, 'parallax-section-margin-top-page', true );
			if( $margin_top != '' )
				$shortcodeWrapperStart .= ' margin_top="'.$margin_top.'"';

			$margin_bottom = get_post_meta( $_id, 'parallax-section-margin-bottom-page', true );
			if( $margin_bottom != '' )
				$shortcodeWrapperStart .= ' margin_bottom="'.$margin_bottom.'"';

			// Container Configs
			$shortcodeWrapperStart .= ' container_type="'.$margin_bottom.'"';

			$color_scheme = get_post_meta( $_id, 'parallax-section-color-scheme-page', true );
			if( $color_scheme != '' )
				$shortcodeWrapperStart .= ' color_scheme="'.$color_scheme.'"';

			$style = get_post_meta( $_id, 'parallax-section-style-page', true );
			if( $style != '' )
				$shortcodeWrapperStart .= ' style="'.$style.'"';

			$shadow = get_post_meta( $_id, 'parallax-section-shadow-page', true );
			if( $shadow != '' )
				$shortcodeWrapperStart .= ' shadow="'.$shadow.'"';

			$border = get_post_meta( $_id, 'parallax-section-border-page', true );
			if( $border != '' )
				$shortcodeWrapperStart .= ' border="'.$border.'"';

			$bg_custom_color = get_post_meta( $_id, 'parallax-section-bg-custom-color-page', true );
			if( $bg_custom_color != '' )
				$shortcodeWrapperStart .= ' bg_custom_color="'.$bg_custom_color.'"';

			// Background Image Configs
			$bg_img = get_post_meta( $_id, 'parallax-section-bg-img-page', true );
			if( $bg_img != '' )
				$shortcodeWrapperStart .= ' bg_img="'.$bg_img.'"';

			$bg_x = get_post_meta( $_id, 'parallax-section-bg-x-page', true );
			if( $bg_x != '' )
				$shortcodeWrapperStart .= ' bg_x="'.$bg_x.'"';

			$bg_y = get_post_meta( $_id, 'parallax-section-bg-y-page', true );
			if( $bg_y != '' )
				$shortcodeWrapperStart .= ' bg_y="'.$bg_y.'"';

			$bg_attachment = get_post_meta( $_id, 'parallax-section-bg-attachment-page', true );
			if( $bg_attachment != '' )
				$shortcodeWrapperStart .= ' bg_attachment="'.$bg_attachment.'"';

			$bg_size = get_post_meta( $_id, 'parallax-section-bg-size-page', true );
			if( $bg_size != '' )
				$shortcodeWrapperStart .= ' bg_size="'.$bg_size.'"';

			$bg_repeat = get_post_meta( $_id, 'parallax-section-bg-repeat-page', true );
			if( $bg_repeat != '' )
				$shortcodeWrapperStart .= ' bg_repeat="'.$bg_repeat.'"';

			// Parallax configuration
			$parallax = get_post_meta( $_id, 'parallax-section-parallax-page', true );
			if( $parallax != '' )
				$shortcodeWrapperStart .= ' parallax="'.$parallax.'"';

			$parallax_bg_ratio = get_post_meta( $_id, 'parallax-section-parallax-bg-ratio-page', true );
			if( $parallax_bg_ratio != '' )
				$shortcodeWrapperStart .= ' parallax_bg_ratio="'.$parallax_bg_ratio.'"';

			// Custom classes used remove JS effects
			$shortcodeWrapperStart .= ' custom_class="xt-parallax-section"';

			// Not close divs
			$shortcodeWrapperStart .= ' not_close="yes"';

		// Closes the shortcode start var...
		$shortcodeWrapperStart .= ']';

		// Display result...

		echo do_shortcode($shortcodeWrapperStart.$shortcodeWrapperEnd);
	}

	/* 
	* Display the parallax section end divs
	* by both actions (above and below)
	* @since: 1.0
	*/
	function xt_parallax_manager_display_not_close_end($_id) {

		echo '</div>';
	}