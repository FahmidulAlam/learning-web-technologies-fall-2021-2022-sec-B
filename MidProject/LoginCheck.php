<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	session_start();

	if(isset($_REQUEST['submit'])){ 
		$counterCheck=0;

		if($_REQUEST['username'] == ""){
			echo "Invalid User Name<br>";
			$counterCheck++;
		}

		if($_REQUEST['password'] == ""){
			echo "Invalid Password<br>";
			$counterCheck++;
		}
	
		if ($counterCheck == 0)
		{
			$success = 0;

			$userfile = fopen('Userdata.txt', 'r');

			while(!feof($userfile)){
				$data = fgets($userfile);
					$myuser = explode('||', $data);
					if(trim($myuser[0]) == $_REQUEST['username'] && trim($myuser[1]) == $_REQUEST['password']){
						setcookie('flag', 'true', time()+3600, '/');
						header('location: AdminProfile.php');
						$success++;
					}
				}
			}

			if ($success == 0)
			{
				echo 'Invalid Login!<a href="Login.php"><br>Click here to Login again!!</a>';
			}

		}
?>