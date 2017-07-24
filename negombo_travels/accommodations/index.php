<?php
$pageID=1; 
session_start();
include '../db/db_transaction.php';

 /* CALLING TO THE DATA BASE CONNECTION CLASS */
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();

$accom_id					= $_GET['accom_id'];
$selected_each_accom		= new db_transaction;
$selected_each_accom_recset = $selected_each_accom->Accommodation_Panel_Edit($accom_id);

while($accom_detail_list = mysql_fetch_assoc($selected_each_accom_recset)){
	
	$a_name		= $accom_detail_list['a_name'];
	$a_intro	= $accom_detail_list['a_introduction'];
	$a_type_id	= $accom_detail_list['a_type_id'];
	$a_address	= $accom_detail_list['a_address'];
	$a_city		= $accom_detail_list['a_city'];
	$a_phone	= $accom_detail_list['a_phone'];
	$a_fax		= $accom_detail_list['a_fax'];
	$a_email	= $accom_detail_list['a_email'];
	$a_url		= $accom_detail_list['a_url'];
	$a_rooms	= $accom_detail_list['a_rooms'];
	$a_rating	= $accom_detail_list['a_rating'];
	$a_accomm	= $accom_detail_list['a_accommodation'];
	$facilities	= $accom_detail_list['facilities'];
	$other_facilities	= $accom_detail_list['other_facilities'];
	$leisure_excursion	= $accom_detail_list['leisure_excursion'];
	$header_image_name	= $accom_detail_list['header_image_name'];
	$other_facility		= $accom_detail_list['other_facilities'];
	$image_zero	= $accom_detail_list['image_0'];
	$image_one	= $accom_detail_list['image_1'];
	$image_two	= $accom_detail_list['image_2'];
	$image_thre	= $accom_detail_list['image_3'];
	$image_four	= $accom_detail_list['image_4'];
	$image_five	= $accom_detail_list['image_5'];
	$image_six	= $accom_detail_list['image_6'];
	$image_seven = $accom_detail_list['image_7'];
	$image_eight = $accom_detail_list['image_8'];
	$image_nine	= $accom_detail_list['image_9'];
	
	
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



<title>Sri Lanka Accommodations | Hotel Rooms in Sri Lanka | Sri Lanka budget Accommodations | Home Stay Sri Lanka</title>
<meta name="description" content="Budgeted Sri Lanka accommodations with Negombo Travel and Tours"/>
<meta name="keywords" content="Sri Lanka accommodations,Negombo accommodations,Negombo budgeted accommodations,sri lanka budgeted accommodations"/>

</head>
<body>
<!-- wrap starts here -->

<?php include('includes/header.php');?>
</div>
				
	<!-- content-wrap starts here -->
	<div id="content-wrap">		
											
	<img src="images/header_images/<?php echo $header_image_name;?>" name="slide" width=970 height=236>
	
  </div>
	  <?php include_once('includes/left_nav.php');?>
      
      
      <div id="main">	
	  
			
			<a name="TemplateInfo"></a>
		
        <table width="530" border="0" cellpadding="0" cellspacing="0">
  			<tr>
    		<td height="56">
            
    		  <p><h1><span class="green"><b><u>
			  <?php echo $a_name;?></u></b>  (<?php echo "$a_rating";?> star) </span><br><br><?php
			$pieces = explode(",", $other_facilities);
			if($pieces[0] !=''){
				echo "<img src=images/icons/$pieces[0].png > ";
				}
				if($pieces[1] !=''){
				echo "<img src=images/icons/$pieces[1].png > ";
				}
					if($pieces[2] !=''){
					echo "<img src=images/icons/$pieces[2].png>". "   ";
					}
						if($pieces[3] !=''){
						echo "<img src=images/icons/$pieces[3].png> ";
						}
							if($pieces[4] !=''){
							echo "<img src=images/icons/$pieces[4].png> ";
							}
						if($pieces[5] !=''){
							echo "<img src=images/icons/$pieces[5].png>";
							}
							if($pieces[6] !=''){
								echo "<img src=images/icons/$pieces[6].png> ";
							}
							if($pieces[7] !=''){
								echo "<img src=images/icons/$pieces[7].png> ";
							}
								if($pieces[8] !=''){
								echo "<img src=images/icons/$pieces[8].png>";
								}
									if($pieces[9] !=''){
										echo "<img src=images/icons/$pieces[9].png> ";
									}
										if($pieces[10] !=''){
										echo "<img src=images/icons/$pieces[10].png> ";
										}
											if($pieces[11] !=''){
												echo "<img src=images/icons/$pieces[11].png> ";
											}
												if($pieces[12] !=''){
													echo "<img src=images/icons/$pieces[12].png>";
												}
													if($pieces[13] !=''){
													echo "<img src=images/icons/$pieces[13].png>";
													}
											if($pieces[14] !=''){
												echo "<img src=images/icons/$pieces[14].png> ";
											}
										/*if($pieces[15] !=''){
											echo "<img src=images/icons/$pieces[15].png> ";
										}
									if($pieces[16] !=''){
										echo "<img src=images/icons/$pieces[16].png> ";
									}
								if($pieces[17] !=''){
									echo "<img src=images/icons/$pieces[17].png>";
								}
							
							if($pieces[18] !=''){
							echo "<img src=images/icons/$pieces[18].png>";
							}*/
			 
			
			?></h1></p>
	          </td>
   		  </tr>
		</table>
</span> 
		<p class="accom_heading"><span class="green"><strong><u><em>Introduction</em></u></strong></span><br />
        <?php echo "$a_intro";?> </p>
		<!--<p><span class="green"><strong><u>Address</u></strong></span><br />--></p>
<p><span class="green"><strong><u><em>Accommodation </em></u></strong></span>
<p><?php echo "$a_accomm";?><br />
<p><span class="green"><strong><u><em>Image Gallery</em></u></strong></span><br />
          <?php echo 
"<a href=../administrator/im/$image_zero rel=lightbox[roadtrip]><img src=../administrator/im/im_thum/$image_zero class=timg /></a>"." ".
"<a href=../administrator/im/$image_one rel=lightbox[roadtrip]><img src=../administrator/im/im_thum/$image_one class=timg /></a>"." ".
"<a href=../administrator/im/$image_two rel=lightbox[roadtrip]><img src=../administrator/im/im_thum/$image_two class=timg /></a>"." ".
"<a href=../administrator/im/$image_thre rel=lightbox[roadtrip]><img src=../administrator/im/im_thum/$image_thre class=timg /></a>"." ".
"<a href=../administrator/im/$image_four rel=lightbox[roadtrip]><img src=../administrator/im/im_thum/$image_four class=timg /></a>"." ".
"<a href=../administrator/im/$image_five rel=lightbox[roadtrip]><img src=../administrator/im/im_thum/$image_five class=timg /></a>"." "
		  
		  ;?>
		<!--<p><span class="green"><strong><u>Facilities </u></strong></span><br />-->
        <?php //echo "$facilities";?>                
		<p><span class="green"><!--<strong><u>Leisure & Excursion</u></strong>--></span><br />
		  <?php //echo "$leisure_excursion";?>         		        
	    <!--<p><span class="green"><strong><u>Available Rooms</u></strong></span><br />-->
		  <?php //echo "$a_address";?>                                     
		<p><span class="green"><strong><u></u></strong></span>
		<!--<a href="comments.php?accom_id=<?php echo $accom_id;?>"><img src="images/comment.gif" alt="" width="221" height="44" /></a> -->              
  </div>	
			
      <?php include_once('includes/right_nav.php');?>
  <!-- footer starts here -->	
<?php include_once('includes/footer.php')?>
</div>

</body>
</html>
