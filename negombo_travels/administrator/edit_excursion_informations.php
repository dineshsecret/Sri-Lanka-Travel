<?php
session_start();
include '../db/db_transaction.php';


$execursion_id 	= $_GET['execursion_id'];
$city_id		= $_GET['city_id']; 
$destination_id	= $_GET['destination_id'];

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
<?php include('includes/header.php'); ?>

            </div>

            <!-- content-wrap starts here -->
            <div id="content-wrap">
              <div id="sidebar" >
                
                
        </div>
                    <div id="main">


                        <a name="TemplateInfo"></a> <div id="side_bar_heading"><a href="excursion_dash.php?city_id=<?php echo $city_id;?>&destination_id=<?php echo $destination_id;?>">Excursions </a>   | Edit Excursion Information<br />
<?php if (isset($_SESSION['accom_success'])) {

    echo "<table width=100% border=0 align=center cellpadding=0 cellspacing=0 bgcolor=#FF0000> <tr><td height=25 colspan=3 align=center><span class=error_mark>$_SESSION[accom_success];</span></td>
</tr></table>";
    unset($_SESSION['accom_success']);
} ?>
                            <form id="form1" method="post" action="form_action.php"  enctype="multipart/form-data">

                                <?php
                                $accomodation = new db_transaction();
                                $accomodation_pane = $accomodation->Excursion_Editab($execursion_id);
								?>
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <?php 
                                 while($each_recset_excursion = mysql_fetch_assoc($accomodation_pane)){
									
									?>
                                 
                                  <tr>
                                    <td height="25"> Excursion Name </td>
                                    <td height="25">:
                                      <input name="ex_name" type="text" id="ex_name" size="50" value="<?php echo($each_recset_excursion['excursion_name']); ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="25">Excursion is at </td>
                                    <td height="25">:
                                      <input name="ex_add" type="text" id="ex_add" size="50"  value="<?php echo($each_recset_excursion['excursion_address']); ?>"  /></td>
                                  </tr>
                                  <tr>
                                    <td height="25"> Phone </td>
                                    <td height="25">:
                                      <input name="ex_phon" type="text" id="ex_phon" size="50"  value="<?php echo($each_recset_excursion['excursion_phone']); ?>"  /></td>
                                  </tr>
                                  <tr>
                                    <td height="25">Fax </td>
                                    <td height="25">:
                                      <input name="ex_fax" type="text" id="ex_fax" size="50"  value="<?php echo($each_recset_excursion['excursion_fax']); ?>"  /></td>
                                  </tr>
                                  <tr>
                                    <td height="25">Email</td>
                                    <td height="25">:
                                      <input name="ex_email" type="text" id="ex_email" size="50"  value="<?php echo($each_recset_excursion['excursion_email']); ?>"  /></td>
                                  </tr>
                                  <tr>
                                    <td height="25">Web Site URL </td>
                                    <td height="25">:
                                      <input name="ex_url" type="text" id="ex_url" size="50"  value="<?php echo($each_recset_excursion['excursion_url']); ?>"  /></td>
                                  </tr>
                                  <tr>
                                    <td height="25">Rating </td>
                                    <td height="25">:
                                      <input name="ex_rating" type="text" id="ex_rating" size="3"  value="<?php echo($each_recset_excursion['rating']); ?>"  /></td>
                                  </tr>
                                  <tr>
                                    <td height="25">Facilities</td>
                                    <td height="25"><textarea id="textarea2" name="ex_faci" style="width:500;height:150px;"> <?php echo($each_recset_excursion['excursion_facility']); ?> </textarea></td>
                                  </tr>
                                  <tr>
                                    <td height="25">Leisure &amp; Excursion</td>
                                    <td height="25"><textarea id="textarea3" name="ex_excurion" style="width:500;height:150px;"> <?php echo($each_recset_excursion['excursion_leisure']); ?> </textarea></td>
                                  </tr>
                                  <tr>
                                    <td height="25">Header Image Uploads </td>
                                    <td height="25"><input name="d_imgfile" type="file" class="tiny_text" id="accom_images" value="<?php echo($each_recset_excursion['image_name']); ?>" /></td>
                                  </tr>
                                  <?php } ?>
                                  <tr>
                                    <td height="25"><input type="hidden" name="page_name" value="destination"  />
                                      <input type="hidden" name="mod" value="edit_excursion_info" />
                                      <input type="hidden" name="city_id" value="<?php echo $city_id;?>" />
                                      <input type="hidden" name="destination_id" value="<?php echo $destination_id;?>" /> 
                                      <input type="hidden" name="excurion_id" value="<?php echo $execursion_id;?>" />
                                      <br />
                                      <br /></td>
                                    <td height="25"><input type="submit" name="Submit" value="Submit" />
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
                    <p class="align-left"><br />
                  </p>
                </div>
                <div class="footer-left">
                    <p class="align-left"><br />
                  </p>
                </div>
                <div class="footer-left">
                    <p class="align-left"><br />
                  </p>
                </div>


              <div class="footer-right">
                <p class="align-right">&nbsp;</p>
                </div>

            </div>

        </div>

    </body>
</html>
