<?php
include 'includes/db.php';
include 'includes/header.php';

$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);
?>
<div id="product-index" class="card">
    <h2 id="p-header">Product List</h2>
    <table class="product-table" border="1px">
        <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['category']); ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <button class="btn2">
        <a href="complaint.php">Submit a Complaint</a>
    </button>
</div>
<?php include 'includes/footer.php'; ?>