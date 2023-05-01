<?php
session_start();

    //include("connection.php");
    include("function.php");
	$conn = new mysqli('localhost:3306','root','','login_db');

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        // $New_pass=hash('sha1',$Password);
        // $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $e = "select email from user_db where email='$user_name'";
        $ee = mysqli_query($conn,$e);

        $errors = array();

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            if(empty(mysqli_num_rows($ee)>0)){
              
            //save to database
            $user_id = random_num(15);
            //$query = "insert into user_db(user_id,username,password) values ('$user_id','$user_name','$password')";

            //mysqli_query($con, $query);
			$stmt = $conn->prepare("insert into user_db(user_id,email,password) values (?,?,?)");
			$stmt->bind_param('sss',$user_id,$user_name,$password);

			$stmt->execute();

			echo '<script type ="text/JavaScript">';
            echo 'alert("Appointment Form Recevied Successfully!!")';
            echo '</script>';

            header("Location: signupconfirm.html");
			//<a href="main.php">Go back to Home Page</a><br>
            //die;
			$stmt->close();
			$conn->close();
            }
            else{
                header("Location: mailexists.html");
            }

        }else
        {
            echo ("Please enter valid information!!");
        }
    }


?>

