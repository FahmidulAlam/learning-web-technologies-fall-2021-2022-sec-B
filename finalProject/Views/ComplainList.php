<?php
	require_once('../model/complainModel.php');
	
	$result = getAllComplain();
	//$count = mysqli_num_rows($result);
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User list</title>
</head>
<body>
	
	<table border="1" align="center">
		<td height="60px" width="10%" ><img src="Logo.PNG" alt="FA Bank Ltd."></td>
		<td align="right" width="90%" colspan="5"> <a href="AdminHome.php">Home | </a><a href="../Controller/LogoutCheck.php">Logout </a></td>
		<tr><br>
			<td>Complain No</td>
			<td>Account No</td>
			<th>Complain</th>
			<th>Response</th>
			<th>Date</th>
			<th>ACTION</th>

		</tr>
		<?php while($data =mysqli_fetch_assoc($result)){ ?>

				<tr>
					<td><?=$data['complainNo']?></td>
					<td><?=$data['accountNo']?></td>
					<td><?=$data['complain']?></td>
					<td><?=$data['response']?></td>
					<td><?=$data['dateandtime']?></td>
					<td>
						<a href="ComplainReply.php?id=<?php echo $data['complainNo']?>">REPLY</a> |
						<a href="ComplainDelete.php?id=<?php echo $data['complainNo']?>">DELETE</a> 
					</td>
				</tr>

		<?php } ?>

	</table>
</body>
</html>