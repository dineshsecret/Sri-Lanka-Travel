<?php
session_start();
//include '../db/db_transaction.php';
include_once('../db/dbclass.php');
include_once('../db/db_transaction.php');

 /* CALLING TO THE DATA BASE CONNECTION CLASS */
$db_connection_call = new connaissance_db;
$db_connection_call->dbconnection();



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



<title>Sri Lanka Images</title>
<meta name="description" content="Sri lanka, Negombo tour facilitaor with more experiance tour guides and associations"/>
<meta name="keywords" content="Negombo visit, Negombo trip, Negombo accommodations, budget tour to negombo, best tour operators, Sri Lanka tour operators, Negombo tour guides, sri lanka tours, negombo catamaran rides, Negombo, sri lanka"/>

</head>
<body>
<!-- wrap starts here -->


			
		<!-- Menu Tabs -->
		<?php include('includes/header.php');?>
													
  </div>	
				
	<!-- content-wrap starts here -->
	<div id="content-wrap"><img src="images/header_images/31692507518616arugambay.jpg" alt="" width="970" height="236" /></div>
	  <?php include_once('includes/left_nav.php');?>
      
      
      <div id="main">	
	  
			
		
		    
			<h2><span class="green"><u>Image Galley</u> </span></h2>
			<p>&nbsp;</p>
	   
			
		
		
       <p class="accom_heading"><br /></p>
		</div>	
			
	  <?php include_once('includes/right_nav.php');?>

<!-- footer starts here -->	
<?php include_once('includes/footer.php')?>

</div>

</body>
</html>
