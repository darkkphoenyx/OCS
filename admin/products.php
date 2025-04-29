<?php
include '../includes/db.php';
include '../includes/header.php';
$result = mysqli_query($conn, "SELECT * FROM products");
echo "<h2>Product List</h2><a href='add_product.php'>Add Product</a><ul>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li>{$row['name']} - <a href='edit_product.php?id={$row['id']}'>Edit</a> | 
          <a href='delete_product.php?id={$row['id']}'>Delete</a></li>";
}
echo "</ul>";
include '../includes/footer.php';
