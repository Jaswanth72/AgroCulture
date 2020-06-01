<?php
    session_start();

	if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] != 1)
	{
		$_SESSION['message'] = "You have to Login to view this page!";
		header("Location: Login/error.php");
	}
?>

<!DOCTYPE HTML>

<html lang="en">
    <head>
        <title>Update password: <?php echo $_SESSION['Username']; ?></title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
        <meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-xlarge.css" />

    </head>


    <body>

        <?php
            require 'menu.php';
        ?>

        <section id="one" class="wrapper style1 align">
				<div style="width:30%;">
				<form method="post" action="change-password.php">
				<div>
				<label style="color:blue;">UserName</label>
				<input type="text" name="uname" id="uname" value="" placeholder="UserName" required/>
				</div>
				<div>
         <label style="color:blue;">Old Password</label>
         <input type="password" name="old_pass" placeholder="Old Password . . . . .">
      </div>
      <div>
         <label style="color:blue;">New Password</label>
         <input type="password" name="new_pass" placeholder="New Password . . . . .">
      </div>
      <div>
         <label style="color:blue;">Re-Type New Password</label>
         <input type="password" name="re_pass" placeholder="Re-Type New Password . . . . .">
      </div>
      <button type="submit" name="re_password">Submit</button>
   </form>
</div>
        </section>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>



    </body>
</html>
