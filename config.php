<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'upezzsmy_promoti');
    define('DB_PASSWORD', 'upezzsmy_promoti');
    define('DB_NAME', 'upezzsmy_promoti');
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    ini_set('display_errors', 1);
?>