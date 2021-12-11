<?php 
	require_once('db.php');

	function validate($username, $password){

		$con = getConnection();
		$sql = "select * from customercomp where username ='{$username}' and password='{$password}'";

		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user != null){
			return true;
		}else{
			return false;
		}
	}

	function insertEvent($user){
		$con = getConnection();
		$sql = "insert into customercomp values ('', '{$user['date']}', '{$user['subject']}', '{$user['eventDetails']}', '{$user['file']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllComplain(){
		$con = getConnection();
		$sql = "select * from customercomp";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getResponseByComplain($id){
		$con = getConnection();
		$sql = "select * from customercomp where complainNo ={$id}";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function insertResponse($data){
		$con = getConnection();
		$sql = "update customercomp set response = '{$data['response']}'  where complainNo = '{$data['complainNo']}'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getComplainById($id){
		$con = getConnection();
		$sql = "select * from customercomp where complainNo={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}


	function deleteComplain($id){
		$con = getConnection();
		$sql = "delete from customercomp where complainNo={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>