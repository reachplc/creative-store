$(document).ready(function(){

   $('.frontpage-caro .products').addClass('owl-carousel');
   $('.frontpage-caro .products').find('li').removeClass().addClass('product-category product');

	var carousel = $('.owl-carousel');

	carousel.owlCarousel({
		loop:true,
		nav:true,
		items: 5,
		center: true,
      dots: false,
		margin: 15,
   	smartSpeed:450,
   	lazyLoad: true,
   	responsive: {
   		0:{
   				items: 3
   		},
   		750: {
   			items: 4
   		},
   		1000: {
   			items: 6
   		}
   	}
	});


   // $(".owl-item > li > a").on('click', function(){
   //    event.preventDefault();
   // })

  




});


// $(document).on('click', '.owl-item', function() {
//   $owl.trigger('to.owl.carousel', $(this).data( 'position' ) ); 
// });