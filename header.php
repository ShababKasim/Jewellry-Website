<html>
<!---Start-Header-->
		<div class="header">
			<!---Start-wrap-->
		<div class="wrap">
			<!---Start-Logo-->
				<div class="logo">
					<a href="index.php"><img src="images/logo2.png" title="logo" /></a>
				</div>
				<!---End-Logo-->
				<!---Start-top-nav-->
				<div class="top-nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="collections.php">Collections</a></li>
						<li><a href="cont.php">Contact</a></li>						
						<li><?php if($_SESSION['admin']!=NULL) echo"<a href='products.php'>Show Products</a>"; ?></li>						
						<li><?php if(($_SESSION['username']==NULL)&&($_SESSION['admin']==NULL)) echo "<a href='regi.php'>Register</a>"; ?></li>						
						<li><?php if(($_SESSION['username']!=NULL)||($_SESSION['admin']!=NULL)) {echo "<a href='logout.php'>Logout</a>"; echo "<a>Welcome, </a>" ."<a>".$_SESSION['name']."</a>";} else echo "<a href='log_in.php'>Log In</a>"; ?></li>
										
					</ul>
				</div>
				<div class="clear"> </div>
				<!---End-top-nav-->
			</div>
			<!---End-Header-->
			</div>
</html>
