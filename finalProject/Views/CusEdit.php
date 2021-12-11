<?php 
	require_once('../model/CusModel.php');
	if(!isset($_COOKIE['flag'])){
	 	header('location: AdminHome.php');
	}
	$id = $_GET['id'];
	$user = getCusById($id);
	//print_r($user);
?>

<html>
<head>
	<title> Edit Customer</title>
</head>
<body>
	<center>
		<a href="home.php">Back</a>|
		<a href="../controller/logout.php">Logout</a>
	</center>
	<form method="post" action="../controller/CusUpdate.php" enctype = "multipart/form-data">
		<fieldset>
			<legend>Edit New</legend>
			<table>
				<tr>
					<td>Customer Type: </td>
					<td><select name="type">
							<option value="loan">Loan Acc Customer</option>
							<option value="fixed">Fix Acc Customer</option>
							<option value="savings">Savings Acc Customer</option>
							<option value="" selected>Choose your Customer Type</option>
						</select>
				</tr>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value="<?=$user['name']?>" id="name" onkeyup="()" onblur="()"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value="<?=$user['password']?>" id="password" onkeyup="()" onblur="()"></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td><input type="radio" name="gender" value="male"> Male
						<input type="radio" name="gender" value="female"> Female
						<input type="radio" name="gender" value="other"> Other</td>
				</tr>
				<tr>
					<td>Blood Group:</td>
					<td><select name="bg">
						<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
							<option value="" selected>Choose your blood group</option>
					</select></td>
				</tr>
				<tr>
					<td>Date of Birth:</td>
					<td><input type="date" name="dob" value="<?=$user['dob']?>"></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td><input type="text" name="address" id="address" value="<?=$user['address']?>"></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type = "text" name="email" id="email" value="<?=$user['email']?>"></td>
				</tr>
				<tr>
					<td>Education:</td>
					<td><input type="radio" name="education" value="SSC"> SSC
						<input type="radio" name="education" value="HSC"> HSC
						<input type="radio" name="education" value="BSc"> BSc</td>
				</tr>
				<tr>
					<td>Picture:</td>
					<td><input type = "file" name="file" id="file" value="file"></td>
				</tr>

				<tr>
					<td><input type="hidden" name="id" value="<?=$id?>"> </td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>