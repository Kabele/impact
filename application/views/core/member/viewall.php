<html>
<head>
<title>All Members</title>
</head>
<body>
	<h2>All Members</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<p>Found <strong><?php echo count($objects);  ?></strong> objects</p>
	<table border="1" class="datatable">
	<tr><th>Member Id</th><th>College Id</th><th>Member Name</th><th>Branch Name</th><th>Year</th><th>Gender</th> <th>Contact Number</th><th>Email Id</th><th>Event Name</th><th>Position Name</th><th>Committee Name</th> <th>Role Name</th><th>Degree Name</th><th>Action</th></tr>
	<?php
	
		$i = 1;
		foreach($objects as $obj){
			$editurl = site_url('core/c_member/edit/'.$obj->member_id);
			$deleteurl = site_url('core/c_member/delete/'.$obj->member_id);
			$branch_name = $model_branch->find_by_id($obj->branch_id)->branch_name;
			$event_name = $model_event->find_by_id($obj->event_id)->event_name;
			$position_name = $model_position->find_by_id($obj->position_id)->position_name;
			$committee_name=$model_committee->find_by_id($obj->committee_id)->committee_name;
			$degree_name = $model_degree->find_by_id($obj->degree_id)->degree_name;
			$role_name=$model_role->find_by_id($obj->role_id)->role_name;
			
			if($obj->gender==1)
			{
			 $gen="Male";
			 }
			 else
			 {
			 $gen="Female";
			 }
		echo "<tr><td>{$obj->member_id}</td><td>{$obj->college_id}</td><td>{$obj->member_name}</td><td>{$branch_name}</td><td>{$obj->year}</td><td>$gen</td> <td>{$obj->contact_no}</td><td>{$obj->email}</td> <td>{$event_name}</td><td>{$position_name}</td><td>{$committee_name}</td> <td>{$role_name}</td><td>{$degree_name}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a> </td></tr>";
			
			 $i = $i+1;
		}
	?>
	</table>
</body>
</html>