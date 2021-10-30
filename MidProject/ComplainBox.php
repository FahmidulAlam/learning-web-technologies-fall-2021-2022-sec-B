<?php

	 if(!isset($_COOKIE['flag'])){
	 	header('location: AdminHome.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Complain Box</title>
	
</head>
<body>
	<form method="post" action="AdminProfile.php">
	<table border="1" width="100%">
		<tr>
			<td colspan="2" height="60px" width="20%"><img src="Capture.PNG" alt="FA Bank Ltd."></td>
			 <td align="right"> <a href="AdminHome.php">Home | </a><a href="LogoutCheck.php">Logout </a></td>
		</tr>
		<tr>
			<td align="center" colspan="3" height="500px">
				Complains.
			</td>
		</tr>
		<tr>
			<td colspan="3" height="60px" align="center">Copyright © 2021</td>
		</tr>
	</table>
</body>
</html>