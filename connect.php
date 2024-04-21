<?php
    $connection = new mysqli('localhost', 'root', '', 'dbluabf2');

    if(!$connection){
        die(mysqli_error($mysqli));
    }

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
?>