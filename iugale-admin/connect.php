<?php
include("./database.php");

// Create connection
$conn = new mysqli($host, $user, $password,$database);

// Check connection
if ($conn->connect_error) {
    echo "<script>alert('Unable to connect to db');</script>";
    die("Connection failed: " . $conn->connect_error);
    
} 


?>