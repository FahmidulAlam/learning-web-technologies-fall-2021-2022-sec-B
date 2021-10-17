<?php 
	session_start();

	if(isset($_REQUEST['submit'])){
		$userid = $_REQUEST['userid'];
		$password = $_REQUEST['password'];
	
		if($userid != ""){
			if($password != ""){
				$myfile = fopen('userfile.txt', 'r');

				while(!feof($myfile)){
					$data = fgets($myfile);
					$myuser = explode('|', $data);
					if(trim($myuser[0]) == $userid && trim($myuser[1]) == $password){
						setcookie('flag', 'true', time()+3000, '/');
						header('location: adminHome.php');
					}
				}

				echo "invalid username/password";
					

			}else{
				echo "invalid password...";
			}
		}else{
			echo "invalid userid";
		}
	}

?>