<?php 
	include('header.php');
	require_once('../model/dbModel.php');
	$id = $_REQUEST['id'];
	$product = insertProducts($product);
?>

<html>
<head>
	<title> Add Product </title>
</head>
<body>

	<form method="post" action="updateProduct.php">
		<fieldset>
			<legend>Add Product</legend>
			<table>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>Buying Price:</td>
					<td><input type="text" name="buyingPrice" value=""></td>
				</tr>
				<tr>
					<td>Selling Price:</td>
					<td><input type="text" name="sellingPrice" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Create"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>