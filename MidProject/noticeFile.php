<?php 

	session_start();

	$des = 'upload/'.$_FILES['noticeFile']['name'];
	$src = $_FILES['noticeFile']['tmp_name'];


	if(move_uploaded_file($src, $des)){
		$_SESSION['myNotice'] = $_FILES['noticeFile']['name'];
		header('location: Notice.php');
	}else{
		echo "Something Wrong!";
	}
?>