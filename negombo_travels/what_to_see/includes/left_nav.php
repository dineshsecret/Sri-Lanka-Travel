<div id="sidebar" >							
				
	    <div id="side_bar_heading">
        <img src="images/spac.gif" alt="" width="1" height="3" /></div>			
			<div id="side_bar_images"> </div>
			
	    <!--<div id="side_bar_heading">More Places to See<br />
	      <img src="../images/spac.gif" alt="" width="1" height="3" /><br /></div>
         
  <div id="side_bar_text">
		 <?php
		 	/*
			
			if($what_to_see_id){
				
				$what_to_see_type			= new db_transaction;
				$what_to_see_type_recset 	= $what_to_see_type->What_To_See_Cat_desc($what_to_see_id);
									
				while($row_page = mysql_fetch_assoc($what_to_see_type_recset)) {
					echo "<a href=index.php?what_to_see_desc_id=$row_page[what_to_see_id]>".$row_page['attraction_name']."</a>"."<br>";
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
			$other_accommodation_recset 	= $other_accommodation->City_Relative_Accommodations($what_to_see_city_id);
           			
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
				echo "<img src=../images/negombo_bullet.jpg><a href=../itenary/index.php?itenery_id=$itenarary_row[itenery_cat_id]>$itenarary_row[itenery_name]</a>"."<br>";
				
			}
	
	
	
	
	?>

    
    
</div><br /><br/>
  <img src="../images/spac.gif" alt="" width="1" height="3" />
  
  <div id="side_bar_heading"></div>
</div>