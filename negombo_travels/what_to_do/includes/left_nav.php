<div id="sidebar" >							
				
	    <div id="side_bar_heading">
        <img src="images/spac.gif" alt="" width="1" height="3" /></div>			
			<div id="side_bar_images"> </div>
			
	    <!--<div id="side_bar_heading">More Things To Be Done<br />
	      <img src="../images/spac.gif" alt="" width="1" height="3" /><br /></div>
         
  <div id="side_bar_text">
		 <?php
		 	/*
			//echo $what_to_do_id;
			if($what_to_do_id){
				
				$what_to_do_type			= new db_transaction;
				$what_to_do_type_recset 	= $what_to_do_type->Capture_Inserted_WhatToDo($what_to_do_id);
									
				while($row_page = mysql_fetch_assoc($what_to_do_type_recset)) {
					echo "<a href=index.php?what_to_do_desc_id=$row_page[what_to_do_id]&what_to_do_id=$what_to_do_id>$row_page[to_do_name]</a>"."<br>";
				}
				
			}
			
			else{
				
				
				
				
				
				}*/
				
          ?>
  </div><br><br>-->
	    
  <div id="side_bar_heading"> Accommodation To Stay<br /><br></div>
  <div id="side_bar_text">
  <?php 
  
  			
			
			$other_To_Done			= new db_transaction;
			$other_To_Done_recset 	= $other_To_Done->City_Relative_Accommodations($what_to_do_city_id);
           			
			while($What_to_do_row = mysql_fetch_assoc($other_To_Done_recset)) {
				echo "<img src=../images/negombo_bullet.jpg><a href=../accommodations/index.php?accom_id=$What_to_do_row[a_id]>$What_to_do_row[a_name]</a>"."<br>";
				
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