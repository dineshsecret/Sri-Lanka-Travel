 <div id="rightbar">
	     <div id="side_bar_heading">Language Translation<br /><br />
 <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 
 </div><br />
				
	    <div id="side_bar_heading">Sri Lanka Accommodations
         <img src="images/spac.gif" alt="" width="1" height="3" /><br />
         <form id="form1" method="post" action="">
	       Hotels<br />
	       <select name="select2" class="tiny_text" onchange="window.open(this.options[this.selectedIndex].value,'_top')" >
       <option>-- Hotels--</option>
       <?php 
					
				
				$hotel_list			= new db_transaction;
				$hotel_list_recset 	= $hotel_list->CallHotelActiveList();
           			
					while($row_page = mysql_fetch_assoc($hotel_list_recset)) {
							//print_r($row_page);
							
							
							echo " <option value=../accommodations/index.php?accom_id=$row_page[a_id]";
		
						if ($result_page == $row_page) { echo "selected"; }
							
							$hotel_name 	= $row_page['a_name'];
							
							if(strlen($hotel_name) > 21)
							{
								$hotel_name = substr($hotel_name,0,21);
							}
							echo ">", $hotel_name,"</option>\n";
					
					} 
					
					
					
		   ?>
       </select>
	       <br />
	       <br />
           Guest Houses | Bungalow<br/>
           <select name="select2" class="tiny_text" onchange="window.open(this.options[this.selectedIndex].value,'_top')" >
       <option>-- Select   --</option>
       <?php 
					
				
				$guest_house			= new db_transaction;
				$guest_house_recset 	= $guest_house->CallGuestBungActiveList();
				
				
           			while($row_page_guest = mysql_fetch_assoc($guest_house_recset)) {
							//print_r($row_page);
							
							
							echo " <option value=../accommodations/index.php?accom_id=$row_page_guest[a_id]";
		
						if ($result_page == $row_page_guest) { echo "selected"; }
							
							$hotel_name 	= $row_page_guest['a_name'];
							
							if(strlen($hotel_name) > 21)
							{
								$hotel_name = substr($hotel_name,0,21);
							}
							echo ">", $hotel_name,"</option>\n";
					
					} 
					
					
					
		   ?>
       </select>
           
           <br/>
           <br>
           Home Stay<br/>
           <select name="select" class="tiny_text" onchange="window.open(this.options[this.selectedIndex].value,'_top')" >
            <option>-- Select  --</option>
             <?php 
					
				
				$home_list			= new db_transaction;
				$home_list_recset 	= $home_list->CallHomeStayActiveList();
				
				while($row_page_guest = mysql_fetch_assoc($home_list_recset)) {
							//print_r($row_page);
							
							
							echo " <option value=../accommodations/index.php?accom_id=$row_page_guest[a_id]";
		
						if ($result_page == $row_page_guest) { echo "selected"; }
							
							$hotel_name 	= $row_page_guest['a_name'];
							
							if(strlen($hotel_name) > 21)
							{
								$hotel_name = substr($hotel_name,0,21);
							}
							echo ">", $hotel_name,"</option>\n";
					
					} 
					
					
		   ?>
           </select>
           <br>
           <br/>
	       Sri Lanka Tours <br />
           <select name="select2" class="tiny_text" onchange="window.open(this.options[this.selectedIndex].value,'_top')" >
       <option>-- Tour Packages  --</option>
       <?php 
					
				$tourpack_list			= new db_transaction;
				$tourpack_list_recset 	= $tourpack_list->RandomSelectTourPacks();
				
				
           			while($row_page = mysql_fetch_assoc($tourpack_list_recset)) {
							//print_r($row_page);
							
							
							echo " <option value=../itenary/index.php?itenery_id=$row_page[itenery_desc_id]";
		
						if ($result_page == $row_page) { echo "selected"; }
							
							$hotel_name 	= $row_page['itenery_name'];
							
							if(strlen($hotel_name) > 21)
							{
								$hotel_name = substr($hotel_name,0,21);
							}
							echo ">", $hotel_name,"</option>\n";
					
					} 
					
		   ?>
       </select>
<br />
	     </form>
  </div>
	   
		<!--<div id="side_bar_heading">People are Saying about<br />
	      <img src="images/spac.gif" alt="" width="1" height="3" /><br />
	      <br /><br />
          
  </div>	
  <div id="side_bar_heading">More Picture <br />
    <br /><?php
  
  echo $a_city;
  ?><br><br /></div><div id="side_bar_heading">Special Offers<br />
      <br />
<br />
        
	  </div>-->
		
  </div>