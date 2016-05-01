$(document).ready(function() {
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
	
	$(document).scroll(function(){
		var scrolltop = Number($(window).scrollTop()) - 5;
		$('.row .sidebar').css('top', scrolltop);
	});
});