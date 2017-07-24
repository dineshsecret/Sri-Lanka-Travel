<?php
	$page = $_GET['method'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US">
	<head>
		<title>Acid.JS Web 2.0 Component Library  | TabStrip.XML @ Martin Ivanov</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="Common/Styles/Styles.css"></link>
		<script type="text/javascript" src="Tabstrip.XML/Scripts/TabStrip.XML.js"></script>
		<script type="text/javascript">
		tabstripxml.pageload({
			rootfolder: "",
			datafile: "TabSets/Static.xml",
			placeholder: "TabStrip1"
		});

		<?php include 'Common/Includes/MethodsSelectorFunction.php' ?>
		</script>
	</head>
	<body>
		<?php include 'Common/Includes/Header.inc' ?>
		<div class="demoContent">
			<!-- / -->
			<h3>Destroy Tabstrip</h3>
			<p>The <code>tabstripxml.clientmethods.destroy()</code> can be used to programmatically remove tabstrip from the DOM of the page leaving only its placeholder element. The properties of the method are as follows:</p>
			<ul>
				<li><code>placeholder</code> - ID of the tabstrip placeholder.</li>
			</ul>
<pre><code>
tabstripxml.clientmethods.destroy({
	placeholder: 'TabStrip1'
})
</code></pre>
			<p><a href="javascript:void(0)" onclick="tabstripxml.clientmethods.destroy({placeholder: 'TabStrip1'})">click to destroy tabstrip</a></p>
			<div id="TabStrip1"></div>
			<p>&nbsp;</p>
			<!-- / -->
			<?php include "Common/Includes/MethodsSelector.inc" ?>
			<p>&nbsp;</p>
		</div>
	</body>
</html>