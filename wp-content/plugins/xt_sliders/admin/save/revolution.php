<?php

if( isset( $_POST["revolution-slider-mode"] ) )
	update_post_meta( $post->ID, "revolution-slider-mode", $_POST["revolution-slider-mode"] );
	
if( isset( $_POST["revolution-slider-w"] ) )
	update_post_meta( $post->ID, "revolution-slider-w", $_POST["revolution-slider-w"] );
	
if( isset( $_POST["revolution-slider-h"] ) )
	update_post_meta( $post->ID, "revolution-slider-h", $_POST["revolution-slider-h"] );

if( isset( $_POST["revolution-slider-w1"] ) )
	update_post_meta( $post->ID, "revolution-slider-w1", $_POST["revolution-slider-w1"] );

if( isset( $_POST["revolution-slider-w2"] ) )
	update_post_meta( $post->ID, "revolution-slider-w2", $_POST["revolution-slider-w2"] );

if( isset( $_POST["revolution-slider-w3"] ) )
	update_post_meta( $post->ID, "revolution-slider-w3", $_POST["revolution-slider-w3"] );

if( isset( $_POST["revolution-delay"] ) )
	update_post_meta( $post->ID, "revolution-delay", $_POST["revolution-delay"] );
	
if( isset( $_POST["revolution-navigationtype"] ) )
	update_post_meta( $post->ID, "revolution-navigationtype", $_POST["revolution-navigationtype"] );
	
if( isset( $_POST["revolution-navigationarrows"] ) )
	update_post_meta( $post->ID, "revolution-navigationarrows", $_POST["revolution-navigationarrows"] );
	
if( isset( $_POST["revolution-navigationstyle"] ) )
	update_post_meta( $post->ID, "revolution-navigationstyle", $_POST["revolution-navigationstyle"] );
	
if( isset( $_POST["revolution-touchenabled"] ) )
	update_post_meta( $post->ID, "revolution-touchenabled", $_POST["revolution-touchenabled"] );
	
if( isset( $_POST["revolution-navoffsethorizontal"] ) )
	update_post_meta( $post->ID, "revolution-navoffsethorizontal", $_POST["revolution-navoffsethorizontal"] );
	
if( isset( $_POST["revolution-navoffsetvertical"] ) )
	update_post_meta( $post->ID, "revolution-navoffsetvertical", $_POST["revolution-navoffsetvertical"] );
	
if( isset( $_POST["revolution-shadow"] ) )
	update_post_meta( $post->ID, "revolution-shadow", $_POST["revolution-shadow"] );
	
if( isset( $_POST["revolution-onhoverstop"] ) )
	update_post_meta( $post->ID, "revolution-onhoverstop", $_POST["revolution-onhoverstop"] );
	
if( isset( $_POST["revolution-thumbwidth"] ) )
	update_post_meta( $post->ID, "revolution-thumbwidth", $_POST["revolution-thumbwidth"] );
	
if( isset( $_POST["revolution-thumbheight"] ) )
	update_post_meta( $post->ID, "revolution-thumbheight", $_POST["revolution-thumbheight"] );
	
if( isset( $_POST["revolution-thumbamount"] ) )
	update_post_meta( $post->ID, "revolution-thumbamount", $_POST["revolution-thumbamount"] );
	
if( isset( $_POST["revolution-bgcolor"] ) )
	update_post_meta( $post->ID, "revolution-bgcolor", $_POST["revolution-bgcolor"] );

if( isset( $_POST["revolution-usecustomtheme"] ) )
	update_post_meta( $post->ID, "revolution-usecustomtheme", $_POST["revolution-usecustomtheme"] );

/***
	SAVE DEFAULT FIELDS
***/

include("_default.php");