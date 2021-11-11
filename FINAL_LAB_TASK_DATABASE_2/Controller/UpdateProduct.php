<?php 
	
	require_once('../model/dbModel.php');

	$name = $_REQUEST['Name'];
	$buyingPrice = $_REQUEST['Buying Price'];
	$sellingPrice = $_REQUEST['Selling Price'];
	$id = $_REQUEST['ID'];
	$product = ['ID'=>$id, 'Name'=>$name, 'Buying Price'=>$buyingPrice, 'Selling Price'=> $sellingPrice];

	$status = editProduct($product);

	if($status){
		header('location: ../views/Display.php');
	}else{
		header('location: ../views/Edit.php?id='.$id);
	}
?>