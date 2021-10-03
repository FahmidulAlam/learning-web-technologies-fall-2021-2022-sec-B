<?php

	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['gender'];

		if($name == ""){
			echo "Null";
		}
		else{
			echo "Your gender is:".$name;
		}
	}
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Gender Form</title>
</head>
<body>
	<form action="post">
		<fieldset>
		<legend>Gender</legend>
		<input type="radio" name="gender" value=""> Male
		<input type="radio" name="gender" value=""> Female
		<input type="radio" name="gender" value=""> Other
		</fieldset>
		<input type="submit" name="gender" value="Submit">
		
	</form>
</body>
</html>