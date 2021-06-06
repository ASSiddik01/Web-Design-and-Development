(function($){
    "use strict";

	jQuery(document).ready(function($){

        $(".homepage-slides").owlCarousel({
                items: 1,
                loop: true,
                dots: true,
                nav: true,
                autoplay: true,
                navText: ["<i class='zmdi zmdi-arrow-left'></i>",
                         "<i class='zmdi zmdi-arrow-right'></i>"],
            });

        $(".case-studies-carousel").owlCarousel({
                margin: 30,
                loop: true,
                dots: true,
                nav: false,
                autoplay: true,
                responsive : {
                    // breakpoint from 0 up
                    0 : {
                        items: 1
                    },
                    // breakpoint from 768 up
                    768 : {
                        items: 2
                    },
                    // breakpoint from 992 up
                    992 : {
                        items: 3
                    }
                }
        });

        $(".testimonial-carousel").owlCarousel({
                items: 1,
                loop: true,
                dots: true,
                nav: false,
                autoplay: true,
        });
        $(".testimonial-carousel-2").owlCarousel({
                items: 1,
                loop: true,
                dots: true,
                nav: false,
                autoplay: true,
        });

        $(".logo-carousel").owlCarousel({
                margin: 30,
                loop: true,
                dots: false,
                nav: false,
                autoplay: true,
                responsive : {
                    // breakpoint from 0 up
                    0 : {
                        items: 2
                    },
                    // breakpoint from 768 up
                    768 : {
                        items: 4
                    },
                    // breakpoint from 992 up
                    992 : {
                        items: 6
                    }
                }
        });

        $(".search-trigger").on('click', function() {
            $(".search-bar-wrap").addClass("active");
        });

        $(".search-close").on('click', function() {
            $(".search-bar-wrap").removeClass("active");
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
        
        $(".video-play-btn").magnificPopup ({
            type:'video'
        });

        $("#traffic-menu").slicknav({
            prependTo: '#mobile-menu-wrap'
        });
    });

    jQuery(window).load(function(){
     
        
    });
    
}(jQuery));