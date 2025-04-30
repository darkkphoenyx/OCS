<?php include 'includes/header.php'; ?>
<div id="complaint">
    <form id="complaint-form" class="card" method="POST" action="submit_complaint.php">
        <label>Name:</label><input type="text" name="name" placeholder="John Doe" required><br>
        <label>Email:</label><input type="email" name="email" placeholder="JohnDoe@gmail.com" required><br>
        <label>Product:</label>
        <select name="product_id" required>
            <?php
            include 'includes/db.php';
            $selectedId = isset($_GET['product_id']) ? $_GET['product_id'] : '';
            $res = mysqli_query($conn, "SELECT id, name FROM products");
            echo "<option value='' hidden disabled " . ($selectedId === '' ? "selected" : "") . ">-Select a product-</option>";
            while ($row = mysqli_fetch_assoc($res)) {
                $selected = ($row['id'] == $selectedId) ? "selected" : "";
                echo "<option value='{$row['id']}' $selected>{$row['name']}</option>";
            }
            ?>

        </select><br>
        <div class="textarea-wrapper">
            <label>Message:</label><br>
            <textarea id="message" name="message" placeholder="This product is not as expected." maxlength="500" required></textarea>
            <span id="char-count">0 / 500</span>
        </div>


        <input class="btn2" id="complaint-submit" type="submit" value="Submit Complaint">
    </form>
    <div class="image-container">
        <img id="image" src="/OCS/image/ocs-image2.png" alt="image 2">
    </div>
</div>
<script>
    const textarea = document.getElementById('message');
    const charCount = document.getElementById('char-count');
    const maxLength = 500;

    const updateCountAndResize = () => {
        charCount.textContent = `${textarea.value.length} / ${maxLength}`;
        textarea.style.height = "auto"; // reset height
        textarea.style.height = textarea.scrollHeight + "px"; // grow to content
    };

    textarea.addEventListener('input', updateCountAndResize);
    window.addEventListener('DOMContentLoaded', updateCountAndResize);
</script>





<?php include 'includes/footer.php'; ?>