<?php 
session_start();
include '../db/db_transaction.php';
//include '../db/dbclass.php';

 /* CALLING TO THE DATA BASE CONNECTION CLASS */
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();


$city_id		= $_GET['city_id'];
$destination_id	= $_GET['destination_id'];

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
<script>
function confirmDelete(delUrl) {
if (confirm("Are you sure you want to delete")) {
document.location = delUrl;
}
}
</script>

<title>Negombo Travel &amp; Tours</title>
</head>
<body>
<!-- wrap starts here -->

<div id="wrap">

<?php include('includes/header.php');?>
													
  </div>	
				
	<!-- content-wrap starts here -->
	<div id="content-wrap">
	  <div id="sidebar" >							
	    
	    
	    </div>
	  <div id="main">	
	  
			
	  <a name="TemplateInfo"></a> <div id="side_bar_heading"> <a href="new_destination.php">Destination Panel</a>  | Excursions<br />
	      <br />
	      <form id="form1" method="post" action="form_action.php">
	        <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="25%" height="24" bgcolor="#C10000"><u class="error_mark">Inserted Destinations </u> <br /></td>
                <td width="75%" height="24">
		<?php
                $accomodation = new db_transaction();
                $accomodation_rec= $accomodation->Excursion_Each_Desc($destination_id);

            
			 ?></td>
              </tr>
              <tr>
                <td height="15" colspan="2">
                <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#EFEFEF">
                  <?php while($my_each_destination = mysql_fetch_assoc($accomodation_rec)){ ?>
                  <tr>
                    
                    <td width="721" height="25" align="left" bgcolor="#FFFFFF">&nbsp;
                      
                    <?php print $my_each_destination['excursion_name'];?></td>
                    <td width="88" align="center" bgcolor="#000000"><a href="#">Add Images</a></td>
                    <td width="53" align="center" bgcolor="#000000"><a href="edit_excursion_informations.php?execursion_id=<?php print $my_each_destination['excursion_id'];?>&city_id=<?php print $my_each_destination['city_id'];?>&destination_id=<?php echo $destination_id;?>">Edit</a></td>
<td width="51" align="center" bgcolor="#000000"><a href="delete_actions.php?id=<?php echo "$my_each_destination[excursion_id]";?>&action=<?php echo 'destination_exec_delete';?>&destination_id=<?php echo $destination_id;?>"onclick="return confirm('Are you sure you want to delete this Destination ?')">Delete</a></td>
                                      </tr>
                  <?php  } ?>
                </table></td>
              </tr>
            </table>
        </form>
	  </div>	
	  </div>
	  <div id="rightbar">
	  </div>
		<!-- content-wrap ends here -->		
  </div>

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
