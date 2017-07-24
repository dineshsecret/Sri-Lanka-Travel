<?php 
session_start();
include '../db/db_transaction.php';
//include '../db/dbclass.php';

 /* CALLING TO THE DATA BASE CONNECTION CLASS */
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();


if($_GET['id']!=''){

		$event_id	= $_GET['id'];
		$what_to_do					= new db_transaction;
		$what_to_do_recset 			= $what_to_do->Edit_Event_Info($event_id);
}

while($whatsToDo_detail_list = mysql_fetch_assoc($what_to_do_recset)){
	
	$event_name			= $whatsToDo_detail_list['event_name'];
	$venue				= $whatsToDo_detail_list['venue'];
	$event_desc			= $whatsToDo_detail_list['event_desc'];
	$event_sdate		= $whatsToDo_detail_list['event_sdate'];
	$event_edate		= $whatsToDo_detail_list['event_edate'];
	
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="stylesheet" href="css/BrightSide.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/new_dop_menu.css">

<script type="text/javascript" src="js/menu.js"></script>

<script>
function confirmDelete(delUrl) {
if (confirm("Are you sure you want to delete")) {
document.location = delUrl;
}
}
</script>
<script type="text/javascript" src="js/wysiwyg.js"></script>
<script type="text/javascript" src="js/wysiwyg-settings.js"></script>
<script type="text/javascript">
WYSIWYG.attach('textarea2', full); // full featured setup



</script>
<title>Negombo Travel &amp; Tours</title>
</head>
<body>
<!-- wrap starts here -->

<div id="wrap">

		
	  <!-- Menu Tabs -->
      <?php include('includes/header.php');?>
  </div>	
				
	<!-- content-wrap starts here -->
	<div id="content-wrap">
	  <div id="sidebar" >							
	    
	    
	    </div>
	  <div id="main">	
	  
			
	  <a name="TemplateInfo"></a> <div id="side_bar_heading">Add New Attraction<br />
	      <br />
	      <form id="form1" method="post" action="form_action.php" enctype="multipart/form-data">
	        <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="35">Event Name  </td>
                <td height="35"> :
                  <input name="event_name" type="text" id="attract_name" size="50" value="<?php echo $event_name; ?>" /><span class="error">
				<?php 
				if($_SESSION['accom']){
						echo($_SESSION['accom']);
						unset($_SESSION['accom']);
				}
				?></span>				</td>
              </tr>
              
              <tr>
                <td height="12">Venue </td>
                <td height="12">:                
                  <select name="dest_city" class="tiny_text" id="dest_city" >
                    <option>-- Select the City--</option>
                    <?php 
					
				
					$city = new db_transaction();
                	$city_rec= $city->Select_City();
           
				while($my_city_rec = mysql_fetch_assoc($city_rec))
				{ 
						
						echo " <option value=$my_city_rec[c_id]";
						echo ">", $my_city_rec['c_name'],"</option>\n";
				
				} 
					
		  ?>
                  </select></td>
              </tr>
              
              <tr>
                <td height="12"> Event Description </td>
                <td height="12">: <textarea id="textarea2" name="experiance_desc" style="width:500;height:350px;"><?php echo $event_desc; ?></textarea></td>
              </tr>
              <tr>
                <td height="36">Start Date </td>
                <td height="36"><input name="sta_date" type="text" id="sta_date" maxlength="10" value="<?php echo $event_sdate;?>" /></td>
              </tr>
              <tr>
                <td height="36">Ending date </td>
                <td height="36"><input name="end_date" type="text" id="end_date" maxlength="10" value="<?php echo $event_edate; ?>" /></td>
              </tr>
              <tr>
                <td height="36">Upload Default Page Header Image </td>
                <td height="36">: <input name="d_imgfile" type=file class="tiny_text" id="accom_images"></td>
              </tr>
              <tr>
                <td width="25%" height="30">
                <input type="hidden" name="page_name" value="events"  />
                <input type="hidden" name="mod" value="edit_event_act" />
				<input type="hidden" name="event_id" value="<?php echo $event_id;?>" />
				</td>
                <td width="75%" height="30"><input name="Submit" type="submit" class="tiny_text" value="Submit" /> </td>
              </tr>
              <tr>
                <td height="24" bgcolor="#C10000"><span class="error_mark">&nbsp;<u>Listed Experiances</u></span> <br /></td>
                <td width="75%" height="24">
		<?php
                $experiance 	= new db_transaction();
                $experiance_rec	= $experiance->CallAllEvents();

            
			 ?></td>
              </tr>
              <tr>
                <td height="15" colspan="2">
                <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#EFEFEF">
                  <?php while($my_experiance_rec = mysql_fetch_assoc($experiance_rec)){ ?>
                  <tr>
                    
                    <td width="597" height="25" align="left">&nbsp;
                   	<?php print $my_experiance_rec['event_name'];?></td>
                    <td width="128" align="center" bgcolor="#000000"><a href="event_image_gallery.php?last_insert_id=<?php echo $my_experiance_rec['event_id']; ?>">Add Images </a></td>
                    <td width="131" align="center" bgcolor="#000000">Edit</td>
                    <td width="57" align="center" bgcolor="#333333"><a href="delete_actions.php?id=<?php echo $my_experiance_rec['experiance_id'];?>&action=<?php echo 'experiance_id';?>"onclick="return confirm('Are you sure you want to delete this Experiance ???')">Delete</a></td>
                  </tr>
                  <?php  } ?>
                </table></td>
              </tr>
            </table>
        </form>
	  </div>	
	  </div>
	  <div id="rightbar">
	  </div>
		<!-- content-wrap ends here -->		
  </div>

<!-- footer starts here -->	
<div id="footer">
	
	<div class="footer-left">
		<p class="align-left"><strong> </strong><br />
	  </p>
	</div>
	<div class="footer-left">
		<p class="align-left"><strong> </strong><br />
	  </p>
	</div>
	<div class="footer-left">
		<p class="align-left"><strong> </strong><br />
	  </p>
	</div>
	
	
	<div class="footer-right">
		<p class="align-right">
		<a href="index.html"> </a></p>
	</div>
	
</div>

</div>

</body>
</html>
