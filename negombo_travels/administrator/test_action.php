<?php
$listfolderid=$row_rsmem['mem_id'].time();
$numoffile = 1 + $_POST['expics'];
$mypath="im"."/".$listfolderid."/";
mkdir($mypath, 0777);
$file_dir = $mypath;
if ($_POST) {
for ($i=0;$i<$numoffile;$i++) {
if (trim($_FILES['myfiles']['name'][$i])!="") {
$newfile = $file_dir.$_FILES['myfiles']['name'][$i];
move_uploaded_file($_FILES['myfiles']['tmp_name'][$i],$newfile);
$j++;
}
}
}
if (isset($j)&&$j>0) print "<br><b>Your file(s) has been uploaded.</b><br>";

?> 