<?php

// Database configuration
$servername = "localhost";  // Replace with your server name
$username = "root";         // Replace with your database username
$password = "";     // Replace with your database password
$dbname = "db_oxa";       // Replace with your database name

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
