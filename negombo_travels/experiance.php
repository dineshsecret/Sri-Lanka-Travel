<?php
session_start();
include 'db/db_transaction.php';
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();

$exp_id					= $_GET['exp_id'];

if($exp_id	!=''){

$exepriance				= new db_transaction;
$exepriance_recset 		= $exepriance->Capture_exepriance_information($exp_id);


while($exepriance_recset_list = mysql_fetch_assoc($exepriance_recset)){
	
			$experiance_name	= $exepriance_recset_list['experiance_name'];
			$experiance_intro	= $exepriance_recset_list['experiance_intro'];
			$experiance_city	= $exepriance_recset_list['experiance_city'];
			$venue				= $exepriance_recset_list['venue'];
			$date				= $exepriance_recset_list['date'];
			$experiance_desc	= $exepriance_recset_list['experiance_desc'];
			$header_image	= $exepriance_recset_list['header_image'];
			$image_zero	= $exepriance_recset_list['image_0'];
			$image_1	= $exepriance_recset_list['image_1'];
			$image_2	= $exepriance_recset_list['image_2'];
			$image_3	= $exepriance_recset_list['image_3'];
			$image_4	= $exepriance_recset_list['image_4'];
			$image_5	= $exepriance_recset_list['image_5'];
				
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="stylesheet" href="css/BrightSide.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/new_dop_menu.css">

<script type="text/javascript" src="js/menu.js"></script>
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
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

<title>Experiance with Negombo Travles</title>
<meta name="description" content="Sri lanka, Negombo tour facilitaor with more experiance tour guides and associations"/>
<meta name="keywords" content="Negombo visit, Negombo trip, Negombo accommodations, budget tour to negombo, best tour operators, Sri Lanka tour operators, Negombo tour guides, sri lanka tours, negombo catamaran rides, Negombo, sri lanka"/>
</head>
<body>
<!-- wrap starts here -->


			
		<!-- Menu Tabs -->
		<?php include('includes/header.php');?>

				
	<!-- content-wrap starts here -->
	<div id="content-wrap">		
											
	<img src="images/header_images/<?php echo $header_image;?>" name="slide" width=970 height=236>
	
<!-- LEFT NAVIGATION HERE -->	
 <?php include_once('includes/left_nav.php');?>



	  <div id="main">	
	  
			
			
	    <p class="accom_heading"><span class="green"><strong><u><?php echo $experiance_name;?></u></strong></span><br />
	      <br />
        <?php echo 
"<a href=images/experiance/pop/$image_zero rel=lightbox[roadtrip]><img src=images/experiance/thum/$image_zero class=timg /></a>"." ".
"<a href=images/experiance/pop/$image_1 rel=lightbox[roadtrip]><img src=images/experiance/thum/$image_1 class=timg /></a>"." ".
"<a href=images/experiance/pop/$image_2 rel=lightbox[roadtrip]><img src=images/experiance/thum/$image_2 class=timg /></a>"." ".
"<a href=images/experiance/pop/$image_3 rel=lightbox[roadtrip]><img src=images/experiance/thum/$image_3 class=timg /></a>"." ".
"<a href=images/experiance/pop/$image_4 rel=lightbox[roadtrip]><img src=images/experiance/thum/$image_4 class=timg /></a>"." ".
"<a href=images/experiance/pop/$image_5 rel=lightbox[roadtrip]><img src=images/experiance/thum/$image_5 class=timg /></a>"." "
		  
		  ;?> </p>
        <p><span class="green"><strong><u>Description</u></strong></span><br />
              <?php echo $experiance_desc;?></p>
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
