<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include '../../db.php'; // Include the database connection

$sql = "SELECT id, name, description, price, image_path FROM products";
$result = $connection->query($sql);

$products = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $products[] = $row; // Add each product to the array
    }
}

// Return the data as JSON
echo json_encode($products);
?>
