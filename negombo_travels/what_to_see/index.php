<?php
session_start();
include '../db/db_transaction.php';

 /* CALLING TO THE DATA BASE CONNECTION CLASS */
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();

$what_to_see_id					= $_GET['what_to_see'];
//$what_to_see_desc_id			= $_GET['what_to_see_desc_id'];

if($_GET['what_to_see']=='' && $_GET['what_to_see_desc_id']==''){


$what_to_see_id = 9;

$what_to_see					= new db_transaction;
$what_to_see_recset 			= $what_to_see->Capture_WhatToSee_information($what_to_see_id);


while($whatsToSee_detail_list = mysql_fetch_assoc($what_to_see_recset)){
	
	$what_to_see_city_id		= $whatsToSee_detail_list['what_to_see_city_id'];
	$what_to_see_name			= $whatsToSee_detail_list['what_to_see_name'];
	$what_to_see_desc			= $whatsToSee_detail_list['what_to_see_desc'];
	$what_to_see_image			= $whatsToSee_detail_list['what_to_see_image'];
	

	//$itenery_intro		= $what_to_see_recset['itenery_intro'];
	}
	
}



if($what_to_see_id !=''){

$what_to_see					= new db_transaction;
$what_to_see_recset 			= $what_to_see->Capture_WhatToSee_information($what_to_see_id);


while($whatsToSee_detail_list = mysql_fetch_assoc($what_to_see_recset)){
	
	$what_to_see_city_id		= $whatsToSee_detail_list['what_to_see_city_id'];
	$what_to_see_name			= $whatsToSee_detail_list['what_to_see_name'];
	$what_to_see_desc			= $whatsToSee_detail_list['what_to_see_desc'];
	$what_to_see_image			= $whatsToSee_detail_list['what_to_see_image'];
	//$itenery_intro		= $what_to_see_recset['itenery_intro'];
	
	$image_0			= $whatsToSee_detail_list['image_0'];
	$image_1			= $whatsToSee_detail_list['image_1'];
	$image_2			= $whatsToSee_detail_list['image_2'];
	$image_3			= $whatsToSee_detail_list['image_3'];
	$image_4			= $whatsToSee_detail_list['image_4'];
	$image_5			= $whatsToSee_detail_list['image_5'];
	}
	
}
/*

				if($what_to_see_desc_id !=''){
				
				$what_to_see				= new db_transaction;
				$what_to_see_recset 		= $what_to_see->Capture_WhatToSee_information_Desc($what_to_see_desc_id);
				
												
				while($whatsToSee_detail_list = mysql_fetch_assoc($what_to_see_recset)){
					
					$what_to_see_id				= $whatsToSee_detail_list['what_to_see_cat_id'];
					$what_to_see_city_id		= $whatsToSee_detail_list['city_id'];
					$what_to_see_name			= $whatsToSee_detail_list['attraction_name'];
					$attraction_palce			= $whatsToSee_detail_list['attraction_palce'];
					$facility					= $whatsToSee_detail_list['facility'];
					$excursion					= $whatsToSee_detail_list['excursion'];
					$image						= $whatsToSee_detail_list['image'];
					
					 $image_zero	= $whatsToSee_detail_list['image_0'];
					$image_one	= $whatsToSee_detail_list['image_1'];
					$image_two	= $whatsToSee_detail_list['image_2'];
					$image_thre	= $whatsToSee_detail_list['image_3'];
					$image_four	= $whatsToSee_detail_list['image_4'];
					$image_five	= $whatsToSee_detail_list['image_5'];
					
					}
					
				}
*/



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



<title>Things to see with Negombo Travel and Tours</title>
<meta name="description" content="Sri Lanka is most significant desitantion in South Asia"/>
<meta name="keywords" content="Sigiriya, Dambulla, Botanicle Garden, Temple of Tooth Relic, Whale Watching Sri Lanka, Dolphines Sri Lanka, Wadda Dance, Corals Hikkaduwa, Turtles in Sri Lanka"/>
</head>
<body>
<!-- wrap starts here -->


			
		<!-- Menu Tabs -->
		<?php include('includes/header.php');?>
													
  </div>	
				
	<!-- content-wrap starts here -->
	<div id="content-wrap">		
											
	<img src="images/header_images/<?php 
	
	if($what_to_see_image){
		
		echo $what_to_see_image;
		}
		else{
			
			echo $image;		
			}
	
	
	?>" name="slide" width=970 height=236>
	
		</div>
	  <?php include_once('includes/left_nav.php');?>
      
      
      <div id="main">	
	  
			
			<a name="TemplateInfo"></a>
		<h2 class="green_heading"><?php echo $what_to_see_name;?></h2>
		<p><?php 
			echo 
"<a href=images/pop/$image_0 rel=lightbox[roadtrip]><img src=images/thum/$image_0 class=timg /></a>"." ".
"<a href=images/pop/$image_0 rel=lightbox[roadtrip]><img src=images/thum/$image_1 class=timg /></a>"." ".
"<a href=images/pop/$image_0 rel=lightbox[roadtrip]><img src=images/thum/$image_2 class=timg /></a>"." ".
"<a href=images/pop/$image_0 rel=lightbox[roadtrip]><img src=images/thum/$image_3 class=timg /></a>"." ".
"<a href=images/pop/$image_0 rel=lightbox[roadtrip]><img src=images/thum/$image_4 class=timg /></a>"." ".
"<a href=images/pop/$image_0 rel=lightbox[roadtrip]><img src=images/thum/$image_5 class=timg /></a>"." ";
?>


</p>


		<p class="accom_heading"><br />
        <?php 
		
		if($what_to_see_desc){
			
			echo $what_to_see_desc;
			}else{
		//echo $facility;
			}
		?>
		</p>
		
        
		
		<?php 
		
		//if($facility){?>
        <p class="accom_heading"><span class="green"><strong><u> </u></strong></span><br /><?php 
			
			//echo $facility;
			//}
		?></p>
		
		
		
		
   
          
		
		</p><br />
</p>
        <p></div>	
			
	  <?php include_once('includes/right_nav.php');?>

<!-- footer starts here -->	
<?php include_once('includes/footer.php')?>
</div>

</body>
</html>
