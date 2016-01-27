//==============Initialize Slick Slider=============
$(document).ready(function(){
	$('.hero-image').slick({
		dots: false,
		autoplay: true,
		infinite: true,
		speed: 1000,
		fade: true,
		cssEase: 'linear'
	});
});