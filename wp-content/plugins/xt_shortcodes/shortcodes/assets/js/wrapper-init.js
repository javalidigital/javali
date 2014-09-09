jQuery(document).ready(function() {

	/* Calculate Real Padding to be used in the Wrappers */

	function xt_wrapper_recalculate_margins() {
		var window_w = jQuery(window).width();
		var container_w = jQuery('.container').width();

		var space = (window_w - container_w) / 2;

		jQuery('.xt-full-width-wrapper:not(.xt-parallax-section)').each(function(e, i) {

			jQuery(this).css('padding-left', ( space ) + 'px');
			jQuery(this).css('padding-right', ( space ) + 'px');
			jQuery(this).css('margin-left', '-' + ( space ) + 'px');

		});

		jQuery('.xt-wrapper-container-full').each(function(e, i) {

			jQuery(this).css('padding-left', '0px');
			jQuery(this).css('padding-right', '0px');
			jQuery(this).css('width', window_w + 'px');
			jQuery(this).css('margin-left', '-' + ( space ) + 'px');

		});
	}

	xt_wrapper_recalculate_margins();

	jQuery(window).resize(function() {
		xt_wrapper_recalculate_margins();
	});

	/* Adds Parallax to Sections requiring it */

	jQuery('.xt-wrapper-parallax').stellar({
		scrollProperty: 'position', /* transform */
		horizontalScrolling: false,
		responsive: true,
		parallaxBackgrounds: true,
		parallaxElements: false
	});

});