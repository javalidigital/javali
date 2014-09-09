
jQuery(document).ready(function($) {

	$( ".dc-slides" ).sortable();

	jQuery(".dc-commands .dc-edit").live("click", function() {

		$this = jQuery(this);

		$this.parents(".dc-header").toggleClass("editing");

		$this.parents(".dc-header").siblings(".dc-content-slide").slideToggle("slow");

		return false;
	});

	jQuery(".dc-commands .dc-remove").live("click", function() {

		$this = jQuery(this);

		if(confirm("Do you really want delete this slide?!"))
			$this.parents(".dc-slide").remove();

		return false;
	});

	jQuery(".dc-new-slider .dc-add").live("click", function() {

		$this = jQuery(this);

		var clone = jQuery(".dc-slide-clone").clone();

		clone.removeClass("dc-slide-clone");

		clone.find("input[type='text'], select, textarea, radio, checkbox").each( function(e, i) {
			var v = jQuery(this).attr("name");

			v = v.replace("xt_clone", "xt_slide");
			v = v.replace("[x]", "["+xt_ID+"]");

			jQuery(this).attr("name", v);

		});

		jQuery(".dc-slides").append(clone);

		xt_ID++;

		return false;
	});

	

});