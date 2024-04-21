<?php
// connection to the database
include 'db.php';

// get data sent from AJAX
$data = json_decode(file_get_contents("php://input"), true);

$currentDate = date('Y-m-d');

// insert data into database
foreach ($data as $item) {
    $title = $item["title"];
    $price = $item["price"];
    $quantity = $item["quantity"];
    $total = $item["total"];
    $sql = "INSERT INTO cart (title, price, quantity, total, date_created) VALUES ('$title', '$price', '$quantity', '$total', '$currentDate')";
    $conn->query($sql);
}

// close connection
$conn->close();
?>