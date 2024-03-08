<?php
    $connection = new mysqli('localhost', 'root', '', 'dbluabf2');

    if(!$connection){
        die(mysqli_error($mysqli));
    }
?>