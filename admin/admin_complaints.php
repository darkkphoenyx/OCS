<?php
include '../includes/db.php';
include '../admin/admin_navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Complaints</title>
    <link rel="stylesheet" href="/OCS/css/style.css">
</head>

<body>

    <div class="complaints-container">
        <h2>User <span style="color:#f85903">Complaints</span></h2>
        <p style="color: #003266;">Here is the list of all the complaints submitted by the users.</p>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Product</th>
                <th>Message</th>
            </tr>
            <?php
            $query = "SELECT complaints.*, products.name AS product_name 
        FROM complaints JOIN products ON complaints.product_id = products.id";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
            <td>{$row['user_name']}</td>
            <td>{$row['user_email']}</td>
            <td>{$row['product_name']}</td>
            <td>{$row['message']}</td>
            </tr>";
            }
            ?>
        </table>
    </div>

    <?php include '../includes/footer.php'; ?>

</body>

</html>