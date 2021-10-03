<?php

	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['myEmail'];

		if($name == ""){
			echo "Null";
		}
		else{
			echo "Your Email is:".$name;
		}
	}
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Email Form</title>
</head>
<body>
	<fieldset>
		<legend>Email</legend>>
		<form method="post">
			Email<br> <input type="email" name="myEmail" value="" required>
			<button <i>i</i></button>
			<br><input type="submit" name="myEmail" value="Submit">
		</form>
</fieldset>
</body>
</html>