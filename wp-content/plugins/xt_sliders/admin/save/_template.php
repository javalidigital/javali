<?php

if( isset( $_POST["camera-slider-mode"] ) )
	update_post_meta( $post->ID, "camera-slider-mode", $_POST["camera-slider-mode"] );
	
if( isset( $_POST["camera-slider-w"] ) )
	update_post_meta( $post->ID, "camera-slider-w", $_POST["camera-slider-w"] );
	
if( isset( $_POST["camera-slider-h"] ) )
	update_post_meta( $post->ID, "camera-slider-h", $_POST["camera-slider-h"] );

// SAVE FIELDS HERE

/***
	SAVE DEFAULT FIELDS
***/

include("_default.php");