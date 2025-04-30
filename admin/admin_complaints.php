<?php
include '../includes/db.php';
include '../admin/admin_navbar.php';
$query = "SELECT complaints.*, products.name AS product_name 
          FROM complaints JOIN products ON complaints.product_id = products.id";
$result = mysqli_query($conn, $query);
echo "<h2>Complaints</h2><table border='1'><tr><th>Name</th><th>Email</th><th>Product</th><th>Message</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>{$row['user_name']}</td><td>{$row['user_email']}</td>
          <td>{$row['product_name']}</td><td>{$row['message']}</td></tr>";
}
echo "</table>";
include '../includes/footer.php';
