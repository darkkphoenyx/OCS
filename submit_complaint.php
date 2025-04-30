<?php
include 'includes/db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $product_id = $_POST['product_id'];
    $message = $_POST['message'];
    $query = "INSERT INTO complaints (product_id, user_name, user_email, message)
              VALUES ('$product_id', '$name', '$email', '$message')";
    mysqli_query($conn, $query);
    header("Location: product.php");
}
