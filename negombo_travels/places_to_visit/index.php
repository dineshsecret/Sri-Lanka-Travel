<?php
session_start();
include '../db/db_transaction.php';

 /* CALLING TO THE DATA BASE CONNECTION CLASS */
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();

if($_GET['what_to_see'] !='')

{
	$what_to_see_id					= $_GET['what_to_see'];
	$more_place_information			= new db_transaction;
	$more_place_information_recset 	= $more_place_information->More_Places_Visit($what_to_see_id);
	
	while($more_place_list = mysql_fetch_assoc($more_place_information_recset)){
	
	$attraction_name 	= $more_place_list['attraction_name'];
	$attraction_palce 	= $more_place_list['attraction_palce'];
	$facility 			= $more_place_list['facility'];
	$excursion 			= $more_place_list['excursion'];
	$image 				= $more_place_list['image'];
	$image_0 = $more_place_list['image_0'];
	$image_1 = $more_place_list['image_1'];
	$image_2 = $more_place_list['image_2'];
	$image_3 = $more_place_list['image_3'];
	$image_4 = $more_place_list['image_4'];
	$image_5 = $more_place_list['image_5'];
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



<title>Places to watch with Negombo Travels</title>
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
											
	<img src="../what_to_see/images/header_images/<?php echo $image;?>" name="slide" width=970 height=236>
	
		</div>
	  <?php include_once('includes/left_nav.php');?>
      
      
      <div id="main">	
	  
			
		
		    
			<h2><span class="impact_heading"><u><?php echo $attraction_name ;?></u> </span></h2>
	   
			
		
		
       <p> <?php echo $attraction_palce;?></p>
		</p><h2><span class="green"><u>Image Galley</u> </span></h2>
		 <p class="accom_heading">
		<?php echo 
"<a href=../what_to_see/images/pop/$image_0 rel=lightbox[roadtrip]><img src=../what_to_see/images/thum/$image_0 class=timg /></a>"." ".
"<a href=../what_to_see/images/pop/$image_1 rel=lightbox[roadtrip]><img src=../what_to_see/images/thum/$image_1 class=timg /></a>"." ".
"<a href=../what_to_see/images/pop/$image_2 rel=lightbox[roadtrip]><img src=../what_to_see/images/thum/$image_2 class=timg /></a>"." ".
"<a href=../what_to_see/images/pop/$image_3 rel=lightbox[roadtrip]><img src=../what_to_see/images/thum/$image_3 class=timg /></a>"." ".
"<a href=../what_to_see/images/pop/$image_4 rel=lightbox[roadtrip]><img src=../what_to_see/images/thum/$image_4 class=timg /></a>"." ".
"<a href=../what_to_see/images/pop/$image_5 rel=lightbox[roadtrip]><img src=../what_to_see/images/thum/$image_5 class=timg /></a>"." "
		  
		  ;?></p>
		<h2><span class="green"><u>Program</u> </span></h2>
		<p class="accom_heading"><?php echo "$facility ";?>
		</p>
		<h2><span class="green"><u>Itenery Highlights</u> </span></h2>
		<p class="green">
	    <?php echo $excursion;?></p>
<br />
<p></div>	
			
	  <?php include_once('includes/right_nav.php');?>

<!-- footer starts here -->	
<?php include_once('includes/footer.php')?>

</div>

</body>
</html>
