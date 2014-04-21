<html>
<head>
<title>Update Qualification Detail</title>
</head>
<body>
	<h2>Update Qualification Detail</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
	<form action="<?php echo site_url('core/c_other_qualification_detail/edit/'.@$object->oq_id); ?>" method="POST" id="other_qualification_detail_add">
		<table class="formtable">
			<tr><td>Name Of Institute</td><td>&nbsp;</td><td><input type="text"  name="name_of_institute" value="<?php echo @$object->name_of_institute; ?>" class="textbox"></td></tr>
			<tr><td>Course</td><td>&nbsp;</td><td><input type="text" name="course"  value="<?php echo @$object->course; ?>" class="textbox"></td></tr>
			<tr><td>Year Of Passsing</td><td>&nbsp;</td><td><input type="text" name="year_of_passing"  value="<?php echo @$object->year_of_passing; ?>" class="textbox"></td></tr>
			<tr><td>Extras</td><td>&nbsp;</td><td><input type="text" name="extras"  value="<?php echo @$object->extras; ?>" class="textbox"></td></tr></table>
			
<br><br><br><table>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Update" class="submitbutton"></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>