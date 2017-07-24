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
<script>
function open_win()
{
window.open("administrator/post_comments.php")
}
</script>


<script type="text/javascript" src="js/menu.js"></script>
<script>
function confirmDelete(delUrl) {
if (confirm("Are you sure you want to delete")) {
document.location = delUrl;
}
}
</script>
<script type="text/javascript" src="js/wysiwyg.js"></script>
<script type="text/javascript" src="js/wysiwyg-settings.js"></script>
<script type="text/javascript">
WYSIWYG.attach('textarea2', full); // full featured setup



</script>

<title>Negombo Travles guest comments</title>
</head>
<body>
<!-- wrap starts here -->


			
		<!-- Menu Tabs -->
		<?php include('includes/header.php');?>

				
	<!-- content-wrap starts here -->
	<div id="content-wrap">		
											
	<img src="images/guest_comments.jpg" name="slide" width=970 height=236>
	
<!-- LEFT NAVIGATION HERE -->	
 <?php include_once('includes/left_nav.php');?>



	  <div id="main">	
	  
			
			<a name="TemplateInfo"></a>
		<h2><span class="green">Negombo guest comments </span> </h2> 
		
		<p><?php 
		if($_SESSION['accom'])
		{
		print($_SESSION['accom']);
		unset($_SESSION['accom']);
		}?></p>
		
	    <form id="form2" method="post" action="administrator/form_action.php">
	      <table width="550" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="85" height="30"><strong>Name : </strong></td>
              <td width="465" height="30"><input name="name" type="text" id="name" /></td>
            </tr>
            <tr>
              <td height="30"><strong>Country</strong> <strong>: </strong></td>
              <td height="30"><select name="country" class="tiny_text" id="dest_city" >
                    <option>-- Select the City--</option>
                    <?php 
					
				
					$city = new db_transaction();
                	$city_rec= $city->Select_Country();
           
				while($my_city_rec = mysql_fetch_assoc($city_rec))
				{ 
						
						echo " <option value=$my_city_rec[country_id]";
						echo ">", $my_city_rec['country_name'],"</option>\n";
				
				} 
					
		  ?>
              </select></td>
            </tr>
            <tr>
              <td height="30"><strong>E-Mail</strong> <strong>: </strong></td>
              <td height="30"><input name="email" type="text" id="email" /></td>
            </tr>
            <tr>
              <td height="30"><strong>Title : </strong></td>
              <td height="30"><input name="title" type="text" id="title" /></td>
            </tr>
            <tr>
              <td height="30" colspan="2">               
              <textarea id="textarea2" name="comment" style="width:500;height:150px;"></textarea>
			  <input type="hidden" name="page_name" value="guest_comment"  />
                <input type="hidden" name="mod" value="edit_ToDo_info" />
			  </td>
            </tr>
          </table>
	      <p>
	        <input type="submit" name="Submit" value="Submit" />
	        
	        <input type="reset" name="Submit2" value="Reset" />
	        
	      </p>
        </form>
	    <p>&nbsp;</p>
	    <p><u>Mr. Andrea from <strong>Germany </strong></u><br />
	      ver good tour we had with Mr. Ajitha<br />
  <em>email : anread@yahoo.com </em></p>
	    </p>
<p><br />
		</p>
		<p>&nbsp;</p>
      </div>	
<!-- Right NAVIGATION -->	
	  <?php include_once('includes/right_nav.php');?>

<!-- footer starts here -->	
 <?php include_once('includes/footer.php');?>
</div>

</body>
</html>
