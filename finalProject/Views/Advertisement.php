<?php

	 if(!isset($_COOKIE['flag'])){
	 	header('location: AdminHome.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Advertisement</title>
	
</head>
<body>
	<form method="POST" action="../Controller/myfile.php" enctype="multipart/form-data">
	<table border="1" width="100%">
		<tr>
			<td colspan="2" height="60px" width="10%"><img src="Logo.PNG" alt="FA Bank Ltd."></td>
			<td align="right"> <a href="AdminHome.php">Home | </a><a href="Event.php">Event | </a><a href="../Controller/LogoutCheck.php">Logout </a></td>
		</tr>
		<tr>
			<td align="center" colspan="3" height="500px">
				<a href="InsertEvent.php">Insert Event || </a> <a href="EventList.php">Update Event </a>
			</td>
		</tr>
		<tr>
			<td colspan="3" height="60px" align="center">Copyright © 2021</td>
		</tr>
	</table>
</body>
</html>