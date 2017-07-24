<?php 

$URL_REF = parse_url($_SERVER['HTTP_REFERER']);
echo $URL_REF_HOST =   $URL_REF['host'];
?>
