<?php
	require_once('../model/complainModel.php');
	
	$data = getComplainById($_GET['id']);
	
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
		<td align="right" width="90%" colspan="4"> <a href="AdminHome.php">Home | </a><a href="../Controller/LogoutCheck.php">Logout </a></td>
		<tr><br>
			<td>Complain No</td>
			<td>Account No</td>
			<th>Complain</th>
			<th>Response</th>
			<th>Date</th>

		</tr>

		<tr>
			<td><?=$data['complainNo']?></td>
			<td><?=$data['accountNo']?></td>
			<td><?=$data['complain']?></td>
			<td><?=$data['response']?></td>
			<td><?=$data['dateandtime']?></td>
		</tr>


	</table>

	<form method="post" action="../controller/ComplainFile.php">
		<fieldset>
			<legend>Response New</legend>
			<table>
				<tr>
					<td>Response:</td>
					<td><input type="text" name="response" value="" id="response" onkeyup="()" onblur="()"></td>
				</tr>
					<td><input type="hidden" name="id" value="<?=$data['complainNo']?>"> </td>
					<td><input type="submit" name="submit" value="Reply"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>