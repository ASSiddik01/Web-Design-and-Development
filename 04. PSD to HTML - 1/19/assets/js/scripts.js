(function($){
    "use strict";

    jQuery(document).ready(function($){



      //Slicknav mobile menu
      $("#main-nav").slicknav({
        prependTo:'.mobile-menu-wrap',
        allowParentLinks: true
      });



      //Homepage Slide Carousel
      $(".homepage-slides").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        dots: true,
        navText: ("<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"),
        autoplay: false
      });



      //Teamlist Carousel
      $(".team-list").owlCarousel({
        margin: 30,
        loop: true,
        nav: false,
        dots: true,
        autoplay: false,
        responsive : {
              // breakpoint from 0 up
              0 : {
                items: 1
              },
              // breakpoint from 600 up
              600 : {
                items: 2
              },
              // breakpoint from 1000 up
              1000 : {
                items: 3
              },
            }
        });



        //Testtimonial List Carousel
        $(".testimonial-list").owlCarousel({
        margin: 30,
        loop: true,
        nav: false,
        dots: true,
        autoplay: false,
        responsive : {
              // breakpoint from 0 up
              0 : {
                items: 1
              },
              // breakpoint from 600 up
              600 : {
                items: 2
              },
              // breakpoint from 1000 up
              1000 : {
                items: 2
              },
            }
        });



        //Logo Carousel
        $(".logo-carousel").owlCarousel({
        margin: 30,
        loop: true,
        nav: false,
        dots: false,
        autoplay: false,
        responsive : {
              // breakpoint from 0 up
              0 : {
                items: 2
              },
              // breakpoint from 600 up
              600 : {
                items: 3
              },
              // breakpoint from 1000 up
              1000 : {
                items: 5
              },
            }
      });



      //Progressbar
      $("#web-design-skillbar").circleProgress({
        value: 0.9,
          size: 270,
          thickness: 2,
          fill:'#00778A'
      }).on('circle-animation-progress', function(event, progress) {
          $(this).find('.skil-count-no').html(Math.round(90 * progress) + '<i>%</i>');
        });

        $("#graphic-design-skillbar").circleProgress({
        value: 0.95,
          size: 270,
          thickness: 2,
          fill:'#00778A'
      }).on('circle-animation-progress', function(event, progress) {
          $(this).find('.skil-count-no').html(Math.round(95 * progress) + '<i>%</i>');
        });

        $("#digital-marketing-skillbar").circleProgress({
        value: 0.84,
          size: 270,
          thickness: 2,
          fill:'#00778A'
      }).on('circle-animation-progress', function(event, progress) {
          $(this).find('.skil-count-no').html(Math.round(84 * progress) + '<i>%</i>');
        });



      //Portfolio Filter
      $(".portfolio-filter li").on('click', function() {
        $(".portfolio-filter li").removeClass("active");
        $(this).addClass("active");

        var filterValue = $(this).attr("data-filter");

        $(".portfolio-list").isotope({
          filter: filterValue,
          layoutMode:'masonry',
          masonry:{
            columnWidth:'.col-md-3',
            horizontalOrder:false,
          }
        });
      });
    });


jQuery(window).load(function(){
        

        
        //Activiting Isotope
        jQuery(".portfolio-list").isotope({
        layoutMode:'masonry',
        masonry:{
          columnWidth:'.col-md-3',
          horizontalOrder:false,
        }
      });
    });
    
}(jQuery));





