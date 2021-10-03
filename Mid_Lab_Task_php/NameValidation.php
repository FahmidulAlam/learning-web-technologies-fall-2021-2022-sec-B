<?php

	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['myname'];

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
	<meta charset="utf-8">
	<title>Name Form</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>name</legend>>
			Name<br> <input type="text" name="myname" value="">
			<br><input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>