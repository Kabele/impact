<html>
<head>
<title>Add Members</title>
</head>
<body>
	<h2>Add Members for <?php echo $event->event_name; ?></h2><br>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
	<form action="<?php echo site_url('core/c_member/add/'.$event->event_id); ?>" method="POST" id="member_add">
		<table class="formtable">
			 <tr><td>College id</td><td><input type="text" name="college_id" class="textbox"></td></tr>
			<tr><td>Name of Member</td><td><input type="text" name="member_name" class="textbox"></td></tr>
			<tr><td>Branch </td><td><SELECT NAME="branch_id">
            <?php
			foreach($branches as $row3)
			{
			echo "<OPTION value='{$row3->branch_id}'>{$row3->branch_name}</OPTION>";
			}
			?>
			</SELECT></td></tr>
			<tr><td>Year</td><td><input type="text" name="year" class="textbox"></td></tr>
			<tr><td>Gender</td><td><input type="radio" name="gender" value= '1' >Male<input type="radio" name="gender" value='2'>Female</td></tr>
			<tr><td>Date of Birth</td><td><input type="date" name="dob" value="yyyy-mm-dd" ></td></tr>
			<tr><td>Contact Number</td><td><input type="text" name="contact_no" class="textbox"></td></tr>
			<tr><td>Email Id</td><td><input type="text" name="email" class="textbox"></td></tr>
			<tr><td>Photo</td><td><input name="photo" accept="image/jpeg" type="file"></td> </tr>
			<tr><td>Committee </td><td><SELECT NAME="committee_id">
            <?php
			foreach($committees as $row2)
			{
			echo "<OPTION value='{$row2->committee_id}'>{$row2->committee_name}</OPTION>";
			}
			?>
			</SELECT></td></tr>
			<tr><td>Position </td><td><SELECT NAME="position_id">
            <?php
			foreach($positions as $row1)
			{
			echo "<OPTION value='{$row1->position_id}'>{$row1->position_name}</OPTION>";
			}
			?>
			</SELECT></td></tr>
	     	<tr><td>Password</td><td><input type="password" name="password" value="" class="textbox"></td></tr>
			<tr><td>Role</td><td><SELECT NAME="role_id">
            <?php
			foreach($roles as $row)
			{
			echo "<OPTION value='{$row->role_id}'>{$row->role_name}</OPTION>";
			}
			?>
			</SELECT></td></tr>
			<tr><td>Status</td><td><input type="text" name="status" class="textbox"></td></tr>
			<tr><td>Degree </td><td><SELECT NAME="degree_id">
            <?php
			foreach($degrees as $row4)
			{
			echo "<OPTION value='{$row4->degree_id}'>{$row4->degree_name}</OPTION>";
			}
			?>
			</SELECT></td></tr></table>
			<br><br>
			<table>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>