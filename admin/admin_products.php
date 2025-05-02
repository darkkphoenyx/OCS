<?php
include '../includes/db.php';
include '../admin/admin_navbar.php';

$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);

$imageLinks = [
    "/OCS/image/image1.png",
    "/OCS/image/image2.png",
    "/OCS/image/image3.png",
    "/OCS/image/image4.png",
    "/OCS/image/image5.png",
    "/OCS/image/image6.png",
    "/OCS/image/image7.png",
    "/OCS/image/image8.png",
    "/OCS/image/image9.png",
    "/OCS/image/image10.png",
    "/OCS/image/image11.png",
    "/OCS/image/image12.png",
    "/OCS/image/image13.png",
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product List</title>
    <link rel="stylesheet" href="/OCS/css/admin_style.css">
</head>

<body>
    <div id="product-index">
        <h2 id="p-header"><span style="color: var(--text-primary)">Product&nbsp;</span>List</h2>
        <p class="paragraph">Explore a diverse range of premium products — thoughtfully selected to bring quality and value to your life.</p>

        <?php if (isset($_GET['updated']) && $_GET['updated'] == 1): ?>
            <div class="success-message" id="success-message">
                Product updated successfully!
            </div>
        <?php endif; ?>

        <?php if (isset($_GET['deleted']) && $_GET['deleted'] == 1): ?>
            <div class="success-message" id="success-message">
                Product deleted successfully!
            </div>
        <?php endif; ?>

        <div class="product-grid">
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="product-card">
                    <div id="product-image">
                        <img src="<?php echo $imageLinks[$row['id'] - 1] ?? '/OCS/image/default.png'; ?>" alt="Product Image">
                    </div>

                    <div id="product-info">
                        <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                        <p>Category: <?php echo htmlspecialchars($row['category']); ?></p>

                        <a class="btn2" href="/OCS/admin/edit_product.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a class="btn2" style="background-color:#003266; border-color: #003266" href="/OCS/admin/delete_product.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const message = document.getElementById("success-message");

            if (window.location.search.includes("updated=1") || window.location.search.includes("deleted=1")) {
                const url = new URL(window.location);
                url.searchParams.delete("updated");
                url.searchParams.delete("deleted");
                window.history.replaceState({}, document.title, url.toString());
            }

            if (message) {
                setTimeout(() => {
                    message.style.opacity = "0";
                    setTimeout(() => message.remove(), 500);
                }, 4000);
            }
        });
    </script>
</body>

</html>