<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCS - Deepesh</title>
    <link rel="stylesheet" href="/OCS/css/style.css">

</head>

<body>
    <nav id="navbar">
        <div id="navbar-elements">
            <h1 class="icon">OCS</h1>
            <a href="/OCS/homepage.php" class="<?php echo ($currentPage === 'homepage.php') ? 'active' : ''; ?>">Home</a>
            <a href="/OCS/index.php" class="<?php echo ($currentPage === 'index.php') ? 'active' : ''; ?>">Products</a>
            <a href="/OCS/complaint.php" class="<?php echo ($currentPage === 'complaint.php') ? 'active' : ''; ?>">Complaints</a>
            <a href="/OCS/faqs.php#faq" class="<?php echo ($currentPage === 'faqs.php' && strpos($_SERVER['REQUEST_URI'], '#faq') !== false) ? 'active' : ''; ?>">FAQ's</a>
        </div>
        <div class="login">
            <button class="btn1">Signup</button>
            <button class=" btn2">Login</button>
        </div>
    </nav>
</body>

</html>