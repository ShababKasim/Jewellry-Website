<?php 
	session_start();
	include "header.php";
?>
<html>
	<head>
		<title>Invalid Login:: Jewellerystore</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Fleck iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Marck+Script' rel='stylesheet' type='text/css'>
	</head>
	<body>
		
		
			<div class="wrap"> 
			<div class="about">
				<div class="about-left">
				<div class="content-heading-info">
				<br><br><br><br><br><br><br>				
				
				<h1>List of the products.....</h1>
				
			
					<?php
					include("dbconnect.php");
					include("table.html");
					
					$pid = $_POST['id'];
   
  					$pid = htmlspecialchars($pid);
  					
					
					$sql = "select * from product WHERE p_id = '$pid'";					
					$result = mysql_query($sql);
					$num_rows = mysql_num_rows($result);
					
					echo "<table>";
					echo "<tr>";
						echo "<th>Pid </th>";
						echo "<th>Pname</th>";
						echo "<th>Price </th>";
						
					echo "</tr>";
					
					if($num_rows > 0){
					echo "<tr>";
					while($rows = mysql_fetch_assoc($result))
					{
						echo "<td>".$rows["p_id"]."</td>";
						echo "<td>".$rows["p_name"]."</td>";
						echo "<td>".$rows["p_price"]."</td>";
						
					echo "</tr>";
					}
					}
					echo "</table>";
              ?>
		


					</div>		</div>	








				<div class="about-right">
					<h4>Our specials</h4>
					<img src="images/gird-img.jpg">
					<p>An awesome collection of precisely designed Engagement rings for the perfect Bridal Touch. Get One for your would be Mr/Mrs today.</p>
					<img src="images/gird-img2.jpg">
					<p>Get your loved ones the finest piece of creativity as Braceletes to enhance their beauty.</p>
					<img src="images/eng1.jpg">
					<p>Show Off your affection for your partner with these elegant Heart Rings. A sweet present one can't resist. </p>
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
