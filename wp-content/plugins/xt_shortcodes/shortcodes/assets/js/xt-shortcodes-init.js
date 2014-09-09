/********************************
	XT SHORTCODES SCRIPT
********************************/

jQuery(document).ready(function($) {

	/* Accordions */

	$('.accordions .accordion-title a').click(function() {

		if($(this).parent().next().is(':hidden')) {

			$(this).parents('.accordions').find(".accordion-title.accordion-active").removeClass('accordion-active').next().slideUp(300);

			$(this).parent().toggleClass('accordion-active').next().slideDown(200);
			
		}

		return false;
	});

	/* Notifications */

	$('.notification-box a.notification-close').click(function() {

		$(this).parent().fadeOut();

		return false;
	});

	/* Toggle */

	$('.toggle .toggle-title a').click(function() {

		$(this).parent().toggleClass("toggle-active");

		$(this).parent().siblings(".toggle-content").slideToggle(200);

		return false;
	});

	/* Skillbar */

	$('.skill-wrapper').each(function(){
		dataprog = $(this).attr('data-value'),
		$(this).find('.skill-progress').animate({ "width" : dataprog + "%"}, dataprog * 20);
	}); 

});