<?php 
	require_once('../model/noticeModel.php');
	if(!isset($_COOKIE['flag'])){
	 	header('location: AdminHome.php');
	}
	$id = $_GET['id'];
	$user = getNoticeById($id);
	//print_r($user);
?>

<html>
<head>
	<title> Edit Notice</title>
</head>
<body>
	<center>
		<a href="home.php">Back</a>|
		<a href="../controller/logout.php">Logout</a>
	</center>
	<form method="post" action="../controller/noticeUpdate.php" enctype = "multipart/form-data">
		<fieldset>
			<legend>Edit New</legend>
			<table>
				<tr>
					<td>Date:</td>
					<td><input type="date" name="date" value="<?=$user['date']?>"></td>
				</tr>
				<tr>
					<td>Subject:</td>
					<td><input type="text" name="subject" value="<?=$user['subject']?>" id="name" onkeyup="()" onblur="()"></td>
				</tr>
				<tr>
					<td>Notice:</td>
					<td><input type="text" name="notice" value="<?=$user['notice']?>" id="name" onkeyup="()" onblur="()"></td>
				</tr>
				<tr>
					<td>File:</td>
					<td><input type = "file" name="file" id="file" value="file"></td>
				</tr>
					<td><input type="hidden" name="id" value="<?=$id?>"> </td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>