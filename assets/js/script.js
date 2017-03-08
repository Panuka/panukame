$(".lazy").lazyload({
	event : "carousel-show"
});
$('.carousel-inner .item').first().addClass('active');
$("#instagram-carousel").on('slide.bs.carousel', function () {
	setTimeout(function () {
		$( window ).resize();
	}, 1);
});