<!DOCTYPE html>
<html>
<head>
	<title>Admin Registration</title>
	
</head>
<body>
	<form method="post" action="RegistrationCheck.php">
	<table border="1" width="100%">
		<tr>
			<td colspan="2" height="60px" width="10%"><img src="Logo.PNG" alt="FA Bank Ltd."></td>
			 <td align="right"> <a href="AdminHome.php">Home | </a><a href="AdminRegistration.php">Registration | </a> <a href="Login.php">Login </a></td>
		</tr>
		<tr>
			<td colspan="3" height="500px">

					<fieldset>
						<legend><b>REGISTRATION</b></legend>
								  <fieldset><legend>Name</legend><input type="text" name="name" value=""></fieldset><br> 
							      <fieldset><legend>Email</legend><input type = "text" name="email" value=""></fieldset><br>
							      <fieldset><legend>Username</legend><input type="text" name="username" value=""></fieldset><br>
							      <fieldset><legend>NID Number</legend><input type="intiger" name="nid" value=""></fieldset><br>
							      <fieldset><legend>Password</legend><input type="password" name="password" value=""></fieldset><br>
							      <fieldset><legend>Confirm Password</legend><input type="password" name="confirmpassword" value=""></fieldset><br>
							      <fieldset>
							      	<legend>Gender</legend>
							      	<input type="radio" name="gender" value="male"> Male
									<input type="radio" name="gender" value="female"> Female
									<input type="radio" name="gender" value="other"> Other
							      </fieldset><br>
							      <fieldset>
							      	<legend>Date of Birth</legend>
							      	 <input type="date" name="dob" value="">
							      </fieldset><br>
							      <fieldset>
							      	<legend>User Type</legend>
										<select name="usertype">
											<option value="admin">Admin</option>
											<option value="employee">Employee</option>
											<option value="customer">Customer</option>
										</select>
							      </fieldset><br>
							      <input type="submit" name="submit" value="Submit">
							      <input type="reset" name="reset" value="Reset">
					</fieldset>
			</td>
		</tr>
		<tr>
			<td colspan="3" height="60px" align="center">Copyright © 2021</td>
		</tr>
	</table>
</body>
</html>