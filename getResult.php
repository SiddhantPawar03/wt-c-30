<?php
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

// Query the database
$sql = "SELECT student_id, name, subject, mse_marks, ese_marks, (mse_marks * 0.3 + ese_marks * 0.7) AS total_marks, ((mse_marks * 0.3 + ese_marks * 0.7) / 100 * 100) AS percentage FROM results ORDER BY student_id ASC";
$result = $conn->query($sql);

// Fetch the results and store them in an array
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Close the connection
$conn->close();

// Return the results in JSON format
header('Content-type: application/json');
echo json_encode($data);
?>
