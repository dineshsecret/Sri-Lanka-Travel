<?php
session_start();
include_once('db/dbclass.php');
include_once('db/db_transaction.php'); 	
	
	
	$switch_funct		= $_REQUEST['mod'];
 	$accom_id			= $_GET['accom_id'];
	$city_id			= $_GET['city_id'];

switch ($switch_funct) {
   
	case "contact_form":
        
				
		$txt_fname			= $_POST['txt_fname']. ' ' . $_POST['txt_mname'] . ' ' . $_POST['txt_lname'] ;
		//$b_date				= $_POST['txt_dob_day'].'-'.$_POST['txt_dob_mnth'].'-'.$_POST['txt_dob_year'];
		$txt_add1			= $_POST['txt_add1'];
		$txt_add2			= $_POST['txt_add2'];
		$txt_city			= $_POST['txt_country'];
		$txt_tel			= $_POST['txt_tel'];
		$txt_mob			= $_POST['txt_mob'];
		$txt_email			= $_POST['txt_email'];
		$comments			= $_POST['textarea'];
		
					
		$to  				= 'ruwan.ferdy@gmail.com ';
		
		$subject 			= 'Contact us inquiry';
					// message
		$message = "<table width=500 border=0 cellpadding=0 cellspacing=0>
						  <tr>
							<td width=126>Full Name </td>
							<td width=374>$txt_fname&nbsp; </td>
						  </tr>
						  <tr>
							<td>Address 01 </td>
							<td>$txt_add1</td>
						  </tr>
						  <tr>
							<td>Address 02 </td>
							<td>$txt_add2</td>
						  </tr>
						  <tr>
							<td>Country</td>
							<td>$txt_city</td>
						  </tr>
						  <tr>
							<td>Tel </td>
							<td>$txt_tel</td>
						  </tr>
						  <tr>
							<td>Mobile </td>
							<td>$txt_mob</td>
						  </tr>
						  <tr>
							<td>Email </td>
							<td>$txt_email</td>
						  </tr>
						  <tr>
							<td>Request </td>
							<td>$comments</td>
						  </tr>
						</table>";
				
		$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
	$_SESSION['success']='Thanks for contacting Negombo Travel!!!';
	header("Location:contact_us.php");
		break;
	
					
case "airport_pick":

		$txt_fname			= $_POST['txt_fname'] ;
		$country			= $_POST['select3'];
		$txt_arr_dat		= $_POST['txt_arr_dat'];
		
		$txt_flnum			= $_POST['txt_flnum'];
		$pasengers			= $_POST['pasengers'];
		$txt_mob			= $_POST['txt_mob'];
		$txt_email			= $_POST['txt_email'];
		$paging				= $_POST['radiobutton'];
		$comments			= $_POST['comments'];
		
		$to  				= 'ruwan.ferdy@gmail.com ';		
		$subject 			= 'Airport Pick-up';
					// message
		$message = "<table width=500 border=0 cellpadding=0 cellspacing=0>
						  <tr>
							<td width=126>Full Name :</td>
							<td width=374>$txt_fname</td>
						  </tr>
						  
						  <tr>
							<td>Country :</td>
							<td>$country</td>
						  </tr>
						  <tr>
							<td>Arrival Date : </td>
							<td>$txt_arr_dat</td>
						  </tr>
						  <tr>
							<td>Flight Num :</td>
							<td>$txt_flnum</td>
						  </tr>
						  <tr>
							<td>Passenger :</td>
							<td>$pasengers</td>
						  </tr>
						  
						  <tr>
							<td>Mobile No: </td>
							<td>$txt_mob</td>
						  </tr>
						  <tr>
							<td>Email :</td>
							<td>$txt_email</td>
						  </tr>
						  <tr>
							<td>Paging :</td>
							<td>$paging</td>
						  </tr>
						  <tr>
							<td>Request : </td>
							<td>$comments</td>
						  </tr>
						</table>
";
				
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'Cc: tours@srilankanegombo.com' . "\r\n";
		$headers .= "From: Air-Port Taxi pickup<$txt_email>" . "\r\n";
		// Mail it
		mail($to, $subject, $message, $headers);
		$_SESSION['success']='Airport transfer is confirmed and we would contact you in short while!!!';
		header("Location:colombo_airport_transfer.php");
		break;				
					

case "tour_it":
	 
	 	$txt_fname				= $_POST['txt_fname'] ;
		$txt_email					= $_POST['txt_email'];
		$country				= $_POST['country'];
		
		$txt_arr_dat			= $_POST['txt_arr_dat'];
		$txt_ret_dat			= $_POST['txt_ret_dat'];
		$txt_adult				= $_POST['txt_adult'];
		$txt_kids				= $_POST['txt_kids'];
		$airport_pickup			= $_POST['radiobutton'];
		$tour_package			= $_POST['textarea'];
	
				 if($_POST['answer']!=10)
				 {
						$_SESSION['spam']='Found a SPAM !!!';
						header("Location:own_tours_it.php#tips");
						exit();
					
				}else{
				
$to      = 'ruwan.ferdy@gmail.com';
$subject = 'Own Tour Itenarary';
$message = '<head><title>Customized Tour Inquiry </title></head><body><table width=700 bgcolor=#EFEFEF><tr><td width=179 bgcolor=#FFFFFF><strong>Full Name </strong></td><td width=509 bgcolor=#FFFFFF>$txt_fname</td></tr><tr><td bgcolor=#FFFFFF><strong>Email</strong></td>  <td bgcolor=#FFFFFF>$txt_email</td></tr><tr><td bgcolor=#FFFFFF><strong>Country </strong></td>    <td bgcolor=#FFFFFF>$country</td></tr><tr><td bgcolor=#FFFFFF><strong>Arrival Date </strong></td><td bgcolor=#FFFFFF>$txt_arr_dat</td></tr><tr><td bgcolor=#FFFFFF>Departure Date </td><td bgcolor=#FFFFFF>$txt_ret_dat</td></tr><tr><td bgcolor=#FFFFFF><strong>Number of Adults</strong></td><td bgcolor=#FFFFFF>$txt_adult </td></tr><tr><td bgcolor=#FFFFFF><strong>Number of Kids  :</strong></td><td bgcolor=#FFFFFF>$txt_kids</td></tr><tr><td bgcolor=#FFFFFF><strong>Air port pick up </strong></td><td bgcolor=#FFFFFF>$airport_pickup</td></tr><tr><td bgcolor=#FFFFFF><strong>Required Tour type </strong></td><td bgcolor=#FFFFFF>$tour_package</td></tr></table></body></html>';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: tours@srilankanegombo.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
$_SESSION['success']='Thanks for contact Negombo Tours We will get back to you within 24 hours time';
					header("Location:own_tours_it.php#tips");



	
				}
	 
	 	break;
      
	  
	  
	case "g_comments";
	
	$txt_fname	=$_POST['txt_fname'];
	$select3	= $_POST['select3'];
	$txt_email	= $_POST['txt_email'];
	$comments	= $_POST['comments'];
	
	if($_POST['answer']!=20){
	$_SESSION['spam']='Found a SPAM !!!';
	header("Location:guest_comments.php#tips");
	exit();
	}
	
	else{
	
		$member_registry = new db_transaction();
		$member_registry->CommentInsertions($txt_fname,$select3,$txt_email,$comments);
	
	}
	
	break;
		
    case "online_booking":
		
			    
		
			$salu			= $_POST['salu'];
			$full_name 		= $_POST['fname']. " " . $_POST['lname'];
			$country		= $_POST['country'];
			$tele			= $_POST['tele'];
			$email			= $_POST['email'];
			$hotel			= $_POST['hotel'];
			$arival_date	= $_POST['arival_date'];
			$depature_date	= $_POST['depature_date'];
			$meal_type		= $_POST['meal_type'];
			$num_guest		= "Adults :" . $_POST['adult'] . " Kids : ".$_POST['childre'];
			$airport_transfer	= $_POST['airport_transfer'];
			$other				= $_POST['other'];
		
		
		$to  			= 'ruwant6@gmail.com' . ', '; 
		$thanks_send  	= "$email" . ', ';
		
		$subject 		= 'Holiday Ceylon Online Hotel Reservstion Inquiry';
		$subject_thanks = 'Thank you for Hotel Reservastion by Holiday Ceylon';
		
		$message = "
		<head>
		 <title>$hotel booking Inquiry</title>
		</head>
		<body>
		 <table width=700 bgcolor=#EFEFEF>
		  <tr>
		  <td width=309 bgcolor=#FFFFFF><strong>Full Name </strong></td>
			<td width=379 bgcolor=#FFFFFF>$salu $fname $lname</td>
			</tr>
			<tr>
		<td bgcolor=#FFFFFF><strong>Country</strong></td>
		<td bgcolor=#FFFFFF>$country</td>
		</tr>
		<tr>
		<td bgcolor=#FFFFFF><strong>Telephone</strong></td>
		<td bgcolor=#FFFFFF>$tele</td>
		</tr>
		<tr>
		<td bgcolor=#FFFFFF><strong>Email</strong></td>
		<td bgcolor=#FFFFFF>$email</td>
		</tr>
		<tr>
			<td bgcolor=#FFFFFF><strong>Hotel</strong></td>
			<td bgcolor=#FFFFFF>$hotel</td>
			</tr>
		<tr>
		<td bgcolor=#FFFFFF><strong>Arrival date</strong></td>
		<td bgcolor=#FFFFFF>$arival_date</td>
		</tr>
	<tr>
	<td bgcolor=#FFFFFF><strong>Departure date</strong></td>
	<td bgcolor=#FFFFFF>$depature_date</td>
		</tr>
	<tr>
	<td bgcolor=#FFFFFF><strong>Meal Category</strong></td>
	<td bgcolor=#FFFFFF>$meal_type</td>
	</tr>
	<tr>
<td bgcolor=#FFFFFF><strong>No. of Guests </strong></td>
<td bgcolor=#FFFFFF>$num_guest</td>
</tr>
<tr>
<td bgcolor=#FFFFFF><strong>Do you need airport transfe </strong></td>
					  <td bgcolor=#FFFFFF>$airport_transfer</td>
					</tr>
					<tr>
					  <td colspan=2 bgcolor=#FFFFFF><strong>Other Information : </strong></td>
					</tr>
					<tr>
					  <td colspan=2 bgcolor=#FFFFFF>$other</td>
					</tr>
					</table>
				</body>
						</html>
		";
		$messege_for_sender =" 
		
		$salu $fname $lname; <br><br>
		
		Thank you very much for you $hotel reservation . We are now processing your hotel reservation from now onwards<br> 
		once it finalized, we will get back to you by mailing or contact you via telephone call.<br><br>
		
		If you have any more inquiries regarding this reservation do not hesitate to reply to us by given e-mail address <br>
		<a href=maito:ruwant6@gamil.com>hotels@holidayceylon.com </a> <br><br>
		
		If you are cancel the hotel reservation after your confirmation,  you want to inform us by before exact time period.
		Please refer this our terms and conditions link 
		<a href=http://www.holidayceylon.com/termsandconditions.php>Terms & Conditions </a><br><br><br>
		
		Thank you very much !!!<br>
		Holiday Ceylon tour operators	<br><br><br>
		
		
		<u><b>Sri Lanka</b></u><br>
		Main Office<br>
		Holiday Ceylon Tour Operators (PVT) Ltd<br>
		16A, Colombo Road,<br>
		Negombo, Sri Lanka<br>
		<br>
		Telephone: +94 31 2221791 (Line open 9AM to 5PM local time in Sri Lanka)<br>
		Hotline: +94 773 072721<br>
		Fax: +94 31 2228442<br>
		Email : <a href=mailto:tours@holidayceylon.com>tours@holidayceylon.com
</a><br>
		web : <a href=http://www.holidayceylon.com>www.holidayceylon.com</a><br>
		<br>
		
		<u><b>UK, Europe</b></u>
		<br>
Holiday Ceylon Tour Operators (PVT) Ltd
Northampton, <br>
UK
Tel. +44 77 0 2080 740 / Fax. +44 1604 758090
<br>
Email : <a href=mailto:tours@holidayceylon.com>tours@holidayceylon.com
</a>
<br>
web : <a href=http://www.holidayceylon.com>www.holidayceylon.com</a>
		
<br>
<br>
<u><b>Dubai, Middle East</b></u>
		<br>
Holiday Ceylon Tour Operators (PVT) Ltd
Dubai, <br>
UAE
Tel. +97 1501316251
<br>
Email : <a href=mailto:tours@holidayceylon.com>tours@holidayceylon.com
</a><br>
web : <a href=http://www.holidayceylon.com>www.holidayceylon.com</a>";
		
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		// Additional headers
		$headers .= "To: Managing Director UK <hotels@holidayceylon.com>" . "\r\n";
		$headers .= "From: Online Hotel Booking Inquiry from $email" . "\r\n";
		
		
		/*---------------- Thank Giving mail ----------------------------- */
	
	$header_sender = 'MIME-Version: 1.0' . "\r\n";
		$header_sender .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$header_sender .= "From: Holiday Ceylon Hotel rservation Confirmation" . "\r\n";
		
				
		// Mail it
		mail($to, $subject, $message, $headers);
		mail($thanks_send,$subject_thanks,$messege_for_sender,$header_sender); /////// This is for autogenrated mail for Hotel reservation person
		
		$_SESSION['mial_success']='Thank you very much for contacting Holiday Ceylon Tours, We will contact you with 24 hours !!!';
		header("Location:hotels/accommodation_profile.php?accom_id=$accom_id&city_id=$city_id#book");	
      
	  
	  $insert_booking_info	= new dbcommunicate;
      $insert_booking_info->InsertNewHotelBookingInformation($salu,$full_name,$country,$tele,$email,$hotel,$arival_date,$depature_date,$meal_type,$num_guest,$airport_transfer,$other);
	 	break;
		
      
   
   
    case "member_registry":
        
		$first_name			= mysql_escape_string($_POST['first_name']);
		$last_name			= mysql_escape_string($_POST['last_name']);
		$country			= mysql_escape_string($_POST['country']);
		$email				= mysql_escape_string($_POST['email']);
		$user_name			= mysql_escape_string($_POST['user_name']);
		$password			= mysql_escape_string($_POST['password']);
		$password_2			= mysql_escape_string($_POST['password_2']);
		
		if($password!=$password_2){
		
			$_SESSION['invalid_pass']	= 'Pasword is Not Matching !!!';
			header('Location:visitor_registry.php');
			exit();
		}else{
		
			$member_registry = new dbcommunicate();
			$member_registry->NewMemberRegistryHolidayCeylon($first_name,$last_name,$country,$email,$user_name,$password,$password_2);
		
		}
		break;
		
	
	
	
	case "member_login":
		 
		 $user_name		= $_POST['user_name'];
		 $password		= $_POST['password'];
		 
		 
		 
		$member_registry = new dbcommunicate();
		$member_registry->UserLoging($user_name,$password);
		break;
		 
		 
		 
	case "member_comment":
	
		if(!isset($_SESSION['welcome'])){
		header('Location:tour_comments.php');
		exit();
		
		}else{
		
			$member_id		= $_POST['member_id'];
			$subject		= $_POST['subject'];
			$tour_comment	= $_POST['tour_comment'];
			$date			= date("Y-n-j");
			
			$member_registry = new dbcommunicate();
			$member_registry->MemberComments($member_id,$subject,$tour_comment,$date);
			break;
			
			
		}
		/*
		
		*/
	
	

}




?>