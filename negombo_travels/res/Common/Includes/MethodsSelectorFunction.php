window.onload = function()
{
	var select = tabstripxml._get('MethodsSelector');
	
	select.selectedIndex = <?php echo $page ?>;

	select.onchange = function(e)
	{
		window.open('client-methods.php?method=' + this.value, '_self');
	}
}