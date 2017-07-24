<?php 
session_start();
include '../db/db_transaction.php';
//include '../db/dbclass.php';

 /* CALLING TO THE DATA BASE CONNECTION CLASS */
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();


$accomodation 		= new db_transaction();
$accomodation_pane	= $accomodation->Accommodation_Panel();

         
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

<title>Connaissance De Seylan</title>
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
	  
			
	  <a name="TemplateInfo"></a> <div id="side_bar_heading"> Accommodation Panel <br />
	      <br />
	      <form id="form1" method="post" action="form_action.php">
	        <table width="100%" border="0" cellpadding="0" cellspacing="1">
              
              <tr class="error_mark">
                <td height="27" bgcolor="#C10000"><u>Accommodation Name</u> </td>
                <td height="27" align="center" bgcolor="#C10000"><u>Upload Hotel Images</u></td>
                <td width="56" height="27" align="center" bgcolor="#C10000"><u>Edit</u></td>
                <td width="50" height="27" align="center" bgcolor="#C10000"><u>Delete</u> </td>
              </tr>
              <?php while($my_each_accommodation_list = mysql_fetch_assoc($accomodation_pane)){?>
			  <tr>
                <td width="664" height="27">&nbsp;&nbsp;<?php echo $my_each_accommodation_list['a_name']; ?></td>
                <td width="148" align="center" bgcolor="#000000"><a href="upload_image_gallery.php?last_insert_accom_id=<?php echo $my_each_accommodation_list['a_id']; ?>">Uploads</a></td>
                <td height="27" align="center" bgcolor="#333333"><a href="edit_accommodation_informations.php?a_id=<?php echo $my_each_accommodation_list['a_id']; ?>">Edit </a></td>
                <td height="27" align="center" bgcolor="#000000"><a href="delete_actions.php?id=<?php echo $my_each_accommodation_list['a_id']; ?>&action=<?php echo 'accom_delete';?>" onclick="return confirm('Are you sure you want to delete this Hotel?')">Delete</a></td>
			  </tr>
			  <?php } ?>
              <tr>
                <td height="15" colspan="4">&nbsp;</td>
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
		<p class="align-left"><strong>ATOL Bonding</strong><br />
		Booking Conditions<br />
		Flight FAQs<br />
		Frequent Questions<br />
		Homepage<br />
		Mobile Phone Hire<br />
		Payment Centre<br />
		Red Dot Anti-Fraud Policy<br />
		Red Dot Sitemap<br />
		Travel Insurance<br />
	  </p>
	</div>
	<div class="footer-left">
		<p class="align-left"><strong>About Us</strong><br />
		  Contact Us<br />
		  Customer Feedback<br />
		  Drivers&rsquo; Code<br />
		  Job Vacancies<br />
		  Meet the Team<br />
		  Our Drivers<br />
		  Why Red Dot?<br />
	  </p>
	</div>
	<div class="footer-left">
		<p class="align-left"><strong>Sri Lanka Advice</strong><br />
		  Sri Lanka Bookstore<br />
		  Sri Lanka Climate<br />
		  Sri Lanka Map<br />
		  Useful Links<br />
		  Visas &amp; Immigration<br />
	  </p>
	</div>
	
	
	<div class="footer-right">
		<p class="align-right">
		<a href="index.html">All Right Reserved by Connaissance Dey Seylan <br />
		HOME | ABOUT US </a>|&nbsp;<a href="#">CONTACT US</a> &nbsp;| <a href="#">SERVICES</a> | 		</p>
	</div>
	
</div>

</div>


</body>
</html>
