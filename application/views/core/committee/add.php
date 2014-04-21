<html>
<head>
<title>Add Committee</title>
</head>
<body>
	<h2>Add Committee</h2><br>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br>
	<form action="<?php echo site_url('core/c_committee/add'); ?>" method="POST" id="committee_add"><br>
		<table class="formtable">
						<tr><td>Committee Name</td><td>&nbsp;</td><td><input type="text" name="committee_name" name="committee_name" class="textbox"></td></tr></table>
						<br><br>
						<table><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			
		</table>
	</form>
	
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>