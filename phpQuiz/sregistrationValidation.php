<?php 
	session_start();

	$password = $confirmPassword

	if(isset($_REQUEST['submit'])){
		$userid = $_REQUEST['userid'];
		$password = $_REQUEST['password'];
		$confirmPassword = $_REQUEST['confirmPassword'];

		if($userid != ""){
			if($password != ""){
				if($confirmPassword != ""){
					if($name != ""){
						if($userType != ""){
											

					$myfile = fopen('userfile.txt', 'a');
					$user = $userid."|".$password."|".$confirmPassword."|".$name."|".$userType."\r\n";
					fwrite($myfile, $user);
					fclose($myfile);

					header('location: login.php');
				}else{
					echo "invalid name";
				}
			}else{
				echo "invalid password";
			}
		}else{
			echo "invalid userid";
		}
	}else{
		echo "invalid userType";
	}
}
?>