<?php
class connaissance_db
{
    
   /*
    var $Host 		= 'localhost';            			// Hostname of our MySQL server
    var $Database 	= 'negombo';                               // Logical database name on that server
    var $User 		= 'negombo_db';            				// Database user
    var $Password 	= '3H!WlN=5?#,A';        					// Database user's password
    var $Link_ID 	= 0;                				// Result of mysql_connect()
    var $Query_ID 	= 0;                				// Result of most recent mysql_query()
    var $Record    	= array();            				// Current mysql_fetch_array()-result
    var $Row;                        					// Current row number
    var $Errno 		= 0;                    			// Error state of query
    var $Error 		= "";
*/

    var $Host 		= 'localhost';            			// Hostname of our MySQL server
    var $Database 	= 'connaissance';                               // Logical database name on that server
    var $User 		= 'root';            				// Database user
    var $Password 	= '';        					// Database user's password
    var $Link_ID 	= 0;                				// Result of mysql_connect()
    var $Query_ID 	= 0;                				// Result of most recent mysql_query()
    var $Record    	= array();            				// Current mysql_fetch_array()-result
    var $Row;                        					// Current row number
    var $Errno 		= 0;                    			// Error state of query
    var $Error 		= "";

//// Error state of query
    function halt($msg)
    {
        echo("</TD></TR></TABLE><B>Database error:</B> $msg<BR>\n");
        echo("<B>MySQL error</B>: $this->Errno ($this->Error)<BR>\n");
        die("Session halted");
    }

    function dbconnection()
    {
        if($this->Link_ID == 0)
        {
            $this->Link_ID = mysql_connect($this->Host, $this->User, $this->Password);
            if (!$this->Link_ID)
            {
                $this->halt("Link_ID == false, connect failed");
            }
            $SelectResult = mysql_select_db($this->Database, $this->Link_ID);
            if(!$SelectResult)
            {
                $this->Errno = mysql_errno($this->Link_ID);
                $this->Error = mysql_error($this->Link_ID);
                $this->halt("cannot select database <I>".$this->Database."</I>");
            }
        }
    }

    function query($Query_String)
    {
        $this->connect();
        $this->Query_ID = mysql_query($Query_String,$this->Link_ID);
        $this->Row = 0;
        $this->Errno = mysql_errno();
        $this->Error = mysql_error();
        if (!$this->Query_ID)
        {
            $this->halt("Invalid SQL: ".$Query_String);
        }
        return $this->Query_ID;
    }

function query_fetch($fetch=0)
{
    if($fetch==0) {
        $result=@mysql_fetch_assoc($this->Query_ID);
    } else {
        $result=@mysql_fetch_array($this->Query_ID);
    }

    if(!is_array($result))
    return false;
    $this->total_field=mysql_num_fields($this->Query_ID);

    foreach($result as $key=>$val){
        $result[$key]=trim(htmlspecialchars($val));
    }
     return $result;
}

function num_field()
{
    return mysql_num_fields($this->Query_ID);
}

        function fetch_field()
            {
                return mysql_fetch_field($this->Query_ID,2);
        }

            function next_record()
            {
                $this->Record = mysql_fetch_array($this->Query_ID);
                $this->Row += 1;
                $this->Errno = mysql_errno();
                $this->Error = mysql_error();
                $stat = is_array($this->Record);

      if (!$stat)
        {
            mysql_free_result($this->Query_ID);
            $this->Query_ID = 0;
        }
        return $this->Record;
    }

            function num_rows()
            {
                return mysql_num_rows($this->Query_ID);
                }

           function maxRow($tablename,$field)
            {
                $sql="select max($field) from $tablename";
                $this->query($sql);
                $result=@mysql_fetch_array($this->Query_ID);
                return $result[0];
            }
    function affected_rows()
    {
        return mysql_affected_rows($this->Link_ID);
    }

    function optimize($tbl_name)
    {
        $this->connect();
        $this->Query_ID = @mysql_query("OPTIMIZE TABLE $tbl_name",$this->Link_ID);
    }

    function clean_results()
    {
        if($this->Query_ID != 0) mysql_freeresult($this->Query_ID);
    }

    function close()
    {
        if($this->Link_ID != 0) mysql_close($this->Link_ID);
    }

}
?>