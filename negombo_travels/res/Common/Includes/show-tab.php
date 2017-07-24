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
			datafile: "TabSets/ShowTab.xml",
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
			<h3>Show Tab</h3>
			<p>The <code>tabstripxml.clientmethods.show()</code> can be used to programmatically show hidden tabs from an existing tabstrip. Tabs in TabStrip.XML can be hidden either declaratively, via the <code>visible</code> property of a <code>&lt;tabs /&gt;</code> set to <code>false</code> or programmatically in runtime via the <code><a href="client-methods.php?method=6" title="tabstripxml.clientmethods.hide()">tabstripxml.clientmethods.hide()</a></code> method of the control. The properties of the method are as follows:</p>
			<ul>
				<li><code>placeholder</code> - ID of the tabstrip placeholder.</li>
				<li><code>index</code> - zero-based integer represeting the tab that will be shown in the current tabstrip.</li>
				<li><code>selected</code> - <code>true</code> or <code>false</code>. If set to <code>true</code>, the tab will be automatically selected after it is displayed.</li>
			</ul>
<pre><code>
tabstripxml.clientmethods.show({
	placeholder: 'TabStrip1',
	index: <strong>1</strong>,
	selected: <strong>true</strong>
})
</code></pre>
			<p><a href="javascript:void(0)" onclick="tabstripxml.clientmethods.show({placeholder: 'TabStrip1', index: 1, selected: true})">click to show and select a hidden "downloads" tab</a></p>
			<div id="TabStrip1"></div>
			<p>&nbsp;</p>
			<!-- / -->
			<?php include "Common/Includes/MethodsSelector.inc" ?>
			<p>&nbsp;</p>
		</div>
	</body>
</html>