<?php
    $connect = new mysqli("localhost", "root", "", "db_beefarm");

    if($connect) {
        // echo "Database Connected";
    } else {
        // echo "database error";
    }
?>