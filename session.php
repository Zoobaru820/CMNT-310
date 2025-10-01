<?php

session_start();

$_SESSION['loggedIn'] = "true";

var_dump($_SESSION);