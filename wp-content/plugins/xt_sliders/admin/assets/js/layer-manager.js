/**
	SLIDER REVOLUTION LAYER MANAGER
**/

var LM_CURRENT_DELAY = 300;
var LM_CURRENT_LAYER_ID = null;
var LM_ID_COUNTER = 0;
var LM_SLIDER_CALL = null;
var LM_ZINDEX = 2;
var LM_LAYERS_COUNTER = 0;

jQuery(document).ready(function($) {

	/** REMOVE BELOW LATER **/

	/*
	LM_SLIDER_CALL = 0; // Remove it later

	jQuery("#data-from-layer").val( jQuery(".dc-input #hidden-"+LM_SLIDER_CALL).val() );

	var bgURL = jQuery("#rev-slider-" + LM_SLIDER_CALL + " .dc-main-image img").attr("src");

	jQuery(".layer-slide-area .slide-area").css("background-image", "url(" + bgURL + ")");
	*/

	/** REMOVE ABOVE LATER **/


	/* calling the editor box */
	jQuery(".dc-input .call-layer-editor").live("click", function() {

		jQuery(".layer-manager-modal").css("display", "block");

		LM_SLIDER_CALL = jQuery(this).attr("rel");

		var fromSlideCode = jQuery(".dc-input #hidden-"+LM_SLIDER_CALL).val();

		jQuery("#data-from-layer").val( fromSlideCode );

		var bgURL = jQuery("#rev-slider-" + LM_SLIDER_CALL + " .dc-main-image img").attr("src");

		jQuery(".layer-slide-area .slide-area").css("background-image", "url(" + bgURL + ")");

		if(fromSlideCode != "") {

			LM_CURRENT_DELAY = 0;

			var slideCodes = fromSlideCode.split("*;*");

			for(var i = 0; i < slideCodes.length - 1; i++) {

				var opts = slideCodes[i].split(";;");

				/* add to layer list & slide area */

				if(opts[0] == "text") {

					jQuery("#layers-list").append('<div class="layer-link" id="layer-link-'+LM_ID_COUNTER+'" rel="'+LM_ID_COUNTER+'"><a href="#" id="l-'+LM_ID_COUNTER+'" rel="'+LM_ID_COUNTER+'"><span>'+opts[16]+'</span></a><input type="text" disabled="disabled" id="delay-'+LM_ID_COUNTER+'" value="'+opts[8]+'" /><input type="hidden" id="data-layer-'+LM_ID_COUNTER+'" value="'+slideCodes[i]+'" /></div>');
					
					jQuery(".layer-slide-area .slide-area").append('<div class="slide-layer tp-caption '+opts[2]+' ui-draggable" rel="'+LM_ID_COUNTER+'" style="left:'+opts[5]+'px;top:'+opts[6]+'px;z-index:'+LM_ZINDEX+';position:absolute;" id="slide-layer-'+LM_ID_COUNTER+'">'+opts[16]+'</div>');

					jQuery(".layer-slide-area .slide-area #slide-layer-"+LM_ID_COUNTER).draggable( { stop: function(){
						jQuery("#layer-fields #lm-x").val( jQuery(this).position().left );
						jQuery("#layer-fields #lm-y").val( jQuery(this).position().top );
						lm_regenerate();
					} } );

				}

				else if(opts[0] == "image") {

					jQuery("#layers-list").append('<div class="layer-link" id="layer-link-'+LM_ID_COUNTER+'" rel="'+LM_ID_COUNTER+'"><a href="#" id="l-'+LM_ID_COUNTER+'" rel="'+LM_ID_COUNTER+'"><span>'+opts[1]+'</span></a><input type="text" disabled="disabled" id="delay-'+LM_ID_COUNTER+'" value="'+opts[8]+'" /><input type="hidden" id="data-layer-'+LM_ID_COUNTER+'" value="'+slideCodes[i]+'" /></div>');
					
					jQuery(".layer-slide-area .slide-area").append('<div class="slide-layer slider-layer-image ui-draggable" rel="'+LM_ID_COUNTER+'" style="left:'+opts[5]+'px;top:'+opts[6]+'px;z-index:'+LM_ZINDEX+';position:absolute;" id="slide-layer-'+LM_ID_COUNTER+'"><img src="'+opts[9]+'" alt="IMAGE" /></div>');

					jQuery(".layer-slide-area .slide-area #slide-layer-"+LM_ID_COUNTER).draggable( { stop: function(){
						jQuery("#layer-fields #lm-x").val( jQuery(this).position().left );
						jQuery("#layer-fields #lm-y").val( jQuery(this).position().top );
						lm_regenerate();
					} } );

				}

				else if(opts[0] == "video") {

					jQuery("#layers-list").append('<div class="layer-link" id="layer-link-'+LM_ID_COUNTER+'" rel="'+LM_ID_COUNTER+'"><a href="#" id="l-'+LM_ID_COUNTER+'" rel="'+LM_ID_COUNTER+'"><span>'+opts[1]+'</span></a><input type="text" disabled="disabled" id="delay-'+LM_ID_COUNTER+'" value="'+opts[8]+'" /><input type="hidden" id="data-layer-'+LM_ID_COUNTER+'" value="'+slideCodes[i]+'" /></div>');
					
					jQuery(".layer-slide-area .slide-area").append('<div class="slide-layer slider-layer-video ui-draggable" rel="'+LM_ID_COUNTER+'" style="left:'+opts[5]+'px;top:'+opts[6]+'px;width: '+opts[14]+'px; height:'+opts[15]+'px;z-index:'+LM_ZINDEX+';position:absolute;" id="slide-layer-'+LM_ID_COUNTER+'"></div>');
					
					jQuery(".layer-slide-area .slide-area #slide-layer-"+LM_ID_COUNTER).draggable( { stop: function(){
						jQuery("#layer-fields #lm-x").val( jQuery(this).position().left );
						jQuery("#layer-fields #lm-y").val( jQuery(this).position().top );
						lm_regenerate();
					} } );

				}

				if(opts[8] > LM_CURRENT_DELAY)
					LM_CURRENT_DELAY = parseInt(opts[8]);

				LM_ID_COUNTER++;
				LM_LAYERS_COUNTER++;
				LM_ZINDEX++;

			}

			LM_CURRENT_DELAY += 300;

			lm_show_layer_list();

			lm_savelayers();
		}

		return false;
	});

	/* closing modal box */

	function lm_closemodal() {
		jQuery(".layer-manager-modal").css("display", "none");

		LM_SLIDER_CALL = null;
		LM_CURRENT_DELAY = 300;
		LM_ID_COUNTER = 0;
		LM_SLIDER_CALL = null;
		LM_ZINDEX = 2;
		LM_LAYERS_COUNTER = 0

		jQuery(".layer-slide-area .slide-area").css("background-image", "none");

		jQuery("#layers-list .layer-link").remove();
		jQuery(".slide-area .slide-layer").remove();

		lm_hide_layer_list();
		lm_hide_layer_opts();

	}

	jQuery(".layer-manager-close").live("click", function() {

		lm_closemodal();

		return false;
	});

	/* save data to slide caller */
	jQuery("#save-layer-settings").live("click", function() {

		jQuery(".dc-input #hidden-"+LM_SLIDER_CALL).val( jQuery("#data-from-layer").val() );

		lm_closemodal();

		return false;
	});

	/* add new layers hooks */

	jQuery(".layer-controls #add-layer").live("click", function() {

		lm_new_layer("text");

		return false;
	});

	jQuery(".layer-controls #add-image-layer").live("click", function() {

		lm_new_layer("image");

		return false;
	});

	jQuery(".layer-controls #add-video-layer").live("click", function() {

		lm_new_layer("video");

		return false;
	});

	/* show / hide layer layer list */

		function lm_show_layer_list() {
			jQuery("#layers-list-box #layers-list").css("display", "block");
			jQuery("#layers-list-box .layer-error").css("display", "none");
		}

		function lm_hide_layer_list () {
			jQuery("#layers-list-box #layers-list").css("display", "none");
			jQuery("#layers-list-box .layer-error").css("display", "block");
		}

	/* show / hide layer opts */

		function lm_show_layer_opts() {
			jQuery("#layer-params #layer-fields").css("display", "block");
			jQuery("#layer-params .layer-error").css("display", "none");
		}

		function lm_hide_layer_opts() {
			jQuery("#layer-params #layer-fields").css("display", "none");
			jQuery("#layer-params .layer-error").css("display", "block");
		}

	/* read layers */

	function lm_read_layers() {

		/* create layers at list increasing LM_ID_COUNTER */



		/* display layers at slide area */



		/* turn layers list visible */

		if(LM_LAYERS_COUNTER > 0) {
			lm_show_layer_list();
		}
		else {
			lm_hide_layer_list();
		}

		/* update save field */


	}

	/* add new layer */

	function lm_new_layer(type) {

		/*
		text;;Title;;;;stf;;easeOutBack;;100;;100;;300;;'+LM_CURRENT_DELAY+';;;;;;;;;;;;;;;;;;
		*/

		if(type == 'text') {
			jQuery("#layers-list").append('<div class="layer-link" id="layer-link-'+LM_ID_COUNTER+'" rel="'+LM_ID_COUNTER+'"><a href="#" id="l-'+LM_ID_COUNTER+'" rel="'+LM_ID_COUNTER+'"><span>Title</span></a><input type="text" disabled="disabled" id="delay-'+LM_ID_COUNTER+'" value="'+LM_CURRENT_DELAY+'" /><input type="hidden" id="data-layer-'+LM_ID_COUNTER+'" value="text;;Title;;big_white;;fade;;easeOutBack;;100;;100;;300;;'+LM_CURRENT_DELAY+';;;;;;;;;;;;;;;;Title;;" /></div>');
			lm_new_text();
		}

		if(type == 'video') {
			jQuery("#layers-list").append('<div class="layer-link" id="layer-link-'+LM_ID_COUNTER+'" rel="'+LM_ID_COUNTER+'"><a href="#" id="l-'+LM_ID_COUNTER+'" rel="'+LM_ID_COUNTER+'"><span>Title</span></a><input type="text" disabled="disabled" id="delay-'+LM_ID_COUNTER+'" value="'+LM_CURRENT_DELAY+'" /><input type="hidden" id="data-layer-'+LM_ID_COUNTER+'" value="video;;Title;;;;fade;;easeOutBack;;100;;100;;300;;'+LM_CURRENT_DELAY+';;;;;;;;;;;;320;;240;;;;" /></div>');
			lm_new_video();
		}

		if(type == 'image') {
			jQuery("#layers-list").append('<div class="layer-link" id="layer-link-'+LM_ID_COUNTER+'" rel="'+LM_ID_COUNTER+'"><a href="#" id="l-'+LM_ID_COUNTER+'" rel="'+LM_ID_COUNTER+'"><span>Title</span></a><input type="text" disabled="disabled" id="delay-'+LM_ID_COUNTER+'" value="'+LM_CURRENT_DELAY+'" /><input type="hidden" id="data-layer-'+LM_ID_COUNTER+'" value="image;;Title;;;;fade;;easeOutBack;;100;;100;;300;;'+LM_CURRENT_DELAY+';;;;;;;;;;;;;;;;;;" /></div>');
			lm_new_image();
		}

		lm_savelayers();

		LM_CURRENT_LAYER_ID = LM_ID_COUNTER;

		lm_focus_layer();

		LM_CURRENT_DELAY += 300;
		LM_ID_COUNTER++;
		LM_LAYERS_COUNTER++;
		LM_ZINDEX++;

		lm_read_layers();

	}

	/* new text to slide */

	function lm_new_text() {
		jQuery(".layer-slide-area .slide-area").append('<div class="slide-layer tp-caption big_white ui-draggable" rel="'+LM_ID_COUNTER+'" style="left:100px;top:100px;z-index:'+LM_ZINDEX+';position:absolute;" id="slide-layer-'+LM_ID_COUNTER+'">Title</div>');
		jQuery('#slide-layer-'+LM_ID_COUNTER).draggable( { stop: function(){
			jQuery("#layer-fields #lm-x").val( jQuery(this).position().left );
			jQuery("#layer-fields #lm-y").val( jQuery(this).position().top );
			lm_regenerate();
		} } );
	}
	
	/* new video to slide */

	function lm_new_video() {
		jQuery(".layer-slide-area .slide-area").append('<div class="slide-layer slider-layer-video ui-draggable" rel="'+LM_ID_COUNTER+'" style="left:100px;top:100px;width: 320px; height:240px;z-index:'+LM_ZINDEX+';position:absolute;" id="slide-layer-'+LM_ID_COUNTER+'"></div>');
		jQuery('#slide-layer-'+LM_ID_COUNTER).draggable( { stop: function(){
			jQuery("#layer-fields #lm-x").val( jQuery(this).position().left );
			jQuery("#layer-fields #lm-y").val( jQuery(this).position().top );
			lm_regenerate();
		} } );
	}

	/* new image to slide */

	function lm_new_image() {
		jQuery(".layer-slide-area .slide-area").append('<div class="slide-layer slider-layer-image ui-draggable" rel="'+LM_ID_COUNTER+'" style="left:100px;top:100px;z-index:'+LM_ZINDEX+';position:absolute;" id="slide-layer-'+LM_ID_COUNTER+'"><img src="" alt="IMAGE" /></div>');
		jQuery('#slide-layer-'+LM_ID_COUNTER).draggable( { stop: function(){
			jQuery("#layer-fields #lm-x").val( jQuery(this).position().left );
			jQuery("#layer-fields #lm-y").val( jQuery(this).position().top );
			lm_regenerate();
		} } );
	}

	/* focus on specific layer */

	function lm_focus_layer() {

		if(LM_CURRENT_LAYER_ID != null) {

			jQuery(".layers-inner .layer-slide-area .slide-layer.layer-selected").removeClass("layer-selected");
			jQuery('#slide-layer-'+LM_CURRENT_LAYER_ID).addClass("layer-selected");

			lm_show_layer_opts();

			var opts = jQuery("#layers-list #data-layer-" + LM_CURRENT_LAYER_ID).val().split(";;");

			jQuery("#layer-params #layer-fields").removeClass("layer-image layer-text layer-video");

			jQuery("#layer-params #layer-fields").addClass("layer-"+opts[0]);

			if(opts[0] == "text") {

				jQuery("#layer-fields #lm-type").val(opts[0]);
				jQuery("#layer-fields #lm-caption").val(opts[16]);
				jQuery("#layer-fields #lm-style").val(opts[2]);
				jQuery("#layer-fields #lm-anim").val(opts[3]);
				jQuery("#layer-fields #lm-easing").val(opts[4]);
				jQuery("#layer-fields #lm-x").val(opts[5]);
				jQuery("#layer-fields #lm-y").val(opts[6]);
				jQuery("#layer-fields #lm-speed").val(opts[7]);
				jQuery("#layer-fields #lm-delay").val(opts[8]);

				lm_reflectslide();

			}
			else if(opts[0] == "image") {

				jQuery("#layer-fields #lm-type").val(opts[0]);
				jQuery("#layer-fields #lm-text").val(opts[1]);
				jQuery("#layer-fields #lm-style").val(opts[2]);
				jQuery("#layer-fields #lm-anim").val(opts[3]);
				jQuery("#layer-fields #lm-easing").val(opts[4]);
				jQuery("#layer-fields #lm-x").val(opts[5]);
				jQuery("#layer-fields #lm-y").val(opts[6]);
				jQuery("#layer-fields #lm-speed").val(opts[7]);
				jQuery("#layer-fields #lm-delay").val(opts[8]);
				jQuery("#layer-fields #lm-image").val(opts[9]);
				jQuery("#layer-fields #lm-link").val(opts[10]);
				jQuery("#layer-fields #lm-target").val(opts[11]);

				lm_reflectslide();

			}
			else if(opts[0] == "video") {

				jQuery("#layer-fields #lm-type").val(opts[0]);
				jQuery("#layer-fields #lm-text").val(opts[1]);
				jQuery("#layer-fields #lm-style").val(opts[2]);
				jQuery("#layer-fields #lm-anim").val(opts[3]);
				jQuery("#layer-fields #lm-easing").val(opts[4]);
				jQuery("#layer-fields #lm-x").val(opts[5]);
				jQuery("#layer-fields #lm-y").val(opts[6]);
				jQuery("#layer-fields #lm-speed").val(opts[7]);
				jQuery("#layer-fields #lm-delay").val(opts[8]);
				jQuery("#layer-fields #lm-vimeo").val(opts[12]);
				jQuery("#layer-fields #lm-yt").val(opts[13]);
				jQuery("#layer-fields #lm-videow").val(opts[14]);
				jQuery("#layer-fields #lm-videoh").val(opts[15]);

				lm_reflectslide();
			}


		}
		else {
			jQuery("#layer-params #layer-fields").css("display", "none");
			jQuery("#layer-params .layer-error").css("display", "block");
		}

	}


	/* update fields */

	function lm_regenerate() {
		if(LM_CURRENT_LAYER_ID != null) {
			var finalLayer = '';

			finalLayer += jQuery("#layer-fields #lm-type").val() + ';;';
			finalLayer += jQuery("#layer-fields #lm-text").val() + ';;';
			finalLayer += jQuery("#layer-fields #lm-style").val() + ';;';
			finalLayer += jQuery("#layer-fields #lm-anim").val() + ';;';
			finalLayer += jQuery("#layer-fields #lm-easing").val() + ';;';
			finalLayer += jQuery("#layer-fields #lm-x").val() + ';;';
			finalLayer += jQuery("#layer-fields #lm-y").val() + ';;';
			finalLayer += jQuery("#layer-fields #lm-speed").val() + ';;';
			finalLayer += jQuery("#layer-fields #lm-delay").val() + ';;';
			finalLayer += jQuery("#layer-fields #lm-image").val() + ';;';
			finalLayer += jQuery("#layer-fields #lm-link").val() + ';;';
			finalLayer += jQuery("#layer-fields #lm-target").val() + ';;';
			finalLayer += jQuery("#layer-fields #lm-vimeo").val() + ';;';
			finalLayer += jQuery("#layer-fields #lm-yt").val() + ';;';
			finalLayer += jQuery("#layer-fields #lm-videow").val() + ';;';
			finalLayer += jQuery("#layer-fields #lm-videoh").val() + ';;';
			finalLayer += jQuery("#layer-fields #lm-caption").val() + ';;';
			
			jQuery("#layers-list #data-layer-" + LM_CURRENT_LAYER_ID).val(finalLayer);
			if(jQuery("#layer-fields #lm-type").val() == "text")
				jQuery("#layers-list #l-" + LM_CURRENT_LAYER_ID).text(jQuery("#layer-fields #lm-caption").val().substr(0, 35));
			else
				jQuery("#layers-list #l-" + LM_CURRENT_LAYER_ID).text(jQuery("#layer-fields #lm-text").val().substr(0, 35));

			jQuery("#layers-list #delay-" + LM_CURRENT_LAYER_ID).val(jQuery("#layer-fields #lm-delay").val());

			lm_savelayers();
		}
	}

	function lm_reflectslide() {

		if(LM_CURRENT_LAYER_ID != null) {

			var type = jQuery("#layer-fields #lm-type").val();

			var _j = jQuery(".slide-area #slide-layer-" + LM_CURRENT_LAYER_ID);

			if(type == "text") {

				_j.html(jQuery("#layer-fields #lm-caption").val());

				_j.removeClass( "default-heading subheader-gray paragraph opacity-dark very-big very-big-dark");

				_j.addClass(jQuery("#layer-fields #lm-style").val());

				_j.css("left", jQuery("#layer-fields #lm-x").val() + "px");
				_j.css("top", jQuery("#layer-fields #lm-y").val() + "px");
			}
			else if(type == "image") {

				_j.removeClass( "default-heading subheader-gray paragraph opacity-dark very-big very-big-dark");

				_j.addClass(jQuery("#layer-fields #lm-style").val());

				_j.css("left", jQuery("#layer-fields #lm-x").val() + "px");
				_j.css("top", jQuery("#layer-fields #lm-y").val() + "px");

				_j.find("img").attr("src", jQuery("#layer-fields #lm-image").val() );

			}
			else if(type == "video") {

				_j.removeClass( "default-heading subheader-gray paragraph opacity-dark very-big very-big-dark");

				_j.addClass(jQuery("#layer-fields #lm-style").val());

				_j.css("left", jQuery("#layer-fields #lm-x").val() + "px");
				_j.css("top", jQuery("#layer-fields #lm-y").val() + "px");

				_j.css("width", jQuery("#layer-fields #lm-videow").val() + "px");
				_j.css("height", jQuery("#layer-fields #lm-videoh").val() + "px");


			}

		}
	}

	jQuery("#layer-params #layer-fields select, #layer-params #layer-fields input, #layer-params #layer-fields textarea").live("change", function() {
		lm_regenerate();
		lm_reflectslide();
	});

	jQuery("#layer-params #layer-fields input, #layer-params #layer-fields textarea").live("keyup", function() {
		lm_regenerate();
		lm_reflectslide();
	});

	jQuery("#layer-params #layer-fields").bind("updated", function() {
		lm_regenerate();
		lm_reflectslide();
	});

	/* select slides at slider bg */

	jQuery(".layers-inner .layer-slide-area .slide-layer").live("mousedown", function() {

		/*jQuery(".slide-layer.layer-selected").removeClass("layer-selected");
		jQuery(this).addClass("layer-selected");*/

		LM_CURRENT_LAYER_ID = jQuery(this).attr("rel");

		lm_focus_layer();

		return false;
	});

	/* select item from layer list */

	jQuery("#layers-list-box #layers-list .layer-link a").live("click", function() {

		LM_CURRENT_LAYER_ID = jQuery(this).attr("rel");

		lm_focus_layer();

		return false;
	});

	/* sort layer list */

	jQuery("#layers-list-box #layers-list" ).sortable({
		stop: function( event, ui ) {
			lm_sortlayers();
		}
	});
    jQuery("#layers-list-box #layers-list" ).disableSelection();

    function lm_sortlayers() {

    	jQuery("#layers-list .layer-link").each(function(e, i) {

    		var _id = jQuery(this).attr("rel");

    		jQuery(".slide-area #slide-layer-"+_id).css("z-index", LM_ZINDEX);

    		LM_ZINDEX++;

    	});

    	lm_savelayers();
    }

    /* save fields to field at bottom */

    function lm_savelayers() {

    	var savestring = '';

    	jQuery("#layers-list .layer-link").each(function(e, i) {

    		savestring += jQuery(this).find('input[type="hidden"]').val() + '*;*';

    	});

    	/*alert(savestring);*/

    	jQuery(".save-btn #data-from-layer").val(savestring.replace(/\"/g,'\''));
    }

    /* delete selected layer */

    jQuery(".layer-controls #delete-layer").live("click", function() {

    	if(LM_CURRENT_LAYER_ID != null) {

    		if(confirm("Do you really want to delete it?")) {

	    		LM_LAYERS_COUNTER--;

	    		if(LM_CURRENT_DELAY > 300)
	    			LM_CURRENT_DELAY -= 300;

	    		/* delete elements */

	    		jQuery("#layers-list #layer-link-"+LM_CURRENT_LAYER_ID).remove();
	    		jQuery(".slide-area #slide-layer-"+LM_CURRENT_LAYER_ID).remove();

	    		if(LM_LAYERS_COUNTER <= 0) {
	    			lm_hide_layer_list();
	    		}

	    		LM_CURRENT_LAYER_ID = null;
	    		
	    		lm_hide_layer_opts();

	    		lm_read_layers();

	    		lm_savelayers();
	    	}

    	}
    	else {
    		alert("Select a layer before delete.");
    	}

		return false;
	});

});