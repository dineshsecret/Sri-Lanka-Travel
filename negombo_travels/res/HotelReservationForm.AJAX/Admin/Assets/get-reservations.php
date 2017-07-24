<?
	/*
		AJAX Hotel Reservation Form 5.0 [reservation retrieval routine]

		http://acidjs.wemakesites.net/hotel-reservation-form-js.html
	*/

	if(!isset($_POST["folder"]))
	{
		die("");
	}

	$folder = $_POST["folder"];
	
	$path = "../../Reservations/".$folder;
	
	$dir_handle = @opendir($path) or die("");

	echo "<ul id=\"reservations-listing\">";
	while ($file = readdir($dir_handle)) 
	{
		if($file!="." && $file!="..")
		echo "<li data-file=\"$file\" data-folder-of-origin=\"".$folder."\" data-reservation-file=\"".$folder."/$file\" class=\"single-reservation\"><div class=\"reservation-header\" onclick=\"admin.openreservation({reservation:this});\" title=\"".$_POST["tooltip"]."\"><strong>".str_replace(".html", "", $file)."</strong></div><div class=\"reservation-details\"><div class=\"controls\"><ul><li class=\"print\"><button onclick=\"admin.printreservation()\" title=\"".$_POST["print"]."\" type=\"button\"><img src=\"Styles/print.png\" width=\"32\" height=\"32\" /></button></li><li class=\"new\"><button title=\"".$_POST["new"]."\" type=\"button\" data-destination-folder=\"New\" onclick=\"admin.movereservation({reservation:this})\"><img src=\"Styles/new.png\" width=\"32\" height=\"32\" /></button></li><li class=\"confirm\"><button title=\"".$_POST["confirm"]."\" type=\"button\" data-destination-folder=\"Confirmed\" onclick=\"admin.confirm({reservation:this})\"><img src=\"Styles/send-mail.png\" width=\"32\" height=\"32\" /></button><li class=\"archive\"><button title=\"".$_POST["archive"]."\" type=\"button\" data-destination-folder=\"Archive\" onclick=\"admin.movereservation({reservation:this})\"><img src=\"Styles/archive.png\" width=\"32\" height=\"32\" /></button></li><li class=\"deleted\"><button title=\"".$_POST["delete"]."\" type=\"button\" data-destination-folder=\"Deleted\" onclick=\"admin.movereservation({reservation:this})\"><img src=\"Styles/delete.png\" width=\"32\" height=\"32\" /></button></li></ul></div><div class=\"reservation-loader\" id=\"$file\"></div></div></li>";
	}
	echo "</ul>";
	closedir($dir_handle);
?> 