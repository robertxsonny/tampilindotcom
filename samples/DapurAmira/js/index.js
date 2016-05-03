$(document).ready(function() {
	$('.homecontent').hide();
	$('.aboutcontent').hide();
	$('.aboutsub, .aboutsub2, .aboutpic').hide();
	$('.contactcontent .content, .contactcontent .pic').hide();
	$('.option').hover(function() {
		$('.menu .point').removeClass('active');
		var id = $(this).attr('id');
		while (id.indexOf('menu') > 0) {
			id = id.replace('menu', 'point');
		}
		$('#' + id).addClass('active');
	}, function() {
		$('.menu .point').removeClass('active');
	});

	$(document).scroll(function() {
		var scrolltop = Number($(window).scrollTop()) - 5;
		$('.row .sidebar').css('top', scrolltop);

		// animate
		
		if ($('#home').offset().top - $(window).scrollTop() <= 100 && $('#home').offset().top - $(window).scrollTop() >= -550) {
			$('.homecontent').show('scale', {
				direction : 'left'
			}, 500);
		}
		else{
			$('.homecontent').hide('scale', {
				direction : 'left'
			}, 500);
		}
		
		if ($('#products').offset().top - $(window).scrollTop() <= 100 && $('#products').offset().top - $(window).scrollTop() >= -700) {
			$('.aboutcontent').show('slide', {
				direction : 'left'
			}, 500);
		}
		else{
			$('.aboutcontent').hide('slide', {
				direction : 'left'
			}, 500);
		}
		

		if ($('#about').offset().top - $(window).scrollTop() <= 300 && $('#about').offset().top - $(window).scrollTop() >= -550) {
			$('.aboutsub').show('slide', {
				direction : 'left'
			}, 500);
			$('.aboutpic').show('scale', {
				direction : 'right'
			}, 500);
			$('.aboutsub2').show('slide', {
				direction : 'right'
			}, 500);
		}
		else{	
			$('.aboutsub').hide('slide', {
				direction : 'left'
			}, 500);
			$('.aboutpic').hide('scale', {
				direction : 'right'
			}, 500);
			$('.aboutsub2').hide('slide', {
				direction : 'right'
			}, 500);
		}
		
		if ($('#contact').offset().top - $(window).scrollTop() <= 250 && $('#about').offset().top - $(window).scrollTop() >= -700) {
			$('.contactcontent .content').show('slide', {
				direction : 'left'
			}, 200);
			$('.contactcontent .pic').show('slide', {
				direction : 'right'
			}, 100);
		}
		else{	
			$('.contactcontent .content').hide('slide', {
				direction : 'left'
			}, 200);
			$('.contactcontent .pic').hide('slide', {
				direction : 'right'
			}, 100);
		}
		
		

	});

	$('.homecontent .prev, .homecontent .next').hover(function() {
		$('.homecontent .prev, .homecontent .next').removeClass('hover');
		$(this).addClass('hover');
	}, function() {
		$('.homecontent .prev, .homecontent .next').removeClass('hover');
	});
});

// after load finished
$(window).on('load', function() {
	$('.homecontent').show('scale', {
		direction : 'left'
	}, 500);
});