<?php 
	require_once('../model/CusModel.php');
	if(!isset($_COOKIE['flag'])){
	 	header('location: AdminHome.php');
	}
	$id = $_GET['id'];
	$status = deleteCus($id);
	if($status){
		header('location: ../views/CustomerList.php');
	}else{
		echo "Failed to Delete Customer";
	}
?>