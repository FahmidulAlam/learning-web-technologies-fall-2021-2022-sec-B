<?php 
	require_once('../model/empModel.php');
	if(!isset($_COOKIE['flag'])){
	 	header('location: AdminHome.php');
	}
	$id = $_GET['id'];
	$status = deleteEmp($id);
	if($status){
		header('location: ../views/EmployeeList.php');
	}else{
		echo "Failed to Delete Customer";
	}
?>