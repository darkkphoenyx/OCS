<?php
include('../includes/db.php');

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $query = "SELECT * FROM products WHERE id = $product_id";
    $result = mysqli_query($conn, $query);
    $product = mysqli_fetch_assoc($result);
} else {
    echo "Product not found.";
    exit;
}

if (isset($_POST['update_product'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    $update = "UPDATE products SET name='$name', category='$category', description='$description' WHERE id=$product_id";
    mysqli_query($conn, $update);
    header("Location: admin_products.php?updated=1");
    $message = "Product updated successfully!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
    <link rel="stylesheet" href="/OCS/css/admin_style.css">
</head>

<body>
    <div id="edit-wrapper">

        <div class="edit-form">
            <h2>Edit Product</h2>
            <form method="POST">
                <label for="name">Name:</label>
                <input type="text" name="name" value="<?= $product['name'] ?>" placeholder="Product Name" required />
                <label for="category">Category:</label>
                <input type="text" name="category" value="<?= $product['category'] ?>" placeholder="Category" required />
                <label for="description">Description:</label>
                <textarea name="description" placeholder="Description" rows="4"><?= $product['description'] ?></textarea>
                <button type="submit" name="update_product">Update Product</button>
            </form>
        </div>
    </div>
</body>

</html>