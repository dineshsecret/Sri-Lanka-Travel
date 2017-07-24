<?php
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



<title>Connaissance De Seylan</title>
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
	    <form id="form2" method="post" action="../action.php">
	      <table width="400" border="0" cellpadding="0" cellspacing="0">
	        <tr>
	          <td height="19" colspan="2" bgcolor="#F86707" class="white_text">&nbsp;<?php echo $a_name;?></td>
            </tr>
	        <tr>
	          <td width="103" height="25" class="tiny_text"><strong>&nbsp;Name  </strong></td>
	          <td width="437" height="25"><strong>:</strong>	            <input name="name" type="text" class="tiny_text" id="name" /></td>
            </tr>
	        <tr>
	          <td height="25" class="tiny_text"><strong>&nbsp;Country </strong></td>
	          <td height="25"><strong>:</strong><select name="country_id" class="tiny_text" id="accom_city" >
                <option>-- Select the City--</option>
                <?php 
					
				
					$country = new db_transaction();
                	$country_rec= $country->Select_Country();
           
						while($my_country_rec = mysql_fetch_assoc($country_rec))
						{ 
						
						echo " <option value=$my_country_rec[country_id]";
						echo ">", $my_country_rec['country_name'],"</option>\n";
				
					} 
					
		  ?>
              </select></td>
            </tr>
	        <tr>
	          <td height="25" class="tiny_text"><strong>&nbsp;Email </strong></td>
	          <td height="25"><strong>:</strong>	            <input name="email_address" type="text" class="tiny_text" id="email_address" size="40" /></td>
            </tr>
	        <tr>
	          <td height="25" valign="top" class="tiny_text"> <strong>&nbsp;Comment </strong></td>
	          <td height="25" valign="top"><textarea name="comments" id="comments" cols="45" rows="5"></textarea></td>
            </tr>
	        <tr>
	          <td height="25">
              <input type="hidden" name="page_name" value="accom"  />
              <input type="hidden" name="mod" value="guest_comment" /> 
              <input type="hidden" name="accom_id" value="<?php echo $accom_id;?>" /></td>
	          <td height="25"><input type="submit" name="button" id="button" value="Submit" /> <input type="reset" name="button2" id="button2" value="Rest" /></td>
            </tr>
          </table>
        </form>
	    <h1></span><?php 
		if(isset($_SESSION['success'])){
			echo ($_SESSION['success']);
			unset($_SESSION['success']);
			}
		
		?></h1>
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
