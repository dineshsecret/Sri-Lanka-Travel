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
		<h1><span class="green">Connaissance Train Travels</span></h1>
		<p>Some people may joke that train travel in Sri Lanka is for people with little money and lots of time, but for tourists it is a wonderfully appealing mode of travel, especially in the island&rsquo;s highlands where the scenery can be breathtaking at times. The downside is that for some routes the train can be slower than a car and delays are common.<br />
	    Train Routes Available</p>
		<p>The railway network, which began operating in 1864, comprises nine lines radiating from Colombo, the most beautiful of which runs deep into the hills, travelling via Kandy and Nuwara Eliya before terminating in Badulla. This journey offers spectacular hill-country views as the train winds its way past gushing waterfalls and through neatly-clipped tea estates. There is also a useful train line for tourists travelling along the south coast from Colombo to Matara which stops in Bentota and Galle. There is also a train to Trincomalee, which travels through the Cultural Triangle, but travelling by car is preferable in terms of comfort and time. </p>
		<p><strong>Hill-country Observatory Carriage</strong></p>
		<p>There is a special first-class observatory carriage on the Colombo to Dabulla hill-country train. This is the last carriage on the train which has a full window to maximise the views. Tickets need to be booked at least 10 days in advance. Note that availability can be limited during national holidays. </p>
		<p>&nbsp;</p>
<p>&nbsp; </p>
      </div>	
<!-- Right NAVIGATION -->	
	  <?php include_once('includes/right_nav.php');?>

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
