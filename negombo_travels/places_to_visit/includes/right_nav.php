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
           			
					
					/*
					while($row_page = mysql_fetch_assoc($hotel_list_recset)) {
							//print_r($row_page);
							
							
							echo " <option value=index.php?accom_id=$row_page[a_id]";
		
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
           Guest Houses | Bungalow<br/>
           <select name="select2" class="tiny_text" onchange="window.open(this.options[this.selectedIndex].value,'_top')" >
       <option>-- Select   --</option>
       <?php 
					
				
				$guest_house			= new db_transaction;
				$guest_house_recset 	= $guest_house->CallGuestBungActiveList();
				
				/*
           			while($row_page_guest = mysql_fetch_assoc($guest_house_recset)) {
							//print_r($row_page);
							
							
							echo " <option value=index.php?accom_id=$row_page_guest[a_id]";
		
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
           Home Stay<br/>
           <select name="select" class="tiny_text" onchange="window.open(this.options[this.selectedIndex].value,'_top')" >
             <option>-- Select  --</option>
             <?php 
					
				
				$home_list			= new db_transaction;
				$home_list_recset 	= $home_list->CallHomeStayActiveList();
				
				
				/*
				while($row_page_guest = mysql_fetch_assoc($home_list_recset)) {
							//print_r($row_page);
							
							
							echo " <option value=index.php?accom_id=$row_page_guest[a_id]";
		
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
	     </form>
  </div>
	   
		<div id="side_bar_heading"><br />
        
         	
	      <img src="images/spac.gif" alt="" width="1" height="3" />
	      <br />
          
  </div> <div id="side_bar_text">
  
  
  
    
		<?php 
		/*
		$hotel_comment					= new db_transaction;;
		$hotel_comment_recset 			= $hotel_comment->GuestAccommodationComment($accom_id);
	
		while($row_page_accom = mysql_fetch_assoc($hotel_comment_recset)) 
	 		{ 
			
				echo "<b><u>$row_page_accom[user_name]</u></b>"."<br>";
				echo "$row_page_accom[comment]"."<br>";
				echo "<a href=www.yahoo.com>More>></a>"."<br>";
			
			
			}
		*/
	?>
		
		
		
	
  </div><br>	
 <!-- <div id="side_bar_heading">Our  Experiance<br />
    <br /><?php
  
  //echo $a_city;
  ?>
  
  <br><br /></div>-->
  
  
  <!--<div id="side_bar_heading">Special Offers<br />
      <br />
      <img src="../images/specail_offer.jpg" width="160" height="202" class="timg" /><br />
<br />
        
	  </div>-->
		
  </div>