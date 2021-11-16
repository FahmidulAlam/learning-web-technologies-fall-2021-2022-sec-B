<?php
	require_once('header.php');
	require_once('../model/dbModel.php');
	
	$result = getAllProducts();
	$count = mysqli_num_rows($result);
?>

<html>
<head>
	<title>Display</title>
</head>
<body>

	<table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Profit</th>
			<th>Action</th>

		</tr>
		<?php while($data =mysqli_fetch_assoc($result)){ ?>

				<tr>
					<td><?=$data['id']?></td>
					<td><?=$data['name']?></td>
					<td><?'select sellingPrice - buyingPrice from products where Profit="{$product['profit']}"'?><?=$data['profit']?></td>
					<td>
						<a href="edit.php?id=<?=$data['id']?>">EDIT</a> |
						<a href="delete.php?id=1">DELETE</a> 
					</td>
				</tr>

		<?php } ?>

	</table>
</body>
</html>