$(document).ready(function(){
	
	$('ul.lista li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.lista li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})



$(document).ready(function() {

	// id = #document_Id
	// class = .document_Id

	var stronaItem = $('.switch2').not('.previous,.next');
	var previous = $('#previous');
	var next = $('#next');

	stronaItem.click(function(event) {
		stronaItem.removeClass('active');
		$(this).not('.previous,.next').addClass('active')
	});

	next.click(function(event) {
		var tabid = $(this).attr('data-tab')
		$('.previous').removeClass('active');
		$(next).addClass('active');


		// jezeli next to zmienia ci 'tab-content current' na kliknieta strzalke

		$('.tab-content').removeClass('current')
		$(this).addClass('current')		

		//$('.active').removeClass('active').next().addClass('active');
	});

	previous.click(function(event) {
		$('.next').removeClass('active');
		$(previous).addClass('active');
		//$('.active').removeClass('active').previous().addClass('active');
	});
});