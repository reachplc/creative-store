$(document).ready(function(){

	var carousel = $('.owl-carousel');

	carousel.owlCarousel({
		loop:true,
		nav:true,
		items: 5,
		center: true,
		dots: false,
		margin: 15,		
   	smartSpeed:450,
   	lazyLoad: true
	});


});

