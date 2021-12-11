<?php 
	require_once('../model/complainModel.php');
	if(!isset($_COOKIE['flag'])){
	 	header('location: AdminHome.php');
	}
	$id = $_GET['id'];
	$status = deleteComplain($id);
	if($status){
		header('location: ../views/ComplainList.php');
	}else{
		echo "Failed to Delete Complain";
	}
?>