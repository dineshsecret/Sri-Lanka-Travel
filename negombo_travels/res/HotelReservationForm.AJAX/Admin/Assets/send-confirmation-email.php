<?php
	/*
		AJAX Hotel Reservation Form 5.0 [send confirmation email routine]

		http://acidjs.wemakesites.net/hotel-reservation-form-js.html
	*/

	if(!isset($_GET["email"]))
	{
		die("");
	}

	if(get_magic_quotes_gpc())
	
	$hotelemail = $_GET["hotelmail"];
	$email = $_GET["email"];
	$message = $_GET["body"];
	$subject = $_GET["confirmsubject"];
	
	mail($email, $subject, $message, "From: ".$hotelemail."");
?>