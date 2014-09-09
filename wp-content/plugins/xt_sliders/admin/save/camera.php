<?php

if( isset( $_POST["camera-scheme"] ) )
	update_post_meta( $post->ID, "camera-scheme", $_POST["camera-scheme"] );

if( isset( $_POST["camera-slider-mode"] ) )
	update_post_meta( $post->ID, "camera-slider-mode", $_POST["camera-slider-mode"] );
	
if( isset( $_POST["camera-slider-w"] ) )
	update_post_meta( $post->ID, "camera-slider-w", $_POST["camera-slider-w"] );
	
if( isset( $_POST["camera-slider-h"] ) )
	update_post_meta( $post->ID, "camera-slider-h", $_POST["camera-slider-h"] );

if( isset( $_POST["camera-auto-advance"] ) )
	update_post_meta( $post->ID, "camera-auto-advance", $_POST["camera-auto-advance"] );
	
if( isset( $_POST["camera-bar-position"] ) )
	update_post_meta( $post->ID, "camera-bar-position", $_POST["camera-bar-position"] );
	
if( isset( $_POST["camera-fx"] ) )
	update_post_meta( $post->ID, "camera-fx", $_POST["camera-fx"] );
	
if( isset( $_POST["camera-pause-onhover"] ) )
	update_post_meta( $post->ID, "camera-pause-onhover", $_POST["camera-pause-onhover"] );
	
if( isset( $_POST["camera-loader"] ) )
	update_post_meta( $post->ID, "camera-loader", $_POST["camera-loader"] );
	
if( isset( $_POST["camera-navigation"] ) )
	update_post_meta( $post->ID, "camera-navigation", $_POST["camera-navigation"] );
	
if( isset( $_POST["camera-pagination"] ) )
	update_post_meta( $post->ID, "camera-pagination", $_POST["camera-pagination"] );
	
if( isset( $_POST["camera-pie-position"] ) )
	update_post_meta( $post->ID, "camera-pie-position", $_POST["camera-pie-position"] );
	
if( isset( $_POST["camera-portrait"] ) )
	update_post_meta( $post->ID, "camera-portrait", $_POST["camera-portrait"] );
	
if( isset( $_POST["camera-thumbnails"] ) )
	update_post_meta( $post->ID, "camera-thumbnails", $_POST["camera-thumbnails"] );
	
if( isset( $_POST["camera-time"] ) )
	update_post_meta( $post->ID, "camera-time", $_POST["camera-time"] );
	

/***
	SAVE DEFAULT FIELDS
***/

include("_default.php");