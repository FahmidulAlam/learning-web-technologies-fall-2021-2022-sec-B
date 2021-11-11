<?php 

	$host = "localhost";
	$dbuser = "root";
	$dbpassword = '';
	$dbname = 'product_db';

	function getConnection(){
		global $host;
		global $dbuser;
		global $dbpassword;
		global $dbname;

		$con = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
		return $con;
	}

?>