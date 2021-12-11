<?php
	require_once('../model/noticeModel.php');
	
	$result = getAllNotice();
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
		<td align="right" width="90%" colspan="5"> <a href="AdminHome.php">Home | </a><a href="../Controller/LogoutCheck.php">Logout </a></td>
		<tr><br>
			<td>ID</td>
			<td>DATE</td>
			<th>SUBJECT OF NOTICE</th>
			<th>NOTICE</th>
			<th>FILE</th>
			<th>ACTION</th>

		</tr>
		<?php while($data =mysqli_fetch_assoc($result)){ ?>

				<tr>
					<td><?=$data['id']?></td>
					<td><?=$data['date']?></td>
					<td><?=$data['subject']?></td>
					<td><?=$data['notice']?></td>
					<td><img src="../uploads/<?=$data['file']?>" alt="null" width="75" height="75"></td>
					<td>
						<a href="NoticeEdit.php?id=<?php echo $data['id']?>">EDIT</a> |
						<a href="NoticeDelete.php?id=<?php echo $data['id']?>">DELETE</a> 
					</td>
				</tr>

		<?php } ?>

	</table>
</body>
</html>