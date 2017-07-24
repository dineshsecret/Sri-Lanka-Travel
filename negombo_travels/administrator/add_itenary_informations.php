<?php 
session_start();
include '../db/db_transaction.php';
//include '../db/dbclass.php';

$city_id		= $_GET['city_id'];
$iten_type_id	= $_GET['iten_type_id'];
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

<title>Negombo Travel &amp; Tours</title>
<script type="text/javascript" src="js/wysiwyg.js"></script>
<script type="text/javascript" src="js/wysiwyg-settings.js"></script>
<script type="text/javascript">
WYSIWYG.attach('textarea2', full); // full featured setup
WYSIWYG.attach('textarea3', full); // full featured setup
WYSIWYG.attach('textarea4', full); // full featured setup


</script>
</head>
<body>
<!-- wrap starts here -->

<div id="wrap">

		
		<!-- Menu Tabs -->
<?php include('includes/header.php');?>
													
  </div>	
				
	<!-- content-wrap starts here -->
	<div id="content-wrap">
	  <div id="sidebar" >							
	    
	    
	    </div>
	  <div id="main">	
	  
			
	  <a name="TemplateInfo"></a> <div id="side_bar_heading"><a href="itenaries.php">Itenary Panel</a> | Add More Attractions<br />
	  <?php if(isset($_SESSION['accom_success'])) {
		  
		  echo "<table width=100% border=0 align=center cellpadding=0 cellspacing=0 bgcolor=#FF0000> <tr><td height=25 colspan=3 align=center><span class=error_mark>$_SESSION[accom_success];</span></td>
</tr></table>"; unset($_SESSION['accom_success']);}?>
	      <form id="form1" method="post" action="form_action.php"  enctype="multipart/form-data">
	        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
              <tr>
                <td height="25" bgcolor="#FFFFFF"><u >Itenary Name</u></td>
                <td height="25" bgcolor="#FFFFFF">:
                <input name="itenary_name" type="text" id="itenary_name" size="50" /></td>
              </tr>
              <tr>
                <td height="32" bgcolor="#FFFFFF"><u>Price Of the Tour</u> <span class="error">US$ </span></td>
                <td height="32" bgcolor="#FFFFFF"> : 
                <input name="price" type="text" id="price" size="6" maxlength="4" /></td>
              </tr>
              <tr>
                <td width="25%" height="32" bgcolor="#FFFFFF"><u >Tour Type </u></td>
                <td height="32" bgcolor="#FFFFFF"> : 
                  <select name="type_of_tour" id="type_of_tour">
                    <option>-- Budgeted Tour--</option>
                    <option value="yes">Yes</option>
                    <option value="no">no</option>
                  </select>                </td>
              </tr>
              <tr>
                <td height="43" valign="top" bgcolor="#FFFFFF"><u>Itenary Introduction</u> </td>
                <td height="43" bgcolor="#FFFFFF"><textarea id="textarea2" name="itenary_intro" style="width:500;height:450px;"></textarea></td>
              </tr>
              <tr>
                <td height="261" valign="top" bgcolor="#FFFFFF"><u>Itenary Highlights</u> </td>
                <td height="261" bgcolor="#FFFFFF"><textarea name="itenary_highlight" class="tiny_text" id="textarea3" style="width:500;height:250px;"></textarea>		</td>
              </tr>
              <tr>
                <td height="12" valign="top" bgcolor="#FFFFFF"><u>Itenary Program</u> </td>
                <td height="12" bgcolor="#FFFFFF"><textarea name="itenery_program" class="tiny_text" id="textarea4" style="width:500;height:450px;"></textarea></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#FFFFFF">Header Image Uploads </td>
                <td height="25" bgcolor="#FFFFFF"><input name="d_imgfile" type=file class="tiny_text" id="accom_images"></td>
              </tr>
              
              <tr>
                <td height="25" bgcolor="#FFFFFF">
				<input type="hidden" name="page_name" value="itenary"  />
                <input type="hidden" name="mod" value="insert_new_itenary_desc" />
                <input type="hidden" name="city_id" value="<?php echo $city_id;?>" />
                <input type="hidden" name="iten_type_id" value="<?php echo $iten_type_id;?>" />
<br />                  <br /></td>
                <td width="75%" height="25" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="Submit" />
                  <input type="reset" name="Submit2" value="Reset" /></td>
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
		<p class="align-left"><strong> </strong><br />
	  </p>
	</div>
	<div class="footer-left">
		<p class="align-left"><strong> </strong><br />
	  </p>
	</div>
	<div class="footer-left">
		<p class="align-left"><strong> </strong><br />
	  </p>
	</div>
	
	
	<div class="footer-right">
		<p class="align-right">
		<a href="index.html"> </a></p>
	</div>
	
</div>

</div>

</body>
</html>
