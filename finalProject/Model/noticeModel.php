<?php 
	require_once('db.php');

	function validate($username, $password){

		$con = getConnection();
		$sql = "select * from notice where username ='{$username}' and password='{$password}'";

		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user != null){
			return true;
		}else{
			return false;
		}
	}

	function insertNotice($user){
		$con = getConnection();
		$sql = "insert into notice values ('', '{$user['date']}', '{$user['subject']}', '{$user['notice']}', '{$user['file']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllNotice(){
		$con = getConnection();
		$sql = "select * from notice";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getNoticeById($id){
		$con = getConnection();
		$sql = "select * from notice where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editNotice($user){
		$con = getConnection();
		$sql = "update notice set subject='{$user['subject']}', date='{$user['date']}', notice = '{$user['notice']}', file = '{$user['file']}' where id = '{$user['id']}'";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteNotice($id){
		$con = getConnection();
		$sql = "delete from notice where id={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>