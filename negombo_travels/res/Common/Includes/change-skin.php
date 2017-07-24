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
		<style type="text/css">
		code strong
		{
			color: red;
		}
		</style>
	</head>
	<body>
		<?php include 'Common/Includes/Header.inc' ?>
		<div class="demoContent">
			<!-- / -->
			<h3>Programmatically Set New Skin to a TabStrip</h3>
			<p>The <code>tabstripxml.clientmethods.skin()</code> can be used to programmatically set new skin to an existing tabstrip. The properties of the method are as follows:</p>
			<ul>
				<li><code>rootfolder</code> - root folder of the TabStrip.XML folder of the control.</li>
				<li><code>placeholder</code> - ID of the tabstrip placeholder.</li>
				<li><code>skin</code> - name of the skin that will be set programmatically.</li>
			</ul>
<pre><code>
tabstripxml.clientmethods.skin({
	rootfolder: '', 
	placeholder: 'TabStrip1', 
	skin: '<strong>Mac</strong>'
})
</code></pre>
			<p><a href="javascript:void(0)" onclick="tabstripxml.clientmethods.skin({rootfolder: '', placeholder: 'TabStrip1', skin: 'Mac'})">click to set mac skin to the tabstrip</a></p>
			<div id="TabStrip1"></div>
			<p>&nbsp;</p>
			<?php include "Common/Includes/MethodsSelector.inc" ?>
			<p>&nbsp;</p>
		</div>
	</body>
</html>