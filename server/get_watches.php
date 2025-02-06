<?php
include('connection.php'); // Ensure correct path

$stmt = $conn->prepare("SELECT * FROM products WHERE product_category = 'watches'");

if ($stmt) {
    $stmt->execute();
    $watches = $stmt->get_result();
} else {
    die("Error preparing SQL statement: " . $conn->error);
}
?>
