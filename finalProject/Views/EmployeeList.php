<?php
	require_once('../model/empModel.php');
	if(!isset($_COOKIE['flag'])){
	 	header('location: AdminHome.php');
	}
	$result = getAllEmp();
	$count = mysqli_num_rows($result);
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User list</title>
</head>
<body>
	
	<table border="1" align="center">
		<td height="60px" width="10%"><img src="Logo.PNG" alt="FA Bank Ltd."></td>
		<td align="right" width="90%" colspan="13"> <a href="AdminHome.php">Home | </a><a href="../Controller/LogoutCheck.php">Logout </a></td>
		<tr><br>
			<td>ID</td>
			<th>NAME</th>
			<td>USERNAME</td>
			<th>PASSWORD</th>
			<th>CGENDER</th>
			<th>BLOOD GROUP</th>
			<th>DATE OF BIRTH</th>
			<th>ADDRESS</th>
			<th>EMAIL</th>
			<th>EDUCATION</th>
			<th>DESIGNATION</th>
			<th>SALARY</th>
			<th>PICTURE</th>
			<th>ACTION</th>

		</tr>
		<?php while($data =mysqli_fetch_assoc($result)){ ?>

				<tr>
					<td><?=$data['id']?></td>
					<td><?=$data['name']?></td>
					<td><?=$data['username']?></td>
					<td><?=$data['password']?></td>
					<td><?=$data['gender']?></td>
					<td><?=$data['bg']?></td>
					<td><?=$data['dob']?></td>
					<td><?=$data['address']?></td>
					<td><?=$data['email']?></td>
					<td><?=$data['education']?></td>
					<td><?=$data['designation']?></td>
					<td><?=$data['salary']?></td>
					<td><img src="../uploads/<?=$data['picture']?>" alt="null" width="75" height="75"></td>
					<td>
						<a href="empEdit.php?id=<?php echo $data['id']?>">EDIT</a> |
						<a href="empDelete.php?id=<?php echo $data['id']?>">DELETE</a> 
					</td>
				</tr>

		<?php } ?>

	</table>
</body>
</html>