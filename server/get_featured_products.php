<?php
include('connection.php'); // Ensure correct path

$stmt = $conn->prepare("SELECT * FROM products LIMIT 4");

if ($stmt) {
    $stmt->execute();
    $featured_products = $stmt->get_result();
} else {
    die("Error preparing SQL statement: " . $conn->error);
}
?>

