<?php
    include_once('connect.php');
    header("Access-Control-Allow-Origin: *");
    header('Content-Type: application/json');

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $gameCode = $_POST['gameCode'];
    $currentUser = $_POST['currentUser'];

    try{
        //ONLY SERVES TO GET USER CODE
        $sql1 = "SELECT * FROM  tbluseraccount WHERE username='".$currentUser."'" ;
        $result = mysqli_query($connection, $sql1);
        $user_data = mysqli_fetch_array($result);
        $userCode = $user_data[0];

        $sql2 = "SELECT * FROM tblgamesbought WHERE userID='".$userCode."' AND gameBought='".$gameCode."'";
        $result2 = mysqli_query($connection, $sql2);
        $rows = mysqli_num_rows($result2);

        if($rows == 0){
            $sql = "INSERT into tblgamesbought(userID, gameBought) values('".$userCode."','".$gameCode."')";
            mysqli_query($connection, $sql);
            $response = array(
                'success' => true,
                'message' => "GAME CODE: {$gameCode} \n USER CODE: {$userCode}",
                'transactionStatus' => "bought"
            ); 
        }else{
            $response = array(
                'success' => true,
                'message' => "GAME CODE: {$gameCode} \n USER CODE: {$userCode}",
                'transactionStatus' => "alreadyBought"
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
?>