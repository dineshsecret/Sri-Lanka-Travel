<?php 
session_start();
include '../db/db_transaction.php';
//include '../db/dbclass.php';

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
	  
			
	  <a name="TemplateInfo"></a> <div id="side_bar_heading">Add New Itenary Packages<br />
	      <br />
	      <form id="form1" method="post" action="form_action.php">
	        <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="30">Name of Itenary </td>
                <td height="30"> :
                  <input name="itenery_name" type="text" id="itenery_name" size="50" /><span class="error">
				<?php 
				if($_SESSION['accom']){
						echo($_SESSION['accom']);
						unset($_SESSION['accom']);
				}
				?></span>				</td>
              </tr>
              <tr>
                <td height="30">Targetted City</td>
                <td height="30"> : 
                  <select name="dest_city" class="tiny_text" id="dest_city" >
                    <option value="0">-- Select the City--</option>
                    <?php 
					
				
					$city = new db_transaction();
                	$city_rec= $city->Select_City();
           
				while($my_city_rec = mysql_fetch_assoc($city_rec))
				{ 
						
						echo " <option value=$my_city_rec[c_id]";
						echo ">", $my_city_rec['c_name'],"</option>\n";
				
				} 
					
		  ?>
                </select>&nbsp;<span class="error">
                <?php 
				if($_SESSION['city']){
						echo($_SESSION['city']);
						unset($_SESSION['city']);
				}
				?>
                </span></td>
              </tr>
              <tr>
                <td width="25%" height="30">
                <input type="hidden" name="page_name" value="itenary"  />
                <input type="hidden" name="mod" value="insert_new_itenary" /></td>
                <td width="75%" height="30"><input name="Submit" type="submit" class="tiny_text" value="Submit" /></td>
              </tr>
              <tr>
                <td height="28" bgcolor="#C10000"><span class="error_mark">&nbsp;<u>Inserted  Itenaries Categories</u></span><u> </u></td>
                <td width="75%" height="28" bgcolor="#FFFFFF">
		<?php
                $itenary 		= new db_transaction();
                $itenary_rec	= $itenary->Itenaray_Drop_Down();

            
			 ?></td>
              </tr>
              <tr>
                <td height="15" colspan="2">
                <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#EFEFEF">
                  <?php while($my_each_destination = mysql_fetch_assoc($itenary_rec)){ ?>
                  <tr>
                    
                    <td width="539" height="25" align="left" bgcolor="#FFFFFF">&nbsp;
                   	<?php print $my_each_destination['itenary_name'];?></td>
                    <td width="164" align="center" bgcolor="#000000">
                    <a href="itenary_dash.php?city_id=<?php print $my_each_destination['itenary_target_city'];?>&iten_type_id=<?php print $my_each_destination['itenary_id'];?>">Inserted Itenanry Packs</a></td>
                    <td width="146" align="center" bgcolor="#000000"><a href="add_itenary_informations.php?city_id=<?php print $my_each_destination['itenary_target_city'];?>&iten_type_id=<?php print $my_each_destination['itenary_id'];?>" title="Add More Excurions to here">Add More Itenary</a></td>
<td width="64" align="center" bgcolor="#000000"><a href="delete_actions.php?id=<?php echo $my_each_destination['itenary_id'];?>&action=<?php echo 'itenery_cat_delete';?>"onclick="return confirm('Are you sure you want to delete this Itenary?')">Delete</a></td>
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
