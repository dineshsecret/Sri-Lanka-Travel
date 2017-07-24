<?php 
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/BrightSide.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrator Login</title>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="356" height="190">&nbsp;</td>
    <td width="312">
	<?php 
	if(isset($_SESSION['error'])){
			  
	  print " <table width=100% border=0 cellpadding=0 cellspacing=0 height=27px><tr><td colspan=3 bgcolor=#FF0000 class=error_mark>$_SESSION[error]</td></tr></table>";
		 unset($_SESSION['error']);
			  
		  }
		  /*if($_SESSION['fake_access']){
			print($_SESSION['fake_access']);
			unset($_SESSION['fake_access']);
			  			  
			  }
			  
			  if($_SESSION['logout']){
 	 	unset($_SESSION['logout']);
		  }*/
			  ?>
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	
	<form id="form1" name="form1" method="post" action="form_action.php">
	  <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="34" colspan="2" align="left" bgcolor="#000033"><div align="center"><strong>Negombo Travel &amp; Tours  Administrator Login </strong></div></td>
        </tr>
        <tr>
          <td width="74" height="33" bgcolor="#000000">User Name </td>
          <td width="226" height="33" align="left" bgcolor="#000000"><input name="user_name" type="text" id="user_name" /></td>
        </tr>
        <tr>
          <td height="28" bgcolor="#000000">Password </td>
          <td height="28" align="left" bgcolor="#000000"><input name="pass" type="password" id="pass" /></td>
        </tr>
        <tr>
          <td height="25" bgcolor="#000000"><br />
            <input type="hidden" name="page_name" value="login_page" />
            <input type="hidden" name="mod" value="login" /></td>
          <td height="25" align="left" bgcolor="#000000"><input type="submit" name="Submit" value="Submit" />
              <input type="reset" name="Submit2" value="Reset" />
            <br /></td>
        </tr>
      </table>
        </form>
    </td>
    <td width="445">
	
	
	
	
	
	
	
	
	</td>
  </tr>
</table>
</body>
</html>
