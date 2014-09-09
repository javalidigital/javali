<?php

if( isset( $_POST["ios-slider-mode"] ) )
	update_post_meta( $post->ID, "ios-slider-mode", $_POST["ios-slider-mode"] );
	
if( isset( $_POST["ios-slider-w"] ) )
	update_post_meta( $post->ID, "ios-slider-w", $_POST["ios-slider-w"] );
	
if( isset( $_POST["ios-slider-h"] ) )
	update_post_meta( $post->ID, "ios-slider-h", $_POST["ios-slider-h"] );

// SAVE FIELDS HERE
if( isset( $_POST["ios-scrollbar"] ) )
	update_post_meta( $post->ID, "ios-scrollbar", $_POST["ios-scrollbar"] );

/*
if( isset( $_POST["ios-scrollbarlocation"] ) )
	update_post_meta( $post->ID, "ios-scrollbarlocation", $_POST["ios-scrollbarlocation"] );
*/

if( isset( $_POST["ios-keyboardcontrols"] ) )
	update_post_meta( $post->ID, "ios-keyboardcontrols", $_POST["ios-keyboardcontrols"] );
	
if( isset( $_POST["ios-autoslide"] ) )
	update_post_meta( $post->ID, "ios-autoslide", $_POST["ios-autoslide"] );
	
if( isset( $_POST["ios-desktopclickdrag"] ) )
	update_post_meta( $post->ID, "ios-desktopclickdrag", $_POST["ios-desktopclickdrag"] );
	
if( isset( $_POST["ios-infinitslider"] ) )
	update_post_meta( $post->ID, "ios-infinitslider", $_POST["ios-infinitslider"] );

/***
	SAVE DEFAULT FIELDS
***/

include("_default.php");