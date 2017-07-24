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
			<h3>Remove All Tabs</h3>
			<p>The <code>tabstripxml.clientmethods.removealltabs()</code> can be used to programmatically remove all tabs from an existing tabstrip. Once removed, new tabs can be added by using the <code><a href="client-methods.php?method=0" title="tabstripxml.clientmethods.addtab()">tabstripxml.clientmethods.addtab()</a></code> method of the control. The properties of the <code>tabstripxml.clientmethods.removealltabs()</code> method are as follows:</p>
			<ul>
				<li><code>placeholder</code> - ID of the tabstrip placeholder.</li>
			</ul>
<pre><code>
tabstripxml.clientmethods.removealltabs({
	placeholder: 'TabStrip1'
})
</code></pre>
			<p><a href="javascript:void(0)" onclick="tabstripxml.clientmethods.removealltabs({placeholder: 'TabStrip1' }); tabstripxml._get('Lnk1').style.visibility = 'visible';">click to remove all tabs</a> <a href="javascript:void(0)" onclick="tabstripxml.clientmethods.addtab({placeholder: 'TabStrip1', title: 'Lorem Ipsum', content: 'Lorem ipsum dolor sit amet...', selected: true, index: 'last', iconurl: null })" id="Lnk1" style="visibility: hidden;">add new tab</a></p>
			<div id="TabStrip1"></div>
			<p>&nbsp;</p>
			<!-- / -->
			<?php include "Common/Includes/MethodsSelector.inc" ?>
			<p>&nbsp;</p>
		</div>
	</body>
</html>