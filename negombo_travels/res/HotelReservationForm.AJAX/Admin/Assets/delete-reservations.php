<?
	/*
		AJAX Hotel Reservation Form 5.0 [purge recycled reservations routine]

		http://acidjs.wemakesites.net/hotel-reservation-form-js.html
	*/

	if(!isset($_POST["purge"]))
	{
		die("");
	}

	define("PATH", "../../Reservations/Deleted/");
	function destroy($dir)
	{
		$mydir = opendir($dir);
		while(false !== ($file = readdir($mydir)))
		{
			if($file != "." && $file != "..")
			{
				chmod($dir.$file, 0777);
				if(is_dir($dir.$file))
				{
					chdir('.');
					destroy($dir.$file.'/');
					rmdir($dir.$file) or DIE("couldn't delete $dir$file<br />");
				}
				else
					unlink($dir.$file) or DIE("couldn't delete $dir$file<br />");
			}
		}
		closedir($mydir);
	}
	destroy(PATH);
?>