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

<title>Negombo Travles Services</title>
</head>
<body>
<!-- wrap starts here -->


			
		<!-- Menu Tabs -->
		<?php include('includes/header.php');?>

				
	<!-- content-wrap starts here -->
	<div id="content-wrap">		
											
	<img src="images/services.jpg" name="slide" width=970 height=236>
	
<!-- LEFT NAVIGATION HERE -->	
 <?php include_once('includes/left_nav.php');?>



	  <div id="main">	
	  
			
			<a name="TemplateInfo"></a>
		<h2><span class="green">Negombo Tour service </span></h2>
		<p align="justify"><strong><u>Airport Services</u></strong><br />Negombo Tour operators are located in Negombo which 15  minutes drive to Katunayake International Airport with very warm welcome to respective  tourists. The airport service are working 24/7 and are dedicated to offering fabulous  Sri Lanka holiday travel experiences. </p>
		<p>&nbsp;</p>
		<p><strong><u>Accommodation</u> </strong><br />
		 We have good experience with provide a complete range of accommodation for any budgets including home stays, back-packer accommodation, 3 – 5 star, boutique/luxury as well as campsites with tented accommodation – service providers</p>
		<p>&nbsp;</p>
<p><strong><u>Transportation</u> </strong><br>Our transportation department works 24 X 7 the clock to ensure your stay in Sri Lanka is the most comfortable. We provide high quality travel experience for satisfy with Sri Lanka real experience.  
We provide good quality tour facilitator with chauffeur guides to enjoy with your selected detonation.</p>
<p>&nbsp;</p>
<p><strong><u>Guides and Naturalists</u> </strong></p>
<p> We provide better quality Tour Guides and Naturalists those who have bgood experience in the Sri Lanka Tourism industry. 
This team of experienced and highly competent naturalists includes specialists in the fields of Ornithology, Butterflies, Marine Biology and Reptiles.
</p>
<p>&nbsp; </p>
      </div>	
<!-- Right NAVIGATION -->	
	  <?php include_once('includes/right_nav.php');?>

<!-- footer starts here -->	
 <?php include_once('includes/footer.php');?>
</div>

</body>
</html>
