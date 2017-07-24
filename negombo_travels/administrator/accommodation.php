<?php 
session_start();
include '../db/db_transaction.php';
//include '../db/dbclass.php';

 /* CALLING TO THE DATA BASE CONNECTION CLASS */
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();


$accomodation 		= new db_transaction();
$accomodation_pane	= $accomodation->Accommodation_Panel();
//echo $accomodation_pane;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="stylesheet" href="css/BrightSide.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/new_dop_menu.css">

<script type="text/javascript" src="js/menu.js"></script>

<script language="JavaScript1.1">
var slideimages=new Array()
var slidelinks=new Array()
function slideshowimages(){
for (i=0;i<slideshowimages.arguments.length;i++){
slideimages[i]=new Image()
slideimages[i].src=slideshowimages.arguments[i]
}
}

function slideshowlinks(){
for (i=0;i<slideshowlinks.arguments.length;i++)
slidelinks[i]=slideshowlinks.arguments[i]
}

function gotoshow(){
        if (!window.winslide||winslide.closed)
        winslide=window.open(slidelinks[whichlink])
    else
        winslide.location=slidelinks[whichlink]
        winslide.focus()
}

//-->
</script>
<script>
function confirmDelete(delUrl) {
if (confirm("Are you sure you want to delete")) {
document.location = delUrl;
}
}
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
	  
			
	  <a name="TemplateInfo"></a> <div id="side_bar_heading">Add New Accommodation  <br />
	      <br />
	      <form id="form1" method="post" action="form_action.php">
	        <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="30">Insert the Accommodation Category : </td>
                <td height="30"><input name="accom_cat" type="text" id="accom_cat" size="50" />
                <span class="error">*
				<?php 
				if($_SESSION['accom']){
						echo($_SESSION['accom']);
						unset($_SESSION['accom']);
				}
				?></span>				</td>
              </tr>
              <tr>
                <td width="25%" height="7">
                <input type="hidden" name="page_name" value="accommodation"  />
                <input type="hidden" name="mod" value="insert_new_accom_type" /></td>
                <td width="75%" height="7"><input type="submit" name="Submit" value="Submit" /></td>
              </tr>
              <tr>
                <td height="8">&nbsp;</td>
                <td width="75%" height="8">&nbsp;</td>
              </tr>
              <tr>
                <td height="27" bgcolor="#C10000">&nbsp;&nbsp;<u class="error_mark">Inserted Accommodations</u></td>
                <td width="75%" height="27">
		&nbsp;
		<?php
                $accomodation = new db_transaction();
                $accomodation_rec= $accomodation->Accommodation_Catogory();

            
			 ?></td>
              </tr>
              <tr>
                <td height="15" colspan="2"><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#EFEFEF">
                  <tr>
                    <?php while($my_each_accommodation = mysql_fetch_assoc($accomodation_rec)){ ?>
                    <td width="241" height="25" align="center" bgcolor="#FFFFFF">
					<br />
					<?php print $my_each_accommodation['accomm_name'];?><br />
					<br> 
					<a href="delete_actions.php?id=<?php echo $my_each_accommodation['accomm_id']; ?>&action=<?php echo 'accom_cat_delete';?>" onclick="return confirm('Are you sure you want to delete this Hotel?')"><img src=images/delete.gif /></a></td>
                    <?php  } ?>
                  </tr>
                </table></td>
              </tr>
            </table>
        </form>
        <table width="100%" border="0" cellpadding="0" cellspacing="1">
              
              <tr>
                <td width="705" height="27" bgcolor="#C10000" class="error_mark">&nbsp;&nbsp;<u><span class="side_bar_heading">Accommodation Name</span></u> </td>
                <td width="120" align="center" bgcolor="#C10000" class="error_mark"><u>Image Uploads</u></td>
                <td width="46" height="27" align="center" bgcolor="#C10000" class="error_mark"><u>Edit</u></td>
                <td width="54" height="27" align="center" bgcolor="#C10000" class="error_mark"><u>Delete</u> </td>
          </tr>
           <?php while($my_each_accommodation_list = mysql_fetch_assoc($accomodation_pane)){?>
			  <tr>
                <td height="27">&nbsp;&nbsp;<?php echo $my_each_accommodation_list['a_name']; ?></td>
                <td height="27" align="center" bgcolor="#000000"><a href="upload_image_gallery.php?last_insert_accom_id=<?php echo $my_each_accommodation_list['a_id']; ?>">Images</a></td>
                <td height="27" align="center" bgcolor="#333333"><a href="edit_accommodation_informations.php?a_id=<?php echo $my_each_accommodation_list['a_id']; ?>">Edit </a></td>
                <td height="27" align="center" bgcolor="#000000"><a href="delete_actions.php?id=<?php echo $my_each_accommodation_list['a_id']; ?>&action=<?php echo 'accom_delete';?>" onclick="return confirm('Are you sure you want to delete this Hotel?')">Delete</a></td>
			  </tr>
			  <?php } ?>
              <tr>
                <td height="15" colspan="4">&nbsp;</td>
              </tr>
        </table>
	  </div>	
	  </div>
	  <div id="rightbar">
	  </div>
		<!-- content-wrap ends here -->		
  </div>

<!-- footer starts here -->	
<div id="footer">
	
	<div class="footer-left">
		<p class="align-left"><strong> </strong><br/>
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
