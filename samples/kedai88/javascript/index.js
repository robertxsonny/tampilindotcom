var productindex = 1;

$.fn.exists = function() {
	return this.length !== 0;
}

$(document).ready(function() {

	window.setInterval(function() {
		productindex++;
		if ($('.product' + productindex).exists()) {
			$('.product1').animate({
				'marginLeft' : '-=1280'
			}, 500)
		} else {
			productindex = 1;
			$('.product1').animate({
				'marginLeft' : '0'
			}, 500)
		}
	}, 4000);

	$('.toggle .prev').hover(function() {
		$('.toggle .prev').find('span').addClass('hover');
	}, function() {
		$('.toggle .prev').find('span').removeClass('hover');
	});

	$('.toggle .next').hover(function() {
		$('.toggle .next').find('span').addClass('hover');
	}, function() {
		$('.toggle .next').find('span').removeClass('hover');
	});

	$('.toggle .next').click(function() {
		productindex++;
		if ($('.product' + productindex).exists()) {
			$('.product1').animate({
				'marginLeft' : '-=1280'
			}, 500)
		} else {
			productindex = 1;
			$('.product1').animate({
				'marginLeft' : '0'
			}, 500)
		}
	});

	$('.toggle .prev').click(function() {
		productindex--;
		if ($('.product' + productindex).exists()) {
			$('.product1').animate({
				'marginLeft' : '+=1280'
			}, 500);
		} else {
			productindex++;
			for (var i = 1; i <= 30; i++) {
				productindex++;
				if ($('.product' + productindex).exists()){
					productindex = i;
					$('.product1').animate({
						'marginLeft' : '-=1280'
					}, 500);
					productindex++;
				}
				else
					break;
			}
		}
	});
});