<?php
session_start();
include("dbconnect.php");

$name = "";
$uname = "";
$pwd = "";
$errorMessage = "";
$num_rows = 0;
$purchase = 0;
 
  $uname = $_POST['name'];
  $pwd = $_POST['password'];
  
  $uname = htmlspecialchars($uname);
  $pwd = htmlspecialchars($pwd);
  
  $sql = "SELECT * from register WHERE user_name = '$uname' AND password = '$pwd' ";
  
  $result = mysql_query($sql);
  
  if($result)
  {
  		$num_rows = mysql_num_rows($result);
  		if($num_rows > 0)
		{  	
			$rows = mysql_fetch_array($result);
			$name = $rows['user_name'];
			
			$_SESSION['name']=$name;
			
  			if ($uname =="root" AND $pwd=="root")
			$_SESSION['admin']=$uname;
		else
		{
			$_SESSION['username']=$uname;
		}
		
		$errorMessage = "Logged in";

			//echo "Welcome"." ".$uname;
			header('location:index.php');
	
  		}
  	
  		else
  		{ 
  			$errorMessage = "Invalid Login";
  			echo 'Invalid login'."</br>";
  			echo 'Invalid username or password' . "</br>";
  			header("Location:invlogin.php");
  		
  		}
  		}
  else{
  	echo "nothing";}

?>
