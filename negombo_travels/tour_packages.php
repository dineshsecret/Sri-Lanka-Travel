<?php
session_start();
include 'db/db_transaction.php';

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


<title>Negombo Travels contact informations</title>
</head>
<body>
<!-- wrap starts here -->


			
		<!-- Menu Tabs -->
		<?php include('includes/header.php');?>

				
	<!-- content-wrap starts here -->
	<div id="content-wrap">		
											
	<img src="images/contact_us.jpg" name="slide" width=970 height=236>
	
<!-- LEFT NAVIGATION HERE -->	
 <?php include_once('includes/left_nav.php');?>



	  <div id="main">	
	  
			
			<a name="TemplateInfo"></a>
		<h2><span class="green">Find your prefered Tour Packages<a id="tips"></a></span></h2>
		
	    <p><a href="itenary/index.php?itenery_id=22"><img src="images/two_day.jpg" alt="" width="159" height="250" class="timg" /></a> <a href="itenary/index.php?itenery_id=24"><img src="images/three_days.jpg" alt="" width="159" height="250" class="timg" /></a> <a href="itenary/index.php?itenery_id=24"><img src="images/four_days.jpg" alt="" width="159" height="250" class="timg" /></a> <br />
	        <br />
            <a href="itenary/index.php?itenery_id=34"><img src="images/five_days.jpg" alt="" width="159" height="250" class="timg" /></a> <a href="itenary/index.php?itenery_id=35"><img src="images/six_days.jpg" alt="" width="159" height="250" class="timg" /></a> <a href="itenary/index.php?itenery_id=32"><img src="images/seven_days.jpg" alt="" width="159" height="250" class="timg" /></a></p>
		  <h2><a href="own_tours_it.php" class="green">Prepare your own Itinerary &gt;&gt;  </a></h2>
		  <p>&nbsp;</p>
	  </div>	
<!-- Right NAVIGATION -->	
	  <?php include_once('includes/right_nav.php');?>

<!-- footer starts here -->	
 <?php include_once('includes/footer.php');?>
</div>

</body>
</html>
