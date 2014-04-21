<html>
<head>
<title>Update Branch</title>
</head>
<body>
	<h2>Update Degree</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<br><br><br>
	<form action="<?php echo site_url('core/c_degree/edit/'.@$object->degree_id); ?>" method="POST" id="degree_add">
		<table class="formtable">
			<tr><td>Degree ID</td><td>&nbsp;</td><td><input type="text" name="degree_id" id="degree_id" class="textbox" value="<?php echo @$object->degree_id; ?>" readonly></td></tr>
			<tr><td>Degree Name</td><td>&nbsp;</td><td><input type="text" name="degree_name" name="degree_name" value="<?php echo @$object->degree_name; ?>" class="textbox"></td></tr></table>
			<br><br><br>
			<table><tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Update" class="submitbutton"></td>
			<td>&nbsp;</td>
			
		
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>