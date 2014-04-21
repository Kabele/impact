<html>
<head>
<title>View Designation Detail</title>
</head>
<body>
	<h2>View Designation Detail</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_other_qualification_detail/view/'.@$object->desig_id); ?>" method="POST" id="designation_detail_add">
		<table class="formtable" border="1">
			<tr><td>Alumni Id</td><td><?php echo @$object->alumni_id; ?></td></tr>
			<tr><td>Designation Id</td><td><?php echo @$object->desig_id; ?></td></tr>
			<tr><td>Organization Name</td><td><?php echo @$object->organization_name; ?></td></tr>			
			<tr><td>Organization Address</td><td><?php echo @$object->organization_address; ?></td></tr>
			<tr><td>Organization City</td><td><?php echo @$object->organization_city; ?></td></tr>			
			<tr><td>Organization Contact</td><td><?php echo @$object->organization_contact; ?></td></tr>
			<tr><td>Website</td><td><?php echo @$object->website; ?></td></tr>
			<tr><td>Organization Department</td><td><?php echo @$object->organization_department; ?></td></tr>
			<tr><td>Position</td><td><?php echo @$object->position; ?></td></tr>
			<tr><td>From Year</td><td><?php echo @$object->from_year; ?></td></tr>
			<tr><td>To Year</td><td><?php echo @$object->to_year; ?></td></tr>
<tr><td>&nbsp</td><td><a href="<?php echo site_url('core/c_designation_detail/viewall');?>">Back</a></td></tr>

		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>