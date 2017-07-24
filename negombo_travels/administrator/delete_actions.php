<?php
session_start();
include_once('../db/dbclass.php');

$db_connection_call = new connaissance_db();
$db_connection_call->dbconnection();


$delete_fun_id              = $_GET['id'];
$action                     = $_GET['action'];
$destination_id				= $_GET['destination_id'];


    switch ($action) {
    case "accom_delete":

        $delete_query     = "DELETE FROM accomodation WHERE a_id='$delete_fun_id'";
        $action_execute	 = mysql_query($delete_query)or die(mysql_error());
        header('Location:accommodation_panel.php');
        break;


    case "accom_cat_delete":

        $delete_query     = "DELETE FROM accomm_type WHERE accomm_id='$delete_fun_id'";
        $action_execute	 = mysql_query($delete_query)or die(mysql_error());
        header('Location:accommodation.php');
        break;
       
    case "destination_cat_delete":
        $delete_query     = "DELETE FROM destination_type WHERE dest_id='$delete_fun_id'";
        $action_execute	 = mysql_query($delete_query)or die(mysql_error());
        header('Location:new_destination.php');
        break;
		
	case "destination_exec_delete":
	
		$delete_query     = "DELETE FROM destnation_excursion WHERE excursion_id='$delete_fun_id'";
        $action_execute	 = mysql_query($delete_query)or die(mysql_error());
        header("Location:excursion_dash.php?destination_id=$destination_id");
		break;
				
	case "what_to_see_id":
		$delete_query     = "DELETE FROM what_to_see WHERE what_to_see_id='$delete_fun_id'";
        $action_execute	 = mysql_query($delete_query)or die(mysql_error());
        header("Location:what_to_see.php");
		break;
		
	case "itenery_cat_delete":
		$delete_query     = "DELETE FROM itenary_type WHERE itenary_id='$delete_fun_id'";
        $action_execute	 = mysql_query($delete_query)or die(mysql_error());
        header("Location:itenaries.php");
		break;
		
	case "itenery_delete":	
		$delete_query     = "DELETE FROM itenary_desc WHERE itenery_desc_id='$delete_fun_id'";
        $action_execute	 = mysql_query($delete_query)or die(mysql_error());
        header("Location:itenary_dash.php?city_id=84&iten_type_id=9");
		break;
		
	case "what_to_do_id":	
		$delete_query     = "DELETE FROM what_to_do WHERE what_to_do_id='$delete_fun_id'";
        $action_execute	 = mysql_query($delete_query)or die(mysql_error());
        header("Location:what_to_do.php");
		break;
		
	case "experiance_id":	
		$delete_query     = "DELETE FROM experiance WHERE experiance_id='$delete_fun_id'";
        $action_execute	 = mysql_query($delete_query)or die(mysql_error());
        header("Location:experiance.php");
		break;
	
		
}

?>