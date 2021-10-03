<?php

	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['DoB'];

		if($name == ""){
			echo "Null";
		}
		else{
			echo "Your DoB is:".$name;
		}
	}
?>

<html>
<head>
	<title>DateOfBirth Form</title>
</head>
<body>
	<form action="post">
	<fieldset>
		<legend>Date of Birth</legend>
		<br> <input type="date" name="DoB" value="">
		<br><p>__________________________</p>
		<br><input type="submit" name="DoB" value="Submit">
	</fieldset>	
	</form>
</body>
</html>