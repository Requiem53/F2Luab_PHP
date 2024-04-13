<?php
    $gameCode = isset($_POST['gameCode']);
    
    $response = array(
        'success' => true,
        'message' => "GAME CODE: {$gameCode}"
    );

    echo json_encode($response);
?>