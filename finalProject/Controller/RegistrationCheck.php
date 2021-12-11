<?php 


// session_start();
// require_once('../model/userModel.php');

// 	if(isset($_REQUEST['submit']))
// 	{
// 		$name = $_REQUEST['name'];
// 		$username = $_REQUEST['username'];
// 		$password = $_REQUEST['password'];
// 		$gender = $_REQUEST['gender'];
// 		$bg = $_REQUEST['bg'];
// 		$dob = $_REQUEST['dob'];
// 		$address = $_REQUEST['address'];
// 		$email = $_REQUEST['email'];
// 		$education = $_REQUEST['education'];
// 		$designation = $_REQUEST['designation'];
// 		$salary = $_REQUEST['salary'];
// 		$picture = $_REQUEST['picture'];


	// 		if($name !=""){
	// 			if($username !=""){
	// 				if($password !=""){
	// 					if($gender !=""){
	// 						if($bg !=""){
	// 							if($dob !=""){
	// 								if($address !=""){
	// 									if($education !=""){
	// 										if($email !=""){
	// 										if($designation !=""){
	// 											if($salary !=""){
	// 												if($picture !=""){

	// 													$user = ['name'=> $name, 'username'=> $username, 'password'=>$password, 'gender'=>$gender,'bg'=> $bg,'dob'=> $dob,'address'=> $address, 'email'=> $email, 'education'=> $education, 'designation'=> $designation, 'salary'=> $salary, 'picture'=> $picture];

	// 													$status = insertUser($user);
	// 													if($status){
	// 													header('location: ../views/Login.php');	
											
	// 												}else{
	// 												echo "Invalid Picture! Try again...";
	// 												}

	// 											}else{
	// 											echo "Invalid salary! Try again...";
	// 										}

	// 										}else{
	// 											echo "Invalid designation! Try again...";
	// 										}

	// 									}else{
	// 											echo "Invalid educatiopn! Try again...";
	// 										}
	// 								}else{
	// 											echo "Invalid address! Try again...";
	// 										}
	// 								}else{
	// 											echo "Invalid email! Try again...";
	// 										}

	// 							}else{
	// 											echo "Invalid dob! Try again...";
	// 										}
	// 						}else{
	// 											echo "Invalid bg! Try again...";
	// 										}
	// 					}else{
	// 											echo "Invalid gender! Try again...";
	// 										}
	// 				}else{
	// 											echo "Invalid password! Try again...";
	// 										}
	// 			}else{
	// 											echo "Invalid username! Try again...";
	// 										}
	// 		}else{
	// 											echo "Invalid Name!";
	// 										}
	// 	}		
	// }
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	session_start();
	require_once('../model/userModel.php');

	if(isset($_REQUEST['submit'])){ 
		$counterCheck=0;

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
		if($_REQUEST['picture']==""){
			echo "Invalid Confirm Picture<br>";
			$counterCheck++;
		}

		 if(!file_exists($_FILES['file']['tmp_name']) || !is_uploaded_file($_FILES['file']['tmp_name'])) {
			echo "Invalid File<br>";
			$counterCheck++;
		}
		if ($counterCheck == 0) {
			//$data=$_REQUEST['username']."||".$_REQUEST['password']."||".$_REQUEST['name']."||".$_REQUEST['email']."||".$_REQUEST['nid']."||".$_REQUEST['dob']."||".$_REQUEST['gender']."||".$_REQUEST['usertype'].PHP_EOL;
			//$fp = fopen('../Model/Userdata.txt', 'a');
			//fwrite($fp, $data);
			$user = ['name'=> $_REQUEST['name'], 'username'=> $_REQUEST['username'], 'password'=>$_REQUEST['password'], 'gender'=>$_REQUEST['gender'],'bg'=>$_REQUEST['bg'],'dob'=> $_REQUEST['dob'],'address'=> $_REQUEST['address'], 'email'=>$_REQUEST['email'], 'education'=>$_REQUEST['education'], 'designation'=> $_REQUEST['designation'], 'salary'=> $_REQUEST['salary'], 'picture'=> $_FILES["file"]["name"]];

			$status = insertUser($user);

			$target_dir = "../uploads/";
			$target_file = $target_dir . basename($_FILES["file"]["name"]);
			move_uploaded_file($_FILES['file']['tmp_name'],$target_file);
			

			if($status){
				header('location: ../views/Login.php');	
			}else{
				echo "Something Wrong! Try again...";
			}


	}
}

?>