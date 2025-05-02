<?php
include '../includes/db.php';

if (isset($_GET['id'])) {
    $productId = intval($_GET['id']);

    $query = "DELETE FROM products WHERE id = $productId";
    if (mysqli_query($conn, $query)) {
        header("Location: admin_products.php?deleted=1");
        exit;
    } else {
        echo "Error deleting product: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}
