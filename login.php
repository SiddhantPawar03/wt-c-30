<?php

session_start();

    // include("connection.php");
    include("function.php");
    $conn = new mysqli('localhost:3306','root','','login_db');

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        // $New_pass=hash('sha1',$Password);

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //read from database
           // $query = "select * from user_db where username = '$user_name' limit 1";

            //$result = mysqli_query($conn, $query);

            //mysqli_query($con, $query);
            $stmt = $conn->prepare("select * from user_db where email = '$user_name' limit 1");
			// $stmt->bind_param('sss',$user_id,$user_name,$password);

			$stmt->execute();
            $stmt_result = $stmt->get_result();

            // $row = mysqli_fetch_assoc($stmt);
            // $verify = password_verify($password,$row['password']);

            if($stmt_result->num_rows>0){
                $data = $stmt_result->fetch_assoc();
                // $row = mysqli_fetch_assoc($stmt);
                // $verify = password_verify($password,$row['password']);
                if($data['password'] === $password){
                    echo("Success!!");echo "<br>";
                    // <a href="logout.php">Logout</a>
                    //  <h1>This is the index page</h1>
                    //  <br>
                    // echo  $user_data['username'];
                    // <h1>my details appointemet</h1>
                    //header("Location: secretpage.html");
                    echo("Welcome to secret Page!!");echo "<br>";
                    echo("Hi $user_name");echo "<br>";
                    echo("<a href='logout.php'>Logout</a>");
                    die;
                }
                else{
                    header("Location: loginfail.html");
                    echo("Wrong username or password!!");

                }
            }
            else
        {
            echo("Please Sign in!!");
            header("Location: pleasesign.html");
    }

            $stmt->close();
			$conn->close();

        }else
        {
            echo("Please enter valid information!!");
    }
}

?>

 <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>My Website</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>This is the index page</h1>

    <br>
    Hello, ?>.
    <h1>my details appointemet</h1>
</body>
</html>  -->
