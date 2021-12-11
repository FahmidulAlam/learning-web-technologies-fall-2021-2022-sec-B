<?php 
	if(!isset($_COOKIE['flag'])){
	 	header('location: AdminHome.php');
	}
	//print_r($user);
?>

<!DOCTYPE html>
<html>

<head>
	<title>Admin Registration</title>
	<script type="text/javascript">
		 function validateform(){  
		    var name=document.registration.name.value;
		    var email=document.registration.email.value; 
		    var username=document.registration.username.value;  
		    var nid=document.registration.nid.value;
		    var password=document.registration.password.value;  
		    var confirmpassword=document.registration.confirmpassword.value; 
		    var gender=document.registration.gender.value;
		    var dob=document.registration.gender.value;
		    var usertype=document.registration.usertype.value;
		      
		      if (name==null || name=="") {
		        alert("Put your name.");  
		        return false;  
		      }  
		      else if (email==null || email==""){  
		        alert("Put your email.");  
		        return false;  
		      }
		       else if (username.length<3) {
		        alert("user name must be at least 3 characters long.");  
		        return false;
		      }
		      else if(nid.length<3){  
		        alert("Password must be at least 3 characters long.");  
		        return false;  
		      } 
		      else if(password.length<2){  
		        alert("Password must be at least 2 characters long.");  
		        return false;  
		      } 
		      else if(gender==null){  
		        alert("Put your gender.");  
		        return false;  
		      }
		      else if(dob==null){  
		        alert("Put your Date of Birth.");  
		        return false;  
		      } 
		      else if(usertype==null){  
		        alert("Choose user type.");  
		        return false;  
		      }  
		      
		}

	   		function checkName(){
		        if (document.getElementById("name").value == "") {
			    document.getElementById("nameErr").innerHTML = "Name can't be blank";
			    document.getElementById("nameErr").style.color = "red";
			    document.getElementById("name").style.borderColor = "red";
			    }
		     	else if(document.getElementById("name").value.length<3){
				document.getElementById("name").style.borderColor = "red";
				document.getElementById("nameErr").style.color = "red";
				document.getElementById("nameErr").innerHTML = "name must be at least 3 characters long.";
		     	}
		      	else{
		        document.getElementById("nameErr").innerHTML = "";
		        document.getElementById("nameErr").style.color = "red";
		        document.getElementById("name").style.borderColor = "black";
		        }
	    	}
   		
   			function checkuserName(){
          		if (document.getElementById("username").value == "")
          		{
		        document.getElementById("userNameErr").innerHTML = "Name can't be blank";
		        document.getElementById("userNameErr").style.color = "red";
		        document.getElementById("username").style.borderColor = "red";
      			}
			    else if(document.getElementById("username").value.length<3)
			    {
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
          		if (document.getElementById("password").value == "")
          		{
		        document.getElementById("passErr").innerHTML = "Password can't be blank";
		        document.getElementById("passErr").style.color = "red";
		        document.getElementById("password").style.borderColor = "red";
      			}
      			else if(document.getElementById("password").value.length<2){
		        document.getElementById("password").style.borderColor = "red";
		        document.getElementById("passErr").style.color = "red";
		        document.getElementById("passErr").innerHTML = "Password must be at least 8 characters long.";
      			}
      			else
      			{
	        	document.getElementById("passErr").innerHTML = "";
	          	document.getElementById("passErr").style.color = "red";
	        	document.getElementById("password").style.borderColor = "black";
      			}
        	}

        	function passwordVerify(){
  				if (document.getElementById("confirmpassword").value == "")
  				{
	    		document.getElementById("con_passErr").innerHTML = "Confrim Password can't be blank";
	          	document.getElementById("con_passErr").style.color = "red";
	          	document.getElementById("confirmpassword").style.borderColor = "red";
	  			}
 				else if (document.getElementById("password").value === document.getElementById("confirmpassword").value)
				{
				document.getElementById("con_passErr").innerHTML = "";
				document.getElementById("confirmpassword").style.borderColor = "green";
				document.getElementById("con_passErr").innerHTML = "password matched";
				document.getElementById("con_passErr").style.color = "green";
				return true;
				}
 				else
 				{
			    document.getElementById("con_passErr").innerHTML = "password doesn't match ";
			    document.getElementById("con_passErr").style.color = "red";
			    document.getElementById("confirmpassword").style.borderColor = "red";
			    return false;
				}
			}

    		function ValidateEmail(){
        		var mailformat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

		       if(document.getElementById("email").value.match(mailformat))
		        {
			        // document.getElementById("emailErr").innerHTML = "";
			        document.getElementById("email").style.borderColor = "green";
			        document.getElementById("emailErr").innerHTML = "valid email";
			        document.getElementById("emailErr").style.color = "green";
			        return true;
		        }
		        else
		        {
			        document.getElementById("emailErr").innerHTML = "Email can't be blank!";
			        document.getElementById("emailErr").style.color = "red";
			        document.getElementById("email").style.borderColor = "red";
			        return false;
		    	}
		    }
	</script>
</head>

<body>
	<form method="post" action="../Controller/InsertEmployeeCheck.php" name="registration" onsubmit="validateform()" enctype = "multipart/form-data">
	<table border="1" width="100%">
		<tr>
			<td colspan="2" height="60px" width="10%"><img src="Logo.PNG" alt="FA Bank Ltd."></td>
			 <td align="right"> <a href="AdminHome.php">Home | </a><a href="AdminRegistration.php">Registration | </a> <a href="Login.php">Login </a></td>
		</tr>
		<tr>
			<td colspan="3" height="500px">

					<fieldset><legend><b>REGISTRATION</b></legend>

						<fieldset><legend>Name</legend>
							<input type="text" name="name" id="name" value="" onkeyup="checkName()" onblur="checkName()">
                        	<span id="nameErr"></span><br> 
						</fieldset><br>

						<fieldset><legend>Username</legend>
							<input type="text" name="username" id="username" value="" onkeyup="checkuserName()" onblur="checkuserName()">
                        	<span id="userNameErr"></span>
						</fieldset><br>

						<fieldset><legend>Password</legend>
							<input type="password" name="password" id="password" value="" onkeyup="checkPass()" onblur="checkPass()">
                       		<span id="passErr"></span>
						</fieldset><br>

						<fieldset><legend>Confirm Password</legend>
							<input type="password" name="confirmpassword" id= "confirmpassword" value="" onkeyup="passwordVerify()" onblur="passwordVerify()">
                        	<span id="con_passErr"></span>
						</fieldset><br>

						<fieldset>
							<legend>Gender</legend>
							<input type="radio" name="gender" value="male"> Male
							<input type="radio" name="gender" value="female"> Female
							<input type="radio" name="gender" value="other"> Other
						</fieldset><br>

						<fieldset><legend>Blood Group</legend>
							<select name="bg">
								<!-- <option value="">Choose your blood group.</option> -->
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="">O+</option>
								<option value="">O-</option>
								<option value="">B+</option>
								<option value="">B-</option>
								<option value="">AB+</option>
								<option value="">AB-</option>
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

						<fieldset><legend>Designation</legend>
							<input type="radio" name="designation" value="Admin"> Admin
							<input type="radio" name="designation" value="Manager"> Manager
							<input type="radio" name="designation" value="Employee"> Employee
						</fieldset><br>

						<fieldset><legend>Salary</legend>
							<input type = "float" name="salary" id="salary" value=""> 
						</fieldset><br>
					
						<fieldset><legend>Picture</legend>
							<input type = "file" name="file" id="file" value="file"> 
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