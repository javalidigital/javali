<?php 
//Setup URL to WordPres
$absolute_path = __FILE__;
$path_to_wp = explode( 'wp-content', $absolute_path );
$wp_url = $path_to_wp[0];

//Access WordPress
require_once( $wp_url.'/wp-load.php' );

//URL to TinyMCE plugin folder
$plugin_url = plugins_url("", __FILE__);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
	<div id="xt_wp-dialog">
		<div id="xt_wp-options-buttons" class="clear">
			<div class="alignleft">
			   <p id="description-sc"></p>
			</div>
			<div class="alignright">
			 	<input type="button" id="xt_wp-cancel-button" class="button" name="cancel" value="Cancel" accesskey="C" />
			    <input type="button" id="xt_wp-insert-button" class="button-primary" name="insert" value="Insert" accesskey="I" />
			</div>
			<div class="clear"></div><!--/.clear-->
		</div><!-- #xt_wp-options-buttons(end) -->
		<div id="xt_wp-shortcode-options">
			<div id="shortcode-sample">
				<p style="text-align: center;" id="sample-sc-p"><textarea id="sample-sc"></textarea></p>
			</div>
			<div id="shortcode-preview">
				<p style="text-align: center;" id="preview-sc"><img src="" alt="Preview" /></p>
			</div>
			<table id="xt_wp-options-table" class="widefat">
			</table>
		</div>
		<div class="clear"></div>
		<!--<script type="text/javascript" src="<?php echo $plugin_url; ?>layout/js/tab-control.js"></script>-->
		<script type="text/javascript" src="<?php echo $plugin_url; ?>/layout/js/dialog-js.php"></script>
	</div><!-- #xt_wp-dialog (end) -->
</body>
</html>