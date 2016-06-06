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
		
		<div class="clear"> </div>
				<div class="wrap">
					<div class="content">
				<div class="contact">
					<h4>List of the products.....</h4>
				<div class="contact-form">
				<form method="post" action="disproducts.php">
			<div>
			<span><label> Pid </label></span>
			 <span><input type="text" value="" name="id" placeholder="" required="required" /></span>
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
