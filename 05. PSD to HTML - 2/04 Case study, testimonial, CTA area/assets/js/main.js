(function($){
    "use strict";

	jQuery(document).ready(function($){

		$(".case-studies-carousel").owlCarousel({
                margin: 30,
                loop: true,
                dots: true,
                nav: false,
		});

		$(".testimonial-carousel").owlCarousel({
                items: 1,
                loop: true,
                dots: true,
                nav: false,
		});
        
    });

    jQuery(window).load(function(){
     
        
    });
    
}(jQuery));