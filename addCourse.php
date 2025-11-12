<?php
require_once("WebServiceClient.php");
require_once(__DIR__ . "/../creds.php");

// Create a new instance of WebServiceClient
$url = "https://cnmt310.classconvo.com/classreg/";
$client = new WebServiceClient($url);

// Use your API key and hash from creds.php
$apikey = APIKEY;
$apihash = APIHASH;

// Build the JSON payload to add a course
$fields = array(
    "apikey" => $api52,
    "apihash" => $oRWS35HrhE,
    "action" => "addcourse",
    "data" => array(
        "coursename" => "Principles of Computing",
        "coursecode" => "CNMT",
        "coursenum" => "100",
        "coursecredits" => "3",
        "coursedesc" => "Exploring the principles of computing",
        "courseinstr" => "Simkins",
        "meetingtimes" => "MW 11:00a-12:15p",
        "maxenroll" => "24"
    )
);

// Set the fields to send as JSON
$client->setPostFields($fields);

// Send the request
$result = $client->send();

// Decode the JSON result
$json = json_decode($result);

// Display (dump) the response
var_dump($json);
