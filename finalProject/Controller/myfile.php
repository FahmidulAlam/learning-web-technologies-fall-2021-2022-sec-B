<?php 

	session_start();

	$des = '../upload/'.$_FILES['myfile']['name'];
	$src = $_FILES['myfile']['tmp_name'];


	if(move_uploaded_file($src, $des)){
		$_SESSION['myimage'] = $_FILES['myfile']['name'];
		header('location: ../Views/Event.php');
	}else{
		echo "Something Wrong!";
	}
?>