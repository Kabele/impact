<html>
<head>
<title>Update Reserved Information</title>
</head>
<body>
	<h2>Update Reserved Information</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_hotel_reservation/edit/'.$hotel_reservation->hotelres_id); ?>" method="POST" id="hotelres_edit">
		<table class="formtable">
			<tr><td>Hotel Reservation ID</td><td><input type="text" name="hotelres_id" class="textbox" value="<?php echo @$hotel_reservation->hotelres_id; ?>" readonly></td></tr>
			<tr><td>Event Registration ID</td><td><input type="text" name="eventreg_id" class="textbox" value="<?php echo @$hotel_reservation->eventreg_id; ?>" readonly></td></tr>
			<tr><td>Event  Hotel ID</td><td><input type="text" name="eventhotel_id" class="textbox" value="<?php echo @$hotel_reservation->eventhotel_id; ?>" readonly></td></tr>
			
			<tr><td>Room Number</td><td><input type="text" name="roomno" class="textbox" value="<?php echo @$hotel_reservation->roomno; ?>" ></td></tr>
			<tr><td>Check In</td><td><input type="datetime" name="checkin" value="<?php echo @$hotel_reservation->checkin; ?>" class="textbox"></td></tr>
			<tr><td>Check Out</td><td><input type="datetime" name="checkout" class="textbox" value="<?php echo @$hotel_reservation->checkout; ?>" ></td></tr>
			<tr><td>Comment</td><td><input type="textarea" name="comment" class="textarea" value="<?php echo @$hotel_reservation->comment; ?>" ></td></tr>
			
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Update" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>