<?php
include_once 'dbclass.php';

class db_transaction {

    public  $dbconnection;
    public 	$catch_record_set;
	public  $db_connection_call;
	public  $fetch_record_set;
	public  $each_record_set;
	public  $query_db_records;
	public  $insert_records;
	public  $update_records;
	public  $delete_records;
	public  $mysql_escape_quer;



    function __construct(){


    $this->db_connection_call       = '';
    $this->catch_record_set 	= '';
	$this->db_connection_call	= '';
	$this->fetch_record_set 	= '';
	$this->each_record_set		= '';
	$this->query_db_records		= '';
	$this->insert_records		= '';
	$this->update_records		= '';
	$this->delete_records		= '';
	$this->mysql_escape_quer	= '';

        
    }

            
    
    function Accommodation_Catogory(){

        $this->db_connection_call = new connaissance_db();
        $this->db_connection_call->dbconnection();
        
        $this->catch_record_set = "SELECT * FROM accomm_type";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
       
    }

    function Accommodation_Catogory_Edit($accomodation_type_id){

        $this->db_connection_call = new connaissance_db();
        $this->db_connection_call->dbconnection();

        $this->catch_record_set = "SELECT * FROM accomm_type WHERE accomm_id='$accomodation_type_id'";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
    }

    
    function Select_City(){

        $this->db_connection_call = new connaissance_db();
        $this->db_connection_call->dbconnection();
        
        $this->catch_record_set = "SELECT * FROM city";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
       
    }
	function Select_Country(){

        $this->db_connection_call = new connaissance_db();
        $this->db_connection_call->dbconnection();
        
        $this->catch_record_set = "SELECT * FROM country_tbl";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
       
    }

    function Accommodation_Panel(){

        $this->catch_record_set = "SELECT * FROM accomodation ORDER BY a_name";
        //echo $this->catch_record_set;
		$this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;

    }

    function Accommodation_Panel_Edit($a_id){

        $this->db_connection_call = new connaissance_db();
        $this->db_connection_call->dbconnection();
        
         $this->catch_record_set = "SELECT * FROM accomodation WHERE a_id='$a_id'";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;

    }
	
	function Accommodation_star_cat($a_rating){

        $this->db_connection_call = new connaissance_db();
        $this->db_connection_call->dbconnection();
        
		
        $this->catch_record_set = "SELECT * FROM accomodation WHERE a_rating='$a_rating'";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;

    }

    function Destination_types(){

        $this->db_connection_call = new connaissance_db();
        $this->db_connection_call->dbconnection();

        $this->catch_record_set = "SELECT * FROM destination_type ORDER BY dest_name ASC  LIMIT 0, 10";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;

    }

    function Excursion_Each_Desc($destination_id){

        $this->db_connection_call = new connaissance_db();
        $this->db_connection_call->dbconnection();

        $this->catch_record_set = "SELECT * FROM destnation_excursion WHERE destination_id='$destination_id'";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
    }

    function Excursion_Editab($execursion_id){

        $this->db_connection_call = new connaissance_db();
        $this->db_connection_call->dbconnection();

        $this->catch_record_set = "SELECT * FROM destnation_excursion WHERE excursion_id='$execursion_id'";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;

    }
    function What_To_See(){

        $this->catch_record_set = "SELECT * FROM what_to_see ORDER BY what_to_see_name ASC LIMIT 0, 10";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
    }

    function Capture_Inserted_Attractions($what_to_see_id){

        $this->catch_record_set = "SELECT * FROM what_to_see_dec WHERE what_to_see_cat_id='$what_to_see_id'";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
    }

    function Attraction_Editable_Region($attraction_id,$what_to_see_cat_id,$city_id){

        $this->catch_record_set = "SELECT * FROM what_to_see_dec WHERE what_to_see_id='$attraction_id'";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
    }

    function CallHotelActiveList(){

        $this->catch_record_set = "SELECT * FROM accomodation WHERE a_type_id=11";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;

    }
	
	 function CallEventActiveList(){

        $this->catch_record_set = "SELECT * FROM events ORDER BY event_id DESC LIMIT 1";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;

    }

    function CallGuestBungActiveList(){

        $this->catch_record_set = "SELECT * FROM accomodation WHERE a_type_id=10";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
    }
	
	function CallHomeStayActiveList(){

        $this->catch_record_set = "SELECT * FROM accomodation WHERE a_type_id=9";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;

    }
	
	function OtherExcursionName($a_city){
		
		$this->catch_record_set = "SELECT * FROM destnation_excursion WHERE city_id=$a_city";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		
		
	}
	
	
	function Excurion_Retreival($excursion_id){
		
		$this->catch_record_set = "SELECT * FROM destnation_excursion WHERE excursion_id=$excursion_id";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		
		}
		
			function SimilarAccommodations($a_rating){
		
				$this->catch_record_set = "SELECT * FROM accomodation WHERE a_rating=$a_rating";
       			$this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        		return $this->query_db_records;
		
		}
		
		function PopularPlacesToVisit(){

        $this->catch_record_set = "SELECT * FROM what_to_see";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
    }
	function CallAllEvents(){

        $this->catch_record_set = "SELECT * FROM events";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
    }
	
	function Event_Info_Retreival($event_id_rec){
	
		$this->catch_record_set = "SELECT * FROM events WHERE event_id=$event_id_rec";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
	
	
	}
	

	
	function Capture_Itenary_Records($iten_type_id){
		
		$this->catch_record_set = "SELECT * FROM itenary_desc WHERE itenery_cat_id=$iten_type_id";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
	}
	
	function Edit_Event_Info($event_id){
		
		$this->catch_record_set = "SELECT * FROM events WHERE event_id=$event_id";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
	}
	
	function Itenery_Editable_Region($itenery_id){
		
		$this->catch_record_set = "SELECT * FROM itenary_desc WHERE itenery_desc_id=$itenery_id";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
		
	function Itenery_Similar_City($a_city){
		
		$this->catch_record_set = "SELECT itenery_desc_id,itenery_name FROM itenary_desc WHERE city_id=$a_city";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
		
	function GuestAccommodationComment($accom_id){
		$this->catch_record_set = "SELECT * FROM guest_comment_accommodation WHERE accommodatin_id=$accom_id ORDER BY rand() LIMIT 0,3";
		//mysql_query("select * from YOUR_TABLE order by rand() limit 1
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
	function Itenery_Catogory_List($a_city){
		
		$this->catch_record_set = "SELECT * FROM itenary_desc WHERE city_id=$a_city LIMIT 0,5";
		//mysql_query("select * from YOUR_TABLE order by rand() limit 1
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
		
	function Capture_Itenery_information($itenary_id){
		$this->catch_record_set = "SELECT * FROM itenary_desc WHERE itenery_cat_id=$itenary_id";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
	function Capture_WhatToSee_information($what_to_see_id){
		$this->catch_record_set = "SELECT * FROM what_to_see WHERE what_to_see_id = $what_to_see_id";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		
		}
	function Capture_WhatToSee_information_Desc($what_to_see_desc_id){
		$this->catch_record_set = "SELECT * FROM what_to_see_dec WHERE what_to_see_id=$what_to_see_desc_id";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
	
		
	function Itenery_Catogory_List_reletive($itenery_cat_id){
		$this->catch_record_set = "SELECT * FROM itenary_desc ORDER BY RAND() LIMIT 0, 8";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
		
	function What_To_Do_Cat_List($what_to_Do_Cat_id){
		$this->catch_record_set = "SELECT * FROM destination_type WHERE dest_id=$what_to_Do_Cat_id";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
	
	function What_To_See_Relata($what_to_see_id){
		
		$this->catch_record_set = "SELECT * FROM what_to_see_dec WHERE what_to_see_cat_id=$what_to_see_id";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
	
	}
	
	function More_Places_Visit($what_to_see_id){
	
		$this->catch_record_set = "SELECT * FROM what_to_see_dec WHERE what_to_see_id=$what_to_see_id";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
	
	
	}
		
		
	function What_To_Do_Excu($what_to_Do_Cat_id){
		$this->catch_record_set = "SELECT * FROM what_to_do WHERE what_to_do_id=$what_to_Do_Cat_id";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
		
	function What_To_Do_Cat_desc($what_todo_city_id){
		
		$this->catch_record_set = "SELECT * FROM destnation_excursion WHERE city_id=$what_todo_city_id";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
		
	function Excurion_Of_Month(){
		
		$this->catch_record_set = "SELECT * FROM experiance ORDER BY RAND() LIMIT 0, 1";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
		
		function Excurion_Of_Month_data($experiance_id){
		
		$this->catch_record_set = "SELECT * FROM experiance WHERE experiance_id=$experiance_id";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
	
	function What_To_See_Cat_desc($what_to_see_id){
		$this->catch_record_set = "SELECT * FROM what_to_see_dec WHERE what_to_see_cat_id=$what_to_see_id";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
	function City_Relative_Accommodations($what_to_see_city_id){
		
		$this->catch_record_set = "SELECT * FROM accomodation WHERE a_city=$what_to_see_city_id";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		
		}
		
	function CommentInsertions($txt_fname,$select3,$txt_email,$comments){
	
		$db_connection_call = new connaissance_db;
		$db_connection_call->dbconnection();
		
		$this->insert_comments = "INSERT INTO guest_comments(full_name,country,comments,email) VALUES('$txt_fname','$select3','$txt_email','$comments')";
		mysql_query($this->insert_comments) or die(mysql_error());
		$db_connection_call->close();
		$_SESSION['post_suc']='Thank you very much for your valuable Comment !!!';
		 header("Location:guest_comments.php#tips");
		      	
	}
		
	function City_To_See_Accommodations($what_to_see_Desc_city_id){
		
		$this->catch_record_set = "SELECT * FROM accomodation WHERE a_city=$what_to_see_Desc_city_id";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
	function RandomHotelSelection(){
		
		$this->catch_record_set = "SELECT * FROM accomodation ORDER BY rand() LIMIT 3";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
	
	function RandomSelectTourPacks(){
		
		$this->catch_record_set = "SELECT * FROM itenary_desc ORDER BY rand() LIMIT 10";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;		
		
		}
		
	function Itenaray_Drop_Down(){
		
		$this->catch_record_set = "SELECT * FROM `itenary_type` ORDER BY itenary_name ASC LIMIT 0, 10";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;		
		
		}
		
	function Itenaries(){
        $this->catch_record_set = "SELECT * FROM itenary_desc ORDER BY itenery_name ASC";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
    }
	
	function Destination_Edit($destination_id){
		
		$this->catch_record_set = "SELECT * FROM destination_type WHERE dest_id=$destination_id";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
	}
		
	function What_To_Do_List(){
		
		$this->catch_record_set = "SELECT * FROM what_to_do";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
		
	function Capture_Inserted_WhatToDo($what_to_do_id){
		
		$this->catch_record_set = "SELECT * FROM what_to_do_desc WHERE what_to_do_cat_id='$what_to_do_id'";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
		
	function Attraction_Editable_ToDo($to_do_id){
		$this->catch_record_set = "SELECT * FROM what_to_do_desc WHERE what_to_do_id='$to_do_id'";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
	function Capture_WhatToDo_information_Desc($what_to_do_desc_id){
		$this->catch_record_set = "SELECT * FROM what_to_do_desc WHERE what_to_do_id='$what_to_do_desc_id'";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
		function City_Relative_ToBe_Done($what_to_do_city_id){
		$this->catch_record_set = "SELECT * FROM what_to_do_desc WHERE what_to_do_id='$what_to_do_desc_id'";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
	
	function What_To_See_Cat_Editab($what_to_see_id){
		$this->catch_record_set = "SELECT * FROM what_to_see WHERE what_to_see_id='$what_to_see_id'";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
	
	function Capture_WhatToDo_information($what_to_do_id){
		$this->catch_record_set = "SELECT * FROM what_to_do WHERE what_to_do_id='$what_to_do_id'";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
	function Experiance_List(){
		$this->catch_record_set = "SELECT * FROM experiance ORDER BY RAND() LIMIT 0, 8";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
	function News_List(){
		$this->catch_record_set = "SELECT * FROM news";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
	function News_List_Act(){
		$this->catch_record_set = "SELECT * FROM news WHERE act='yes'";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}	
		
		function News_List_Each($news_id){
		$this->catch_record_set = "SELECT * FROM news WHERE news_id=$news_id";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		}
	
	function Capture_exepriance_information($exp_id){
		$this->catch_record_set = "SELECT * FROM experiance WHERE experiance_id='$exp_id'";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		
		}
	function To_Do_Description(){
		$this->catch_record_set = "SELECT * FROM what_to_do ORDER BY what_to_do ASC LIMIT 0, 10";
        $this->query_db_records	 = mysql_query($this->catch_record_set)or die(mysql_error());
        return $this->query_db_records;
		
		
		}
}
?>
