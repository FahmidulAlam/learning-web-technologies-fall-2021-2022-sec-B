<?php 
	include('header.php');
	require_once('../model/dbModel.php');
	$id = $_REQUEST['id'];
	$product = searchProduct($id);
?>

<html>
<head>
	<title> Search Product</title>
</head>
<body>

	<form method="post" action="../controller/deleteProduct.php">
		<fieldset>
			<legend>Search Product</legend>
			<table>
				<tr>
					<td>Search: </td>
					<td><input type="text" name="name" value="<?=$product['name']?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?=$id?>"> </td>
					<!-- <td><input type="submit" name="submit" value="SEARCH"></td> -->
					<td><input type="button" name="submit" value="Click" onclick="ajax()"></td>
				</tr>
			</table>
		</fieldset>
	</form>

	<script type="text/javascript" src="Ajax.js"></script>

</body>
</html>