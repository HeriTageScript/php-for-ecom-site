<?php
// Database configuration
$servername = "localhost"; // Hostname (usually 'localhost' for local development)
$username = "root";        // MySQL username (default is 'root' for XAMPP)
$password = "";            // MySQL password (default is an empty string for XAMPP)
$dbname = "shop_db";       // Name of your database

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
