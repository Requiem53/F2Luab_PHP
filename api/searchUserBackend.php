<?php
include_once '../connect.php';
include_once('getUserData.php');

header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

$response = array(
    'success' => false,
    'message' => "EVERYTHING IS BROKEN"
);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$username = $_GET["user"];