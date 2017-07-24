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

<title>Connaissance De Seylan</title>
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
		<h1><span class="green">FAQ</span></h1>
		<p><strong>Why should we trust Red Dot to arrange our holiday?</strong></p>
		<p>We offer independent, knowledgeable and efficient advice to devise the holiday that you need at a competitive price. Our flexible approach gives you the holiday you want and our Operations support and fair Booking Conditions protect you if things go wrong. Our caring approach has been highly praised by the overwhelming majority of our clients since 2001.</p>
		<p><strong>Do you sell outside the Sri Lanka ?</strong></p>
		<p>Yes, we do. We sell worldwide, and accept payment in GBP&pound;, US$ and Euros. The Colombo-based sales staff in our Sri Lanka company, Negombo Tours, design holidays for anyone, anywhere. Your holiday booking will be with Negombo Tours, a UK company, which provides the protection of EU travel regulations.</p>
		<p><strong>How safe is Sri Lanka?</strong></p>
		<p>We retained enormous faith in holidays in Sri Lanka long before the end of the terrorist conflict in 2009. Since then Sri Lanka tourism has prospered and can still offer quite wonderful value as well as infinite variety. There was no history of tourists being targeted at any stage of the terrorist conflict. Violent crime is extremely rare. Hygiene standards are also good. Tourists are warmly welcomed.</p>
		<p><strong>What is the best way to make contact about my holiday?</strong></p>
		<p>The main Sri Lanka sales and operations teams for Negombo Tours are based in Colombo. We also have a support network in India. This enables us to offer up-to-the-minute advice and highly competitive prices, as well as supporting the local economy. We can deal effectively with enquiries from anywhere in the world. We prefer that you contact us initially by email by using the Contact Us form ( or for simpler enquiries on enquiries@reddottours.com ). This method is not as impersonal as it sounds! Whenever you need to discuss your holiday with a consultant, simply phone one of these numbers:</p>
		<p>Worldwide IDD for Sri Lanka holidays: +94 117 895 810. Normal international rates apply. Ask for call-back.</p>
		<p>UK customers for Sri Lanka holidays: 0870 231 7892. (10p a minute from UK landline, cost for mobiles and non-UK calls varies, request ring-back if you wish).</p>
		<p>Worldwide IDD for India holidays (or for Sri Lanka holidays for India customers): +91 11 6592 4883.</p>
	  </div>	
      <!-- Right NAVIGATION -->	
	  <?php include_once('includes/right_nav.php');?>

<!-- footer starts here -->	
 <?php include_once('includes/footer.php');?>
</div>

</body>
</html>
