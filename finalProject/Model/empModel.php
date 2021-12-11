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

	function insertEmp($user){
		$con = getConnection();
		$sql = "insert into userlist values ('', '{$user['username']}', '{$user['password']}', '{$user['gender']}', '{$user['bg']}', '{$user['dob']}', '{$user['address']}', '{$user['email']}', '{$user['education']}', '{$user['designation']}', '{$user['salary']}', '{$user['picture']}', '{$user['name']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllEmp(){
		$con = getConnection();
		$sql = "select * from userlist";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getEmpById($id){
		$con = getConnection();
		$sql = "select * from userlist where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editEmp($user){
		$con = getConnection();
		$sql = "update userlist set username = '{$user['username']}', name = '{$user['name']}', password= '{$user['password']}', gender = '{$user['gender']}', bg = '{$user['bg']}', dob = '{$user['dob']}', address = '{$user['address']}', email=  '{$user['email']}', education = '{$user['education']}', picture = '{$user['picture']}', designation = '{$user['designation']}', salary = '{$user['salary']}' where id = '{$user['id']}'";
		
		echo $sql;

		if(mysqli_query($con, $sql)){
			return true;
			//echo $sql;
		}else{
			return false;
		}
	}

	function deleteEmp($id){
		$con = getConnection();
		$sql = "delete from userlist where id={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>