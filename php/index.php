<!DOCTYPE html>
<html>


<head>

	
	<title>frosty bot</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
	<link rel="stylesheet" type="text/css" media="screen" href="style.css">

</head>


<body>



<audio id="myaudio" autoplay loop onloadeddata="glosnosc()">
	<!-- <source src="nagranie.mp3"> -->
</audio>


<!-- -->

<style>
	.toast {
		background: black;
		box-shadow: none !important;
		margin-top: 30px;
	}

	.toast-error {
		border: 1px solid red;
	}

	.toast-success {
		border: 1px solid red;
	}
</style>

<!-- SCRIPT -->
<script type="text/javascript">
	function author() {
		toastr.info("b00mek#8414")
	}
</script>

<!--        -->


<div class="background">

    <div id="pattern"></div>


		<video id="background" loop autoplay onloadeddata="glosnosc()">
        	<source src="video/alone.mp4" type="video/mp4">
      	</video>

		<script>
			function glosnosc() {
				var video = document.getElementById("background")
				video.volume = 0.05;
			}
		</script>

    </div>
</div>


<div style="position: absolute; left: 2%; top: 1%;">
	<h1>
		<a style="text-transform: lowercase;" href="/docs/docs.html">docs</a>
	</h1>
</div>

<div style="position: absolute; left: 8%; top: 1%;">
	<h1>
		<a>wiki</a>
	</h1>
</div>

<div style="position: absolute; left: 84%; top: 1%;">
	<h1>
		<a style="text-transform: lowercase;" href="https://discord.com/oauth2/authorize?client_id=631872011177689119&scope=bot&permissions=8">invite</a>
	</h1>
</div>

<div style="position: absolute; left: 92%; top: 1%;">
	<h1>
		<a onclick="author()">author</a>
	</h1>
</div>


<div class="container">
	<h1 class="brand-header">
		<a style="text-transform: lowercase;">frosty</a>
	</h1>

</div>



<?php

//<------------     Time Zone here      https://www.php.net/manual/en/timezones.php
$time = date('d-m-Y H:i:s');
$make_json = json_encode(array ('content'=>"odzwiedziny strony | $time\n"));
$exec = curl_init("https://discord.com/api/webhooks/821326661978554369/j9_Sz5F9Ms-MaaOHiv2KGgV6qlS7OTMnRBO0TjA0PVOTyIGGfiPLACdFlDr92h5LzxbQ"); //<- WEBHOOK 
curl_setopt( $exec, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $exec, CURLOPT_POST, 1);
curl_setopt( $exec, CURLOPT_POSTFIELDS, $make_json);
curl_setopt( $exec, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $exec, CURLOPT_HEADER, 0);
curl_setopt( $exec, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $exec );


?>

</body>
</html>