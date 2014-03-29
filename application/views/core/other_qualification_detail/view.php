<html>
<head>
<title>View Qualification Detail</title>
</head>
<body>
	<h2>View Qualification Detail</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_other_qualification_detail/view/'.@$object->oq_id); ?>" method="POST" id="other_qualification_detail_add">
		<table class="formtable" border="1">
			<tr><td>Alumni Id</td><td><?php echo @$object->alumni_id; ?></td></tr>
			<tr><td>Oqupaction Id</td><td><?php echo @$object->oq_id; ?></td></tr>
			<tr><td>Name Of Institute</td><td><?php echo @$object->name_of_institute; ?></td></tr>
			<tr><td>Course</td><td><?php echo @$object->course; ?></td></tr>
			<tr><td>Year Of Passsing</td><td><?php echo @$object->year_of_passing; ?></td></tr>
			<tr><td>Extras</td><td><?php echo @$object->extras; ?></td></tr>
			<tr><td>&nbsp</td><td><a href="<?php echo site_url('core/c_other_qualification_detail/viewall');?>">Back</a></td></tr>
			

			
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>