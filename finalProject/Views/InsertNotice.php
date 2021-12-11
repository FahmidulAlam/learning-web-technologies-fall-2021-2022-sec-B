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
	<form method="POST" action="../Controller/noticeFile.php" enctype = "multipart/form-data">
	<table border="1" width="100%">
		<tr>
			<td colspan="2" height="60px" width="10%"><img src="Logo.PNG" alt="FA Bank Ltd."></td>
			<td align="right"> <a href="AdminHome.php">Home | </a><a href="Notice.php">Notice Board | </a><a href="../Controller/LogoutCheck.php">Logout </a></td>
		</tr>
		<tr>
			<td colspan="3" height="500px">
				
					<fieldset>
						<legend><b>Upload Notice</b></legend>

									<fieldset><legend>Date</legend>
										<input type="date" name="date" value="">
									</fieldset><br>

								    <fieldset><legend>Subject of Notice</legend><input type="text" name="subject" value="" id="subject" onkeyup="()" onblur="()"></fieldset><br> 

							        <fieldset><legend>Write Notice</legend><textarea name="notice" value="notice" ></textarea></fieldset><br> 

									<fieldset><legend>File</legend>
										<input type = "file" name="file" id="file" value=""> 
									</fieldset><br>

							      <input type="submit" name="submit" value="Submit">
							      <input type="reset" name="reset"value="Reset">
					</fieldset>
				
			</td>
		</tr>
		<tr>
			<td colspan="3" height="60px" align="center">Copyright © 2021</td>
		</tr>
	</table>
</body>
</html>