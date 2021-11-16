<?php 
	require_once('db.php');

	function validate($name){

		$con = getConnection();
		$sql = "select * from products where Name='{$name}'";

		$result = mysqli_query($con, $sql);
		$product = mysqli_fetch_assoc($result);

		if($product != null){
			return true;
		}else{
			return false;
		}
	}

	function insertProducts($product){
		$con = getConnection();
		$sql = "insert into products values ('', '{$product['name']}', '{$product['buyingPrice']}', '{$product['sellingPrice']}', '{$product['profit']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllProducts(){
		$con = getConnection();
		$sql = "select * from products";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getProductById($id){
		$con = getConnection();
		$sql = "select * from products where ID={$id}";
		$result = mysqli_query($con, $sql);
		$product = mysqli_fetch_assoc($result);
		return $product;
	}

	function editProduct($product){
		$con = getConnection();
		$sql = "update products set Name='{$product['username']}', Buying Price='{$product['buyingPrice']}', Selling Price='{$product['sellingPrice']}', Profit='{$product['profit']}' where ID={$product['id']}";


		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteProduct($id){
		$con = getConnection();
		$sql = "delete products where ID={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function searchProduct($product){
		$con = getConnection();
		$sql = "search products where Name={$name}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false; 
		}
	}
?>