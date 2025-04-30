<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OCS - Deepesh</title>
    <link rel="stylesheet" href="/OCS/css/style.css" />
</head>

<body>

    <nav id="navbar">
        <a class="icon" href="/OCS/homepage.php">OCS</a>
        <div id="navbar-elements">
            <a href="/OCS/homepage.php" class="<?php echo ($currentPage === 'homepage.php') ? 'active' : ''; ?>">Home</a>
            <a href="/OCS/product.php" class="<?php echo ($currentPage === 'product.php') ? 'active' : ''; ?>">Products</a>
            <a href="/OCS/complaint.php" class="<?php echo ($currentPage === 'complaint.php') ? 'active' : ''; ?>">Complaints</a>
            <a href="/OCS/faqs.php#faq" class="<?php echo ($currentPage === 'faqs.php') ? 'active' : ''; ?>">FAQ's</a>
            <div class="login">
                <div id="homeToAdmin">
                    <a href="/OCS/admin/admin_login.php" class="btn2" style="color: white;">Login</a>
                </div>
            </div>
        </div>
        <!-- Mobile Toggle -->
        <div id="mobile">
            <img id="hamburger-icon" src="/OCS/image/align-right.png" alt="hamburger" />
        </div>
    </nav>
    <!-- Mobile Nav Links -->
    <div id="mobile-nav">
        <a href="/OCS/homepage.php" class="<?php echo ($currentPage === 'homepage.php') ? 'active' : ''; ?>">Home</a>
        <a href="/OCS/product.php" class="<?php echo ($currentPage === 'product.php') ? 'active' : ''; ?>">Products</a>
        <a href="/OCS/complaint.php" class="<?php echo ($currentPage === 'complaint.php') ? 'active' : ''; ?>">Complaints</a>
        <a href="/OCS/faqs.php#faq" class="<?php echo ($currentPage === 'faqs.php') ? 'active' : ''; ?>">FAQ's</a>
    </div>

    <script>
        window.onload = () => {
            const hamburger = document.getElementById("hamburger-icon");
            const mobileNav = document.getElementById("mobile-nav");
            hamburger.addEventListener("click", () => {
                mobileNav.classList.toggle("show");
            });
        };
    </script>
</body>

</html>