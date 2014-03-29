<html>
<head>
<title>Add Role</title>
</head>
<body>
	<h2>Add Role</h2><br>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
	<form action="<?php echo site_url('core/c_role/add'); ?>" method="POST" id="role_add">
		<table class="formtable">
			<tr><td>Role Name</td><td>&nbsp;</td><td><input type="text" name="role_name" name="role_name" class="textbox"></td></tr>
<tr><td>Role Description</td><td>&nbsp;</td><td><input type="text" name="role_desc" name="role_desc" class="textbox"></td></tr></table><br><br><br><table>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>