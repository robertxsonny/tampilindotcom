var currentindex = 1;

$.fn.exists = function() {
	return this.length !== 0;
}

$(document).ready(function() {
	$('.bghome').hide();
	$('#home1').show('slide',{
		direction: 'right'
	}, 500);
	$('.dash .option .flag').hide();
	//hide menu
	if($(window).width() <= 640){
		$('.bar .dash .menu').hide();
	}
	
	$('.burger').click(function(){
		if($('.bar .dash .menu').is(':visible')){
			$('.bar .dash .menu').fadeOut('slow');
		}
		else{
			$('.bar .dash .menu').fadeIn('slow');
		}
	});

	$('.dash .option').hover(function() {
		if($(window).width() > 768){
			var id = $(this).attr('id');
			$('#' + id + 'flag').show('slide', {
				direction : 'up'
			}, 200);
		}
		
	}, function() {
		if($(window).width() > 768){
			var id = $(this).attr('id');
			$('#' + id + 'flag').hide('slide', {
				direction : 'up'
			}, 200);
		}
		
	});
	
	$('.switch').click(function(){
		var id = $(this).attr('id');
		currentindex = Number(id.replace('switch', ''));
		var generator = id.replace('switch', 'home');
		if($(this).hasClass('active') === false){	
			$('.switch').removeClass('active');
			$(this).addClass('active');
			$('.bghome').hide('slide', {
				direction: 'left'
			}, 500);
			$('#' + generator).show('slide',{
				direction: 'right'
			}, 500);
		}
	});
	
	/*window.setInterval(function(){
		if(currentindex == 4){
			currentindex = 0;
		}
		currentindex++;
		$('.switch').removeClass('active');
		$('#switch' + currentindex).addClass('active');
		$('.bghome').hide('slide', {
			direction: 'left'
		}, 500);
		$('#home' + currentindex).show('slide',{
			direction: 'right'
		}, 500);
		
	}, 4000);*/
	
	$('.dash .menu .option').click(function(){
		var id = $(this).attr('id');
		if(id == 'home'){
			$('html,body').animate({
				scrollTop : 0
			}, {
				duration : 500
			});
		}
		else{
			var generator = '#' + id + 'div';
			$('html,body').animate({
				scrollTop : $(generator).offset().top
			}, {
				duration : 500
			});
		}
		
	});
	
	var lastscroll = 0;
	$(document).scroll(function(){
		var scroll = $(document).scrollTop();
		if(scroll > 0){
			$('.header').addClass('headerfixed');
		}
		else{
			$('.header').removeClass('headerfixed');
		}
		
		
		/*$('.maintitle').addClass('maintitleactive');*/
	});
	
});