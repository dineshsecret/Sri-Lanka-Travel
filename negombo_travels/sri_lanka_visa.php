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

<title>Sri Lanka Immigration Service</title>
</head>
<body>
<!-- wrap starts here -->


			
		<!-- Menu Tabs -->
		<?php include('includes/header.php');?>

				
	<!-- content-wrap starts here -->
	<div id="content-wrap">		
											
	<img src="images/sri_lanka_immigration.jpg" name="slide" width=970 height=236 title="Sri Lanka visa">
	
<!-- LEFT NAVIGATION HERE -->	
 <?php include_once('includes/left_nav.php');?>



	  <div id="main">	
	  
			
			<a name="TemplateInfo"></a>
		<h1><span class="green">Sri Lanka Visa </span></h1>
		<p>Visitors can now apply all types of Sri Lankan visas and visa extensions directly at our approved Immigration Services Centre located in the heart of Colombo city.  Applying Sri Lankan visas at our Centre is more convenient and saves valuable time as we, on applicant&rsquo;s behalf, forward the visa applications to the Department of Immigration in lawful, fast and secure manner. Please contact our Immigration <a href="http://www.immigrationlanka.com/services-13.html"><strong><u>Services Centre</u></strong></a> for more information. Services offered by us is payable by the applicant.</p>
		<p>Immigration Services Center is also dedicated to assist all foreign travelers visiting Sri Lanka with free dissemination of up-to-date information about Sri Lanka visas and guidelines for visa applicants. If you wish to know about Sri Lanka visa, how to apply or have question, please contact our helpdesk. <br />
          <br />
		</p>
	  </div>	
<!-- Right NAVIGATION -->	
	  <?php include_once('includes/right_nav.php');?>

<!-- footer starts here -->	
 <?php include_once('includes/footer.php');?>
</div>

</body>
</html>
