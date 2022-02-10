<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'upezzsmy_newuser');
    define('DB_PASSWORD', '05980751@m');
    define('DB_NAME', 'upezzsmy_promotion');
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>