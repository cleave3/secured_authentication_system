<?php
    define("DB_HOST", 'localhost');
    define("DB_USER", 'root');
    define("DB_PASS", '');
    define("DB_NAME", 'registration');

    //db connection
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if(!$connection) {
        die("db connection Failed". mysqli_error());
    }
?>