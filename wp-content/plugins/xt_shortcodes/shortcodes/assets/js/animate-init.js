/*
 * Viewport - jQuery selectors for finding elements in viewport
 *
 * Copyright (c) 2008-2009 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Project home:
 *  http://www.appelsiini.net/projects/viewport
 *
 */

(function($) {

	$.belowthefold = function(element, settings) {
		var fold = $(window).height() + $(window).scrollTop();
		return fold <= $(element).offset().top - settings.threshold;
	};
	$.abovethetop = function(element, settings) {
		var top = $(window).scrollTop();
		return top >= $(element).offset().top + $(element).height() - settings.threshold;
	};
	$.rightofscreen = function(element, settings) {
		var fold = $(window).width() + $(window).scrollLeft();
		return fold <= $(element).offset().left - settings.threshold;
	};
	$.leftofscreen = function(element, settings) {
		var left = $(window).scrollLeft();
		return left >= $(element).offset().left + $(element).width() - settings.threshold;
	};
	$.inviewport = function(element, settings) {
		return !$.rightofscreen(element, settings) && !$.leftofscreen(element, settings) && !$.belowthefold(element, settings) && !$.abovethetop(element, settings);
	};

	$.extend($.expr[':'], {
		"below-the-fold": function(a, i, m) {
			return $.belowthefold(a, {threshold : 0});
		},
		"above-the-top": function(a, i, m) {
			return $.abovethetop(a, {threshold : 0});
		},
		"left-of-screen": function(a, i, m) {
			return $.leftofscreen(a, {threshold : 0});
		},
		"right-of-screen": function(a, i, m) {
			return $.rightofscreen(a, {threshold : 0});
		},
		"in-viewport": function(a, i, m) {
			return $.inviewport(a, {threshold : -30});
		}
	});

})(jQuery);

/* Checks if we are not using a mobile device */
if(XT_IS_MOBILE == false) {

	function run_animated_elements() {
			jQuery(".xt-animated-element:not('.animated'):in-viewport").each(function () {
				var x = jQuery(this).attr('data-anim');
				jQuery(this).addClass(x + ' animated');
			});
	}

	/* When clicking in tabs */
	jQuery('.xt_tabs_framed a, .xt_tabs_button a, .xt_tabs_vertical a, .accordion-title a, .toggle-title a').on('click', function() {
		run_animated_elements();
	});

	run_animated_elements();

	if (!jQuery("html").hasClass("old-ie")){
		jQuery(window).on("scroll", function () {
			run_animated_elements();
		});
	}
}
/* Ends mobile device check */


/* Odometer Animations */
function run_odometer() {
	jQuery(".odometer:in-viewport").each(function () {
		var x = jQuery(this).attr('data-after');
		jQuery(this).text(x);
	});
};

/* When clicking in tabs */
jQuery('.xt_tabs_framed a, .xt_tabs_button a, .xt_tabs_vertical a, .accordion-title a, .toggle-title a').on('click', function() {
	run_odometer();
});

run_odometer();

if (!jQuery("html").hasClass("old-ie")){
	jQuery(window).on("scroll", function () {
		run_odometer();
	});
}
