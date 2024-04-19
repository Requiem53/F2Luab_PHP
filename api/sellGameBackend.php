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

    $gameCode = $_POST['gameCode'];
    $currentUser = $_POST['currentUser'];

    try{
        $user_data = getUserDataFromUsername($currentUser);
        $userCode = $user_data[0];

        //Checks to see if existing transaction exists
        $sql2 = "SELECT * FROM tblgamesbought WHERE userID='".$userCode."' AND gameBought='".$gameCode."'";
        $result2 = mysqli_query($connection, $sql2);
        $rows = mysqli_num_rows($result2);

        if($rows == 0){
            $response = array(
                'success' => false,
                'message' => "GAME CODE: {$gameCode} \n USER CODE: {$userCode}",
                'refundStatus' => "wtf how did you refund"
            ); 
        }else{
            $sql = "DELETE FROM tblgamesbought WHERE userID='".$userCode."' AND gameBought='".$gameCode."'";
            mysqli_query($connection, $sql);
            $response = array(
                'success' => true,
                'message' => "GAME CODE: {$gameCode} \n USER CODE: {$userCode}",
                'refundStatus' => "refunded"
            );
        }
    }catch(Error $e){
        $response = array(
            'success' => false,
            'error' => $e->getMessage()
        ); 
        echo json_encode($response);
    }

    echo json_encode($response);