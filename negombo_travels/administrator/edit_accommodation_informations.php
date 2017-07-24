<?php
session_start();
include '../db/db_transaction.php';


$a_id = $_GET['a_id'];

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
				WYSIWYG.attach('textarea1', full); // full featured setup
                WYSIWYG.attach('textarea2', full); // full featured setup
                WYSIWYG.attach('textarea3', full); // full featured setup
				WYSIWYG.attach('textarea4', full); // full featured setup
				

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


                        <a name="TemplateInfo"></a> <div id="side_bar_heading"><a href="accommodation.php">Add New Accommodation</a>   | View Accommodation Panel <br />
<?php if (isset($_SESSION['accom_success'])) {

    echo "<table width=100% border=0 align=center cellpadding=0 cellspacing=0 bgcolor=#FF0000> <tr><td height=25 colspan=3 align=center><span class=error_mark>$_SESSION[accom_success];</span></td>
</tr></table>";
    unset($_SESSION['accom_success']);
} ?>
                            <form id="form1" method="post" action="form_action.php"  enctype="multipart/form-data">

                                <?php
                                $accomodation = new db_transaction();
                                $accomodation_pane = $accomodation->Accommodation_Panel_Edit($a_id);
                                ?>
                                <table width="100%" border="0" cellpadding="0" cellspacing="0">

                                    <?php while($my_accommodation_info = mysql_fetch_assoc($accomodation_pane)){ ?>
                                    <tr>
                                        <td width="25%" height="25"> Accommodation Name </td>
                                        <td height="25">:
                                            <input name="accom_name" type="text" id="accom_name" size="50" value="<?php echo $my_accommodation_info['a_name'];?>" /></td>
                                    </tr>
                                    <tr>
                                        <td height="12">Select Accommodation type   </td>
                                        <td height="12">:
                                            <select name="accom_type" class="tiny_text" id="accom_type" >
											
                                               <option selected="selected">--Select-- </option> 
                                                <?php
												
												$accomodation_type_id	= $my_accommodation_info['a_type_id'];
                                                
												$accomodation 		= new db_transaction();
                                                $accomodation_rec = $accomodation->Accommodation_Catogory();

                                                while ($my_each_accommodation = mysql_fetch_assoc($accomodation_rec)) {
												
													//echo "<option>-- Accommodation Catogry --</option>";
                                                    //echo " <option value=$accomodation_type_id selected=selected";
													echo " <option value=$accomodation_type_id";
                                                    echo ">", $my_each_accommodation['accomm_name'], 
													"</option>\n";
                                                }
                                                ?>
                                            </select><?php //echo $accomodation_type_id;?></td>
                                    </tr>
                                    <tr>
                                      <td height="13">Accommodation Introduction </td>
                                      <td height="13">: 
                                        <textarea id="textarea1" name="accom_into" style="width:500;height:150px;" class="tiny_text">
                                        <?php echo $my_accommodation_info['a_introduction'];?>
                                        </textarea></td>
                                    </tr>
                                    <tr>
                                        <td height="25">Accommodation Address </td>
                                        <td height="25">:
                                            <input name="accom_add" type="text" id="accom_add" size="50" value="<?php echo $my_accommodation_info['a_address'];?>"  /></td>
                                    </tr>
                                    <tr>
                                        <td height="25">Accommodation City </td>
                                        <td height="25">:
                                            <select name="accom_city" class="tiny_text" id="accom_city" >
                                                <option>-- Select the City--</option>
<?php
                                                $city = new db_transaction();
                                                $city_rec = $city->Select_City();

                                                while ($my_city_rec = mysql_fetch_assoc($city_rec)) {

                                                    echo " <option value=$my_city_rec[c_id]";
                                                    echo ">", $my_city_rec['c_name'], "</option>\n";
                                                }
?>
                                            </select></td>
                                    </tr>

                                    <tr>
                                        <td height="25"> Phone </td>
                                        <td height="25">:
                                            <input name="accom_phon" type="text" id="accom_phon" size="50" value="<?php echo $my_accommodation_info['a_phone'];?>"  /></td>
                                    </tr>
                                    <tr>
                                        <td height="25">Fax </td>
                                        <td height="25">:
                                            <input name="accom_fax" type="text" id="accom_fax" size="50" value="<?php echo $my_accommodation_info['a_fax'];?>" /></td>
                                    </tr>
                                    <tr>
                                        <td height="25">Email</td>
                                        <td height="25">:
                                            <input name="accom_email" type="text" id="accom_email" size="50" value="<?php echo $my_accommodation_info['a_email'];?>" /> </td>
                                    </tr>
                                    <tr>
                                        <td height="25">Web Site URL </td>
                                        <td height="25">:
                                            <input name="accom_url" type="text" id="accom_url" size="50" value="<?php echo $my_accommodation_info['a_url'];?>" /> </td>
                                    </tr>

                                    <tr>
                                        <td height="25">Rooms </td>
                                      <td height="25">:
                                            <input name="accom_rooms" type="text" id="accom_rooms" size="3" value="<?php echo $my_accommodation_info['a_rooms'];?>" /></td>
                                    </tr>
                                    <tr>
                                        <td height="25">Rating </td>
                                      <td height="25">:
                                            <input name="accom_rating" type="text" id="accom_rating" size="3" value="<?php echo $my_accommodation_info['a_rating'];?>" /></td>
                                    </tr>

                                    <tr>
                                        <td height="12" valign="top"><br />
Accommodation Description </td>
                                        <td height="12">
                                            <textarea id="textarea2" name="accom_desc" style="width:500;height:150px;"> <?php echo $my_accommodation_info['a_accommodation'];?></textarea></td>
                                    </tr>
                                    <tr>
                                      <td height="3" valign="top">Facilities </td>
                                      <td height="3"><textarea id="textarea4" name="accom_faci" style="width:500;height:100px;">
                                      <?php echo $my_accommodation_info['facilities'];?>
                                      </textarea></td>
                                    </tr>
                                    <tr>
                                      <td height="3">&nbsp;</td>
                                      <td height="3">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td height="7" valign="top">Other Facilites </td>
                                      <td height="7"><table width="500" border="0" cellpadding="0" cellspacing="1" class="tiny_text" bgcolor="#CCCCCC">
                                        <tr>
                                          <td width="207" bgcolor="#FFFFFF">Swimming pool</td>
                                          <td width="20" bgcolor="#FFFFFF"><input name="fetures[]" type="checkbox" id="fetures" value="pool" /></td>
                                          <td width="248" bgcolor="#FFFFFF">Restaurant</td>
                                          <td width="20" bgcolor="#FFFFFF"><input name="fetures[]" type="checkbox" id="fetures" value="rest" /></td>
                                        </tr>
                                        <tr>
                                          <td bgcolor="#FFFFFF">Bicle Hire</td>
                                          <td bgcolor="#FFFFFF"><input name="fetures[]" type="checkbox" id="fetures" value="bicycle" /></td>
                                          <td bgcolor="#FFFFFF">Licence Bar</td>
                                          <td bgcolor="#FFFFFF"><input name="fetures[]" type="checkbox" id="fetures" value="lic_bar" /></td>
                                        </tr>
                                        <tr>
                                          <td bgcolor="#FFFFFF">Cable TV</td>
                                          <td bgcolor="#FFFFFF"><input name="fetures[]" type="checkbox" id="fetures" value="cb_tv" /></td>
                                          <td bgcolor="#FFFFFF">Business Centre</td>
                                          <td bgcolor="#FFFFFF"><input name="fetures[]" type="checkbox" id="fetures" value="bus_cen" /></td>
                                        </tr>
                                        <tr>
                                          <td bgcolor="#FFFFFF">GYM</td>
                                          <td bgcolor="#FFFFFF"><input name="fetures[]" type="checkbox" id="fetures" value="gym" /></td>
                                          <td bgcolor="#FFFFFF">Confernce Room</td>
                                          <td bgcolor="#FFFFFF"><input name="fetures[]" type="checkbox" id="fetures" value="conf_rom" /></td>
                                        </tr>
                                        <tr>
                                          <td bgcolor="#FFFFFF">Ayurveda</td>
                                          <td bgcolor="#FFFFFF"><input name="fetures[]" type="checkbox" id="fetures" value="spa" /></td>
                                          <td bgcolor="#FFFFFF">Room Service</td>
                                          <td bgcolor="#FFFFFF"><input name="fetures[]" type="checkbox" id="fetures" value="room_service" /></td>
                                        </tr>
                                        <tr>
                                          <td bgcolor="#FFFFFF">Child Frindly</td>
                                          <td bgcolor="#FFFFFF"><input name="fetures[]" type="checkbox" id="fetures" value="chil_fri" /></td>
                                          <td bgcolor="#FFFFFF">Tennis Court</td>
                                          <td bgcolor="#FFFFFF"><input name="fetures[]" type="checkbox" id="fetures" value="tenis_cour" /></td>
                                        </tr>
                                        <tr>
                                          <td bgcolor="#FFFFFF">DVD Library</td>
                                          <td bgcolor="#FFFFFF"><input name="fetures[]" type="checkbox" id="fetures" value="dvd_lib" /></td>
                                          <td bgcolor="#FFFFFF">Internet</td>
                                          <td bgcolor="#FFFFFF"><input name="fetures[]" type="checkbox" id="fetures" value="wi_fi" /></td>
                                        </tr>
                                        <tr>
                                          <td bgcolor="#FFFFFF">Laundry Service</td>
                                          <td bgcolor="#FFFFFF"><input name="fetures[]" type="checkbox" id="fetures" value="laundr" /></td>
                                          <td bgcolor="#FFFFFF">Beach Access </td>
                                          <td bgcolor="#FFFFFF"><input name="fetures[]" type="checkbox" id="fetures[]" value="beach_access" /></td>
                                        </tr>
                                        <tr>
                                          <td bgcolor="#FFFFFF">WI- FI </td>
                                          <td bgcolor="#FFFFFF"><input name="fetures[]" type="checkbox" id="fetures[]" value="wi_fi" /></td>
                                          <td bgcolor="#FFFFFF">Wheel Chair </td>
                                          <td bgcolor="#FFFFFF"><input name="fetures[]" type="checkbox" id="fetures[]" value="wheel_chair" /></td>
                                        </tr>
                                        <tr>
                                          <td bgcolor="#FFFFFF">Auyrveda </td>
                                          <td bgcolor="#FFFFFF"><input name="fetures[]" type="checkbox" id="fetures[]" value="ayurveda" /></td>
                                          <td bgcolor="#FFFFFF">Echo Friendly </td>
                                          <td bgcolor="#FFFFFF"><input name="fetures[]" type="checkbox" id="fetures[]" value="ech_friendly" /></td>
                                        </tr>
                                      </table>
                                      <br /></td>
                                    </tr>
                                    <tr>
                                        <td height="25" valign="top">Leisure &amp; Excursion</td>
                                        <td height="25"><textarea id="textarea3" name="accom_excurion" style="width:500;height:150px;"><?php echo $my_accommodation_info['leisure_excursion'];?></textarea>		</td>
                                    </tr>
                                    <tr>
                                        <td height="25">Header Image Uploads </td>
                                        <td height="25"><p>
                                          <input name="d_imgfile" type=file class="tiny_text" id="accom_images">
                                        </p>
                                          <p><a href="upload_image_gallery.php?last_insert_accom_id=<?php echo $a_id;?>">upload images  </a></p></td>
                                    </tr>
<?php } ?>
                                    <tr>
                                        <td height="25">
                                            <input type="hidden" name="page_name" value="accommodation"  />
                                            <input type="hidden" name="mod" value="edit_accom_desc" />
											 <input type="hidden" name="edit_accom_id" value="<?php print $a_id;?>" />
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
