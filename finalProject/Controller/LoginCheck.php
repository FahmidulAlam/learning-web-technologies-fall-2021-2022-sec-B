<?php 
	require_once('../model/userModel.php');
	session_start();

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];


	
		if($username != ""){
			if($password != ""){
				if($designation = "Admin"){

				$status = validate($username, $password);

				if($status){
					setcookie('flag', 'true', time()+3600, '/');
					header('location: ../Views/AdminProfile.php');
				}else{
					// header('location: ../Views/Login.php');

					echo "Wrong user name or password!";
				}

			}else{
				echo "invalid designation...";
			}
		}else{
			echo "invalid password...";
		}
	}else{
			echo "invalid username...";
		}

	}

?>