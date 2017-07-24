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
			datafile: "TabSets/AddTabFirst.xml",
			placeholder: "TabStrip1"
		});

		tabstripxml.pageload({
			rootfolder: "",
			datafile: "TabSets/AddTabLast.xml",
			placeholder: "TabStrip2"
		});

		tabstripxml.pageload({
			rootfolder: "",
			datafile: "TabSets/AddTabNth.xml",
			placeholder: "TabStrip3"
		});

		tabstripxml.pageload({
			rootfolder: "",
			datafile: "TabSets/AddTabAJAX.xml",
			placeholder: "TabStrip4"
		});

		tabstripxml.pageload({
			rootfolder: "",
			datafile: "TabSets/AddTabExternal.xml",
			placeholder: "TabStrip5"
		});
		
		function loadajax()
		{
			tabstripxml.clientmethods.addtab({
				placeholder: 'TabStrip4',
				title: 'AJAX Loaded Content',
				content: '', 
				selected: false, 
				index: 'last', 
				iconurl: null, 
				onclientclick: function(e){
					var loader = tabstripxml._get('TabStrip4_tab_panes_1').childNodes[0];

					if(!loader.hasChildNodes())
					{
						tabstripxml._loadasync({
							serverfile: 'external-pages.php?tabpageid=downloads', 
							serverfileloader: loader
						});
					}
				}
			})
		}
		
		function loadiframe()
		{
			tabstripxml.clientmethods.addtab({
				placeholder: 'TabStrip5',
				title: 'Content Loaded In Iframe',
				content: '<iframe src="external-pages.php?tabpageid=downloads" frameborder="0" width="100%" height="124"></iframe>', 
				selected: true, 
				index: 'last', 
				iconurl: null, 
				onclientclick: function(e){}
			})
		}

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
			<h3>Add Tab</h3>
			<p>The <code>tabstripxml.clientmethods.addtab()</code> can be used to dynamically add new tabs to an existing tabstrip. The properties of the method are as follows:</p>
			<ul>
				<li><code>placeholder</code> - ID of the tabstrip placeholder.</li>
				<li><code>title</code> - text of the tab button.</li>
				<li><code>content</code> - content of the new tab pane that can accept text or HTML.</li>
				<li><code>selected</code> - <code>true</code> or <code>false</code>. If set to <code>true</code>, the new tab will be selected upon insertion.</li>
				<li><code>index</code> - If set to <code>first</code>, the new tab will be added as a first child of the tabstrip. If set to <code>last</code>, the new tab will be added as a last child of the tabstrip. If set to arbitrary number, the new tab will be added as n-th child of the tabstrip.</li>
				<li><code>iconurl</code> - allows to specify URL for the icon of the new tab button. If set to <code>null</code>, the new tab will not render an icon.</li>
				<li><code>onclientclick</code> - allows to specify a custom function that will be assigned to the tab button click.</li>
			</ul>
			<h4>Add New Tab as a First Child of the TabStrip</h4>
<pre><code>
tabstripxml.clientmethods.addtab({
	placeholder: 'TabStrip1', 
	title: 'Lorem Ipsum', 
	content: 'Lorem ipsum dolor sit amet...', 
	selected: false, 
	index: '<strong>first</strong>', 
	iconurl: 'TabSets/Icon_04.gif', 
	onclientclick: <strong>function(e)
	{
		alert('This is the custom tab click function attached programmatically to the new tab!')
	}</strong>
})
</code></pre>
			<p><a href="javascript:void(0)" onclick="tabstripxml.clientmethods.addtab({placeholder: 'TabStrip1', title: 'Lorem Ipsum', content: 'Lorem ipsum dolor sit amet...', selected: false, index: 'first', iconurl: 'TabSets/Icon_04.gif', onclientclick: function(e){alert('This is the custom tab click function attached programmatically to the new tab!')}})">click to create new tab, attach custom function to it and append it as a first child of the tabstrip</a></p>
			<div id="TabStrip1"></div>
			<p>&nbsp;</p>
			<h4>Add New Tab as a Last Child of the TabStrip</h4>
<pre><code>
tabstripxml.clientmethods.addtab({
	placeholder: 'TabStrip2', 
	title: 'Lorem Ipsum', 
	content: 'Lorem ipsum dolor sit amet...', 
	selected: <strong>true</strong>, 
	index: '<strong>last</strong>', 
	iconurl: null, 
	onclientclick: function(e){}
})
</code></pre>
			<p><a href="javascript:void(0)" onclick="tabstripxml.clientmethods.addtab({placeholder: 'TabStrip2', title: 'Lorem Ipsum', content: 'Lorem ipsum dolor sit amet...', selected: true, index: 'last', iconurl: null, onclientclick: function(e){}})">click to create new tab, append it as a last child of the tabstrip and then select it</a></p>
			<div id="TabStrip2"></div>
			<p>&nbsp;</p>
			<h4>Add New Tab as a N-th Child of the TabStrip</h4>
<pre><code>
tabstripxml.clientmethods.addtab({
	placeholder: 'TabStrip3', 
	title: 'Lorem Ipsum', 
	content: 'Lorem ipsum dolor sit amet...', 
	selected: false, 
	index: <strong>2</strong>, 
	iconurl: null, 
	onclientclick: function(e){}
})
</code></pre>	
			<p><a href="javascript:void(0)" onclick="tabstripxml.clientmethods.addtab({placeholder: 'TabStrip3', title: 'Lorem Ipsum', content: 'Lorem ipsum dolor sit amet...', selected: false, index: 2, iconurl: null, onclientclick: function(e){}})">click to create new tab and append it as a second child of the tabstrip</a></p>
			<div id="TabStrip3"></div>
			<p>&nbsp;</p>
			<h4>Loading Content Asynchronously via tabstripxml.clientmethods.addtab()</h4>
			<p>Loading content with AJAX in dynamically added tabs is not supported out-of-the-box by TabStrip.XML, but it can be easily achieved by using the <code>tabstripxml._loadasync()</code> method of the control. Below is a sample code demonstrating how to load content asynchronously after dynamically adding a new tab as a last child of the tabstrip:</p>
<pre><code>
&lt;script type="text/javascript"&gt;
function loadajax()
{
	tabstripxml.clientmethods.addtab({
		placeholder: 'TabStrip4',
		title: 'AJAX Loaded Content',
		content: <strong>''</strong>, 
		selected: false, 
		index: 'last', 
		iconurl: null, 
		onclientclick: <strong>function(e){
			var loader = tabstripxml._get('TabStrip4_tab_panes_1').childNodes[0];

			if(!loader.hasChildNodes())
			{
				tabstripxml._loadasync({
					serverfile: 'external-pages.php?tabpageid=downloads', 
					serverfileloader: loader
				});
			}
		}</strong>
	})
}
&lt;/script&gt;
</code></pre>
			<p><a href="javascript:void(0)" onclick="loadajax()">click to create new tab, append it as a last child and load AJAX content in it</a></p>
			<div id="TabStrip4"></div>
			<p>&nbsp;</p>
			<h4>Loading Content in an &lt;iframe /&gt; via tabstripxml.clientmethods.addtab()</h4>
			<p>Loading content in an &lt;iframe /&gt; in dynamically added tabs is not supported out-of-the-box by TabStrip.XML, but it can be easily achieved like this:</p>
<pre><code>
&lt;script type="text/javascript"&gt;
function loadiframe()
{
	tabstripxml.clientmethods.addtab({
		placeholder: 'TabStrip5',
		title: 'Content Loaded In Iframe',
		content: '<strong>&lt;iframe src="external-pages.php?tabpageid=downloads" frameborder="0" width="100%" height="124"&gt;&lt;/iframe&gt;</strong>', 
		selected: <strong>true</strong>, 
		index: 'last', 
		iconurl: null, 
		onclientclick: function(e){}
	})
}
&lt;/script&gt;
</code></pre>
			<p><a href="javascript:void(0)" onclick="loadiframe()">click to create new tab, append it as a last child, select it and load its content in an &lt;iframe /&gt;</a></p>
			<div id="TabStrip5"></div>
			<p>&nbsp;</p>
			<?php include "Common/Includes/MethodsSelector.inc" ?>
			<p>&nbsp;</p>
		</div>
	</body>
</html>