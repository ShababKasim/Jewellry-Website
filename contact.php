<?php
	session_start();
	include("dbconnect.php");
		
	$uname = $_SESSION['name'];
	$email = $_POST['email'];
	$name = $_POST['name'];	
	$subject = $_POST['subject'];
	

	$sql = "insert into contact (email, subject, name,register_user_name) values
	('$email','$subject','$name','$uname')";
	
		/*To check insert query correction*/
	if(!mysql_query($sql, $con))
	{
		//echo "Querry is correct";
		echo 'Your Message has not been dilevered' . "</br>";
	}
	
	else
	{
		echo 'Your Message has been delivered Successfully' . "</br>";
		header("Location:cons.php");
	}
		
?>
