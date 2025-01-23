<?php
// Database configuration
$servername = "dpg-cu9c20pu0jms73fdgctg-a"; // Hostname (usually 'localhost' for local development)
$username = "shop_db_reet_user";        // MySQL username (default is 'root' for XAMPP)
$password = "YjZKbnHi2Nn66vIWEVjl2jk4FaQYJ9C2";            // MySQL password (default is an empty string for XAMPP)
$dbname = "shop_db_reet";       // Name of your database

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
