<?php 
	session_start();
	include "header.php";
?>
<html>
	<head>
		<title>Rings:: Jewellerystore</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Fleck iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Marck+Script' rel='stylesheet' type='text/css'>
	</head>
	<body>
		
		
			<div class="wrap"> 
			<div class="about">
				<div class="grid box">
						<img src="images/nak4.jpg" title="rigns" /><br>
						<h3>Diamond Necklace</h3>
						<p>Diamond studded necklaces, simple yet elegant.</p>
					</div>

				<div class="about-rights">
					<br>
					<?php
					include("dbconnect.php");
					include("table.html");
					$sql = "select p_id,p_name,p_price from product WHERE p_id='NNDM'";					
					$result = mysql_query($sql);
					$num_rows = mysql_num_rows($result);
					$rows = mysql_fetch_assoc($result);
					if($num_rows > 0)
					{
					echo "<h4>Product Id : " . $rows["p_id"] . "<br>";	
					echo "<h4>Name :  " . $rows["p_name"] . "<br>";	
					echo "<h4>Price : Rs " . $rows["p_price"];					
					}
					$_SESSION['price'] = $rows["p_price"];
					$_SESSION['pname'] = $rows["p_name"];
					$_SESSION['pid'] = $rows["p_id"];
					?>
					<div class="contact-form">					
					<form method="post" action="buy.php">
					<div>
					Quantity: <input type = "text" name = "qty" required="required">
					<input type="submit" value="Buy Now">
					<input type="submit" value="Add to Cart"></div>					
					</form>
				</div>
				<div class="clear"> </div>
			</div>
			</div>
				<div class="clear"> </div>
				
			</div>
			
			</div>
			<div class="clear"> </div>
			
				
		</div>
		<!---End-wrap-->

	</body>
</html>

<?php 
	include "footer.php";
?>
