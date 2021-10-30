<?php

	 if(!isset($_COOKIE['flag'])){
	 	header('location: AdminHome.php');
	}
 
		$delimiter = ","; 
		$content   = file('CustomerData.txt'); 
		 
		echo "<table>"; 
		 
		foreach ($content as $row) { 
			echo "<tr>"; 
		 
			$cells = explode($delimiter, $row); 
		 
			foreach ($cells as $cell) { 
				echo sprintf("<td>%s</td>", $cell); 
			} 
		 
			echo "</tr>"; 
		} 
		 
		echo "</table>";

?>

