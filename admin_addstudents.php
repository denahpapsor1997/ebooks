<?php
include("template/admin_header.php");


?>
<form style="margin-left: auto;margin-right: auto;display: block;width: 50%;">
	<table class="table">
		<tr>
			<td>Registration number:</td><td><input type="text" name="regtno" class="form-control" placeholder="n11/3/0838/016" required=""></td>
		</tr>
		<tr>
			<td>First Name:</td><td><input type="text" name="firstname" placeholder="mutiso" class="form-control" required=""></td>
		</tr>
		<tr>
			<td>Second Name:</td><td><input type="text" placeholder="brian" name="secondname" class="form-control" required=""></td>
		</tr>
		<tr>
			<td>Department:</td><td><input type="text" placeholder="computing" name="department" class="form-control" required=""></td>
		</tr>
		<tr>
			<td>Course:</td><td><input type="text" name="course" class="form-control" placeholder="computer science" required=""></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;"><input type="submit" class="btn btn-primary" name="registeruser" value="Register"></td>
		</tr>
	</table>
	<caption>Students registration</caption>
</form>