 <html>
<head>
<title>Add Qualification_detail</title>
</head>
<body>
<h2>Add Qualification Detail</h2>
	<p>Adding Qualification Detail for <?php echo $alumni_info->fname; ?></p><br>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?><br><br>
	<form action="<?php echo site_url('core/c_other_qualification_detail/add/'.$alumni_info->alumni_id); ?>" method="POST" id="other_qualification_detail_add">
		<table class="formtable">
			<tr><td>Name Of Institute</td><td>&nbsp;</td><td><input type="text" name="name_of_institute"  class="textbox"></td></tr>
			<tr><td>Course</td><td>&nbsp;</td><td><input type="text" name="course"  class="textbox"></td></tr>
			<tr><td>Year of Passing</td><td>&nbsp;</td><td>
<SELECT NAME="year_of_passing">
     <?php
for($i=1932;$i<=2014;$i++)
	{
	echo "<OPTION value='{$i}'>{$i}</OPTION>";
	}
			?>
	</SELECT>
      </td></tr>
			<tr><td>Extras</td><td>&nbsp;</td><td><input type="text" name="extras"  class="textbox"></td></tr></table><br><br><br><table>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
			<td><a href="<?php echo site_url('core/c_alumni_info/add/');?>">skip</a></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>