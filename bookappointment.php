<?php

session_start();

    // include("connection.php");
    include("function.php");
    $conn = new mysqli('localhost:3306','root','','login_db');

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $name = $_POST['name'];
        $phoneNo = $_POST['phoneNo'];
        $mail= $_POST['mail'];
        $gender = $_POST['Gender'];
        $doctor = $_POST['Doctor'];
        $problem = $_POST['problem'];
        $conduct = $_POST['conduct'];
        $date = $_POST['date'];
        $timing = $_POST['time'];
        $age = $_POST['age'];
        $comments = $_POST['comments'];


        if(!empty($name) && !empty($mail) && !empty($phoneNo))
        {
            //save to database
            //$user_id = random_num(15);
            
            // $query = "insert into makeappointment(name,phoneNo,mail,gender,doctorName,problem,timing,age,comments) values ('$name','$phoneNo','$mail','$gender','$doctor','$problem','$timing','$age','$comments')";

            $stmt = $conn->prepare("insert into makeappointment(name,phoneNo,mail,gender,doctorName,problem,conduct,date,timing,age,comments) values (?,?,?,?,?,?,?,?,?,?,?)");
			$stmt->bind_param('sisssssssis',$name,$phoneNo,$mail,$gender,$doctor,$problem,$conduct,$date,$timing,$age,$comments);

			$stmt->execute();
            
            //mysqli_query($con, $query);

            header("Location: appointmentconfirm.html");
            die;

            $stmt->close();
			$conn->close();

        }else
        {
            echo "Please enter valid information!!";
        }
    }

?>
<!--
<div id="top">
        <header>
            <div id="logo">
                <img src="images/hospital-logo-and-symbols-template-icons-vector-removebg-preview.png" alt="Logo">
                <h1 id="name">VHospital</h1>
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index.html">Services</a></li>
                        <li><a href="index.html">Our Doctors</a></li>
                        <li><a href="index.html">Contact Us</a></li>
                        <li><a href="index.html">Signup</a></li>
                        <li><a href="index.html">Login</a></li>
                    </ul>
                </nav>
            </div>
        </header>
</div>

<br>

<div id="book">
    <form action="bookappointment.php" method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="text" name="phoneNo" placeholder="Enter your phone number">
        <input type="text" name="mail" placeholder="Enter your mail">
        <p>Please select your gender : </p>
        <p> Male</p><input type="checkbox" name="Gender" class="gen" value="Male">
        <p> Female</p><input type="checkbox" name="Gender" class="gen" value="Female"> 
        <p> Other</p><input type="checkbox" name="Gender" class="gen" value="Other">
        <br>
        <label for="select">Select your doctor : </label>
        <select name="Doctor" id="select">
            <option value="Anand Joshi">Anand Joshi</option>
            <option value="Yogesh Sharma">Yogesh Sharma</option>
            <option value="Amol Yadav">Amol Yadav</option>
            <option value="Sarawati Mohite">Sarawati Mohite</option>
        </select>
        <br>
        <label for="problem">Select your problem : </label>
        <select name="problem" id="problem">
            <option value="Diabetes">Diabetes</option>
            <option value="Cancer">Cancer</option>
            <option value="Heart diseases">Heart diseases</option>
            <option value="Influenza">Influenza</option>
            <option value="Other">Other</option>
        </select>
        <br>
        <label for="timing">Select your timing slot : </label>
        <select name="time" id="timing">
            <option value="10.00 - 12.00">10.00 - 12.00</option>
            <option value="2.00 - 5.00">2.00 - 5.00</option>
            <option value="6.00 - 8.00">6.00 - 8.00</option>
        </select>
        <input type="text" name="age" placeholder="Enter your age">
        <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Enter your problem in detail"></textarea>
        <button>Submit</button>
    </form>
</div>
-->