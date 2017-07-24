<?
	/*
		HotelReservationForm.AJAX 5.0 [admin logn-in routine]

		http://acidjs.wemakesites.net/hotel-reservation-form-js.html
	*/
	
	/* editable variables begin */
	$user_name = "admin";
	$password = "admin";
	/* editable variables begin */

	/* do not modify the code below */

	$login_user_name = $_POST["login_user_name"];
	$login_password = $_POST["login_password"];
	$logged_in_for = $_POST["logged_in_for"];

	if($login_user_name != $user_name || $login_password != $password) 
	{
		header("Location: ./");
		exit;
	}
	else 
	{
		setcookie("logged_in", $login_user_name, time()+60*60*24*$logged_in_for, "/");
		header("Location: ./");
		exit;
	}
?>