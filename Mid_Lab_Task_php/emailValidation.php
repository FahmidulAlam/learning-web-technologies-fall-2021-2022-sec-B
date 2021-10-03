<?php

	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['myEmail'];

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
	<title>Email Form</title>
</head>
<body>
	<form>
		Email<br> <input type="email" name="myEmail" value="" required>
		<button <i >i</i></button>
		<br><input type="submit" name="myEmail" value="Submit">
	</form>
</body>
</html>