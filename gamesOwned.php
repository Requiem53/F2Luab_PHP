<?php
    include_once 'connect.php';
    // include_once 'api/getUserData.php';

    if(!isset($_SESSION['currentUser'])){
        header("Location: index.php");
    }else{
        $currentUser = $_SESSION['currentUser'];
    }
?>

<?php
    $sql1 = "SELECT * FROM  tbluseraccount WHERE username='".$currentUser."'" ;
    $result = mysqli_query($connection, $sql1);
    $user_data = mysqli_fetch_array($result);
    // $user_data = getUserDataFromUsername($currentUser);
    $userCode = $user_data[0];
    
    $resultTransaction = $connection->query("SELECT * from tblgamesbought WHERE userID = '".$userCode."'");
    //get game
    $gameIDs = array();
    while($rower = $resultTransaction->fetch_assoc()){
        $gameIDs[] = $rower['gameBought'];
    }
    if(count($gameIDs) > 0){
        $queryGameIDs = implode(',', $gameIDs);
        $getAllGames = $connection->query("SELECT * from tblpublishgame WHERE gameID IN ($queryGameIDs)");
        $numOfGames = mysqli_num_rows($getAllGames);
    }else{
        $numOfGames = 0;
    }
?>

<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js\jquery-3.7.1.js"></script>
    <title>Document</title>
</head>
<body>
<h2>Games Owned</h2>
<h2>Logged in as <?php echo $currentUser ?></h2>
<form method="post">
    <input type="text" name="newUsername" placeholder="Change Username"/>
    <button type="submit" name="btnChangeUsername">CHANGE</button>
</form>
    <table style="width:100%">
        <?php if($numOfGames > 0) {?>
        <tr>
            <th>Name of Game</th>
            <th>Description</th>
            <th>Price</th>
            <th>Developer</th>
            <th>Publisher</th>
        </tr>
        
        <?php while ($row = $getAllGames->fetch_assoc()): ?>
            <tr>
                <th><?php echo $row['gameID'] ?></th>
                <th><?php echo $row['nameofgame'] ?></th>
                <th><?php echo $row['description'] ?></th>
                <th><?php echo $row['price'] ?></th>
                <th><?php echo $row['developer'] ?></th>
                <th><?php echo $row['publisher'] ?></th>
                <th><button onclick="refundGame(<?php echo $row['gameID']?>, <?php echo "'" . $currentUser . "'"; ?>)">Refund Game</button></th>
            </tr>
        <?php endwhile; }?>
    </table>
    <a href="homepage.php"><span class="underline">Go back to homepage</span></a>
</body>
<script>

    function refundGame(code, user){
        $.post("api/sellGameBackend.php", 
            {
                gameCode: code,
                currentUser: user
            },
            function(data,status){
                data = JSON.stringify(data);
                data = JSON.parse(data);
                console.log("Data: " + JSON.stringify(data) + "\nStatus: " + JSON.stringify(status));
                location.reload();
            }
        );
    }
</script>
</html>

<?php
    if(isset($_POST['btnChangeUsername'])){	
        $newUsername = $_POST['newUsername'];

        $sql2 = "UPDATE tbluseraccount SET username='$newUsername' WHERE username='$currentUser'";
        $result = mysqli_query($connection, $sql2);
        $_SESSION['currentUser']= $newUsername;
        header("Refresh:0");
    }
?>