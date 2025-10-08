<?php
session_start();
require_once("functions.php");

// Check if user is authenticated
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: index.php");
    exit();
}

// Gather info
$username = $_SESSION['username'] ?? "zoe";

// Build page
print getTop("Account Page");

// Display content
print "<h1>Welcome to your account page, " . htmlspecialchars($username) . "!</h1>\n";
print "<p>You are successfully logged in.</p>\n";

print "<form action='logout.php' method='POST'>\n";
print "    <button type='submit' class='button'>Logout</button>\n";
print "</form>\n";

print "<p><a href='customer.php'>Go to Customer Portal</a></p>\n";

// Display end of page
print getEnd();
?>
