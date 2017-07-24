<?php
$pageID=1; 
session_start();
include '../db/db_transaction.php';

 /* CALLING TO THE DATA BASE CONNECTION CLASS */
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();

$accom_id					= $_GET['accom_id'];
$a_rating					= $_GET['star_id'];

$selected_each_accom		= new db_transaction;
$selected_each_accom_recset = $selected_each_accom->Accommodation_Panel_Edit($accom_id);


/*------------------------ STAR CAT DETAILS ------------------------------*/
$selected_rating_accom			= new db_transaction;
$selected_rating_accom_recset = $selected_rating_accom->Accommodation_star_cat($a_rating);


/*------------------------- DEFAULT DATA CAPTURING --------------------------------------------*/

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



<title>Negombo Travels Accommodations</title>
<meta name="description" content="Sri lanka, Negombo tour facilitaor with more experiance tour guides and associations"/>
<meta name="keywords" content="Negombo visit, Negombo trip, Negombo accommodations, budget tour to negombo, best tour operators, Sri Lanka tour operators, Negombo tour guides, sri lanka tours, negombo catamaran rides, Negombo, sri lanka"/>

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
	  
			
			<a name="TemplateInfo"></a></span>


<table width="561" border="0" cellpadding="0" cellspacing="0">
   <?php while($accom_star_each = mysql_fetch_assoc($selected_rating_accom_recset)){ ?>
    <tr>
      <td width="10" rowspan="2">&nbsp;</td>
      <td width="120" height="25">
	    <h2><?php echo "<img src=../administrator/im/im_thum/$accom_star_each[image_0] class=timg width=110 height=90";?></td>
      <td width="443"><span class="sub_heading"><u><?php echo $accom_star_each['a_name'];?></u>
      </span>
	    <br />
	    <?php
	  		$other_facilities = $accom_star_each['other_facilities'];
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
			 
			
			?> <br />
	    <?php 
		echo substr($accom_star_each['a_introduction'], 0, 100);
		?>
	    <br />
	    <br />
	    <a href="index.php?accom_id=<?php echo $accom_star_each['a_id'];?>"><img src="../images/more_info.jpg" alt="" width="122" height="24" /></a></td>
    </tr>
    <tr>
      <td height="45" colspan="2">&nbsp;</td>
      </tr>
    
	<?php } ?>
  </table>
</p>
  </div>	
			
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
