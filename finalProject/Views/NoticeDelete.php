<?php 
	require_once('../model/noticeModel.php');
	if(!isset($_COOKIE['flag'])){
	 	header('location: AdminHome.php');
	}
	$id = $_GET['id'];
	$status = deleteNotice($id);
	if($status){
		header('location: ../views/NoticeList.php');
	}else{
		echo "Failed to Delete Notice";
	}
?>