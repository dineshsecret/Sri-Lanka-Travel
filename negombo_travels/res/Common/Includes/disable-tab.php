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
			<h3>Disable Tab</h3>
			<p>The <code>tabstripxml.clientmethods.disable()</code> can be used to programmatically disable tabs in an existing tabstrip. The properties of the method are as follows:</p>
			<ul>
				<li><code>placeholder</code> - ID of the tabstrip placeholder.</li>
				<li><code>index</code> - zero-based integer represeting the tab that will be disabled in the current tabstrip.</li>
			</ul>
<pre><code>
tabstripxml.clientmethods.disable({
	placeholder: 'TabStrip1', 
	index: <strong>1</strong>
})
</code></pre>
			<p><a href="javascript:void(0)" onclick="tabstripxml.clientmethods.disable({placeholder: 'TabStrip1', index: 1})">click to disable the second tab</a></p>
			<div id="TabStrip1"></div>
			<p>&nbsp;</p>
			<p>An opposite <code><a href="client-methods.php?method=9" title="tabstripxml.clientmethods.enable()">tabstripxml.clientmethods.enable()</a></code> method of the control can be used to programmatically enable disabled tabs. Please, use the dropdown below to view this methid.</p>
			<!-- / -->
			<?php include "Common/Includes/MethodsSelector.inc" ?>
			<p>&nbsp;</p>
		</div>
	</body>
</html>