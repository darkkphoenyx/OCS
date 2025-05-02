<?php
session_start();
include '../includes/db.php';

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin_login.php');
    exit;
}

// Fetch products and complaints from DB
$productQuery = "SELECT * FROM products";
$productResult = mysqli_query($conn, $productQuery);

$complaintQuery = "SELECT * FROM complaints";
$complaintResult = mysqli_query($conn, $complaintQuery);

$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/OCS/css/admin_style.css">
</head>

<body>

    <div class="navbar">
        <div id="icon">
            <h1>Admin Dashboard</h1>
            <p>Welcome, <?php echo $_SESSION['admin_username']; ?>!</p>
        </div>
        <div class="nav-elements">
            <a href="/OCS/admin/admin_products.php" class="<?php echo ($currentPage === 'admin_products.php') ? 'active' : ''; ?>">Edit Products</a>
            <a href="/OCS/admin/admin_complaints.php" class="<?php echo ($currentPage === 'admin_complaints.php') ? 'active' : ''; ?>">View Complaints</a>
            <a href="/OCS/admin/add_product.php" class="<?php echo ($currentPage === 'add_product.php') ? 'active' : ''; ?>">Add Products</a>
        </div>
        <div class="logout">
            <div id="homeToAdmin">
                <a href="/OCS/admin/logout.php" class="btn" style="color: white;">Logout</a>
            </div>
        </div>
    </div>

</body>

</html>