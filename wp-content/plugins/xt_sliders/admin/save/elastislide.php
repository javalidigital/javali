<?php

if( isset( $_POST["elastislide-slider-mode"] ) )
	update_post_meta( $post->ID, "elastislide-slider-mode", $_POST["elastislide-slider-mode"] );
	
if( isset( $_POST["elastislide-slider-w"] ) )
	update_post_meta( $post->ID, "elastislide-slider-w", $_POST["elastislide-slider-w"] );
	
if( isset( $_POST["elastislide-slider-h"] ) )
	update_post_meta( $post->ID, "elastislide-slider-h", $_POST["elastislide-slider-h"] );

// SAVE FIELDS HERE

if( isset( $_POST["elastislide-orientation"] ) )
	update_post_meta( $post->ID, "elastislide-orientation", $_POST["elastislide-orientation"] );

if( isset( $_POST["elastislide-style"] ) )
	update_post_meta( $post->ID, "elastislide-style", $_POST["elastislide-style"] );
	
if( isset( $_POST["elastislide-speed"] ) )
	update_post_meta( $post->ID, "elastislide-speed", $_POST["elastislide-speed"] );
	
if( isset( $_POST["elastislide-minitems"] ) )
	update_post_meta( $post->ID, "elastislide-minitems", $_POST["elastislide-minitems"] );
	

/***
	SAVE DEFAULT FIELDS
***/

include("_default.php");