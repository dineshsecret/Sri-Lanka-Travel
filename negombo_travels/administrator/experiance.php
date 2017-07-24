<?php 
session_start();
include '../db/db_transaction.php';
//include '../db/dbclass.php';

 /* CALLING TO THE DATA BASE CONNECTION CLASS */
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();

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
                <td height="12">Experiance Name  </td>
                <td height="12"> :
                  <input name="experiance_name" type="text" id="attract_name" size="50" /><span class="error">
				<?php 
				if($_SESSION['accom']){
						echo($_SESSION['accom']);
						unset($_SESSION['accom']);
				}
				?></span>				</td>
              </tr>
              <tr>
                <td height="25">Introductin for Experuiance </td>
                <td height="13">: <textarea name="ex_introduction" id="ex_introduction" cols="45" rows="5"></textarea></td>
              </tr>
              <tr>
                <td height="25">Which  City </td>
                <td height="25"> : 
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
                <td height="12">Venue </td>
                <td height="12">: 
                <input name="experiance_venu" type="text" id="attract_name2" size="50" /></td>
              </tr>
              <tr>
                <td height="25">Date </td>
                <td height="13">: 
                <input name="experiance_date" type="text" id="attract_name3" size="10" /></td>
              </tr>
              <tr>
                <td height="12"> Description </td>
                <td height="12">: <textarea id="textarea2" name="experiance_desc" style="width:500;height:350px;"></textarea></td>
              </tr>
              <tr>
                <td height="36">Upload Default Page Header Image </td>
                <td height="36">: <input name="d_imgfile" type=file class="tiny_text" id="accom_images"></td>
              </tr>
              <tr>
                <td width="25%" height="30">
                <input type="hidden" name="page_name" value="itenary"  />
                <input type="hidden" name="mod" value="experiance" /></td>
                <td width="75%" height="30"><input name="Submit" type="submit" class="tiny_text" value="Submit" /> </td>
              </tr>
              <tr>
                <td height="24" bgcolor="#C10000"><span class="error_mark">&nbsp;<u>Listed Experiances</u></span> <br /></td>
                <td width="75%" height="24">
		<?php
                $experiance 	= new db_transaction();
                $experiance_rec	= $experiance->Experiance_List();

            
			 ?></td>
              </tr>
              <tr>
                <td height="15" colspan="2">
                <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#EFEFEF">
                  <?php while($my_experiance_rec = mysql_fetch_assoc($experiance_rec)){ ?>
                  <tr>
                    
                    <td width="597" height="25" align="left">&nbsp;
                   	<?php print $my_experiance_rec['experiance_name'];?></td>
                    <td width="128" align="center" bgcolor="#000000">Add Images </td>
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
