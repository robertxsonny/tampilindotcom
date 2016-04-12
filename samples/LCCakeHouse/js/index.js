$(document).ready(function() {
	$('.dash .option .flag').hide();

	$('.dash .option').hover(function() {
		var id = $(this).attr('id');
		$('#' + id + 'flag').show('slide', {
			direction : 'up'
		}, 200);
	}, function() {
		var id = $(this).attr('id');
		$('#' + id + 'flag').hide('slide', {
			direction : 'up'
		}, 200);
	});
});