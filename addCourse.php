<?php
session_start();
require_once("WebServiceClient.php");
require_once(__DIR__ . "/../creds.php");


$_SESSION['errors'] = array();
$_SESSION['loggedIn'] = false;

if (!isset($_POST['username']) || empty($_POST['username'])) {
    $_SESSION['errors'] [] = "Please fill in the username";
}
if (!isset($_POST['password']) || empty($_POST['password'])) {
    $_SESSION['errors'] [] = "Please fill in the password";
}

// If we have validation errors, return to login page
if (count($_SESSION['errors']) > 0) {
    header("Location: login.php");
    exit();
}

$apikey = APIKEY;
$apihash = APIHASH;

// Call the authentication web service with the user's submitted credentials
$url = "https://cnmt310.classconvo.com/classreg/";
$client = new WebServiceClient($url);

$data = array(
    "username" => isset($_POST['username']) ? trim($_POST['username']) : '',
    "password" => isset($_POST['password']) ? trim($_POST['password']) : ''
);

$fields = array(
    "apikey" => $apikey,
    "apihash" => $apihash,
    "data" => $data,
    "action" => "authenticate",
);

$client->setPostFields($fields);

$result = $client->send();
$json = json_decode($result);

// Check if the response is valid JSON
if (json_last_error() !== JSON_ERROR_NONE) {
    $_SESSION['errors'][] = "Authentication service error. Please try again later.";
    header("Location: login.php");
    exit();
}

// Check authentication result
$authenticated = false;

var_dump($json);

if (isset($json->result) && $json->result == "Success") {
    $authenticated = true;
}

if ($authenticated) {
    $_SESSION['loggedIn'] = true;
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['baseRole'] = $json->data->user_role;
    if (isset($json->data) && is_object($json->data)) {
        $_SESSION['user'] = (array)$json->data;
    }
    header("Location: account.php");
    exit();
} else {
    $_SESSION['errors'][] = "Invalid username or password";
    header("Location: login.php");
    exit();
}