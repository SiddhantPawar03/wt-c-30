<?php
// Get the form data
$student_id = $_POST['student_id'];
$name_ = $_POST['name'];
// echo gettype($name_);
$mse_marks1 = $_POST['mse_marks1'];
$ese_marks1 = $_POST['ese_marks1'];
$mse_marks2 = $_POST['mse_marks2'];
$ese_marks2 = $_POST['ese_marks2'];
$mse_marks3 = $_POST['mse_marks3'];
$ese_marks3 = $_POST['ese_marks3'];
$mse_marks4 = $_POST['mse_marks4'];
$ese_marks4 = $_POST['ese_marks4'];

// Create a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the data into the database
$sql = "INSERT INTO student (student_id, name_, mse_marks1, mse_marks2, mse_marks3, mse_marks4, ese_marks1, ese_marks2, ese_marks3, ese_marks4) VALUES ($student_id, '$name_', $mse_marks1, $mse_marks2, $mse_marks3, $mse_marks4, $ese_marks1, $ese_marks2, $ese_marks3, $ese_marks4);";
// echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "Results added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
