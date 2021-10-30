<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	session_start();

	if(isset($_REQUEST['submit'])){ 
		$counterCheck=0;
		if($_REQUEST['name'] == ""){
			echo "Invalid Name<br>";
			$counterCheck++;
		}

		 if($_REQUEST['email']==""){
			echo "Invalid Email<br>";
			$counterCheck++;
		}
		 if($_REQUEST['username']==""){
			echo "Invalid Username<br>";
			$counterCheck++;
		}
		 if($_REQUEST['nid']==""){
			echo "Invalid Nid Number<br>";
			$counterCheck++;
		}
		 if($_REQUEST['password']==""){
			echo "Invalid password<br>";
			$counterCheck++;
		}
		 if($_REQUEST['confirmpassword']==""){
			echo "Invalid Confirm Password<br>";
			$counterCheck++;
		}
		 if(!isset($_REQUEST['gender'])){
			echo "Invalid Gender<br>";
			$counterCheck++;
		}
		 if($_REQUEST['dob']==""){
			echo "Invalid Date of Birth<br>".PHP_EOL;
			$counterCheck++;
		}
		 if($_REQUEST['usertype']==""){
			echo "Invalid User Type<br>";
			$counterCheck++;
		}
		 if($_REQUEST['password'] != $_REQUEST['confirmpassword']){
			echo "Password & Confirm Password does not match!<br>";
			$counterCheck++;
		}
		if ($counterCheck == 0) {
			$data=$_REQUEST['username']."||".$_REQUEST['password']."||".$_REQUEST['name']."||".$_REQUEST['email']."||".$_REQUEST['nid']."||".$_REQUEST['dob']."||".$_REQUEST['gender']."||".$_REQUEST['usertype'].PHP_EOL;
			$fp = fopen('Userdata.txt', 'a');
			fwrite($fp, $data);
			echo 'Registration Confirm!<a href="Login.php"><br>Click here to Login!!</a>';
		}
	}

?>