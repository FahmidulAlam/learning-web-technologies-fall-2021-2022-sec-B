<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Notice</title>
	
</head>
<body>
	<form method="post" action="Notice.php">
	<table border="1" width="100%">
		<tr>
			<td colspan="2" height="60px" width="20%"><img src="Logo.PNG" alt="FA Bank Ltd."></td>
			 <td align="right"> <a href="AdminHome.php">Home | </a><a href="Registration.php">Registration |</a><a href="Login.php">Login </a></td>
		</tr>
		<tr>
			<td align="center" colspan="3" height="500px">
				Notice:
				<img src="upload/<?=$_SESSION['myNotice']?>"  width='300px' height='500px'>
			</td>
		</tr>
		<tr>
			<td colspan="3" height="60px" align="center">Copyright © 2021</td>
		</tr>
	</table>
</body>
</html>