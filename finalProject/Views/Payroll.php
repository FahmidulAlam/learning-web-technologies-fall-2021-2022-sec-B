<?php
	require_once('../model/userModel.php');
	
	$result = getAllUsers();
	$count = mysqli_num_rows($result);
	$totalSal=0;

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Payroll System</title>
	
</head>
<body>

	<form method="post" action="AdminProfile.php">
	<fieldset>
		<table border="1" width="100%">
			<tr>
				<td colspan="2" height="60px" width="10%"><img src="Logo.PNG" alt="FA Bank Ltd."></td>
				<td align="right" colspan="3"> <a href="AdminHome.php">Home | </a><a href="../Controller/LogoutCheck.php">Logout </a></td>
			</tr>
			
				<tr><br>
					<td>ID</td>
					<td>Employee Name</td>
					<th>Username</th>
					<th>Designation</th>
					<th>Salary</th>

		</tr>
		<?php while($data =mysqli_fetch_assoc($result)){ ?>

				<tr>
					<td><?=$data['id']?></td>
					<td><?=$data['name']?></td>
					<td><?=$data['username']?></td>
					<td><?=$data['designation']?></td>
					<td align="right"><?=$data['salary']?></td>
					
					<!-- <td>
						<a href="NoticeEdit.php?id=<?php echo $data['id']?>">EDIT</a> |
						<a href="NoticeDelete.php?id=<?php echo $data['id']?>">DELETE</a> 
					</td> -->
				</tr>

		<?php 
		$totalSal+=$data['salary'];} ?>

		<tr>
			<td colspan="5" align="right">
				<b>Total salary= <?=$totalSal?></b>
			</td>
		</tr>
			<tr>
				<td colspan="5" height="60px" align="center">Copyright © 2021</td>
			</tr>
		</table>
	</fieldset>
</body>
</html>