<html>
<head>
<title>All Reserved Rooms</title>
</head>
<body>
	<h2>All Registered Events</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<p>Found <strong><?php echo count($objects); ?></strong> objects</p>
	<table border="1" class="datatable">
	<tr><th>Sr.</th><th>Event Registration ID</th><th>Event Hotel ID</th><th>Room Number</th><th>Check In</th><th>check Out</th><th>comment</th></tr>
	<?php
		$i = 1;
		foreach($objects as $obj){
			$editurl = site_url('core/c_hotel_reservation/edit/'.$obj->hotelres_id);
			$deleteurl = site_url('core/c_hotel_reservation/delete/'.$obj->hotelres_id);
			echo "<tr><td>{$i}</td><td>{$obj->eventreg_id}</td><td>{$obj->eventhotel_id}</td><td>{$obj->roomno}</td><td>{$obj->checkin}</td><td>{$obj->checkout}</td><td>{$obj->comment}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
			$i = $i+1;
		}
	?>
	</table>
</body>
</html>