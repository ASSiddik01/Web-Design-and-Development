jQuery(document).ready(function($){
	$(".homepage-slides").owlCarousel({
		items: 1,
		loop: true,
		nav: true,
		dots: true,
		navText: ("<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"),
		autoplay: false
	});
});