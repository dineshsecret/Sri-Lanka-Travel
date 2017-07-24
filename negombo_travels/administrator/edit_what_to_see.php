<?php 
session_start();
include '../db/db_transaction.php';
//include '../db/dbclass.php';


//$attraction_id			= $_GET['attraction_id'];
$what_to_see_id 		= $_GET['what_to_see_id'];
$city_id				= $_GET['city_id'];



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
	  
			
	  <a name="TemplateInfo"></a> <div id="side_bar_heading"><a href="what_to_see.php">What To See</a> | Editable Reagon  (What to See)<br />
	      <br />
	      <form id="form1" method="post" action="form_action.php" enctype="multipart/form-data">
          <?php 
          $what_to_see_cat	 		= new db_transaction();
          $what_to_see_cat_recset 	= $what_to_see_cat->What_To_See_Cat_Editab($what_to_see_id);
		  
		  while($each_what_to_see = mysql_fetch_assoc($what_to_see_cat_recset )){
			  
			  $what_to_see_city = $each_what_to_see['what_to_see_city_id'];
			  $what_to_see_name = $each_what_to_see['what_to_see_name'];
			  $what_to_see_desc = $each_what_to_see['what_to_see_desc'];
			  $what_to_see_image = $each_what_to_see['what_to_see_image'];
			  
			  }
          ?>
	        <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="25">PLaces to see</td>
                <td height="25"> :
                  <input name="attract_name" type="text" id="attract_name" size="50" value="<?php echo $what_to_see_name;?>" /><span class="error">
				<?php 
				if($_SESSION['accom']){
						echo($_SESSION['accom']);
						unset($_SESSION['accom']);
				}
				?></span>				</td>
              </tr>
              <tr>
                <td height="25">Attraction is situtated at ( City )</td>
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
                <td height="12">What to See Default Description </td>
                <td height="12">: <textarea id="textarea2" name="what_to_see_desc" style="width:500;height:350px;"><?php echo $what_to_see_desc;?></textarea></td>
              </tr>
              <tr>
                <td height="36"><p>Upload Default Page Header Image </p>
                <p>&nbsp;</p></td>
                <td height="36"><p>: 
                  <input name="d_imgfile" type=file class="tiny_text" id="accom_images">
                <?php echo "Uploaded Image: $what_to_see_image"?></p>
                <p><a href="upload_what_to_see_cat_gallery.php?last_insert_accom_id=<?php echo $what_to_see_id; ?>">Add thumnail images </a></p></td>
              </tr>
              <tr>
                <td width="25%" height="30">
                <input type="hidden" name="page_name" value="what_to_see"  />
                <input type="hidden" name="mod" value="edit_what_to_see_records" /> 
                <input type="hidden" name="what_to_see_cat_id" value="<?php echo $what_to_see_id;?>" /></td>
                <td width="75%" height="30"><input name="Submit" type="submit" class="tiny_text" value="Submit" /> </td>
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
