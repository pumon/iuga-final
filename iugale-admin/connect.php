<?php
$servername = "localhost";
$username = "root";
$password = "1421";
$database='iugale_online';
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    echo "<script>alert('Unable to connect to db');</script>";
    die("Connection failed: " . $conn->connect_error);
    
} 


?>