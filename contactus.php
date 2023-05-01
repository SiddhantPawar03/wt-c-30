<?php

session_start();

    include("connection.php");
    include("function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['Name'];
        $phone_num = $_POST['Phone'];
        $age = $_POST['Age'];
        $gender = $_POST['Gender'];
        $email = $_POST['Email'];
        $address = $_POST['Address'];
        $comment = $_POST['comment'];


        if(!empty($user_name) && !empty($email) && !empty($phone_num))
        {
            //save to database
            //$user_id = random_num(15);
            $query = "insert into contact_db(user_name,phone_num,age,gender,email,address,comment) values ('$user_name','$phone_num','$age','$gender','$email','$address','$comment')";

            mysqli_query($con, $query);
            echo ("Form Received Successfully!");

            header("Location: contactusform.html");
            die;

        }else
        {
            echo "Please enter valid information!!";
        }
    }

?>
<!--
<div id="box">
		
		<form method="post">
        <input type="text" name="Name" placeholder="Enter your name"></label><br>
                <input type="text" name="Phone" placeholder="Enter your phone no"></label><br>
                <input type="text" name="Age" placeholder="Enter your age"></label><br>
                <input type="radio" name="Gender" id="male">Male</label>
                <input type="radio" name="Gender" id="female">Female</label>
                <input type="radio" name="Gender" id="Other">Other</label><br>
                <input type="email" name="Email" placeholder="Enter your mail Id"></label><br>
                <input type="text" name="Address" placeholder="Enter your address"></label> <br>
                <textarea name="comment" cols="50" rows="10" placeholder="Enter your problem"></textarea></label>
                <button>Submit</button>
                <a href="main.php">Go To Home Page</a><br><br>
		</form>
	</div>
-->
