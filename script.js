


$(document).keypress(function(event) {
	var spacja = 32;
	if (event.which === spacja) {
		// play
		PlayPause();
		event.preventDefault();
	}
});



function PlayPause() {
	//var video = document.getElementById("background");
	var video = document.getElementById("muzyka");
	if (video.paused) {
		video.play();
	} else {
		video.pause();
	}
}


/*
function PlayPausemuza() {
	var audio = document.getElementById("muzyka");
	if (audio.paused) {
		audio.play();
	} else {
		audio.pause();
	}
}
*/