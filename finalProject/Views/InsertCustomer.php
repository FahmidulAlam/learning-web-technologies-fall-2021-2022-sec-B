<?php
	if(!isset($_COOKIE['flag'])){
	 	header('location: AdminHome.php');
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Insert Customer</title>
	
</head>
<body>
	<form method="post" action="../Controller/InsertCustomerCheck.php" enctype = "multipart/form-data">
	<table border="1" width="100%">
		<tr>
			<td colspan="2" height="60px" width="10%"><img src="Logo.PNG" alt="FA Bank Ltd."></td>
			 <td align="right"> <a href="AdminHome.php">Home | </a><a href="AdminRegistration.php">Registration | </a> <a href="../Controller/LogoutCheck.php">Logout </a> </a></td>
		</tr>
		<tr>
			<td colspan="3" height="500px">

					<fieldset>
						<legend><b>Insert Customer</b></legend>

								<fieldset><legend>Customer Type</legend>
										<select name="type">
											<option value="loan">Loan Acc Customer</option>
											<option value="fixed">Fix Acc Customer</option>
											<option value="savings">Savings Acc Customer</option>
											<option value="" selected>Choose your Customer Type</option>
										</select>
							        </fieldset><br>

								    <fieldset><legend>Name</legend><input type="text" name="name" value="" id="name" onkeyup="()" onblur="()"></fieldset><br> 

							        <fieldset><legend>Password</legend><input type="password" name="password" value="" id="password" onkeyup="()" onblur="()"></fieldset><br>
							        

							        <fieldset><legend>Gender</legend>
										<input type="radio" name="gender" value="male"> Male
										<input type="radio" name="gender" value="female"> Female
										<input type="radio" name="gender" value="other"> Other
							        </fieldset><br>

							        <fieldset><legend>Blood Group</legend>
										<select name="bg">
											<option value="A+">A+</option>
											<option value="A-">A-</option>
											<option value="O+">O+</option>
											<option value="O-">O-</option>
											<option value="B+">B+</option>
											<option value="B-">B-</option>
											<option value="AB+">AB+</option>
											<option value="AB-">AB-</option>
											<option value="" selected>Choose your blood group</option>
										</select>
									</fieldset><br>

									<fieldset><legend>Date of Birth</legend>
										<input type="date" name="dob" value="">
									</fieldset><br>

									<fieldset><legend>Address</legend>
										<input type="text" name="address" id="address" value="">
									</fieldset><br>

									<fieldset><legend>Email</legend>
										<input type = "text" name="email" id="email" value=""  onkeyup="ValidateEmail()" onblur="ValidateEmail()">
										<span id="emailErr"></span><br> 
									</fieldset><br>

									<fieldset><legend>Education</legend>
										<input type="radio" name="education" value="SSC"> SSC
										<input type="radio" name="education" value="HSC"> HSC
										<input type="radio" name="education" value="BSc"> BSc
									</fieldset><br>

									<fieldset><legend>Picture</legend>
										<input type = "file" name="file" id="file" value="file"> 
									</fieldset><br>

							      <input type="submit" name="submit" value="Submit">
							      <input type="reset" name="reset"value="Reset">
					</fieldset>
			</td>
		</tr>
		<tr>
			<td colspan="3" height="60px" align="center">Copyright © 2021</td>
		</tr>
	</table>
</body>
</html>