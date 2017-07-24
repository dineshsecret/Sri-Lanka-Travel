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
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
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
                <td height="38"> News Title </td>
                <td height="38">
                  <input name="experiance_name" type="text" id="attract_name" size="50" /><span class="error">
				<?php 
				if($_SESSION['accom']){
						echo($_SESSION['accom']);
						unset($_SESSION['accom']);
				}
				?></span>				</td>
              </tr>
              <tr>
                <td height="25">Introduction </td>
                <td height="13"> <textarea name="ex_introduction" id="ex_introduction" cols="45" rows="270"></textarea></td>
              </tr>
              <tr>
                <td height="25">  City </td>
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
                <td height="12" valign="top"> Description </td>
                <td height="12" valign="top"> 
                <textarea id="textarea2" name="experiance_desc" style="width:300;height:270px;"></textarea></td>
              </tr>
              <tr>
                <td height="18">Upload Default Page Header Image </td>
                <td height="18">: <input name="d_imgfile" type=file class="tiny_text" id="accom_images"></td>
              </tr>
              <tr>
                <td height="24">Send it Live OR Not </td>
                <td height="24"> : 
                  
                  <select name="select" id="select">
                    <option>-- Select--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td width="25%" height="30">
                <input type="hidden" name="page_name" value="itenary"  />
                <input type="hidden" name="mod" value="sl_news" /></td>
                <td width="75%" height="30"><input name="Submit" type="submit" class="tiny_text" value="Submit" /> </td>
              </tr>
              <tr>
                <td height="24" bgcolor="#C10000"><span class="error_mark">&nbsp;<u>News Editabale</u></span> <br /></td>
                <td width="75%" height="24">
		<?php
                $experiance 	= new db_transaction();
                $experiance_rec	= $experiance->News_List();

            
			 ?></td>
              </tr>
              <tr>
                <td height="15" colspan="2">
                <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#EFEFEF">
                  <?php while($my_experiance_rec = mysql_fetch_assoc($experiance_rec)){ ?>
                  <tr>
                    
                    <td width="561" height="25" align="left">&nbsp;
                   	<?php print $my_experiance_rec['news_title'];?></td>
                    <td width="124" align="center" bgcolor="#000000"><span class="style1"><a href="#">Add Images</a> </span></td>
                    <td width="76" align="center" bgcolor="#000000"><span class="style1"><a href="#">Edit</a></span></td>
                    <td width="66" align="center" bgcolor="#000000"><a href="delete_actions.php?id=<?php echo $my_experiance_rec['experiance_id'];?>&action=<?php echo 'experiance_id';?>" class="style1"onclick="return confirm('Are you sure you want to delete this Experiance ???')">Delete</a></td>
                    <td width="85" align="center" bgcolor="#000000" class="style1"><?php 
					if($my_experiance_rec['act']=='yes'){
					echo "<a href=>Yes</a>";
					}else{
					
					echo "Nope";
					}
					
					?>&nbsp;</td>
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
		<p class="align-left"><br />
	  </p>
	</div>
	<div class="footer-left">
		<p class="align-left"><br />
	  </p>
	</div>
	<div class="footer-left">
		<p class="align-left"><br />
	  </p>
	</div>
	
	
	<div class="footer-right">
		<p class="align-right">&nbsp;</p>
	</div>
	
</div>

</div>

</body>
</html>
