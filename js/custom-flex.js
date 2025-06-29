// Flex Slider

// $(window).on('load',function(){
//   $('.flexslider').flexslider({
// 	animation: "slide",
// 	start: function(slider){
// 	  $('body').removeClass('loading');
// 	}
//   });
// });


// Owl Flex
$('#slider .slides').owlCarousel({
	items : 1,
	itemsCustom : false,
	itemsDesktop : [1199,1],
	itemsDesktopSmall : [991,1],
	itemsTablet: [768,1],
	itemsTabletSmall: [600,1],
	itemsMobile : [479,1],
	singleItem : false,
	itemsScaleUp : false,
	loop: true,
	//Autoplay
	autoPlay : true,
	stopOnHover : true,
 
	// Navigation
	navigation : false,
	navigationText : false,
	rewindNav : false,
	scrollPerPage : false,
 
	//Pagination
	pagination : true,
	paginationNumbers: false,
 
	// Responsive 
	responsive: true,
	responsiveRefreshRate : 200,
	responsiveBaseWidth: window,    
});