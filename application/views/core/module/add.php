<html>
<head>
<title>Add Module</title>
</head>
<body>
	<h2>Add Module</h2><br>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
	<form action="<?php echo site_url('core/c_module/add'); ?>" method="POST" id="module_add">
		<table class="formtable">
			<tr><td>Module Name</td><td>&nbsp;</td><td><input type="text" name="module_name" class="textbox"></td></tr></table>
			<br><br>
			<table><tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>