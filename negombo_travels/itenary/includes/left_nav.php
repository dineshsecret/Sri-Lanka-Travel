<div id="sidebar" >							
				
	    <div id="side_bar_heading">
        <img src="images/spac.gif" alt="" width="1" height="3" /></div>			
			<div id="side_bar_images"> </div>
			
	    <div id="side_bar_heading">Relative Itenaries <br />
	      <img src="../images/spac.gif" alt="" width="1" height="3" /><br /></div>
         
  <div id="side_bar_text">
		 <?php
		 $accom_type			= new db_transaction;
			$accom_type_recset 	= $accom_type->Itenery_Catogory_List_reletive($itenery_cat_id);
			
           			
			while($row_page = mysql_fetch_assoc($accom_type_recset)) {
			
				$it_name = $row_page['itenery_name'];
				$post = substr($it_name, 0, 24); 
				echo "<img src=../images/negombo_bullet.jpg><a href=../itenary/index.php?itenery_id=$row_page[itenery_cat_id]>".$post."</a>"."<br>";
			}
          ?>
    <strong>More >></strong> </div><br><br>
	    
  <div id="side_bar_heading">Popular Places to Visit<br /><br></div>
  <div id="side_bar_text">
  <?php 
  
  			
			$other_excursions			= new db_transaction;
			$other_excursions_recset 	= $other_excursions->PopularPlacesToVisit();
           			
			while($excursion_row = mysql_fetch_assoc($other_excursions_recset)) {
				echo "<img src=../images/negombo_bullet.jpg><a href=../what_to_see/index.php?what_to_see=$excursion_row[what_to_see_id]>$excursion_row[what_to_see_name]</a>"."<br>";
				
			}
  
  ?></div><br><br />
  
 <div id="side_bar_heading"></div>
  <div id="side_bar_text">
  <?php 
	
	/*
	$similar_accom			= new db_transaction;
	$similar_accom_recset 	= $similar_accom->SimilarAccommodations($a_rating);
           			
	while($accommodation_row = mysql_fetch_assoc($similar_accom_recset)) {
				echo "<a href=../accommodations/index.php?accom_id=$accommodation_row[a_id]>$accommodation_row[a_name]</a>"."<br>";
				
			}
	
	*/
	
	?>

    
    
    </div><br /><br/>
  <img src="../images/spac.gif" alt="" width="1" height="3" />
  
  <div id="side_bar_heading"></div>
</div>