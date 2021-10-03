<?php

	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['degree'];

		if($name == ""){
			echo "Null";
		}
		else{
			echo "Your name is:".$name;
		}
	}
?>

<html>
<head>
	<title>Degree Form</title>
</head>
<body>
	<meta charset="utf-8">
	<form action="post">
		<fieldset>
		<legend>Degree</legend>
		<input type="checkbox" name="option[]" value=""> SSC
		<input type="checkbox" name="option[]" value=""> HSC
		<input type="checkbox" name="option[]" value=""> BSc
		</fieldset>
		<input type="submit" name="submit" value="Submit">
		
	</form>
</body>
</html>