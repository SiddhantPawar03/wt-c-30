<?php
// Get the form data
$student_id = $_GET['student_id'];
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
$sql = "SELECT * FROM student WHERE student_id=$student_id";
$result = mysqli_query($conn, $sql);



$row = mysqli_fetch_assoc($result);
if (mysqli_num_rows($result) === 0) {
  echo 'No Result';
} 
else{
  header('Content-type: application/json');
echo json_encode($row);
}

// $data = array();
// while ($row = $result->fetch_assoc()) {
//     $data[] = $row;
// }

// Close the connection
$conn->close();

// Return the results in JSON format

?>
