<?php 
	session_start();
	include "header.php";
?>

<html>
	<head>
		<title>Login: Jewellerystore</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Fleck iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body bgcolor='#C5C5A8'>
		
		
				<div class="clear"> </div>
				<div class="wrap">
					<div class="content">
				<div class="contact">
					<h4>LOGIN</h4>	
				<div class="contact-form">
				<form method="post" action="login.php">
			<div>
			<span><label>User Name</label></span>
			 <span><input type="text" value="" name="name" placeholder="Username" required="required" /></span>
			</div>
			<div>
			<span><label>Password</label></span>
				<span><input type="password" value="" name="password" placeholder="********" required="required"	  /></span>
				</div>
			<div>
			<span><input type="submit" value="Submit">
			<input type="reset" value="Reset"></span>
			</div>
            </form>
			</div>
			
			</div>
			<div class="clear"> </div>
			</div>
			</div>
				 </div>
				 
		
		</div>
		<!---End-wrap-->

	</body>
</html>

<?php 
	include "footer.php";
?>
