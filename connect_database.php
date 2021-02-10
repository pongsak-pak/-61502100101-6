<?php
$servername = "localhost";
$username = "movie";
$password = "552120";
$port = "3307";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>