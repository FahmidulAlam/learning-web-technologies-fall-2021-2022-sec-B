<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	session_start();

	if(isset($_REQUEST['submit'])){ 
		$counterCheck=0;
		require_once('../model/empModel.php');

		if($_REQUEST['name']==""){
			echo "Invalid name<br>";
			$counterCheck++;
		}
		if($_REQUEST['username'] == ""){
			echo "Invalid username<br>";
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
		if(!isset($_REQUEST['gender'])) {
			echo "Invalid gender<br>";
			$counterCheck++;
		}
		if($_REQUEST['bg']==""){
			echo "Invalid BG<br>";
			$counterCheck++;
		}
		if($_REQUEST['dob']==""){
			echo "Invalid DoB<br>";
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
		 if(!isset($_REQUEST['designation'])){
			echo "Invalid Designation<br>";
			$counterCheck++;
		}
		if($_REQUEST['salary']==""){
			echo "Invalid Salary<br>";
			$counterCheck++;
		}
		if(!file_exists($_FILES['file']['tmp_name']) || !is_uploaded_file($_FILES['file']['tmp_name'])) {
			echo "Invalid File<br>";
			$counterCheck++;
		}

		 if($_REQUEST['password'] != $_REQUEST['confirmpassword']){
			echo "Password & Confirm Password does not match!<br>";
			$counterCheck++;
		}
		 
		if ($counterCheck == 0) {
			
			$user = ['name'=> $_REQUEST['name'], 'username'=> $_REQUEST['username'], 'password'=>$_REQUEST['password'], 'gender'=>$_REQUEST['gender'],'bg'=>$_REQUEST['bg'],'dob'=> $_REQUEST['dob'],'address'=> $_REQUEST['address'], 'email'=>$_REQUEST['email'], 'education'=>$_REQUEST['education'], 'designation'=> $_REQUEST['designation'], 'salary'=> $_REQUEST['salary'], 'picture'=> $_FILES["file"]["name"]];

			$status = insertEmp($user);
			$target_dir = "../uploads/";
			$target_file = $target_dir . basename($_FILES["file"]["name"]);
			move_uploaded_file($_FILES['file']['tmp_name'],$target_file);

			if($status){
				header('location: ../views/EmployeeList.php');	
			}else{
				echo "Failed!!";
			}


	}
	}

?>