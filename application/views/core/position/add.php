<html>
<head>
<title>Add Position</title>
</head>
<body>
	<h2>Add Position</h2><br>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
	<form action="<?php echo site_url('core/c_position/add'); ?>" method="POST" id="position_add">
		<table class="formtable">
			
			<tr><td>Position Name</td><td>&nbsp;</td><td><input type="text" name="position_name" name="position_name" class="textbox"></td></tr>
			<tr><td>Position Description</td><td>&nbsp;</td><td><textArea rows="5" cols="15" name="position_description" ></textarea></td></tr></table><br><br><br><table>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>