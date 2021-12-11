<?php 
	require_once('../model/eventModel.php');
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	session_start();

	if(isset($_REQUEST['submit'])){ 
		$counterCheck=0;

		 if(!isset($_REQUEST['date'])){
			echo "Invalid date<br>";
			$counterCheck++;
		}
		if($_REQUEST['subject']==""){
			echo "Invalid Subject<br>";
			$counterCheck++;
		}
		if($_REQUEST['eventDetails']==""){
			echo "Invalid Event<br>";
			$counterCheck++;
		}
		if(!file_exists($_FILES['file']['tmp_name']) || !is_uploaded_file($_FILES['file']['tmp_name'])) {
			echo "Invalid File<br>";
			$counterCheck++;
		}

		if ($counterCheck == 0) {
			$date = $_REQUEST['date'];
			$subject = $_REQUEST['subject'];
			$eventDetails = $_REQUEST['eventDetails'];
			$file = $_FILES['file']['name'];
			$user = ['date'=>$date, 'subject'=>$subject, 'eventDetails'=> $eventDetails, 'file'=>$file];

			$status = insertEvent($user);
			$target_dir = "../uploads/";
			$target_file = $target_dir . basename($_FILES["file"]["name"]);
			move_uploaded_file($_FILES['file']['tmp_name'],$target_file);

			if($status){
				header('location: ../views/Event.php');
			}else{
				header('location: ../views/InsertEvent.php');
			}
		}
	}
	
?>