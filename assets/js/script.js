$(".lazy").lazyload({
	event : "carousel-show"
});
$('.carousel-inner .item').first().addClass('active');
$("#instagram-carousel").on('slide.bs.carousel', function () {
	var $itm = $('.item.active+.item img');
	$itm.attr('src', $itm.attr('data-original'));
});

