<?php 
	require_once('../model/complainModel.php');
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	session_start();

	if(isset($_REQUEST['submit'])){ 
		$counterCheck=0;

		if($_REQUEST['response']==""){
			echo "Invalid Response<br>";
			$counterCheck++;
		}

		if ($counterCheck == 0) {;
			$response = $_REQUEST['response'];
			$complainNo = $_REQUEST['id'];
			$user = ['complainNo'=>$complainNo, 'response'=>$response];

			$status = insertResponse($user);

			if($status){
				header('location: ../views/ComplainList.php');
			}else{
				header('location: ../views/ComplainReply.php?id='.$compainNo);
			}
		}
	}
	
?>