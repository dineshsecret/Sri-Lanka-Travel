<?php

	/*
		AJAX Hotel Reservation Form 5.0 [move reservations routine]

		http://acidjs.wemakesites.net/hotel-reservation-form-js.html
	*/

	if(!isset($_POST["file"]))
	{
		die("");
	}
	$file = $_POST["file"];
	$from = $_POST["from"];
	$to = $_POST["to"];
	rename($from."/".$file, $to."/".$file);
?> 