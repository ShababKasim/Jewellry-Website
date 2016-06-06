<?php 
	session_start();
	include "header.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact: Jewellerystore</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Fleck iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body bgcolor='#C5C5A8'>
		
		
				<div class="clear"> </div>
				<div class="wrap">
					<div class="content">
				<div class="contact">
					<h4>Contact</h4>	
				<div class="contact-form">
				<form method="post" action="contact.php">
			<div>
			<span><label>Name</label></span>
			 <span><input type="text" value="" name="name" required="required" /></span>
			</div>
			<div>
			<span><label>Email</label></span>
				<span><input type="text" value="" name="email" required="required" /></span>
				</div>
				<div>
				<span><label>Subject</label></span>
			 <span><textarea name="subject" required="required" > </textarea></span>
			 </div>
			<div>
			<span><input type="submit" value="Submit"></span>
			</div>
            </form>
			</div>
			<div class="map">
				<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.in/?ie=UTF8&amp;ll=14.264383,79.804688&amp;spn=153.263776,68.554688&amp;t=m&amp;z=2&amp;output=embed"></iframe><br /><small><a href="http://maps.google.co.in/?ie=UTF8&amp;ll=14.264383,79.804688&amp;spn=153.263776,68.554688&amp;t=m&amp;z=2&amp;source=embed" style="color:#5b5b5b;font-family: 'Average Sans', sans-serif;text-align:left">View Larger Map</a></small>
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
