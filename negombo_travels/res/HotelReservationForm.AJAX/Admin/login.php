<?
	if(isset($_GET["error"])) $error = "<strong>".$_GET["error"]."</strong>";
	if(isset($_COOKIE["logged_in"]) && $_COOKIE["logged_in"] != "" && $_GET["logout"] != "yes")
	{
		header("Location: ./");
		exit;
	}
	if($_GET["logout"] == "yes")
	{
		setcookie("logged_in", "", time()+60*60*24*30, "/");
		header("Location: index.php");
		exit;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US">
	<head>
		<title>Log in to HotelReservationForm.AJAX Admin</title>
		<meta name="Robots" content="No" />
		<meta name="Robots" content="No Index" />
		<meta name="Robots" content="No Follow" />
		<meta name="Robots" content="NoIndex" />
		<meta name="Robots" content="NoFollow" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="imagetoolbar" content="no" />
		<meta name="author" content="Martin Ivanov, a.k.a. Acid Martin" />
		<script type="text/javascript" src="../Forms.JS/Scripts/Forms.JS.js"></script>
		<script type="text/javascript">
		formsjs.pageload({
			rootfolder: "../",
			elements: "buttons, selects, textboxes",
			skin: "Vista",
			region: "page"
		});
		</script>
		<link rel="stylesheet" type="text/css" href="Styles/HotelReservationForm.AJAX.css"></link>
	</head>
	<body>
		<div id="login-panel">
			<h1>Log in to HotelReservationForm.AJAX Admin</h1>
			<p>The access to this page is restricted.</p>
			<p>If you are the administrator of this website, you may login with your credentials.</p>
			<form action="processlogin.php" method="post">
				<div class="AccessDenied"><!-- / --></div>
				<ul class="ul">
					<li><label for="login_user_name">Username</label> <input name="login_user_name" id="login_user_name" type="text" /></li>
					<li><label for="login_password">Password</label> <input name="login_password" id="login_password" type="password" /> </li>
					<li>
						<label>Keep me logged in for</label> 
						<select name="logged_in_for">
							<option value="1" selected="selected">1 day</option>
							<option value="7">1 week</option>
							<option value="14">2 weeks</option>
							<option value="31">1 month</option>
							<option value="180">6 months</option>
							<option value="365">1 year</option>
						</select>
					</li>
				</ul>
				<div> <input name="submit" type="submit" value="Log In" title="Log In" /> </div>
				<div id="fjs-clear-fix"><!-- / --></div>
			</form>
		</div>
	</body>
</html>