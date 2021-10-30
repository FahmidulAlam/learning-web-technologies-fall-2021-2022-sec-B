<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	session_start();

	if(isset($_REQUEST['submit'])){ 
		$counterCheck=0;
		if($_REQUEST['id'] == ""){
			echo "Invalid ID<br>";
			$counterCheck++;
		}

		 if($_REQUEST['name']==""){
			echo "Invalid Name<br>";
			$counterCheck++;
		}
		 
		 if($_REQUEST['jobRole']==""){
			echo "Invalid Job Role.<br>";
			$counterCheck++;
		}
		 
		if ($counterCheck == 0) {
			$data=$_REQUEST['id']."||".$_REQUEST['name']."||".$_REQUEST['jobRole'].PHP_EOL;
			$fp = fopen('Employeedata.txt', 'a');
			fwrite($fp, $data);
			echo 'Inserted!';
		}
	}

?>