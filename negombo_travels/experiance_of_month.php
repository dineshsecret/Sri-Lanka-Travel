<?php
session_start();
include 'db/db_transaction.php';

 /* CALLING TO THE DATA BASE CONNECTION CLASS */
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();

	$experiance_id	= $_GET['id'];

		$monthly_excursions			= new db_transaction;
		$monthly_excursions_recset 	= $monthly_excursions->Excurion_Of_Month_data($experiance_id);
           			
			while($month_row = mysql_fetch_assoc($monthly_excursions_recset)) {
				
				$experiance_name	= $month_row['experiance_name'];
				$experiance_intro	= $month_row['experiance_intro'];
				$venue	= $month_row['venue'];
				$experiance_desc	= $month_row['experiance_desc'];
				
				
				//echo "$month_row[image_0]";
				//echo "<a href=experiance_of_month.php?id=$month_row[experiance_id]><img src=images/experiance/thum/$month_row[image_1] width=157 height=103 class=timg title=$month_row[experiance_name]></a>";
				}

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

<title>Negombo Travels experiance of the month</title>
</head>
<body>
<!-- wrap starts here -->


			
		<!-- Menu Tabs -->
		<?php include('includes/header.php');?>

				
	<!-- content-wrap starts here -->
	<div id="content-wrap">		
											
	<img src="images/center_main_image.jpg" name="slide" width=970 height=236>
	
<!-- LEFT NAVIGATION HERE -->	
 <?php include_once('includes/left_nav.php');?>



	  <div id="main">	
	  
			
			<a name="TemplateInfo"></a>
		    <h2><span class="green"><?php echo $experiance_name;?></span></h2>
		    	<p><?php echo $experiance_intro; ?></p>
				<p><strong>Venu :</strong> <?php echo $venue; ?></p>
				<p><?php echo $experiance_desc;?></p>
				
				
		<p>&nbsp;</p>
	  </div>	
      <!-- Right NAVIGATION -->	
	  <?php include_once('includes/right_nav.php');?>

<!-- footer starts here -->	
 <?php include_once('includes/footer.php');?>
</div>

</body>
</html>
