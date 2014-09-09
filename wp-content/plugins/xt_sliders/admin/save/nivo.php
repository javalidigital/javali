<?php

if( isset( $_POST["nivo-slider-mode"] ) )
	update_post_meta( $post->ID, "nivo-slider-mode", $_POST["nivo-slider-mode"] );
	
if( isset( $_POST["nivo-slider-w"] ) )
	update_post_meta( $post->ID, "nivo-slider-w", $_POST["nivo-slider-w"] );
	
if( isset( $_POST["nivo-slider-h"] ) )
	update_post_meta( $post->ID, "nivo-slider-h", $_POST["nivo-slider-h"] );
	
if( isset( $_POST["nivo-effect"] ) )
	update_post_meta( $post->ID, "nivo-effect", $_POST["nivo-effect"] );
	
if( isset( $_POST["nivo-anim-speed"] ) )
	update_post_meta( $post->ID, "nivo-anim-speed", $_POST["nivo-anim-speed"] );
	
if( isset( $_POST["nivo-pause-time"] ) )
	update_post_meta( $post->ID, "nivo-pause-time", $_POST["nivo-pause-time"] );
	
if( isset( $_POST["nivo-direction-nav"] ) )
	update_post_meta( $post->ID, "nivo-direction-nav", $_POST["nivo-direction-nav"] );
	
if( isset( $_POST["nivo-direction-nav-hide"] ) )
	update_post_meta( $post->ID, "nivo-direction-nav-hide", $_POST["nivo-direction-nav-hide"] );
	
if( isset( $_POST["nivo-control-nav"] ) )
	update_post_meta( $post->ID, "nivo-control-nav", $_POST["nivo-control-nav"] );
	
if( isset( $_POST["nivo-control-nav-thumbs"] ) )
	update_post_meta( $post->ID, "nivo-control-nav-thumbs", $_POST["nivo-control-nav-thumbs"] );

/***
	SAVE DEFAULT FIELDS
***/

include("_default.php");