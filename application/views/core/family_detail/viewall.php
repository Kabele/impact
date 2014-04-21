<html>
<head>
<title>All Family Members</title>
</head>
<body>
	<h2>All Family Members</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<p>Found <strong><?php echo count($objects); ?></strong> objects</p>
	<table border="1" class="datatable">
	<tr><th>Sr.</th><th>Alumni Id</th><th>Member Name</th><th>Relation Id</th><th>Occupation</th><th>Action</th></tr>
	<?php
		$i = 1;
		foreach($objects as $obj){
			$editurl = site_url('core/c_family_detail/edit/'.$obj->family_id);
			$deleteurl = site_url('core/c_family_detail/delete/'.$obj->family_id);
			
			$relation_name = $family_relation->find_by_id($obj->relation_id)->relation_name;
			echo "<tr><td>{$i}</td><td>{$obj->alumni_id}</td><td>{$obj->name_of_member}</td><td>{$relation_name }</td><td>{$obj->occupation}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
			$i = $i+1;
		}
	?>
	</table>
</body>
</html>