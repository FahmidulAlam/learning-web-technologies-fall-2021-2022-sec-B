<?php 
	require_once('db.php');

	function validate($username, $password){

		$con = getConnection();
		$sql = "select * from customerreg where name ='{$name}' and password='{$password}'";

		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user != null){
			return true;
		}else{
			return false;
		}
	}

	function insertCus($user){
		$con = getConnection();
		$sql = "insert into customerreg values ('','{$user['type']}','{$user['name']}', '{$user['password']}', '{$user['gender']}', '{$user['bg']}', '{$user['dob']}', '{$user['address']}', '{$user['email']}', '{$user['education']}','{$user['picture']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllCus(){
		$con = getConnection();
		$sql = "select * from customerreg";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getCusById($id){
		$con = getConnection();
		$sql = "select * from customerreg where requestid={$id}";
		$result = mysqli_query($con, $sql);
		return mysqli_fetch_assoc($result);
	}

	function editCus($user){
		$con = getConnection();
		$sql = "update customerreg set type = '{$user['type']}', name = '{$user['name']}', password= '{$user['password']}', gender = '{$user['gender']}', bg = '{$user['bg']}', dob = '{$user['dob']}', address = '{$user['address']}', email=  '{$user['email']}', education = '{$user['education']}',pictures = '{$user['pictures']}' where requestid = '{$user['requestid']}'";
		
		//echo $sql;

		if(mysqli_query($con, $sql)){
			return true;
			//echo $sql;
		}else{
			return false;
		}
	}

	function deleteCus($id){
		$con = getConnection();
		$sql = "delete from customerreg where requestid={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>