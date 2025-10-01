<?php
session_start();

$_SESSION['errors'] = array();
$_SESSION['loggedIn'] = false;

if (!isset($_POST['username']) || empty($_POST['username'])) {
	$_SESSION['errors'][] = "Please enter a username";
}
if (!isset($_POST['password']) || empty($_POST['password'])) {
	$_SESSION['errors'][] = "Please enter a password";
}

if ($_POST['username'] == "zoe") {
	$_SESSION['loggedIn'] = true;
	$_SESSION['username'] = $_POST['username']; //store username
	die(header("Location: account.php"));
} else {
	$_SESSION['errors'][] = "User not found or password incorrect";
}

if (count($_SESSION['errors']) > 0) {
	die(header("Location: index.php"));
}

