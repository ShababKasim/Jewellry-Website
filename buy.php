<?php
	session_start();
	include("dbconnect.php");
	
	$uid = $_SESSION['username'];
	$quantity = $_POST['qty'];
	$price1 = $_SESSION['price'];
	$price = $price1 * $quantity;
	$pid = $_SESSION['pid'];
	
	$_SESSION['qty'] = $quantity;
	$_SESSION['price'] = $price;
/*
   echo "ID is :" . $uid;
   echo "Price is : " .$price;	
	echo "pro id is : " .$pid;
	echo "Quantity is : " . $quantity;
	
*/
$sql = "INSERT INTO buy (total_amt,product_p_id,register_user_name) VALUES ('$price','$pid','$uid')";    //Inserting Values in the Table
$result = mysql_query($sql,$con);

if($result)
	header("Location:buy1.php");

else
	echo 'You are not yet registered Please Try Again' . "</br>";


?>
