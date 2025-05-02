<?php
include '../includes/db.php';
include '../admin/admin_navbar.php';

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

<html>

<head>
    <link rel="stylesheet" href="/OCS/css/admin_style.css">
    <link rel="stylesheet" href="/OCS/css/style.css">
    <style>

    </style>
</head>

<body>
    <div class="add-container">
        <div class="add-form">

            <h2>Add <span style="color:#f85903">New Product</span></h2>
            <p>Provide all the details for the Product registration.</p>

            <?php if ($message): ?>
                <p style="color: green;"><?php echo $message; ?></p>
            <?php endif; ?>

            <form method="POST" action="">
                <label>Product Name:</label><br>
                <input type="text" name="name" required><br><br>

                <label>Description:</label><br>
                <textarea name="description" rows="4" required id="autoResize"></textarea><br><br>

                <label>Category:</label><br>
                <input type="text" name="category" required><br><br>

                <button type="submit" class="btn2" style="background-color:#003266; border-color: #003266;width: 100%">Add Product</button>
            </form>
            <br><br>
            <p><a href="admin_products.php" class="btn2">← Back to Product List</a></p>
        </div>
    </div>

    <script>
        const textarea = document.getElementById('autoResize');
        textarea.addEventListener('input', function() {
            this.style.height = 'auto'; // Reset height
            this.style.height = this.scrollHeight + 'px'; // Set new height
        });

        // Trigger resize on load if there's pre-filled content
        window.addEventListener('DOMContentLoaded', () => {
            textarea.style.height = 'auto';
            textarea.style.height = textarea.scrollHeight + 'px';
        });
    </script>
</body>

</html>

<?php include '../includes/footer.php'; ?>