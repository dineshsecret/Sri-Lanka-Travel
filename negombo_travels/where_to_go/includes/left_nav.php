<div id="sidebar" >							
				
	    <div id="side_bar_heading">
        <img src="images/spac.gif" alt="" width="1" height="3" /></div>			
			<div id="side_bar_images"> </div>
			
	    <!--<div id="side_bar_heading">More Excursions<br />
  <img src="../images/spac.gif" alt="" width="1" height="3" /><br /></div>-->
         
  <!--<div id="side_bar_text">
		 <?php
		 /*
			
			if($what_todo_city_id){
				
				
				$what_to_do_type			= new db_transaction;
				$what_to_do_type_recset 	= $what_to_do_type->What_To_Do_Cat_desc($what_todo_city_id);
									
				
				while($row_page = mysql_fetch_assoc($what_to_do_type_recset)) {
			echo "<a href=../excursions/index.php?excursion_id=$row_page[excursion_id]&city_id=$row_page[city_id]>$row_page[excursion_name]</a>"."<br>";
				}
		}
			
			else{
}*/
				
          ?>
  </div><br><br>-->
	    
  <div id="side_bar_heading"> Accommodation To Stay<br /><br></div>
  <div id="side_bar_text">
  <?php 
  
  			
			$other_accommodation			= new db_transaction;
			$other_accommodation_recset 	= $other_accommodation->City_To_See_Accommodations($what_todo_city_id);
           			
			while($accommodation_row = mysql_fetch_assoc($other_accommodation_recset)) {
				echo "<img src=../images/negombo_bullet.jpg><a href=../accommodations/index.php?accom_id=$accommodation_row[a_id]>$accommodation_row[a_name]</a>"."<br>";
				
			}
			
    ?></div><br><br />
  
<div id="side_bar_heading">Popular Itenaries Types<br /><br></div>
  <div id="side_bar_text">
  <?php 
	
	
	$recoment_itenrey			= new db_transaction;
	$recoment_itenrey_recset 	= $recoment_itenrey->Itenaries();
           			
	while($itenarary_row = mysql_fetch_assoc($recoment_itenrey_recset)) {
	

		echo "<img src=../images/negombo_bullet.jpg>". "<a href=../itenary/index.php?itenery_id=$itenarary_row[itenery_desc_id]>".substr($itenarary_row['itenery_name'], 0, 25)."</a>"."<br>";
				/*
				echo "<img src=../images/negombo_bullet.jpg>				
			<a href=../itenary/index.php?itenery_id=$itenarary_row[itenery_desc_id]>substr($itenarary_row[itenery_name], 0, 15)</a>"."<br>";
			*/
			}
	
	
	
	?>
  </div>
  <br /><br/>
  <img src="../images/spac.gif" alt="" width="1" height="3" />
  
  <div id="side_bar_heading"></div>
</div>