<?php
    include 'connect.php';
    $title = 'Dashboard';
    session_start();
?>

<?php
    $mysqli = new mysqli('localhost', 'root','', 'dbluabf2') or die (mysqli_error($mysqli));

    if(isset($_SESSION['currentUser'])){
        $currentUser = $_SESSION['currentUser'];
    }

    $sql1 = "SELECT * FROM  tbluseraccount WHERE username='".$currentUser."'" ;
    $result = mysqli_query($connection, $sql1);
    $user_data = mysqli_fetch_array($result);
    $userCode = $user_data[0];
    
    $resultTransaction = $mysqli->query("SELECT * from tblgamesbought WHERE userID = '".$userCode."'") or die ($mysqli->error);
    //$resultset = $mysqli->query("SELECT * from tblpublishgame") or die ($mysqli->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Games Owned</h2>
    <table style="width:100%">
        <tr>
            <th>Name of Game</th>
            <th>Description</th>
            <th>Price</th>
            <th>Developer</th>
            <th>Publisher</th>
        </tr>
        <?php while ($row = $resultset->fetch_assoc()): ?>
            <tr>
                <th><?php echo $row['gameID'] ?></th>
                <th><?php echo $row['nameofgame'] ?></th>
                <th><?php echo $row['description'] ?></th>
                <th><?php echo $row['price'] ?></th>
                <th><?php echo $row['developer'] ?></th>
                <th><?php echo $row['publisher'] ?></th>
                <th><button onclick="buyGame(<?php echo $row['gameID']?>, <?php echo "'" . $currentUser . "'"; ?>)">Buy Game</button></th>
            </tr>
        <?php endwhile; ?>
    </table>
    <a href="homepage.php"><span class="underline">Go back to homepage</span></a>
</body>
</html>