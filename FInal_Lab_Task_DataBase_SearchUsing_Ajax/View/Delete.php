<?php 
	include('header.php');
	require_once('../model/dbModel.php');
	$id = $_REQUEST['id'];
	$user = deleteProduct($id);
?>

<html>
<head>
	<title> Delete Product</title>
</head>
<body>

	<form method="post" action="../controller/deleteProduct.php">
		<fieldset>
			<legend>Delect Product</legend>
			<table>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="name" value="<?=$product['name']?>"></td>
				</tr>
				<tr>
					<td>Buying Price:</td>
					<td><input type="text" name="buyingPrice" value="<?=$product['buyingPrice']?>"></td>
				</tr>
				<tr>
					<td>Selling Proce:</td>
					<td><input type="text" name="sellingPrice" value="<?=$product['sellingPrice']?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?=$id?>"> </td>
					<td><input type="submit" name="submit" value="DELETE"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>