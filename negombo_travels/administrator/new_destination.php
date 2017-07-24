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
<script type="text/javascript" src="js/wysiwyg.js"></script>
<script type="text/javascript" src="js/wysiwyg-settings.js"></script>
<script type="text/javascript">
WYSIWYG.attach('textarea2', full); // full featured setup
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

<?php include('includes/header.php');?>
													
  </div>	
				
	<!-- content-wrap starts here -->
	<div id="content-wrap">
	  <div id="sidebar" >							
	    
	    
	    </div>
	  <div id="main">	
	  
			
	  <a name="TemplateInfo"></a> <div id="side_bar_heading">Add New Destination<br />
	      <br />
	      <form id="form1" method="post" action="form_action.php" enctype="multipart/form-data">
	        <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="30">Insert the Destination Name </td>
                <td height="30"> :
                  <input name="dest_name" type="text" id="dest_name" size="50" /><span class="error">
				<?php 
				if($_SESSION['accom']){
						echo($_SESSION['accom']);
						unset($_SESSION['accom']);
				}
				?></span>				</td>
              </tr>
              <tr>
                <td height="30">Select the City </td>
                <td height="30"> : 
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
                <td height="30" valign="top"><br />
                Destination Description </td>
                <td height="30"><textarea id="textarea2" name="dest_desc" style="width:500;height:350px;"></textarea></td>
              </tr>
              <tr>
                <td height="30">Upload Destination Header Image </td>
                <td height="30">: 
                <input name="d_imgfile" type="file" class="tiny_text" id="accom_images" /></td>
              </tr>
              <tr>
                <td width="25%" height="15">
                <input type="hidden" name="page_name" value="destination"  />
                <input type="hidden" name="mod" value="insert_new_destination" /></td>
                <td width="75%" height="0"><input name="Submit" type="submit" class="tiny_text" value="Submit" /> <input name="Reset" type="reset" class="tiny_text" id="button" value="Reset" /></td>
              </tr>
              <tr>
                <td height="20">&nbsp;</td>
                <td width="75%" height="20">&nbsp;</td>
              </tr>
              <tr>
                <td height="20">&nbsp;</td>
                <td width="75%" height="20">&nbsp;</td>
              </tr>
              <tr>
                <td height="23" bgcolor="#C10000" class="error_mark">&nbsp;&nbsp;<u>Inserted Destinations </u></td>
                <td width="75%" height="23">
		<?php
                $accomodation = new db_transaction();
                $accomodation_rec= $accomodation->Destination_types();

            
			 ?></td>
              </tr>
              <tr>
                <td height="15" colspan="2">
                <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#EFEFEF">
                  <?php while($my_each_destination = mysql_fetch_assoc($accomodation_rec)){ ?>
                  <tr>
                    
                    <td width="491" height="25" align="left" bgcolor="#FFFFFF">&nbsp;
                   	<?php print $my_each_destination['dest_name'];?></td>
                    <td width="162" align="center" bgcolor="#000000"><a href="excursion_dash.php?city_id=<?php echo "$my_each_destination[city_id]";?>&destination_id=<?php echo "$my_each_destination[dest_id]";?>" title="View Excursion List ">Inserted Destination</a></td>
                    <td width="142" align="center" bgcolor="#333333"><a href="add_excursion_informations.php?city_id=<?php echo "$my_each_destination[city_id]";?>&destination_id=<?php echo "$my_each_destination[dest_id]";?>" title="Add More Excurions to here">Add More Destination</a></td>
<td width="61" align="center" bgcolor="#000000"><a href="delete_actions.php?id=<?php echo "$my_each_destination[dest_id]";?>&action=<?php echo 'destination_cat_delete';?>"onclick="return confirm('Are you sure you want to delete this Destination ?')">Delete</a></td>
<td width="56" align="center" bgcolor="#333333"><a href="edit_destination.php?destination_id=<?php echo "$my_each_destination[dest_id]";?>" title="View Excursion List">Edit</a></td>
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
