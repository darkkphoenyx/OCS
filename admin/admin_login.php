<?php
session_start();
include '../includes/db.php';

$error = '';

// Redirect logged-in admins to the admin dashboard
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: admin_products.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();
    $admin = $result->fetch_assoc();

    if ($admin && password_verify($password, $admin['password'])) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $admin['username'];
        header("Location: admin_products.php");
        exit;
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <style>
        :root {
            --primary: #f85903;
            --secondary: #56ccf2;
            --btn-primary: #f85903;
            --btn-secondary: #df0700;
            --bg: #f2f2f2;
            --card-bg: #ffffff;
            --card-border: #e0e0e0;
            --text-primary: #003266;
            --text-secondary: #ff4500;
            --success: #27ae60;
            --danger: #eb5757;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background: var(--card-bg);
            border: 1px solid var(--card-border);
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            width: 360px;
            backdrop-filter: blur(4px);
        }

        h2 {
            margin-bottom: 1.5rem;
            color: var(--text-primary);
        }

        input {
            width: 100%;
            padding: 0.7rem;
            margin-bottom: 1.2rem;
            border: 1px solid var(--card-border);
            border-radius: 8px;
            font-size: 1rem;
            transition: border 0.3s;
        }

        input:focus {
            outline: none;
            border-color: var(--primary);
        }

        .btn {
            width: 100%;
            background: var(--btn-primary);
            color: #fff;
            padding: 0.75rem;
            font-size: 1rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: var(--text-secondary);
        }

        .error {
            color: var(--danger);
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <h2 id="login">Admin Login</h2>
        <?php if ($error): ?>
            <p class="error"><?= $error ?></p>
        <?php endif; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required />
            <input type="password" name="password" placeholder="Password" required />
            <button class="btn" type="submit">Login</button>
        </form>
    </div>
</body>

</html>