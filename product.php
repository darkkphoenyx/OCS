<?php
include 'includes/db.php';
include 'includes/header.php';

$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);

// Array of local image paths
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
];
?>

<!-- Container -->
<div id="product-index">
    <h2 id="p-header">Product List</h2>
    <p class="paragraph">Explore a diverse range of premium products — thoughtfully selected to bring quality and value to your life.</p>

    <div class="product-grid">
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="product-card">
                <div id="product-image">
                    <img src="<?php echo $imageLinks[$row['id'] - 1]; ?>" alt="Product Image">
                </div>

                <div id="product-info">
                    <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                    <p>Category: <?php echo htmlspecialchars($row['category']); ?></p>

                    <a class="btn2" href="complaint.php?product_id=<?php echo $row['id']; ?>">Submit Complaint</a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<script>
    document.querySelectorAll(".product-card").forEach(card => {
        const img = card.querySelector("img");

        card.addEventListener("mouseover", () => {
            img.style.transform = "scale(1.15)";
            img.style.transition = "transform 0.3s ease";
        });

        card.addEventListener("mouseout", () => {
            img.style.transform = "scale(1)";
        });
    });
</script>

<?php include 'includes/footer.php'; ?>