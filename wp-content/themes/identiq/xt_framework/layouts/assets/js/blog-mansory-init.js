/*****************
	Init any type of Portfolio following the configurations
*****************/

jQuery(document).ready(function() {

	/* Mansory Sidebar Init */

	var $container = jQuery('.post-list');

	$container.imagesLoaded( function(){

		/*$container.find(".post:odd").addClass('last');*/
	
		$container.isotope({
			mansory: {
				gutterWidth: 0,

			}
		});

		jQuery(window).on("debouncedresize", function( event ) {
			console.log('fired debounce!');
			$container.isotope( 'reLayout', function() { console.log('rebuilt!'); } );
		});

		jQuery(window).on('flex-ready', function() {
			$container.isotope({
				mansory: {
					gutterWidth: 0,
				}
			});
		});

	});

});