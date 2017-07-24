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
		<h1><span class="green">Connaissance Special offers</span></h1>
		<p><strong><u>Ayurveda</u></strong><br />
	    Ayurveda is not only a form of medication it is a total way of life know to generations of Sri Lankans for over 3000 years. It is a gentle method of treating the root causes of illness in both mind and body.</p>
		<p> The health conscious today are searching for effective alternatives to the spiraling costs and side effects that at times result from the use of modern medicine.</p>
<p><strong><u>Weddings</u> </strong><br />
  Sri Lanka Offers The Best Traditional Wedding Ceremony That You Will Always Remember</p>
<p> The traditional Sri Lankan Wedding is performed on a decorated canopied dais (Poruwa). The bride and bridegroom are dressed in ceremonial Sri Lankan costumes. Jayamangala stanzas of blessings are sung by young girls. Dancers to the beating of drums make the ceremony more colorful.</p>
<p>&nbsp; </p>
      </div>	
<!-- Right NAVIGATION -->	
	  <?php include_once('includes/right_nav.php');?>

<!-- footer starts here -->	
 <?php include_once('includes/footer.php');?>
</div>

</body>
</html>
