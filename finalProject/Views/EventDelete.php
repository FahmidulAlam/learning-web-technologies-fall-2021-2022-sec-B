<?php 
	require_once('../model/eventModel.php');
	if(!isset($_COOKIE['flag'])){
	 	header('location: AdminHome.php');
	}
	$id = $_GET['id'];
	$status = deleteEvent($id);
	if($status){
		header('location: ../views/EventList.php');
	}else{
		echo "Failed to Delete Event";
	}
?>