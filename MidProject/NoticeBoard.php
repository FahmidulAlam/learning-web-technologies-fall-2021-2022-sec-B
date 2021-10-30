<?php

	 if(!isset($_COOKIE['flag'])){
	 	header('location: AdminHome.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>NoticeBoard</title>
	
</head>
<body>
	<form method="POST" action="noticeFile.php" enctype="multipart/form-data">
	<table border="1" width="100%">
		<tr>
			<td colspan="2" height="60px" width="10%"><img src="Logo.PNG" alt="FA Bank Ltd."></td>
			<td align="right"> <a href="AdminHome.php">Home | </a><a href="Notice.php">Notice Board | </a><a href="LogoutCheck.php">Logout </a></td>
		</tr>
		<tr>
			<td colspan="3" height="500px">
				
					Upload Notice: <input type="file" name="noticeFile" > <br>
					<input type="submit" name="Submit" value="Submit">	
				
			</td>
		</tr>
		<tr>
			<td colspan="3" height="60px" align="center">Copyright © 2021</td>
		</tr>
	</table>
</body>
</html>