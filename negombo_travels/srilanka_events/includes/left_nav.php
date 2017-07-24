<div id="sidebar" >							
		<div id="side_bar_heading">
        Popular Itenaries Types<br />
	      <img src="../images/spac.gif" alt="" width="1" height="3" /><br /></div>
         
  <div id="side_bar_text">
		 <?php 
	$recoment_itenrey			= new db_transaction;
	$recoment_itenrey_recset 	= $recoment_itenrey->Itenaries();
           			
	while($itenarary_row = mysql_fetch_assoc($recoment_itenrey_recset)) {
				echo "<img src=../images/negombo_bullet.jpg><a href=../itenary/index.php?itenery_id=$itenarary_row[itenery_desc_id]>$itenarary_row[itenery_name]</a>"."<br>";
				
			}
	?>
  </div><br><br>
	    
  <!--<div id="side_bar_heading">Excursions<br /><br></div>
  <div id="side_bar_text">-->
  <?php 
  /*
  			$other_excursions			= new db_transaction;
			$other_excursions_recset 	= $other_excursions->OtherExcursionName($a_city);
           			
			while($excursion_row = mysql_fetch_assoc($other_excursions_recset)) {
				echo "<img src=../images/negombo_bullet.jpg><a href=../excursions/index.php?excursion_id=$excursion_row[excursion_id]>$excursion_row[excursion_name]</a>"."<br>";
				
			}
  */
  ?><!--</div>--><br><br />
  
  <!--<div id="side_bar_heading">Similar Accommodations<br /><br></div>
  <div id="side_bar_text">-->
  <?php 
	
	/*	
	$similar_accom			= new db_transaction;
	$similar_accom_recset 	= $similar_accom->SimilarAccommodations($a_rating);
           			
	while($accommodation_row = mysql_fetch_assoc($similar_accom_recset)) {
				echo "<img src=../images/negombo_bullet.jpg><a href=../accommodations/index.php?accom_id=$accommodation_row[a_id]>$accommodation_row[a_name]</a>"."<br>";
				
			}
	*/
	?>
 <!--</div><br /><br/>
  <img src="../images/spac.gif" alt="" width="1" height="3" />
  
 
  <div id="side_bar_text">
   
    
    
    <br />-->
  </div> 
</div>