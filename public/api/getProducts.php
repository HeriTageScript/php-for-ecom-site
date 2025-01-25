<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include '../db.php'; // Include the database connection

// Ensure the connection was successful
if (!$conn) {
    die("Database connection failed.");
}

$sql = "SELECT id, name, description, price, image_path FROM products";

// Run the query using pg_query for PostgreSQL
$result = pg_query($conn, $sql);

if (!$result) {
    die("Error in SQL query: " . pg_last_error($conn));
}

$products = [];

while ($row = pg_fetch_assoc($result)) {
    $products[] = $row; // Add each product to the array
}

// Return the data as JSON
echo json_encode($products);
?>
