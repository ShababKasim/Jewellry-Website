<?php
include("dbconnect.php");

	$email = $_POST['email'];
	$name = $_POST['name'];	
	$password = $_POST['password'];
	$age = $_POST['age'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	
$sql = "INSERT INTO register(user_name,password,age,email,address,mobile) VALUES ('$name','$password','$age','$email','$address','$mobile')";    //Inserting Values in the Table
$result = mysql_query($sql,$con);

if(!$result)
	echo 'You are not yet registered Please Try Again' . "</br>";
else
	echo 'You are Registered Successfully' . "</br>";
	header('location:sreg.php');
?>
