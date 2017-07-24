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
<script language="javascript" src="js/cal2.js"></script>
<script language="javascript" src="js/cal_conf2.js"></script>


<title>colombo airport taxi transfer</title>

<!------------------------ FORM VALIDATION ------------------------------------------------------------>
<script src="js/lib/jQuery_1_4_2_min.js" type="text/javascript"></script>
<script src="js/lib/plugins/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
            //$.validator.setDefaults({
            //	errorClass: "error"
            //});

            $().ready(function() {

                // validate sigin in form
                $("#user_details").validate({
                    groups: {
                        dob: "txt_dob_day txt_dob_mnth txt_dob_year"
                    },
                    rules: {
                        userType: {
                            required: true
                        },
                        txt_fname: {
                            required: true,
                            minlength:5
                        },
                        lastname: {
                            required: true,
                            minlength:5
                        },
                        compname: {
                            required: true,
                            minlength:8
                        },
                        txt_dob_mnth: {
                            required: true,
                            maxlength:2,
                            minlength:1,
                            min:1,
                            max:12,
                            number:true
                        },
                        idType: {
                            required: true
                        }
                        ,txt_flnum: {
                            required: true,
                            minlength : 4
                        }
                        ,compname: {
                            required: true,
                            minlength : 5
                        }
                        ,txt_city: {
                            required: true,
                            minlength : 5
                        }                        
                        
                        ,txt_tel: {
                            required: true,
                            minlength : 5
                        }
                        ,txt_email: {
                            required: true,
                            email: true
                        }


                    },
                    messages: {
                        userType: {
                            required: "&nbsp;&nbspPlease select the user type."
                        },
                        firstname: {
                            required: "&nbsp;&nbspPlease insert the first name."
                        },
                        lastname: {
                            required: "&nbsp;&nbspPlease insert the last name."
                        },
                        compname: {
                            required: "Company Name..."
                        }
                        ,txt_city: {
                            required: "&nbsp;&nbspPlease insert the city."
                        }
                        
                        ,txt_country: {
                            required: "&nbsp;&nbspPlease insert the Country."
                        }
                        ,txt_tel: {
                            required: "&nbsp;&nbspPlease insert your contact number."
                        }
                        ,txt_email: {
                            required: "&nbsp;&nbsp;Please insert a correct email address."

                        }
                    },
                    errorLabelContainer: "#err_user",
                    
                    
                });


            });

        </script>
		
	
<!----------------------- END ------------------------------------------>
</head>
<body>
<!-- wrap starts here -->


			
		<!-- Menu Tabs -->
		<?php include('includes/header.php');?>

				
	<!-- content-wrap starts here -->
	<div id="content-wrap">		
											
	<img src="images/air_port_pick.jpg" name="slide" width=970 height=236>
	
<!-- LEFT NAVIGATION HERE -->	
 <?php include_once('includes/left_nav.php');?>



	  <div id="main">	
	  
			
			<a name="TemplateInfo"></a>
		<h2><span class="green">colombo airport transfer</span></h2><span class="green"><?php if(isset($_SESSION['success'])){
		echo $_SESSION['success'];
		unset($_SESSION['success']);
		
		}?></span>
		<form name="user_details" id="user_details" action="form_actions.php" method="POST">
		  <table width="500" border="0" cellspacing="0" cellpadding="0">
    
    <tr>
      <td height="27" colspan="2"><strong class="red_font"><u>Personal Details</u></strong>        <label></label></td>
      </tr>
    <tr>
      <td width="225" height="27">Full Name<span class="green"> *</span> : </td>
      <td width="325" height="27"><span class="green"><input name="txt_fname" type="text" id="txt_fname" style="width:100%;"/></span></td>
    </tr>
    <tr>
      <td height="27">Departure Country  :</td>
      <td height="27"><select name="select3" class="Text_normal85" id="select">
        <option selected="selected">-Select your country-</option>
        <option value="Albania">Albania</option>
        <option value="Afghanistan">Afghanistan</option>
        <option value="Algeria">Algeria</option>
        <option value="American Samoa">American Samoa</option>
        <option value="Andorra">Andorra</option>
        <option value="Angola">Angola</option>
        <option value="Anguilla">Anguilla</option>
        <option value="Antarctica">Antarctica</option>
        <option value="Antigua And Barbuda">Antigua And Barbuda</option>
        <option value="Argentina">Argentina</option>
        <option value="Armenia">Armenia</option>
        <option value="Aruba">Aruba</option>
        <option value="Australia">Australia</option>
        <option value="Austria">Austria</option>
        <option value="Azerbaijan">Azerbaijan</option>
        <option value="Bahamas,">Bahamas</option>
        <option value="Bahrain">Bahrain</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="Barbados">Barbados</option>
        <option value="Belarus">Belarus</option>
        <option value="Belgium">Belgium</option>
        <option value="Belize">Belize</option>
        <option value="Benin">Benin</option>
        <option value="Bermuda">Bermuda</option>
        <option value="Bhutan">Bhutan</option>
        <option value="Bolivia">Bolivia</option>
        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
        <option value="Botswana">Botswana</option>
        <option value="Bouvet Island">Bouvet Island</option>
        <option value="Brazil">Brazil</option>
        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
        <option value="Brunei">Brunei</option>
        <option value="Bulgaria">Bulgaria</option>
        <option value="Burkina Faso">Burkina Faso</option>
        <option value="Burundi">Burundi</option>
        <option value="Cambodia">Cambodia</option>
        <option value="Cameroon">Cameroon</option>
        <option value="Canada">Canada</option>
        <option value="Cape Verde">Cape Verde</option>
        <option value="Cayman Islands">Cayman Islands</option>
        <option value="Central African Republic">Central African Republic</option>
        <option value="Chad">Chad</option>
        <option value="Chile">Chile</option>
        <option value="China">China</option>
        <option value="Christmas Island">Christmas Island</option>
        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
        <option value="Colombia">Colombia</option>
        <option value="Comoros">Comoros</option>
        <option value="Congo">Congo</option>
        <option value="Congo, Democractic Republic of the">Congo, Democractic Republic of the</option>
        <option value="Cook Islands">Cook Islands</option>
        <option value="Costa Rica">Costa Rica</option>
        <option value="Ivory Coast">Cote D'Ivoire (Ivory Coast)</option>
        <option value="Croatia ">Croatia (Hrvatska)</option>
        <option value="Cuba">Cuba</option>
        <option value="Cyprus">Cyprus</option>
        <option value="Czech Republic">Czech Republic</option>
        <option value="Denmark">Denmark</option>
        <option value="Djibouti">Djibouti</option>
        <option value="Dominica">Dominica</option>
        <option value="Dominican Republic">Dominican Republic</option>
        <option value="East Timor">East Timor</option>
        <option value="Ecuador">Ecuador</option>
        <option value="Egypt">Egypt</option>
        <option value="El Salvador">El Salvador</option>
        <option value="Equatorial Guinea">Equatorial Guinea</option>
        <option value="Eritrea">Eritrea</option>
        <option value="Estonia">Estonia</option>
        <option value="Ethiopia">Ethiopia</option>
        <option value="Falkland Islands ">Falkland Islands (Islas Malvinas)</option>
        <option value="Faroe Islands">Faroe Islands</option>
        <option value="Fiji Islands">Fiji Islands</option>
        <option value="Finland">Finland</option>
        <option value="France">France</option>
        <option value="French Guiana">French Guiana</option>
        <option value="French Polynesia">French Polynesia</option>
        <option value="French Southern Territories">French Southern Territories</option>
        <option value="Gabon">Gabon</option>
        <option value="Gambia">Gambia, The</option>
        <option value="Georgia">Georgia</option>
        <option value="Germany">Germany</option>
        <option value="Ghana">Ghana</option>
        <option value="Gibraltar">Gibraltar</option>
        <option value="Greece">Greece</option>
        <option value="Greenland">Greenland</option>
        <option value="Grenada">Grenada</option>
        <option value="Guadeloupe">Guadeloupe</option>
        <option value="Guam">Guam</option>
        <option value="Guatemala">Guatemala</option>
        <option value="Guinea">Guinea</option>
        <option value="Guinea-Bissau">Guinea-Bissau</option>
        <option value="Guyana">Guyana</option>
        <option value="Haiti">Haiti</option>
        <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
        <option value="Honduras">Honduras</option>
        <option value="Hong Kong ">Hong Kong S.A.R.</option>
        <option value="Hungary">Hungary</option>
        <option value="Iceland">Iceland</option>
        <option value="India">India</option>
        <option value="Indonesia">Indonesia</option>
        <option value="Iran">Iran</option>
        <option value="Iraq">Iraq</option>
        <option value="Ireland">Ireland</option>
        <option value="Israel">Israel</option>
        <option value="Italy">Italy</option>
        <option value="Jamaica">Jamaica</option>
        <option value="Japan">Japan</option>
        <option value="Jordan">Jordan</option>
        <option value="Kazakhstan">Kazakhstan</option>
        <option value="Kenya">Kenya</option>
        <option value="Kiribati">Kiribati</option>
        <option value="Korea">Korea</option>
        <option value="Korea North">Korea, North</option>
        <option value="Kuwait">Kuwait</option>
        <option value="Kyrgyzstan">Kyrgyzstan</option>
        <option value="Laos">Laos</option>
        <option value="Latvia">Latvia</option>
        <option value="Lebanon">Lebanon</option>
        <option value="Lesotho">Lesotho</option>
        <option value="Liberia">Liberia</option>
        <option value="Libya">Libya</option>
        <option value="Liechtenstein">Liechtenstein</option>
        <option value="Lithuania">Lithuania</option>
        <option value="Luxembourg">Luxembourg</option>
        <option value="Macau ">Macau S.A.R.</option>
        <option value="Macedonia,">Macedonia, Former Yugoslav Republic of</option>
        <option value="Madagascar">Madagascar</option>
        <option value="Malawi">Malawi</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Maldives">Maldives</option>
        <option value="Mali">Mali</option>
        <option value="Malta">Malta</option>
        <option value="Marshall Islands">Marshall Islands</option>
        <option value="Martinique">Martinique</option>
        <option value="Mauritania">Mauritania</option>
        <option value="Mauritius">Mauritius</option>
        <option value="Mayotte">Mayotte</option>
        <option value="Mexico">Mexico</option>
        <option value="Micronesia">Micronesia</option>
        <option value="Moldova">Moldova</option>
        <option value="Monaco">Monaco</option>
        <option value="Mongolia">Mongolia</option>
        <option value="Montserrat">Montserrat</option>
        <option value="Morocco">Morocco</option>
        <option value="Mozambique">Mozambique</option>
        <option value="Myanmar">Myanmar</option>
        <option value="Namibia">Namibia</option>
        <option value="Nauru">Nauru</option>
        <option value="Nepal">Nepal</option>
        <option value="Netherlands Antilles">Netherlands Antilles</option>
        <option value="Netherlands">Netherlands, The</option>
        <option value="New Caledonia">New Caledonia</option>
        <option value="New Zealand">New Zealand</option>
        <option value="Nicaragua">Nicaragua</option>
        <option value="Niger">Niger</option>
        <option value="Nigeria">Nigeria</option>
        <option value="Niue">Niue</option>
        <option value="Norfolk Island">Norfolk Island</option>
        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
        <option value="Norway">Norway</option>
        <option value="Oman">Oman</option>
        <option value="Pakistan">Pakistan</option>
        <option value="Palau">Palau</option>
        <option value="Panama">Panama</option>
        <option value="Papua new Guinea">Papua new Guinea</option>
        <option value="Paraguay">Paraguay</option>
        <option value="Peru">Peru</option>
        <option value="Philippines">Philippines</option>
        <option value="Pitcairn Island">Pitcairn Island</option>
        <option value="Poland">Poland</option>
        <option value="Portugal">Portugal</option>
        <option value="Puerto Rico">Puerto Rico</option>
        <option value="Qatar">Qatar</option>
        <option value="Reunion">Reunion</option>
        <option value="Romania">Romania</option>
        <option value="Russia">Russia</option>
        <option value="Rwanda">Rwanda</option>
        <option value="Saint Helena">Saint Helena</option>
        <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
        <option value="Saint Lucia">Saint Lucia</option>
        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
        <option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines</option>
        <option value="Samoa">Samoa</option>
        <option value="San Marino">San Marino</option>
        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
        <option value="Saudi Arabia">Saudi Arabia</option>
        <option value="Senegal">Senegal</option>
        <option value="Seychelles">Seychelles</option>
        <option value="Sierra Leone">Sierra Leone</option>
        <option value="Singapore">Singapore</option>
        <option value="Slovakia">Slovakia</option>
        <option value="Slovenia">Slovenia</option>
        <option value="Solomon Islands">Solomon Islands</option>
        <option value="Somalia">Somalia</option>
        <option value="South Africa">South Africa</option>
        <option value="South Georgia And The South Sandwich Islands">South Georgia And The South Sandwich Islands</option>
        <option value="Spain">Spain</option>
        <option value="Sri Lanka">Sri Lanka</option>
        <option value="Sudan">Sudan</option>
        <option value="Suriname">Suriname</option>
        <option value="Svalbard And Jan Mayen Islands">Svalbard And Jan Mayen Islands</option>
        <option value="Swaziland">Swaziland</option>
        <option value="Sweden">Sweden</option>
        <option value="Switzerland">Switzerland</option>
        <option value="Syria">Syria</option>
        <option value="Taiwan">Taiwan</option>
        <option value="Tajikistan">Tajikistan</option>
        <option value="Tanzania">Tanzania</option>
        <option value="Thailand">Thailand</option>
        <option value="Togo">Togo</option>
        <option value="Tokelau">Tokelau</option>
        <option value="Tonga">Tonga</option>
        <option value="Trinidad And Tobago">Trinidad And Tobago</option>
        <option value="Tunisia">Tunisia</option>
        <option value="Turkey">Turkey</option>
        <option value="Turkmenistan">Turkmenistan</option>
        <option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
        <option value="Tuvalu">Tuvalu</option>
        <option value="Uganda">Uganda</option>
        <option value="Ukraine">Ukraine</option>
        <option value="United Arab Emirates">United Arab Emirates</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="United States">United States</option>
        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
        <option value="Uruguay">Uruguay</option>
        <option value="Uzbekistan">Uzbekistan</option>
        <option value="Vanuatu">Vanuatu</option>
        <option value="Vatican City State ">Vatican City State (Holy See)</option>
        <option value="Venezuela">Venezuela</option>
        <option value="Vietnam">Vietnam</option>
        <option value="Virgin Islands ">Virgin Islands (British)</option>
        <option value="Virgin Islands">Virgin Islands (US)</option>
        <option value="Wallis And Futuna Islands">Wallis And Futuna Islands</option>
        <option value="Yemen">Yemen</option>
        <option value="Yugoslavia">Yugoslavia</option>
        <option value="Zambia">Zambia</option>
        <option value="Zimbabwe">Zimbabwe</option>
      </select></td>
    </tr>
    <tr>
      <td height="27" colspan="2">&nbsp;</td>
      </tr>
    
      
    
      
       
  
   
    
    <tr>
      <td height="27" colspan="2"><strong class="red_font"><u>Contact Details</u></strong></td>
      </tr>
    <tr>
      <td height="20">Arrival Date <span class="green">*</span> :</td>
      <td height="20"><input name="txt_arr_dat" type="text" id="txt_arr_dat" style="width:180px;" size="12" maxlength="12" />
        <input type="button" class="tiny_text" onclick="javascript:showCal('Calendar1')" value="Date"></td>
    </tr>
    
    
    <tr>
      <td height="20">Flight Number <span class="green"> *</span> :</td>
      <td height="20"><span class="green"><input name="txt_flnum" type="text" id="txt_flnum" style="width:180px;" size="12" /></span></td>
    </tr>
    <tr>
      <td height="20">Passengers : </td>
      <td height="20"><select name="pasengers" id="pasengers">
        <option>-num-</option>
        <option value="1">01</option>
        <option value="2">02</option>
        <option value="3">03</option>
        <option value="4">04</option>
        <option value="5">05</option>
        <option value="6">06</option>
        <option value="7">07</option>
        <option value="8">08</option>
        <option value="9">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="11">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
      </select>      </td>
    </tr>
    <tr>
      <td height="20">Mobile :</td>
      <td height="20"><input name="txt_mob" type="text" id="txt_mob" style="width:180px;" size="14" /></td>
    </tr>
    <tr>
      <td height="20">E-mail<span class="green"> *</span> :</td>
      <td height="20"><span class="green"><input type="text" name="txt_email" id="txt_email" style="width:180px;" /></span></td>
    </tr>
    <tr>
      <td height="20">Paging : </td>
      <td height="20"><input name="radiobutton" type="radio" value="yes" /> 
        Required 
          <input name="radiobutton" type="radio" value="no" checked="checked" /> 
          Not Required </td>
    </tr>
    <tr>
      <td height="44">Inquiry </td>
      <td height="44"><textarea name="comments" cols="30" rows="6" id="comments"></textarea></td>
    </tr>
    
    <tr>
      <td height="27"><input name="mod" type="hidden" id="mod" value="airport_pick"></td>
      <td height="27"><label>
        <input type="submit" class="style2" value="Submit Form"/>
        <input name="Submit2" type="reset" class="style2" value="Reset" />
      </label></td>
    </tr>
  </table>
          <p>&nbsp;</p>
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="39%" valign="top"><strong><u>Negombo Travel </u></strong><br />
                No : 116 Convent Road,<br />
                Daluwakotuwa ,<br />
                Kotchchikade,<br />
                Negombo , Sri Lanka 
                <br /></td>
              <td width="61%" valign="top"><strong><u>Telephone numbers </u></strong><br />
                <strong>Mobile :</strong> +94 777722904 (Mr. Mangala)<br />
                <strong>Office :</strong> +94 312279519 <br />
                <strong>E-Mail :</strong> <a href="mailto:info(at)negombotravels.com">info(at)negombotravels.com</a></td>
            </tr>
          </table>
        </form>
		<p>&nbsp;</p>
</div>	
<!-- Right NAVIGATION -->	
	  <?php include_once('includes/right_nav.php');?>

<!-- footer starts here -->	
 <?php include_once('includes/footer.php');?>
</div>

</body>
</html>
