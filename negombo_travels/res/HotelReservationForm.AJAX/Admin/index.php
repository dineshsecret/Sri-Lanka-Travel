<?
	if(!isset($_COOKIE["logged_in"]) || $_COOKIE["logged_in"] == "") 
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US">
	<head>
	<title>HotelReservationForm.AJAX | Admin | Redirecting to Login Page</title>
	<meta http-equiv="refresh" content="0;url=login.php" />
	</head>
	<body>
		<p>&nbsp;</p>
	</body>
</html>
<?
	} else {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US">
	<head>
		<title>HotelReservationForm.AJAX | Admin</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Pragma" content="no-cache" />
		<link rel="stylesheet" type="text/css" href="Styles/Styles.css"></link>
		<script type="text/javascript" src="LoadingPanel.JS/RoundedCornersPanel.JS/RoundedCornersPanel.JS.js"></script>
		<script type="text/javascript" src="LoadingPanel.JS/LoadingPanel.JS/LoadingPanel.JS.js"></script>
		<script type="text/javascript" src="Dialogs.JS/Scripts/Dialogs.JS.js"></script>
		<script type="text/javascript" src="Tabstrip.XML/Scripts/TabStrip.XML.js"></script>
		<script type="text/javascript" src="Scripts/HotelReservationForm.AJAX.Admin.js"></script>
		<script type="text/javascript">
		admin.init({
			language: "en-US"
		});
		</script>
	</head>
	<body>
		<div id="wrapper">
			<h1><!-- / --></h1>
			<div class="toolbar">
				<div id="stats"><!-- / --></div>
				<div id="buttons"><!-- / --></div>
			</div>
			<div id="tabstrip"><!-- / --></div>
			<div class="footer">
				<ul>
					<li><a href="http://wemakesites.net/" title="WeMakeSites.NET" rel="external">&copy;WeMakeSites.NET</a></li>
					<li><a href="http://acidjs.wemakesites.net/hotel-reservation-form-js.html" title="HotelReservationForm.AJAX" rel="external">HotelReservationForm.AJAX</a></li>
				</ul>
			</div>
			<div class="dumps">
				<div id="djs_clearfix"><!-- / --></div>
				<div id="lp-clear-fix"><!-- / --></div>
				<div id="tx-clear-fix"><!-- / --></div>
				<div id="response-dump"><!-- / --></div>
				<input type="hidden" id="admin-client-state" />
			</div>
		</div>
	</body>
</html>
<?
	}
?>