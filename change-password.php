<?php
    session_start();


    require 'db.php';
 
if (isset($_POST['re_password']))
	{
	$user = dataFilter($_POST['uname']);
	$old_pass = $_POST['old_pass'];
	$new_pass = $_POST['new_pass'];
	$re_pass = $_POST['re_pass'];
	$sql = "SELECT * FROM farmer WHERE fusername='$user'";
    $result = mysqli_query($conn, $sql);
	//$password_query = mysqli_query($conn,"SELECT * FROM farmer WHERE fusername='$user'");
	$password_row = mysqli_fetch_array($result);
	$database_password = $password_row['fpassword'];
	if ($database_password == $old_pass)
		{
		if ($new_pass == $re_pass)
			{
			$update_pwd = mysql_query("update farmer set fpassword='$new_pass' where fusername='$user'");
			echo "<script>alert('Update Sucessfully'); window.location='index.php'</script>";
			}
		  else
			{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='index.php'</script>";
			}
		}
	  else
		{
		echo "<script>alert('Your old password is wrong'); window.location='index.php'</script>";
		}
 
	}
    function dataFilter($data)
    {
    	$data = trim($data);
     	$data = stripslashes($data);
    	$data = htmlspecialchars($data);
      	return $data;
    }
?>
