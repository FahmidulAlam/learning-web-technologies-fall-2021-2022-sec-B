<?php
	require_once('../model/cusModel.php');
	
	$result = getAllCus();
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
		<td align="right" width="90%" colspan="10"> <a href="AdminHome.php">Home | </a><a href="../Controller/LogoutCheck.php">Logout </a></td>
		<tr><br>
			<td>ID</td>
			<td>CUSTOMER TYPE</td>
			<th>CUSTOMER NAME</th>
			<th>GENDER</th>
			<th>BLOOD GROUP</th>
			<th>DATE OF BIRTH</th>
			<th>ADDRESS</th>
			<th>EMAIL</th>
			<th>EDUCATION</th>
			<th>PICTURE</th>
			<th>ACTION</th>

		</tr>
		<?php while($data =mysqli_fetch_assoc($result)){ ?>

				<tr>
					<td><?=$data['requestid']?></td>
					<td><?=$data['type']?></td>
					<td><?=$data['name']?></td>
					<td><?=$data['gender']?></td>
					<td><?=$data['bg']?></td>
					<td><?=$data['dob']?></td>
					<td><?=$data['address']?></td>
					<td><?=$data['email']?></td>
					<td><?=$data['education']?></td>
					<td><img src="../uploads/<?=$data['pictures']?>" alt="null" width="75" height="75"></td>
					<td>
						<a href="CusEdit.php?id=<?php echo $data['requestid']?>">EDIT</a> |
						<a href="CusDel.php?id=<?php echo $data['requestid']?>">DELETE</a> 
					</td>
				</tr>

		<?php } ?>

	</table>
</body>
</html>