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

    //NEED NULL HANDLING
    function getUserDataFromUsername($username){
        global $connection;
        $sql1 = "SELECT * FROM  tbluseraccount WHERE username='".$username."'" ;
        $result = mysqli_query($connection, $sql1);
        $user_data = mysqli_fetch_array($result);
        return $user_data;
    }

?>

