<?php include 'includes/header.php'; ?>
<form id="complaint-form" class="card" method="POST" action="submit_complaint.php">
    <label>Name:</label><input type="text" name="name" required><br>
    <label>Email:</label><input type="email" name="email" required><br>
    <label>Product:</label>
    <select name="product_id" required>
        <?php
        include 'includes/db.php';
        $res = mysqli_query($conn, "SELECT id, name FROM products");
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<option value='{$row['id']}'>{$row['name']}</option>";
        }
        ?>
    </select><br>
    <label>Message:</label><br><textarea name="message" required></textarea><br>
    <input type="submit" value="Submit Complaint">
</form>
<?php include 'includes/footer.php'; ?>