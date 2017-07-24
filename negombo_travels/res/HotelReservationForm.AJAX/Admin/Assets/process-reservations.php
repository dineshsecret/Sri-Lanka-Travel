<?php

	/*
		AJAX Hotel Reservation Form 5.0 [process reservations routine]

		http://acidjs.wemakesites.net/hotel-reservation-form-js.html
	*/

	if(!isset($_POST['msg']))
	{
		die("");
	}

	if(get_magic_quotes_gpc())
	
	$customfilename = $_POST['filename'];

	if (!$handle = fopen("../../Reservations/New/".$customfilename, 'w')) 
	{
		exit;
	}
	if(fwrite($handle, stripslashes($_POST['msg'])) === TRUE) 
	{
		exit;
	}
	
	$reservation_details = $_POST['clientemailreservation'];
	$person_to = $_POST['email'];
	$person_name = $_POST['personname'];
	$hotel_name = $_POST['hotelname'];
	$to = $_POST['hotelemail'];
	$person_message = $_POST['confirmationmessagebody'];
	$person_subject = $_POST['confirmationmessagesubject'];
	$hotel_admin_email = $_POST['hoteladminemail'];
	$subject = $_POST['notificationemailsubject'];
	$message = $_POST['notificationmessagebody'];
	
	mail($hotel_admin_email, $subject, $message, "From: ".$to.""); /* notification email sent to the administrator of the hotel */
	mail($person_to, $person_subject, $person_message, "From: ".$to.""); // message sent to the customer
	
	fclose($handle);
?>