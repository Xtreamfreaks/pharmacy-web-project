<?php

include 'dbh.inc.php';

if(isset($_POST['addstock'])){

	$stock_name = mysqli_real_escape_string($conn, $_POST['stock_name']);
	$supplier_id = mysqli_real_escape_string($conn, $_POST['supplier_id']);
	$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);

mysqli_query($conn,"INSERT INTO stock(stock_name,supplier_id,quantity) VALUES('$stock_name','$supplier_id','$quantity')");


mysqli_close($conn);
}
?>

