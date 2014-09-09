<?php

// SAVE FIELDS HERE

if( isset( $_POST["kenburn-panel-slider-mode"] ) )
	update_post_meta( $post->ID, "kenburn-panel-slider-mode", $_POST["kenburn-panel-slider-mode"] );
	
if( isset( $_POST["kenburn-panel-slider-w"] ) )
	update_post_meta( $post->ID, "kenburn-panel-slider-w", $_POST["kenburn-panel-slider-w"] );

if( isset( $_POST["kenburn-panel-time"] ) )
	update_post_meta( $post->ID, "kenburn-panel-time", $_POST["kenburn-panel-time"] );
	
if( isset( $_POST["kenburn-panel-thumbwidth"] ) )
	update_post_meta( $post->ID, "kenburn-panel-thumbwidth", $_POST["kenburn-panel-thumbwidth"] );
	
if( isset( $_POST["kenburn-panel-thumbheight"] ) )
	update_post_meta( $post->ID, "kenburn-panel-thumbheight", $_POST["kenburn-panel-thumbheight"] );
	
if( isset( $_POST["kenburn-panel-thumbamount"] ) )
	update_post_meta( $post->ID, "kenburn-panel-thumbamount", $_POST["kenburn-panel-thumbamount"] );
	
if( isset( $_POST["kenburn-panel-thumbstyle"] ) )
	update_post_meta( $post->ID, "kenburn-panel-thumbstyle", $_POST["kenburn-panel-thumbstyle"] );
	
if( isset( $_POST["kenburn-panel-thumbyoffset"] ) )
	update_post_meta( $post->ID, "kenburn-panel-thumbyoffset", $_POST["kenburn-panel-thumbyoffset"] );
	
if( isset( $_POST["kenburn-panel-bulletyoffset"] ) )
	update_post_meta( $post->ID, "kenburn-panel-bulletyoffset", $_POST["kenburn-panel-bulletyoffset"] );
	
if( isset( $_POST["kenburn-panel-hidethumbs"] ) )
	update_post_meta( $post->ID, "kenburn-panel-hidethumbs", $_POST["kenburn-panel-hidethumbs"] );
	
if( isset( $_POST["kenburn-panel-timer"] ) )
	update_post_meta( $post->ID, "kenburn-panel-timer", $_POST["kenburn-panel-timer"] );
	
if( isset( $_POST["kenburn-panel-skin"] ) )
	update_post_meta( $post->ID, "kenburn-panel-skin", $_POST["kenburn-panel-skin"] );
	

/***
	SAVE DEFAULT FIELDS
***/

include("_default.php");