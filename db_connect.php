<?php
$servername = "localhost";  // Change if using a remote server
$username = "root";  // Default MySQL username
$password = "alex";  // Default MySQL password (empty if not set)
$database = "Investors"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>