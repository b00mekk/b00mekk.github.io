$(document).ready(function(){
	
	$('ul.lista li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.lista li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})