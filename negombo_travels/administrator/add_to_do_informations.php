<?php 
session_start();
include '../db/db_transaction.php';
//include '../db/dbclass.php';

$city_id		= $_GET['city_id'];
$what_To_Do_Id	= $_GET['what_to_do_id'];
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
	  
			
	  <a name="TemplateInfo"></a> <div id="side_bar_heading"><a href="what_to_do.php">To Do  Panel</a> | Add More Places to Visit <br />
	  <?php if(isset($_SESSION['accom_success'])) {
		  
		  echo "<table width=100% border=0 align=center cellpadding=0 cellspacing=0 bgcolor=#FF0000> <tr><td height=25 colspan=3 align=center><span class=error_mark>$_SESSION[accom_success];</span></td>
</tr></table>"; unset($_SESSION['accom_success']);}?>
	      <form id="form1" method="post" action="form_action.php"  enctype="multipart/form-data">
	        <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="25%" height="25"> To Do Name </td>
                <td height="25">:                  
                <input name="atrac_name" type="text" id="atrac_name" size="50" /></td>
              </tr>
              <tr>
                <td height="25">Venue </td>
                <td height="25">:
<input name="atrac_add" type="text" id="atrac_add" size="50" /></td>
              </tr>
              <tr>
                <td height="25"> Phone </td>
                <td height="25">:
<input name="atrac_phon" type="text" id="atrac_phon" size="50" /></td>
              </tr>
              <tr>
                <td height="25">Fax </td>
                <td height="25">:
<input name="atrac_fax" type="text" id="atrac_fax" size="50" /></td>
              </tr>
              <tr>
                <td height="25">Email</td>
                <td height="25">:
<input name="atrac_email" type="text" id="atrac_email" size="50" /></td>
              </tr>
              <tr>
                <td height="25">Web Site URL </td>
                <td height="25">:
<input name="atrac_url" type="text" id="atrac_url" size="50" /></td>
              </tr>
              
              <tr>
                <td height="25">Rating </td>
                <td height="25">:
                <input name="atrac_rating" type="text" id="atrac_rating" size="3" /></td>
              </tr>
              
              <tr>
                <td height="25">Facilities</td>
                <td height="25"><textarea id="textarea2" name="atrac_faci" style="width:500;height:150px;"></textarea></td>
              </tr>
              <tr>
                <td height="25">Leisure &amp; Excursion</td>
                <td height="25"><textarea id="textarea3" name="atrac_excurion" style="width:500;height:150px;"></textarea>		</td>
              </tr>
              <tr>
                <td height="25">Header Image Uploads </td>
                <td height="25"><input name="d_imgfile" type=file class="tiny_text" id="accom_images"></td>
              </tr>
              
              <tr>
                <td height="25">
				<input type="hidden" name="page_name" value="what_to_do"  />
                <input type="hidden" name="mod" value="insert_new_to_do_desc" />
                <input type="hidden" name="city_id" value="<?php echo $city_id;?>" />
                <input type="hidden" name="what_to_do_id" value="<?php echo $what_To_Do_Id;?>" />
<br />                  <br /></td>
                <td width="75%" height="25"><input type="submit" name="Submit" value="Submit" />
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
