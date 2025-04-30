<?php
include 'includes/db.php';
include 'includes/navbar.php';
?>

<div class="container">
    <div id="homepage">
        <div class="home-left">
            <h2 id="home-left-header">
                Online <br>
                <span id="giant" style="color: #F85903">Complaint</span> System
            </h2>
            <p id="paragraph">The only place where your complaints are precious to us! If you have a complaint about any product, you're in the right place.</p>
        </div>
        <div class="home-right">
            <img id="image" src="/OCS/image/ocs-image1.png" alt="OCS image 1">
        </div>
    </div>
    <div id="homeToComplaint">
        <a href="/OCS/product.php" class="btn2" style="text-decoration: none; align-self: start;">Register Complaint</a>
    </div>

    <div id="buttom">
        <h2>Top Products</h2>
        <p>The products which are searched the most or the product with the highest customer satisfaction are listed.</p>
    </div>

    <div class="linker">
        <p>Most responsive products</p>
        <p id="middle">Customer satisfaction level</p>
        <p>Most resolved complaints</p>
    </div>
</div>

<?php
echo password_hash('admin123', PASSWORD_DEFAULT);
echo "<br>"
?>

<?php include 'includes/footer.php'; ?>