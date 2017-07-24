 <div id="rightbar">
 <div id="side_bar_heading">Language Translation<br /><br />
 <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 
 </div><br />
	     <div id="side_bar_heading"> Sri Lanka Events<br />
	      <img src="images/spac.gif" alt="" width="1" height="3" />
		  <?php 
		 		$event_list			= new db_transaction;
				$event_list_recset 	= $event_list->CallEventActiveList();
				while($event_list_recset_rec = mysql_fetch_assoc($event_list_recset)) {
				
				$id	= $event_list_recset_rec['event_id'];
				$event_image_name = $event_list_recset_rec['image_name'];
				}
				
				echo "<a href=srilanka_events/index.php?event_id=$id><img src=images/events/$event_image_name width=157 height=283 class=timg /></a>";
		  //<img src="images/upcoming_events.jpg" alt="" width="157" height="283" class="timg" />
		  
		  ?>
  </div>	
				
	   <div id="side_bar_heading">Distance Finder
         <img src="images/spac.gif" alt="" width="1" height="3" /><br /><br />
        
		<a href="sri_lanka_distance.php#tips"><img src="images/destination_month.jpg" alt="" width="155" height="81" border="0" class="timg" title="Find the distance of Sri Lanka" /></a>
		<!-- <form id="form1" method="post" action="">-->
	       
		   
		   
	       <!--<select name="select2" class="tiny_text" onchange="window.open(this.options[this.selectedIndex].value,'_top')" >
       <option>-- Hotels--</option>-->
       <?php 
					
				
				$hotel_list			= new db_transaction;
				$hotel_list_recset 	= $hotel_list->CallHotelActiveList();
           			
					/*
					while($row_page = mysql_fetch_assoc($hotel_list_recset)) {
							//print_r($row_page);
							
							
							echo " <option value=accommodations/index.php?accom_id=$row_page[a_id]";
		
						if ($result_page == $row_page) { echo "selected"; }
							
							$hotel_name 	= $row_page['a_name'];
							
							if(strlen($hotel_name) > 21)
							{
								$hotel_name = substr($hotel_name,0,21);
							}
							echo ">", $hotel_name,"</option>\n";
					
					} 
					*/
					
					
		   ?>
       </select>
	       <br />
	       <br />
            <br/>
           <!--<select name="select2" class="tiny_text" onchange="window.open(this.options[this.selectedIndex].value,'_top')" >
       		<option>-- Select   --</option>-->
       <?php 
					
				
				$guest_house			= new db_transaction;
				$guest_house_recset 	= $guest_house->CallGuestBungActiveList();
				
				/*
				
           			while($row_page_guest = mysql_fetch_assoc($guest_house_recset)) {
							//print_r($row_page);
							
							
							
							echo " <option value=accommodations/index.php?accom_id=$row_page_guest[a_id]";
		
						if ($result_page == $row_page_guest) { echo "selected"; }
							
							$hotel_name 	= $row_page_guest['a_name'];
							
							if(strlen($hotel_name) > 21)
							{
								$hotel_name = substr($hotel_name,0,21);
							}
							echo ">", $hotel_name,"</option>\n";
					
					} 
					*/
					
					
		   ?>
       </select>
           
           <br/>
           <br>
           <br/>
           <!--<select name="select" class="tiny_text" onchange="window.open(this.options[this.selectedIndex].value,'_top')" >
             <option>-- Select  --</option>-->
             <?php 
					
				
				$home_list			= new db_transaction;
				$home_list_recset 	= $home_list->CallHomeStayActiveList();
				
				/*
				while($row_page_guest = mysql_fetch_assoc($home_list_recset)) {
							//print_r($row_page);
							
							
							echo " <option value=accommodations/index.php?accom_id=$row_page_guest[a_id]";
		
						if ($result_page == $row_page_guest) { echo "selected"; }
							
							$hotel_name 	= $row_page_guest['a_name'];
							
							if(strlen($hotel_name) > 21)
							{
								$hotel_name = substr($hotel_name,0,21);
							}
							echo ">", $hotel_name,"</option>\n";
					
					} 
					*/
					
		   ?>
           </select>
           <br>
          
<br />
	     <!--</form>-->
  </div>
	   
		<!--<div id="side_bar_heading">Sri Lanka Distance Finder<br />
	      <img src="images/spac.gif" alt="" width="1" height="3" /><br />
	      <a href="sri_lanka_distance.php#tips"><img src="images/destination_month.jpg" alt="" width="155" height="81" border="0" class="timg" title="Find the distance of Sri Lanka" /></a><br />
	    </div>-->
	  </div>
		
  </div>