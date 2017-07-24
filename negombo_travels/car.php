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


<title>Tourism vehicle </title>
</head>
<body>
<!-- wrap starts here -->


			
		<!-- Menu Tabs -->
		<?php include('includes/header.php');?>

				
	<!-- content-wrap starts here -->
	<div id="content-wrap">		
											
	<img src="images/connaissance_bus.jpg" name="slide" width=970 height=236>
	
<!-- LEFT NAVIGATION HERE -->	
 <?php include_once('includes/left_nav.php');?>



	  <div id="main">	
	  
			
			<a name="TemplateInfo"></a>
		    <h2><span class="green"> Luxury vehicle </span></h2>
		    <p>Even hardened travellers can find Sri Lankan roads a culture shock -- cyclists swaying across rush-hour traffic and cows ruminating in the middle of a main road. That makes Red Dot's Drivers' Code even more important in ensuring your travel is as safe and enjoyable as possible. You can read this code by following the click at the foot of this page.</p>
		<p>Red Dot&rsquo;s team of experienced drivers will make your safety and relaxation their chief concern. And their good English and extensive knowledge of the country enables them to double up as a tour guide, whenever requested, to make your holiday even more satisfying. Red Dot&rsquo;s drivers know the special out-of-the-way places to make your holiday extra special. They can advise accurately on driving times to reduce the stress of travel to a minimum.</p>
		<p>Car and minivan travel remains by far the most popular option for Red Dot travellers and you will be pleasantly surprised to find that you can book your own Red Dot car or minivan, with driver-cum-guide, without breaking your budget. If you would rather scramble an airport taxi, in the early hours of the morning, to take you to your first hotel, or adventure around Sri Lanka in packed, lurching public transport, then we are the first to admire your spirit. We&rsquo;ve been there. We can&rsquo;t match the prices on an old Sri Lankan service bus! But a Red Dot driver does not mean that you lose your independence &ndash; in fact it gives you maximum freedom to go where you want, when you want. And, in Sri Lanka, extra convenience comes at a price you can afford.<br />
		  <br>
        
        Characteristically, for Red Dot, we offer transfers when and where you need them: perhaps you just want to arrange airport transfers to ensure a cheery greeting at the end of a long flight? Or perhaps, if you are heading of on an island tours, you just want the car for part of the stay &ndash; releasing it, for example, during long beach stays, so ensuring that you are not paying for it to stand idle. </p>
		<p><strong>Our Cars</strong><br />
	    Red Dot offers three main basic vehicle types: a saloon car ideal for 2-3 people; a mini-van ideal for 4-6 people or smaller groups on an adventurous trip where poor roads are expected; or a 4WD jeep like our new Nissan X-Trails, which offers greater comfort and style on Sri Lankan country roads and its excellent handling, extra legroom, spacious luggage compartment, leather interior, sun roof and a host of extras ensures that your driving hours can be spent in maximum comfort. </p>
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
