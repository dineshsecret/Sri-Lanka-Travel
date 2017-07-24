<?php 
session_start();
include '../db/db_transaction.php';
//include '../db/dbclass.php';

 /* CALLING TO THE DATA BASE CONNECTION CLASS */
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();


$city_id		= $_GET['city_id'];
$what_to_see_id	= $_GET['what_to_see_id'];

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

<?php include('includes/header.php');?>
													
  </div>	
				
	<!-- content-wrap starts here -->
	<div id="content-wrap">
	  <div id="sidebar" >							
	    
	    
	    </div>
	  <div id="main">	
	  
			
	  <a name="TemplateInfo"></a> <div id="side_bar_heading"> <a href="what_to_see.php">Destination Panel</a>  | Excursions<br />
	      <br />
	      <form id="form1" method="post" action="form_action.php">
	        <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="25%" height="28" bgcolor="#C10000">&nbsp;<u class="error_mark"> Inserted Destinations </u></td>
                <td width="75%" height="28" bgcolor="#FFFFFF">
		<?php
                $Listed_attractions = new db_transaction();
                $Listed_attractions_rec= $Listed_attractions->Capture_Inserted_Attractions($what_to_see_id);

            
			 ?></td>
              </tr>
              <tr>
                <td height="15" colspan="2">
                <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#EFEFEF">
                  <?php while($my_each_destination = mysql_fetch_assoc($Listed_attractions_rec)){ ?>
                  <tr>
                    
                    <td width="758" height="25" align="left" bgcolor="#E9E9E9">&nbsp;
                   
					<?php print $my_each_destination['attraction_name'];?></td>
                    <td width="59" align="center" bgcolor="#000000">View </td>
                    <td width="50" align="center" bgcolor="#000000"><a href="edit_attraction_informations.php?attraction_id=<?php print $my_each_destination['what_to_see_id'];?>&city_id=<?php print $my_each_destination['city_id'];?>&what_to_see_cat_id=<?php echo $what_to_see_id;?>">Edit</a></td>
<td width="46" align="center" bgcolor="#000000">Delete</td>
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
