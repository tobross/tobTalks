<?php
$servername   = "localhost";
$database = "seatingchart";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

?>
