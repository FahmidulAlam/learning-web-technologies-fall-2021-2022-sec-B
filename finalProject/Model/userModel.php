<?php 
	require_once('db.php');

	function validate($username, $password){

		$con = getConnection();
		$sql = "select * from userlist where username ='{$username}' and password='{$password}'";

		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user != null){
			return true;
		}else{
			return false;
		}
	}

	function insertUser($user){
		$con = getConnection();
		$sql = "insert into userlist values ('', '{$user['username']}', '{$user['password']}', '{$user['gender']}', '{$user['bg']}', '{$user['dob']}', '{$user['address']}', '{$user['email']}', '{$user['education']}', '{$user['designation']}', '{$user['salary']}', '{$user['picture']}', '{$user['name']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUsers(){
		$con = getConnection();
		$sql = "select * from userlist";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getUserById($id){
		$con = getConnection();
		$sql = "select * from userlist where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editUser($user){
		$con = getConnection();
		$sql = "update userlist set username=('', '{$user['username']}', '{$user['password']}', '{$user['gender']}', '{$user['bg']}', '{$user['dob']}', '{$user['address']}', '{$user['email']}', '{$user['education']}', '{$user['designation']}', '{$user['salary']}', '{$user['picture']}', '{$user['name']}')";
		
		//echo $sql;

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$con = getConnection();
		$sql = "delete userlist where id={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>