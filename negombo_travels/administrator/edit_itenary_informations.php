<?php
session_start();
include '../db/db_transaction.php';

$itenery_id			= $_GET['itenery_id'];
$city_id			= $_GET['city_id'];
$iten_type_id		= $_GET['iten_type_id']; 


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


                        <a name="TemplateInfo"></a> <div id="side_bar_heading"><a href="itenary_dash.php?city_id=<?php echo $city_id; ?>&iten_type_id=<?php echo $iten_type_id;?>">Itenery Panel</a>   | Edit Itenery Information <br />
<?php if (isset($_SESSION['accom_success'])) {

    echo "<table width=100% border=0 align=center cellpadding=0 cellspacing=0 bgcolor=#FF0000> <tr><td height=25 colspan=3 align=center><span class=error_mark>$_SESSION[accom_success];</span></td>
</tr></table>";
    unset($_SESSION['accom_success']);
} ?>
                            <form id="form1" method="post" action="form_action.php"  enctype="multipart/form-data">

                                <?php
                                $attraction = new db_transaction();
                                $attraction_pane = $attraction->Itenery_Editable_Region($itenery_id);
								?>
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <?php 
                                 while($each_recset_excursion = mysql_fetch_assoc($attraction_pane)){
									
									?>
                                 
                                  <tr>
                                    <td height="25"> Itenery Name </td>
                                    <td height="25">:
                                      <input name="ex_name" type="text" id="ex_name" size="50" value="<?php echo($each_recset_excursion['itenery_name']); ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td height="25" valign="top">Facilities</td>
                                    <td height="25"><textarea id="textarea2" name="ex_faci" style="width:500;height:150px;"> <?php echo($each_recset_excursion['itenery_intro']); ?> </textarea></td>
                                  </tr>
                                  <tr>
                                    <td height="25" valign="top">Leisure &amp; Excursion</td>
                                    <td height="25"><textarea id="textarea3" name="ex_excurion" style="width:500;height:350px;"> <?php echo($each_recset_excursion['itenery_program']); ?> </textarea></td>
                                  </tr>
                                  <tr>
                                    <td height="25">Tour Package Type </td>
                                    <td height="25"> : 
                                      <select name="type_of_tour" id="type_of_tour">
                                        <option>-- Budgeted Tour--</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">no</option>
                                      </select> <?php echo($each_recset_excursion['buget']); ?></td>
                                  </tr>
                                  <tr>
                                    <td height="25">Price of the Tour </td>
                                    <td height="25">: 
                                    <input name="price" type="text" id="price" size="6" maxlength="4" value="<?php echo($each_recset_excursion['price']); ?>"  /></td>
                                  </tr>
                                  <tr>
                                    <td height="25">Header Image Uploads </td>
                                    <td height="25"><input name="d_imgfile" type="file" class="tiny_text" id="accom_images" value="<?php echo($each_recset_excursion['image']); ?>" /></td>
                                  </tr>
                                  
                                  <?php } ?>
                                  <tr>
                                    <td height="35"><input type="hidden" name="page_name" value="what_to_see"  />
                                      <input type="hidden" name="mod" value="edit_attraction_info" />
                                      <input type="hidden" name="city_id" value="<?php echo $city_id;?>" />
                                      <input type="hidden" name="attraction_id" value="<?php echo $itenery_id;?>" /> 
                                      <input type="hidden" name="what_to_see_cat_id" value="<?php echo $what_to_see_cat_id;?>" />
                                      <br />
                                      <br /></td>
                                    <td height="35"><input type="submit" name="Submit" value="Submit" />
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
