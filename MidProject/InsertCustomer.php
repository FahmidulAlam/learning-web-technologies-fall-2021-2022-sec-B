<!DOCTYPE html>
<html>
<head>
	<title>Insert Emplyee</title>
	
</head>
<body>
	<form method="post" action="InsertCustomerCheck.php">
	<table border="1" width="100%">
		<tr>
			<td colspan="2" height="60px" width="10%"><img src="Logo.PNG" alt="FA Bank Ltd."></td>
			 <td align="right"> <a href="AdminHome.php">Home | </a><a href="AdminRegistration.php">Registration | </a> <a href="LogoutCheck.php">Logout </a> </a></td>
		</tr>
		<tr>
			<td colspan="3" height="500px">

					<fieldset>
						<legend><b>Insert Customer</b></legend>
								  <fieldset><legend>ID</legend><input type="text" name="id" value=""></fieldset><br> 
							      <fieldset><legend>Name</legend><input type = "text" name="name" value=""></fieldset><br>
							      <fieldset>
							      	<legend>Customer Type</legend>
										<select name="customerType">
											<option value="loan">Loan Acc Customer</option>
											<option value="fixed">Fix Acc Customer</option>
											<option value="savings">Savings Acc Customer</option>
										</select>
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