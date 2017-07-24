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
<title>Negombo Travels About us</title>
</head>
<body>
<!-- wrap starts here -->


			
		<!-- Menu Tabs -->
		<?php include('includes/header.php');?>

				
	<!-- content-wrap starts here -->
	<div id="content-wrap">		
											
	<img src="images/about_01.jpg" name="slide" width=970 height=236>
	
<!-- LEFT NAVIGATION HERE -->	
 <?php include_once('includes/left_nav.php');?>



	  <div id="main">	
	  
			
			<a name="TemplateInfo"></a>
		    <h2><span class="green">About Negombo Tours </span> </h2>
		    <p><span class="green"><strong><u>Who We Are</u> </strong></span><br />
		  Negombo Travel &amp; Tour was incorporated as a private limited liability origination and total operations are  running with under Sri Lanka Tourism supervision.  <br />
		</p>
		<p><strong>Registered Office :</strong> No 116A,<br />
		  Convent Road,<br />
		  Daluwakotuwa,<br />
		  Kotchchikade, <br />
	    Sri Lanka.<br />
	    <br />
	    <strong>Office :</strong> +94 31 2279519 <br />
		<strong>Mobile :</strong> +94 777722 904 <br />
		E<strong>mail : </strong>info(at)negombotour.com </p>
		<p><strong>The competitive advantage of the Company is derived by:</strong><br />
		  <span class="green">*</span> Destination Management.<br />
		  <span class="green">*</span> Competitive tour operator  <br />
		  <span class="green">*</span> provision of airline - ticketing services.<br />
		  <br /> 
		  It is our endeavor to provide our clients a very informative and a courteous service during their holiday in Sri Lanka. This enables the Company to service the local travelers as well as the international tourists.<br />
	    Well dedicated staff is always to assists you 24/7 ....</p>
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
