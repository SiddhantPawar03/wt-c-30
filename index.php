<?php
session_start();

include("connection.php");
include("function.php");

// $conn = new mysqli('localhost:3306','root','','login_db');

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Website</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>This is the index page</h1>

    <br>
    Hello, <?php echo $user_data['username']; ?>.
    <h1>my details appointemet</h1>
</body>
</html>