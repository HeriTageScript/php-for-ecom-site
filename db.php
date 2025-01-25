<?php
// Database configuration
$servername = "dpg-cua37n9u0jms73flkl60-a"; // Hostname (usually 'localhost' for local development)
$username = "heritage";        // MySQL username (default is 'root' for XAMPP)
$password = "lT8HwZaAotGHn8vf4Tfb3feq4mMGA56a";            // MySQL password (default is an empty string for XAMPP)
$dbname = "shop_db_k62y";       // Name of your database

// Establish the connection
$connection = pg_connect("host=$servername dbname=$dbname user=$username password=$password");

// Check if the connection was successful
if (!$connection) {
    die("Database connection failed: " . pg_last_error());
}
?>
