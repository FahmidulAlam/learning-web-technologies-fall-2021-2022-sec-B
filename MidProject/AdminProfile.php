<?php

	 if(!isset($_COOKIE['flag'])){
	 	header('location: AdminHome.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Profile</title>
	
</head>
<body>
	<form method="post" action="AdminProfile.php">
	<table border="1" width="100%">
		<tr>
			<td colspan="2" height="60px" width="10%"><img src="Logo.PNG" alt="FA Bank Ltd."></td>
			 <td align="right"> <a href="AdminHome.php">Home | </a><a href="AdminRegistration.php">Registration | </a> <a href="LogoutCheck.php">Logout </a></td>
		</tr>
		<tr>
			<td colspan="3" height="500px">
				<b>Welcome ADMIN.</b> Choose your option below:<br>
				<ul>
					<li><a href="CustomerDetails.php">Customer </a><br></li>
					<li><a href="EmployeeDetails.php">Employee </a><br></li>
					<li><a href="NoticeBoard.php">Notice Board </a><br></li>
					<li><a href="ComplainBox.php">Complain Box </a><br></li>
					<li><a href="Payroll.php">Payroll </a><br></li>
					<li><a href="Advertisement.php">Advertisement </a><br></li>
					<li><a href="BankInfo.php">Bank Info </a><br></li>

				</ul>
			</td>
		</tr>
		<tr>
			<td colspan="3" height="60px" align="center">Copyright © 2021</td>
		</tr>
	</table>
</body>
</html>

