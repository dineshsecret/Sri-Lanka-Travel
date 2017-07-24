<?php
session_start();
include 'db/db_transaction.php';

 /* CALLING TO THE DATA BASE CONNECTION CLASS */
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="stylesheet" href="css/BrightSide.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/new_dop_menu.css">

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

<title>Accommodations</title>
</head>
<body>
<!-- wrap starts here -->


			
		<!-- Menu Tabs -->
		<?php include('includes/header.php');?>

				
	<!-- content-wrap starts here -->
	<div id="content-wrap">		
											
	<img src="images/guest_inquiry.jpg" name="slide" width=970 height=236 title="Guest Inquiries">
	
<!-- LEFT NAVIGATION HERE -->	
 <?php include_once('includes/left_nav.php');?>



	  <div id="main">	
	  
			
			<a name="TemplateInfo"></a>
		    <h2><span class="green">Find Your Accommodations <a id="tips"></a></span></h2>
		   
		    <form id="form2" method="post" action="">
			
			<p>Please select the preferred Star Category : 
			  <select name="select3" class="tiny_text" onchange="window.location=this.options[this.selectedIndex].value;">
			    <option disabled="disabled" selected="selected">-- Select Star Category--</option>
			    <option value="accommodations/star_index.php?star_id=5&accom_id=1089">5 Star</option>
			    <option value="accommodations/star_index.php?star_id=4&accom_id=1089">4 Star</option>
			    <option value="accommodations/star_index.php?star_id=3&accom_id=1089">3 Star</option>
			    <option value="accommodations/star_index.php?star_id=2&accom_id=1089">2 Star</option>
			    <option value="accommodations/star_index.php?star_id=1&accom_id=1089">1 Star</option>
		      </select>
			</p>
			<p>&nbsp;</p>
			<p>Select you preferred Guest Houses | Bungalow : 
			  <select name="select4" class="tiny_text" onchange="window.open(this.options[this.selectedIndex].value,'_top')" >
                <option>-- Select   --</option>
                <?php 
					
				
				$guest_house			= new db_transaction;
				$guest_house_recset 	= $guest_house->CallGuestBungActiveList();
				
				
           			while($row_page_guest = mysql_fetch_assoc($guest_house_recset)) {
							//print_r($row_page);
							
							
							echo " <option value=accommodations/index.php?accom_id=$row_page_guest[a_id]";
		
						if ($result_page == $row_page_guest) { echo "selected"; }
							
							$hotel_name 	= $row_page_guest['a_name'];
							
							if(strlen($hotel_name) > 21)
							{
								$hotel_name = substr($hotel_name,0,21);
							}
							echo ">", $hotel_name,"</option>\n";
					
					} 
					
					
					
		   ?>
              </select>
			</p>
			<p>&nbsp;</p>
			<p>Select Home Stay : 
			  <select name="select5" class="tiny_text" onchange="window.open(this.options[this.selectedIndex].value,'_top')" >
                <option>-- Select  --</option>
                <?php 
					
				
				$home_list			= new db_transaction;
				$home_list_recset 	= $home_list->CallHomeStayActiveList();
				
				while($row_page_guest = mysql_fetch_assoc($home_list_recset)) {
							//print_r($row_page);
							
							
							echo " <option value=accommodations/index.php?accom_id=$row_page_guest[a_id]";
		
						if ($result_page == $row_page_guest) { echo "selected"; }
							
							$hotel_name 	= $row_page_guest['a_name'];
							
							if(strlen($hotel_name) > 21)
							{
								$hotel_name = substr($hotel_name,0,21);
							}
							echo ">", $hotel_name,"</option>\n";
					
					} 
					
					
		   ?>
              </select>
			</p>
	        </form>
			<p>Negombo Travel & Tour has built a very honest and trusted name for Sri Lanka tourism industry. So you be able to get an solid service via our respective tour operators and consultants.</p>
      </div>	
      <!-- Right NAVIGATION -->	
	  <?php include_once('includes/right_nav.php');?>

<!-- footer starts here -->	
 <?php include_once('includes/footer.php');?>
</div>

</body>
</html>
