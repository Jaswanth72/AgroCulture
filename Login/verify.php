<?php
    session_start();

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "agroculture";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }



    if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash']))
    {
        $email = dataFilter($_GET['email']);
        $hash = dataFilter($_GET['hash']);

        $sql = "SELECT * FROM farmer WHERE femail='$email' AND fhash='$hash' AND factive='0'";
        $result = mysqli_query($conn, $sql) or die($mysqli->error());

        if ( $result->num_rows == 0 )
        {
            $_SESSION['message'] = "Account has already been activated or the URL is invalid!";
            header("location: error.php");
        }
        else
        {
            $_SESSION['message'] = "Your account has been activated!";
            $sql = "UPDATE farmer SET factive='1' WHERE femail='$email'";
            $result = mysqli_query($conn, $sql) or die($mysqli->error());
            $_SESSION['factive'] = '1';
            header("location: success.php");
        }
    }
     else
    {
        $_SESSION['message'] = "Invalid credentials provided for account verification!";
        header("location: error.php");
    }

    function dataFilter($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>
