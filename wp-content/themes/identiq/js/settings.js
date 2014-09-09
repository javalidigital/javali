// Sticky nav

jQuery(window).load(function(){
  jQuery("#mainnav").sticky({ topSpacing: 0 });
});


jQuery(document).ready(function(){

	// Start fixed header
	jQuery("#mainnav").sticky({ topSpacing: 0 });

	// Go to present hashtags
	if(window.location.hash) {
		//console.log(window.location.hash);
		jQuery(document).scrollTop( jQuery(window.location.hash).offset().top );
	} else {
		// Fragment doesn't exist
	}

	// Smooth scrolling to internal anchors
	jQuery('#mainnav a[href*=#]:not([href=#]), #topnav a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
	        || location.hostname == this.hostname) {

	        var target = jQuery(this.hash);
	        target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
	           if (target.length) {
				jQuery('html,body').animate({
					scrollTop: target.offset().top
				}, 600);

				window.location.hash = this.hash;
	            return false;
	        }
	    }
	});

	// ScrollSpy automatically updates nav targets based on scroll position
	jQuery('body').scrollspy({ target: '#fluid-nav-wrapper' })

});
