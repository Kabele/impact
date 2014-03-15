<html>
<head>
<title>Login</title>
</head>
<body>
	<h2>Login</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_account/login'); ?>" method="POST" id="account_login">
		<table class="formtable">
			<tr><td>Email</td><td><input type="text" name="email" id="email" class="textbox"></td></tr>
			<tr><td>Password</td><td><input type="password" name="password" name="password" class="textbox"></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Login" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>