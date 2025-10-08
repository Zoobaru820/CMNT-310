<?php
require_once("functions.php");

session_start();

if(isset($_SESSION['loggedIn'])) {
    $_SESSION['loggedIn'] = false;
    unset($_SESSION['loggedIn']);
}

$_SESSION = array();
session_write_close();

die(header("Location: " . HOME));