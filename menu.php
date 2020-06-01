<?php
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$loginProfile1 = "Logout";
		$logo = "glyphicon glyphicon-user";
		$logo1 = "glyphicon glyphicon-log-in";
		$link1 = "Login/logout.php";
		if($_SESSION['Category']!= 1)
		{
			$link = "Login/profile.php";
		}
		else 
		{
			$link = "profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "index.php";
		$logo = "glyphicon glyphicon-log-in";
		$loginProfile1 = "";
		$link1 = "";
		$logo1 = "";
	}
?>

<!DOCTYPE html>
			<header id="header">
				<h1><a href="index.php">AgroCulture</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="myCart.php"><span class="glyphicon glyphicon-shopping-cart"> MyCart</a></li>
						<li><a href="market.php"><span class="glyphicon glyphicon-grain"> Digital-Market</a></li>
						<li><a href="blogView.php"><span class="glyphicon glyphicon-comment"> BLOG</a></li>
						<li><a href="<?= $link; ?>"><span class="<?php echo $logo; ?>"></span><?php echo" ". $loginProfile; ?></a></li>
						<li><a href="<?= $link1; ?>"><span class="<?php echo $logo1; ?>"></span><?php echo" ". $loginProfile1; ?></a></li>
					</ul>
				</nav>
			</header>

	</body>
</html>
