<div id="sidebar" >							
				
	    <div id="side_bar_heading">Newest Experiance <br />
	      <img src="images/spac.gif" alt="" width="1" height="3" />	
		  
		  <?php 
		 		  
		$monthly_excursions			= new db_transaction;
		$monthly_excursions_recset 	= $monthly_excursions->Excurion_Of_Month();
           			
			while($month_row = mysql_fetch_assoc($monthly_excursions_recset)) {
				//echo "$month_row[image_0]";
				echo "<a href=experiance_of_month.php?id=$month_row[experiance_id]><img src=images/experiance/thum/$month_row[image_1] width=157 height=103 class=timg title=$month_row[experiance_name]></a>";
				}
		   ?>
		  
	    </div>	
		
			
	    <div id="side_bar_heading">Accommodations <br /><br>
        <?php 
 
  			$RandomHotelSelection			= new db_transaction;
			$Random_HotelSelection_recset 	= $RandomHotelSelection->RandomHotelSelection();
           			
			
while($Random_HotelSelection_recset_row = mysql_fetch_assoc($Random_HotelSelection_recset))
			{
				
			echo "<a href=accommodations/index.php?accom_id=$Random_HotelSelection_recset_row[a_id] title='$Random_HotelSelection_recset_row[a_name]'><img src=administrator/im/im_thum/$Random_HotelSelection_recset_row[image_0] class=timg /> </a>"."<br>";
			}
  
  ?>
        
	<img src="images/spac.gif" alt="" width="1" height="3" /><br />
	    </div>	
 <div id="side_bar_heading">Colombo Weather Max & Min <br />		
			<div id="side_bar_images"> 
			<div id="cont_a7d3830ca52dc28c37e15dff1bdcb1d3">
  <span id="h_a7d3830ca52dc28c37e15dff1bdcb1d3"></span>
  <script type="text/javascript" src="http://www.theweather.com/wid_loader/a7d3830ca52dc28c37e15dff1bdcb1d3"></script>
</div>

</div></div>	
</div>