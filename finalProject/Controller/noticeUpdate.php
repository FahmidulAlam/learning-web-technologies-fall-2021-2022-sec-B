<?php 
	require_once('../model/noticeModel.php');
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
		if($_REQUEST['notice']==""){
			echo "Invalid Notice<br>";
			$counterCheck++;
		}
		if(!file_exists($_FILES['file']['tmp_name']) || !is_uploaded_file($_FILES['file']['tmp_name'])) {
			echo "Invalid File<br>";
			$counterCheck++;
		}

		if ($counterCheck == 0) {
			$date = $_REQUEST['date'];
			$subject = $_REQUEST['subject'];
			$notice = $_REQUEST['notice'];
			$file = $_FILES['file']['name'];
			$id = $_REQUEST['id'];
			$user = ['id' => $id, 'date'=>$date, 'subject'=>$subject, 'notice'=> $notice, 'file'=>$file];

			$status = editNotice($user);

			$target_dir = "../uploads/";
			$target_file = $target_dir . basename($_FILES["file"]["name"]);
			move_uploaded_file($_FILES['file']['tmp_name'],$target_file);

			if($status){
				header('location: ../views/Notice.php');
			}else{
				header('location: ../views/NoticeEdit.php?id='.$id);
			}
		}
	}
	
?>