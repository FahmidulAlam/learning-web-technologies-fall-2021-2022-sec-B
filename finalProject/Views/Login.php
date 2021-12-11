<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<script type="text/javascript">

		 function validateform(){  
		    var username=document.login.username.value;
		    var password=document.login.password.value;

		     if (username==null) {
		        alert("Put your username.");  
		        return false;  
		      }  
		      else if (password.length<2 || password==null){  
		        alert("Put your emauil.");  
		        return false;
		      }
		  	}

			function checkuserName(){
		        if (document.getElementById("username").value == "") {
		          	document.getElementById("userNameErr").innerHTML = "Name can't be blank";
		          	document.getElementById("userNameErr").style.color = "red";
		         	document.getElementById("username").style.borderColor = "red";
		      }else if(document.getElementById("username").value.length<3){
		          document.getElementById("username").style.borderColor = "red";
		          document.getElementById("userNameErr").style.color = "red";
		        document.getElementById("userNameErr").innerHTML = "name must be at least 3 characters long.";
		      }
		      else{
		        document.getElementById("userNameErr").innerHTML = "";
		          document.getElementById("userNameErr").style.color = "red";
		        document.getElementById("username").style.borderColor = "black";
		      }
		        }

			function checkPass(){
          if (document.getElementById("password").value == "") {
          document.getElementById("passErr").innerHTML = "Password can't be blank";
          document.getElementById("passErr").style.color = "red";
          document.getElementById("password").style.borderColor = "red";
      }else if(document.getElementById("password").value.length<2){
          document.getElementById("password").style.borderColor = "red";
          document.getElementById("passErr").style.color = "red";
        document.getElementById("passErr").innerHTML = "Password must be at least 2 characters long.";
      }
      else{
        document.getElementById("passErr").innerHTML = "";
          document.getElementById("passErr").style.color = "red";
        document.getElementById("password").style.borderColor = "black";
      }
        }

	</script>
	
</head>
<body>
	<form method="post" action="../Controller/LoginCheck.php" name="login" onsubmit="validateform()">
	<table border="1" width="100%">
		<tr>
			<td colspan="2" height="60px" width="10%"><img src="Logo.PNG" alt="FA Bank Ltd."></td>
			 <td align="right"><a href="AdminHome.php">Home | </a><a href="AdminRegistration.php">Registration | </a> <a href="Login.php">Login </a></td>
		</tr>
		<tr>
			<td colspan="3" height="500px">
					<fieldset>
						<legend><b>Login</b></legend>
							      <fieldset><legend>Username</legend><input type="text" name="username" value="" id="username" onkeyup="checkuserName()" onblur="checkuserName()"> 
							      	<span id="userNameErr"></span><br>
							      </fieldset>
							      <fieldset><legend>Password</legend><input type="password" name="password" value="" id="password" onkeyup="checkPass()" onblur="checkPass()">
							      <span id="passErr"></span><br>
							      </fieldset><br>
							      <input type="submit" name="submit" value="Login">
					</fieldset>
			</td>
		</tr>
		<tr>
			<td colspan="3" height="60px" align="center">Copyright © 2021</td>
		</tr>
	</table>
</body>
</html>