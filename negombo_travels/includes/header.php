<?php //$url_path="http://localhost/negombo_travels"; 
$url_path="../negombo_travels";
?>
<div id="wrap">
	
	<div id="header">
		<h1 id="logo"><img src="images/negombo_tours_logo.jpg" width="89" height="124" title="Negombo Tours Logo" /></h1>	
         <h2 id="slogan"><img src="images/negombo_premier.jpg" width="260" height="72"  /></h2> 
		
		<form method="post" class="searchform" action="#">
	
	      <p> <a href="http://facebook.com/Negombovisit/" target="_blank"><img src="<?php echo "$url_path/";?>images/social_media/facebook.png" title="Negombo Travel & Tours in Facebook"/></a> 
		  
		  <a href="https://plus.google.com/109772878999822580377/posts" target="_blank"><img src="<?php echo "$url_path/";?>images/social_media/googleplus.png" title="Negombo Travel & Tours in Google+"/></a>
		  
		   <a href="skype:gmi_rfernando?call" target="_blank"><img src="<?php echo "$url_path/";?>images/social_media/skype.png" title="Negombo Travel & Tours Skype"/></a> <a href="https://twitter.com/NegomoTours" target="_blank"><img src="<?php echo "$url_path/";?>images/social_media/twitter.png" title="Negombo Travel & Tours in Twitter"/></a> <a href="http://negombotourssrilanka.blogspot.com/" target="_blank"><img src="<?php echo "$url_path/";?>images/social_media/blogger.png" title="Negombo Travel & Tours in Bloger"/></a>  <a href="http://negombotravels.wordpress.com/" target="_blank"><img src="<?php echo "$url_path/";?>images/social_media/word_press.png" title="Negombo Travel Word press blog"/></a><h2><span class="green">Call Now : +94 777722904</span></h2>
		   </p>
		</form>
	  </form>




<ul id="sddm">
		<li><a href="index.php" onmouseover="mopen('m1')" onmouseout="mclosetime()">Home</a>
		</li>
	
	
	<li><a href="where_to_go/" onmouseover="mopen('m2')" onmouseout="mclosetime()">Where to Go</a>
		<div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<?php 
			$to_go_information			= new db_transaction;
			$to_go_information_recset 	= $to_go_information->Destination_types();
			
			while($to_go_information_recset_list = mysql_fetch_assoc($to_go_information_recset)){
			echo "<a href=$url_path/where_to_go/index.php?what_to_Do_Cat_id=$to_go_information_recset_list[dest_id]>$to_go_information_recset_list[dest_name]</a>"; }
		?>
		</div>
	</li>
	
	
	<li><a href="what_to_see/" onmouseover="mopen('m3')" onmouseout="mclosetime()">What To See</a>
		<div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<?php 
			$to_see_information			= new db_transaction;
			$to_see_information_recset 	= $to_see_information->What_To_See();
			
			while($to_see_information_recset_list = mysql_fetch_assoc($to_see_information_recset)){
			echo "<a href=$url_path/what_to_see/index.php?what_to_see=$to_see_information_recset_list[what_to_see_id]>$to_see_information_recset_list[what_to_see_name]</a>"; }
		?>
		</div>
	</li>
	
	
	<li><a href="what_to_do/" onmouseover="mopen('m4')" onmouseout="mclosetime()">What To Do</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<?php 
			$to_do_information			= new db_transaction;
			$to_do_information_recset 	= $to_do_information->To_Do_Description();
			
			while($to_do_information_recset_list = mysql_fetch_assoc($to_do_information_recset)){
			echo "<a href=$url_path/what_to_do/index.php?what_to_do_id=$to_do_information_recset_list[what_to_do_id]>$to_do_information_recset_list[what_to_do]</a>"; }
		?>
		</div>
	</li>
	
	
	
	
	
	<li><a href="itenary/" onmouseover="mopen('m5')" onmouseout="mclosetime()">Tour Packages </a>
		<div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		
		<?php 
			$itenery_information		= new db_transaction;
			$itenery_information_recset = $itenery_information->Itenaray_Drop_Down();
			
			while($itenery_detail_list = mysql_fetch_assoc($itenery_information_recset)){
			echo "<a href=$url_path/itenary/index.php?itenery_id=$itenery_detail_list[itenary_id]>$itenery_detail_list[itenary_name]</a>"; }?>
		      
		</div>
	</li>
	
	
	<li><a href="#" onmouseover="mopen('m6')" onmouseout="mclosetime()">About Sri Lanka </a>
		<div id="m6" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="<?php echo "$url_path/";?>image_gallery.php">Image Gallery</a>
        <a href="<?php echo "$url_path/";?>travel_tips.php">Travel Tips</a>
        <a href="<?php echo "$url_path/";?>faq_sri_lanka.php">FAQs</a>
		<a href="<?php echo "$url_path/";?>sri_lanka_visa.php">Sri Lanka VISA</a>
		
		</div>
	</li>
	
	
	
	<li><a href="#" onmouseover="mopen('m7')" onmouseout="mclosetime()">Attractions</a>
		<div id="m7" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<?php 
			$exper_information			= new db_transaction;
			$exper_information_recset = $exper_information->Experiance_List();
			while($exper_information_recset_list = mysql_fetch_assoc($exper_information_recset)){
			echo "<a href=$url_path/experiance.php?exp_id=$exper_information_recset_list[experiance_id]>$exper_information_recset_list[experiance_name]</a>"; }?>		
		</div>
	</li>
		<li><a href="#" onmouseover="mopen('m8')" onmouseout="mclosetime()">NegomboTravels</a>
		<div id="m8" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="about_us.php">About Us</a>
		<a href="services.php">Services</a>
		<a href="contact_us.php">Contact Us</a>
		<a href="guest_comments.php">Guest comments</a>
		</div>
	</li>

</ul>
</ul>
</div>	
