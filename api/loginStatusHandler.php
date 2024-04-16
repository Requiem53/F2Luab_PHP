<?php
    include_once('../connect.php');

    header("Access-Control-Allow-Origin: *");
    header('Content-Type: application/json');

    $response = array(
        'success' => false,
        'message' => "EVERYTHING IS BROKEN"
    );

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    function isLoggedIn($username){
        
    }

    function goBackToIndex(){
        header("Location: index.php");
    }

?>