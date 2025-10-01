<?php
session_start();

//check if authenticated
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
    die(header("Location: index.php"));
  
}

//requires
require_once("functions.php");

//gather information/backend data
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "zoe";

//build page
print getTop();

print "<h1>Welcome to your account page</h1>\n";
print "<p>You are successfully logged in.</p>\n";

//display output
print getEnd();
