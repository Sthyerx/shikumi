<?php
    // Hide errors
    $hideErrors = false;
    if($hideErrors){
        error_reporting(0);
        ini_set('display_errors', 0);
    }

    // MySQL constants
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'password');
    define('DB_DATABASE', 'shikumi');
    $db =  new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
?>