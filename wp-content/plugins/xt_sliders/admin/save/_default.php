<?php
//if( isset( $_POST["xt_slide"] ) )
	update_post_meta( @$post->ID, "xt_slide", @$_POST["xt_slide"] );

if( isset( $_POST["dc-import"] ) && @$_POST["dc-import"] != '' ) :

	$_values = @$_POST["dc-import"];

	$_values = base64_decode($_values);

	$_values = maybe_unserialize($_values);

	$_values = maybe_unserialize($_values);

	foreach ($_values as $key => $value) {

		update_post_meta( @$post->ID, $key, $_values[$key][0]);

	}

	//update_post_meta( @$post->ID, "slider-type", $_values["slider-type"][0]);
	//update_post_meta( @$post->ID, "dc-import", @$_POST["dc-import"] );
	//update_post_meta( @$post->ID, "slider-type", @$_POST["dc-import"] );

endif;