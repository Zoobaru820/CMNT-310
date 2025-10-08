<?php
session_start();
require_once('functions.php');

// check if user is authenticated
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome to the Customer Portal!</h1>
    <p>Hello! <?php echo htmlspecialchars($_SESSION['username'] ?? 'Customer'); ?></p>

    <nav>
        <ul>
            <li><a href="account.php">Go to Account Page</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <script src="scripts/script.js"></script>
</body>
</html>














<script src="script.js"></script>
