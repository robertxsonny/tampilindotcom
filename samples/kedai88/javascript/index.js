var productindex = 1;

$.fn.exists = function() {
	return this.length !== 0;
}

$(document).ready(function() {

	$('.link').click(function(){
		
		if($(this).attr('href') == '#landingpage'){
			  $('html,body').animate({
			      scrollTop: 0
			    }, {
			      duration: 500
			    });
			  return false;
		}
		
	    $('html,body').animate({
	      scrollTop: $($(this).attr('href')).offset().top
	    }, {
	      duration: 500
	    });
	    return false;
	  });
	
	window.setInterval(function() {
		productindex++;
		if ($('.product' + productindex).exists()) {
			setDescription();
			$('.product1').animate({
				'marginLeft' : '-=1280'
			}, 500)
		} else {
			productindex = 1;
			setDescription();
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
			setDescription();
			$('.product1').animate({
				'marginLeft' : '-=1280'
			}, 500)
		} else {
			productindex = 1;
			setDescription();
			$('.product1').animate({
				'marginLeft' : '0'
			}, 500)
		}
	});

	$('.toggle .prev').click(function() {
		productindex--;
		if ($('.product' + productindex).exists()) {
			setDescription();
			$('.product1').animate({
				'marginLeft' : '+=1280'
			}, 500);
		} else {
			productindex++;	
			for (var i = 2; i <= 30; i++) { // max photo 30
				if ($('.product' + i).exists()) {
					productindex = i;
					setDescription();
					$('.product1').animate({
						'marginLeft' : '-=1280'
					}, 500);
				} else{
					break;
				}
					
			}
		}
	});

	var lastscroll = 0;
	$(window).scroll(function(e) {
		if (lastscroll < $(window).scrollTop()) { // if scroll down
			if ($(window).scrollTop() == 100) {
				$('.home').animate({
					'top' : '-=50'
				}, 500);
				$('.header').animate({
					'top' : '-=40'
				}, 300);
			}
		} else { // if scroll up
			if ($(window).scrollTop() == 300) {
				$('.home').animate({
					'top' : '0'
				}, 250);
				$('.header').animate({
					'top' : '0'
				}, 300);
			} else if ($(window).scrollTop() == 0) {
				$('.home').animate({
					'top' : '0'
				}, 250);
				$('.header').animate({
					'top' : '0'
				}, 300);
			}
		}
		lastscroll = $(window).scrollTop();
	});
});

function setDescription() {
	switch (productindex) {
	case 1:
		$('.toggle .title').html('PAKET HEMAT');
		$('.toggle .subtitle').html('NASI + LAUK + SAYUR + MINUM');
		break;
	case 2:
		$('.toggle .title').html('PAKET LENGKAP');
		$('.toggle .subtitle').html('NASI + DAGING + LAUK + SAYUR + MINUM');
		break;
	}
}