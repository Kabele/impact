<html>
<head>
<title>Add Relation</title>
</head>
<body>
	<h2>Add Relation</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br>
	<form action="<?php echo site_url('core/c_relation/add'); ?>" method="POST" id="relation_add">
		<table class="formtable">
			
			<tr><td>Relation Name</td><td><input type="text" name="relation_name" name="relation_name" class="textbox"></td></tr></table><br><br>
			<table><tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>