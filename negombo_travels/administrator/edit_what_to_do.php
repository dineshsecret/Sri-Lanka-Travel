<?php 
session_start();
include '../db/db_transaction.php';
//include '../db/dbclass.php';

 /* CALLING TO THE DATA BASE CONNECTION CLASS */
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();


$what_to_do_id			= $_GET['what_to_do_id'];

//$destination_edit 		= new db_transaction();
//$destination_edit_exe	= $destination_edit->What_To_Do_Edit($what_to_do_id);

/*
while($rec_set = mysql_fetch_assoc($destination_edit_exe)){
	
	$city_id		= $rec_set['city_id'];
	$dest_name		= $rec_set['dest_name'];
	$dest_desc		= $rec_set['dest_desc'];
	$dest_header_image	= $rec_set['dest_header_image'];
	
	
}
*/

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
		<!-- Menu Tabs -->
<?php include('includes/header.php');?>
													
  </div>	
				
	<!-- content-wrap starts here -->
	<div id="content-wrap">
	  <div id="sidebar" >							
	    
	    
	    </div>
	  <div id="main">	
	  
			
	  <a name="TemplateInfo"></a> <div id="side_bar_heading"><a href="new_destination.php">To Do Panel</a><br />
	      <br />
	      <form id="form1" method="post" action="form_action.php" enctype="multipart/form-data">
	        <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="30">Insert the Destination Name </td>
                <td height="30"> :
                  <input name="dest_name" type="text" id="dest_name" size="50" value="<?php echo $dest_name;?>" /><span class="error">
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
                <td height="30">&nbsp;</td>
                <td height="30"><textarea id="textarea2" name="dest_desc" style="width:500;height:350px;"><?php echo $dest_desc;?></textarea></td>
              </tr>
              <tr>
                <td height="30">Upload Default Page Header Image </td>
                <td height="30"><p>: 
                  <input name="d_imgfile" type="file" class="tiny_text" id="accom_images" />
                <?php echo "uploaded image Name : $dest_header_image"?></p>
                <p><a href="upload_what_to_do_image_gallery.php?last_insert_id=<?php echo $what_to_do_id;?>">Upload Images </a></p></td>
              </tr>
              <tr>
                <td width="25%" height="30">
                <input type="hidden" name="page_name" value="destination"  />
                <input type="hidden" name="mod" value="edit_to_do_acs" /> <input type="hidden" name="edit_id" value="<?php echo $destination_id;?>" /></td>
                <td width="75%" height="30"><input name="Submit" type="submit" class="tiny_text" value="Submit" /> <input name="Reset" type="reset" class="tiny_text" id="button" value="Reset" /></td>
              </tr>
              <tr>
                <td height="15"><br /></td>
                <td width="75%" height="0">
		</td>
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
