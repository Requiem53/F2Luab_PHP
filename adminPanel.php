<?php
    include_once('connect.php');

    if(!isset($_SESSION['currentUser'])){
        header("Location: index.php");
    }else{
        $currentUser = $_SESSION['currentUser'];
    }
?>

<?php
    //TABLE
    $allFemaleUsers = $connection->query("SELECT tbluseraccount.acctid, tbluseraccount.username, tbluserprofile.firstname, 
    tbluserprofile.lastname, tbluserprofile.gender FROM tbluseraccount INNER JOIN tbluserprofile 
    ON tbluseraccount.acctid=tbluserprofile.acctid WHERE tbluserprofile.gender=\"Female\"");
    $numOfallFemaleUsers = mysqli_num_rows($allFemaleUsers); 

    $allGamesSortByPrice = $connection->query("SELECT * from tblpublishgame ORDER BY price DESC");
    $numOfPublishedGames = mysqli_num_rows($allGamesSortByPrice);

    $salesPerGame = $connection->query("SELECT tblpublishgame.nameofgame, Count(tblgamesbought.gameBought) as Sales FROM tblgamesbought 
    RIGHT JOIN tblpublishgame ON tblpublishgame.gameid=tblgamesbought.gameBought
    GROUP BY tblgamesbought.gameBought ORDER BY Sales DESC");

    //STATISTICS
    $totalUsers = $connection->query("SELECT COUNT(acctid) FROM tbluseraccount");
    $totalGames = $connection->query("SELECT COUNT(gameID) FROM tblpublishgame");
    $averageGamePrice = $connection->query("SELECT AVG(price) FROM tblpublishgame");

?>

<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js\jquery-3.7.1.js"></script>
    <link href="./css/adminPanel.css" rel="stylesheet">
    <title>Admin Panel</title>
</head>

<style>
    table, th {
        border: 1px solid black;
    }
</style>

<body>
    <h2>Logged in as <?php echo $currentUser?></h2>
    <h2>Admin Panel</h2>
    <h1 style="font-weight: bold;">TABLE</h1>

    <div style='background-color:#ffff00'>
        <center><p style="color:white"><h5>List of All Female Users</h5></p></center>
    </div>

    <table style="width:100%">
        <?php if($numOfallFemaleUsers > 0){?>
        <tr>
            <th>Account ID</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
        </tr>
        <?php while ($row = $allFemaleUsers->fetch_assoc()): ?>
            <tr>
                <th><?php echo $row['acctid'] ?></th>
                <th><?php echo $row['username'] ?></th>
                <th><?php echo $row['firstname'] ?></th>
                <th><?php echo $row['lastname'] ?></th>
                <th><?php echo $row['gender'] ?></th>
            </tr>
        <?php endwhile; }?>
    </table>

    <div style='background-color:#ffff00'>
        <center><p style="color:white"><h5>List of Games Published (Most Expensive to Cheapest)</h5></p></center>
    </div>

    <table style="width:100%">
        <?php if($numOfPublishedGames > 0){?>
        <tr>
            <th>Seq Number</th>
            <th>Name of Game</th>
            <th>Description</th>
            <th>Price</th>
            <th>Developer</th>
            <th>Publisher</th>
        </tr>
        <?php while ($row = $allGamesSortByPrice->fetch_assoc()): ?>
            <tr>
                <th><?php echo $row['gameID'] ?></th>
                <th><?php echo $row['nameofgame'] ?></th>
                <th><?php echo $row['description'] ?></th>
                <th><?php echo $row['price'] ?></th>
                <th><?php echo $row['developer'] ?></th>
                <th><?php echo $row['publisher'] ?></th>
            </tr>
        <?php endwhile; }?>
    </table>

    <div style='background-color:#ffff00'>
        <center><p style="color:white"><h5>Game Sales (Most to Least)</h5></p></center>
    </div>

    <table style="width:100%">
        <?php if($numOfPublishedGames > 0){?>
        <tr>
            <th>Name of Game</th>
            <th>Sales</th>
        </tr>
        <?php while ($row = $salesPerGame->fetch_assoc()): ?>
            <tr>
                <th><?php echo $row['nameofgame'] ?></th>
                <th><?php echo $row['Sales'] ?></th>
            </tr>
        <?php endwhile; }?>
    </table>

    <h1 style="font-weight: bold;">STATISTICS</h1>
    <h2><span style="font-weight: bold;">Total number of users: </span> <?php echo $totalUsers->fetch_column()?></h2>
    <h2><span style="font-weight: bold;">Total number of games: </span> <?php echo $totalGames->fetch_column()?></h2>
    <h2><span style="font-weight: bold;">Average price of games: </span> <?php echo $averageGamePrice->fetch_column()?></h2>
    <a href="homepage.php"><span class="underline">Go back to homepage</span></a>
</body>
</html>