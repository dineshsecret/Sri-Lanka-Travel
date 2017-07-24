<?php
session_start();
include '../db/db_transaction.php';

 /* CALLING TO THE DATA BASE CONNECTION CLASS */
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();

if($_GET['what_to_do_id'] =='' && $_GET['what_to_do_desc_id']==''){

$what_to_do_id = 15;
$what_to_do					= new db_transaction;
$what_to_do_recset 			= $what_to_do->Capture_WhatToDo_information($what_to_do_id);

while($whatsToDo_detail_list = mysql_fetch_assoc($what_to_do_recset)){
	
	$what_to_do_id		= $whatsToDo_detail_list['what_to_do_id'];
	$what_to_do_city_id	= $whatsToDo_detail_list['what_to_do_city'];
	$what_to_do			= $whatsToDo_detail_list['what_to_do'];
	$what_to_do_desc	= $whatsToDo_detail_list['what_to_do_desc'];
	$what_to_do_image	= $whatsToDo_detail_list['what_to_do_image'];
	//$itenery_intro		= $what_to_see_recset['itenery_intro'];
	}
}


if($_GET['what_to_do_id'] !=''){

$what_to_do_id					= $_GET['what_to_do_id'];
$what_to_do_desc_id				= $_GET['what_to_do_desc_id'];

$what_to_do					= new db_transaction;
$what_to_do_recset 			= $what_to_do->Capture_WhatToDo_information($what_to_do_id);


while($whatsToDo_detail_list = mysql_fetch_assoc($what_to_do_recset)){
	
	$what_to_do_id		= $whatsToDo_detail_list['what_to_do_id'];
	$what_to_do_city_id	= $whatsToDo_detail_list['what_to_do_city'];
	$what_to_do			= $whatsToDo_detail_list['what_to_do'];
	$what_to_do_desc	= $whatsToDo_detail_list['what_to_do_desc'];
	$what_to_do_image	= $whatsToDo_detail_list['what_to_do_image'];
	//$itenery_intro		= $what_to_see_recset['itenery_intro'];
	}
	
}


				if($what_to_do_desc_id	!=''){
				
				$what_to_do				= new db_transaction;
				$what_to_do_recset 		= $what_to_do->Capture_WhatToDo_information_Desc($what_to_do_desc_id);
				
												
				while($whatsToSee_detail_list = mysql_fetch_assoc($what_to_do_recset)){
					
					$what_to_do_cat_id		= $whatsToSee_detail_list['what_to_do_cat_id'];
					$what_to_do_city_id		= $whatsToSee_detail_list['city_id'];
					$what_to_do				= $whatsToSee_detail_list['to_do_name'];
					$attraction_palce		= $whatsToSee_detail_list['attraction_palce'];
					$phone					= $whatsToSee_detail_list['phone'];
					$fax					= $whatsToSee_detail_list['fax'];
					$email					= $whatsToSee_detail_list['email'];
					$url					= $whatsToSee_detail_list['url'];
					$rating					= $whatsToSee_detail_list['rating'];
					$facility				= $whatsToSee_detail_list['facility'];
					$excursion				= $whatsToSee_detail_list['excursion'];
					
					$image					= $whatsToSee_detail_list['image'];
					
					$image_zero	= $whatsToSee_detail_list['image_0'];
					$image_one	= $whatsToSee_detail_list['image_1'];
					$image_two	= $whatsToSee_detail_list['image_2'];
					$image_thre	= $whatsToSee_detail_list['image_3'];
					$image_four	= $whatsToSee_detail_list['image_4'];
					$image_five	= $whatsToSee_detail_list['image_5'];
					$image_six	= $whatsToSee_detail_list['image_6'];
					$image_seven = $whatsToSee_detail_list['image_7'];
					$image_eight = $whatsToSee_detail_list['image_8'];
					$image_nine	 = $whatsToSee_detail_list['image_9'];
					
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



<title>Climate in Sri Lanka</title>
<meta name="description" content="Sri lanka, Negombo tour facilitaor with more experiance tour guides and associations"/>
<meta name="keywords" content="Negombo visit, Negombo trip, Negombo accommodations, budget tour to negombo, best tour operators, Sri Lanka tour operators, Negombo tour guides, sri lanka tours, negombo catamaran rides, Negombo, sri lanka"/>
</head>
<body>
<!-- wrap starts here -->


			
		<!-- Menu Tabs -->
		<?php include('includes/header.php');?>
													
  </div>	
				
	<!-- content-wrap starts here -->
	<div id="content-wrap">		
											
	<img src="images/header_images/<?php 
	
	if($what_to_do_image){
		
		echo $what_to_do_image;
		}
		else{
			
			echo $image;		
			}
	
	
	?>" name="slide" width=970 height=236>
	
		</div>
	  <?php include_once('includes/left_nav.php');?>
      
      
      <div id="main">	
	  
			
			<a name="TemplateInfo"></a>
		<p>sdasdas</p>


		<br />
<p></div>	
			
	  <?php include_once('includes/right_nav.php');?>

<!-- footer starts here -->	
<?php include_once('includes/footer.php')?>	
</div>



</body>
</html>
