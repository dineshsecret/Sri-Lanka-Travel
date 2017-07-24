<?php
session_start();
include '../db/db_transaction.php';

 /* CALLING TO THE DATA BASE CONNECTION CLASS */
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();



if($_GET['what_to_Do_Cat_id']==''){


$what_to_Do_Cat_id				= 14;

$what_to_do					= new db_transaction;
$what_to_do_recset 			= $what_to_do->What_To_Do_Cat_List($what_to_Do_Cat_id);


while($whatsToDo_detail_list = mysql_fetch_assoc($what_to_do_recset)){
	
	$what_todo_city_id					= $whatsToDo_detail_list['city_id'];
	$what_To_Do_dest_name				= $whatsToDo_detail_list['dest_name'];
	$what_To_Do_dest_desc				= $whatsToDo_detail_list['dest_desc'];
	$what_To_Do_dest_header_image		= $whatsToDo_detail_list['dest_header_image'];
	
	$image_0		= $whatsToDo_detail_list['image_0'];
	$image_1		= $whatsToDo_detail_list['image_1'];
	$image_2		= $whatsToDo_detail_list['image_2'];
	$image_3		= $whatsToDo_detail_list['image_3'];
	$image_4		= $whatsToDo_detail_list['image_4'];
	$image_5		= $whatsToDo_detail_list['image_5'];

	}

}

if($_GET['what_to_Do_Cat_id']!=''){

//$what_to_see_id					= $_GET['what_to_see'];
$what_to_Do_Cat_id			= $_GET['what_to_Do_Cat_id'];

$what_to_do					= new db_transaction;
$what_to_do_recset 			= $what_to_do->What_To_Do_Cat_List($what_to_Do_Cat_id);


while($whatsToDo_detail_list = mysql_fetch_assoc($what_to_do_recset)){
	
	$what_todo_city_id					= $whatsToDo_detail_list['city_id'];
	$what_To_Do_dest_name				= $whatsToDo_detail_list['dest_name'];
	$what_To_Do_dest_desc				= $whatsToDo_detail_list['dest_desc'];
	$what_To_Do_dest_header_image		= $whatsToDo_detail_list['dest_header_image'];
	
	$image_0		= $whatsToDo_detail_list['image_0'];
	$image_1		= $whatsToDo_detail_list['image_1'];
	$image_2		= $whatsToDo_detail_list['image_2'];
	$image_3		= $whatsToDo_detail_list['image_3'];
	$image_4		= $whatsToDo_detail_list['image_4'];
	$image_5		= $whatsToDo_detail_list['image_5'];

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



<title>Where to go in Sri Lanka | Sigiriya | Anuradhapura | Galle | Trincomale | Negombo</title>
<meta name="description" content="Kandy, Negombo, Sigiriya and Anuradhapura is identified by Negombo Travel and Tours"/>
<meta name="keywords" content="Kandy in Sri Lanka, Colombo Sri Lanka,Negombo Sri Lanka,Hikkaduwa Sri Lanka,Sigiriya,Dambulla,Nuwara Eliya"/>

</head>
<body>
<!-- wrap starts here -->


			
		<!-- Menu Tabs -->
		<?php include('includes/header.php');?>
													
  </div>	
				
	<!-- content-wrap starts here -->
	<div id="content-wrap">		
											
	<img src="images/header_images/<?php 
	echo $what_To_Do_dest_header_image
	
	?>" name="slide" width=970 height=236>
	
		</div>
	  <?php include_once('includes/left_nav.php');?>
      
      
      <div id="main">	
	  
			
			
		<h1><span class="green"><u><?php echo $what_To_Do_dest_name;?></u></span></h1>
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
		<p>
	    <?php 
		echo $what_To_Do_dest_desc;
		?></p> 
		
		</p>
      </div>	
			
	  <?php include_once('includes/right_nav.php');?>

<!-- footer starts here -->	
<?php include_once('includes/footer.php')?>

</div>

</body>
</html>
