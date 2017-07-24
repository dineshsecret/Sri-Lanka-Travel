<?php
session_start();
include '../db/db_transaction.php';

 /* CALLING TO THE DATA BASE CONNECTION CLASS */
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();


		$news_id = $_GET['id'];
		$news_information			= new db_transaction;
		$news_information_recset 	= $news_information->News_List_Each($news_id);
		
		while($more_place_list = mysql_fetch_assoc($news_information_recset)){
	
			$news_title 	= $more_place_list['news_title'];
			$news_intro 	= $more_place_list['news_intro'];
			$news_venue 	= $more_place_list['news_venue'];
			$date 			= $more_place_list['date'];
			$news_desc 		= $more_place_list['news_desc'];			
			$heade_image 	= $more_place_list['heade_image'];
			
			
			$image_0 = $more_place_list['image_0'];
			$image_1 = $more_place_list['image_1'];
			$image_2 = $more_place_list['image_2'];

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



<title>Sri Lanka More News</title>
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
	<div id="content-wrap"><img src="images/header_images/<?php echo $heade_image;?>" alt="" width="970" height="236" /></div>
	  <?php include_once('includes/left_nav.php');?>
      
      
<div id="main">	<span class="post-footer"><?php echo $news_title;?></span>


<p><?php echo $news_intro;?></p>
<p><?php echo $news_desc ?></p>

<h2 class="green">Images</h2>

<p><?php echo 
"<a href=images/pop/$image_0 rel=lightbox[roadtrip]><img src=images/thum/$image_0 class=timg /></a>"." ".
"<a href=images/pop/$image_1 rel=lightbox[roadtrip]><img src=images/thum/$image_1 class=timg /></a>"." ".
"<a href=images/pop/$image_2 rel=lightbox[roadtrip]><img src=images/thum/$image_2 class=timg /></a>"." ";
?>

</p>
<p><a href="index.php"><< Back To News</a></p>
</div>
<?php include_once('includes/right_nav.php');?>

<!-- footer starts here -->	
<?php include_once('includes/footer.php')?>

</div>

</body>
</html>
