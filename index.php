<?php
session_start();
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
	die(header("Location: account.php"));
}
require_once("functions.php");

print getTop();

print "<h1>Hello World</h1>\n";

if (isset($_SESSION['errors']) && count($_SESSION['errors']) > 0) {
	foreach ($_SESSION['errors'] as $error) {
		print $error . "<br>";
	}
	$_SESSION['errors'] = array();
}

print "<form action='login-process.php' method='POST'>\n";
print "User: <input type='text' name='username'><br>\n";
print "Pass: <input type='password' name='password'><br>\n";
print "<input type='submit' name='submit_form'>\n";
print "</form>\n";

print getEnd();