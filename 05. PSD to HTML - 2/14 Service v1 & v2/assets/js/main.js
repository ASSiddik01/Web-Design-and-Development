(function($){
    "use strict";

	jQuery(document).ready(function($){

        $(".homepage-slides").owlCarousel({
                items: 1,
                loop: true,
                dots: true,
                nav: true,
                navText: ["<i class='zmdi zmdi-arrow-left'></i>",
                         "<i class='zmdi zmdi-arrow-right'></i>"],
            });

        $(".case-studies-carousel").owlCarousel({
                items: 3,
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
        $(".testimonial-carousel-2").owlCarousel({
                items: 1,
                loop: true,
                dots: true,
                nav: false,
        });

        $(".logo-carousel").owlCarousel({
                items: 6,
                margin: 30,
                loop: true,
                dots: false,
                nav: false,
        });

        $(".menu-trigger").on('click', function() {
            $(".off-canvas-menu").addClass("show-off-canvas-menu");
            $(".off-canvas-menu-shade").addClass("active");
        });

        $(".menu-close, .off-canvas-menu-shade").on('click', function() {
            $(".off-canvas-menu").removeClass("show-off-canvas-menu");
            $(".off-canvas-menu-shade").removeClass("active");
        });

        $(".single-testimonial-box").hover(function() {
            $(".single-testimonial-box").removeClass('active');
            $(this).addClass('active');
        });
        
        $(".video-play-btn").magnificPopup({
            type:'video'
        });
    });

    jQuery(window).load(function(){
     
        
    });
    
}(jQuery));