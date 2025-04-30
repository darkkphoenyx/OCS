<?php
include '../includes/db.php';
include '../includes/navbar.php';

$message = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);

    $query = "INSERT INTO products (name, description, category) VALUES ('$name', '$description', '$category')";
    if (mysqli_query($conn, $query)) {
        $message = "✅ Product added successfully!";
    } else {
        $message = "❌ Error: " . mysqli_error($conn);
    }
}
?>

<div class="container">
    <h2>Add New Product</h2>

    <?php if ($message): ?>
        <p style="color: green;"><?php echo $message; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <label>Product Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Description:</label><br>
        <textarea name="description" rows="4" required></textarea><br><br>

        <label>Category:</label><br>
        <input type="text" name="category" required><br><br>

        <button type="submit">Add Product</button>
    </form>

    <p><a href="products.php">← Back to Product List</a></p>
</div>

<?php include '../includes/footer.php'; ?>