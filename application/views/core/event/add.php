<html>
<head>
<title>Add Event</title>
</head>
<body>
	<h2>Add Event</h2><br>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<br><br>
	<form action="<?php echo site_url('core/c_event/add'); ?>" method="POST" id="event_add">
	
		<table class="formtable">
			<tr><td>Event Name</td><td>&nbsp;</td><td><input type="text" name="event_name" class="textbox"></td></tr>
			<tr><td>Event Description</td><td>&nbsp;</td><td><textArea rows="5" cols="15" name="event_description" ></textarea></td></tr>
			<tr><td>Event DateTime</td><td>&nbsp;</td><td><input type="datetime" name="event_datetime" name="event_datetime" placeholder="yyyy-mm-dd HH:MM:SS"></td></tr></table>
			<br><br><br>
			<table>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td>
			<td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
			
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>