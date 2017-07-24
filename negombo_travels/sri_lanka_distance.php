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
<script language="JavaScript" src="js/distance_sl.js"></script>

<title>distance finder </title>
</head>
<body>
<!-- wrap starts here -->


			
		<!-- Menu Tabs -->
		<?php include('includes/header.php');?>

				
	<!-- content-wrap starts here -->
	<div id="content-wrap">		
											
	<img src="images/sri_lanka_roads.jpg" name="slide" width=970 height=236>
	
<!-- LEFT NAVIGATION HERE -->	
 <?php include_once('includes/left_nav.php');?>



	  <div id="main">	
	  
			
			<a name="TemplateInfo"></a>
		    <h2><span class="green">Distance Finder Sri Lanka</span><a id="tips"></a></h2>
		    <p>Sri Lanka is a one of a best destination to spend your vacation. Negombo travels distance finder would be benefited to find the exact distance from your preferred location to other.   </p>
		    <form name="dist" id="dist" style="font-size: 8pt;">
                           
                            <b>FROM</b> :&nbsp;
                            <select name="citybox1">
                              <option>Ambepussa</option>
                              <option>Anuradhapura</option>
                              <option>Badulla</option>
                              <option>Bandarawela</option>
                              <option>Batticaloa</option>
                              <option>Bentota</option>
                              <option>Beruwela</option>
                              <option selected="selected">Colombo</option>
                              <option>Dambulla</option>
                              <option>Ella</option>
                              <option>Galle</option>
                              <option>Habarana</option>
                              <option>Hambantota</option>
                              <option>Hikkaduwa</option>
                              <option>Inginiyagala</option>
                              <option>Jaffna</option>
                              <option>Kalkudah (Pasekudah)</option>
                              <option>Kalutara</option>
                              <option>Kandy</option>
                              <option>Kataragama</option>
                              <option>Koggala</option>
                              <option>Kurunegala</option>
                              <option>Mannar</option>
                              <option>Matale</option>
                              <option>Matara</option>
                              <option>MtLavinia</option>
                              <option>Negombo</option>
                              <option>Nuwara Eliya</option>
                              <option>Polonnaruwa</option>
                              <option>Pottuvil</option>
                              <option>Puttalam</option>
                              <option>Ratnapura</option>
                              <option>Sigiriya</option>
                              <option>Talaimannar</option>
                              <option>Tangalle</option>
                              <option>Tissamaharama</option>
                              <option>Trincomalee</option>
                              <option>Valaichenai</option>
                              <option>Vavuniya</option>
                              <option>Wellawaya</option>
                              <option>Wilpattu</option>
                              <option>Yala</option>
                            </select>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>TO</b> :&nbsp;
                          <select name="citybox2">
                            <option selected="selected">Ambepussa</option>
                            <option>Anuradhapura</option>
                            <option>Badulla</option>
                            <option>Bandarawela</option>
                            <option>Batticaloa</option>
                            <option>Bentota</option>
                            <option>Beruwela</option>
                            <option>Colombo</option>
                            <option>Dambulla</option>
                            <option>Ella</option>
                            <option>Galle</option>
                            <option>Habarana</option>
                            <option>Hambantota</option>
                            <option>Hikkaduwa</option>
                            <option>Inginiyagala</option>
                            <option>Jaffna</option>
                            <option>Kalkudah (Pasekudah)</option>
                            <option>Kalutara</option>
                            <option>Kandy</option>
                            <option>Kataragama</option>
                            <option>Koggala</option>
                            <option>Kurunegala</option>
                            <option>Mannar</option>
                            <option>Matale</option>
                            <option>Matara</option>
                            <option>MtLavinia</option>
                            <option>Negombo</option>
                            <option>Nuwara Eliya</option>
                            <option>Polonnaruwa</option>
                            <option>Pottuvil</option>
                            <option>Puttalam</option>
                            <option>Ratnapura</option>
                            <option>Sigiriya</option>
                            <option>Talaimannar</option>
                            <option>Tangalle</option>
                            <option>Tissamaharama</option>
                            <option>Trincomalee</option>
                            <option>Valaichenai</option>
                            <option>Vavuniya</option>
                            <option>Wellawaya</option>
                            <option>Wilpattu</option>
                            <option>Yala</option>
                          </select>
                          &nbsp;<br />
                          <br />
                          <input name="calc" type="button" class="submit1" onclick="disp()" value="Calculate Distance" />
                          <br />
                          <br />
                          Distance in 
                          Kilometres : &nbsp;
                                    <input type="text" name="sel1" width="8" size="4" />
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Distance in 
                          Miles :&nbsp;
                                    <input type="text" name="sel2" width="8" size="4" />
                                    <br />
                                    <br />
        </form><p>This tool covers 42 Sri Lankan Cities and provides easier way to find the distance between any two cities both in kilometres and in miles. All you have to do is to choose "FROM" then choose "TO" and then press "FIND DISTANCE". The distances in Kilometres and in Miles will appear in the boxes. </p>
	  </div>	
      <!-- Right NAVIGATION -->	
	  <?php include_once('includes/right_nav.php');?>

<!-- footer starts here -->	
 <?php include_once('includes/footer.php');?>
</div>

</body>
</html>
