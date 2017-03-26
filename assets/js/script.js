var browser_width = $(window).width(),
	read_attr = 'data-original';
if (browser_width<400)
	read_attr = 'data-small';

$(".lazy").lazyload();
$('.carousel-inner .item').first().addClass('active');
$("#instagram-carousel").on('slide.bs.carousel', function () {
	var $itm = $('.item.active+.item img');
	$itm.attr('src', $itm.attr(read_attr));
	var $itm = $('.item.active+.item+.item img');
	$itm.attr('src', $itm.attr(read_attr));
});