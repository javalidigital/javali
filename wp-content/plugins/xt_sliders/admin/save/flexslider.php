<?php

if( isset( $_POST["flexslider-slider-mode"] ) )
	update_post_meta( $post->ID, "flexslider-slider-mode", $_POST["flexslider-slider-mode"] );
	
if( isset( $_POST["flexslider-slider-w"] ) )
	update_post_meta( $post->ID, "flexslider-slider-w", $_POST["flexslider-slider-w"] );
	
if( isset( $_POST["flexslider-slider-h"] ) )
	update_post_meta( $post->ID, "flexslider-slider-h", $_POST["flexslider-slider-h"] );

// SAVE FIELDS HERE

if( isset( $_POST["flexslider-animation"] ) )
	update_post_meta( $post->ID, "flexslider-animation", $_POST["flexslider-animation"] );
	
if( isset( $_POST["flexslider-direction"] ) )
	update_post_meta( $post->ID, "flexslider-direction", $_POST["flexslider-direction"] );
	
if( isset( $_POST["flexslider-smoothheight"] ) )
	update_post_meta( $post->ID, "flexslider-smoothheight", $_POST["flexslider-smoothheight"] );
	
if( isset( $_POST["flexslider-slideshow"] ) )
	update_post_meta( $post->ID, "flexslider-slideshow", $_POST["flexslider-slideshow"] );
	
if( isset( $_POST["flexslider-slideshowspeed"] ) )
	update_post_meta( $post->ID, "flexslider-slideshowspeed", $_POST["flexslider-slideshowspeed"] );
	
if( isset( $_POST["flexslider-animationspeed"] ) )
	update_post_meta( $post->ID, "flexslider-animationspeed", $_POST["flexslider-animationspeed"] );
	
if( isset( $_POST["flexslider-pauseonhover"] ) )
	update_post_meta( $post->ID, "flexslider-pauseonhover", $_POST["flexslider-pauseonhover"] );
	
if( isset( $_POST["flexslider-controlnav"] ) )
	update_post_meta( $post->ID, "flexslider-controlnav", $_POST["flexslider-controlnav"] );
	
if( isset( $_POST["flexslider-directionnav"] ) )
	update_post_meta( $post->ID, "flexslider-directionnav", $_POST["flexslider-directionnav"] );

/***
	SAVE DEFAULT FIELDS
***/

include("_default.php");