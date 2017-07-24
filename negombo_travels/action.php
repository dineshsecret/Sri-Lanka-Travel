<?php
session_start();
include_once('db/dbclass.php');
/* CAPTURING THE SWITCH STATEMENT  */
$page_name 	= $_REQUEST['page_name'];
$mod_type 	= $_REQUEST['mod'];

$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();


switch ($page_name) {

    case "accom":

        switch ($mod_type) {

            case "guest_comment":
			
			$accom_id		= $_POST['accom_id'];
			$name			= mysql_escape_string($_POST['name']);
			$country_id		= $_POST['country_id'];
			$email_address	= mysql_escape_string($_POST['email_address']);
			$comments		= mysql_escape_string($_POST['comments']);
			
		$insert_accom_type = "INSERT INTO guest_comment_accommodation(accommodatin_id,user_name,country,email,comment)VALUES('$accom_id	','$name','$country_id','$email_address','$comments')";
           mysql_query($insert_accom_type) or die(mysql_error());
           $db_connection_call->close();
			$_SESSION['success']='Comment Post is Successfully Done!!!';
			header("Location:accommodations/comments.php?accom_id=$accom_id");
			break;
		}
}


?>
