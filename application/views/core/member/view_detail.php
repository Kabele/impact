<html>
<head>
<title>Members Details</title>
</head>
<body>

	<h2> Member Details</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	 
	
	
	<table  >
	<?php
	
	        
	    if($objects->gender==1)
			{
			 $gen="Male";
			 }
			 else
			 {
			 $gen="Female";
			 }
	 ?>
	<tr><td><img src= "<?php{$objects->photo}?>" width="175" height="200" ></td></tr><tr><td> College Id </td> <td> <?php echo "{$objects->college_id} "?></td> <tr><td>Member name</td> <td><?php echo "{$objects->member_name} "?></td></tr> <tr> <td>Branch id</td> <td> <?php echo "{$objects->branch_id}  "?></td></tr><tr><td>Year </td><td><?php echo "{$objects->year} "?></td></tr><tr><td>Gender</td> <td><?php echo " $gen"?></td></tr> <tr><td>Date Of Birth</td> <td><?php echo "{$objects->dob} "?></td></tr> <tr><td>Contact Number</td><td><?php echo "{$objects->contact_no} "?></td></tr><tr><td>Email Id</td><td> <?php echo "{$objects->email} "?> </td></tr><tr><td>Event Id </td><td><?php echo "{$objects->event_id} "?> </td></tr><tr><td>Position Id</td> <td> <?php echo "{$objects->position_id} "?></td></tr><tr><td>Committee Id</td><td> <?php echo "{$objects->committee_id} "?></td></tr><tr> <td>Role Id</td> <td><?php echo "{$objects->role_id} "?></td></tr> <tr><td>Status</td><td> <?php echo "{$objects->status} "?> </td></tr><tr><td> Degree Id </td><td><?php echo "{$objects->degree_id} "?></td></tr> 

    <table>	
	 
		 
		 
			
			
			 
	 
	 
</body>
</html>