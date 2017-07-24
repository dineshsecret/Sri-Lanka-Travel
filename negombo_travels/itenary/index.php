<?php
session_start();
include '../db/db_transaction.php';

 /* CALLING TO THE DATA BASE CONNECTION CLASS */
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();

if($_GET['itenery_id']==''){

$itenary_id	 = 27;
$itenery_information		= new db_transaction;
$itenery_information_recset = $itenery_information->Capture_Itenery_information($itenary_id);

while($itenery_detail_list = mysql_fetch_assoc($itenery_information_recset)){
	
	$itenery_cat_id		= $itenery_detail_list['itenery_cat_id'];
	$city_id			= $itenery_detail_list['city_id'];
	$itenery_name		= $itenery_detail_list['itenery_name'];
	$itenery_intro		= $itenery_detail_list['itenery_intro'];
	$itenery_program	= $itenery_detail_list['itenery_program'];
	$ite_header_image	= $itenery_detail_list['header_image'];
	$highlights			= $itenery_detail_list['highlights'];
	$image_zero	= $itenery_detail_list['image_0'];
	$image_one	= $itenery_detail_list['image_1'];
	$image_two	= $itenery_detail_list['image_2'];
	$image_thre	= $itenery_detail_list['image_3'];
	$image_four	= $itenery_detail_list['image_4'];
	$image_five	= $itenery_detail_list['image_5'];
	$image_six	= $itenery_detail_list['image_6'];
	$image_seven = $itenery_detail_list['image_7'];
	$image_eight = $itenery_detail_list['image_8'];
	$image_nine	= $accom_detail_list['image_9'];
	
	
	}

}


if($_GET['itenery_id'] !=''){

$itenary_id					= $_GET['itenery_id'];
$itenery_information		= new db_transaction;
$itenery_information_recset = $itenery_information->Capture_Itenery_information($itenary_id);

while($itenery_detail_list = mysql_fetch_assoc($itenery_information_recset)){
	
	$itenery_cat_id		= $itenery_detail_list['itenery_cat_id'];
	$city_id			= $itenery_detail_list['city_id'];
	$itenery_name		= $itenery_detail_list['itenery_name'];
	$itenery_intro		= $itenery_detail_list['itenery_intro'];
	$itenery_program	= $itenery_detail_list['itenery_program'];
	$ite_header_image	= $itenery_detail_list['header_image'];
	$highlights			= $itenery_detail_list['highlights'];
	$image_zero	= $itenery_detail_list['image_0'];
	$image_one	= $itenery_detail_list['image_1'];
	$image_two	= $itenery_detail_list['image_2'];
	$image_thre	= $itenery_detail_list['image_3'];
	$image_four	= $itenery_detail_list['image_4'];
	
	/*
	$image_five	= $itenery_detail_list['image_5'];
	$image_six	= $itenery_detail_list['image_6'];
	$image_seven = $itenery_detail_list['image_7'];
	$image_eight = $itenery_detail_list['image_8'];
	$image_nine	= $accom_detail_list['image_9'];
	*/
	
	}
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="stylesheet" href="css/BrightSide.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/new_dop_menu.css">


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



<title>Sri Lanka Holiday Packages</title>
<meta name="description" content="Sri Lankan holiday packages, Day Tours from Negombo, Sri Lanka excursion tours, Tour plan to Sri Lanka" />
<meta name="keywords" content="sri lanka holidays,sri lanka budget tours, sri lanka tours,holiday packages,tour packages,tour itinerary,sri lanka full tours" />


</head>
<body>
<!-- wrap starts here -->


			
		<!-- Menu Tabs -->
		<?php include('includes/header.php');?>
													
  </div>	
				
	<!-- content-wrap starts here -->
	<div id="content-wrap">		
											
	<img src="images/header_images/<?php echo $ite_header_image;?>" name="slide" width=970 height=236>
	
		</div>
	  <?php include_once('includes/left_nav.php');?>
      
      
      <div id="main">	
	  
			
		
		    
			<h2><span class="impact_heading"><u><?php echo $itenery_name;?></u> </span></h2>
	   
			
		
		
        <p><?php echo $itenery_intro;?> </p>
		</p>
		 <p class="accom_heading">
		<?php echo 
"<a href=images/pop/$image_zero rel=lightbox[roadtrip]><img src=images/thum/$image_zero class=timg /></a>"." ".
"<a href=images/pop/$image_one rel=lightbox[roadtrip]><img src=images/thum/$image_one class=timg /></a>"." ".
"<a href=images/pop/$image_two rel=lightbox[roadtrip]><img src=images/thum/$image_two class=timg /></a>"." ".
"<a href=images/pop/$image_thre rel=lightbox[roadtrip]><img src=images/thum/$image_thre class=timg /></a>"." "
/*"<a href=images/pop/$image_four rel=lightbox[roadtrip]><img src=images/thum/$image_four class=timg /></a>"." ". */
/*"<a href=images/pop/$image_five rel=lightbox[roadtrip]><img src=images/thum/$image_five class=timg /></a>"." " */
		  
		  ;?></p>
		<h2><span class="green"><u>Program</u> </span></h2>
		<p class="accom_heading"><?php echo "$itenery_program";?>
		</p>
		<h2>&nbsp;</h2>
		<p class="green">
	    <?php echo $highlights;?><a href="#"></a></p>
<br />
<p></div>	
			
	  <?php include_once('includes/right_nav.php');?>

<!-- footer starts here -->	
<?php include_once('includes/footer.php')?>

</div>

</body>
</html>
