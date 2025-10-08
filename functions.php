<?php

define("PAGE_HOME", "index.php");
define("PAGE_ACCOUNT", "account.php");

function getLoggedInPage() {
    $return = "";
    $return .= "<h1>Hello, you are logged in</h1>";
    return $return;
}

function getTop($title = "My Page") {
    $return = "";
    $return .= "<!DOCTYPE html>\n";
    $return .= "<html lang='en'>\n";
    $return .= "<head>\n";
    $return .= "<meta charset='UTF-8'>\n";
    $return .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>\n";
    $return .= "<link rel='stylesheet' href='style.css'>\n"; // ✅ correct path + spelling
    $return .= "<title>$title</title>\n";
    $return .= "</head>\n";
    $return .= "<body>\n";
    return $return;
}

function getEnd() {
    $return = "";
    $return .= "<script src='scripts/script.js'></script>\n"; // ✅ adjust path if needed
    $return .= "</body>\n";
    $return .= "</html>\n";
    return $return;
}
