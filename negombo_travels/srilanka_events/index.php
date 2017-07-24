<?php
session_start();
include '../db/db_transaction.php';

 /* CALLING TO THE DATA BASE CONNECTION CLASS */
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();


if($_GET['event_id'] == ''){
	}
		else
		{

		$event_id_rec				= $_GET['event_id'];
		$itenery_information		= new db_transaction;
		$itenery_information_recset = $itenery_information->Event_Info_Retreival($event_id_rec);

		while($filter_event_list = mysql_fetch_assoc($itenery_information_recset))
			{
	
			$event_name				= $filter_event_list['event_name'];
			$venue					= $filter_event_list['venue'];
			$event_desc				= $filter_event_list['event_desc'];
			$event_sdate			= $filter_event_list['event_sdate'];
			$event_edate			= $filter_event_list['event_edate'];
			$header_image			= $filter_event_list['header_image'];
			
			$image_0		= $filter_event_list['image_0'];
			$image_1		= $filter_event_list['image_1'];
			$image_2		= $filter_event_list['image_2'];
			$image_3		= $filter_event_list['image_3'];
			$image_4		= $filter_event_list['image_4'];
			$image_5		= $filter_event_list['image_5'];
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



<title>Events in Sri Lanka</title>
<meta name="description" content="Enjoy at sri lanka events with Negombo Travel and Tours"/>
<meta name="keywords" content="Kandy Perahara Sri Lanka, vesak festival Sri Lanka, traditional dancing sri lanka, beach festivals sri lanka"/>

</head>
<body>
<!-- wrap starts here -->

<div id="wrap">
	
	
			
		<!-- Menu Tabs -->
		<?php include('includes/header.php');?>
													
  </div>	
				
	<!-- content-wrap starts here -->
	<div id="content-wrap">		
											
	<img src="images/header_images/<?php echo $header_image; ?>" name="slide" width=970 height=236>
	
</div>
	  <?php include_once('includes/left_nav.php');?>
      
      
<div id="main">	
	  
			
			
  <h2 class="green_heading"><?php echo $event_name;?></h2>
  <p>
		<?php echo 
"<a href=images/pop/$image_0 rel=lightbox[roadtrip]><img src=images/thum/$image_0 class=timg /></a>"." ".
"<a href=images/pop/$image_1 rel=lightbox[roadtrip]><img src=images/thum/$image_1 class=timg /></a>"." ".
"<a href=images/pop/$image_2 rel=lightbox[roadtrip]><img src=images/thum/$image_2 class=timg /></a>"." ".
"<a href=images/pop/$image_3 rel=lightbox[roadtrip]><img src=images/thum/$image_3 class=timg /></a>"." ".
"<a href=images/pop/$image_4 rel=lightbox[roadtrip]><img src=images/thum/$image_4 class=timg /></a>"." ".
"<a href=images/pop/$image_5 rel=lightbox[roadtrip]><img src=images/thum/$image_5 class=timg /></a>"." "
		  
		  ;?>
		</p>
  <!--<p><strong>Venue : </strong><?php //echo $event_name;?></p>-->
  <p><?php echo $event_desc;?></p>
  <!--<p>Start Date : <?php //echo $event_sdate;?></p>-->
  <!--<p>Ending Date : <?php //echo $event_edate;?></p>-->
  
  
</div>	
			
	  <?php include_once('includes/right_nav.php');?>

<!-- footer starts here -->	
<?php include_once('includes/footer.php')?>

</div>

</body>
</html>
