<?php
session_start();
include_once('../db/dbclass.php');

/* CALLING TO THE DATA BASE CONNECTION CLASS */
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();

/* CAPTURING THE SWITCH STATEMENT  */
$page_name 	= $_REQUEST['page_name'];
$mod_type 	= $_REQUEST['mod'];



switch ($page_name) {

    case "login_page":

        switch ($mod_type) {

            case "login":

                if ($_POST['user_name'] == '' || $_POST['pass'] == '') 
				{

                    $_SESSION['error'] = "Please Give the User Name & Paasword !!!";
                    header('Location:index.php');
                    exit();
                    break;
                } 
				else if (!preg_match("/[^0-9]+$/s", $_POST['user_name']) || (!preg_match("/[^0-9]+$/s", $_POST['pass']))) 
					{
                    	$_SESSION['error'] = "You cannot enter Numeric Charactors !!!";
                    	header('Location:index.php');
						exit();
						break;
                	} 
					else if ($_POST['user_name'] == 'Administrator' && $_POST['pass'] == 'royaldock') 
					{
						$_SESSION['success_user_her'] = 'success';
						$expire = time() + 60 * 60 * 24 * 30;
						setcookie("user", "Alex Porter", $expire);
						header('Location:panel.php');
						break;
                		} 
				
				else {

                    $_SESSION['error'] = "Please Login to the System with correct user <br> Login Details !!!";
                    header('Location:index.php');
                    exit();
                    break;
                }
        }
	
	
 case "events":

        switch ($mod_type) {

            case "event_act":
			
					$event_name			= $_POST['event_name'];
					$dest_city			= $_POST['dest_city'];
					$experiance_desc	= $_POST['experiance_desc'];
					$sta_date		= $_POST['sta_date'];
					$end_date		= $_POST['end_date'];
			
					$filename 	= $_FILES["d_imgfile"]["name"];
               		$type 		= $_FILES["d_imgfile"]["type"];
                	$size 		= ($_FILES["d_imgfile"]["size"] / 1024);
                	$temPname 	= $_FILES["d_imgfile"]["tmp_name"];

                	$random_value 		= rand(0, 10000000);
                	$image_full_name 	= $random_value . $filename; // RENMAE THE IMAGE NAME
                	move_uploaded_file($_FILES["d_imgfile"]["tmp_name"], "../images/events/" . $image_full_name);
			
					$insert_accom_type = "INSERT INTO events(event_name,venue,event_desc,event_sdate,event_edate,image_name)VALUES('". $event_name."','". $dest_city."','".$experiance_desc."','". $sta_date."','". $end_date."','".$image_full_name. "')";
						
                     mysql_query($insert_accom_type) or die(mysql_error());
					 header('Location:events.php');
					 exit();
			
			break;
	
	}

case "accommodation":


        switch ($mod_type) {

            case "insert_new_accom_type":

                $accom_cat = $_POST['accom_cat'];
				if ($accom_cat != ''){

                    $accom_name_check = mysql_query("SELECT accomm_name FROM accomm_type WHERE accomm_name='$accom_cat'");
                    $accom_name_check_rows = mysql_num_rows($accom_name_check);

                    if ($accom_name_check_rows == 1) {

                        $_SESSION['accom'] = 'Sorry This name is Already Inserted';
                        header('Location:accommodation.php');
                    }

                    if ($accom_name_check_rows == 0) {

                        $insert_accom_type = "INSERT INTO accomm_type(accomm_name)VALUES('$accom_cat')";
                        mysql_query($insert_accom_type) or die(mysql_error());
                        $db_connection_call->close();

                        $_SESSION['accom'] = 'New Accommodation Catogory Inserted';
                        header('Location:accommodation.php');
                    }
                } else {

                    $_SESSION['accom'] = 'Accommodation Field Cannot be Empty !!!';
                    header('Location:accommodation.php');
                }
				
				break;





case "insert_new_accom_desc":

                $accom_name 	= $_POST['accom_name'];
				$accom_into		= mysql_escape_string($_POST['accom_into']);//
                $accom_type 	= $_POST['accom_type'];
                $accom_add 		= $_POST['accom_add'];
                $accom_city 	= $_POST['accom_city'];
                $accom_phon 	= $_POST['accom_phon'];
                $accom_fax 		= $_POST['accom_fax'];
                $accom_email 	= $_POST['accom_email'];
                $accom_url 		= $_POST['accom_url'];
                $accom_rooms 	= $_POST['accom_rooms'];
                $accom_rating 	= $_POST['accom_rating'];
				$accom_dec		= mysql_escape_string($_POST['accom_dec']);//
                $accom_faci 	= mysql_escape_string($_POST['accom_faci']);
                $accom_excurion = mysql_escape_string($_POST['accom_excurion']);
				
				/*---------- OTHER FACILITY CAPTURING ------------------ */
				$other_facility			= $_POST['fetures'];
				/*----------- END OF OTHER FACILITY CAPTURING -----------*/
				
				
				$accom_name_check = mysql_query("SELECT a_name FROM accomodation WHERE a_name='$accom_name'");
                $accom_name_check_rows = mysql_num_rows($accom_name_check);

                if ($accom_name_check_rows == 1 || $accom_name == '') {

                    $_SESSION['accom_success'] = 'Please Give Accommodation name Or Acommodation name is Already Inserted';
                    header('Location:accommodation_informations.php');
                    exit();
					
                } else {

                $filename 	= $_FILES["d_imgfile"]["name"];
                $type 		= $_FILES["d_imgfile"]["type"];
                $size 		= ($_FILES["d_imgfile"]["size"] / 1024);
                $temPname 	= $_FILES["d_imgfile"]["tmp_name"];

                $random_value 		= rand(0, 10000000);
                $image_full_name 	= $random_value . $filename; // RENMAE THE IMAGE NAME
                move_uploaded_file($_FILES["d_imgfile"]["tmp_name"], "../accommodations/images/header_images/" . $image_full_name);
				
				$other_facility_list 	= implode(",", $other_facility);
				
				
				$insert_query = "INSERT INTO accomodation(a_name,a_introduction,a_type_id,a_address,a_city,a_phone,a_fax,a_email,a_url,a_rooms,a_rating,a_accommodation,facilities,other_facilities,leisure_excursion,header_image_name)VALUES('" . $accom_name ."','" . $accom_into . "','" . $accom_type ."','". $accom_add."','".$accom_city."','".$accom_phon."','".$accom_fax."','". $accom_email."','".$accom_url."','".$accom_rooms."','".$accom_rating. "','" .$accom_dec. "','".$accom_faci."','". $other_facility_list ."','".$accom_excurion ."','".$image_full_name. "')";
				
				mysql_query($insert_query) or die(mysql_error());
				$last_insert_accom_id = mysql_insert_id();
				$db_connection_call->close();
                $_SESSION['accom_success'] = 'Accommodation Information Successfully Inserted !!!';
                header("Location:upload_image_gallery.php?last_insert_accom_id=$last_insert_accom_id");
			
				}
				break;


case "edit_event_act":
$event_id		= $_POST['event_id'];
$event_name		= $_POST['event_name'];
$dest_city		= $_POST['dest_city'];
$experiance_desc	= $_POST['experiance_desc'];
$sta_date		= $_POST['sta_date'];
$end_date		= $_POST['end_date'];

								$filename   = $_FILES["d_imgfile"]["name"];
								$random_value = rand(0, 10000000);
								$image_full_name = $random_value . $filename; // RENMAE THE IMAGE NAME
								//move_uploaded_file($_FILES["d_imgfile"]["tmp_name"], "../srilanka_events/images/header_images/" . $image_full_name);


$update_query	= "UPDATE events SET event_name='$event_name',venue='$dest_city',event_desc='$experiance_desc',event_sdate='$sta_date',event_edate='$end_date' WHERE event_id=$event_id";
								mysql_query($update_query) or die(mysql_error());
													
								$db_connection_call->close();

								header("Location:edit_events.php?id=$event_id");
								exit();



break;


case "insert_new_accom_images":
				
				
				$last_insert_id				= $_POST['last_insert_id'];
				$my_ses_id					= $_POST['count_id'];
				
				
		if($my_ses_id <=6 ){
				
				/* [Editable] Target Path for the images
				---------------------------------------*/
				define('LARGE_IMAGE_PATH','im/'); 	# Path for the original Image
				define('SMALL_IMAGE_PATH','im/im_thum/');	# Path for the Thumbnail Image
				
				/* [Editable] File Field Name
				----------------------------*/
				define('IMAGE_FIELD_NAME','image_f');		# Field name from form
				
				/* [Editable] Specify Dimension to Thumbnail
				------------------------------------------*/
				$th_max_width 	= 158;							# Maximum width
				$th_max_height 	= 102;							# Maximum Height
				
				
				$img_xtension = substr(basename($_FILES[IMAGE_FIELD_NAME]['name']),-4,4);
				
				
				$img_name 		= date("ymdGis") . $img_xtension;
				$target_path 	= LARGE_IMAGE_PATH . $img_name;				
				
				
				/* Check if the upload was successful
				------------------------------------*/
				move_uploaded_file($_FILES[IMAGE_FIELD_NAME]['tmp_name'], $target_path);
				$image_attribs  = getimagesize($target_path);
				$im_old 		= imagecreatefromjpeg($target_path); 
						
				/*
				L1 -> shrink image propotionately, based on the original image dimension
				L2 & 3 -> Calculate width and height!
				------------------------------------------------------------------------------*/
				$ratio = ($image_attribs[0] > $image_attribs[1]) ? $th_max_width / $image_attribs[0] : $th_max_height / $image_attribs[1];
				$th_width = $image_attribs[0] * $ratio;
				$th_height = $image_attribs[1] * $ratio;
						
				/*
				L1 -> Create a new true color image with specified width + height
				L2 -> Should antialias functions be used or not (not used here)
				-----------------------------------------------------------------------------*/
				$im_new = imagecreatetruecolor($th_width, $th_height);
				#imageantialias($im_new,true); //supports php 4.3.2+
			
				/*
				L1 -> Move an instance of the image to thumnail directory
				L2 -> Copy and resize the image with resampling
				L3 -> compile image / output image
						-----------------------------------------------------------------------------*/						
				$th_file_name = SMALL_IMAGE_PATH . $img_name;
				imagecopyresampled($im_new,$im_old,0,0,0,0,$th_width,$th_height, $image_attribs[0], $image_attribs[1]);
				imagejpeg($im_new,$th_file_name,100);
				
				if($my_ses_id==''){
				
					$update_query	= "UPDATE accomodation SET image_0='$img_name' WHERE a_id=$last_insert_id";
					//$update_query	= "UPDATE accomodation SET image_0='$img_name' WHERE excursion_id=$last_insert_id";
					//echo $update_query;
					mysql_query($update_query) or die(mysql_error());
					$db_connection_call->close();
				
				}
					else{
					
						
	$update_query	= "UPDATE accomodation SET image_$my_ses_id='$img_name' WHERE a_id=$last_insert_id";
						//echo $update_query;
						mysql_query($update_query) or die(mysql_error());
						$db_connection_call->close();
					
					
					}
				$_SESSION['sess_count']=$my_ses_id+1;
				header("Location:upload_image_gallery.php?last_insert_accom_id=$last_insert_id");
				
				}
				else {
					
					//echo "Exceed the Limit";
					unset($_SESSION['sess_count']);
					$_SESSION['accom_success']='Image Uploading Is Successfully Done !!!';
					header("Location:accommodation_informations.php");
					
					}
				break;

case "event_image_insert":
				
				
				$last_insert_id				= $_POST['last_insert_id'];
				$my_ses_id					= $_POST['count_id'];
				
				
		if($my_ses_id <6 ){
				
				/* [Editable] Target Path for the images
				---------------------------------------*/
				define('LARGE_IMAGE_PATH','../srilanka_events/images/pop/'); 	# Path for the original Image
				define('SMALL_IMAGE_PATH','../srilanka_events/images/thum/');	# Path for the Thumbnail Image
				
				/* [Editable] File Field Name
				----------------------------*/
				define('IMAGE_FIELD_NAME','image_f');		# Field name from form
				
				/* [Editable] Specify Dimension to Thumbnail
				------------------------------------------*/
				$th_max_width 	= 158;							# Maximum width
				$th_max_height 	= 102;							# Maximum Height
				
				
				$img_xtension = substr(basename($_FILES[IMAGE_FIELD_NAME]['name']),-4,4);
				
				
				$img_name 		= date("ymdGis") . $img_xtension;
				$target_path 	= LARGE_IMAGE_PATH . $img_name;				
				
				
				/* Check if the upload was successful
				------------------------------------*/
				move_uploaded_file($_FILES[IMAGE_FIELD_NAME]['tmp_name'], $target_path);
				$image_attribs  = getimagesize($target_path);
				$im_old 		= imagecreatefromjpeg($target_path); 
						
				/*
				L1 -> shrink image propotionately, based on the original image dimension
				L2 & 3 -> Calculate width and height!
				------------------------------------------------------------------------------*/
				$ratio = ($image_attribs[0] > $image_attribs[1]) ? $th_max_width / $image_attribs[0] : $th_max_height / $image_attribs[1];
				$th_width = $image_attribs[0] * $ratio;
				$th_height = $image_attribs[1] * $ratio;
						
				/*
				L1 -> Create a new true color image with specified width + height
				L2 -> Should antialias functions be used or not (not used here)
				-----------------------------------------------------------------------------*/
				$im_new = imagecreatetruecolor($th_width, $th_height);
				#imageantialias($im_new,true); //supports php 4.3.2+
			
				/*
				L1 -> Move an instance of the image to thumnail directory
				L2 -> Copy and resize the image with resampling
				L3 -> compile image / output image
						-----------------------------------------------------------------------------*/						
				$th_file_name = SMALL_IMAGE_PATH . $img_name;
				imagecopyresampled($im_new,$im_old,0,0,0,0,$th_width,$th_height, $image_attribs[0], $image_attribs[1]);
				imagejpeg($im_new,$th_file_name,100);
				
				if($my_ses_id==''){
				
					$update_query	= "UPDATE events SET image_0='$img_name' WHERE event_id=$last_insert_id";
					mysql_query($update_query) or die(mysql_error());
					//$db_connection_call->close();
					header("Location:event_image_gallery.php?last_insert_accom_id=$last_insert_id");
				
				}
					else{
					
						
						$update_query	= "UPDATE events SET image_$my_ses_id='$img_name' WHERE event_id=$last_insert_id";
						mysql_query($update_query) or die(mysql_error());
						}
						
						$_SESSION['sess_count']=$my_ses_id+1;
						header("Location:event_image_gallery.php?last_insert_id=$last_insert_id");
								
				}
				else {
					
					//echo "Exceed the Limit";
					unset($_SESSION['sess_count']);
					$_SESSION['accom_success']='Image Uploading Is Successfully Done !!!';
					header("Location:events.php");
					
					}
				break;

case "insert_excursion_images":
				
				
				$last_insert_id				= $_POST['last_insert_id'];
				$my_ses_id					= $_POST['count_id'];
				
				
		if($my_ses_id <=5 ){
				
				/* [Editable] Target Path for the images
				---------------------------------------*/
				define('LARGE_IMAGE_PATH','../excursions/images/pop/'); 	# Path for the original Image
				define('SMALL_IMAGE_PATH','../excursions/images/thum/');	# Path for the Thumbnail Image
				
				/* [Editable] File Field Name
				----------------------------*/
				define('IMAGE_FIELD_NAME','image_f');		# Field name from form
				
				/* [Editable] Specify Dimension to Thumbnail
				------------------------------------------*/
				$th_max_width 	= 158;							# Maximum width
				$th_max_height 	= 102;							# Maximum Height
				
				
				$img_xtension = substr(basename($_FILES[IMAGE_FIELD_NAME]['name']),-4,4);
				
				
				$img_name 		= date("ymdGis") . $img_xtension;
				$target_path 	= LARGE_IMAGE_PATH . $img_name;				
				
				
				/* Check if the upload was successful
				------------------------------------*/
				move_uploaded_file($_FILES[IMAGE_FIELD_NAME]['tmp_name'], $target_path);
				$image_attribs  = getimagesize($target_path);
				$im_old 		= imagecreatefromjpeg($target_path); 
						
				/*
				L1 -> shrink image propotionately, based on the original image dimension
				L2 & 3 -> Calculate width and height!
				------------------------------------------------------------------------------*/
				$ratio = ($image_attribs[0] > $image_attribs[1]) ? $th_max_width / $image_attribs[0] : $th_max_height / $image_attribs[1];
				$th_width = $image_attribs[0] * $ratio;
				$th_height = $image_attribs[1] * $ratio;
						
				/*
				L1 -> Create a new true color image with specified width + height
				L2 -> Should antialias functions be used or not (not used here)
				-----------------------------------------------------------------------------*/
				$im_new = imagecreatetruecolor($th_width, $th_height);
				#imageantialias($im_new,true); //supports php 4.3.2+
			
				/*
				L1 -> Move an instance of the image to thumnail directory
				L2 -> Copy and resize the image with resampling
				L3 -> compile image / output image
						-----------------------------------------------------------------------------*/						
				$th_file_name = SMALL_IMAGE_PATH . $img_name;
				imagecopyresampled($im_new,$im_old,0,0,0,0,$th_width,$th_height, $image_attribs[0], $image_attribs[1]);
				imagejpeg($im_new,$th_file_name,100);
				
				if($my_ses_id==''){
				
					$update_query	= "UPDATE destnation_excursion SET image_0='$img_name' WHERE excursion_id=$last_insert_id";
					//echo $update_query;
					mysql_query($update_query) or die(mysql_error());
					$db_connection_call->close();
				
				}
					else{
					
						
						$update_query	= "UPDATE destnation_excursion SET image_$my_ses_id='$img_name' WHERE excursion_id=$last_insert_id";
						//echo $update_query;
						mysql_query($update_query) or die(mysql_error());
						$db_connection_call->close();
					
					
					}
				$_SESSION['sess_count']=$my_ses_id+1;
				header("Location:upload_excursion_gallery.php?last_insert_accom_id=$last_insert_id");
				
				}
				else {
					
					//echo "Exceed the Limit";
					unset($_SESSION['sess_count']);
					$_SESSION['accom_success']='Image Uploading Is Successfully Done !!!';
					header("Location:excursion_dash.php?city_id=84&destination_id=5");
					
					}
				break;




case "edit_accom_desc":

                $edit_accom_id	= $_POST['edit_accom_id'];
				$accom_name 	= $_POST['accom_name'];
                $accom_type 	= $_POST['accom_type'];
				$accom_into		= mysql_escape_string($_POST['accom_into']);//
                $accom_add 		= $_POST['accom_add'];
                $accom_city 	= $_POST['accom_city'];
                $accom_phon 	= $_POST['accom_phon'];
                $accom_fax 		= $_POST['accom_fax'];
                $accom_email 	= $_POST['accom_email'];
                $accom_url 		= $_POST['accom_url'];
                $accom_rooms 	= $_POST['accom_rooms'];
                $accom_rating 	= $_POST['accom_rating'];
				$accom_desc		=  mysql_escape_string($_POST['accom_desc']);
				$accom_faci 	=  mysql_escape_string($_POST['accom_faci']);
				/*---------- OTHER FACILITY CAPTURING ------------------ */
				$other_facility		= $_POST['fetures'];
				$other_facility_list = implode(",", $other_facility);
				/*----------- END OF OTHER FACILITY CAPTURING -----------*/
                $accom_excurion 	=  mysql_escape_string($_POST['accom_excurion']);
				$filename   			= $_FILES["d_imgfile"]["name"];
				
				
				

                /* IMAGE UPLOADS EXECUTIONS -- */
                if ($filename != '') {

                    $_SESSION['accom_success'] = 'Please Give Accommodation name Or Acommodation name is Already Inserted';
                    header('Location:edit_accommodation_informations.php');
                }

								if($_FILES["d_imgfile"]["name"] !=''){

								$filename   = $_FILES["d_imgfile"]["name"];
								$type       = $_FILES["d_imgfile"]["type"];
								$size       = $_FILES["d_imgfile"]["size"] / 1024;
								$temPname   = $_FILES["d_imgfile"]["tmp_name"];

								$random_value = rand(0, 10000000);
								$image_full_name = $random_value . $filename; // RENMAE THE IMAGE NAME
								//move_uploaded_file($_FILES["d_imgfile"]["tmp_name"], "../accommodations/images/header_images/" . $image_full_name);



$update_query	= "UPDATE accomodation SET a_name='$accom_name',a_introduction='$accom_into',a_type_id='$accom_type',a_address='$accom_addres',a_city='$accom_city',
								a_phone='$accom_phon',a_fax='$accom_fax',a_email='$accom_email',a_url='$accom_url',a_rooms='$accom_rooms',a_rating='$accom_rating',a_accommodation='$accom_desc',facilities='$accom_faci',other_facilities='$other_facility_list',leisure_excursion='$accom_excurion' WHERE a_id=$edit_accom_id";
								mysql_query($update_query) or die(mysql_error());
													
								$db_connection_call->close();

								header("Location:upload_image_gallery.php?last_insert_accom_id=$edit_accom_id");
								exit();

							}

								else {




								$update_query	= "UPDATE accomodation SET a_name='$accom_name',a_introduction='$accom_into',a_type_id='$accom_type',a_address='$accom_add',a_city='$accom_city',
								a_phone='$accom_phon',a_fax='$accom_fax',a_email='$accom_email',a_url='$accom_url',a_rooms='$accom_rooms',a_rating='$accom_rating',a_accommodation='$accom_desc',
								facilities='$accom_faci',other_facilities='$other_facility_list',leisure_excursion='$accom_excurion' WHERE a_id=$edit_accom_id";
								mysql_query($update_query) or die(mysql_error());
								$db_connection_call->close();

								$_SESSION['accom_success'] = 'Accommodation Update is Successfully done!!!';
								header("Location:edit_accommodation_informations.php?a_id=$edit_accom_id");
								exit();


                				}
            					break;

}
		
		
case "destination":


        switch ($mod_type) {
			
			case "insert_new_destination":
			
			
			$dest_name				= $_POST['dest_name'];
			$dest_city				= $_POST['dest_city'];
			$dest_desc				= mysql_escape_string($_POST['dest_desc']);
			
			if ($dest_name != ''){

                    $accom_name_check 		= mysql_query("SELECT dest_name FROM destination_type WHERE dest_name='$dest_name'");
                    $accom_name_check_rows 	= mysql_num_rows($accom_name_check);
					

                    if ($accom_name_check_rows == 1) {

                        $_SESSION['accom'] = 'Sorry this Destination name is Already Inserted';
                        header('Location:new_destination.php');
                    }

                    if ($accom_name_check_rows == 0) {
						
						
						$filename 	= $_FILES["d_imgfile"]["name"];
                		$type 		= $_FILES["d_imgfile"]["type"];
						$size 		= ($_FILES["d_imgfile"]["size"] / 1024);
						$temPname 	= $_FILES["d_imgfile"]["tmp_name"];
		
						$random_value 		= rand(0, 10000000);
						$image_full_name 	= $random_value . $filename; // RENMAE THE IMAGE NAME
						move_uploaded_file($_FILES["d_imgfile"]["tmp_name"], "../where_to_go/images/header_images/" . $image_full_name);

						$insert_accom_type = "INSERT INTO destination_type(city_id,dest_name,dest_desc,dest_header_image)VALUES('$dest_city	','$dest_name','$dest_desc','$image_full_name')";
                        mysql_query($insert_accom_type) or die(mysql_error());
                        $db_connection_call->close();

                        $_SESSION['accom'] = 'New Destination is Inserted';
                        header('Location:new_destination.php');
						
                    }
                } else {

                    $_SESSION['accom'] = 'Accommodation Field Cannot be Empty !!!';
                    header('Location:new_destination.php');
                }
			break;
			
			
			
case "insert_new_excursion":
			
			
			$destination_id		= $_POST['destination_id'];
			$city_id			= $_POST['city_id'];
			$ex_name			= $_POST['ex_name'];
			$ex_add				= $_POST['ex_add'];
			$ex_phon			= $_POST['ex_phon'];
			$ex_fax				= $_POST['ex_fax'];
			$ex_email			= $_POST['ex_email'];
			$ex_url				= $_POST['ex_url'];
			$ex_rating			= $_POST['ex_rating'];
			$ex_faci			=  mysql_escape_string($_POST['ex_faci']);
			$ex_excurion		=  mysql_escape_string($_POST['ex_excurion']);
						
			
			
			$filename   = $_FILES["d_imgfile"]["name"];
			$type       = $_FILES["d_imgfile"]["type"];
			$size       = $_FILES["d_imgfile"]["size"] / 1024;
			$temPname   = $_FILES["d_imgfile"]["tmp_name"];

			$random_value = rand(0, 10000000);
			$image_full_name = $random_value . $filename; // RENMAE THE IMAGE NAME
			move_uploaded_file($_FILES["d_imgfile"]["tmp_name"], "../excursions/images/header_images/" . $image_full_name);
			
			 
			 $insert_accom_type = "INSERT INTO destnation_excursion(destination_id,city_id,excursion_name,excursion_address,excursion_phone,excursion_fax,excursion_email,excursion_url,rating,excursion_facility,excursion_leisure,image_name)VALUES('$destination_id','$city_id','$ex_name','$ex_add','$ex_phon','$ex_fax','$ex_email','$ex_url','$ex_rating','$ex_faci','$ex_excurion','$image_full_name')";
             mysql_query($insert_accom_type) or die(mysql_error());
             			 
			 //mysql_query(insert_accom_type) or die(mysql_error());
			 $last_insert_accom_id = mysql_insert_id();
			 $db_connection_call->close();
             $_SESSION['accom_success'] = 'Accommodation Information Successfully Inserted !!!';
             header("Location:upload_excursion_gallery.php?last_insert_accom_id=$last_insert_accom_id");
			 //$_SESSION['accom_success'] = 'New Excursion Successfully Inserted!!!';
			 //header("Location:add_excursion_informations.php");
			 exit();
			 break;
			
		
case "edit_excursion_info":
	
	
			$destination_id		= $_POST['destination_id'];
			$city_id			= $_POST['city_id'];
			$excurion_id		= $_POST['excurion_id'];
			$ex_name			= $_POST['ex_name'];
			$ex_add				= $_POST['ex_add'];
			$ex_phon			= $_POST['ex_phon'];
			$ex_fax				= $_POST['ex_fax'];
			$ex_email			= $_POST['ex_email'];
			$ex_url				= $_POST['ex_url'];
			$ex_rating			= $_POST['ex_rating'];
			$ex_faci			=  mysql_escape_string($_POST['ex_faci']);
			$ex_excurion		=  mysql_escape_string($_POST['ex_excurion']);
			
			$filename   = $_FILES["d_imgfile"]["name"];
			$type       = $_FILES["d_imgfile"]["type"];
			$size       = $_FILES["d_imgfile"]["size"] / 1024;
			$temPname   = $_FILES["d_imgfile"]["tmp_name"];

			$random_value 		= rand(0, 10000000);
			$image_full_name 	= $random_value . $filename; // RENMAE THE IMAGE NAME
			//move_uploaded_file($_FILES["d_imgfile"]["tmp_name"], "../images/header_images/" . $image_full_name);
			
			$insert_accom_type = "UPDATE destnation_excursion SET excursion_name='$ex_name',excursion_address='$ex_add	',excursion_phone='$ex_phon',excursion_fax='$ex_fax',excursion_email='$ex_email',excursion_url='$ex_url',rating='$ex_rating',excursion_facility='$ex_faci',excursion_leisure='$ex_excurion' WHERE excursion_id=$excurion_id";
             mysql_query($insert_accom_type) or die(mysql_error());
             $db_connection_call->close();
			 $_SESSION['accom_success'] = 'Excursion Updation is Successfully Done!!!';
			 header("Location:edit_excursion_informations.php?execursion_id=$excurion_id&city_id=$city_id&destination_id=$destination_id");
			 exit();

	break;
	
case "edit_destination_acs":	

			$edit_id				= $_POST['edit_id'];
			$dest_name				= $_POST['dest_name'];
			$dest_city				= $_POST['dest_city'];
			$dest_desc				= mysql_escape_string($_POST['dest_desc']);
			
			$filename 	= $_FILES["d_imgfile"]["name"];
            $type 		= $_FILES["d_imgfile"]["type"];
			$size 		= ($_FILES["d_imgfile"]["size"] / 1024);
			$temPname 	= $_FILES["d_imgfile"]["tmp_name"];
			
			$random_value 		= rand(0, 10000000);
			$image_full_name 	= $random_value . $filename; // RENMAE THE IMAGE NAME
			//move_uploaded_file($_FILES["d_imgfile"]["tmp_name"], "../where_to_go/images/header_images/" . $image_full_name);

			$update_dest_type = "UPDATE destination_type SET city_id='$dest_city',dest_name='$dest_name',dest_desc='$dest_desc' WHERE dest_id=$edit_id";
            mysql_query($update_dest_type) or die(mysql_error());
            $db_connection_call->close();
			$_SESSION['accom'] = 'Destination is Successfully Updated !!!';
            header("Location:upload_destination_gallery.php?last_insert_id=$edit_id");
			break;
	}
	
	
		
		
case "what_to_see":		

 		switch ($mod_type) {
			
			case "insert_new_attraction":
			
			$attract_name				= $_POST['attract_name'];
			$what_to_see_desc			= mysql_escape_string($_POST['what_to_see_desc']);			
			$attract_city_id			= $_POST['dest_city'];
	
			
			if (($attract_name != '')&&($attract_city_id !=0)){

                    $accom_name_check 		= mysql_query("SELECT what_to_see_name FROM what_to_see WHERE what_to_see_name='$attract_name'");
                    $accom_name_check_rows 	= mysql_num_rows($accom_name_check);
					

                    if ($accom_name_check_rows == 1) {

                        $_SESSION['accom'] = 'Sorry this Attraction is Already Inserted';
                        header('Location:what_to_see.php');
                    }

                    if ($accom_name_check_rows == 0) {
						
						
						$filename 	= $_FILES["d_imgfile"]["name"];
                		$type 		= $_FILES["d_imgfile"]["type"];
						$size 		= ($_FILES["d_imgfile"]["size"] / 1024);
						$temPname 	= $_FILES["d_imgfile"]["tmp_name"];
		
						$random_value 		= rand(0, 10000000);
						$image_full_name 	= $random_value . $filename; // RENMAE THE IMAGE NAME
						move_uploaded_file($_FILES["d_imgfile"]["tmp_name"], "../what_to_see/images/header_images/" . $image_full_name);
						
                        $insert_accom_type = "INSERT INTO what_to_see(what_to_see_city_id,what_to_see_name,what_to_see_desc,what_to_see_image)VALUES('$attract_city_id','$attract_name','$what_to_see_desc','$image_full_name')";
                        mysql_query($insert_accom_type) or die(mysql_error());
						$last_insert_accom_id = mysql_insert_id();
                        $db_connection_call->close();

                        $_SESSION['accom'] = 'New Attraction is Inserted';
                        header("Location:upload_locaion_gallery.php?last_insert_id=$last_insert_accom_id");
                    }
                } else {

                    $_SESSION['accom'] = 'Attraction Or City Field Cannot be Empty !!!';
                    header('Location:what_to_see.php');
                }
			break;	
			
			
		case "insert_new_attaction_desc":
			
			$what_to_see_id		= $_POST['what_to_see_id'];
			$city_id			= $_POST['city_id'];
			$atrac_name			= $_POST['atrac_name'];
			$atrac_add			= $_POST['atrac_add'];
			$atrac_phon			= $_POST['atrac_phon'];
			$atrac_fax			= $_POST['atrac_fax'];
			$atrac_email		= $_POST['atrac_email'];
			$atrac_url			= $_POST['atrac_url'];
			$atrac_rating		= $_POST['atrac_rating'];
			$atrac_faci			= mysql_escape_string($_POST['atrac_faci']);//
			$atrac_excurion		= mysql_escape_string($_POST['atrac_excurion']);
			
			
			$filename   = $_FILES["d_imgfile"]["name"];
			$type       = $_FILES["d_imgfile"]["type"];
			$size       = $_FILES["d_imgfile"]["size"] / 1024;
			$temPname   = $_FILES["d_imgfile"]["tmp_name"];

			$random_value = rand(0, 10000000);
			$image_full_name = $random_value . $filename; // RENMAE THE IMAGE NAME
			move_uploaded_file($_FILES["d_imgfile"]["tmp_name"], "../what_to_see/images/header_images/" . $image_full_name);
			
			$insert_accom_type = "INSERT INTO what_to_see_dec(what_to_see_cat_id,city_id,attraction_name,attraction_palce,phone,fax,email,url,rating,facility,excursion,image)VALUES('$what_to_see_id','$city_id','$atrac_name','$atrac_add','$atrac_phon','$atrac_fax','$atrac_email','$atrac_url','$atrac_rating','$atrac_faci','$atrac_excurion','$image_full_name')";
             mysql_query($insert_accom_type) or die(mysql_error());
			 $last_insert_accom_id = mysql_insert_id();
			 
             $db_connection_call->close();
			 $_SESSION['accom_success'] = 'New Excursion Successfully Inserted!!!';
			 header("Location:upload_what_to_see_gallery.php?last_insert_accom_id=$last_insert_accom_id");
			 exit();
			 break;
			 
case "edit_what_to_see_records":
			
			$what_to_see_cat_id		= $_POST['what_to_see_cat_id'];
			$attract_name			= $_POST['attract_name'];
			$dest_city				= $_POST['dest_city'];			
			$what_to_see_desc		= mysql_escape_string($_POST['what_to_see_desc']);
			
						$filename 	= $_FILES["d_imgfile"]["name"];
						$type 		= $_FILES["d_imgfile"]["type"];
						$size 		= ($_FILES["d_imgfile"]["size"] / 1024);
						$temPname 	= $_FILES["d_imgfile"]["tmp_name"];
			
			$random_value 		= rand(0, 10000000);
			$image_full_name 	= $random_value . $filename; // RENMAE THE IMAGE NAME
			//move_uploaded_file($_FILES["d_imgfile"]["tmp_name"], "../what_to_see/images/header_images/" . $image_full_name);

			
			if($filename !=''){
			
			$update_dest_type = "UPDATE what_to_see SET what_to_see_city_id='$dest_city',what_to_see_name='$attract_name',what_to_see_desc='$what_to_see_desc' WHERE what_to_see_id=$what_to_see_cat_id";
            mysql_query($update_dest_type) or die(mysql_error());
            $db_connection_call->close();
		 	$_SESSION['accom'] = 'What To See Updation is Successfully Done !!!';
            header("Location:edit_what_to_see.php?city_id=$dest_city&what_to_see_id=$what_to_see_cat_id");
			}else{
				
				$update_dest_type = "UPDATE what_to_see SET what_to_see_city_id='$dest_city',what_to_see_name='$attract_name',what_to_see_desc='$what_to_see_desc' WHERE what_to_see_id=$what_to_see_cat_id";
            mysql_query($update_dest_type) or die(mysql_error());
            $db_connection_call->close();
		 	$_SESSION['accom'] = 'What To See Updation is Successfully Done !!!';
            header("Location:edit_what_to_see.php?city_id=$dest_city&what_to_see_id=$what_to_see_cat_id");
				
				
				
				}
		break;
		
		
		
		
		/*-------------------------------------- add more places -------------------------------------*/
case "insert_location_images":

		$last_insert_id			= $_POST['last_insert_id'];
		$my_ses_id				= $_POST['count_id'];
				
				
		if($my_ses_id <=6 ){
				
				/* [Editable] Target Path for the images
				---------------------------------------*/
				define('LARGE_IMAGE_PATH','../what_to_see/images/pop/'); 	# Path for the original Image
				define('SMALL_IMAGE_PATH','../what_to_see/images/thum/');	# Path for the Thumbnail Image
				
				/* [Editable] File Field Name
				----------------------------*/
				define('IMAGE_FIELD_NAME','image_f');		# Field name from form
				
				/* [Editable] Specify Dimension to Thumbnail
				------------------------------------------*/
				$th_max_width 	= 158;							# Maximum width
				$th_max_height 	= 102;							# Maximum Height
				
				
				$img_xtension = substr(basename($_FILES[IMAGE_FIELD_NAME]['name']),-4,4);
				
				
				$img_name 		= date("ymdGis") . $img_xtension;
				$target_path 	= LARGE_IMAGE_PATH . $img_name;				
				
				
				/* Check if the upload was successful
				------------------------------------*/
				move_uploaded_file($_FILES[IMAGE_FIELD_NAME]['tmp_name'], $target_path);
				$image_attribs  = getimagesize($target_path);
				$im_old 		= imagecreatefromjpeg($target_path); 
						
				
				$ratio = ($image_attribs[0] > $image_attribs[1]) ? $th_max_width / $image_attribs[0] : $th_max_height / $image_attribs[1];
				$th_width = $image_attribs[0] * $ratio;
				$th_height = $image_attribs[1] * $ratio;
				
				$im_new = imagecreatetruecolor($th_width, $th_height);
								
				$th_file_name = SMALL_IMAGE_PATH . $img_name;
				imagecopyresampled($im_new,$im_old,0,0,0,0,$th_width,$th_height, $image_attribs[0], $image_attribs[1]);
				imagejpeg($im_new,$th_file_name,100);
				
				if($my_ses_id==''){
				
				
					$update_query	= "UPDATE what_to_see SET image_0='$img_name' WHERE what_to_see_id=$last_insert_id";
					//echo $update_query;
					mysql_query($update_query) or die(mysql_error());
					$db_connection_call->close();
					//echo $img_name;
					
				
				
				
				}
					else{
						
					
						$update_query	= "UPDATE what_to_see SET image_$my_ses_id='$img_name' WHERE what_to_see_id=$last_insert_id";
						mysql_query($update_query) or die(mysql_error());
						$db_connection_call->close();
						
					}
						$_SESSION['sess_count']	=$my_ses_id+1;
						header("Location:upload_locaion_gallery.php?last_insert_id=$last_insert_id");
				
				}
				else {
					
						unset($_SESSION['sess_count']);
						$_SESSION['accom_success']='Image Uploading Is Successfully Done !!!';
						header("Location:new_destination.php");
					}
					break;
		
		break;
		
		
		/*---------------------------------------- End ----------------------------------------------*/
		
		
		/*-------------------------------------- ADD WHERE TO GO -------------------------------------*/
case "edit_where_to_go":

		$last_insert_id			= $_POST['last_insert_id'];
		$my_ses_id				= $_POST['count_id'];
				
				
		if($my_ses_id <=5 ){
				
				/* [Editable] Target Path for the images
				---------------------------------------*/
				define('LARGE_IMAGE_PATH','../where_to_go/images/pop/'); 	# Path for the original Image
				define('SMALL_IMAGE_PATH','../where_to_go/images/thum/');	# Path for the Thumbnail Image
				
				/* [Editable] File Field Name
				----------------------------*/
				define('IMAGE_FIELD_NAME','image_f');		# Field name from form
				
				/* [Editable] Specify Dimension to Thumbnail
				------------------------------------------*/
				$th_max_width 	= 158;							# Maximum width
				$th_max_height 	= 102;							# Maximum Height
				
				
				$img_xtension = substr(basename($_FILES[IMAGE_FIELD_NAME]['name']),-4,4);
				
				
				$img_name 		= date("ymdGis") . $img_xtension;
				$target_path 	= LARGE_IMAGE_PATH . $img_name;				
				
				
				/* Check if the upload was successful
				------------------------------------*/
				move_uploaded_file($_FILES[IMAGE_FIELD_NAME]['tmp_name'], $target_path);
				$image_attribs  = getimagesize($target_path);
				$im_old 		= imagecreatefromjpeg($target_path); 
						
				
				$ratio = ($image_attribs[0] > $image_attribs[1]) ? $th_max_width / $image_attribs[0] : $th_max_height / $image_attribs[1];
				$th_width = $image_attribs[0] * $ratio;
				$th_height = $image_attribs[1] * $ratio;
				
				$im_new = imagecreatetruecolor($th_width, $th_height);
								
				$th_file_name = SMALL_IMAGE_PATH . $img_name;
				imagecopyresampled($im_new,$im_old,0,0,0,0,$th_width,$th_height, $image_attribs[0], $image_attribs[1]);
				imagejpeg($im_new,$th_file_name,100);
				
				if($my_ses_id==''){
				
				
					$update_query	= "UPDATE destination_type SET image_0='$img_name' WHERE dest_id=$last_insert_id";
					//echo $update_query;
					mysql_query($update_query) or die(mysql_error());
					$db_connection_call->close();
					//echo $img_name;
					
				
				
				
				}
					else{
						
					
						$update_query	= "UPDATE destination_type SET image_$my_ses_id='$img_name' WHERE dest_id=$last_insert_id";
						mysql_query($update_query) or die(mysql_error());
						$db_connection_call->close();
						
						}
						$_SESSION['sess_count']	=$my_ses_id+1;
						header("Location:upload_destination_gallery.php?last_insert_id=$last_insert_id");
				
				}
				else {
					
						unset($_SESSION['sess_count']);
						$_SESSION['accom_success']='Image Uploading Is Successfully Done !!!';
						header("Location:new_destination.php");
					}
					break;
		
		break;
		
		
		/*---------------------------------------- End ----------------------------------------------*/
		
		
		
		

case "insert_wht_to_see_images":
				
				
				$last_insert_id				= $_POST['last_insert_id'];
				$my_ses_id					= $_POST['count_id'];
				
				
		if($my_ses_id <=5 ){
				
				/* [Editable] Target Path for the images
				---------------------------------------*/
				define('LARGE_IMAGE_PATH','../what_to_see/images/pop/'); 	# Path for the original Image
				define('SMALL_IMAGE_PATH','../what_to_see/images/thum/');	# Path for the Thumbnail Image
				
				/* [Editable] File Field Name
				----------------------------*/
				define('IMAGE_FIELD_NAME','image_f');		# Field name from form
				
				/* [Editable] Specify Dimension to Thumbnail
				------------------------------------------*/
				$th_max_width 	= 158;							# Maximum width
				$th_max_height 	= 102;							# Maximum Height
				
				
				$img_xtension = substr(basename($_FILES[IMAGE_FIELD_NAME]['name']),-4,4);
				
				
				$img_name 		= date("ymdGis") . $img_xtension;
				$target_path 	= LARGE_IMAGE_PATH . $img_name;				
				
				
				/* Check if the upload was successful
				------------------------------------*/
				move_uploaded_file($_FILES[IMAGE_FIELD_NAME]['tmp_name'], $target_path);
				$image_attribs  = getimagesize($target_path);
				$im_old 		= imagecreatefromjpeg($target_path); 
						
				
				$ratio = ($image_attribs[0] > $image_attribs[1]) ? $th_max_width / $image_attribs[0] : $th_max_height / $image_attribs[1];
				$th_width = $image_attribs[0] * $ratio;
				$th_height = $image_attribs[1] * $ratio;
				
				$im_new = imagecreatetruecolor($th_width, $th_height);
								
				$th_file_name = SMALL_IMAGE_PATH . $img_name;
				imagecopyresampled($im_new,$im_old,0,0,0,0,$th_width,$th_height, $image_attribs[0], $image_attribs[1]);
				imagejpeg($im_new,$th_file_name,100);
				
				if($my_ses_id==''){
				
					$update_query	= "UPDATE what_to_see_dec SET image_0='$img_name' WHERE what_to_see_id=$last_insert_id";
					//echo $update_query;
					mysql_query($update_query) or die(mysql_error());
					$db_connection_call->close();
				
				}
					else{
					
						
						$update_query	= "UPDATE what_to_see_dec SET image_$my_ses_id='$img_name' WHERE what_to_see_id=$last_insert_id";
						//echo $update_query;
						mysql_query($update_query) or die(mysql_error());
						$db_connection_call->close();
					
					
					}
				$_SESSION['sess_count']=$my_ses_id+1;
				header("Location:upload_what_to_see_gallery.php?last_insert_accom_id=$last_insert_id");
				
				}
				else {
					
					//echo "Exceed the Limit";
					unset($_SESSION['sess_count']);
					$_SESSION['accom_success']='Image Uploading Is Successfully Done !!!';
					header("Location:add_attractions_informations.php?city_id=7&what_to_see_id=7");
					
					}
				break;




/*---------------------------- What to see Content ---------------------------------*/

case "insert_wht_to_see_cat_images":
				
				
				$last_insert_id				= $_POST['last_insert_id'];
				$my_ses_id					= $_POST['count_id'];
				
				
		if($my_ses_id <=5 ){
				
				/* [Editable] Target Path for the images
				---------------------------------------*/
				define('LARGE_IMAGE_PATH','../what_to_see/images/pop/'); 	# Path for the original Image
				define('SMALL_IMAGE_PATH','../what_to_see/images/thum/');	# Path for the Thumbnail Image
				
				/* [Editable] File Field Name
				----------------------------*/
				define('IMAGE_FIELD_NAME','image_f');		# Field name from form
				
				/* [Editable] Specify Dimension to Thumbnail
				------------------------------------------*/
				$th_max_width 	= 158;							# Maximum width
				$th_max_height 	= 102;							# Maximum Height
				
				
				$img_xtension = substr(basename($_FILES[IMAGE_FIELD_NAME]['name']),-4,4);
				
				
				$img_name 		= date("ymdGis") . $img_xtension;
				$target_path 	= LARGE_IMAGE_PATH . $img_name;				
				
				
				/* Check if the upload was successful
				------------------------------------*/
				move_uploaded_file($_FILES[IMAGE_FIELD_NAME]['tmp_name'], $target_path);
				$image_attribs  = getimagesize($target_path);
				$im_old 		= imagecreatefromjpeg($target_path); 
						
				
				$ratio = ($image_attribs[0] > $image_attribs[1]) ? $th_max_width / $image_attribs[0] : $th_max_height / $image_attribs[1];
				$th_width = $image_attribs[0] * $ratio;
				$th_height = $image_attribs[1] * $ratio;
				
				$im_new = imagecreatetruecolor($th_width, $th_height);
								
				$th_file_name = SMALL_IMAGE_PATH . $img_name;
				imagecopyresampled($im_new,$im_old,0,0,0,0,$th_width,$th_height, $image_attribs[0], $image_attribs[1]);
				imagejpeg($im_new,$th_file_name,100);
				
				if($my_ses_id==''){
				
					$update_query	= "UPDATE what_to_see SET image_0='$img_name' WHERE what_to_see_id=$last_insert_id";
					//echo $update_query;
					mysql_query($update_query) or die(mysql_error());
					$db_connection_call->close();
				
				}
					else{
					
						
						$update_query	= "UPDATE what_to_see SET image_$my_ses_id='$img_name' WHERE what_to_see_id=$last_insert_id";
						//echo $update_query;
						mysql_query($update_query) or die(mysql_error());
						$db_connection_call->close();
					
					
					}
				$_SESSION['sess_count']=$my_ses_id+1;
				header("Location:upload_what_to_see_cat_gallery.php?last_insert_accom_id=$last_insert_id");
				
				}
				else {
					
					//echo "Exceed the Limit";
					unset($_SESSION['sess_count']);
					$_SESSION['accom_success']='Image Uploading Is Successfully Done !!!';
					header("Location:add_attractions_informations.php?city_id=7&what_to_see_id=7");
					
					}
				break;

/*---------------------- end ------------------------------*/

 
 
 case "edit_attraction_info":
 
 			$attraction_id		= $_POST['attraction_id'];
			$city_id			= $_POST['city_id'];
			$what_to_see_cat_id	= $_POST['what_to_see_cat_id'];
			
			$atrac_name			= $_POST['ex_name'];
			$atrac_faci			=  mysql_escape_string($_POST['ex_faci']);
			$atrac_excurion		=  mysql_escape_string($_POST['ex_excurion']);
			$type_of_tour		= $_POST['type_of_tour'];
			$price				= $_POST['price'];
			
			$filename   = $_FILES["d_imgfile"]["name"];
			$type       = $_FILES["d_imgfile"]["type"];
			$size       = $_FILES["d_imgfile"]["size"] / 1024;
			$temPname   = $_FILES["d_imgfile"]["tmp_name"];

			$random_value = rand(0, 10000000);
			$image_full_name = $random_value . $filename; // RENMAE THE IMAGE NAME
			//move_uploaded_file($_FILES["d_imgfile"]["tmp_name"], "../itenary/images/header_images/" . $image_full_name);
 
 $insert_accom_type = "UPDATE itenary_desc SET itenery_name='$atrac_name',itenery_intro='$atrac_faci',itenery_program='$atrac_excurion	',header_image='$image_full_name',buget='$type_of_tour',price='$price' WHERE itenery_desc_id=$attraction_id";
            mysql_query($insert_accom_type) or die(mysql_error());
          $db_connection_call->close();
			$_SESSION['accom_success'] = 'Itenarary Updation is Successfully Done!!!';
			header("Location:edit_itenary_informations.php?itenery_id=$attraction_id");
			 exit();
 			 break;
 
 
 }


case "what_to_do":		

 		switch ($mod_type) {
			
case "insert_new_thing_to_do":
			
			$to_do_name					= $_POST['to_do_name'];
			$what_to_do_desc			= mysql_escape_string($_POST['what_to_do_desc']);			
			$attract_city_id			= $_POST['dest_city'];
	
			
			if (($to_do_name != '')&&($attract_city_id !=0)){

                  $accom_name_check = mysql_query("SELECT what_to_do FROM what_to_do WHERE what_to_do='$to_do_name'");
                  $accom_name_check_rows 	= mysql_num_rows($accom_name_check);
					

                    if ($accom_name_check_rows == 1) {

                        $_SESSION['accom'] = 'Sorry this To Be Done Action is Already Inserted';
                        header('Location:what_to_do.php');
                    }

                    if ($accom_name_check_rows == 0) {
						
						
						$filename 	= $_FILES["d_imgfile"]["name"];
                		$type 		= $_FILES["d_imgfile"]["type"];
						$size 		= ($_FILES["d_imgfile"]["size"] / 1024);
						$temPname 	= $_FILES["d_imgfile"]["tmp_name"];
		
						$random_value 		= rand(0, 10000000);
						$image_full_name 	= $random_value . $filename; // RENMAE THE IMAGE NAME
						move_uploaded_file($_FILES["d_imgfile"]["tmp_name"], "../what_to_do/images/header_images/" . $image_full_name);
						
                        $insert_accom_type = "INSERT INTO what_to_do(what_to_do_city,what_to_do,what_to_do_desc,what_to_do_image)VALUES('$attract_city_id','$to_do_name','$what_to_do_desc','$image_full_name')";
                        mysql_query($insert_accom_type) or die(mysql_error());
                        $db_connection_call->close();

                        $_SESSION['accom'] = 'New To Be Done Action is Inserted';
                        header('Location:what_to_do.php');
                    }
                } else {

                    $_SESSION['accom'] = 'Attraction Or City Field Cannot be Empty !!!';
                    header('Location:what_to_do.php');
                }
				break;
				

case "insert_new_to_do_desc":

			$what_to_do_id		= $_POST['what_to_do_id'];
			$city_id			= $_POST['city_id'];
			$atrac_name			= $_POST['atrac_name'];
			$atrac_add			= $_POST['atrac_add'];
			$atrac_phon			= $_POST['atrac_phon'];
			$atrac_fax			= $_POST['atrac_fax'];
			$atrac_email		= $_POST['atrac_email'];
			$atrac_url			= $_POST['atrac_url'];
			$atrac_rating		= $_POST['atrac_rating'];
			$atrac_faci			= mysql_escape_string($_POST['atrac_faci']);//
			$atrac_excurion		= mysql_escape_string($_POST['atrac_excurion']);
			
			
			$filename   = $_FILES["d_imgfile"]["name"];
			$type       = $_FILES["d_imgfile"]["type"];
			$size       = $_FILES["d_imgfile"]["size"] / 1024;
			$temPname   = $_FILES["d_imgfile"]["tmp_name"];

			$random_value = rand(0, 10000000);
			$image_full_name = $random_value . $filename; // RENMAE THE IMAGE NAME
			move_uploaded_file($_FILES["d_imgfile"]["tmp_name"], "../what_to_do/images/header_images/" . $image_full_name);
			
			$insert_accom_type = "INSERT INTO what_to_do_desc(what_to_do_cat_id,city_id,to_do_name,attraction_palce,phone,fax,email,url,rating,facility,excursion,image)VALUES('$what_to_do_id','$city_id','$atrac_name','$atrac_add','$atrac_phon','$atrac_fax','$atrac_email','$atrac_url','$atrac_rating','$atrac_faci','$atrac_excurion','$image_full_name')";
             mysql_query($insert_accom_type) or die(mysql_error());
			 $last_insert_accom_id = mysql_insert_id();
			 
             $db_connection_call->close();
			 $_SESSION['accom_success'] = 'New Excursion Successfully Inserted!!!';
			 header("Location:add_to_do_informations.php?city_id=$city_id&what_to_see_id=$what_to_do_id");
			 exit();
		break;
		
		
		
case "insert_new_whatdo_images":

	$last_insert_id				= $_POST['last_insert_id'];
	$my_ses_id					= $_POST['count_id'];
				
				
		if($my_ses_id <=5 ){
				
				/* [Editable] Target Path for the images
				---------------------------------------*/
				define('LARGE_IMAGE_PATH','../what_to_do/images/pop/'); 	# Path for the original Image
				define('SMALL_IMAGE_PATH','../what_to_do/images/thum/');	# Path for the Thumbnail Image
				
				/* [Editable] File Field Name
				----------------------------*/
				define('IMAGE_FIELD_NAME','image_f');		# Field name from form
				
				/* [Editable] Specify Dimension to Thumbnail
				------------------------------------------*/
				$th_max_width 	= 158;							# Maximum width
				$th_max_height 	= 102;							# Maximum Height
				
				
				$img_xtension = substr(basename($_FILES[IMAGE_FIELD_NAME]['name']),-4,4);
				
				
				$img_name 		= date("ymdGis") . $img_xtension;
				$target_path 	= LARGE_IMAGE_PATH . $img_name;				
				
				
				/* Check if the upload was successful
				------------------------------------*/
				move_uploaded_file($_FILES[IMAGE_FIELD_NAME]['tmp_name'], $target_path);
				$image_attribs  = getimagesize($target_path);
				$im_old 		= imagecreatefromjpeg($target_path); 
						
				
				$ratio = ($image_attribs[0] > $image_attribs[1]) ? $th_max_width / $image_attribs[0] : $th_max_height / $image_attribs[1];
				$th_width = $image_attribs[0] * $ratio;
				$th_height = $image_attribs[1] * $ratio;
				
				$im_new = imagecreatetruecolor($th_width, $th_height);
								
				$th_file_name = SMALL_IMAGE_PATH . $img_name;
				imagecopyresampled($im_new,$im_old,0,0,0,0,$th_width,$th_height, $image_attribs[0], $image_attribs[1]);
				imagejpeg($im_new,$th_file_name,100);
				
				if($my_ses_id==''){
				
				
					$update_query	= "UPDATE what_to_do_desc SET image_0='$img_name' WHERE what_to_do_id=$last_insert_id";
					mysql_query($update_query) or die(mysql_error());
					$db_connection_call->close();
				
				
				
				}
					else{
						
					
						$update_query	= "UPDATE what_to_do_desc SET image_$my_ses_id='$img_name' WHERE what_to_do_id=$last_insert_id";
						mysql_query($update_query) or die(mysql_error());
						$db_connection_call->close();
					
					
					
						
						
					}
						$_SESSION['sess_count']=$my_ses_id+1;
						header("Location:upload_what_to_do_image_gallery.php?last_insert_id=$last_insert_id");
				
				}
				else {
					
						unset($_SESSION['sess_count']);
						$_SESSION['accom_success']='Image Uploading Is Successfully Done !!!';
						header("Location:what_to_do_dash.php?city_id=66&what_to_see_id=$last_insert_id");
					}
					break;

case "update_what_do_images":

	$last_insert_id				= $_POST['last_insert_id'];
	$my_ses_id					= $_POST['count_id'];
				
				
		if($my_ses_id <=5 ){
				
				/* [Editable] Target Path for the images
				---------------------------------------*/
				define('LARGE_IMAGE_PATH','../what_to_do/images/pop/'); 	# Path for the original Image
				define('SMALL_IMAGE_PATH','../what_to_do/images/thum/');	# Path for the Thumbnail Image
				
				/* [Editable] File Field Name
				----------------------------*/
				define('IMAGE_FIELD_NAME','image_f');		# Field name from form
				
				/* [Editable] Specify Dimension to Thumbnail
				------------------------------------------*/
				$th_max_width 	= 158;							# Maximum width
				$th_max_height 	= 102;							# Maximum Height
				
				
				$img_xtension = substr(basename($_FILES[IMAGE_FIELD_NAME]['name']),-4,4);
				
				
				$img_name 		= date("ymdGis") . $img_xtension;
				$target_path 	= LARGE_IMAGE_PATH . $img_name;				
				
				
				/* Check if the upload was successful
				------------------------------------*/
				move_uploaded_file($_FILES[IMAGE_FIELD_NAME]['tmp_name'], $target_path);
				$image_attribs  = getimagesize($target_path);
				$im_old 		= imagecreatefromjpeg($target_path); 
						
				
				$ratio = ($image_attribs[0] > $image_attribs[1]) ? $th_max_width / $image_attribs[0] : $th_max_height / $image_attribs[1];
				$th_width = $image_attribs[0] * $ratio;
				$th_height = $image_attribs[1] * $ratio;
				
				$im_new = imagecreatetruecolor($th_width, $th_height);
								
				$th_file_name = SMALL_IMAGE_PATH . $img_name;
				imagecopyresampled($im_new,$im_old,0,0,0,0,$th_width,$th_height, $image_attribs[0], $image_attribs[1]);
				imagejpeg($im_new,$th_file_name,100);
				
				if($my_ses_id==''){
				
				
					$update_query	= "UPDATE what_to_do SET image_0='$img_name' WHERE what_to_do_id=$last_insert_id";
					mysql_query($update_query) or die(mysql_error());
					$db_connection_call->close();
				
				
				
				}
					else{
						
					
						$update_query	= "UPDATE what_to_do SET image_$my_ses_id='$img_name' WHERE what_to_do_id=$last_insert_id";
						mysql_query($update_query) or die(mysql_error());
						$db_connection_call->close();
					
					
					
						
						
					}
						$_SESSION['sess_count']=$my_ses_id+1;
						header("Location:upload_what_to_do_image_gallery.php?last_insert_id=$last_insert_id");
				
				}
				else {
					
						unset($_SESSION['sess_count']);
						$_SESSION['accom_success']='Image Uploading Is Successfully Done !!!';
						header("Location:what_to_do_dash.php?city_id=66&what_to_do_id=$last_insert_id");
					}
					break;



case "edit_ToDo_info":

			$to_do_id			= $_POST['to_do_id'];
			$city_id			= $_POST['city_id'];
			$what_to_do_cat_id	= $_POST['what_to_do_cat_id'];
			$to_do_name			= $_POST['ex_name'];
			$atrac_add			= $_POST['ex_add'];
			$atrac_phon			= $_POST['ex_phon'];
			$atrac_fax			= $_POST['ex_fax'];
			$atrac_email		= $_POST['ex_email'];
			$atrac_url			= $_POST['ex_url'];
			$atrac_rating		= $_POST['ex_rating'];
			$atrac_faci			=  mysql_escape_string($_POST['ex_faci']);
			$atrac_excurion		=  mysql_escape_string($_POST['ex_excurion']);
			
			$filename   = $_FILES["d_imgfile"]["name"];
			$type       = $_FILES["d_imgfile"]["type"];
			$size       = $_FILES["d_imgfile"]["size"] / 1024;
			$temPname   = $_FILES["d_imgfile"]["tmp_name"];

			$random_value = rand(0, 10000000);
			$image_full_name = $random_value . $filename; // RENMAE THE IMAGE NAME
			//move_uploaded_file($_FILES["d_imgfile"]["tmp_name"], "../what_to_do/images/header_images/" . $image_full_name);
 
 $insert_accom_type = "UPDATE what_to_do_desc SET what_to_do_cat_id='$what_to_do_cat_id',city_id='$city_id',to_do_name='$to_do_name',attraction_palce='$atrac_add',phone='$atrac_phon',fax='$atrac_fax',email='$atrac_email',url='$atrac_url',rating='$atrac_rating',facility='$atrac_faci',excursion='$atrac_excurion' WHERE what_to_do_id=$to_do_id";
             mysql_query($insert_accom_type) or die(mysql_error());
             $db_connection_call->close();
			 $_SESSION['accom_success'] = 'To Do Updation is Successfully Done!!!';
			 header("Location:edit_ToDo_informations.php?to_do_id=$to_do_id&what_to_do_cat_id=$what_to_do_cat_id");
			 break;
		



case "guest_comment":

$name		= $_POST['name'];
$country	= $_POST['country'];
$email		= $_POST['email'];
$title		= $_POST['title'];
$comment	= mysql_escape_string($_POST['comment']);



$insert_accom_type = "INSERT INTO comment(name,country,title,comment,date)VALUES('$name','$country','$email','$title','$comment')";
mysql_query($insert_accom_type) or die(mysql_error());
$db_connection_call->close();
$_SESSION['accom'] = 'Thanks for your valuable Comment !!!';
header('Location:../comments.php');

break;


}







case "itenary":		

 		switch ($mod_type) {
			
			case "insert_new_itenary":
		
			$itenery_name 	= $_POST['itenery_name'];
			$dest_city		= $_POST['dest_city']; 
			
			if ($itenery_name != '')
				{
					
					if ($dest_city == 0){

                        $_SESSION['city'] = 'City is a Mandatory Component';
                        header('Location:itenaries.php');
						exit();
                    	}
						
				else{

                    $accom_name_check = mysql_query("SELECT itenary_name FROM itenary_type WHERE itenary_name='$itenery_name'");
                    $accom_name_check_rows = mysql_num_rows($accom_name_check);

                    if ($accom_name_check_rows == 1){

                        $_SESSION['accom'] = 'Sorry this Itenary  name is Already Exist';
                        header('Location:itenaries.php');
                    	}
														

                   else{
					$insert_accom_type = "INSERT INTO itenary_type(itenary_name,itenary_target_city)VALUES('$itenery_name','$dest_city')";
                    mysql_query($insert_accom_type) or die(mysql_error());
                    $db_connection_call->close();

                    $_SESSION['accom'] = 'New Itenary Type is Inserted';
                    header('Location:itenaries.php');
                    
						}
                	} 
				}
					else {

                    $_SESSION['accom'] = 'Please Itenary Name !!!';
                    header('Location:itenaries.php');
                }
			break;
			
			
		case "insert_new_itenary_desc":
		
			$iten_type_id		= $_POST['iten_type_id'];
			$city_id			= $_POST['city_id'];
			
			$itenary_name			= $_POST['itenary_name'];
			$itenary_intro			= mysql_escape_string($_POST['itenary_intro']);//
			$itenary_highlight		= mysql_escape_string($_POST['itenary_highlight']);
			$itenery_program		= mysql_escape_string($_POST['itenery_program']);
			$price					= mysql_escape_string($_POST['price']);
			$type_of_tour			= $_POST['type_of_tour'];
			
			$filename   = $_FILES["d_imgfile"]["name"];
			$type       = $_FILES["d_imgfile"]["type"];
			$size       = $_FILES["d_imgfile"]["size"] / 1024;
			$temPname   = $_FILES["d_imgfile"]["tmp_name"];

			$random_value = rand(0, 10000000);
			$image_full_name = $random_value . $filename; // RENMAE THE IMAGE NAME
			move_uploaded_file($_FILES["d_imgfile"]["tmp_name"], "../itenary/images/header_images/" . $image_full_name);
			
			$insert_accom_type = "INSERT INTO itenary_desc(itenery_cat_id,city_id,itenery_name,itenery_intro,highlights,itenery_program,header_image,buget,price)VALUES('$iten_type_id','$city_id','$itenary_name','$itenary_intro','$itenary_highlight','$itenery_program','$image_full_name','$type_of_tour','$price')";
             mysql_query($insert_accom_type) or die(mysql_error());
             $last_insert_accom_id = mysql_insert_id();
			 $db_connection_call->close();
            
			$_SESSION['accom_success'] = 'Accommodation Information Successfully Inserted !!!';
             header("Location:upload_itenary_gallery.php?last_insert_accom_id=$last_insert_accom_id");
			 
			 		
		break;
		
case "experiance":
		
		$experiance_name			= $_POST['experiance_name'];
		$experiance_intro			= mysql_escape_string($_POST['experiance_intro']);
		$dest_city					= $_POST['dest_city'];
		$experiance_venu			= mysql_escape_string($_POST['experiance_venu']);
		$experiance_date			= $_POST['experiance_date'];
		$experiance_desc			= mysql_escape_string($_POST['experiance_desc']);
		
		$filename   = $_FILES["d_imgfile"]["name"];
		$type       = $_FILES["d_imgfile"]["type"];
		$size       = $_FILES["d_imgfile"]["size"] / 1024;
		$temPname   = $_FILES["d_imgfile"]["tmp_name"];

		$random_value = rand(0, 10000000);
		$image_full_name = $random_value . $filename; // RENMAE THE IMAGE NAME
		move_uploaded_file($_FILES["d_imgfile"]["tmp_name"], "../images/header_images/" . $image_full_name);
		
		$insert_accom_type = "INSERT INTO experiance(experiance_name,experiance_intro,experiance_city,venue,date,experiance_desc,header_image)VALUES('$experiance_name','$experiance_intro','$dest_city','$experiance_venu','$experiance_date','$experiance_desc','$image_full_name')";
        mysql_query($insert_accom_type) or die(mysql_error());
        $last_insert_accom_id = mysql_insert_id();
		$db_connection_call->close();
        $_SESSION['accom_success'] = 'Accommodation Information Successfully Inserted !!!';
        header("Location:upload_experiance_gallery.php?last_insert_accom_id=$last_insert_accom_id");
		//experiance_name,experiance_city,venue,date,
		//'$experiance_name','$dest_city','$experiance_venu','$experiance_date',
		break;
		
		
case "sl_news":
		
		$experiance_name			= $_POST['experiance_name'];
		$experiance_intro			= mysql_escape_string($_POST['ex_introduction']);
		$dest_city					= $_POST['dest_city'];
		$experiance_venu			= mysql_escape_string($_POST['experiance_venu']);
		$experiance_date			= $_POST['experiance_date'];
		$experiance_desc			= mysql_escape_string($_POST['experiance_desc']);
		$select						= $_POST['select'];
		
		$filename   = $_FILES["d_imgfile"]["name"];
		$type       = $_FILES["d_imgfile"]["type"];
		$size       = $_FILES["d_imgfile"]["size"] / 1024;
		$temPname   = $_FILES["d_imgfile"]["tmp_name"];

		$random_value = rand(0, 10000000);
		$image_full_name = $random_value . $filename; // RENMAE THE IMAGE NAME
		move_uploaded_file($_FILES["d_imgfile"]["tmp_name"], "../srilanka_news/images/header_images/" . $image_full_name);
		
		$insert_accom_type = "INSERT INTO news(news_title,news_intro,city,news_venue,date,news_desc,heade_image,act)VALUES('$experiance_name','$experiance_intro','$dest_city','$experiance_venu','$experiance_date','$experiance_desc','$image_full_name','$select')";
        
		mysql_query($insert_accom_type) or die(mysql_error());
       
	   
	    $last_insert_accom_id = mysql_insert_id();
		$db_connection_call->close();
        $_SESSION['accom_success'] = 'Accommodation Information Successfully Inserted !!!';
        header("Location:upload_news_gallery.php?last_insert_accom_id=$last_insert_accom_id");
		
		break;
	
	
case "insert_experiance_images":

		$last_insert_id			= $_POST['last_insert_id'];
		$my_ses_id				= $_POST['count_id'];
				
				
		if($my_ses_id <3 ){
				
				/* [Editable] Target Path for the images
				---------------------------------------*/
				define('LARGE_IMAGE_PATH','../srilanka_news/images/pop/'); 	# Path for the original Image
				define('SMALL_IMAGE_PATH','../srilanka_news/images/thum/');	# Path for the Thumbnail Image
				
				/* [Editable] File Field Name
				----------------------------*/
				define('IMAGE_FIELD_NAME','image_f');		# Field name from form
				
				/* [Editable] Specify Dimension to Thumbnail
				------------------------------------------*/
				$th_max_width 	= 158;							# Maximum width
				$th_max_height 	= 102;							# Maximum Height
				
				
				$img_xtension = substr(basename($_FILES[IMAGE_FIELD_NAME]['name']),-4,4);
				
				
				$img_name 		= date("ymdGis") . $img_xtension;
				$target_path 	= LARGE_IMAGE_PATH . $img_name;				
				
				
				/* Check if the upload was successful
				------------------------------------*/
				move_uploaded_file($_FILES[IMAGE_FIELD_NAME]['tmp_name'], $target_path);
				$image_attribs  = getimagesize($target_path);
				$im_old 		= imagecreatefromjpeg($target_path); 
						
				
				$ratio = ($image_attribs[0] > $image_attribs[1]) ? $th_max_width / $image_attribs[0] : $th_max_height / $image_attribs[1];
				$th_width = $image_attribs[0] * $ratio;
				$th_height = $image_attribs[1] * $ratio;
				
				$im_new = imagecreatetruecolor($th_width, $th_height);
								
				$th_file_name = SMALL_IMAGE_PATH . $img_name;
				imagecopyresampled($im_new,$im_old,0,0,0,0,$th_width,$th_height, $image_attribs[0], $image_attribs[1]);
				imagejpeg($im_new,$th_file_name,100);
				
				if($my_ses_id==''){
				
				
					$update_query	= "UPDATE news SET image_0='$img_name' WHERE news_id=$last_insert_id";
					//echo $update_query;
					mysql_query($update_query) or die(mysql_error());
					$db_connection_call->close();
					//echo $img_name;
					
				
				
				
				}
					else{
						
					
						$update_query	= "UPDATE news SET image_$my_ses_id='$img_name' WHERE news_id=$last_insert_id";
						mysql_query($update_query) or die(mysql_error());
						$db_connection_call->close();
						
					}
						$_SESSION['sess_count']	=$my_ses_id+1;
						header("Location:upload_news_gallery.php?last_insert_id=$last_insert_id");
				
				}
				else {
					
						unset($_SESSION['sess_count']);
						$_SESSION['accom_success']='Image Uploading Is Successfully Done !!!';
						header("Location:news.php");
					}
					break;
		
		break;

		
		
		
		
		case "insert_itenary_images":
		
		
				$last_insert_id				= $_POST['last_insert_id'];
				$my_ses_id					= $_POST['count_id'];
				
				
		if($my_ses_id <=5 ){
				
				/* [Editable] Target Path for the images
				---------------------------------------*/
				define('LARGE_IMAGE_PATH','../itenary/images/pop/'); 	# Path for the original Image
				define('SMALL_IMAGE_PATH','../itenary/images/thum/');	# Path for the Thumbnail Image
				
				/* [Editable] File Field Name
				----------------------------*/
				define('IMAGE_FIELD_NAME','image_f');		# Field name from form
				
				/* [Editable] Specify Dimension to Thumbnail
				------------------------------------------*/
				$th_max_width 	= 158;							# Maximum width
				$th_max_height 	= 102;							# Maximum Height
				
				
				$img_xtension = substr(basename($_FILES[IMAGE_FIELD_NAME]['name']),-4,4);
				
				
				$img_name 		= date("ymdGis") . $img_xtension;
				$target_path 	= LARGE_IMAGE_PATH . $img_name;				
				
				
				/* Check if the upload was successful
				------------------------------------*/
				move_uploaded_file($_FILES[IMAGE_FIELD_NAME]['tmp_name'], $target_path);
				$image_attribs  = getimagesize($target_path);
				$im_old 		= imagecreatefromjpeg($target_path); 
						
				/*
				L1 -> shrink image propotionately, based on the original image dimension
				L2 & 3 -> Calculate width and height!
				------------------------------------------------------------------------------*/
				$ratio = ($image_attribs[0] > $image_attribs[1]) ? $th_max_width / $image_attribs[0] : $th_max_height / $image_attribs[1];
				$th_width = $image_attribs[0] * $ratio;
				$th_height = $image_attribs[1] * $ratio;
						
				/*
				L1 -> Create a new true color image with specified width + height
				L2 -> Should antialias functions be used or not (not used here)
				-----------------------------------------------------------------------------*/
				$im_new = imagecreatetruecolor($th_width, $th_height);
				#imageantialias($im_new,true); //supports php 4.3.2+
			
				/*
				L1 -> Move an instance of the image to thumnail directory
				L2 -> Copy and resize the image with resampling
				L3 -> compile image / output image
						-----------------------------------------------------------------------------*/						
				$th_file_name = SMALL_IMAGE_PATH . $img_name;
				imagecopyresampled($im_new,$im_old,0,0,0,0,$th_width,$th_height, $image_attribs[0], $image_attribs[1]);
				imagejpeg($im_new,$th_file_name,100);
				
				if($my_ses_id==''){
				
					$update_query	= "UPDATE itenary_desc SET image_0='$img_name' WHERE itenery_desc_id=$last_insert_id";
					//echo $update_query;
					mysql_query($update_query) or die(mysql_error());
					$db_connection_call->close();
				
				}
					else{
					
						
					$update_query	= "UPDATE itenary_desc SET image_$my_ses_id='$img_name' WHERE itenery_desc_id=$last_insert_id";
						//echo $update_query;
						mysql_query($update_query) or die(mysql_error());
						$db_connection_call->close();
					
					
					}
				$_SESSION['sess_count']=$my_ses_id+1;
				header("Location:upload_itenary_gallery.php?last_insert_accom_id=$last_insert_id");
				
				}
				else {
					
					//echo "Exceed the Limit";
					unset($_SESSION['sess_count']);
					$_SESSION['accom_success']='Image Uploading Is Successfully Done !!!';
					header("Location:itenary_dash.php?city_id=56&iten_type_id=$last_insert_id");
					
					}
				break;
			
			
		
		}
}
?>