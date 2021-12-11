<?php 
	require_once('../model/cusModel.php');
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	session_start();

	if(isset($_REQUEST['submit'])){ 
		$counterCheck=0;

		 if(!isset($_REQUEST['type'])){
			echo "Invalid TYPE<br>";
			$counterCheck++;
		}
		if($_REQUEST['name']==""){
			echo "Invalid Name<br>";
			$counterCheck++;
		}
		if($_REQUEST['password']==""){
			echo "Invalid password<br>";
			$counterCheck++;
		}
		if(!isset($_REQUEST['gender'])) {
			echo "Invalid gender<br>";
			$counterCheck++;
		}
		if($_REQUEST['bg']==""){
			echo "Invalid BG<br>";
			$counterCheck++;
		}
		if($_REQUEST['address']==""){
			echo "Invalid address<br>";
			$counterCheck++;
		}
		if($_REQUEST['email'] == ""){
			echo "Invalid Email<br>";
			$counterCheck++;
		}
		if(!isset($_REQUEST['education'])){
			echo "Invalid education<br>";
			$counterCheck++;
		}
		if(!file_exists($_FILES['file']['tmp_name']) || !is_uploaded_file($_FILES['file']['tmp_name'])) {
			echo "Invalid File<br>";
			$counterCheck++;
		}


		if ($counterCheck == 0) {
			$type = $_REQUEST['type'];
			$name = $_REQUEST['name'];
			$password = $_REQUEST['password'];
			$gender = $_REQUEST['gender'];
			$bg = $_REQUEST['bg'];
			$dob = $_REQUEST['dob'];
			$address = $_REQUEST['address'];
			$email = $_REQUEST['email'];
			$education = $_REQUEST['education'];
			$pictures = $_FILES["file"]["name"];
			$id = $_REQUEST['id'];
			$user = ['requestid'=>$id, 'type'=>$type, 'name'=>$name, 'password'=> $password, 'gender'=>$gender, 'bg'=>$bg, 'dob'=> $dob, 'address'=>$address, 'email'=>$email, 'education'=> $education, 'pictures'=> $pictures];

			$status = editCus($user);
			$target_dir = "../uploads/";
			$target_file = $target_dir . basename($_FILES["file"]["name"]);
			move_uploaded_file($_FILES['file']['tmp_name'],$target_file);

			if($status){
				header('location: ../views/CustomerList.php');
			}else{
				echo "failed!!";
			}
		}
	}
	
?>