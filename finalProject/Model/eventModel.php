<?php 
	require_once('db.php');

	function validate($username, $password){

		$con = getConnection();
		$sql = "select * from eventt where username ='{$username}' and password='{$password}'";

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
		$sql = "insert into eventt values ('', '{$user['date']}', '{$user['subject']}', '{$user['eventDetails']}', '{$user['file']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllEvent(){
		$con = getConnection();
		$sql = "select * from eventt";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getEventById($id){
		$con = getConnection();
		$sql = "select * from eventt where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editEvent($user){
		$con = getConnection();
		$sql = "update eventt set subject = '{$user['subject']}', eventDetails='{$user['eventDetails']}', file ='{$user['file']}', date = '{$user['date']}' where id = '{$user['id']}'";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteEvent($id){
		$con = getConnection();
		$sql = "delete from eventt where id={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>