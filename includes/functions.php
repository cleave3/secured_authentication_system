<?php

    function escape ($string) {
        global $connection;
       return mysqli_real_escape_string($connection, $string); 
    };

    function display ($arg) {
        foreach ($arg as $fields) {
            echo "$fields <br>";
        }
    }

?>