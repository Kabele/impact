<html>
<head>
<title>Update Position</title>
</head>
<body>
	<h2>Update Position</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
	<form action="<?php echo site_url('core/c_position/edit/'.@$object->position_id); ?>" method="POST" id="position_add">
		<table class="formtable">
			<tr><td>Position ID</td><td>&nbsp;</td><td><input type="text" name="position_id" id="position_id" class="textbox" value="<?php echo @$object->position_id; ?>" readonly></td></tr>
			<tr><td>Position Name</td><td>&nbsp;</td><td><input type="text" name="position_name" name="position_name" value="<?php echo @$object->position_name; ?>" class="textbox"></td></tr>
			<tr><td>Position Description</td><td>&nbsp;</td><td><textArea rows="5" cols="15" name="position_description"><?php echo @$object->position_description; ?></textarea></td></tr></table>
			<br><br><br><table>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Update" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>