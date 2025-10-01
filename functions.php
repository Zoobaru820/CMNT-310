<?php

//todo" remove this when auth is ready
function getLoggedInPage () {
    $return = "";
    $return .= "<h1>Hello, you are logged in</h1>";
    return $return;
}

function getEnd() {
	$return = "";
	$return .= "</body>\n";
	$return .= "</html>\n";
    return $return;
}

function getTop($title="My Page",) {
	$return = ""; 
	$return .= "<!DOCTYPE html>\n";
$return .= "<html lang=\"en\">\n";
$return .= "<head>\n";
$return .= "<title>" . $title . "</title>\n";
$return .= "</head>\n";
$return .= "<body>\n";
return $return;
}

