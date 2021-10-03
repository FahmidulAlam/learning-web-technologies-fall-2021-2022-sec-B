<?php

	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['blood'];

		if($name == ""){
			echo "Null";
		}
		else{
			echo "Your blood group is:".$name;
		}
	}
?>

<html>
<head>
	<title>Blood Group Form</title>
</head>
<body>
	<form action="post">
		Blood Group
		<select name="blood">
			<option value="">A+</option>
			<option value="">A-</option>
			<option value="">O+</option>
			<option value="">O-</option>
			<option value="">B+</option>
			<option value="">B-</option>
			<option value="">AB+</option>
			<option value="">AB-</option>
			<option value="" selected>A+</option>
		</select>
		<p>______________________</p>
		<br><input type="submit" name="submit" value="Submit">
		
	</form>
</body>
</html>