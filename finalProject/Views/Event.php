<?php
	require_once('../model/eventModel.php');
	
	$result = getAllEvent();
	$count = mysqli_num_rows($result);
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Event</title>
</head>
<body>
	
	<table border="1" align="center">
		<td height="60px" width="10%"><img src="Logo.PNG" alt="FA Bank Ltd."></td>
		<td align="right" width="90%" colspan="4"> <a href="AdminHome.php">Home | </a><a href="../Controller/LogoutCheck.php">Logout </a></td>
		<tr><br>
			<td>ID</td>
			<td>DATE</td>
			<th>SUBJECT OF EVENT</th>
			<th>EVENT</th>
			<th>FILE</th>

		</tr>
		<?php while($data =mysqli_fetch_assoc($result)){ ?>

				<tr>
					<td><?=$data['id']?></td>
					<td><?=$data['date']?></td>
					<td><?=$data['subject']?></td>
					<td><?=$data['eventDetails']?></td>
					<td><img src="../uploads/<?=$data['file']?>" alt="null" width="75" height="75"></td>
					
				</tr>

		<?php } ?>

	</table>
</body>
</html>